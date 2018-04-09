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
$file = 'ip-list.php';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= getIpAddress() . PHP_EOL;
// Write the contents back to the file
file_put_contents($file, $current);
echo $current;
//header("Location: https://www.youtube.com/watch?v=njos57IJf-0");
die();
?>