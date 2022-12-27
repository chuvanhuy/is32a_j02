<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$tieu_de = $_POST['txtTieuDe'];
	$mo_ta = $_POST['txtMoTa'];
	$noi_dung = $_POST['txtNoiDung'];
	$loai_tin_tuc_id = $_POST['optLoaiTinTuc'];
	$hien_thi_id = $_POST['txtHienThi'];
	// echo $loai_tin_tuc_id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		INSERT INTO `tbl_tin_tuc` (
			`tin_tuc_id`, 
			`tieu_de`, 
			`mo_ta`, 
			`noi_dung`, 
			`loai_tin_tuc_id`, 
			`so_luot_doc`, 
			`anh_minh_hoa`, 
			`hien_thi_id`, 
			`created_by`, 
			`created_time`, 
			`modified_by`, 
			`modified_time`, 
			`modified_log`) 
		VALUES (
			NULL, 
			'".$tieu_de."', 
			'".$mo_ta."', 
			'".$noi_dung."', 
			'".$loai_tin_tuc_id."', 
			'0', 
			NULL, 
			'".$hien_thi_id."', 
			NULL, 
			current_timestamp(), 
			NULL, 
			NULL, 
			NULL)";
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$tin_tuc = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã THÊM MỚI TIN TỨC thành công
	$url="../admin/quan_tri_tin_tuc.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã THÊM MỚI TIN TỨC thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>