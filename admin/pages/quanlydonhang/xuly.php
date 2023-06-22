<?php
	include('../../config/config.php');
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE bangmadonhang SET tinhtrang_ma=0 WHERE ma_code='".$code_cart."'";
		$query = mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	} 
?>