<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="../img/logo_btl.png">
    <title>GARA VIET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/ruaxe.css">
    <link rel="stylesheet" href="../css/hotro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>

    <!--Tiêu đề trên cùng-->
    <div class="top-header" id="top-header">
        <div class="out-box">
            <div class="inside-box">
                <div class="col-1">
                    <span><i class='bx bxs-envelope'></i>vietloz122@gmail.com</span>
                    <span><i class='bx bxs-phone-call'></i>(+84) 368823853</span>
                    <span><i class='bx bxs-alarm'></i>Monda - Sunday (07:00 AM - 18:00 PM)</span>
                </div>

                <div class="col-2">
                    <a href="../dangnhap.php"><i class='bx bx-arrow-to-right'></i>Đăng nhập</a>
                    <a href="../dangky.php"><i class='bx bxs-user'></i>Đăng ký</a>
                    <span>Follow me</span>
                    <div class="social">
                        <i class='bx bxl-facebook'></i>
                        <i class='bx bxl-tiktok'></i>
                        <i class='bx bxl-instagram-alt'></i>
                        <i class='bx bxl-youtube'></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Phần điều hướng-->
    <header class="header">
        <div class="logo">
            <img src="../img/logo_btl.png" alt="">
        </div>
        <nav>
            <div class="navbar">
                    <ul class="navLink">
                        <li><a href="#top-header" class="active">Home</a></li>
                        <li><a href="#arrivals">Chăm sóc xe <i class='bx bx-chevron-down'></i></a>
                            <ul class="drop-down">
                                <li><a href="../dichvu/ruaxe.php">Rửa xe ô tô</a></li>
                                <li><a href="../dichvu/noithat.php">Vệ sinh nội thất ô tô</a></li>
                                <li><a href="../dichvu/phugam.php">Phủ gầm ô tô</a></li>
                                <li><a href="../dichvu/ceramic.php">Phủ Ceramic ô tô</a></li>
                                <li><a href="../dichvu/baogiuong.php">Bảo dưỡng xe ô tô</a></li>
                                <li><a href="../dichvu/ngoaithat.php">Vệ sinh ngoại thất ô tô</a></li>
                            </ul>
                        </li>
                        <li><a href="#cars">Linh kiện <i class='bx bx-chevron-down'></i></a>
                            <ul class="drop-down">
                                <li><a href="../linhkien/one.php">Gối tựa cổ cao su non</a></li>
                                <li><a href="../linhkien/two.php">Thảm lót sàn ô tô</a></li>
                                <li><a href="../linhkien/three.php">Dây câu bình ắc quy ô tô</a></li>
                                <li><a href="../linhkien/for.php">Máy bơm lốp xe ô tô tự động</a></li>
                                <li><a href="../linhkien/five.php">Máy hút bụi cầm tay</a></li>
                                <li><a href="../linhkien/six.php">Thiết Bị Hiển Thị Tốc Độ</a></li>
                            </ul>
                        </li>
                        <li><a href="">Đơn hàng <i class='bx bx-chevron-down'></i></a>
                            <ul class="drop-down">
                                <li><a href="">Chi tiết đơn hàng</a></li>
                                <li><a href="">Sản phẩm đã mua</a></li>
                                <li><a href="">Sản phẩm đã huỷ</a></li>
                                <li><a href="#client">Đánh giá</a></li>
                            </ul>
                        </li>
                        <li><a href="">Về chúng tôi <i class='bx bx-chevron-down'></i></a>
                            <ul class="drop-down">
                                <li><a href="#market">Thương hiệu</a></li>
                                <li><a href="#blog">Sứ mệnh</a></li>
                                <li><a href="">Địa chỉ</a></li>
                            </ul>
                        </li>
                        <li><a href="#footer">Liên hệ <i class='bx bx-chevron-down'></i></a>
                            <ul class="drop-down">
                                <li><a href="">Chính sách bảo hành</a></li>
                                <li><a href="">Hỗ trợ khách hàng</a></li>
                                <li><a href="">Tuyển dụng</a></li>
                                <li><a href="">Hướng dẫn mua hàng</a></li>
                                <li><a href="../zalo.html">Liên hệ trực tiếp</a></li>
                            </ul>
                        </li>
                    </ul>
            </div>
            <div class="others">
                <i class='bx bx-search' id="search-icon" title="Tìm kiếm"></i>
                <div class="search-box ">
                    <input type="search" name="" id="" placeholder="Mời bạn nhập...">
                </div>
                <i class='bx bx-cart-download cart'></i>
                <button class="addBtn"><i class='bx bx-plus-circle'></i> Thêm giỏ hàng</button>
                <i class='bx bx-menu' id="menuBtn"></i>
            </div>
        </nav>
    </header>