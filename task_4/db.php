<?php 

$db = new mysqli('localhost', 'root', '', 'rai_task4');

if(!$db){
	die ("Could not connect to mysql\n".$connect->connection_error());
}
