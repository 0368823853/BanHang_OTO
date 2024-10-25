<!-- Delete sanpham -->
<?php
    include '../database/connect.php';
      if(isset($_GET['id'])){
        $id_to_delete = $_GET['id'];
        $sql = "DELETE FROM sanpham WHERE id= $id_to_delete ";
        $query = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            echo "Dữ liệu đã được xoá thành công!";
        } else {
            echo "Lỗi khi xoá dữ liệu: " . $conn->error;
        }
        
         header('Location: index.php?hotrokhachhang.php');
    }else{
        echo"Error 404";
    }
        
    
?>

<!--Delete hotro-->
<?php
    include '../database/connect.php';
      if(isset($_GET['id'])){
        $id_to_delete = $_GET['id'];
        $sql = "DELETE FROM hotro WHERE id= $id_to_delete ";
        $query = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            echo "Dữ liệu đã được xoá thành công!";
        } else {
            echo "Lỗi khi xoá dữ liệu: " . $conn->error;
        }
        
        header("Location: index.php?hotrokhachhang.php");
    }else{
        echo"Error 404";
    }
        
    
?>
<?php
    include '../database/connect.php';
      if(isset($_GET['id'])){
        $id_to_delete = $_GET['id'];
        $sql = "DELETE FROM linhkien WHERE id= $id_to_delete ";
        $query = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            echo "Dữ liệu đã được xoá thành công!";
        } else {
            echo "Lỗi khi xoá dữ liệu: " . $conn->error;
        }
        
        header("Location: index.php?hotrokhachhang.php");
    }else{
        echo"Error 404";
    }
        
    
?>
<?php
    include '../database/connect.php';
      if(isset($_GET['id'])){
        $id_to_delete = $_GET['id'];
        $sql = "DELETE FROM cart WHERE id= $id_to_delete ";
        $query = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
            echo "Dữ liệu đã được xoá thành công!";
        } else {
            echo "Lỗi khi xoá dữ liệu: " . $conn->error;
        }
        header("Location: ../cart.php");
    }else{
        echo"Error 404";
    }
        
    
?>