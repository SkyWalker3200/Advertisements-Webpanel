<?php
require("config.php");
$latest_ver = file_get_contents("http://updates.tss3.us/latest.txt");
if ($data['cfg']['version'] < $latest_ver){
?>
An update is available!<br />
Your version: <b><?php echo $data['cfg']['version']; ?></b><br />
Latest Version: <span style="color:red;"><?php echo $latest_ver; ?></span>
<?php
}elseif ($data ['cfg']['version'] == $latest_ver){
?>
No updates needed.<br />
Your version: <b><?php echo $data['cfg']['version']; ?></b><br />
Latest Version: <span style="color:green;"><?php echo $latest_ver; ?></span>
<?php
}
?>