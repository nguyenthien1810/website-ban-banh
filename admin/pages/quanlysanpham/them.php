<p style="font-size:30px; text-align:center">Thêm sản phẩm</p>
<table border="1" width="100%" style="border-collapse: collapse;">
 <form method="POST" action="pages/quanlysanpham/xuly.php" enctype="multipart/form-data">
	  <tr>
	  	<td>Tên sản phẩm</td>
	  	<td><input type="text" name="tenbanh"></td>
	  </tr>
	   
	  <tr>
	  	<td>Giá</td>
	  	<td><input type="text" name="gia"></td>
	  </tr>
	  
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td><input type="file" name="hinhanh"></td>
	  </tr>

	  <tr>
	  	<td>Thông tin</td>
	  	<td><textarea rows="10"  name="mota" style="resize: none"></textarea></td>
	  </tr>

	  <tr>
	    <td>Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<option value="1">Còn hàng</option>
	    		<option value="0">Hết hàng</option>
	    	</select>
	    </td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="themsanpham" value="Thêm sản phẩm"></td>
	  </tr>
 </form>
</table>