<?php
require("config.php");
require("includes/session.php");

// system pages
$action = $_GET['action'];
$err = $_GET['err'];
include("includes/pages.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Advertisements - Login</title>
	<link rel=stylesheet type="text/css" href="style.css">
</head>

<body bottommargin="0" leftmargin="0" marginheight="0" marginwidth="0" rightmargin="0" topmargin="0" background="images/background.jpg">

<table width="780" height="143" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="780">
<img src="images/templogotop.jpg" width="780" height="143" border="0" alt="">
		</td>
	</tr>
</table>

<table width="775" cellpadding="0" cellspacing="0" border="0">
	<tr valign="top">
		<td width="175">
<table width="175" cellpadding="4" cellspacing="0" border="0"><tr valign="top"><td width="175">
<BR />
<?php include("includes/menu.php"); ?>

</td></tr></table>
		</td>
		
		<td width="600">
			<table width="600" cellpadding="10" cellspacing="5" border="0">
				<tr valign="top">
					<td width="600">
<!------------------------ Content zone, add your content below ---------------------------->
<?php
if ($data['cfg']['enable'] == 0){
echo "The panel is disabled!";
}
if ($err == 1){
echo "<div style=\"color=red\">Login incorrect!</div>";
}
if ($err == 2){
echo "<div style=\"color=red\">Cannot connect to database!</div>";
}
if ($err == 3){
echo "<div style=\"color=red\">Account disabled!</div>";
}
if ($err == 4){
echo "<div style=\"color=red\">You are not logged in!</div>";
}
if ($err == 5){
echo "<div style=\"color=red\">Logged out!</div>";
}
if ($err == 6){
echo "<div style=\"color=red\">An unknown error occurred!<br /><a href=\"?action=home\">Return Home</a></div>";
}
if ($data['cfg']['enable'] == 1 && $_COOKIE['loggedin'] == 0){
?>
<form id="login" name="login" method="post" action="?action=login">
<div id="tableContainer-1">

  <div id="tableContainer-1">
    <table id="myTable" border="0">
      <tr>
        <td>Username</td><td><input type="text" name="username" id="username" /></td>
      </tr>
      <tr>
        <td>Password</td><td><input type="password" name="password" id="password" /></td>
      </tr>
      <tr>
        <td>Remember Me</td><td><input type="checkbox" name="remember_me" id="remember_me" value="remember_me" /></td>
      </tr>
    </table>
  </div><input type="submit" name="submit" id="submit" value="Login"/>
</div>
</form>
<?php
}
?>
<!------------------------------------------------------------------------------------------>	
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
