<?php
    include './database/connect.php';
    $result = mysqli_query($conn,"SELECT * FROM cart");
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="./css/cart.css">
<section class="h-100 h-custom" style="background-color: #d2c9ff;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                    <div class="card-body p-0">
                        <form action="">
                            <div class="row g-0">
                                <div class="col-lg-8">
                                    <div class="p-5">
                                        <div class="d-flex justify-content-between align-items-center mb-5">
                                            <h1 class="fw-bold mb-0 text-black">Giỏ hàng</h1>
                                            <h6 class="mb-0 text-muted">GARA VIET</h6>
                                        </div>

                                        <table class="table">
                                            <tr>
                                                <td>Ảnh linh kiện</td>
                                                <td>Tên linh kiện</td>
                                                <td>Số lượng</td>
                                                <td>Thành tiền</td>
                                                <td>Xoá</td>
                                            </tr>
                                            <?php
                                                while($row = mysqli_fetch_array($result)){?>
                                            <tr>


                                                <div class="row mb-4 d-flex justify-content-between align-items-center">
                                                    <td>
                                                        <div class="">
                                                            <img src="./img/rua_xe/<?= $row['image']?>"
                                                                class="img-fluid rounded-3" alt="Cotton T-shirt"
                                                                style="width: 120px; height: 80px;">
                                                        </div>
                                                    </td>


                                                    <div class="col-md-3 col-lg-3 col-xl-3">
                                                        <td>
                                                            <h6 class="text-muted"><?php echo $row['xuatxu'];?></h6>
                                                            <h6 class="text-black mb-0"><?php echo $row['fullname'];?>
                                                            </h6>
                                                        </td>
                                                    </div>


                                                    <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                                        <td>
                                                            <input id="form1" min="1" name="quantity" value="1"
                                                                type="number" class="form-control form-control-sm"
                                                                style="max-width: 100px;" />
                                                        </td>
                                                    </div>


                                                    <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                                        <td>
                                                            <h6 class="mb-0"><?php echo $row['dongia']?></h6>
                                                        </td>
                                                    </div>


                                                    <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                                        <td>
                                                            <a class="text-muted"
                                                                onclick="return Del('<?php echo $row['id']; ?>')"
                                                                href="./admin/xoa.php?id=<?php echo $row['id']?>">
                                                                <ion-icon name="trash-outline"
                                                                    style="font-size: 30px; color: black;">
                                                                </ion-icon>
                                                            </a>
                                                        </td>
                                                    </div>

                                                </div>
                                            </tr>
                                            <?php
                        }
                    ?>
                                        </table>
                                        <div class="pt-5">
                                            <h6 class="mb-0"><a href="./index.php" class="text-body"><i
                                                        class="fas fa-long-arrow-alt-left me-2"></i>Quay lại</a></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 bg-grey">
                                    <div class="p-5">
                                        <h3 class="fw-bold mb-5 mt-2 pt-1">Hoá đơn</h3>
                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-4">
                                            <h5 class="text-uppercase">Tổng tiền</h5>
                                            <h5>€ <?php 
                                                $sql = "SELECT SUM(dongia) FROM cart";
                                                $query= mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_array($query);
                                            echo $row[0];?></h5>
                                        </div>

                                        <h5 class="text-uppercase mb-3" style="font-size: 15px;">Hình thức vận chuyển
                                        </h5>

                                        <div class="mb-4 pb-2">
                                            <select class="select" style="width: 130px;">
                                                <option value="1"></option>
                                                <option value="2">Nhanh</option>
                                                <option value="3">Hoả tốc</option>
                                                <option value="4">Tiết kiệm</option>
                                            </select>
                                        </div>

                                        <h5 class="text-uppercase mb-3">Voucher</h5>

                                        <div class="mb-5">
                                            <div class="form-outline">
                                                <input type="text" id="form3Examplea2"
                                                    class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Examplea2">Nhập mã của bạn</label>
                                            </div>
                                        </div>

                                        <hr class="my-4">

                                        <div class="d-flex justify-content-between mb-5">
                                            <h5 class="text-uppercase">Tổng hoá đơn</h5>
                                            <h5>€ <?php 
                                                $sql = "SELECT SUM(dongia) FROM cart";
                                                $query= mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_array($query);
                                            echo $row[0];?></h5>
                                        </div>

                                        <button type="submit" class="btn btn-dark btn-block btn-lg"
                                            data-mdb-ripple-color="dark"><a href="./giohang/thanhtoan.php">Thanh
                                                toán</a></button>

                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
function Del(name) {
    return confirm("Bạn có chắc chắn muốn xoá dịch vụ: " + name + "?");
}
</script>