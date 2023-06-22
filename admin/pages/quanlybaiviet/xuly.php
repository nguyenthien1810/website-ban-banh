<?php
include('../../config/config.php');

if(isset($_POST['thembaiviet'])){
	//thêm bài viết 
	$tenbaiviet = $_POST['tenbaiviet'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
	$tomtat = $_POST['tomtat'];
	$noidung = $_POST['noidung'];

	$sql_them = "INSERT INTO bangbaiviet(tenbaiviet,hinhanh,tomtat,noidung) VALUE('".$tenbaiviet."','".$hinhanh."','".$tomtat."','".$noidung."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
}elseif(isset($_POST['suabaiviet'])){
	//sửa bài viết
	$tenbaiviet = $_POST['tenbaiviet'];
	$hinhanh = $_FILES['hinhanh']['name'];
	$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
	$hinhanh = time().'_'.$hinhanh;
	$tomtat = $_POST['tomtat'];
	$noidung = $_POST['noidung'];

	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
		
		$sql_update = "UPDATE bangbaiviet SET tenbaiviet='".$tenbaiviet."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."' WHERE id_baiviet='$_GET[idbaiviet]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM bangbaiviet WHERE id_baiviet = '$_GET[idbaiviet]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE bangbaiviet SET tenbaiviet='".$tenbaiviet."',tomtat='".$tomtat."',noidung='".$noidung."' WHERE id_baiviet='$_GET[idbaiviet]'";
	}
	mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlybaiviet&query=them');
}else{
	$id=$_GET['idbaiviet'];
	$sql = "SELECT * FROM bangbaiviet WHERE id_baiviet = '$id' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}
	$sql_xoa = "DELETE FROM bangbaiviet WHERE id_baiviet='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlybaiviet&query=them');
}

?>