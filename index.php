<!doctype html>
<head>
</head>
<body>
<?php

$string = '!"#$%&'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\]^_`abcdefghijklmnopqrstuvwxyz{|}~';

$tripkey = '#istrip';? //パスワードとする文字列（# 付き）
$tripkey = substr($tripkey, 1);

$salt = substr($tripkey . 'H.', 1, 2);
$salt = preg_replace('/[^\.-z]/', '.', $salt);
$salt = strtr($salt, ':;<=>?@[\\]^_`', 'ABCDEFGabcdef');

$trip = crypt($tripkey, $salt);
$trip = substr($trip, -10);
$trip = '◆' . $trip;

?>
</body>
