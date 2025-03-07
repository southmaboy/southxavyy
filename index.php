<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];
if (preg_match('/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i', $userAgent)) {
    header("Location: https://m.southxavyy.pl" . $_SERVER['REQUEST_URI']);
    exit();
}
?>
