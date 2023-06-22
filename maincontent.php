<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/x-icon" href="images/icon.PNG">	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/thongtin.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<title>Webite bán bánh trực tuyến</title>
	
</head>
<body>
	<div id="pages">
			<?php
			session_start();
			include("admin/config/config.php");
			include("section/header.php");
			include("section/banner.php");
			?>

			<div class="maincontent">
				<?php
				if(isset($_GET['quanly'])){
					$tam = $_GET['quanly'];
				}else{
					$tam = '';
				}
				if($tam=='baiviet'){
					include("pages/baiviet.php");
				}elseif($tam=='giohang'){
					include("pages/giohang.php");
				}elseif($tam=='hethang'){
					include("pages/hethang.php");
				}elseif($tam=='camon'){
					include("pages/camon.php");
				}elseif($tam=='sanpham'){
					include("pages/sanpham.php");		
				}elseif($tam=='themgiohang'){
					include("pages/themgiohang.php");
				}elseif($tam=='thanhtoan'){
					include("pages/thanhtoan.php");
				}elseif($tam=='thongtin'){
					include("pages/thongtin.php");
				}else{
					include("pages/rong.php");
				}
				?>
			</div>

			<?php
			include("section/footer.php");
			?>
		</div>
		</body>