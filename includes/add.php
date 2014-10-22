<?php
require("session.php");
require("database_connect.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Advertisements - Add New Advertisement</title>
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
<?php include("user.php"); ?>
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
<form id="add_adz" name="add_adz" method="post" action="?action=post">
<input type="hidden" name="func" value="adz" />
<table>
    <tr>
        <td><label for="servers">Select Server</label></td>
        <td><select name="servers" id="servers">
<?php
$q = mysql_query("SELECT * FROM `servers`;", $link);
while ($f = mysql_fetch_array($q)){
echo "<option value=\"". $f['id'] ."\">". $f['server_name'] ."</option>";
}
?>
</select></td>
    </tr>
    <tr>
        <td><label for="game">Select Game</label></td>
        <td><select name="game" id="game">
<?php
$q = mysql_query("SELECT * FROM `games`;", $link);
while ($f = mysql_fetch_array($q)){
echo "<option value=\"". $f['id'] ."\">". $f['game'] ."</option>";
}
?>
</select></td>
    </tr>
    <tr>
        <td><label for="location">Message Location</label></td>
        <td><select name="location" id="location">
<?php
$q = mysql_query("SELECT * FROM `locations`;", $link);
while ($f = mysql_fetch_array($q)){
echo "<option value=\"". $f['loc'] ."\">". $f['location_title'] ."</option>";
}
?>
</select></td>
    </tr>
    <tr>
        <td><label for="advert">Advertisement Text</label></td>
        <td><textarea name="advert" id="advert" cols="100" rows="5"></textarea></td>
    </tr>
</table>
<input type="submit" value="Add Advertisement"/>
</form>
<!------------------------------------------------------------------------------------------>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
