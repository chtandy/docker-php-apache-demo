<?php
$ip = $_SERVER['SERVER_ADDR'];
echo "IP ADDR is: $ip", "<br>";
echo "PHP Version: " . phpversion(). "<br>";
$DB_HOPST = (getenv('DBHOST')?:'192.168.0.1');
echo "<b> Mariadb Server Host: </b>" . (getenv('DBHOST')?:'192.168.0.1');
?>
