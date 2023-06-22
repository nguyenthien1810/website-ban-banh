<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/x-icon" href="images/icon.PNG">	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<title>Webite bán bánh trực tuyến</title>
	
</head>
<body>

		<?php
			session_start();
			include("admin/config/config.php");
			include("section/header.php");
			include("section/banner.php");
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
	<h1 style="text-align: center;color:green;">Danh Sách sản phẩm </h1>	
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
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM bangsanpham");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/8);
				?>
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
				
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background: #ffb3b3;"';}else{ echo ''; }  ?>><a href="danhsachsanpham.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
					} 
					?>
				</ul>

				</div>
		<?php
			include("section/footer.php");
		?>

	
</body>
</html>