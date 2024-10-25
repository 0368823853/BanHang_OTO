<?php
    include './connect.php';
      if(isset($_GET['maKhach'])){
        $id_to_delete = $_GET['maKhach'];
        $sql = "DELETE FROM khachhang WHERE maKhach= $id_to_delete ";
        $query = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            header("location: ../viewAdmin/orderAdmin.php");
        } else {
            echo "Lỗi khi xoá dữ liệu: " . $conn->error;
        }
    }else{
        echo"Error 404";
    }
    
?>
<?php
    include './connect.php';
      if(isset($_GET['maDoctor'])){
        $id_to_delete = $_GET['maDoctor'];
        $sql = "DELETE FROM doctor WHERE maDoctor= $id_to_delete ";
        $query = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            header("location: ../viewAdmin/doctorAdmin.php");
        } else {
            echo "Lỗi khi xoá dữ liệu: " . $conn->error;
        }
    }else{
        echo"Error 404";
    }
    
?>
