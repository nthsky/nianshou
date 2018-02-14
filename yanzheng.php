<?php 
header("Content-type: text/html; charset=utf-8");
// var_dump($_POST);
include_once('./functions.php');
include_once('./mysql.php');

// 接收数据
$auth = $_POST['auth'];
$tel = $_POST['tel'];
// dump($tel);
// die();
$code = $_POST['validate'];
$sign = '';
$data = [
	'auth'=>$auth,
	'tel'=>$tel,
	'code'=>$code,
	'sign'=>$sign
];

// 进行验证
$cookie_file = "./cookies/".$data['tel'].".txt";

$url = "https://event.bh3.com/bh3_2018spring_festival/identify.php";
// $data = "auth=".$auth."&sign=&code=".$validate."&tel=".$tel;
$response = https_request($url,true,$data,true,$cookie_file);
$response = json_decode($response);
// 验证失败
if($response->retcode !== 0){
	dump('验证失败');
	header('Location:register.php');
	die();
}

// 保存本地cookie，方便下一次
$time = time()+60*60*24*30;
setcookie('phone',$tel,$time);

// 获取nickname

$url = "https://event.bh3.com/bh3_2018spring_festival/friends.php?auth=".$auth;
$response = https_request($url,false,null,true,$cookie_file);
$response = json_decode($response);
$nickname = $response->data->user->nickname;

// 存入tel auth nickname
$link = new Mysql();
$sql = "select * from member where tel=$tel";
$data = $link->query($sql);
if(!$data){
	$sql = "insert into member (tel,auth,nickname) values ($tel,'$auth','$nickname')";
	$res = $link->add($sql);
}


// $url = "https://event.bh3.com/bh3_2018spring_festival/friends.php";
// $data = [
// 	'auth'=>$auth,
// 	'sign'=>$sign
// ];
// $response = https_request($url,true,$data,true,$cookie_file);

bangzhu($tel);

 ?>