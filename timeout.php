<?php   

include_once('lib/Template.class.php');
include_once('lib/Utility.class.php');
include_once('templates/cpanel.template.php');
include_once('lib/Admin.class.php');
include_once('templates/admin.template.php');

function curPageName() {
 return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}


if (curPageName() == 'index.php') {
	
}
else if(!Auth::isAdmin()) {
   session_start();
     
    // set timeout period in seconds
    $inactive = 900;
     
    // check to see if $_SESSION['timeout'] is set
    if(isset($_SESSION['timeout']) ) {
    $session_life = time() - $_SESSION['timeout'];
    if($session_life > $inactive)
    { session_destroy(); header("Location: index.php?timeout=true"); }
    }
    $_SESSION['timeout'] = time(); 
	}
	
	?>