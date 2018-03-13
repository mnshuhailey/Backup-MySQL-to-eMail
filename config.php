<?php


/***************************************************
	Database settings
****************************************************/

	$db_server			= 'localhost';				// "localhost", 
 	$db_name 			= 'database';				// Database name, leave empty for 'all databases'
	$db_user 		    = 'username';				// Database username
	$db_pass 		    = 'password';				// Database password



/***************************************************
	E-mail settings
****************************************************/

 	$website            = 'mohamadlab.ml';		    	// Your site's domain (without www. part)
	$send_to 		    = 'you@gmail.com';		        // backup file will be sent to?
	$from 		        = 'real.address@' . $website;	// some hosting providers won’t let you send backups from invalid e-mail address


/***************************************************
    Misc options
****************************************************/

 	$full_path      = '/home/username/public_html'; // Full path to folder where you are running the script, usually "/home/username/public_html"
 	
 	$delete_backup	= true;	// delete gziped database from server after sending?

    $send_log       = true;							
    	// send follow-up report?
 	// - true = send log file to an e-mail after each backup transfer
 	// - false = don't send log file, just leave it on the server

