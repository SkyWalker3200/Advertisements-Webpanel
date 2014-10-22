<?php
require("config.php");
require("session.php");
// include("check.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Advertisements - Home</title>
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
<img src="images/home/4a85824e_chat1.png" align="center"/>
<!------------------------------------------------------------------------------------------>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>

</body>
</html>
