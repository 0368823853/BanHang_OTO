<?php
    include './connect.php';
    if(isset($_GET['maKhach'])){
        $maKhach = $_GET['maKhach'];
        $sql = "SELECT * FROM khachhang WHERE maKhach= $maKhach";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
    }
    if(isset($_POST['sbm_update'])){
        $name_khach = $sex =  $ngay_sinh = $number =$diachi = $date_order =  $ghi_chu = "";

        $name_khach = $_POST['name_khach'];
        $sex = $_POST['sex'];
        $maKhach = $_POST['maKhach'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $number = $_POST['number'];
        $diachi = $_POST['diachi'];
        $date_order =$_POST['date_order'];
        $ghi_chu=$_POST['ghi_chu'];

        if(!empty($name_khach)&&!empty($sex)&&!empty($ngay_sinh)
        &&!empty($number)&&!empty($diachi)&&!empty($date_order)||!empty($ghi_chu)){
            $sql = " UPDATE khachhang SET tenKhach = '$name_khach', sexKhach = '$sex', ngaySinh =' $ngay_sinh', SDT = $number, diachi = '$diachi',
            timeCome = '$date_order', ghiChu = '$ghi_chu' WHERE  maKhach =  $maKhach";

            if($conn->query($sql)===TRUE){
                header("location: ../viewAdmin/orderAdmin.php");
            }else{
                echo "lỗi {$sql}".$conn->error;
            }
        }else{
            echo "Bạn cần nhập đủ thông tin";
        }
    }
?>


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
        <div class="order">
            <div class="order-container">
                <form name="order" action="../model/sua.php" method="post">
                   <div class="form-container">
                        <div class="form-container-text">
                            <input type="text" name="sex" placeholder="male or female..." value="<?php echo $row['sexKhach'];?>">
                        </div>
                        <input type="hidden" name="maKhach" value="<?php echo $maKhach ?>">
                        <div class="form-container-text">
                            <input type="text" name="name_khach" placeholder="Họ tên..." value="<?php echo $row['tenKhach'];?>">
                            <input type="text" name="ngay_sinh" placeholder="Ngày sinh..(năm-tháng-ngày)" value="<?php echo $row['ngaySinh'];?>">
                        </div>
                        <div class="form-container-text">
                            <input type="text" name="number" placeholder="Số điện thoại.." value="<?php echo $row['SDT'];?>">
                            <input type="text" name="diachi" placeholder="Địa chỉ.." value="<?php echo $row['diaChi'];?>">
                        </div>
                        <div class="form-container-text2">
                            <input type="text" name="date_order" placeholder="Thời gian..(năm-tháng-ngày)" value="<?php echo $row['timeCome'];?>">
                        </div>
                        <div>
                            <textarea name="ghi_chu" value="<?php echo $row['ghiChu'];?>" placeholder="Ghi chú (nếu có)..."></textarea>
                        </div>
                        <button onclick="alert('Sửa thành công')" type="submit" name="sbm_update">
                            Sửa
                        </button>
                   </div>
                </form>
            </div>
        </div>
</body>
</html>