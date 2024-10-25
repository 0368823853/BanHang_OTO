<?php
    include '../database/connect.php';

?>

<style>
@media (max-width: 767.98px) {
    .border-sm-start-none {
        border-left: none !important;
    }
}

.social-links {
    display: flex;
    align-items: center;
    justify-content: end;
}

.social-links a {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 32px;
    height: 32px;
    color: #000;
    border: 1px solid #000;
    margin: 0 0.2rem;
    border-radius: 50%;
    text-decoration: none;
    font-size: 0.8rem;
    transition: all 0.5s ease;
}

.social-links a:hover {
    background: #000;
    border-color: transparent;
    color: #fff;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.linhkien img {
    max-width: 200px;
    height: 200px;
}

.caption {
    text-align: center;
    font-size: 13px;
    font-family: "Playfair Display";
    margin-bottom: 5px;
}
</style>
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row justify-content-center mb-3">
            <?php
            require '../database/connect.php';  
            if(isset($_POST['atcbtn'])){

                $image = $_POST['image'];
                $fullname = $_POST['fullname'];
                $dongia = $_POST['dongia'];
                $xuatxu =$_POST['xuatxu'];
        
                $sql_sanpham = "INSERT INTO cart (image, fullname, dongia, xuatxu)
                VALUES ('$image', '$fullname', $dongia, '$xuatxu')";
                $query= mysqli_query($conn, $sql_sanpham);
                    if($query){
                        echo "Chúc mừng";
                        echo "Bạn đã thêm linh kiện thành công!";
                    exit(); 
                    }else{
                    echo "Lỗi khi thêm linh kiện: " . mysqli_error($conn);
                    }
            } 
            $sql = "SELECT * FROM linhkien";
            $result = mysqli_query($conn,$sql);
            while($row  = mysqli_fetch_assoc($result)){
                ?>
            <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                    <div class="card-body">
                        <form action="./linhkien.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0 ">
                                    <div class="bg-image hover-zoom ripple rounded ripple-surface linhkien">
                                        <img src="../img/rua_xe/<?= $row['image']?>" class="w-100" />
                                        <div class="caption">
                                            <input type="text" value="<?php echo $row['image'];?>" name="image">
                                        </div>
                                    </div>
                                </div>
                                <style>
                                .caption input {
                                    border: none;
                                    background-color: #fff;
                                    display: inline-block;
                                    text-align: center;
                                    cursor: not-allowed;
                                }

                                .me-1 input {
                                    border: none;
                                    background-color: #fff;
                                    cursor: not-allowed;
                                    width: 130px;
                                }

                                .col-xl-6 input {
                                    border: none;
                                    background-color: #fff;
                                    cursor: not-allowed;
                                    width: 400px;
                                }

                                .small input {
                                    border: none;
                                    background-color: #fff;
                                    cursor: not-allowed;
                                    width: 100px;
                                }
                                </style>
                                <div class="col-md-6 col-lg-6 col-xl-6">
                                    <h5 style="color: red;"><input type="text" name="fullname"
                                            value="<?php echo $row['fullname'];?>">
                                    </h5>
                                    <div class="d-flex flex-row">
                                        <div class="text-danger mb-1 me-2">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star-half'></i>
                                        </div>

                                    </div>
                                    <span style="font-weight: bold;">Ngày nhập: </span><?php echo $row['ngaynhap'];?>
                                    <div class="mt-1 mb-0 text-muted small">
                                        <span style="font-weight: bold;">Xuất xứ: </span>
                                        <span class="text-primary"> • </span>
                                        <span><input type="text" value="<?php echo $row['xuatxu'];?>"
                                                name="xuatxu"></span>
                                    </div>
                                    <div class="mb-2 text-muted small">
                                        <span style="font-weight: bold;">Kho: </span>
                                        <span class="text-primary"> • </span>
                                        <span><?php echo $row['soluong'];?></span>
                                    </div>
                                    <hr>
                                    <p class="mb-4 mb-md-0">
                                        <span style="font-weight: bold;">Mô tả linh kiện:</span>
                                        <?php echo $row['mota'];?>
                                    </p>
                                </div>
                                <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                    <div class="d-flex flex-row align-items-center mb-1">
                                        <h4 class="mb-1 me-1" style="font-size: 20px;">
                                            <input type="text" value="<?php echo $row['dongia'];?>" name="dongia"> VNĐ
                                        </h4>

                                    </div>
                                    <span class="text-danger" style="font-size: 12px;margin-left:5px"><s>999.000
                                            VNĐ</s></span>
                                    <h6 class="text-success">Miễn phí vận chuyển</h6>
                                    <div class="d-flex flex-column mt-4">
                                        <button class="btn btn-primary btn-sm" type="button">Quay lại</button>
                                        <button class="btn btn-outline-primary btn-sm mt-2" type="submit" name="atcbtn">
                                            Thêm vào giỏ hàng
                                        </button>
                                    </div>
                                </div>
                                <div class="social-links">

                                    <a href="#">
                                        <i class='bx bxl-facebook-circle'></i>
                                    </a>
                                    <a href="#">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                    <a href="#">
                                        <i class='bx bxl-instagram-alt'></i>
                                    </a>
                                    <a href="#">
                                        <i class='bx bxl-tiktok'></i>
                                    </a>
                                    <a href="#">
                                        <i class='bx bxl-github'></i>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>



    </div>
</section>