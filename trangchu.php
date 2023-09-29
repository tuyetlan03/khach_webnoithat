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

<style>
    
        
</style>
</head>
<body>
    <div class="gioithieu">
      
        <div class = "container  " >
        <div class="row nav" >
            <div class="col">
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
                    <li> <input type="text" placeholder="Tìm kiếm"> </li>
                    <li><a href="#"><i class='bx bx-search'></i></a></li>
                    <li><a href="#"><i class='bx bx-cart-alt' ></i></a></li>
                    <li><a href="#"><i class='bx bx-user'></i></a></li>
                </ul>
            </div>

            <!--Page1-->
            <div class="name">
                <div>
                    <p class="bella">BELLA VITA</p> 
                    <p>I N T E R I O R</p>
                </div>
                
            </div>
            
        </div>
        </div>
    </div>

    <!-- gioithieu -->
   <div class="gioithieu1">
    <div class=" container">
        <div class="row">
            <!-- gioithieu_left -->
            <div class="col-7">
                <!-- tittle -->
                <div class ="name_GT d-flex">
                    <h3 class="name_number">01</h3>
                    <h3 class="ml-5 mb-3">GIỚI THIỆU</h3>
                </div>
                <!-- text -->
                <div>
                    <p class="ml-5 gioithieu1_left_text">Công ty TNHH Nội Thất Bella Vita Interior là doanh nghiệp chuyên sản xuất, kinh doanh các sản phẩm nội thất bằng gỗ. Kể từ khi thành lập đến nay, cùng với những nỗ lực không ngừng trong quá trình sản xuất kinh doanh, Luôn đặt lợi ích của khách hàng làm tiêu chí hoạt động. Công ty đã tạo cho mình được chỗ đứng vững chắc, được khách hàng tín nhiệm. Cùng với đội ngũ nhân viên giỏi về chuyên môn, năng động trong công việc.Bella Vita Interior hứa hẹn sẽ mang đến sự hài lòng cho quý khách.</p>
                    <button class="ml-5 gioithieu2_left_button"> <a href="#">TÌM HIỂU THÊM</a> </button>
                </div>
                <!-- end -->
                <div class=" ml-5 mr-5 mt-4 gioithieu1_left_end row">
    
                    <div class="col">
                        <h1 style="font-size: 60px;">10</h1>
                        <p>Hơn 10 năm kinh nghiệm trong nghành</p>
                    </div>

                    <div class="col">
                        <h1 style="font-size: 60px;">20</h1>
                        <p>Hơn 10 năm kinh nghiệm trong nghành</p>
                    </div>
                    
                    <div class="col">
                        <h1 style="font-size: 60px;">88%</h1>
                        <p>Hơn 10 năm kinh nghiệm trong nghành</p>
                    </div>
                    
                </div>


            </div>
            <!-- gioithieu_right -->
            <div class="col">
                <img src="https://lan.nanoweb.vn/mediacenter/media/images/945/intro/ava/s700_0/session-2548826640-1569901845.jpg" alt="">
            </div>
        </div>
    </div>
   </div>
    <!-- sanpham -->
    <div class="sanpham">
    <div class="container"> 
        
        <div class="row">
            <div class="name_SP d-flex">
                <h3 class="name_number2">02</h3>
                <h3 class="ml-5">SẢN PHẨM</h3>

                
            </div>

        </div>
        
        <!-- anh1 -->
        <div class="row">
        <?php 
            $sql = "SELECT * FROM danh_muc";
            $result = $conn->query($sql);// đây là phần thực hiện truy vấn
            if ($result->num_rows > 0) { // nếu dữ liệu có thì ta sử dụng while để duyệt qua từng hàng (có thể sử dụng foreach)
                while ($row = $result->fetch_assoc()) 
            { // Sử dụng biến $row 
        ?>
            <div class="item col" >
                <div>
                    <a href="trangsanpham.html"> <img style="width:360px"; src="<?=$row["img_danh_mục"]?>" alt="anh <?=$row["ten_danh_muc"]?>"></a>
                </div>
                <div class="item_content">
                    <h3><?=$row["ten_danh_muc"]?></h3>

                </div>

            </div>
            <?php
            }
            } else {
                echo "Không có dữ liệu.";
            }
        ?>
            
         </div>

     <!-- sản phẩm tiêu biểu -->
      
     
     <div class="sanpham">
        <div class="container"> 
            
            <div class="row">
                <div class="name_SP d-flex ">
                    <h3 class="name_number2">03</h3>
                    <h3 class="ml-1">SẢN PHẨM TIÊU BIỂU</h3>
    
                    
                </div>
    
            </div>
            <!-- slide -->
            <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item  active" data-interval="5000"
                  >
                    <img class="d-block w-100" src="https://lan.nanoweb.vn/mediacenter/media/images/945/news/ava/s500_500/can-ho-duplex-penthouse-1570849544.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item" data-interval="10000"
                  >
                    <img class="d-block w-100" src="https://lan.nanoweb.vn/mediacenter/media/images/945/news/ava/s500_500/phong20ngu20hop20phong20thuy20cho20tuoi20196820mau20than2031-1570849634.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item" data-interval="10000"
                  >
                    <img class="d-block w-100" src="https://lan.nanoweb.vn/mediacenter/media/images/945/news/ava/s500_500/4bdyxmd-1571016111.png" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
         
              
        </div>
        </div>
    
    


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