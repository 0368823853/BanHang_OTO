<?php
    include './head.php';
?>

<?php
    include '../database/connect.php';
    $sql_danhmuc= "SELECT * FROM danhmuc";
    $query_danhmuc= mysqli_query($conn, $sql_danhmuc);
    if(isset($_POST['sbm'])){
        $id = $_POST['id'];
        $fullname = $_POST['fullname'];

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $dongia = $_POST['dongia'];
        $mota = $_POST['mota'];
        move_uploaded_file($image_tmp, '../img/rua_xe/'.$image);
        $sql_sanpham = "INSERT INTO sanpham(danhmuc_id, fullname, image, dongia, mota)
        VALUES ($id, '$fullname', '$image', $dongia, '$mota')";
        $query= mysqli_query($conn, $sql_sanpham);
            if($query){
                echo "Chúc mừng";
                echo "Bạn đã thêm dịch vụ thành công!";
            exit(); 
            }else{
            echo "Lỗi khi thêm sản phẩm: " . mysqli_error($conn);
            }
    }
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<style>
.container-fluiid {
    line-height: 50px;
    border: 1px solid black;
    width: 700px;
    box-shadow: 3px 3px 7px black;
    height: 500px;
    overflow: scroll;
    border-radius: 5px;
}
</style>
<div class="container-fluiid">
    <div class="card">
        <div class="card-header">
            <h2>Thêm dịch vụ</h2>
        </div>
        <div class="card-body">
            <form action="them.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên dịch vụ</label>
                    <input type="text" name="fullname" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Ảnh dịch vụ</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Giá tiền dịch vụ</label>
                    <input type="number" name="dongia" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mô tả dịch vụ</label>
                    <input type="text" name="mota" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Danh mục</label>
                    <select class="form-control" id="" name="id">
                        <?php
                            while($row_danhmuc= mysqli_fetch_assoc($query_danhmuc)){?>
                        <option value="<?php echo $row_danhmuc['id'];?>"><?php echo $row_danhmuc['name'];?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
                <button name="sbm" class="btn btn-success" type="submit">Thêm dịch vụ</button>
            </form>
        </div>
    </div>
</div>
<?php
    include './footer.php';
?>

<!--
public function deleteProduct($id,$table) {
        $sql = "DELETE FROM $table WHERE id = $id";
        return $this->conn->query($sql);
}
-->