<?php
/*
THIS FILE KEEPS CHECKING INFORMATION FROM DATABASE, IF YOU DELETE SOMEONE IN THE DATABASE, THEY WILL BE LOGGED OUT.s
*/
require("../config.php");
require("database.php");
$result = mysql_query("SELECT * FROM `users` WHERE `username` = '". $_COOKIE['username'] ."' AND `enable` = 1;", $link);
$num_rows = mysql_num_rows($result);
if ($num_rows == 0){
include("logout.php")
}
?>