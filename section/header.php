
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="header">
			<ul class="list_menu">
				<a href="index.php"> <img src="images/logo.PNG" class="image_logo"> </a> 
				<li><a href="index.php">Trang chủ</a></li>
				<li><a href="danhsachbaiviet.php">Bài viết</a></li>
				<li><a href="danhsachsanpham.php">Sản Phẩm</a></li>
				<li><a href="hdmuahang.php">Hướng dẫn mua hàng</a></li>
				<li><a href="lienhe.php">Liên hệ</a></li>
				<?php
				if(isset($_SESSION['dangky'])){ 
				?>
				<li><a href="maincontent.php?quanly=giohang">Giỏ hàng</a></li>
				<li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
				<?php
				}else{ 
				?>
				<li><a href="dangnhap.php">Đăng nhập</a></li>
				
				<?php
				} 
				?>
					
			</ul>
			
		</div>