<?php

require_once('../../../../config.php');
require_once($CFG->dirroot.'/local/dialogs/dialog_content_hierarchy.class.php');

$userid = required_param('userid', PARAM_INT);

///
/// Setup / loading data
///

// Setup page
require_login();

//get guest user for exclusion purposes
$guest = guest_user();

// Load potential managers for this user
$managers = get_records_sql(
    "
        SELECT
            u.id,
            ".sql_fullname('u.firstname', 'u.lastname')." AS fullname
        FROM
            {$CFG->prefix}user u
        WHERE
            u.deleted = 0
        AND u.id != {$guest->id}
        AND u.id != {$userid}
        ORDER BY
            u.firstname,
            u.lastname
    "
);


///
/// Display page
///

$dialog = new totara_dialog_content();
$dialog->search_code = '/hierarchy/prefix/position/assign/manager_search.php';
$dialog->items = $managers;
$dialog->lang_file = 'manager';
$dialog->customdata['current_user'] = $userid;

echo $dialog->generate_markup();