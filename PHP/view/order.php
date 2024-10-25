
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/order.css">
</head>
<body>
    <div class="fullpage">
        <header id="header">
            <nav id="Menu">
                <ul class="Menu-container">
                    <li><a href=""></a></li>
                    <li><a href="index.php">Giới thiệu <i class='bx bx-chevron-down'></i>
                        <ul class="Menu-container-child">
                            <li><a href="">Về nha khoa kim</a></li>
                            <li><a href="">Đội ngũ bác sĩ</a></li>
                            <li><a href="">Nhà máy sản xuất răng sứ</a></li>
                            <li><a href="">Tiêu chuẩn chất lượng</a></li>
                            <li><a href="">Trải nghiệm khách hàng</a></li>
                            <li><a href="">Địa chỉ chi nhánh</a></li>
                            <li><a href=""> Cơ sở pháp lý phòng khám</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Dịch vụ <i class='bx bx-chevron-down'></i></a>
                        <div class=" Menu-container-child Menu-container-child-service ">
                            <div class="menu-list-item">
                                <img src="../img/a3.png" alt="">
                                <ul>
                                    <li><a href="">Bọc răng sứ</a></li>
                                    <li><a href="">Cấy ghép implant</a></li>
                                    <li><a href="">Niềng răng thẩm mỹ</a></li>
                                    <li><a href="">Mặt dán sứ Venner</a></li>
                                    <li><a href="">Tẩy trắng răng</a></li>
                                </ul>
                                <ul>
                                    <li><a href="">Nhổ răng khôn</a></li>
                                    <li><a href="">Bệnh lý nha chu</a></li>
                                    <li><a href="">Điều trị tủy</a></li>
                                    <li><a href="">Hàm trám răng</a></li>
                                    <li><a href="">Chăm sốc răng miệng cho thai phụ</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="">Bảng giá </a></li>
                    <li><a href="">Tin tức <i class='bx bx-chevron-down'></i></a>
                        <ul class="Menu-container-child">
                            <li><a href="">Hoạt động Nha khoa Kim</a></li>
                            <li><a href="">Hợp tác chiến lược</a></li>
                            <li><a href="">Tin tức & sự kiện</a></li>
                            <li><a href="">Kiến thức răng miệng</a></li>
                            <li><a href="">Liên kết web</a></li>
                        </ul>
                    </li>
                    <li id="btn-gift"><a href="">Ưu đãi <i class='bx bxs-gift' ></i></a></li>
                    <li id="btn-order"><a  href=""><i class='bx bx-notepad'></i> ĐẶT HẸN</a></li>
                    <li id="btn-phone"><a href=""> <i class='bx bxs-phone-call'></i> 1900 6899</a></li>
                </ul>
            </nav>
        </header>
        <div class="order">
            <div class="order-container">
                <h2>ĐẶT LỊCH HẸN</h2>
                <p>Vui lòng để lại thông tin, nhu cầu của quý khách.</p>
                <p>Nha Khoa Kim sẽ liên hệ đến Quý Khách trong thời gian sớm nhất</p>
                <form name="order" action="../model/Add.php" method="post">
                   <div class="form-container">
                        <div class="form-container-raidio">
                            <input type="radio" name="sex" value="Nam" id="male">
                            <label>Anh</label>
                            <input type="radio" name="sex" value="Nữ" id="female">
                            <label>Chị</label>
                        </div>
                        <div class="form-container-text">
                            <input type="text" name="name_khach" placeholder="Họ tên..." value="">
                            <input type="text" name="ngay_sinh" placeholder="Ngày sinh..(năm-tháng-ngày)" value="">
                        </div>
                        <div class="form-container-text">
                            <input type="text" name="number" placeholder="Số điện thoại.." value="">
                            <input type="text" name="diachi" placeholder="Địa chỉ.." value="">
                        </div>
                        <div class="form-container-text2">
                            <input type="text" name="date_order" placeholder="Thời gian..(năm-tháng-ngày)" value="">
                        </div>
                        <div>
                            <textarea name="ghi_chu" placeholder="Ghi chú (nếu có)..."></textarea>
                        </div>
                        <button onclick="alert('Đặt lịch thành công')" type="submit" name="sbm_order">
                            <i class='bx bx-notepad'></i>
                            ĐẶT LỊCH HẸN
                        </button>
                   </div>
                </form>
            </div>
        </div>
        <div class="content-6nd">
            <div><h2>NHA KHOA TIÊU CHUẨN CHẤT LƯỢNG</h2></div>
            <div class="content-6nd-bot">
                <div class="slider-6nd">
                    <div class="list-6nd">
                        <img src="../img/gia1.png" alt="">
                        <img src="https://nhakhoakim.com/wp-content/uploads/2023/03/KIMDENTAL-GLOBAL_size-A3-scaled.jpg" alt="">
                        <img src="https://nhakhoakim.com/wp-content/uploads/2023/03/ISO-9001-NKK-2022_size-A3-scaled.jpg" alt="">
                        <img src="https://nhakhoakim.com/wp-content/uploads/2021/11/nhakhoakimtop10thuonghieu.jpg" alt="">
                        <img src="https://nhakhoakim.com/wp-content/uploads/2016/11/nhakhoakimtop100asia.jpg" alt="">
                        <img src="https://nhakhoakim.com/wp-content/uploads/2016/11/nhakhoakimtop100asia.jpg" alt="">
                        
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-contaier">
                <div>
                    <div>
                        <p>Trả góp 0%-Thanh toán linh hoạt</p>
                    </div>
                    <div>
                        <p>hợp tác chiến lược</p>
                    </div>
                    <div>
                        <p>Bảo hiểm liên kết</p>
                    </div>
                    <div>
                        <p>Hệ thống phòng khám</p>
                    </div>
                    <div>
                        <p>Tuyển dụng</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p>Nhà máy răng sứ</p>
                    </div>
                    <div>
                        <p>Tiêu chuẩn chất lượng</p>
                    </div>
                    <div>
                        <p>Niềng răng thẩm mỹ</p>
                    </div>
                    <div>
                        <p>Trồng răng Implant</p>
                    </div>
                    <div>
                        <p>Răng sứ thẩm mỹ</p>
                    </div>
                </div>
                <div>
                    <div>
                        <p>Kết nối với chúng tôi</p>
                    </div>
                    <div>
                        <div>
                            <img src="img/640px-Facebook-icon-1.png" alt="">
                            <img style="background-color: rgb(245, 245, 245);" src="img/youtube.png" alt="">
                            <img style="background-color: rgb(245, 245, 245);" src="img/zalo.png" alt="">
                            <img src="img/pngwing.com.png" alt="">
                            <img src="img/instagram.png" alt="">
                            <img src="img/tiktok.png" alt="">
                            <img src="img/in.png" alt="">
                        </div>
                    </div>
                    <div>
                        <p style="font-size: 12px;">Chính sách bảo mật-chính sách bảo hành</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="../controller/effectOrder.js"></script>
</body>
</html>