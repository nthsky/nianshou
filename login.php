<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Powered by 云淡风轻</title>
</head>
<body>
	<a href="./clean_cookie.php">如不行点这里重新注册</a><br>
</body>
</html>
<?php 

include_once("./functions.php");
$tel = $_COOKIE['phone'];
$data = bangzhu($tel);
echo $data;




 ?>
