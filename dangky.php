<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/x-icon" href="images/icon.PNG">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<link rel="stylesheet" type="text/css" href="css/dangky.css">
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
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['tenkhachhang'];
		$email = $_POST['email'];
		$dienthoai = $_POST['dienthoai'];
		$matkhau = ($_POST['matkhau']);
		$diachi = $_POST['diachi'];
		if($tenkhachhang == "" || $email == "" || $dienthoai == "" || $diachi == "" || $matkhau == ""){
			echo '<p style=color:red; align="center">Bạn vui lòng nhập đầy đủ thông tin !</p>';
		}else{
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO bangdangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			echo '<p style="color:green; font-size:20px; text-align:center">Bạn đã đăng ký thành công</p>';
			$_SESSION['dangky'] = $tenkhachhang;
			$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
			}
		}
	}
?>

<div class="content">
<div class="content_create_account">
                    <h2>Đăng ký tài khoản</h2>
                    <form method="POST">
                   	<center>
                    <input type="text" name="tenkhachhang" placeholder="Họ và tên ...">
                    <input type="text" name="email" placeholder="Email ...">
                    <input type="text" name="dienthoai" placeholder="Số điện thoại ...">
                    <input type="text" name="diachi" placeholder="Địa chỉ ...">
                    <input type="password" name="matkhau" placeholder="Mật khẩu ...">
                    <button name="dangky" type="submit">Đăng ký</button></center>
                    </form>
                    <p>Nếu bạn đã có tài khoản <a href="dangnhap.php">Đăng nhập</a></p>
                </div>
                </div>
		<?php
			include("section/footer.php");
		?>

</body>
</html>