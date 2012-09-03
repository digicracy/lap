<?php

//read what mysql server to use
$configfile = "mysql";
$result=parse_ini_file($configfile);

//read mysql db information
$mysql_info=parse_ini_file($result['server_ip']);

//connect to db

mysql_connect($result['server_ip'],$mysql_info['server_user'],$mysql_info['server_pass']);
mysql_select_db($mysql_info['server_db']);

?>
