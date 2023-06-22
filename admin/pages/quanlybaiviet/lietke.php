<?php
	$sql_lietke_sp = "SELECT * FROM bangbaiviet ORDER BY id_baiviet DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p style="font-size:30px; text-align:center">Liệt kê danh sách bài viết</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên bài viết</th>
    <th>Hình ảnh</th>
    <th>Tóm tắt</th>
    <th>Nội dung</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenbaiviet'] ?></td>
    <td><img src="pages/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
   	<td>
   		<a href="pages/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>">Xoá</a> | <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>