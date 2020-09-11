<?php
$timezone =0;
$now = date("Y-m-d", time()+$timezone);
$time = date("H:i:s", time()+$timezone);
list($year, $month, $day) = explode('-', $now);
list($hour, $minute, $second) = explode(':', $time);
$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
include ('jdf.php');
$mrnimaw = jdate("time: H:i:s - date: Y/m/d",$timestamp);
echo $mrnimaw;
?>
