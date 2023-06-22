<div class="main_right">
    <?php

                if(isset($_GET['action']) && $_GET['query']){
                    $tam = $_GET['action'];
                    $query = $_GET['query'];
                }else{
                    $tam = '';
                    $query = '';
                }                   

                // xem, thêm, sửa, xóa sản phẩm
                if ($tam=='quanlysanpham' && $query=='them') {
                    include("pages/quanlysanpham/them.php");
                }elseif($tam=='quanlysanpham' && $query=='lietke'){
                    include("pages/quanlysanpham/lietke.php");
                }elseif($tam=='quanlysanpham' && $query=='sua'){
                    include("pages/quanlysanpham/sua.php");
                }

                // xem, thêm, sửa, xóa bài viết
                elseif ($tam=='quanlybaiviet' && $query=='them') {
                    include("pages/quanlybaiviet/them.php");
                }elseif($tam=='quanlybaiviet' && $query=='lietke'){
                    include("pages/quanlybaiviet/lietke.php");
                }elseif($tam=='quanlybaiviet' && $query=='sua'){
                    include("pages/quanlybaiviet/sua.php");
                }

                // xem, sửa, xóa thông tin khách hàng
                elseif($tam=='quanlykhachhang' && $query=='lietke'){
                    include("pages/quanlykhachhang/lietke.php");
                }elseif($tam=='quanlykhachhang' && $query=='sua'){
                    include("pages/quanlykhachhang/sua.php");
                }

                // xem thông tin đơn hàng
                elseif($tam=='quanlydonhang' && $query=='lietke'){
                    include("pages/quanlydonhang/lietke.php");
                }elseif($tam=='donhang' && $query=='xemdonhang'){
                    include("pages/quanlydonhang/xemdonhang.php");
                }
                else{
                    include("pages/dashboard.php");
                }
    ?> 
</div>