<?php
	$sql_sua_sp = "SELECT * FROM bangsanpham WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>

<p  style="font-size:30px; text-align:center">Sửa sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
 <form method="POST" action="pages/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" value="<?php echo $row['tenbanh'] ?>" name="tenbanh"></td>
	  </tr>
	  
	  <tr>
	  	<td>Giá</td>
	  	<td><input type="text" value="<?php echo $row['gia'] ?>" name="gia"></td>
	  </tr>

	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinhanh">
	  		<img src="pages/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
	  	</td>

	  </tr>
	  <tr>
	  	<td>Tóm tắt</td>
	  	<td><textarea rows="10"  name="mota" style="resize: none"><?php echo $row['mota'] ?></textarea></td>
	  </tr>
	   
	  <tr>
	    <td>Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<?php
	    		if($row['tinhtrang']==1){ 
	    		?>
	    		<option value="1" selected>Còn hàng</option>
	    		<option value="0">Hết hàng</option>
	    		<?php
	    		}else{ 
	    		?>
	    		<option value="1">Còn hàng</option>
	    		<option value="0" selected>Hết hàng</option>
	    		<?php
	    		} 
	    		?>

	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suasanpham" value="Sửa sản phẩm"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>