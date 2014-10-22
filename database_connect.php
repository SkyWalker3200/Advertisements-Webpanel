<?php
$link = mysql_connect($data['cfg']['host'], $data['cfg']['username'], $data['cfg']['password']);
mysql_select_db($data['cfg']['database'], $link);
?>