<?php 
	// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
	require("../config.php");

	// 2. Lấy dữ liệu bản ghi cần THÊM MỚI
	$username = $_POST['txtUserName'];
	$password = $_POST['txtPassword'];
	// echo $password; exit();

	// 3. Câu lệnh truy vấn đến bảng dữ liệu
	$sql = "
		SELECT *
		FROM tbl_tai_khoan
		WHERE ten_tai_khoan='".$username."' AND mat_khau='".md5($password)."'
	";
	// echo $sql; exit();

	// 4. Thực hiện thực thi câu lệnh SQL
	$tai_khoan = mysqli_query($ket_noi, $sql);
	$hop_le = mysqli_num_rows($tai_khoan);


	// 5. Thông báo ĐĂNG NHẬP THÀNH CÔNG hay không?
	$url1="../admin/dang_nhap.php";
	$url2="../admin/quan_tri_tin_tuc.php";

	if($hop_le==1) {
		// Khởi tạo phiên làm việc cho người đăng nhập thành công
		session_start();

		// Tạo ra 1 biến để các trang có nhận diện được là bạn đang nhập
		$_SESSION['dang_nhap'] = $username;

		echo "
			<script type='text/javascript'>
				window.alert('Đã ĐĂNG NHẬP thành công');
				window.location.href = '".$url2."';
			</script>
		";
	} else {
		echo "
			<script type='text/javascript'>
				window.alert('Chưa ĐĂNG NHẬP thành công');
				window.location.href = '".$url1."';
			</script>
		";
	}
;?>