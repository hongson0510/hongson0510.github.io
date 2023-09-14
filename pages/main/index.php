<?php


    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*8)-8;
    }

    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY
     id_sanpham DESC LIMIT $begin,8";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<h3>Hàng mới</h3>
                <ul class="product_list">
                    <?php
                    while($row = mysqli_fetch_array($query_pro))
                    {
                    ?>
                    <li>
                        <a href="index.php?quanly=sanpham&id=<?php echo $row["id_sanpham"]?>">
                            <img src="admin/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>"  alt="">
                            <p class="title_product">Tên sản phẩm: <?php echo $row['tensanpham']?></p>
                            <p class="price_product">Giá: <?php echo number_format ($row['giasp'],0,',','.').'vnđ'?></p>
                            <p style="text-align:center;color:#d1d1d1"><?php echo $row['tendanhmuc']?></p>
                        </a>
                    </li> 
                   <?php
                    }
                   ?>
                </ul>
                <div style="clear:both;"></div>
                    <style>
                      .list_trang{
                        padding: 0;
                        margin: 0;
                        list-style: none;
                      }
                    
                      .list_trang li{
                        float: left;
                        padding: 5px 13px;
                        margin: 5px -8px;
                        list-style: none;
                      }

                      .list_trang li a{
                        background: darkcyan;
                        padding: 9px 15px;
                        color: #000;
                        text-align: center;
                        text-decoration: none;
                      }

                      .list_trang li a:hover{
                          
                        background: dodgerblue;
                      }
                    </style>

                <?php 
                    $sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
                    $row_count = mysqli_num_rows($sql_trang);
                    $trang = ceil($row_count/8);
                ?>
                
                <p>Trang hiện tại: <?php echo $page ?>/<?php echo $trang ?> </p>
                <ul class="list_trang">
                    <?php

                        for($i=1;$i<=$trang;$i++){
                    ?>
                        <li><a <?php if($i==$page){echo 'style="background:dodgerblue"';}else{echo '';}  ?> href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
                    <?php
                        }
                    ?>
                </ul>