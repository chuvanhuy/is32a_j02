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

	// 2. Lấy dữ liệu bản ghi cần XOÁ
	$id = $_GET['id'];
	// echo $id; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		DELETE
		FROM tbl_tin_tuc
		WHERE tin_tuc_id=".$id;
	// echo $sql; exit();

	// 4. Thực hiện truy vấn đến bảng dữ liệu
	$tin_tuc = mysqli_query($ket_noi, $sql);


	// 5. Thông báo đã xoá thành công
	$url="../admin/quan_tri_tin_tuc.php";
	echo "
		<script type='text/javascript'>
			window.alert('Đã XOÁ thành công');
			window.location.href = '".$url."';
		</script>
	";
;?>