<?php
    require './connect.php';
    if(isset($_POST['sbm_order'])){
        $name_khach = $_POST['name_khach'];
        $sex = $_POST['sex'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $number = $_POST['number'];
        $diachi = $_POST['diachi'];
        $date_order =$_POST['date_order'];
        $ghi_chu=$_POST['ghi_chu'];
        if(!empty($name_khach)&&!empty($sex)&&!empty($ngay_sinh)
        &&!empty($number)&&!empty($diachi)&&!empty($date_order)||!empty($ghi_chu)){
            $sql = "INSERT INTO `khachhang` (`tenKhach`, `sexKhach`, `ngaySinh`, `SDT`, `diachi`,
            `timeCome`, `ghiChu`) VALUES('$name_khach', '$sex', '$ngay_sinh', $number, '$diachi', '$date_order', '$ghi_chu') ";

            if($conn->query($sql)===TRUE){
                header("location: ../view/order.php");
            }
        }else{
            echo "Bạn cần nhập đủ thông tin";
        }
    }
?>
<?php
    require './connect.php';
    if(isset($_POST['sbm_orderAdmin'])){
        $name_khach = $_POST['name_khach'];
        $sex = $_POST['sex'];
        $ngay_sinh = $_POST['ngay_sinh'];
        $number = $_POST['number'];
        $diachi = $_POST['diachi'];
        $date_order =$_POST['date_order'];
        $ghi_chu=$_POST['ghi_chu'];
        if(!empty($name_khach)&&!empty($sex)&&!empty($ngay_sinh)
        &&!empty($number)&&!empty($diachi)&&!empty($date_order)||!empty($ghi_chu)){
            $sql = "INSERT INTO `khachhang` (`tenKhach`, `sexKhach`, `ngaySinh`, `SDT`, `diachi`,
            `timeCome`, `ghiChu`) VALUES('$name_khach', '$sex', '$ngay_sinh', $number, '$diachi', '$date_order', '$ghi_chu') ";

            if($conn->query($sql)===TRUE){
                header("location: ../viewAdmin/orderAdmin.php");
            }
        }else{
            echo "Bạn cần nhập đủ thông tin";
        }
    }
?>
<?php
    require './connect.php';
    if(isset($_POST['btn_doctor'])){
        $name_doctor = $_POST['name_doctor'];
        $congTac = $_POST['congTac'];
        $totNghiep = $_POST['totNghiep'];
        $chuyenNganh = $_POST['chuyenNganh'];
        $TTtin1 = $_POST['TTin1'];
        $TTtin2 =$_POST['TTin2'];
        $TTtin3 =$_POST['TTin3'];
        if($_FILES['image']['error']== 0){
            $file = $_FILES['image'];
            $file_name = $file['name'];
            move_uploaded_file($file['tmp_name'], '../uploads/' .$file_name);
            $sql = "INSERT INTO doctor (tenDoctor, congTac, totNghiep, chuyenNganh, thongTin1,
            thongTin2, thongTin3, image) VALUES('$name_doctor', '$congTac', '$totNghiep', '$chuyenNganh', '$TTtin1', ' $TTtin2', '$TTtin3', '$file_name') ";

            $qr = mysqli_query($conn ,$sql);
            if($qr){
                header('location: ../viewAdmin/doctorAdmin.php');
            }
        }
    }
        
?>
