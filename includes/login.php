<?php
require("config.php");
require("session.php");

$link = mysql_connect($data['cfg']['host'], $data['cfg']['username'], $data['cfg']['password']);
mysql_select_db($data['cfg']['database'], $link);

$username = $_POST['username'];
$password = $_POST['password'];
$remember = $_POST['remember_me'];
$password_md5 = md5($password);


// check for account credentials
$result = mysql_query("SELECT * FROM `users` WHERE `username` = '". $username ."' AND `password` = '". $password_md5 ."';", $link);
$num_rows = mysql_num_rows($result);

if ($num_rows == 0){
header("Location: ./?err=1");
}else{
// account enabled
$result = mysql_query("SELECT * FROM `users` WHERE `username` = '". $username ."' AND `password` = '". $password_md5 ."' AND `enable` = 1;", $link);
$num_rows = mysql_num_rows($result);
if ($num_rows == 1){
if ($remember == "remember_me"){
setcookie("loggedin",1,strtotime('+30 days'));
setcookie("username",$username,strtotime('+30 days'));
}else{
setcookie("loggedin",1);
setcookie("username",$username);
}
header("Location: ../?action=home");
}else{
header("Location: ./?err=3");
}
}
?>