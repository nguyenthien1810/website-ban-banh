<?php 
	$sql_pro = "SELECT * FROM bangbaiviet ORDER BY id_baiviet DESC ";
	$query_pro = mysqli_query($mysqli,$sql_pro);
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
	<h1 style="color:green; font-size:40px;">Bài viết nổi bật </h1>	
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
	<a href="danhsachbaiviet.php" style="text-decoration: none;"><p class="all-bv">Xem tất cả</p></a>	
</div>	


			
