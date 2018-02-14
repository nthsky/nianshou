<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Powered by 云淡风轻</title>
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

</head>
<body>
	<form action="./yanzheng.php" method="post">
		auth:<input type="text" name="auth" id="auth"><br>
		手机:<input type="text" name="tel" id="tel">
		<button id='shouji' type='button'>发送验证码</button><br>
		验证码:<input type="text" name="validate"><br>
		<input type="submit" name="submit" value="提交">

	</form>
</body>
</html>
<script>
		

	var data="";
	$("#shouji").click(function() {
		// alert(111);
		var tel = $("#tel").val();
		var auth = $("#auth").val();
		data = "tel="+tel+"&auth="+auth;
		// console.log(data);
		// var url = "https://event.bh3.com/bh3_2018spring_festival/identify.php";
		var url = "./identify.php?"+data;
		$.ajax({
                     url: url,
                     type: "GET",
                     dataType: "json", //指定服务器返回的数据类型
                     // data:data,
                     success: function (res) {
                         console.log(res);
                     }
                 });
		});

</script>