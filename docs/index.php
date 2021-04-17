<!doctype html>
<head>
  <meta charset=“utf-8”>
  <title>うい</title>
</head>
<body>
  <br>
  <input type=“text”>
  <br>
  <input type=“submit” name =“comment“ formmethod=“post”>
  <br>
  <h1>こっちみんな</h1>
<?php
$code = null
for ($count = 0; $count < 10; $count++){
  $number = mt_rand(33, 126)
  $code = $code . chr($number)
}

$tripkey = '#' . $number ;? //パスワードとする文字列（# 付き）
$tripkey = substr($tripkey, 1);

$salt = substr($tripkey . 'H.', 1, 2);
$salt = preg_replace('/[^\.-z]/', '.', $salt);
$salt = strtr($salt, ':;<=>?@[\\]^_`', 'ABCDEFGabcdef');

$trip = crypt($tripkey, $salt);
$trip = substr($trip, -10);
$trip = '◆' . $trip;

?>
</body>
