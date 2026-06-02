<?php
header('Content-Type: text/plain');
$time = microtime(true);
$pass = password_hash('Hello',CRYPT_BLOWFISH,array("cost"=>14));
echo "Server Hostname : ".gethostname();
echo "\nHash Calculation Time : ".(microtime(true) - $time)." Second";
echo "\nPassword Hash Result : ".$pass;
?>