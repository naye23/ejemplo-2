<?php
	function conexion(){
	$host = "host=containers-us-west-141.railway.app";
	$port = "port=5508";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=04ZMZMurwTfxsYFDM5QF";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>