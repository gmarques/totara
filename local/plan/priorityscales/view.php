<?php

require_once('../../../config.php');
require_once($CFG->libdir.'/adminlib.php');
require_once('lib.php');
require_js(array($CFG->wwwroot.'/local/js/lib/jquery-1.3.2.min.js',));

///
/// Setup / loading data
///

$id = required_param('id', PARAM_INT); // Priority Scale ID
$moveup = optional_param('moveup', 0, PARAM_INT); // Move up
$movedown = optional_param('movedown', 0, PARAM_INT); // Move down
$default = optional_param('default', 0, PARAM_INT); // Set default value
$delete = optional_param('delete', 0, PARAM_INT); //Item to be deleted
$confirm = optional_param('confirm', 0, PARAM_INT); //Confirmation of delete

// Page setup and check permissions
admin_externalpage_setup('priorityscales');

$sitecontext = get_context_instance(CONTEXT_SYSTEM);
require_capability('local/plan:managepriorityscales', $sitecontext);

if (!$priority = get_record('dp_priority_scale', 'id', $id)) {
    error(get_string('error:priorityscaleidincorrect', 'local_plan'));
}

// Delete logic
if($delete) {
    if(!$value = get_record('dp_priority_scale_value', 'id', $delete)) {
       print_error('error:invalidpriorityscalevalueid', 'local_plan');
    }

    if($confirm) {
        if (!confirm_sesskey()) {
            print_error('confirmsesskeybad', 'error');
        }

        begin_sql();
        if(!delete_records('dp_priority_scale_value', 'id', $delete)) {
            rollback_sql();
            totara_set_notification(get_string('error:deletedpriorityscalevalue', 'local_plan'), $CFG->wwwroot.'/local/plan/priorityscales/view.php?id='.$priority->id);
        }

        $sql = "UPDATE {$CFG->prefix}dp_priority_scale_value SET sortorder=sortorder-1 WHERE priorityscaleid={$priority->id} AND sortorder > {$value->sortorder}";
        if(!execute_sql($sql, false)) {
            rollback_sql();
            totara_set_notification(get_string('error:deletedpriorityscalevalue', 'local_plan'), $CFG->wwwroot.'/local/plan/priorityscales/view.php?id='.$priority->id);
        }

        commit_sql();
        totara_set_notification(get_string('deletedpriorityscalevalue', 'local_plan'), $CFG->wwwroot.'/local/plan/priorityscales/view.php?id='.$priority->id, array('style' => 'notifysuccess'));
    } else {
        $returnurl = "{$CFG->wwwroot}/local/plan/priorityscales/view.php?id={$priority->id}";
        $deleteurl = "{$CFG->wwwroot}/local/plan/priorityscales/view.php?id={$priority->id}&amp;delete={$delete}&amp;confirm=1&amp;sesskey=" . sesskey();

        admin_externalpage_print_header();
        $strdelete = get_string('deletecheckpriorityvalue', 'local_plan');

        notice_yesno(
            "{$strdelete}<br /><br />".format_string($value->name),
            $deleteurl,
            $returnurl
        );

        print_footer();
        exit;
    }
}


// Cache text
$str_edit = get_string('edit');
$str_delete = get_string('delete');
$str_moveup = get_string('moveup');
$str_movedown = get_string('movedown');
$str_changeto = get_string('changeto', 'local_plan');
$str_set = get_string('set', 'local_plan');


///
/// Process any actions
///

/// Move a value up or down
if ((!empty($moveup) or !empty($movedown))) {

    // Can't reorder a scale that's in use
    if ( dp_priority_scale_is_used($priority->id) ) {
        $returnurl = "{$CFG->wwwroot}/local/plan/priorityscales/view.php?id={$priority->id}";
        print_error('error:noreorderpriorityinuse', 'local_plan', $returnurl);
    }

    $move = NULL;
    $swap = NULL;

    // Get value to move, and value to replace
    if (!empty($moveup)) {
        $move = get_record('dp_priority_scale_value', 'id', $moveup);
        $resultset = get_records_sql("
            SELECT *
            FROM {$CFG->prefix}dp_priority_scale_value
            WHERE
            priorityscaleid = {$priority->id}
            AND sortorder < {$move->sortorder}
            ORDER BY sortorder DESC", 0, 1
        );
        if ( $resultset && count($resultset) ){
            $swap = reset($resultset);
            unset($resultset);
        }
    } else {
        $move = get_record('dp_priority_scale_value', 'id', $movedown);
        $resultset = get_records_sql("
            SELECT *
            FROM {$CFG->prefix}dp_priority_scale_value
            WHERE
            priorityscaleid = {$priority->id}
            AND sortorder > {$move->sortorder}
            ORDER BY sortorder ASC", 0, 1
        );
        if ( $resultset && count($resultset) ){
            $swap = reset($resultset);
            unset($resultset);
        }
    }

    if ($swap && $move) {
        // Swap sortorders
        begin_sql();
        if (!(    set_field('dp_priority_scale_value', 'sortorder', $move->sortorder, 'id', $swap->id)
            && set_field('dp_priority_scale_value', 'sortorder', $swap->sortorder, 'id', $move->id)
        )) {
            error(get_string('error:updatepriorityscalevalue', 'local_plan'));
        }
        commit_sql();
    }
}

// Handle default setting
if ($default) {
    $value = $default;

    // Check value exists
    if (!get_record('dp_priority_scale_value', 'id', $value)) {
        error('error:priorityscalevalueidincorrect', 'local_plan');
    }

    // Update
    $s = new object();
    $s->id = $priority->id;
    $s->defaultid = $default;

    if (!update_record('dp_priority_scale', $s)) {
        error(get_string('error:updatingpriorityscale', 'local_plan'));
    } else {
        // Fetch the update scale record so it'll show up to the user.
        $priority = get_record('dp_priority_scale', 'id', $id);
    }
}

///
/// Display page
///

// Load values
$values = get_records('dp_priority_scale_value', 'priorityscaleid', $priority->id, 'sortorder');

$navlinks = array();    // Breadcrumbs
$navlinks[] = array('name'=>get_string("priorityscales", 'local_plan'),
                    'link'=>"{$CFG->wwwroot}/local/plan/priorityscales/index.php",
                    'type'=>'misc');
$navlinks[] = array('name'=>format_string($priority->name), 'link'=>'', 'type'=>'misc');

admin_externalpage_print_header('', $navlinks);

// Display info about scale
print_heading(format_string($priority->name), 'left', 1);
echo '<p>'.format_string($priority->description, FORMAT_HTML).'</p>';

// Display priority scale values
if ($values) {
    echo "<form id=\"dppriorityscaledefaultform\" action=\"{$CFG->wwwroot}/local/plan/priorityscales/view.php?id={$id}\" method=\"POST\">\n";
    echo "<input type=\"hidden\" name=\"id\" value=\"{$id}\" />\n";

    $table = new object();
    $table->class = 'generaltable';
    $table->data = array();

    // Headers
    $table->head = array(get_string('name'));
    $table->align = array('left');

    $table->head[] = get_string('defaultvalue', 'local_plan').' '.
        helpbutton('priorityscaledefault', 'Help with Default Value', 'local_plan', true, false, '', true);
    $table->align[] = 'center';

    $table->head[] = get_string('edit');
    $table->align[] = 'center';

    $spacer = "<img src=\"{$CFG->wwwroot}/pix/spacer.gif\" class=\"iconsmall\" alt=\"\" />";
    $numvalues = count($values);

    // Add rows to table
    $count = 0;
    foreach ($values as $value) {
        $count++;

        $row = array();
        $row[] = $value->name;

        $buttons = array();

        // Is this the default value?
        if ($value->id == $priority->defaultid) {
            $row[] = '<input type="radio" name="default" value="'.$value->id.'" checked="checked" />';
        }
        else {
            $row[] = '<input type="radio" name="default" value="'.$value->id.'" />';
        }

        $buttons[] = "<a href=\"{$CFG->wwwroot}/local/plan/priorityscales/editvalue.php?id={$value->id}\" title=\"$str_edit\">".
            "<img src=\"{$CFG->pixpath}/t/edit.gif\" class=\"iconsmall\" alt=\"$str_edit\" /></a>";

        $buttons[] = "<a href=\"{$CFG->wwwroot}/local/plan/priorityscales/view.php?id={$priority->id}&amp;delete={$value->id}\" title=\"$str_delete\">".
            "<img src=\"{$CFG->pixpath}/t/delete.gif\" class=\"iconsmall\" alt=\"$str_delete\" /></a>";

        // If value can be moved up
        if ($count > 1) {
            $buttons[] = "<a href=\"{$CFG->wwwroot}/local/plan/priorityscales/view.php?id={$priority->id}&moveup={$value->id}\" title=\"$str_moveup\">".
                "<img src=\"{$CFG->pixpath}/t/up.gif\" class=\"iconsmall\" alt=\"$str_moveup\" /></a>";
        } else {
            $buttons[] = $spacer;
        }

        // If value can be moved down
        if ($count < $numvalues) {
            $buttons[] = "<a href=\"{$CFG->wwwroot}/local/plan/priorityscales/view.php?id={$priority->id}&movedown={$value->id}\" title=\"$str_movedown\">".
                "<img src=\"{$CFG->pixpath}/t/down.gif\" class=\"iconsmall\" alt=\"$str_movedown\" /></a>";
        } else {
            $buttons[] = $spacer;
        }

        $row[] = implode($buttons, ' ');
        $table->data[] = $row;
    }

    print_heading(get_string('scales', 'local_plan'));

    $row = array();
    $row[] = '';
    $row[] = '<noscript><input type="submit" value="Update" /></noscript>';
    $row[] = '';
    $row[] = '';
    $table->data[] = $row;

    print_table($table);
        echo "</form>\n";
        ?>
<script type="text/javascript">
    $("#dppriorityscaledefaultform input:radio").change(
        function(eventObject){
            $("#dppriorityscaledefaultform").submit();
        }
    );

    // On page load, remove last row in table (it's for non-js users only)
    $(function() {
        $('form#dppriorityscaledefaultform table.generaltable tr.lastrow').remove();
    });
</script>
<?php
} else {
    echo '<br /><div>'.get_string('nopriorityscalevalues','local_plan').'</div><br />';
}

// Navigation / editing buttons
echo '<div class="buttons">';

// Print button for creating new priority scale value
$options = array('priorityscaleid' => $priority->id);
print_single_button($CFG->wwwroot.'/local/plan/priorityscales/editvalue.php', $options, get_string('addnewpriorityvalue', 'local_plan'), 'get');

echo '</div>';

/// and proper footer
print_footer();