<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<body>
	<button id="abc">asd</button>
</body>
</html>
<script>
	var url = './php_request.php?tel=444';
	$('#abc').click(function(){
		$.ajax({
                     url: url,
                     type: "GET",
                     dataType: "json", //指定服务器返回的数据类型
               
                     success: function (res) {
                         console.log(res);
                     }
                 });
	});
</script>