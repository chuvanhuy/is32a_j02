<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Quản trị tin tức</title>
</head> 
<body>
	<p style="text-align: right;"><a href="../admin/quan_tri_tin_tuc.html">QUẢN TRỊ TIN TỨC</a> | <a href="../admin/quan_tri_san_pham.html">QUẢN TRỊ SẢN PHẨMC</a> | <a href="../admin/quan_tri_phan_hoi.html">QUẢN TRỊ PHẢN HỒI</a></p>
	<br><hr>
	<h1>QUẢN LÝ BÀI VIẾT</h1>
	<p style="text-align:right;"><a href="../admin/them_moi_tin_tuc.php"><img src="../img/add.jpeg" style="width: 35px; height:auto;"></a></p>
	<table>
		<tr>
			<td style="text-align: center; font-weight: bold;">ID</td>
			<td style="text-align: center; font-weight: bold; width: 1000px;">Tiêu đề bài viết</td>
			<td style="text-align: center; font-weight: bold;">Lượt đọc</td>
			<td style="text-align: center; font-weight: bold;" colspan="2">Hành động</td>
		</tr>
		<?php 
			// 1. Kết nối đến MÁY CHỦ DỮ LIỆU & ĐẾN CSDL mà các bạn muôn HIỂN THỊ, THÊM, SỬA, XOÁ
			require("../config.php");

			// 2. Câu lệnh truy vấn đến bảng dữ liệu
			$sql = "
				SELECT * 
				FROM tbl_tin_tuc
				ORDER BY tin_tuc_id DESC";

			// 3. Thực hiện truy vấn đến bảng dữ liệu
			$tin_tuc = mysqli_query($ket_noi, $sql);

			// 4. In kết quả ra màn hình
			while ($row = mysqli_fetch_array($tin_tuc)) {
		;?>
		<tr>
			<td><?php echo $row["tin_tuc_id"];?></td>
			<td><?php echo $row["tieu_de"];?></td>
			<td><?php echo $row["so_luot_doc"];?></td>
			<td><a href="../admin/sua_tin_tuc.php?id=<?php echo $row["tin_tuc_id"];?>"><img src="../img/edit.png" style="width: 35px; height:auto;"></a></td>
			<td><a href="../admin/xoa_tin_tuc.php?id=<?php echo $row["tin_tuc_id"];?>"><img src="../img/delete.jpeg" style="width: 35px; height:auto;"></a></td>
		</tr>
		<?php
			}
		;?>
	</table>
</body>
</html>