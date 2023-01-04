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

<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../config.php");

	// 2. Lấy dữ liệu bản ghi cần SỬA
	$id = $_GET['id'];
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		SELECT *
		FROM tbl_tin_tuc
		WHERE tin_tuc_id=".$id;
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh truy vấn
	$tin_tuc = mysqli_query($ket_noi, $sql);
	$row=mysqli_fetch_array($tin_tuc);
;?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sửa tin tức</title>
	<script src="https://cdn.ckeditor.com/4.20.0/full/ckeditor.js"></script>
</head>

<body>
	<h1>SỬA TIN TỨC</h1>
	<hr>
	<br>
	<form action="../admin/sua_tin_tuc_thuc_hien.php" method="post">
		<p>Tiêu đề</p>
		<p><input type="text" name="txtTieuDe" style="width: 100%;" value="<?php echo $row["tieu_de"];?>"></p>
		<p>Loại tin tức</p>
		<p>
			<select name="optLoaiTinTuc">
				<option value="0">Lựa chọn loại tin tức</option>
				<option value="1" <?php if($row["loai_tin_tuc_id"]==1) {echo "selected";};?>>Thông báo</option>
				<option value="2" <?php if($row["loai_tin_tuc_id"]==2) {echo "selected";};?>>Khuyến mại</option>
				<option value="3" <?php if($row["loai_tin_tuc_id"]==3) {echo "selected";};?>>Khác</option>
			</select>
		</p>
		<p>Mô tả</p>
		<p><textarea name="txtMoTa" style="width: 100%;"><?php echo $row["mo_ta"];?></textarea></p>
		<p>Ảnh minh hoạ</p>
		<p><input type="file" name="txtAnhMinhHoa"></p>
		<p>Nội dung bài viết</p>
		<p><textarea name="txtNoiDung" style="width: 100%;"><?php echo $row["noi_dung"];?></textarea></p>
		<p>Hiển thị</p>
		<p>
			<input type="radio" name="txtHienThi" value="1" <?php if($row["hien_thi_id"]==1) {echo "checked";};?>> Đăng bài
			<input type="radio" name="txtHienThi" value="2" <?php if($row["hien_thi_id"]==2) {echo "checked";};?>> Không đăng
		</p>
		<input type="hidden" name="txtID" value="<?php echo $row["tin_tu_id"];?>">
		<p><button>Cập nhật</button></p>
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