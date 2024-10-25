<?php
    include './connect.php';
    if(isset($_GET['maDoctor'])){
        $maDoctor = $_GET['maDoctor'];
        $sql = "SELECT * FROM doctor WHERE maDoctor= $maDoctor";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
    }
    if(isset($_POST['btn_doctor'])){
        $name_doctor= $congTac =  $totNghiep = $chuyenNganh =$TTin1 = $TTin2 =  $TTin3 = $image="";
        $name_doctor = $_POST['name_doctor'];
        $congTac = $_POST['congTac'];
        $totNghiep = $_POST['totNghiep'];
        $chuyenNganh = $_POST['chuyenNganh'];
        $TTin1= $_POST['dTTin1'];
        $TTin2 = $_POST['dTTin2'];
        $dTTin3 =$_POST['dTTin3'];
        $maDoctor=$_POST['maDoctor'];

        if($_FILES['image']['error']== 0){
            $file = $_FILES['image'];
            $file_name = $file['name'];
            move_uploaded_file($file['tmp_name'], '../uploads/' .$file_name);
            $sql = "UPDATE doctor SET tenDoctor = '$name_doctor', congTac = '$congTac', totNghiep ='$totNghiep' , chuyenNganh = '$chuyenNganh',
            thongTin1 = '$TTin1', thongTin2  = '$TTin2', thongTin3  = '$TTin3', image = '$file_name' WHERE maDoctor = $maDoctor";
            $qr = mysqli_query($conn ,$sql);
            if($qr){
                header('location: ../viewAdmin/doctorAdmin.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/doctor.css">
</head>
<body>
    <div class="doctorAdmin_print">
        <img style="width: 20px;" class="close" src="../img/close icon.png">
        <div class="doctorAdmin">
            <div class="doctorAdmin_container">
                <form name="doctorAdmin" method="post" action="../model/sua.php" enctype="multipart/form-data">
                    <div>
                        <textarea placeholder="Name" name="name_doctor"></textarea>
                        <textarea placeholder="Công tác" name="congTac"></textarea>
                    </div>
                    <div>
                        <textarea placeholder="Tốt nghiệp" name="totNghiep"></textarea>
                        <textarea placeholder="Chuyên ngành" name="chuyenNganh"></textarea>
                    </div>
                    <div>
                        <textarea placeholder="Thông tin (Nếu có)" name="TTin1"></textarea>
                        <textarea placeholder="Thông tin (Nếu có)"  name="TTin2"></textarea>
                    </div>
                    <div>
                        <textarea placeholder="Thông tin (Nếu có)"  name="TTin3"></textarea>
                    </div>
                    <input type="file" name="image">
                    <div>
                        <button type="submit" name="btn_doctor">Thêm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>