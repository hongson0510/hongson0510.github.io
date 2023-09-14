<?php

    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
    
?>
<?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['dangky']);
        
    }
?>
<div class="logoThongtin">
    <div class="logoBrand">
        <img src="images/logo.jpg" alt="">
    </div>
    <div class="thongtinchucnang">
        <img src="images/logo2.png" alt="">
        <li><a href="index.php?quanly=giohang">Giỏ hàng</a></li>
        <?php
               if(isset($_SESSION['dangky'])){
         ?>
        <li><a href="index.php?dangxuat=1">Đăng xuất</a></li>
        <li><a href="index.php?quanly=thaydoimatkhau">Thay đổi mật khẩu</a></li>
        <?php
            }else{
         ?>
        <li><a href="index.php?quanly=dangky">Đăng ký</a></li>
        <?php
            }
        ?>
    </div>
</div>
    
<div class="menu">
    
        <!-- List menu -->
    <ul class="list_menu">
        
        <li><a href="index.php">Trang chủ</a></li>
        <!-- <?php
        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
        ?>
        <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc["id_danhmuc"]?>"><?php echo $row_danhmuc["tendanhmuc"]?></a></li>
        <?php
        }
        ?> -->
       
        
        <li><a href="index.php?quanly=tintuc">tin tức</a></li>
        <li><a href="index.php?quanly=lienhe">liên hệ</a></li>
        
            
    </ul>
    <p >
        <form action="index.php?quanly=timkiem" method="POST" class="form1" >
            <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa" style="margin: -7px 5px 0 0;padding: 7px 18px 6px 7px;border: none;">
            <button class="timkiembutton" type="submit" name="timkiem" >
                <i class="ti-search"></i>
            </button>
        </form>
        
    </p>
</div>