<?php 
include("./functions.php");
$tel=$_GET['tel'];
$url = "http://www.nthsky.top/ceshi.php?tel=".$tel."&auth=233";
$post = false;
// $data = ['tel'=>123,'auth'=>345];
// $data = 'tel=123&auth=345';
$result = https_request($url, $post);
echo $result;

 ?>