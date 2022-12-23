<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>J02 | Trang chủ</title>	
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<script type="text/javascript">
		window.alert("Chào mừng bạn tới với Website của tôi");
		document.write("Chào bạn!!!");
		var nguoi_yeu="Nguyễn Thị Nở";
		console.log(nguoi_yeu);
		console.log("Anh Chí đã chuẩn bị xe Mayback để đón Nở về dinh");

		var bo_suu_tap_nguoi_yeu=["Mơ", "Mận", "Đào"];
		
		// Hiển thị tên của cô người yêu thứ 1
		console.log("1. Cô người yêu thứ nhất: "+bo_suu_tap_nguoi_yeu[0]);
		
		// Hiển thị tên của cô người yêu thứ 3
		console.log("3. Cô người yêu thứ ba: "+bo_suu_tap_nguoi_yeu[2]);
	</script>
</head>
<body>
	<p id="menu"><a href="./trang_chu.html">Trang chủ</a> | <a href="./gioi_thieu.html">Giới thiệu</a> | <a href="./tin_tuc.html">Tin tức</a> | <a href="./san_pham.html">Sản phẩm</a> | <a href="./lien_he.html">Liên hệ</a></p>

	<h1 id="tieu_de">Nội dung trang chủ</h1>

	<p style="text-align: center;"><img src="./img/backdrop.png" style="width: 1000px; height: auto;"></p>

	<p style="text-align: center;"><button onclick="document.getElementById('tieu_de').innerHTML='J02';">THAY ĐỔI NỘI DUNG</button></p>
</body>
</html>