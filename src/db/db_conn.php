<?php

$sname= "db";
$unmae= "root";
$password = "example";

$db_name = "starbase";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}