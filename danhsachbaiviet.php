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
		$begin = ($page*4)-4;
	}
	$sql_pro = "SELECT * FROM bangbaiviet ORDER BY id_baiviet DESC LIMIT $begin,4";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	?>


	<div id="extra">
	<h1 style="color:green;">Danh Sách Bài viết </h1>	
	<ul class="list">
		<?php
				while($row = mysqli_fetch_array($query_pro)){ 
		?>
	<li> 
		<a class="thumb" href="maincontent.php?quanly=baiviet&id=<?php echo $row['id_baiviet'] ?>">
			<img src="admin/pages/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>">
		</a>
			<div class="info">
		<a class="title"  href="maincontent.php?quanly=baiviet&id=<?php echo $row['id_baiviet'] ?>">
				<p><?php echo $row['tenbaiviet'] ?></p>
		</a>
				<p class="excerpt"><?php echo $row['tomtat'] ?></p>
			</div>
		</li>
		<?php
			} 
		?>
	</ul>

	<div style="clear:both;"></div>
				
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM bangbaiviet");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/4);
				?>
				<p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
				<ul class="list_trang">

					<?php
					
					for($i=1;$i<=$trang;$i++){ 
					?>
						<li <?php if($i==$page){echo 'style="background:#ffb3b3;"';}else{ echo ''; }  ?>><a href="danhsachbaiviet.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
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