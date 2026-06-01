<?php
header('Content-Type: text/plain');

date_default_timezone_set("Asia/Seoul");

echo "ELB Test Page\n\n";
echo date(DATE_RFC822) . "\n\n";

$idleCpu = exec('vmstat 1 2 | awk \'{ for (i=1; i<=NF; i++) if ($i=="id") { getline; getline; print $i }}\'');
echo "Current CPU Load: " . (100 - $idleCpu) . "%\n\n";

echo "Last Client IP: ".$_SERVER['REMOTE_ADDR']."\n";
echo "Server Public IP = ".$_SERVER['HTTP_HOST']."\n";
echo "Server Private IP: ".$_SERVER['SERVER_ADDR']."\n";
echo "X-Forwarded-for: ".($_SERVER['HTTP_X_FORWARDED_FOR'] ?? 'None')."\n";
?>