<?php 

// 有cookie true 无cooie false
 function https_request($url, $post=true , $data = null ,$cookie = true, $cookie_file='./cookies/cookie_file.txt')
 {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

    curl_setopt($curl, CURLOPT_COOKIE, 'SERVERID=9da578c0b665d0cc9f7c94ba4695a61e|1518427407|1518427335;bh3_2018spring=3XlRDbx0zNyYTM5EDO2UQO%3D%3D;sign_event=0086097e73fd84a8cac04ac1111ec8da2e0e58a52ca0b4dd0a93bf503a6e6402;');
    if($post){
      if (!empty($data)) { //数组不为空的时候传参 
          curl_setopt($curl, CURLOPT_POST, 1); //POST 开启 
          curl_setopt($curl, CURLOPT_POSTFIELDS, $data); //POST传参数 
      } 
    }
    curl_setopt($curl, CURLOPT_COOKIEJAR, $cookie_file);
    if($cookie){
      curl_setopt($curl, CURLOPT_COOKIEFILE, $cookie_file);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
 }

function dump($res){
  echo "<pre>";
  var_dump($res);
  echo "</pre>";
}
 

function bangzhu($tel){
    include_once('./mysql.php');
    $link = new Mysql();
    $sql = "select tel,auth,nickname from member";
    $res = $link->query($sql);
    // dump($res);
    $chenggong = '';
    $yijing = '';
    $shangxian = '';
    $cookie_file = "./cookies/".$tel.".txt";
    $url = "https://event.bh3.com/bh3_2018spring_festival/friends.php";
    foreach($res as $k=>$v){
      // dump($v[0]);
      $data = [
          'auth'=>$v[1],
          'sign'=>''
      ];
      $response = https_request($url,true,$data,true,$cookie_file);
      $response = json_decode($response);
      if($response->retcode == 0){
        $chenggong =$chenggong.$v[2];
      }elseif($response->retcode == 1) {
        $yijing = $yijing.$v[2];
      }elseif($response->retcode == 2){
        $shangxian = $shangxian.$v[3];
      }
    }
    $res_str = "成功帮助：".$chenggong."<br>已经帮助过：".$yijing."<br>已经到达上限：".$shangxian;
    echo $res_str;

}


 ?>