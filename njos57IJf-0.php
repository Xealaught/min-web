<?php
function getIpAddress() {
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipAddresses = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        return trim(end($ipAddresses));
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$myfile = fopen("ip-list.php", "w");
$clientIp = getIpAddress() . PHP_EOL;
fwrite($myfile, $clientIp);
fclose($myfile);
header("Location: https://www.youtube.com/watch?v=njos57IJf-0");
die();
?>