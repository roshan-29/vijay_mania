
<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "roshanvj";
$dbname = "movieflix";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
