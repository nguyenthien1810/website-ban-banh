<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/x-icon" href="images/icon.PNG">	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/dangnhap.css">
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
	if(isset($_POST['dangnhap'])){
		$email = $_POST['email'];
		$matkhau = ($_POST['password']);
		$sql = "SELECT * FROM bangdangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);

		if($count>0){
			$row_data = mysqli_fetch_array($row);
			$_SESSION['dangky'] = $row_data['tenkhachhang'];
			$_SESSION['id_khachhang'] = $row_data['id_khachhang'];
			header("Location:maincontent.php?quanly=giohang");
		}else{
			echo '<p style=color:red; align="center">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
		}
	} 
?>
<div class="content">
<div class="content_main_login">
        <h2>Đăng nhập</h2>
        <form method="POST">
        	<center>
            <input id="username" type="text" placeholder="Nhập email..." name="email">
            <input id="password" type="password" placeholder="Nhập mật khẩu..." name="password">
            <button type="submit" name="dangnhap">Đăng nhập</button></center>
        </form>
            <p>Nếu bạn chưa có tài khoản? <a href="dangky.php">Đăng ký</a></p>
    </div>   
    </div>
		<?php
			 include("section/footer.php");
		?>

</body>
</html>