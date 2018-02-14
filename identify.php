<?php 

// 发送验证码
include_once("functions.php");


$tel = $_GET['tel'];
$auth = $_GET['auth']?$_GET['auth']:'';
$url = "https://event.bh3.com/bh3_2018spring_festival/identify.php";
$url = $url."?tel=".$tel."&auth=".$auth;
$cookie_file = "./cookies/".$tel.".txt";
$response = https_request($url,false,null,false,$cookie_file);
echo json_encode($response);
// https_request();






 ?>