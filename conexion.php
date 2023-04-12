<?php
	function conexion(){
	$host = "host=containers-us-west-52.railway.app";
	$port = "port=5630";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=IeyBrA1pevJAMZijU5un";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>