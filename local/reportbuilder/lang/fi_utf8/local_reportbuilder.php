<?php
// local_reportbuilder.php - created with Totara langimport script version 1.0

$string['advanced'] = 'Lisäasetukset?';
$string['at'] = 'kohteessa';
$string['baseactivity'] = 'Pohja-aktiviteetti';
$string['basedon'] = 'Ryhmän peruste';
$string['baseitem'] = 'Perusosio';
$string['baseitemdesc'] = 'Tämän ryhmän saatavilla olevat koostetiedot perustuvat aktiviteetin \'<a href=\"{$a->url}\">{$a->activity}</a>\' kysymyksiin.';
$string['bydateenable'] = 'Näytä rekisterit päivämäärän mukaan';
$string['bytrainerenable'] = 'Näytä rekisterit kouluttajan mukaan';
$string['byuserenable'] = 'Näytä rekisterit käyttäjän mukaan';
$string['completedorgenable'] = 'Näytä suoritukset, jotka on tehty käyttäjän organisaatiossa';
$string['confirmcoldelete'] = 'Oletko varma, että haluat poistaa tämän sarakkeen?';
$string['confirmfilterdelete'] = 'Oletko varma, että haluat poistaa tämän suotimen?';
$string['coursecategoryid'] = 'Kurssikategorian tunnus';
$string['courseid'] = 'Kurssitunnus';
$string['coursenotset'] = 'Kurssia ei ole määritelty';
$string['coursetagenable'] = 'Näytä kurssit kurssitunnisteen perusteella lajiteltuna';
$string['coursetagids'] = 'Kurssitunnisteiden tunnukset';
$string['currentfinancial'] = 'Nykyinen tilikausi';
$string['currentorgenable'] = 'Näytä käyttäjän organisaation henkilöstön suoritukset';
$string['currentposenable'] = 'Näytä käyttäjän kanssa samassa asemassa olevan henkilöstön suoritukset';
$string['currentsearchparams'] = 'Tallennettavat asetukset';
$string['error:bad_sesskey'] = 'Virhe: avain ei kelpaa';
$string['error:columnoptiontypexandvalueynotfoundinz'] = 'Saraketta, jonka tyyppi on \"{$a->type}\"  ja arvo \"{$a->value}\", ei löytynyt lähteestä \"{$a->source}\"';
$string['error:failedtoremovetempfile'] = 'Väliaikaista raporttitiedostoa ei voitu poistaa';
$string['error:filteroptiontypexandvalueynotfoundinz'] = 'Suodinta, jonka tyyppi on \"{$a->type}\"  ja arvo \"{$a->value}\", ei löytynyt lähteestä \"{$a->source}\"';
$string['error:groupnotcreatedinitfail'] = 'Ryhmää ei voitu luoda - taulukkoa ei luotu!';
$string['error:groupnotcreatedpreproc'] = 'Ryhmää ei voitu luoda - prosessointi ei onnistunut!';
$string['error:invalidreportid'] = 'Kelpaamaton  raportin tunnus';
$string['error:invalidreportscheduleid'] = 'Kelpaamaton ajastetun raportin tunnus';
$string['error:invalidsavedsearchid'] = 'Kelpaamaton tallennetun haun tunnus';
$string['error:invaliduserid'] = 'Kelpaamaton käyttäjän tunnus';
$string['error:joinsforfiltertypexandvalueynotfoundinz'] = 'Filtterin liitetyt raportit, joiden tyyppi on \"{$a->type}\" ja arvo \"{$a->value}\", ei löytynyt lähteestä \"{$a->source}\"';
$string['error:joinsfortypexandvalueynotfoundinz'] = 'Sarakkeisin liitetyt raportit, joiden tyyppi on \"{$a->type}\" ja arvo \"{$a->value}\", ei löytynyt lähteestä \"{$a->source}\"';
$string['error:joinxhasdependencyyinz'] = 'Raportin liitoksen nimeen \"{$a->join}\" liittyy riippuvuus \"{$a->dependency}\", jota ei ole liitettyjen raporttien listalla lähteelle \"{$a->source}\"';
$string['error:joinxisreservediny'] = 'Raportin liitoksen nimi \"{$a->join}\" lähteessä \"{$a->source}\" on SQL:lle varattu termi. Vaihda nimi.';
$string['error:joinxusedmorethanonceiny'] = 'Raportin liitoksen nimi \"{$a->join}\" on käytössä useammin kuin kerran lähteessä \"{$a->source}\"';
$string['error:nocontentrestrictions'] = 'Tälle lähteelle ei ole sisällönrajauksia. Jotta voit käyttää rajoituksia, pyydä kehittäjää lisäämään tarvittava koodi \'$a\' lähteeseen.';
$string['error:nopermissionsforscheduledreport'] = 'Ajastetun raportin virhe: Käyttäjä $a->userid ei voi tarkastella raporttia $a->reportid.';
$string['error:nosources'] = 'Ei yhtään lähdettä. Sinun tulee lisätä vähintään yksi lähde ennenkuin voit lisätä raportteja. Pyydä kehittäjää lisäämään tarvittavat tiedostot koodivarastoon.';
$string['error:propertyxmustbesetiny'] = 'Ominaisuus \"{$a->property}\" tulee olla luokassa \"{$a->class}\"';
$string['error:updatescheduledreport'] = 'Ajastettua raporttia päivitettäessä tapahtui virhe';
$string['excludecoursetags'] = 'Älä ota mukaan suorituksia, joissa on tunniste';
$string['exportoptions'] = 'Raportin ulosvientivalinnat';
$string['exportxls'] = 'Vie Excel-muotoon';
$string['filter'] = 'Suodin';
$string['filter_deleted'] = 'Suodin poistettu';
$string['filter_moved'] = 'Suodin siirretty';
$string['filters'] = 'Suotimet';
$string['filters_updated'] = 'Suotimet päivitetty';
$string['format'] = 'Muoto';
$string['globalsettings'] = 'Yleiset asetukset';
$string['globalsettingsupdated'] = 'Yleiset asetukset päivitetty';
$string['groupconfirmdelete'] = 'Oletko varma, että haluat poistaa tämän ryhmän?';
$string['groupcontents'] = 'Tässä ryhmässä on {$a->count}  palauteaktiviteetti(a), joilla on virallinen tunniste <strong>\'{$a->tag}\'</strong>:';
$string['groupdeleted'] = 'Ryhmä poistettu';
$string['groupname'] = 'Ryhmän nimi';
$string['grouptag'] = 'Ryhmän tunniste';
$string['heading'] = 'Otsikko';
$string['help:columnsdesc'] = 'Alaosan valinnat määrittävät sen, mitkä sarakkeet näkyvät raportissa ja mitkä sarakkeet on nimetty.';
$string['help:restrictionoptions'] = 'Allaolevat ruksit määrittelevät pääsyn tähän raporttiin ja siitä näkyvät suoritukset. Jos mitään vaihtoehtoa ei ole valittu, mikään tulokset eivät näy. Klikkaa ohje-painiketta, jos tarvitset lisätietoa.';
$string['help:searchdesc'] = 'Alaosan valinnat määrittävät sen, mitkä hakuvalinnat näkyvät raportin yläosassa.';
$string['hidden'] = 'Piilota omissa raporteissa';
$string['includechildorgs'] = 'Ota mukaan suoritukset lapsiorganisaatioista';
$string['includechildpos'] = 'Ota mukaan suoritukset lapsiasemista';
$string['includecoursetags'] = 'Ota mukaan suoritukset tunnisteella';
$string['includeemptydates'] = 'Ota mukaan suoritukset, joissa ei ole päivämäärää';
$string['includerecordsfrom'] = 'Ota mukaan suoritukset täältä:';
$string['includetrainerrecords'] = 'Tiettyjen kouluttajien suoritukset';
$string['includeuserrecords'] = 'Tiettyjen käyttäjien suoritukset';
$string['is'] = 'on';
$string['isbelow'] = 'alla';
$string['isnt'] = 'ei ole';
$string['isnttaggedwith'] = 'ei tunnistetta';
$string['istaggedwith'] = 'tunnisteella';
$string['last30days'] = 'Edelliset 30 päivää';
$string['lastchecked'] = 'Edellinen käsittelypäivä';
$string['lastfinancial'] = 'Edellinen tilikausi';
$string['manageactivitygroups'] = 'Hallinnoi aktiviteettiryhmiä';
$string['managereports'] = 'Hallinnoi raportteja';
$string['managername'] = 'Esimiehen nimi';
$string['monthly'] = 'Kuukausittain';
$string['movedown'] = 'Siirrä alas';
$string['moveup'] = 'Siirrä ylös';
$string['myreports'] = 'Omat raportit';
$string['name'] = 'Nimi';
$string['newgroup'] = 'Luo uusi aktiviteettiryhmä';
$string['newreport'] = 'Uusi raportti';
$string['newreportcreated'] = 'Uusi raportti luotu. Valitse \'Asetukset\' muokataksesi suotimia ja sarakkeita';
$string['next30days'] = 'Seuraavat 30 päivää';
$string['nocolumnsyet'] = 'Yhtään saraketta ei ole vieäl lisätty - lisää sarake valitsemalla sarakkeen nimi alasvetovalikosta.';
$string['nocontentrestriction'] = 'Näytä kaikki suoritukset';
$string['nodeletereport'] = 'Raporttia ei voitu poistaa';
$string['noembeddedreports'] = 'Ei sulautettuja raportteja. Sulautetut raportit on sisällytetty sivuihin ja kehittäjä määrittelee ne.';
$string['noemptycols'] = 'Sinun tulee määritellä sarakkeen otsikko';
$string['nofiltersyet'] = 'Hakukenttiä ei ole luoto - lisää hakukenttä valitsemalla hakusana alasvetovalikosta.';
$string['nogroups'] = 'Ei aktiviteettiryhmiä';
$string['noheadingcolumnsdefined'] = 'Otsikkosarakkeita ei ole määritelty';
$string['noneselected'] = 'Ei yhtään valittuna';
$string['nopermission'] = 'Sinulla ei ole oikeutta tarkastella tätä sivua';
$string['noreloadreport'] = 'Raportin asetuksia ei voitu palauttaa alkuperäisiksi';
$string['norepeatcols'] = 'Voit lisätä vain yhden kutakin saraketta';
$string['norepeatfilters'] = 'Voit lisätä vain yhden kutakin suodinta';
$string['noreports'] = 'Raportteja ei ole luotu. Voi luoda raportin käyttäen allaolevaa lomaketta.';
$string['noreportscount'] = 'Tämä ryhmä ei ole linkitetty mihinkään raporttiin';
$string['norestriction'] = 'Kaikki käyttäjät näkevät tämän raportin';
$string['norestrictionsfound'] = 'Ei rajoituksia. Pyydä kehittäjää lisäämään rajoituksia tiedostoon /local/reportbuilder/sources/$a/restrictionoptions.php';
$string['noresultsfound'] = 'Ei tuloksia';
$string['noscheduledreports'] = 'Ajastettuja raportteja ei ole';
$string['noshortnameorid'] = 'Kelpaamaton raportin tunnus tai lyhenne';
$string['notags'] = 'Virallisia tunnisteita ei ole. Luo yksi tai useampia tunnisteita, joiden avulla voit luoda aktiviteettiryhmiä.';
$string['notset'] = 'Ei asetettu...';
$string['notyetchecked'] = 'Ei käsitelty';
$string['nouserreports'] = 'Sinulla ei ole yhtään raporttia. Sivustosi hallinnoija määrittelee pääsyn raportteihin. Jos sinulta puuttuu raportteja, ota yhteyttä hallinnoijaan.';
$string['occurredafter'] = 'tapahtumat jälkeen';
$string['occurredbefore'] = 'tapahtumat ennen';
$string['occurredprevfinancialyear'] = 'viime tilikautena';
$string['occurredthisfinancialyear'] = 'tänä tilikautena';
$string['odsformat'] = 'ODS-muoto';
$string['on'] = 'ajankohta';
$string['onlydisplayrecordsfor'] = 'Näytä suoritukset vain käyttäjälle';
$string['onthe'] = 'ajankohta';
$string['options'] = 'Valinnat';
$string['or'] = 'tai';
$string['orsuborg'] = '(tai alaorganisaatio)';
$string['orsubpos'] = '(tai ala-asema)';
$string['participantscurrentorg'] = 'Osallistujan nykyinen organisaatio';
$string['participantscurrentorgbasic'] = 'Osallistujan nykyinen organisaatio (perus)';
$string['participantscurrentpos'] = 'Osallistujan nykyinen asema';
$string['participantscurrentposbasic'] = 'Osallistujan nykyinen asema (perus)';
$string['publicallyavailable'] = 'Anna muiden käyttäjien nähdä';
$string['recordsperpage'] = 'Suoritusten määrä per sivu';
$string['refreshdataforthisgroup'] = 'Päivitä tämän ryhmän suoritustiedot';
$string['reloadreport'] = 'Raportin asetukset on palautettu alkuperäisiksi';
$string['report'] = 'Raportti';
$string['report:completiondate'] = 'Suorituspäivä';
$string['report:coursetitle'] = 'Kurssin otsikko';
$string['report:enddate'] = 'Loppumispäivämäärä';
$string['report:learner'] = 'Oppija';
$string['report:learningrecords'] = 'Suoritukset';
$string['report:nodata'] = 'Ei hakutuloksia näille kriteereille, aloitus- ja loppumispäivämäärä';
$string['report:organisation'] = 'Toimisto';
$string['report:startdate'] = 'Aloituspäivämäärä';
$string['reportbuilder'] = 'Raporttityökalu';
$string['reportbuilder:managereports'] = 'Luo, muokkaa ja poista raporttityökalun raportteja';
$string['reportbuilderglobalsettings'] = 'Raporttityökalun yleiset asetukset';
$string['reportcolumns'] = 'Raportin sarakkeet';
$string['reportconfirmdelete'] = 'Oletko varma, että haluat poistaa tämän raportin?';
$string['reportconfirmreload'] = 'Tämä on on sulautettu raportti, joten et voi poistaa sitä (sen voi poistaa hallinnoija). Voit palauttaa raportin asetukset alkuperäisiksi. Haluatko jatkaa?';
$string['reportcontents'] = 'Tässä raportissa ovat mukana seuraavat hakuehdot täyttävät suoritukset:';
$string['reportcount'] = '$a tähän ryhmään perustuvaa raportti(a)';
$string['reportname'] = 'Raportin nimi';
$string['reports'] = 'Raportit';
$string['reportsettings'] = 'Raportin asetukset';
$string['reportshortname'] = 'Lyhenne';
$string['reportsto'] = 'raportoi käyttäjälle';
$string['reporttitle'] = 'Raportin otsikko';
$string['reporttype'] = 'Raportin tyyppi';
$string['reportupdated'] = 'Raportti päivitetty';
$string['restoredefaults'] = 'Palauta alkuperäiset asetukset';
$string['restrictaccess'] = 'Rajaa pääsyä';
$string['restrictcontent'] = 'Raportin sisältö';
$string['restriction'] = 'Rajoitukset';
$string['restrictionswarning'] = '<strong>Varoitus:</strong> Mikäli mitään näistä vaihtoehdoista ei valita, kaikki käyttäjät näkevät kaikki saatavilla olevat raportit tästä lähteestä.';
$string['roleswithaccess'] = 'Roolit, joilla on oikeus nähdä tämä raportti';
$string['savedsearch'] = 'Tallennettu haku';
$string['savedsearchconfirmdelete'] = 'Oletko varma, että haluat poistaa tämän tallennetun haun?';
$string['savedsearchdeleted'] = 'Tallennettu haku poistettiin';
$string['savedsearchdesc'] = 'Antamalla tälle haulle nimen löydät sen myöhemmin helposti tai voit tallentaa sen suosikkeihisi.';
$string['savedsearches'] = 'Tallennetut haut';
$string['savedsearchmessage'] = 'Vain hakukriteeriä \'$a\' vastaavat tiedot näytetään';
$string['savesearch'] = 'Tallenna tämä haku';
$string['schedule'] = 'Aikataulu';
$string['scheduledaily'] = 'Päivittäin';
$string['scheduledreportmessage'] = 'Liitteenä kopio raportista \'$a->reportname\' muodossa $a->exporttype. $a->savedtext

Voit tarkastella raporttia myös tämän linkin kautta: 

$a->reporturl

Saat tämän raportin ajastetusti: $a->schedule.
Poistaaksesi tai päivittääksesi ajastetun raportin asetuksia, seuraa tätä linkkiä:

$a->scheduledreportsindex';
$string['scheduledreports'] = 'Ajastetut raportit';
$string['scheduledreportsettings'] = 'Ajastetun raportin asetukset';
$string['schedulemonthly'] = 'Kuukausittain';
$string['schedulenotset'] = 'Aikataulua ei ole määritelty';
$string['scheduleweekly'] = 'Viikottain';
$string['search'] = 'Hae';
$string['searchby'] = 'Hakuehdot';
$string['searchfield'] = 'Hakukenttä';
$string['searchname'] = 'Haun nimi';
$string['searchoptions'] = 'Raportin hakuvalinnat';
$string['selectsource'] = 'Valitse lähteet...';
$string['settings'] = 'Asetukset';
$string['shortnametaken'] = 'Tämä lyhenne on jo käytössä';
$string['showbasedonx'] = 'Näytä suoritukset, jotka perustuvat tähän: $a';
$string['showbycompletedorg'] = 'Lajitteluperuste: organisaatio suoritushetkellä';
$string['showbycoursetag'] = 'Lajitteluperuste: kurssitunniste';
$string['showbycurrentorg'] = 'Lajitteluperuste: nykyinen organisaatio';
$string['showbycurrentpos'] = 'Lajitteluperuste: nykyinen asema';
$string['showbydate'] = 'Lajitteluperuste: päivämäärä';
$string['showbytrainer'] = 'Lajitteluperuste: kouluttaja';
$string['showbyuser'] = 'Lajitteluperuste: käyttäjä';
$string['showbyx'] = 'Lajitteluperuste: $a';
$string['showhidecolumns'] = 'Näytä/piilota sarakkeita';
$string['showing'] = 'Näytetään';
$string['showrecordsbeloworgonly'] = 'Vain käyttäjän organisaatiota alempi henkilöstö';
$string['showrecordsbelowposonly'] = 'Vain käyttäjän asemaa alempi henkilöstö';
$string['showrecordsinorg'] = 'Vain käyttäjän organisaation henkilöstö';
$string['showrecordsinorgandbelow'] = 'Käyttäjän organisaation ja alempi henkilöstö';
$string['showrecordsinpos'] = 'Vain käyttäjän kanssa samassa asemassa olevat';
$string['showrecordsinposandbelow'] = 'Käyttäjän kanssa samalla tasolla ja alempana oleva henkilökunta';
$string['sorting'] = 'Järjestäminen';
$string['source'] = 'Lähde';
$string['systemcontext'] = 'Käyttäjillä tulee olla rooli systeemissä';
$string['taggedx'] = 'Tunnisteella \'{$a}\'';
$string['thefuture'] = 'Tulevaisuus';
$string['thepast'] = 'Menneisyys';
$string['trainerownrecords'] = 'Näytät suoritukset, joissa käyttäjä on kouluttaja';
$string['trainerstaffrecords'] = 'Suoritukset, joissa yksi käyttäjän suorista raporteista on kouluttaja';
$string['type'] = 'Tyyppi';
$string['type_course'] = 'Kurssi';
$string['type_course_category'] = 'Kategoria';
$string['type_course_custom_fields'] = 'Kurssin lisäkentät';
$string['type_tags'] = 'Tunnisteet';
$string['type_user'] = 'Käyttäjä';
$string['type_user_profile'] = 'Käyttäjän profiili';
$string['uniquename'] = 'Yksilöllinen nimi';
$string['updatescheduledreport'] = 'Ajastettu raportti päivitetty';
$string['useraddress'] = 'Käyttäjän osoite';
$string['usercity'] = 'Käyttäjän kaupunki';
$string['usercountry'] = 'Käyttäjän kotimaa';
$string['userdepartment'] = 'Käyttäjän osasto';
$string['userfirstname'] = 'Käyttäjän etunimi';
$string['userfullname'] = 'Käyttäjän koko nimi';
$string['usergenerated'] = 'Käyttäjän luoma';
$string['usergeneratedreports'] = 'Käyttäjän luomat raportit';
$string['userid'] = 'Käyttäjän tunnus';
$string['useridnumber'] = 'Käyttäjän tunnusnumero';
$string['userinstitution'] = 'Käyttäjän instituutio';
$string['userlastlogin'] = 'Käyttäjän viimeisin sisäänkirjautuminen';
$string['userlastname'] = 'Käyttäjän sukunimi';
$string['username'] = 'Käyttäjätunnus';
$string['usernamelink'] = 'Käyttäjän koko nimi (linkitetty profiiliin)';
$string['usernamelinkicon'] = 'Käyttäjän koko nimi (linkitetty profiiliin ikonilla)';
$string['userownrecords'] = 'Käyttäjnä omat suoritukset';
$string['userphone'] = 'Käyttäjän puhelinnumero';
$string['usersjobtitle'] = 'Käyttäjän tehtävänimike';
$string['usersmanagername'] = 'Käyttäjän esimiehen nimi';
$string['usersorgid'] = 'Käyttäjän organisaation tunnus';
$string['usersorgname'] = 'Käyttäjän organisaation nimi';
$string['usersorgpathids'] = 'Käyttäjän organisaatiopolun tunnukset';
$string['userspos'] = 'Käyttäjän asema';
$string['usersposid'] = 'Käyttäjän aseman tunnus';
$string['userspospathids'] = 'Käyttäjän asemapolun tunnukset';
$string['userstaffrecords'] = 'Käyttäjän raporttien suoritukset';
$string['value'] = 'Arvo';
$string['viewreport'] = 'Tarkastele tätä raporttia';
$string['viewsavedsearch'] = 'Tarkastele tallennettua hakua...';
$string['weekly'] = 'Viikottain';
$string['withcontentrestrictionall'] = 'Näytä suoritukset, jotka täyttävät <b>kaikki</b> alla merkityt kriteerit';
$string['withcontentrestrictionany'] = 'Näytä suoritukset, jotka täyttävät <b>minkä tahansa</b> alla merkityistä kriteereistä';
$string['withrestriction'] = 'Vain tietyt käyttäjät näkevät tämän raportin (katso alla ketkä)';
$string['xlsformat'] = 'Excel-muodossa';
$string['xofyrecord'] = 'Kaikista suorituksista {$a->unfiltered} näytetään suodatetut {$a->filtered}';
$string['xofyrecords'] = 'Näytetään {$a->filtered} suoritusta kaikista {$a->unfiltered} suorituksista';
$string['xrecord'] = 'Suoritus $a';
$string['xrecords'] = '$a suoritusta näytetään';

?>