<?php
require("config.php");
require("session.php");
if ($_COOKIE['loggedin'] == 1){
?>
<a href="./?action=home">Home</a><BR>
<a href="./?action=listservers">Manage Servers</a><BR>
<a href="./?action=listadz">Manage Adverts</a><BR>
<a href="./?action=logout">Logout</a><BR>
<BR>
<BR>
<BR>
<?php
include("updates.php");}else{
?>
<a href="./?action=home">Home</a><BR>
<?php
}
?>