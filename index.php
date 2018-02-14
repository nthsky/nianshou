<?php 
// $a = file_get_contents("https://event.bh3.com/bh3_2018spring_festival/friends.php?auth=3XpVDZx0DM3AzN2EyNfZmbjl2ah5Wb9UL6rWJ6dC");
// var_dump(json_decode($a,true));
// $b = file_get_contents("https://event.bh3.com/bh3_2018spring_festival/identify.php?auth=3XpVDZx0DM3AzN2EyNfZmbjl2ah5Wb9UL6rWJ6dC&tel=17621198569");
// var_dump($b);
// var_dump(json_decode('{"retcode":15,"msg":"\u62b1\u6b49\uff0c\u53d1\u9001\u77ed\u4fe1\u592a\u9891\u7e41\uff0c\u8bf7\u7a0d\u540e\u518d\u8bd5"}',true));
// var_dump($_COOKIE['SERVERID']);
// $url = 'https://event.bh3.com/';
//        $ch = curl_init(); 
//        curl_setopt ($ch, CURLOPT_URL, $url); 
//        curl_setopt ($ch, CURLOPT_COOKIEJAR, $cookie_file); 
//        curl_setopt ($ch, CURLOPT_COOKIEFILE, $cookie_file); 
//    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
//   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
//        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
//        $result = curl_exec ($ch); 
//        curl_close($ch); 
//        return $result; 
// include('functions.php');

// // $data = 
// // setcookie();

// $data = ['auth'=>'3XpVDZx0TM5cTMyYSNfZmbjl2ah5Wb9UZ5kiZ5kiZ5kiZ5kiZ5kiZ5kiZ5kiZ5ki','sign'=>''];
//  $output = https_request('https://event.bh3.com/bh3_2018spring_festival/friends.php?auth=3XpVDZx0TM5cTMyYSNfZmbjl2ah5Wb9UZ5kiZ5kiZ5kiZ5kiZ5kiZ5kiZ5kiZ5ki',$data);
 
//  var_dump(json_decode($output,true));
if($_COOKIE['tel']){
	header('Location:login.php');
}else{
	header('Location:register.php');
}



 ?>