<?php
	$sql_lietke_sp = "SELECT * FROM bangsanpham ORDER BY id_sanpham DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p style="font-size:30px; text-align:center">Liệt kê danh sách sản phẩm</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá</th>
    <th>Thông tin</th>
    <th>Trạng thái</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenbanh'] ?></td>
    <td><img src="pages/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['gia'] ?></td>
    <td><?php echo $row['mota'] ?></td>
    <td><?php if($row['tinhtrang']==1){
        echo 'Còn hàng';
      }else{
        echo 'Hết hàng';
      } 
      ?>
      
    </td>
   	<td>
   		<a href="pages/quanlysanpham/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a> | <a href="?action=quanlysanpham&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
   	</td>
  </tr>
  <?php
  } 
  ?>
 
</table>