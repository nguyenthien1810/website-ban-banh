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
		<h1 style="color:green; text-align:center; padding-bottom:30px">Hướng Dẫn Mua Hàng</h1>

		<div style="padding-left:300px">
			<h2 style="font-size:25px; color:#339966">Hướng dẫn mua hàng</h2>
			<div style="padding-left:30px">
			<p style="font-size:25px; color:orange">A/Đặt hàng trên Facebook:</p>
				<div style="padding-left:20px;font-size:20px">
				<p>Chat trực tiếp với nhân viên tư vấn(www.facebook.com/dongtienbakery.1996)</p>
				<p>Hoặt liên hệ Hotline: 0236 3675 768</p>
				</div>
			</div>
		<div style="padding-left:30px;font-size:20px">
			<p style="font-size:25px;color:orange">B/Đặt hàng trên Website:</p>
				<div style="padding-left:20px; font-size:20px">
			<p>Bước 1: Chọn mẫu bánh -> Click vào mẫu bánh bạn ưng ý</p>
			<p>Bước 2: Chọn thêm giỏ hàng</p>
			<p>Bước 3: Sau đó nhấn đặt hàng</p>
			<p>Bước 4: Điền đầy đủ thông tin vận chuyển</p>
			<p>Bước 5: Chọn hình thức thanh toán</p>
			<p>Bước 6: Chọn Thanh toán</p>
				</div>
			<p>1.Thông tin Giỏ hàng: Kiểm tra số lượng bánh hoặc thêm hay xóa bánh</p>
				<p>đã đặt trong giỏ</p>
			<p>2.Và sau đó tiến hành đặt hàng</p>
		</div>
		</div>

		<div style="padding-left:300px">
			<h2 style="font-size:25px; color:#339966">Phương thức thanh toán</h2>
			<div style="padding-left:30px;font-size:20px;padding-bottom:100px">
			<p>Cách 1: Thanh toán bằng tiền mặt</p>
			<p>Cách 2: Thanh toán bằng cách chuyển khoản</p>
			<p>Cách 3: Thanh toán thông qua các ví MOMO, VNPAY, Paypal</p>
		</div>
		</div>


		<?php
			include("section/footer.php");
		?>

	</div>
</body>
</html>