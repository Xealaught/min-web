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
echo getIpAddress();
header("Location: https://www.youtube.com/watch?v=njos57IJf-0");
die();
?>