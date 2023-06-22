<p style="font-size:30px; text-align:center">Liệt kê đơn hàng</p>
<?php
  $sql_lietke_dh = "SELECT * FROM bangmadonhang,bangdangky WHERE bangmadonhang.id_khachhang=bangdangky.id_khachhang ORDER BY bangmadonhang.id_ma DESC";
  $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
    <th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
    <th>Quản lý</th>
  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_dh)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['ma_code'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
      <?php if($row['tinhtrang_ma']==1){
        echo '<a href="pages/quanlydonhang/xuly.php?code='.$row['ma_code'].'">Đơn hàng mới</a>';
      }else{
        echo 'Đã xem';
      }
      ?>
    </td>
    <td>
      <a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['ma_code'] ?>">Xem đơn hàng</a> 
    </td>
   
  </tr>
  <?php
  } 
  ?>
 
</table> 