<?php
$ip = $_SERVER['SERVER_ADDR'];
echo "<b>Container IP is: $ip", "<br>";
echo "<b>PHP Version: " . phpversion(). "<br>";
$DB_HOPST = (getenv('DBHOST')?:'192.168.0.1');
echo "<b> DB Server Host: </b>" . (getenv('DBHOST')?:'192.168.0.1');
?>
