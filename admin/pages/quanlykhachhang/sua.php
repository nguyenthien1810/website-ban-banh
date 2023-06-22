<?php
	$sql_sua_sp = "SELECT * FROM bangdangky WHERE id_khachhang='$_GET[idkhachhang]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p style="font-size:30px; text-align:center">Sửa thông tin khách hàng</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="pages/quanlykhachhang/xuly.php?idkhachhang=<?php echo $row['id_khachhang'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên khách hàng</td>
	  	<td><input type="text" value="<?php echo $row['tenkhachhang'] ?>" name="tenkhachhang"></td>
	  </tr>
	   <tr>
	  	<td>Email</td>
	  	<td><input type="text" value="<?php echo $row['email'] ?>" name="email"></td>
	  </tr>
	  <tr>
	  	<td>Địa chỉ</td>
	  	<td><input type="text" value="<?php echo $row['diachi'] ?>" name="diachi"></td>
	  </tr>
	  <tr>
	  	<td>Số điện thoại</td>
	  	<td><input type="text" value="<?php echo $row['dienthoai'] ?>" name="dienthoai"></td>
	  </tr>
	  <tr>
	  	<td>Mật khẩu</td>
	  	<td><input type="text" value="<?php echo $row['matkhau'] ?>" name="matkhau"></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suathongtin" value="Sửa thông tin"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>