<?php
	function conexion(){
	$host = "host=containers-us-west-15.railway.app";
	$port = "port=5551";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=Ks6UacnaxJUO2P67KwOb";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>