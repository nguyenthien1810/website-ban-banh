<?php
	session_start();
	include('../admin/config/config.php');
	// cộng số lượng sản phẩm
	if(isset($_GET['cong'])){
		$id=$_GET['cong'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] + 1;
				if($cart_item['soluong']<=9){
					
					$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
				}else{
					$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:../maincontent.php?quanly=giohang');
	}
	// trừ số lượng sản phẩm
	if(isset($_GET['tru'])){
		$id=$_GET['tru'];
		foreach($_SESSION['cart'] as $cart_item){
			if($cart_item['id']!=$id){
				$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
				$_SESSION['cart'] = $product;
			}else{
				$tangsoluong = $cart_item['soluong'] - 1;
				if($cart_item['soluong']>1){
					
					$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$tangsoluong,'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
				}else{
					$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
				}
				$_SESSION['cart'] = $product;
			}
			
		}
		header('Location:../maincontent.php?quanly=giohang');
	}
	// xóa sản phẩm trong giỏ
	if(isset($_SESSION['cart'])&&isset($_GET['xoa'])){
		$id=$_GET['xoa'];
		foreach($_SESSION['cart'] as $cart_item){

			if($cart_item['id']!=$id){
				$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
			}

		$_SESSION['cart'] = $product;
		header('Location:../maincontent.php?quanly=giohang');
		}
	}
	//xóa tất cả sản phẩm trong giỏ
	if(isset($_GET['xoatatca'])&&$_GET['xoatatca']==1){
		unset($_SESSION['cart']);
		header('Location:../maincontent.php?quanly=giohang');
	}
	//thêm sản phẩm vào giỏ hàng
	if(isset($_POST['themgiohang'])){
		//session_destroy();
		$id=$_GET['idsanpham'];
		$soluong=1;
		$sql ="SELECT * FROM bangsanpham WHERE id_sanpham='".$id."' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		$row = mysqli_fetch_array($query);
		if($row){
			$new_product=array(array('tenbanh'=>$row['tenbanh'],'id'=>$id,'soluong'=>$soluong,'gia'=>$row['gia'],'hinhanh'=>$row['hinhanh'],'ma_code'=>$row['ma_code']));
			//kiem tra session gio hang ton tai
			if(isset($_SESSION['cart'])){
				$found = false;
				foreach($_SESSION['cart'] as $cart_item){
					//neu du lieu trung
					if($cart_item['id']==$id){
						$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$soluong+1,'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
						$found = true;
					}else{
						//neu du lieu khong trung
						$product[]= array('tenbanh'=>$cart_item['tenbanh'],'id'=>$cart_item['id'],'soluong'=>$cart_item['soluong'],'gia'=>$cart_item['gia'],'hinhanh'=>$cart_item['hinhanh']);
					}
				}
				if($found == false){
					//lien ket du lieu new_product voi product
					$_SESSION['cart']=array_merge($product,$new_product);
				}else{
					$_SESSION['cart']=$product;
				}
			}else{
				$_SESSION['cart'] = $new_product;
			}

		}
		header('Location:../maincontent.php?quanly=giohang');
		
	}
	
	
	
?>