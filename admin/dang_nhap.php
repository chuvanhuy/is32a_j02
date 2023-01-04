
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng nhập</title>
	<script type="text/javascript">
		function check_du_lieu() {
			// Khai báo 2 biến
			var user_name = document.getElementById("txtUserName").value;
			var password = document.getElementById("txtPassword").value;

			if (user_name=="") {
				window.alert("Bạn chưa nhập tên đăng nhập");
				return false;
			}

			if (password=="") {
				window.alert("Bạn chưa nhập mật khẩu");
				return false;
			}

			return true;
		}
	</script>
</head>
<body>
	<h1>ĐĂNG NHẬP HỆ THỐNG</h1>
	<hr>
	<br>
	<form action="../admin/kiem_tra_dang_nhap.php" method="post" onsubmit="return check_du_lieu()">
		<p>Tên đăng nhập: <input type="text" name="txtUserName" id="txtUserName"></p>
		<p>Mật khẩu: <input type="password" name="txtPassword" id="txtPassword"></p>
		<p><button type="submit">Đăng nhập</button></p>
	</form>
</body>
</html>