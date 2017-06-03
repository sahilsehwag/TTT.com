<?php

	$mysql_host = 'localhost';
	$mysql_username = 'root';
	$mysql_password = '';
	$mysql_db = 'triplet';

	if(!@mysql_connect($mysql_host, $mysql_username, $mysql_password) || !mysql_select_db($mysql_db)){
		die('Error: Could Not Connect To Database');
	}

?>