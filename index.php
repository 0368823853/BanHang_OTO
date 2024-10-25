<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo_btl.png">
    <title>GARA VIET</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
                    <a href="./dangnhap.php"><i class='bx bx-arrow-to-right'></i>Đăng nhập</a>
                    <a href="./dangky.php"><i class='bx bxs-user'></i>Đăng ký</a>
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
            <img src="./img/logo_btl.png" alt="">
        </div>
        <nav>
            <div class="navbar">
                <ul class="navLink" id="productList">
                    <li><a href="#top-header" class="active">Home</a></li>
                    <li><a href="#arrivals">Chăm sóc xe <i class='bx bx-chevron-down'></i></a>
                        <ul class="drop-down">
                            <li><a href="./dichvu/ruaxe.php">Rửa xe ô tô</a></li>
                            <li><a href="./dichvu/noithat.php">Vệ sinh nội thất ô tô</a></li>
                            <li><a href="./dichvu/phugam.php">Phủ gầm ô tô</a></li>
                            <li><a href="./dichvu/ceramic.php">Phủ Ceramic ô tô</a></li>
                            <li><a href="./dichvu/baogiuong.php">Bảo dưỡng xe ô tô</a></li>
                            <li><a href="./dichvu/ngoaithat.php">Vệ sinh ngoại thất ô tô</a></li>
                        </ul>
                    </li>
                    <li><a href="./linhkien/linhkien.php">Linh kiện <i class='bx bx-chevron-down'></i></a>
                        <ul class="drop-down">
                            <li><a href="">Gối tựa cổ cao su non</a></li>
                            <li><a href="">Thảm lót sàn ô tô</a></li>
                            <li><a href="">Dây câu bình ắc quy ô tô</a></li>
                            <li><a href="">Máy bơm lốp xe ô tô tự động</a></li>
                            <li><a href="">Máy hút bụi cầm tay</a></li>
                            <li><a href="">Thiết Bị Hiển Thị Tốc Độ</a></li>
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
                            <li><a href="./admin/hotro.php">Hỗ trợ khách hàng</a></li>
                            <li><a href="">Tuyển dụng</a></li>
                            <li><a href="">Hướng dẫn mua hàng</a></li>
                            <li><a href="./zalo.html">Liên hệ trực tiếp</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="others">
                <i class='bx bx-search' id="search-icon" title="Tìm kiếm"></i>
                <div class="search-box ">
                    <input type="text" name="" id="searchInput" placeholder="Mời bạn nhập...">
                </div>
                <a href="./cart.php"><i class='bx bx-cart-download cart'></i></a>
                <button class="addBtn"><i class='bx bx-plus-circle'></i><a href="./giohang/Giohang.html"> Thêm giỏ
                        hàng</a></button>
                <i class='bx bx-menu' id="menuBtn"></i>
            </div>

        </nav>
    </header>
    <style>
    #searchResults {
        border: 1px solid red;
        width: 300px;
        margin-right: 100px;
        display: flex;
        flex-wrap: wrap;
    }
    </style>
    <div id="searchResults" class="searchresults"></div>
    <!----header slide---->
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="./img/backgound/nen_oto.jpg" alt="">
            </div>
            <div class="item">
                <img src="./img/backgound/vinfast_3.jpg" alt="">
            </div>
            <div class="item">
                <img src="./img/backgound/background_5.png" alt="">
            </div>
            <div class="item">
                <img src="./img/backgound/backgruond_4.jpg" alt="">
            </div>
        </div>

        <div class="buttons">
            <button id="prev">
                < </button>
                    <button id="next">></button>
        </div>

        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <!--Tìm kiếm dịch vụ-->
    <div class="search">
        <div class="find">
            <h3>Hãy tìm kiếm dịch vụ chăm sóc xe mà bạn cần</h3>
            <div class="find-row">
                <div class="find-item">
                    <h4>Chăm sóc xe</h4>
                    <select name="" id="">
                        <option value="">Tất cả dịch vụ</option>
                        <option value="">Rửa xe ô tô</option>
                        <option value="">Vệ sinh nội thất</option>
                        <option value="">Phủ gầm ô tô</option>
                        <option value="">Phủ Ceramic ô tô</option>
                        <option value="">Bảo dưỡng xe ô tô</option>
                        <option value="">Vệ sinh ngoại thất</option>
                    </select>
                </div>
                <div class="find-item">
                    <h4>Linh kiện xe</h4>
                    <select name="" id="">
                        <option value="">Các linh kiện</option>
                        <option value="">Gối tựa cổ cao su non</option>
                        <option value="">Thảm lót sàn ô tô</option>
                        <option value="">Dây câu bình ắc quy ô tô</option>
                        <option value="">Máy bơm lốp xe tự động</option>
                        <option value="">Máy hút bụi cầm tay</option>
                        <option value="">Thiết Bị Hiển Thị Tốc Độ</option>
                    </select>
                </div>
                <div class="find-item">
                    <h4>Hãng xe</h4>
                    <select name="" id="">
                        <option value="">Các hãng</option>
                        <option value="">HonDa</option>
                        <option value="">BMW</option>
                        <option value="">Toyota</option>
                        <option value="">Vinfast</option>
                        <option value="">Hyundai</option>
                        <option value="">Suzuki</option>
                        <option value="">Ford</option>
                        <option value="">Kia</option>
                        <option value="">Lexus</option>
                        <option value="">Mazda</option>
                        <option value="">Nissan</option>
                        <option value="">Mercedes Benz</option>
                    </select>
                </div>

                <div class="search-btn">
                    <button><i class='bx bx-search'></i>Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>

    <!--Về chúng tôi-->

    <section class="market" id="market">
        <div class="col-3">
            <img class="one" src="./img/backgound/background_5.png" alt="">
            <div class="market-icon">
                <i class='bx bxs-heart'></i>
                <i class='bx bxs-share-alt'></i>
                <i class='bx bxs-cart-download'></i>
            </div>
            <div class="service">
                <img class="two" src="./img/logo_btl.png" alt="" style="border-radius: 50%;">
                <span class="text">Hơn 10 năm <br> Chất lượng-Niềm tin-Uy tín</span>
            </div>
        </div>
        <div class="col-4">
            <h4>Về chúng tôi</h4>
            <h3>Hệ thống trung tâm <span>chăm sóc xe</span> chuyên nghiệp</h3>
            <p class="text"><span>GARA VIET </span>được rất nhiều khách hàng quan tâm và tin tưởng sử dụng với đa dạng
                gói dịch vụ như: vệ sinh xe cao cấp, chăm sóc nội ngoại thất, vệ sinh khoang máy,…</p>

            <p class="p1"><i class='bx bxs-car-mechanic'></i> Chăm sóc toàn diện</p>
            <p class="p1"><i class='bx bxs-car'></i> Phụ kiện an toàn</p>
            <p class="p1"><i class='bx bxs-car-crash'></i> KTV giàu kinh nghiệm</p>
            <button>Xem thêm<i class='bx bx-right-arrow-alt'></i></button>
        </div>
    </section>

    <!--Chăm sóc xe-->
    <section class="arrivals" id="arrivals">
        <h4><i class='bx bxs-car'></i>GARA VIET</h4>
        <h1>Dịch vụ <span>Chăm sóc ô tô</span></h1>

        <div class="arr-row">
            <div class="arr-col">
                <div class="image">
                    <img src="./img/rua_xe/rua_xe_2.jpeg" alt="">
                </div>
                <h5>Rửa xe ô tô</h5>
                <div class="rating">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="review">
                        <span>5.0 (78 Đánh giá)</span>
                    </div>
                </div>
                <div class="features">
                    <span><i class='bx bxs-error-alt'></i> Chuyên nghiệp</span>
                    <span><i class='bx bxs-label'></i> Chất lượng</span>
                    <span><i class='bx bxs-shield-plus'></i> Uy tín</span>
                    <span><i class='bx bxs-car'></i> GARA VIET</span>
                </div>
                <div class="price">
                    <p>912.000 VNĐ<span> 962.000 VNĐ</span></p>
                    <button><a href="./dichvu/ruaxe.php" style="color: #fff;">Chi tiết</a></button>
                </div>
            </div>

            <div class="arr-col">
                <div class="image">
                    <img src="./img/ve_sinh_noi_that/ve-sinh-noi-that-oto-1.jpeg" alt="">
                </div>
                <h5>Vệ sinh nội thất</h5>
                <div class="rating">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="review">
                        <span>5.0 (798 Đánh giá)</span>
                    </div>
                </div>
                <div class="features">
                    <span><i class='bx bxs-error-alt'></i> Chuyên nghiệp</span>
                    <span><i class='bx bxs-label'></i> Chất lượng</span>
                    <span><i class='bx bxs-shield-plus'></i> Uy tín</span>
                    <span><i class='bx bxs-car'></i> GARA VIET</span>
                </div>
                <div class="price">
                    <p>88.000 VNĐ<span> 99.000 VNĐ</span></p>
                    <button><a href="./dichvu/noithat.php" style="color: #fff;">Chi tiết</a></button>
                </div>
            </div>

            <div class="arr-col">
                <div class="image">
                    <img src="./img/phu_gam/phu-gam-o-to-1.jpg" alt="">
                </div>
                <h5>Phủ gầm ô tô</h5>
                <div class="rating">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="review">
                        <span>5.0 (1k Đánh giá)</span>
                    </div>
                </div>
                <div class="features">
                    <span><i class='bx bxs-error-alt'></i> Chuyên nghiệp</span>
                    <span><i class='bx bxs-label'></i> Chất lượng</span>
                    <span><i class='bx bxs-shield-plus'></i> Uy tín</span>
                    <span><i class='bx bxs-car'></i> GARA VIET</span>
                </div>
                <div class="price">
                    <p>498.000 VNĐ<span> 599.000 VNĐ</span></p>
                    <button><a href="./dichvu/phugam.php" style="color: #fff;">Chi tiết</a></button>
                </div>
            </div>

            <div class="arr-col">
                <div class="image">
                    <img src="./img/ceramic_o_to/ceramic-o-to-uy-tin-1.jpg" alt="">
                </div>
                <h5>Phủ Ceramic ô tô</h5>
                <div class="rating">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="review">
                        <span>5.0 (971 Đánh giá)</span>
                    </div>
                </div>
                <div class="features">
                    <span><i class='bx bxs-error-alt'></i> Chuyên nghiệp</span>
                    <span><i class='bx bxs-label'></i> Chất lượng</span>
                    <span><i class='bx bxs-shield-plus'></i> Uy tín</span>
                    <span><i class='bx bxs-car'></i> GARA VIET</span>
                </div>
                <div class="price">
                    <p>799.000 VNĐ<span> 833.000 VNĐ</span></p>
                    <button><a href="./dichvu/ceramic.php" style="color: #fff;">Chi tiết</a></button>
                </div>
            </div>

            <div class="arr-col">
                <div class="image">
                    <img src="./img/cham_soc_xe/cham-soc-xe-o-to-chuyen-nghiep-1.jpg" alt="">
                </div>
                <h5>Bảo dưỡng xe ô tô</h5>
                <div class="rating">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="review">
                        <span>5.0 (78 Đánh giá)</span>
                    </div>
                </div>
                <div class="features">
                    <span><i class='bx bxs-error-alt'></i> Chuyên nghiệp</span>
                    <span><i class='bx bxs-label'></i> Chất lượng</span>
                    <span><i class='bx bxs-shield-plus'></i> Uy tín</span>
                    <span><i class='bx bxs-car'></i> GARA VIET</span>
                </div>
                <div class="price">
                    <p>989.000 VNĐ<span> 999.000 VNĐ</span></p>
                    <button><a href="./dichvu/baogiuong.php" style="color: #fff;">Chi tiết</a></button>
                </div>
            </div>

            <div class="arr-col">
                <div class="image">
                    <img src="./img/ve_sinh_ngoai_that/ngoai-that-1.jpg" alt="">
                </div>
                <h5>Vệ sinh ngoại thất ô tô</h5>
                <div class="rating">
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                    <div class="review">
                        <span>5.0 (728 Đánh giá)</span>
                    </div>
                </div>
                <div class="features">
                    <span><i class='bx bxs-error-alt'></i> Chuyên nghiệp</span>
                    <span><i class='bx bxs-label'></i> Chất lượng</span>
                    <span><i class='bx bxs-shield-plus'></i> Uy tín</span>
                    <span><i class='bx bxs-car'></i> GARA VIET</span>
                </div>
                <div class="price">
                    <p>98.000 VNĐ<span> 99.000 VNĐ</span></p>

                    <button><a href="./dichvu/ngoaithat.php" style="color: #fff;">Chi tiết</a></button>
                </div>
            </div>
        </div>
    </section>

    <!-- automatic -->
    <?php
    require_once('./utils/utility.php');
    require_once('./database/dbhelper.php');

    $fullname = $email = $phone = $msg = '';
    if(!empty($_POST['submit'])){
        $email = getPost('email');
        $pwd = getPost('password');
        

        $sql = "select * from user where email='$email' and password='$pwd'";
        $userExist = executeResult($sql, true);
        if($userExist == null){
            $msg = 'Email hoặc Password không đúng!';
        }else{
            header('Location: index.php');
            die();
        }
    }

    ?>
    <div class="popup">
        <div class="contentBox">
            <div class="close"></div>
            <div class="imgBx">
                <img src="./img/logo_btl.png" alt="" style="border-radius: 50%;">
            </div>
            <div class="content">
                <div>
                    <h3>Mời bạn đăng nhập</h3>
                    <h4>Chào mừng bạn đến với GARA VIET</h4>
                    <form action="">
                        <table class="user">
                            <tr>
                                <td><label for="">Username: </label> </td>
                                <td><input required="true" type="email" class="form-control" id="email" name="email"
                                        placeholder="Email"></td>
                                <!--<input type="text" name="" id="" placeholder="Enter username"></td>-->
                            </tr>
                            <tr>
                                <td><label for="">PassWord: </label> </td>
                                <td><input required="true" type="password" class="form-control" id="pwd" name="password"
                                        minlength="6" placeholder="Password"></td>
                                <!--<input type="text" name="" id="" placeholder="PassWord"></td>-->
                            </tr>
                        </table><br>
                        <table class="col-user">
                            <tr>
                                <td><input type="submit" name="submit" id="" value="Đăng nhập"></td>
                                <td>
                                    <p>Chưa có tài khoản?</p><a href="./dangky.php">Đăng ký</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Sứ mệnh-->
    <section class="blog" id="blog">
        <div class="heading">
            <span>Sứ mệnh của chúng tôi</span>
            <h3>Chào mừng các độc giả thân yêu đến với web quản lý dịch vụ chăm sóc xe ô tô <span>GARA VIET</span></h3>
            <p>Nơi mà sự hòa mình vào thế giới của những chiếc xe đẳng cấp và đam mê động cơ không ngừng. Chúng tôi tự
                hào là đối tác đáng tin cậy của bạn trong việc tìm kiếm chiếc xe hoàn hảo, mang đến cho bạn trải nghiệm
                mua sắm độc đáo và thoải mái.</p>
        </div>
        <div class="blog-container container">
            <div class="box">
                <img src="./img/backgound/background_1.jpg" alt="">
                <span>Khám Phá Sự Hoàn Hảo</span>
                <h3>Đa Dạng và Chất Lượng</h3>
                <p>Chúng tôi tự tin giới thiệu đến bạn một bảng phong phú các mẫu xe ô tô từ các nhãn hiệu nổi tiếng
                    trên thị trường,mang đến cho bạn một kho ô tô đa dạng, từ những mô hình động cơ xanh cho đến những
                    chiếc xe sang trọng</p>
                <a href="#" class="blog-btn">Đọc thêm<i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <div class="box">
                <img src="./img/backgound/background_2.png" alt="">
                <span>Tiện Ích và Hiệu Năng</span>
                <h3> Hơn Cả Một Chiếc Xe Sang</h3>
                <p>Từ hệ thống giải trí tiên tiến đến công nghệ an toàn hàng đầu, mỗi chiếc xe trên trang web của chúng
                    tôi đều là biểu tượng của sự tiện lợi và sang trọng, cung cấp dịch vụ đặt hẹn thử nghiệm và giao
                    hàng tận nhà.</p>
                <a href="#" class="blog-btn">Đọc thêm<i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <div class="box">
                <img src="./img/backgound/backgruond_4.jpg" alt="">
                <span>Dịch Vụ Hỗ Trợ Đắc Lực</span>
                <h3>Mua Sắm Tận Hưởng và An Tâm</h3>
                <p>Bạn sẽ cảm nhận được sự chăm sóc và tận tâm mà chúng tôi dành cho khách hàng, đảm bảo mọi trải nghiệm
                    mua sắm đều là một hành trình đáng nhớ. Chúng tôi luôn mở cửa 24/7 để đảm bảo rằng bạn nhận được sự
                    hỗ trợ khi bạn cần.</p>
                <a href="#" class="blog-btn">Đọc thêm<i class='bx bx-right-arrow-alt'></i></a>
            </div>
            <div class="box">
                <img src="./img/backgound/photo-6-16163808628411498197517.webp" alt="" style="margin-top: 2px;">
                <span>Chấp Nhận Thách Thức</span>
                <h3> Hãy Đặt Làm Chủ Cuộc Chơi</h3>
                <p>Hãy đặt làm chủ cuộc chơi và khám phá thế giới xe ô tô thông qua đôi mắt của chúng tôi. Bạn đơn giản
                    chỉ cần ngồi thoải mái và để chúng tôi làm nên những điều tuyệt vời trong thế giới ô tô.</p>
                <a href="#" class="blog-btn">Đọc thêm<i class='bx bx-right-arrow-alt'></i></a>
            </div>
        </div>
    </section>

    <!--Đánh giá của khách hàng-->

    <section class="client" id="client">
        <h4><i class='bx bxs-car'></i>Đánh giá từ khách hàng</h4>
        <h1>Khách hàng nói gì về <span>GARA VIET</span></h1>
        <div class="swiper myClient">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide">
                    <img src="./img/client/viet.jpg" alt="">
                    <h5>Nguyễn Tiến Việt</h5>
                    <span>Khách hàng</span>
                    <p>Dịch vụ hoàn thành hơi lâu, nhưng tôi cũng hiểu rằng chất lượng cần thời gian. Cửa hàng có thể
                        cải thiện một chút về thời gian hoàn thành.</p>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="./img/logo_btl.png" alt="">
                    <h5>Hoàng Duy Yên</h5>
                    <span>Khách hàng</span>
                    <p>Cửa hàng có một khu vực đợi thoải mái với nước uống miễn phí và Wi-Fi. Họ còn có dịch vụ đón đưa
                        nếu bạn cần. Rất thuận tiện!</p>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="./img/dangnhap/fb-logo.jpg" alt="">
                    <h5>Hà Văn Quý</h5>
                    <span>Khách hàng</span>
                    <p>Nhân viên ở đây thật sự rất tận tâm và chuyên nghiệp. Họ giải thích mọi vấn đề cụ thể với tôi và
                        tư vấn về những dịch vụ cần thiết.</p>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="./img/dangnhap/gg-logo.jpg" alt="">
                    <h5>Nguyễn Lý Bằng</h5>
                    <span>Khách hàng</span>
                    <p>Tôi đã nhận được sự phục vụ tốt nhất ở đây. Nhân viên thân thiện và sẵn lòng giúp đỡ. Họ đã làm
                        cho trải nghiệm của tôi trở nên dễ dàng.</p>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
                <div class="swiper-slide slide">
                    <img src="./img/backgound/vinfast_3.jpg" alt="">
                    <h5>Trần Văn Giang</h5>
                    <span>Khách hàng</span>
                    <p>Giá cả ở mức trung bình so với các cửa hàng khác. Tôi muốn họ cung cấp một số ưu đãi hoặc giảm
                        giá đặc biệt cho những khách hàng.</p>
                    <div class="stars">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star-half'></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!--Linh kiện-->
    <section class="cars" id="cars">
        <div class="heading">
            <span>Tất cả những linh kiện mà chúng tôi có</span>
            <h2>Mời bạn tham khảo!</h2>
            <p>Chúng tôi tự hào là trung tâm chăm sóc ô tô đáng tin cậy của bạn trong hành trình đánh bóng cho chiếc xe
                của mình.</p>
            <br>
        </div>
        <div class="cars-container">
            <div class="box" title="Xem chi tiết">
                <img src="./img/goituaco/goituaco_2.webp" alt="">
                <a href="#">
                    <h2>Gối tựa cổ cao su non</h2>
                </a>
            </div>
            <div class="box" title="Xem chi tiết">
                <img src="./img/thamlotsan/thamlotsan_1.webp" alt="">
                <a href="">
                    <h2>Thảm lót sàn ô tô</h2>
                </a>
            </div>
            <div class="box" title="Xem chi tiết">
                <img src="./img/daycau/daycau_1.jpg" alt="">
                <a href="">
                    <h2>Dây câu bình ắc quy ô tô</h2>
                </a>
            </div>
            <div class="box" title="Xem chi tiết">
                <img src="./img/maybomxe/maybomxe_1.png" alt="">
                <a href="">
                    <h2>Máy bơm lốp xe ô tô tự động</h2>
                </a>
            </div>
            <div class="box" title="Xem chi tiết">
                <img src="./img/mayhutbui/mayhutbui_1.jpg" alt="">
                <a href="">
                    <h2>Máy hút bụi cầm tay</h2>
                </a>
            </div>
            <div class="box" title="Xem chi tiết">
                <img src="./img/tocdo/tocdo_1.jpg" alt="">
                <a href="">
                    <h2>Thiết bị hiển thị tốc độ</h2>
                </a>
            </div>
        </div>
    </section>


    <!--Chân trang-->
    <section class="footer" id="footer">
        <div class="footer-container container">
            <div class="footer-boxx">
                <a href="" class="logo">GARA<span>VIET</span></a>
                <div class="social">
                    <a href="https://www.facebook.com/profile.php?id=100024948677618&mibextid=LQQJ4d"><i
                            class='bx bxl-facebook'></i></a>
                    <a href="https://instagram.com/vietbo14?igshid=M2RkZGJiMzhjOQ%3D%3D&utm_source=qr"><i
                            class='bx bxl-instagram-alt'></i></a>
                    <a href="https://youtube.com/@ntvanimebro6816?si=6Wu9LM7LQsv4dDCU"><i
                            class='bx bxl-youtube'></i></a>
                    <a href="https://github.com/0368823853"><i class='bx bxl-github'></i></a>
                    <a href="https://www.tiktok.com/@viet17110?_t=8hITpzZgNbr&_r=1"><i class='bx bxl-tiktok'></i></a>
                </div>
            </div>
            <div class="footer-box">
                <h3>Trang web</h3>
                <a href="#">Trang chủ</a>
                <a href="#">Chăm sóc xe</a>
                <a href="#">Linh kiện</a>
                <a href="#">Đơn hàng</a>
                <a href="#">Về chúng tôi</a>
                <a href="#">Liên hệ</a>
            </div>
            <div class="footer-box">
                <h3>Về chúng tôi</h3>
                <a href="">Lịch sử thương hiệu</a>
                <a href="">Tầm nhìn sứ mệnh</a>
                <a href="">Hệ thống cửa hàng</a>
            </div>
            <div class="footer-box">
                <h3>Liên hệ với chúng tôi</h3>
                <a href="">Hướng dẫn mua hàng</a>
                <a href="">Tuyển dụng</a>
                <a href="">Hỗ trợ khách hàng</a>
                <a href="https://0368823853.github.io/">Tài khoản</a>
                <a href="">Liên hệ trực tiếp</a>
            </div>
            <div class="footer-box">
                <h3>Hotline</h3>
                <a href="https://maps.app.goo.gl/y1DKib8iKa5wRhP16" style="color: #fff;"><i class='bx bxs-map'></i> Đại
                    học công nghệ đông á</a>
                <p><i class='bx bxs-phone'></i> Mua hàng online: 0393.249.214</p>
                <p><i class='bx bxs-phone'></i> Hotline CSKH: 0344.511.138</p>
                <p><i class='bx bxs-envelope'></i> Phản hồi khiếu nại: shopviet68@gmail.com</p>
            </div>
        </div>
    </section>
    <script>
    // const onSearch = () => {
    //     const input = document.querySelector("#search");
    //     const filter = input.value.toUpperCase();
    //     const list = document.querySelectorAll("#list li");
    //     list.forEach((el) => {
    //         const text = el.textContent.toUpperCase();
    //         el.style.display = text.includes(filter) ? "" : "none";
    //     });
    // }
    document.addEventListener("DOMContentLoaded", function() {
        // Lấy các phần tử DOM cần thiết
        var searchInput = document.getElementById("searchInput");
        var productList = document.getElementById("productList");
        var searchResults = document.getElementById("searchResults");

        // Lắng nghe sự kiện khi người dùng nhập vào ô tìm kiếm
        searchInput.addEventListener("input", function() {
            // Xóa kết quả tìm kiếm trước đó
            searchResults.innerHTML = "";

            // Lấy từ khóa tìm kiếm và chuyển đổi thành chữ thường để so sánh
            var keyword = searchInput.value.toLowerCase();

            // Lặp qua danh sách sản phẩm và lọc kết quả
            for (var i = 0; i < productList.children.length; i++) {
                var product = productList.children[i].textContent.toLowerCase();

                // Nếu từ khóa xuất hiện trong tên sản phẩm, hiển thị kết quả
                if (product.includes(keyword)) {
                    var resultItem = document.createElement("div");
                    resultItem.textContent = productList.children[i].textContent;
                    searchResults.appendChild(resultItem);
                }
            }
        });
    });
    </script>

    <!--
        <div class="rating">
            <input value="5" name="rating" id="star5" type="radio">
            <label for="star5"></label>
            <input value="4" name="rating" id="star4" type="radio">
            <label for="star4"></label>
            <input value="3" name="rating" id="star3" type="radio">
            <label for="star3"></label>
            <input value="2" name="rating" id="star2" type="radio">
            <label for="star2"></label>
            <input value="1" name="rating" id="star1" type="radio">
            <label for="star1"></label>
        </div>
        -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="./js/main.js"></script>
</body>

</html>