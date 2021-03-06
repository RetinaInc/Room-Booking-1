<?php
/**
* This file is the control panel, or "home page" for logged in users.
* It provides a listing of all upcoming reservations
*  and functionality to modify or delete them. It also
*  provides links to all other parts of the system.
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 03-30-06
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/

include_once('lib/Template.class.php');
include_once('lib/Utility.class.php');
include_once('templates/cpanel.template.php');
include_once('lib/Admin.class.php');
include_once('templates/admin.template.php');



if (!Auth::is_logged_in()) {
    Auth::print_login_msg();	// Check if user is logged in
}

$t = new Template(translate('My Control Panel'));
$db = new DBEngine();

$t->printHTMLHeader();
$t->printWelcome();
$t->startMain();

$user = new User(Auth::getCurrentID());
$is_group_admin = $user->is_group_admin();
// Break table into 2 columns, put quick links on left side and all other tables on the right
startQuickLinksCol();
showQuickLinks(Auth::isAdmin(), $is_group_admin);		// Print out My Quick Links
startDataDisplayCol();

$order = array('number');
$announcements = $db->get_announcements(mktime());

showAnnouncementTable( $announcements, $db->get_err() );

printCpanelBr();


	
		$user->viewCustomRes(Auth::getCurrentID(), 0);
printCpanelBr();

//past reservations
	

	
	
 // $res = $db->get_past_reservations(Auth::getCurrentID(), CmnFns::get_value_order($order), CmnFns::get_vert_order());
//  showReservationTable($res, $db->get_err());	// Print out My Reservations

endDataDisplayCol();
$t->endMain();
$t->printHTMLFooter();
?>