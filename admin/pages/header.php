<div class="header">
            <div class="header_top">
                <div class="header_menu">
                    <ul>
                        <li><a href="index.php"><i class="bi bi-grid"></i>Trang chủ</a></li>
                        <li><a href="http://localhost/web_test/"><i class="bi bi-arrow-90deg-left"></i>Vào trang web</a></li>
                        <?php
                            if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
                            unset($_SESSION['login']); 
                            header('Location:login.php');
                            }
                        ?>
                        <li><a href="index.php?dangxuat=1"><i></i>Đăng Xuất</a></li>
                    </ul>
                </div>
                <div class="header_admin">
                    <?php
                        if(isset($_SESSION['login'])){
                        echo 'Xin chào: '.$_SESSION['login'].'';
                        } 
                    ?>
                </div>
            </div>
</div>