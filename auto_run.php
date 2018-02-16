<?php 
// 自动点完所有
include_once('./functions.php');
include_once('./mysql.php');
$link = new mysqli('127.0.0.1','root','root','nianshou');
$sql = "select tel,nickname from member";
$res = $link->query($sql);
// dump($user);
// 
// 记录日志，文件名date YmdHis
$log = '';
// foreach($user as $v){
// 	echo $v['nickname']."帮助结果：<br>";
// 	$log .= bangzhu($v['tel']);
// }
for($i=0; $i<6; $i++){
	$data = $res->fetch_assoc();
	$jieguo = bangzhu($data['tel']);
	$nickname = $data['nickname'];
	$log .= $nickname."帮助结果：<br>\r\n";
	$log .= $jieguo;
	$log .= "\r\n\r\n\r\n";
}

$filename = "./logs/".date('YmdHis',time()).".txt";
file_put_contents($filename, $log, FILE_APPEND);


 ?>