<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Trang chủ Admin</title>
	<link rel="stylesheet" type="text/css" href="css/styleadmin.css">
</head>
<?php
 session_start();
 if(!isset($_SESSION['login'])){
 	header('Location:login.php');
 } 
?>
<body>
    <div class="wraper">
        <?php 
            include("config/config.php");
            include("pages/header.php");
        ?>
        <div class="main"> 
        <?php
            include("pages/menu.php");
            include("pages/main.php");
        ?>
        </div>
    </div>
    
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
	<script >
		CKEDITOR.replace('mota');
		CKEDITOR.replace('tomtat');
		CKEDITOR.replace('noidung');
		CKEDITOR.replace('gioithieu');
	</script>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="css/style.js"></script>
</html>