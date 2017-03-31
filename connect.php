<?php
$host = "178.62.65.140";
$user = "duvacdhqsx";
$pass = "yh3AUhQc2t";
$dbname = "duvacdhqsx";


$link = mysql_connect("178.62.65.140","avi24july1994", "yh3AUhQc2t")

        or die("Could not connect");

$db = mysql_select_db($dbname, $link)
		or die("Could not select database");

?>
