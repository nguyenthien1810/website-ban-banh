<center><h1 style="color:green; font-size:38px">Thông tin sản phẩm</h1>
<?php
	$sql_chitiet = "SELECT * FROM bangsanpham WHERE id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
	<img width="100%" src="admin/pages/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	</div>
	<form method="POST" action="pages/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
		<div class="chitiet_sanpham" style="font-size:23px">
			<h3 style="margin:0">Tên bánh: <?php echo $row_chitiet['tenbanh'] ?></h3>
			<p style="color:red">Giá bán: <?php echo number_format($row_chitiet['gia'],0,',','.').'vnđ' ?></p>
			<p><?php echo $row_chitiet['mota'] ?></p>
			<p> 
				<?php if($row_chitiet['tinhtrang']==1){ ?>
				<input style="font-size:20px" class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng">
				<?php }
					else{
						header("Location:maincontent.php?quanly=hethang");
					} 
				?>
			</p>
		</div>
	</form>

</div>
</center>
<?php
} 
?>
