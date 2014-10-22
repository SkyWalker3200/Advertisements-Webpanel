<?php
require("config.php");
require("session.php");
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
<?php
$link = mysql_connect($data['cfg']['host'], $data['cfg']['username'], $data['cfg']['password']);
mysql_select_db($data['cfg']['database'], $link);
$q = mysql_query("SELECT * FROM `servers`;", $link);
echo "<table width=\"500\">
    <tr>
        <td>ID</td>
        <td>Server</td>
        <td>Action</td>
    </tr>";
while ($f = mysql_fetch_array($q)){
// ignore ID 1, because it is for ALL servers
if ($f['id'] == 1){}else{
echo "
    <tr>
        <td>". $f['id'] ."</td>
        <td>". $f['server_name'] ."</td>
        <td><a href=\"?action=edit&id=". $f['id'] ."\">Edit</a> - <a href=\"?action=conf&id=". $f['id'] ."\">View Config</a> - <a href=\"?action=del&id=". $f['id'] ."\">Delete</a></td>
    </tr>";
}}
echo "</table>";
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
