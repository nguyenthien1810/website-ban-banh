
<?php
	$sql_chitiet = "SELECT * FROM bangbaiviet WHERE id_baiviet='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
?>
<div class="baiviet">
	<?php
		while($row_chitiet = mysqli_fetch_array($query_chitiet)){
	?>
			<h1 style="font-size:30px; text-align:center; color:green;"><?php echo $row_chitiet['tenbaiviet'] ?></h1>
			<p style="margin:30px"> <?php echo $row_chitiet['noidung'] ?></p>	
	<?php
		}
	?>
</div>


