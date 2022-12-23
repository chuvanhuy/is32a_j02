<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>J02 | Tài khoản</title>
</head>
<body>
	<p id="menu"><a href="./trang_chu.html">Trang chủ</a> | <a href="./gioi_thieu.html">Giới thiệu</a> | <a href="./tin_tuc.html">Tin tức</a> | <a href="./san_pham.html">Sản phẩm</a> | <a href="./lien_he.html">Liên hệ</a></p>
	
	<h1>Nội dung trang tài khoản</h1>

	<?php 
		// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
		require("config.php");

		// 2. Câu lệnh truy vấn đến bảng dữ liệu
		$sql = "
			SELECT * 
			FROM tbl_tai_khoan
			ORDER BY tai_khoan_id DESC";

		// 3. Thực hiện truy vấn đến bảng dữ liệu
		$tai_khoan = mysqli_query($ket_noi, $sql);

		// 4. In kết quả ra màn hình
		while ($row = mysqli_fetch_array($tai_khoan)) {
			echo "<b>Họ và tên: ".$row["ho_va_ten"]."</b><br><br>";
			echo "<b><i> Email: ".$row["email"]."</i></b><br><br>";
			echo "<b><i> Số điện thoại: ".$row["sdt"]."</i></b><br><br>";
			echo "<hr>";
		}
	;?>


</body>
</html>