<?php
  include '../database/connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ hàng</title>
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
</head>

<body>

    <h2>Giỏ hàng</h2>

    <table>
        <tr>
            <td>Sản phẩm</td>
            <td>Tên linh kiện</td>
            <td>Giá</td>
        </tr>
        <?php
                    require '../database/connect.php';  
                    if(isset($_POST['sbm'])){
        
                        $fullname = $_POST['fullname'];
                        $email = $_POST['email'];
                        $diachi = $_POST['diachi'];
                        $tongtien = $_POST['tongtien'];   
                        $phuongthuc = $_POST['phuongthuc'];
                        $ngaynhap = $_POST['ngaynhap'];
                
                        $sql_sanpham = "INSERT INTO checkout( fullname, email, diachi, tongtien, phuongthuc, ngaynhap)
                        VALUES ('$fullname', '$email', '$diachi', $tongtien, '$phuongthuc', '$ngaynhap')";
                        $query= mysqli_query($conn, $sql_sanpham);
                            if($query){
                                echo "Chúc mừng";
                                echo "Bạn đã thanh toán thành công!";
                            exit(); 
                            }else{
                            echo "Lỗi khi thanh toán: " . mysqli_error($conn);
                            }
                    } 
                    $sql = "SELECT * FROM cart";
                    $result = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_array($result)){?>
        <tr>
            <td>Chi tiết</td>
            <td><?= $row['fullname']?></td>
            <td><?= $row['dongia']?> $</td>
        </tr>
        <?php
            }
        ?>
    </table>
    <form id="checkoutForm" action="thanhtoan.php" method="post">
        Tổng tiền:
        <input style="width:100px; color:red;" type="text" name="tongtien" value="
        <?php 
            $sql = "SELECT SUM(dongia) FROM cart";
            $query= mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);
            echo $row[0];?>">

        <div class="coupon-input">
            <label for="coupon">Mã giảm giá:</label>
            <input type="text" id="coupon" name="coupon">
            <button onclick="applyCoupon()">Áp dụng</button>
        </div>
        <h2>Thanh toán</h2>


        <label for="name">Họ và tên:</label>
        <input type="text" id="name" name="fullname" required>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>

        <label for="address">Địa chỉ giao hàng:</label>
        <input type="text" id="address" name="diachi" required></input>

        <label for="address">Ngày thanh toán</label>
        <input type="datetime-local" name="ngaynhap">

        <label for="payment">Phương thức thanh toán:</label>
        <select name="phuongthuc" required>
            <option value="credit">Thanh toán khi nhận hàng</option>
            <option value="paypal">Momo</option>
            <option value="">Zalo Pay</option>
            <option value="">Visa</option>
            <option value="">Ngân hàng</option>
        </select>

        <button name="sbm" type="submit">Thanh toán</button>
    </form>

    <div id="quick-view-modal">
        <!-- Nội dung xem nhanh sẽ được thêm vào đây -->
    </div>

</body>

</html>