<?php
require("config.php");
require("database_connect.php");
$q = mysql_query("SELECT * FROM adz WHERE game='1' AND server='1' OR server='2';", $link);
while($a = mysql_fetch_array($q)){
echo $a['text'];echo "<br />";
}
?>