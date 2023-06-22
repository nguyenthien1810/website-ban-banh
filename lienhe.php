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
		<div>
			<h2 align="center" style="font-size: 38px; color:green;">Liên hệ với Đồng Tiến Bakery</h2>
			<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3835.254481052208!2d108.2110173148576!3d16.00026278892355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421bd8dd54eddb%3A0x200ae446588150c!2zxJDhu5NuZyBUaeG6v24gQmFrZXJ5!5e0!3m2!1svi!2s!4v1640517853960!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
			<center>
				<div style="font-size: 20px">
					<p>
						<span style="font-weight:bold">Chi Nhánh:</span>
						217 Văn Tiến Dũng
					</p>
					<p>Hòa Xuân, Cẩm Lệ</p>
					<p>Đà Nẵng</p>
					<p>
						<span style="font-weight:bold">Hotline:</span>
						<span style="color:red">0236 3675 768</span>
					</p>
					<p>
						<span style="font-weight:bold">Email:</span>
						<span style="color:blue">CtDongtienbanker@gmail.com</span>
					</p>
					<p style="padding-bottom:100px">
						<span style="font-weight:bold">Follow on:</span>
						<a style="text-decoration: none; color:#3385ff" href="#">Facebook, Youtube, Intagram</a>
					</p>
				</div>
			</center>
		</div>
		<?php
			include("section/footer.php");
		?>

	</div>
</body>
</html>