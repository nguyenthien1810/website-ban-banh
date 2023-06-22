<?php 
	$sql_pro = "SELECT * FROM bangsanpham ORDER BY id_sanpham DESC ";
	$query_pro = mysqli_query($mysqli,$sql_pro);
?>
<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*8)-8;
	}
	$sql_pro = "SELECT * FROM bangsanpham ORDER BY id_sanpham DESC LIMIT $begin,8";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
<div class="main">
	<h1 style="text-align: center;color:green;font-size:40px;">Sản phẩm nổi bật </h1>	
	<ul class="product_main">
		<?php
				while($row = mysqli_fetch_array($query_pro)){ 
		?>
		<li> 
			<a style="color:#3385ff;" href="maincontent.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
			<img src="admin/pages/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>">
			<p class="title_product">Tên bánh: <?php echo $row['tenbanh'] ?></p>
			<p class="price_product">Giá: <?php echo number_format($row['gia'],0,',','.').'vnđ' ?></p>
			</a>
		</li>
		<?php
			} 
		?>
	</ul>
	<div style="clear:both;"></div>
	<a href="danhsachsanpham.php" style="text-decoration: none;"><p class="all-sp">Xem tất cả</p></a>	
</div>	


