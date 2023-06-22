<?php
	if(isset($_POST['dathang'])) {
		$ten = $_POST['ten'];
		$diachilienhe = $_POST['diachilienhe'];
		$sodienthoai = $_POST['sodienthoai'];
		if($ten == "" || $diachilienhe == "" || $sodienthoai == "" ){
			echo '<p style=color:red; align="center">Bạn vui lòng nhập đầy đủ thông tin !</p>';
		}
		else{
			header("Location:maincontent.php?quanly=camon");
		}
	}
?>
<center>
    <form method="POST">
    <div class="thongtin">
    	<h2 style="font-size: 35px;color:green;">Thông tin vận chuyển</h2>
    	<center>
        <input type="text" name="ten" placeholder="Họ và tên ...">
        <input type="text" name="diachilienhe" placeholder="Địa chỉ liên hệ ...">
        <input type="text" name="sodienthoai" placeholder="Số điện thoại ...">
        <input type="text" name="ghichu" placeholder="Ghi chú ...">
    	</center>
    </div>
    <div class="phuongthuc">
    	<h2 style="font-size: 35px;color:green;">Hình thức thanh toán</h2>
    	<input type="radio" name="thanhtoan">
  		<label for="tienmat">Tiền mặt</label><br>
  		<input type="radio"name="thanhtoan">
  		<label for="chuyenkhoan">Chuyển khoản</label><br>
  		<input type="radio"  name="thanhtoan">
  		<label for="momo"><img src="images/momo.png">MoMo</label><br>
  		<input type="radio"  name="thanhtoan">
  		<label for="vnpay"><img src="images/vnpay.png">VNPAY</label><br>
  		<input type="radio"  name="thanhtoan">
  		<label for="paypal"><img src="images/paypal.png">Paypal</label>
  	</div>
    	<button style="margin-top:20px; font-size:15px" type="submit" name="dathang">Thanh toán</button>
    </form>
</center>
