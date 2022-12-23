<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>J02 | Tin tức</title>
</head>
<body>
	<p id="menu"><a href="./trang_chu.html">Trang chủ</a> | <a href="./gioi_thieu.html">Giới thiệu</a> | <a href="./tin_tuc.html">Tin tức</a> | <a href="./san_pham.html">Sản phẩm</a> | <a href="./lien_he.html">Liên hệ</a></p>
	
	<h1>Nội dung trang tin tức</h1>

	<?php 
		// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
		require("config.php");

		// 2. Câu lệnh truy vấn đến bảng dữ liệu
		$sql = "
			SELECT * 
			FROM tbl_tin_tuc
			ORDER BY tin_tuc_id DESC";

		// 3. Thực hiện truy vấn đến bảng dữ liệu
		$tin_tuc = mysqli_query($ket_noi, $sql);

		// 4. In kết quả ra màn hình
		while ($row = mysqli_fetch_array($tin_tuc)) {
			echo "<b>".$row["tieu_de"]."</b><br><br>";
			echo "<b><i>".$row["mo_ta"]."</i></b><br><br>";
			echo $row["noi_dung"]."<br><br>";
			echo "<hr>";
		}
	;?>


</body>
</html>