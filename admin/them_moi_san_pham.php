<?php 
	// Khởi tạo phiên làm việc
	session_start();

	// Check xem bạn đã đăng nhập hay chưa?
	// echo $_SESSION['dang_nhap']; exit();
	if(!$_SESSION['dang_nhap']) {
		$url1="../admin/dang_nhap.php";
		echo "
			<script type='text/javascript'>
				window.alert('Bạn KHÔNG ĐƯỢC PHÉP truy cập trang này! Vui lòng đăng nhập hệ thống!');
				window.location.href = '".$url1."';
			</script>
		";
	}
;?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thêm mới sản phẩm</title>
	<script src="https://cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
</head>

<body>
	<h1>THÊM MỚI SẢN PHẨM</h1>
	<hr>
	<br>
	<form action="../admin/them_moi_san_pham_thuc_hien.html" method="post">
		<p>Tên sản phẩm</p>
		<p><input type="text" name="txtTenSanPham" style="width: 100%;"></p>
		<p>Loại sản phẩm</p>
		<p>
			<select name="optLoaiSanPham">
				<option value="0">Lựa chọn loại sản phẩm</option>
				<option value="1">iPhone</option>
				<option value="2">Samsung</option>
				<option value="3">Xiaomi</option>
				<option value="4">Oppo</option>
				<option value="5">Khác</option>
			</select>
		</p>
		<p>Mô tả sản sản phẩm</p>
		<p><textarea name="txtMoTa" style="width: 100%;"></textarea></p>
		<p>Ảnh minh hoạ</p>
		<p><input type="file" name="txtAnhMinhHoa"></p>
		<p>Giá bán</p>
		<p><input type="text" name="txtGiaBan"></p>
		<p>Số lượng</p>
		<p><input type="text" name="txtSoLuong"></p>
		<p>Hiển thị</p>
		<p>
			<input type="radio" name="txtHienThi" value="1"> Đăng bài
			<input type="radio" name="txtHienThi" value="2"> Không đăng
		</p>
		<p><button>Thêm mới</button></p>
	</form>
	<script>
		CKEDITOR.replace('txtNoiDung', {
			height: 400,
			baseFloatZIndex: 10005,
			removeButtons: 'PasteFromWord'
		});
	</script>
</body>
</html>