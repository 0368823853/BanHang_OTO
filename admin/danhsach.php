<?php
    include './head.php';
?>
<?php
    include '../database/connect.php';
    $result = mysqli_query($conn,"SELECT * FROM sanpham ");
    mysqli_close($conn);
?>
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

<br><br>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<style>
.card {
    box-shadow: 5px 5px 10px black;
}
</style>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 style="color: red;">Danh sách dịch vụ</h4>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên dịch vụ</th>
                        <th>Ảnh dịch vụ</th>
                        <th>Giá dịch vụ</th>
                        <th>Mô tả</th>
                        <th>Danh mục</th>
                        <td>Sửa</td>
                        <td>Xoá</td>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $i = 1;
                        while($row = mysqli_fetch_array($result)){?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?= $row['fullname']?></td>

                        <td>
                            <img style="width: 100px; height: 70px;" src="../img/rua_xe/<?= $row['image']?>" alt="">
                        </td>

                        <td><?= $row['dongia']?></td>
                        <td><?= $row['mota']?></td>
                        <td><?= $row['danhmuc_id']?></td>
                        <td>
                            <a onclick="return Dels('<?php echo $row['id']; ?>')"
                                href="sua.php?id=<?php echo $row['id'] ?>" style="color: black; font-size:1.3rem;"><i
                                    class='bx bxs-brightness'></i></a>
                        </td>
                        <td>
                            <a onclick="return Del('<?php echo $row['id']; ?>')"
                                href="xoa.php?id=<?php echo $row['id']?>" style="color: black; font-size:1.3rem;">
                                <ion-icon name="trash-outline"></ion-icon>
                            </a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script>
function Del(name) {
    return confirm("Bạn có chắc chắn muốn xoá dịch vụ: " + name + "?");
}

function Dels(name) {
    return confirm("Bạn có chắc chắn muốn sửa dịch vụ: " + name + "?");
}
</script><br>
<style>
.search {
    padding-left: 20px;
}
</style>
<?php
    include './footer.php';
?>