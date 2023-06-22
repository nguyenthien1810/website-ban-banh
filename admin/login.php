<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['login'])){
		$taikhoan = $_POST['tenadmin'];
		$matkhau = ($_POST['matkhau']);
		$sql = "SELECT * FROM bangadmin WHERE tenadmin='".$taikhoan."' AND matkhau='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['login'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang Admin</title>
	<style type="text/css">
		body{
			background:#f2f2f2;
		}
		.wrapper-login {
		    width: 15%;
		    margin: 0 auto;
		}
		table.table-login {
		    width: 100%;
		}
		table.table-login tr td {
		    padding: 5px;
		}
	</style>
</head>
<body>
<div class="wrapper-login">
	<div class="content">
		<h2>Đăng nhập Admin</h2>
		<form action="" autocomplete="off" method="POST">
		<div class="account">
			<div class="icon_account"><i class="bi bi-person-fill"></i></div>
			<input type="text" name="tenadmin" placeholder="Tên tài khoản" >
		</div>
		<div class="password">
			<div class="icon_password"><i class="bi bi-key-fill"></i></div>
			<input type="password" name="matkhau" placeholder="Mật khẩu" >
		</div>
		<div class="check_box">
			<input type="checkbox">
			<span>Nhớ Thông Tin</span>
		</div>
		<div class="button">
			<button type="submit" name="login">Đăng nhập</button>  
		</div>
		</form>
		
	</div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>
