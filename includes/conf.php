<?php
require("config.php");
require("session.php");
$id = $_GET['id'];
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Advertisements - List Servers</title>
	<link rel=stylesheet type="text/css" href="css/style.css">
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
Welcome, <?php echo $_COOKIE['username']; ?>!
<!------------------------ Menu section, links go below ---------------------------->
<BR>
<BR>
<?php include("menu.php"); ?>
<!--------------------------------------------------------------------------------->

</td></tr></table>
		</td>
		
		<td width="600">
			<table width="600" cellpadding="10" cellspacing="5" border="0">
				<tr valign="top">
					<td width="600">
<!------------------------ Content zone, add your content below ---------------------------->
<?php
$link = mysql_connect($data['cfg']['host'], $data['cfg']['username'], $data['cfg']['password']);
mysql_select_db($data['cfg']['database'], $link);
$q = mysql_query("SELECT * FROM `servers` WHERE `id` = ". $id .";", $link);
echo "<form id=\"conf\" name=\"conf\">";
  

while ($f = mysql_fetch_array($q)){
echo "<textarea name=\"textarea\" id=\"textarea\" cols=\"100\" rows=\"20\">// SERVER ID FOR ADZ
// PUT THIS IN addons/sourcemod/config/adz/serverid.txt
// ID IS
". $id ."
</textarea>";
}
echo "</form><br /><a href=\"#\" onClick=\"javascript:window.history.back();\"><- Go Back</a>";
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
