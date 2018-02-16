<?php 

include_once("./functions.php");
include_once("./mysql.php");
// $str = "{\"retcode\":15,\"msg\":\"\\u62b1\\u6b49\\uff0c\\u53d1\\u9001\\u77ed\\u4fe1\\u592a\\u9891\\u7e41\\uff0c\\u8bf7\\u7a0d\\u540e\\u518d\\u8bd5\"}";
// var_dump(json_decode($str));
// 
// 

// $url = "https://event.bh3.com/bh3_2018spring_festival/friends.php?auth=3XpVDZx0DM4IjMyEyMfZmbjl2ah5Wb9Up5x2L5hm75O6q5uO";
// $cookie_file = 'cookies/ceshi.txt';
// $response = https_request($url,false,null,false);
// $response = json_decode($response);

// $nickname = $response->data->user->nickname;

// $tel = '17621198569';
// $auth = '3XpVDZx0TM5cTMyYSNfZmbjl2ah5Wb9UZ5kiZ5kiZ5kiZ5kiZ5kiZ5kiZ5kiZ5ki';
// $nickname = "嘤嘤嘤嘤嘤嘤嘤嘤";
// $link = new Mysql();
// $sql = "insert into member (tel,auth,nickname) values ($tel,'$auth','$nickname')";
// $res = $link->add($sql);
// dump($res);
// bangzhu(123);
// $auth = '3XpVDZx0DM3AzN2EyNfZmbjl2ah5Wb9UL6rWJ6dC';
// $url = "https://event.bh3.com/bh3_2018spring_festival/friends.php?auth=".$auth;
// $response = https_request($url,false,null,true);
// $response = json_decode($response);
// $nickname = $response->data->user->nickname;
// dump($nickname);
$link = new mysqli('127.0.0.1','root','root','nianshou');
// $tel = 1234;

// 	$sql = "insert into member (tel,auth,nickname) values ($tel,'$auth','$nickname')";
// 	$res = $link->add($sql);
// echo date('YmdHis',time());
$sql = "select tel,nickname from member";

$res = $link->query($sql);
// while($data = $res->fetch_assoc()){
// 	echo $data['nickname'];
// }
for($i=0;$i<5;$i++){
	echo $res->fetch_assoc()['nickname'];
}

 ?>