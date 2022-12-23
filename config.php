<?php 
	// Thông số kết nối đến máy chủ dữ liệu
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_j02";

	// Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	$ket_noi = mysqli_connect($host, $username, $password, $dbname);

	// Báo lỗi nếu không kết nối được
	if (!$ket_noi) {
		echo "Kết nối đến CSDL thất bại";
	}
;?>