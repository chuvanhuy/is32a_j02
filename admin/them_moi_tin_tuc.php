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
	<title>Thêm mới tin tức</title>
	<script src="https://cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
</head>

<body>
	<h1>THÊM MỚI TIN TỨC</h1>
	<hr>
	<br>
	<form action="../admin/them_moi_tin_tuc_thuc_hien.php" method="post">
		<p>Tiêu đề</p>
		<p><input type="text" name="txtTieuDe" style="width: 100%;"></p>
		<p>Loại tin tức</p>
		<p>
			<select name="optLoaiTinTuc">
				<option value="0">Lựa chọn loại tin tức</option>
				<option value="1">Thông báo</option>
				<option value="2">Khuyến mại</option>
				<option value="3">Khác</option>
			</select>
		</p>
		<p>Mô tả</p>
		<p><textarea name="txtMoTa" style="width: 100%;"></textarea></p>
		<p>Ảnh minh hoạ</p>
		<p><input type="file" name="txtAnhMinhHoa"></p>
		<p>Nội dung bài viết</p>
		<p><textarea name="txtNoiDung" style="width: 100%;"></textarea></p>
		<p>Hiển thị</p>
		<p>
			<input type="radio" name="txtHienThi" value="1" checked> Đăng bài
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