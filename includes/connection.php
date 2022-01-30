<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "fursnclawsdb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db))
{
	die("Failed to connect!");
}
