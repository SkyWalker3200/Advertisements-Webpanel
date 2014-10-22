<?php
switch ($action) {
  case "login":
    include("./includes/login.php");
    break;
  case "logout":
    include("./includes/logout.php");
    break;
  case "home":
  if ($_COOKIE['loggedin'] == 1){
    include("./includes/home.php");
    exit;
    }
    break;
  case "add":
  if ($_COOKIE['loggedin'] == 1){
    include("./includes/add.php");
    exit;
    }
    break;
  case "listadz":
  if ($_COOKIE['loggedin'] == 1){
    include("./includes/listadz.php");
    exit;
    }
    break;
  case "listservers":
  if ($_COOKIE['loggedin'] == 1){
    include("./includes/listservers.php");
    exit;
    }
    break;
  case "conf":
  if ($_COOKIE['loggedin'] == 1){
    include("./includes/conf.php");
    exit;
    }
    break;
  case "post":
  if ($_COOKIE['loggedin'] == 1){
    include("./includes/post.php");
    exit;
    }
    break;
  default:
}
?>