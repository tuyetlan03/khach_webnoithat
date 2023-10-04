<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    include_once 'connect.php'; // nạp file kết nối database để truy suất dữ liệu
    ?>

    <!--link bootstrap-->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!--link boxicon-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!-- link css -->
<link rel="stylesheet" href="style.css">

<!-- SELECT * FROM san_pham WHERE ID = 1 -->

<style>
    .ctsp .muangay {
        background-color: #edcd8e;
        color:white;
        
        width: 250px;
       
    }
    .ctsp .muangay:hover{
        background-color: white;
        color: #edcd8e;
    }
    .ctsp button {
        border: 2px solid #edcd8e;
        color:#edcd8e;
        height: 60px;
        width: 60px;
        margin-left: 10px;
        margin-top: 20px;
    }
    .gioithieu_header {
        height: 130px;
        background-color: rgba(0,0,0,0.8);
        }
    

</style>

</head>
<body>
<!-- header -->
<div class="gioithieu_header">
      
    <div class = "container  " >
    <div class="row nav" >
        <div class="col-3">
            <img src="https://lan.nanoweb.vn/mediacenter/media/images/945/logo/logo-1569903399.png" alt="anh_logo">
        </div>
        <div class="col-6 menu">
            <ul class="d-flex">
                <li> <a href="trangchu.html">TRANG CHỦ</a> </li>
                <li><a href="trangsanpham.html">SẢN PHẨM</a></li>
                <li><a href="#">GIỚI THIỆU</a></li>
                <li><a href="#">TIN TỨC</a></li>
                <li><a href="#">LIÊN HỆ</a></li>
            </ul>
        </div>
        <div class="col nav_icon" >
            <ul class="d-flex">
                <li><a href="#"><i class='bx bx-search'></i></a></li>
                <li><a href="#"><i class='bx bx-cart-alt' ></i></a></li>
                <li><a href="#"><i class='bx bx-user'></i></a></li>
            </ul>
        </div>

       
        
    </div>
    </div>
</div>
    <!-- content -->
   <div class="container mt-5">
    <!-- sanphamchitiettop -->
    <div class="d-flex">
        <!-- left -->
        <?php 
            if(isset($_GET['Search'])) {
                $search = $_GET['Search'];
                $sql = "SELECT * FROM san_pham WHERE ten_san_pham  like '%$search%'";
             
            }else if(isset($_GET['ID_DM']))
            {
                $sql = "SELECT * FROM san_pham WHERE ma_danh_muc = " .$_GET["ID_DM"];
            }else{
            $sql = "SELECT * FROM  san_pham WHERE ID = ".$_GET["ID"];
            }
            $result = $conn->query($sql);// đây là phần thực hiện truy vấn
            if ($result->num_rows > 0) { // nếu dữ liệu có thì ta sử dụng while để duyệt qua từng hàng (có thể sử dụng foreach)
                while ($row = $result->fetch_assoc()) 
            { // Sử dụng biến $row 
        ?>
        <div>
            <img style="height=500px; width: 600px"; src="<?=$row["anh_thumbnail"]?>" alt="anh <?=$row["ten_san_pham"]?>">
        </div>
        <!-- right -->
       
        <div class="ml-4">
            <p style="font-size: 25px;"> <b><?=$row["ten_san_pham"]?></b> </p>
            <p style="font-size: 25px;"> <b><?=$row["gia_ban"]?></b> </p>
            <label>Số Lượng</label>
            <input type="number" min="1" max="50" value="1"> 
            <div class="ctsp">
                <button class="muangay">MUA NGAY</button>
                <button><i class='bx bx-cart-add'></i></button>
            </div>
            <?php
            
        ?>
        </div>
    </div>
    <!-- chitietsp -->
    <div class="mota mt-4">
        <h3>MÔ TẢ</h3>
        <ul>
            <li><?=$row["mo_ta_san_pham_chi_tiet"]?></li>
        </ul>
    </div>
    <?php
            }
            } else {
                echo "<h3>Không có dữ liệu.</h3>";
            }
        ?>
    <!-- sanphamkhac -->
    <div></div>

   </div>
     <!-- footer -->
     <div class="footer ">
        <div class="row footer_line">
            <div class="col footer_menu mt-5 mb-5">
                <ul>
                    <li><h5>SẢN PHẨM</h5></li>
                    <li><a href="#">Nội thất văn phòng</a></li>
                    <li><a href="#">Ghế văn phòng</a></li>
                    <li><a href="#">Rèm văn phòng</a></li>
                    <li><a href="#">Khóa thông minh</a></li>
                </ul>

            </div>

            <div class="col footer_menu mt-5 mb-5">
                <ul>
                    <li><h5>TRỢ GIÚP</h5></li>
                    <li><a href="#">Nội thất văn phòng</a></li>
                    <li><a href="#">Ghế văn phòng</a></li>
                    <li><a href="#">Rèm văn phòng</a></li>
                    <li><a href="#">Khóa thông minh</a></li>
                </ul>

            </div>

            <div class="col footer_menu mt-5 mb-5">
                <ul>
                    <li><h5>VỀ CHÚNG TÔI</h5></li>
                    <li><a href="#">Nội thất văn phòng</a></li>
                    <li><a href="#">Ghế văn phòng</a></li>
                    <li><a href="#">Rèm văn phòng</a></li>
                    <li><a href="#">Khóa thông minh</a></li>
                </ul>

            </div>
           
            <div class="col mt-5 mb-5 "> <h5>FANPAGE</h5></div>
            <div class="col mt-5 mb-5"><h5>THEO DÕI CHÚNG TÔI</h5></div>
        </div>
        <div class="footer_end"><p>@Copy right 2023, Designed by Lanweb</p></div>
    
</div>
   

</body>
</html>