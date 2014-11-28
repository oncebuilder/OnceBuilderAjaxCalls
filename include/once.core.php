<?
/*
 * Version: 1.0, 31.05.2012
 * by Adam Wysocki, goldpaid777@gmail.com
 *
 * Copyright (c) 2014 Adam Wysocki
 *
 *	This is simply JS -> PHP connector command switch
 *
*/

// Initialize connector class
$once = new once($_CONFIG);

switch($_GET['o']){
	case 'get_once_json':
		// you may set and filter vars before
		$once->set_data(array(
			"id" => intval($_GET['id']),
			"text" => $_GET['text']
		));
		$once->get_once_json();
	break;
	case 'get_once_text':
		// you may include vars or not
		$once->get_once_text();
	break;
	default:
		echo 'wrong connector command';
	break;
}
?>