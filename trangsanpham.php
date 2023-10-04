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

    <!-- link css -->
    <link rel="stylesheet" href="style.css">

    <!--link boxicon-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        .gioithieu_header {
        height: 130px;
        background-color: rgba(0,0,0,0.8);
        }
        .danhmucsp ul li a {
            color:black;
            text-decoration: none;
        }
        .danhmucsp ul li {
            list-style: none;
            line-height: 3;
        }
        .danhmucsp ul li:hover a {
        color: #bb8b44;
        }
        .listspbanchay p a {
            color:black;
            text-decoration: none;
        }
        .listspbanchay  {
            justify-content: center;
            align-items: center;
        }
        .listspbanchay p {
            margin-bottom: 0;
            
        }
        #cars {
            display: flex;
            justify-content: flex-end;
        }
        .imgsp {
            height: 180px;
            width: 250px;
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
     <div class="sanpham mt-5">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <!-- danhmucsanpham-->
                    <div class="danhmucsp">
                        <h3 class="SP_title">DANH MỤC SẢN PHẨM</h3>
                        <ul>
                        <?php 
                        $sql = "SELECT * FROM danh_muc";
                        $result = $conn->query($sql);// đây là phần thực hiện truy vấn
                        if ($result->num_rows > 0) { // nếu dữ liệu có thì ta sử dụng while để duyệt qua từng hàng (có thể sử dụng foreach)
                            while ($row = $result->fetch_assoc()) 
                        { // Sử dụng biến $row 
                    ?>
                            <li><a href="chitietsp.php?ID_DM=<?=$row["ID"]?>"><?=$row["ten_danh_muc"]?></a></li>
                            <?php
                            }
                            } else {
                                echo "Không có dữ liệu.";
                            }
                        ?>
 
                           
                        </ul>

                    </div>
                    <!-- sanphambanchay -->
                    <div class="spbanchay">
                        <h3 class="SP_title">SẢN PHẨM BÁN CHẠY</h3>
                        <div class="listspbanchay d-flex ">
                            <a href="#" ><img src="https://cdn.nanoweb.vn/mediacenter/media/images/945/products/945/1/s100_100/bgd-1809tresult-1569924272.png" alt="ghế xanh"></a>
                           <div>
                                <p> <a href="#">Ghế lưới xanh 12.000.000 Đ </a></p> 
                                <p><i>Mã sản phẩm BV9917</i></p>
                                <p style="color:red">300.000Đ</p>
                           </div>
                            
                        </div>
                        <div class="listspbanchay d-flex">
                            <a href="#"><img src="https://cdn.nanoweb.vn/mediacenter/media/images/945/products/945/1/s100_100/6-bgd2410f5result-1569924226.jpg" alt=""></a>
                            
                            <div>
                                <p> <a href="#">Ghế lưới xanh 12.000.000 Đ </a></p> 
                                <p><i>Mã sản phẩm BV9917</i></p>
                                <p style="color:red">300.000Đ</p>
                           </div>
                        </div>
                    </div>
                </div>

                <!-- sanpham right -->
                <div class="col">
                    <!-- sanpham1 -->

                    <div id ="cars">
                        <select >
                            <option value="selected" selected>Sắp xếp theo</option>
                            <option value="saab">Giá tăng dần</option>
                            <option value="vw">Giá giảm dần</option>
                            <option value="audi">Tên sản phẩm A-Z</option>
                          </select>
                    </div>


                <div class="row mt-4 d-flex">
                        
                    <?php 
                        $sql = "SELECT * FROM san_pham";
                        $result = $conn->query($sql);// đây là phần thực hiện truy vấn
                        if ($result->num_rows > 0) { // nếu dữ liệu có thì ta sử dụng while để duyệt qua từng hàng (có thể sử dụng foreach)
                            while ($row = $result->fetch_assoc()) 
                        { // Sử dụng biến $row 
                    ?>
                        <div class="col-4">
                            <a href="chitietsp.php?ID=<?=$row["ID"]?>"><img class="imgsp" src="<?=$row["anh_thumbnail"]?>" alt="anh <?=$row["ten_san_pham"]?>"></a>
                            <p><?=$row["ten_san_pham"]?></p>
                            <p style="color:red"><?=$row["gia_ban"]?></p>
                        </div>
                        <?php
                            }
                            } else {
                                echo "Không có dữ liệu.";
                            }
                        ?>

                       
                </div>
                

            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
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