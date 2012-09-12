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

// Valid order values in reservation retreival
$order = array('start_date', 'name', 'starttime', 'endtime', 'created', 'modified');
$res = $db->get_user_reservations(Auth::getCurrentID(), CmnFns::get_value_order($order), CmnFns::get_vert_order());

$user->viewCustomRes(Auth::getCurrentID(), 1);

if(Auth::isAdmin())
{
$admin = new Admin('reservations');
$admin->user = $user;

	printCpanelBr();
//	$admin->approveReservations();
 // $admin->approvePayments();
	
	
	$admin->listUsers();
} else {
	printCpanelBr();
	
	if ($conf['app']['use_perms']) {
	showTrainingTable($db->get_user_permissions(Auth::getCurrentID()), $db->get_err());
	}
	// view past reservations 0 = past 1 = furture
	//		$user->viewCustomRes(Auth::getCurrentID(), 0);
}


printCpanelBr();

showInvitesTable($db->get_user_invitations(Auth::getCurrentID(), true), $db->get_err());
printCpanelBr();

showParticipatingTable($db->get_user_invitations(Auth::getCurrentID(), false), $db->get_err());

printCpanelBr();


// my edits



//past reservations
	

	
	
 // $res = $db->get_past_reservations(Auth::getCurrentID(), CmnFns::get_value_order($order), CmnFns::get_vert_order());
//  showReservationTable($res, $db->get_err());	// Print out My Reservations

endDataDisplayCol();
$t->endMain();
$t->printHTMLFooter();
?>