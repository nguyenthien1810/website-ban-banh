<?php
	$sql_lietke_sp = "SELECT * FROM bangdangky ORDER BY id_khachhang DESC";
	$query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>
<p style="font-size:30px; text-align:center">Liệt kê khách hàng đã đăng ký</p>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên khách hàng</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Mật khẩu</th>
  	<th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_sp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td><?php echo $row['matkhau'] ?></td>
    
   	<td>
   		<a href="pages/quanlykhachhang/xuly.php?idkhachhang=<?php echo $row['id_khachhang'] ?>">Xoá</a> | <a href="?action=quanlykhachhang&query=sua&idkhachhang=<?php echo $row['id_khachhang'] ?>">Sửa</a> 
   	</td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>