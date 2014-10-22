<?php
require("config.php");
require("database_connect.php");
require("session.php");
// get post vars
$func = $_POST['func'];

// check for function
if ($func !== "adz"){
header("Location: ../?err=6");
exit;
}else{
$game = $_POST['game'];
$server = $_POST['servers'];
$advert = $_POST['advert'];
mysql_query("INSERT INTO `tf2_adz`.`adz` (`id`, `game`, `server`, `text`) VALUES (NULL, '". $game ."', '". $server ."', '". $advert ."'); ");
// check if added
$c = mysql_query();
header("Location: ?action=listadz&");
}
?>