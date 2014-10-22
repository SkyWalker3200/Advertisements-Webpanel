<?php
require("config.php");
require("database_connect.php");
require("session.php");
require("colors.php");
$pagenum = $_GET['page'];
 if (!(isset($pagenum))) 

 { 

 $pagenum = 1; 

 } 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Advertisements - List Advertisements</title>
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
$q = mysql_query("SELECT * FROM `adz`;", $link);
echo "<table width=\"500\">
    <tr>
        <td>ID</td>
        <td>Game</td>
        <td>Server</td>
        <td>Advertisement Text</td>
    </tr>";
while ($f = mysql_fetch_array($q)){
$m = mysql_query("SELECT * FROM `servers` WHERE `id` = ". $f['server'] ."", $link);
$d = mysql_fetch_array($m);
$a = mysql_query("SELECT * FROM `games` WHERE `id` = ". $f['game'] ."", $link);
$b = mysql_fetch_array($a);
echo "
    <tr>
        <td>". $f['id'] ."</td>
        <td>". $b['game'] ."</td>
        <td>". $d['server_name'] ."</td>
        <td>". strtr($f['text'],$arr)  ."</td>
    </tr>";
}
echo "</table><div style=\"aligm:right;\"><a href=\"?action=add\">Add Advertisement</a></div>";
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
