<?php
    include '../database/connect.php';
    if( isset($_GET['tukhoa']) && !empty($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        $sql = "SELECT * FROM sanpham WHERE id LIKE '%$tukhoa%' OR fullname LIKE '%$tukhoa%' ";
    }else{
        $sql = "SELECT * FROM sanpham";
    }
    $result = mysqli_query($conn, $sql);
?>
<?php
    include '../database/connect.php';
    if( isset($_GET['tukhoa']) && !empty($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        $sql = "SELECT * FROM hotro WHERE id LIKE '%$tukhoa%' OR fullname LIKE '%$tukhoa%' OR email LIKE '%$tukhoa%' ";
    }else{
        $sql = "SELECT * FROM hotro";
    }
    $result = mysqli_query($conn, $sql);
?>
<?php
    include '../database/connect.php';
    if( isset($_GET['tukhoa']) && !empty($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        $sql = "SELECT * FROM user WHERE id LIKE '%$tukhoa%' OR fullname LIKE '%$tukhoa%' OR email LIKE '%$tukhoa%' ";
    }else{
        $sql = "SELECT * FROM user";
    }
    $result = mysqli_query($conn, $sql);
?>
<?php
        include '../database/connect.php';
        if( isset($_GET['tukhoa']) && !empty($_GET['tukhoa'])){
            $tukhoa = $_GET['tukhoa'];
            $sql = "SELECT * FROM linhkien WHERE id LIKE '%$tukhoa%' OR fullname LIKE '%$tukhoa%' OR dongia LIKE '%$tukhoa%' OR soluong LIKE '%$tukhoa%' OR ngaynhap LIKE '%$tukhoa%' OR xuatxu LIKE '%$tukhoa%'";
        }else{
            $sql = "SELECT * FROM linhkien";
        }
        $result = mysqli_query($conn, $sql);
?>