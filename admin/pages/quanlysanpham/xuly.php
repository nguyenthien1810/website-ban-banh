<?php
include('../../config/config.php');

if(isset($_POST['themsanpham'])){
	//thêm sản phẩm
	$tenbanh = $_POST['tenbanh'];
	$gia = $_POST['gia'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
	$mota = $_POST['mota'];
	$tinhtrang = $_POST['tinhtrang'];

	$sql_them = "INSERT INTO bangsanpham(tenbanh,gia,hinhanh,mota,tinhtrang) VALUE('".$tenbanh."','".$gia."','".$hinhanh."','".$mota."','".$tinhtrang."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlysanpham&query=them');
}elseif(isset($_POST['suasanpham'])){
	//sửa sản phẩm

	$tenbanh = $_POST['tenbanh'];
	$gia = $_POST['gia'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
	$mota = $_POST['mota'];
	$tinhtrang = $_POST['tinhtrang'];

	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE bangsanpham SET tenbanh='".$tenbanh."',gia='".$gia."',hinhanh='".$hinhanh."',mota='".$mota."',tinhtrang='".$tinhtrang."' WHERE id_sanpham='$_GET[idsanpham]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM bangsanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE bangsanpham SET tenbanh='".$tenbanh."',gia='".$gia."',mota='".$mota."',tinhtrang='".$tinhtrang."' WHERE id_sanpham='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlysanpham&query=them');
}else{
	// xóa sản phẩm

	$id=$_GET['idsanpham'];
	$sql = "SELECT * FROM bangsanpham WHERE id_sanpham = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM bangsanpham WHERE id_sanpham='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysanpham&query=them');
}

?>