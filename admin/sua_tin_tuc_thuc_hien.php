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

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$id = $_POST['txtID'];
	$tieu_de = $_POST['txtTieuDe'];
	$mo_ta = $_POST['txtMoTa'];
	$noi_dung = $_POST['txtNoiDung'];
	$loai_tin_tuc_id = $_POST['optLoaiTinTuc'];
	$hien_thi_id = $_POST['txtHienThi'];
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		UPDATE `tbl_tin_tuc` 
		SET 
			`tieu_de` = '".$tieu_de."', 
			`mo_ta` = '".$mo_ta."', 
			`noi_dung` = '".$noi_dung."', 
			`loai_tin_tuc_id` = '".$loai_tin_tuc_id."',
			`hien_thi_id` = '".$hien_thi_id."' 
		WHERE `tbl_tin_tuc`.`tin_tuc_id` = '".$id."'
	";
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$tin_tuc = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã CẬP NHẬT TIN TỨC thành công
	$url="../admin/quan_tri_tin_tuc.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã CẬP NHẬT TIN TỨC thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>