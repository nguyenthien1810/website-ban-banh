<?php
include('../../config/config.php');

if(isset($_POST['suathongtin'])){
	//sửa thông tin khách hàng
	$tenkhachhang = $_POST['tenkhachhang'];
	$email = $_POST['email'];
	$diachi = $_POST['diachi'];
	$dienthoai = $_POST['dienthoai'];
	$matkhau = $_POST['matkhau'];
		
	$sql_update = "UPDATE bangdangky SET tenkhachhang='".$tenkhachhang."',email='".$email."',diachi='".$diachi."',dienthoai='".$dienthoai."',matkhau='".$matkhau."' WHERE id_khachhang='$_GET[idkhachhang]'";
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlykhachhang&query=lietke');
}else{
	$id=$_GET['idkhachhang'];
	$sql = "SELECT * FROM bangdangky WHERE id_khachhang = '$id' LIMIT 1";
	$sql_xoa = "DELETE FROM bangdangky WHERE id_khachhang='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlykhachhang&query=lietke');
}

?>