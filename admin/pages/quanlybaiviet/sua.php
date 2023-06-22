<?php
	$sql_sua_sp = "SELECT * FROM bangbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<p style="font-size:30px; text-align:center">Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="pages/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên bài viết</td>
	  	<td><input type="text" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet"></td>
	  </tr>
	   
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="pages/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>

	  <tr>
	  	<td>Tóm tắt</td>
	  	<td><textarea rows="10"  name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea></td>
	  </tr>

	   <tr>
	  	<td>Nội dung</td>
	  	<td><textarea rows="10"  name="noidung" style="resize: none"><?php echo  $row['noidung'] ?></textarea></td>
	  </tr>

	   <tr>
	    <td colspan="2"><input type="submit" name="suabaiviet" value="Sửa bài viết"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>