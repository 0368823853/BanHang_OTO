<?php
    include './head.php';
?>
<?php
    include '../database/connect.php';
    $result = mysqli_query($conn,"SELECT * FROM hotro ");
    mysqli_close($conn);
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
table {
    border: 1px solid black;
}

table tr td {
    padding: 10px;
    border: 1px solid black;
}

#user-info {
    width: 800px;
    font-size: 1.1rem;
    padding: 25px;
    margin: 0 auto;
}

#user-info table {
    margin: 10px auto 0 auto;
    text-align: center;
}

#user-info h2 {
    text-align: center;
}
</style>






<div id="user-info">
    <h2>Yêu cầu hỗ trợ từ khách hàng</h2>
    <table>
        <tr>
            <td>ID khách hàng</td>
            <td>Tên khách hàng</td>
            <td>Số điện thoại</td>
            <td>Email khách hàng</td>
            <td>Nội dung hỗ trợ</td>
            <td>Tình trạng xe</td>
            <td>Địa chỉ</td>
            <td>Xoá</td>
        </tr>
        <?php
                    while($row = mysqli_fetch_array($result)){
                        ?><tr>
            <td><?= $row['id']?></td>
            <td><?= $row['fullname']?></td>
            <td><?= $row['phone']?></td>
            <td><?= $row['email']?></td>
            <td><?= $row['noidung']?></td>
            <td><?= $row['tinhtrang']?></td>
            <td><?= $row['diachi']?></td>
            <td>
                <a href="xoa.php?id=<?php echo $row['id']?>" style="color: black; font-size:1.3rem;">
                    <ion-icon name="trash-outline"></ion-icon>
                </a>
            </td>
        </tr>
        <?php
                    }
                ?>
    </table>
</div>


<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


<?php
    include './footer.php';
?>