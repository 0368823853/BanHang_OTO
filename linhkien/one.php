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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
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
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Linh kiện</title>
        <link rel="stylesheet" href="../css/linhkien.css">
    </head>

    <body>
        <h1>Linh kiện ô tô</h1>
        <div class="search">
            <input class="input" name="text" placeholder="Search..." type="text" id="searchInput">
        </div>
        <div id="searchResults"></div>
        <div class="fullpage">
            <?php
            require '../database/connect.php';   
            $sql = "SELECT * FROM linhkien";
            $result = mysqli_query($conn,$sql);
            while($row  = mysqli_fetch_assoc($result)){
                ?>
            <div class="linhkien" id="productList">
                <ul>
                    <li>
                        <h3><?php echo $row['fullname'];?></h3>
                    </li>
                    <div class="hihi">
                        <div class="linhkien-img">
                            <img src="../img/rua_xe/<?= $row['image']?>" alt="">
                            <div class="caption">
                                <?php echo $row['image'];?>
                            </div>
                        </div>
                        <div class="text">

                            <li>Đơn giá: <span><?php echo $row['dongia'];?></span> VNĐ</li>
                            <li>Kho: <span><?php echo $row['soluong'];?></span></li>
                            <li>Ngày nhập: <span><?php echo $row['ngaynhap'];?></span></li>
                            <li>Xuất xứ: <span><?php echo $row['xuatxu'];?></span></li>


                        </div>
                    </div>
                    <div class="mota">
                        <li>Mô tả linh kiện: <span><?php echo $row['mota'];?> </span></li>
                    </div>
                </ul>

                <div class="submit-ss">
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
                    <div class="submitt">
                        <input type="submit" value="Mua linh kiện">
                    </div>
                </div>
                <div class="social-links">
                    <p>Chia sẻ: </p>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-pinterest"></i>
                    </a>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
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
    </body>

    </html>
    <?php
    include '../inc/footer.php';
?>