<p style="font-size:30px; text-align:center;">Giỏ hàng 
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:green">'.$_SESSION['dangky'].'</span>';
  } 
  ?>
</p>
<?php
	if(isset($_SESSION['cart'])){
	}
?>
<div class="giohang">
<table style="width:100%; text-align: center;border-collapse: collapse; font-size:20px;" border="1">
  <tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Số lượng mua</th>
    <th>Giá sản phẩm</th>
    <th>Thành tiền</th>
    <th>Quản lý</th>
   
  </tr>
  <?php
  if(isset($_SESSION['cart'])){
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['gia'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['tenbanh']; ?></td>
    <td><img src="admin/pages/quanlysanpham/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
    <td>
    	<a href="pages/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
    	<a href="pages/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>

    </td>
    <td><?php echo number_format($cart_item['gia'],0,',','.').'vnđ'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><a style="text-decoration: none;" href="pages/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
  </tr>
  <?php
  	}
  ?>
   <tr>
    <td colspan="8">
    	<p style="float: left;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>
    	<p style="float: right;"><a style="text-decoration: none;" href="pages/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
      <div style="clear: both;"></div>
      <?php
        if(isset($_SESSION['dangky'])){
          ?>
           <p style="font-size:25px;"><a style="text-decoration: none;" href="pages/thanhtoan.php">Đặt hàng</a></p>
      <?php
        }else{
      ?>
        <p style="font-size:25px;"><a style="text-decoration: none;" href="dangnhap.php">Đăng nhập để đặt hàng</a></p>
      <?php
        }
      ?>
    </td>
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
</div>