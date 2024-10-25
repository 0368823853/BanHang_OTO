<?php
    include './head.php';
?>

<?php
    include '../database/connect.php';
    if(isset($_POST['sbm'])){
        $fullname = $_POST['fullname'];
        $dongia = $_POST['dongia'];
        $soluong = $_POST['soluong'];
        $ngaynhap = $_POST['ngaynhap'];

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];
        
        $xuatxu = $_POST['xuatxu'];
        $mota = $_POST['mota'];
        move_uploaded_file($image_tmp, '../img/rua_xe/'.$image);
        $sql_sanpham = "INSERT INTO linhkien( fullname, dongia, soluong, ngaynhap, image, xuatxu, mota)
        VALUES ('$fullname', $dongia, $soluong, '$ngaynhap', '$image', '$xuatxu', '$mota')";
        $query= mysqli_query($conn, $sql_sanpham);
            if($query){
                echo "Chúc mừng";
                echo "Bạn đã thêm linh kiện thành công!";
            exit(); 
            }else{
            echo "Lỗi khi thêm linh kiện: " . mysqli_error($conn);
            }
    }
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Thêm linh kiện</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>
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

<body class="bg-gradient-primary">
    <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Thêm linh kiện mới!</h1>
                            </div>
                            <form action="addlk.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" name="fullname" class="form-control" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Giá tiền</label>
                                        <input type="text" name="dongia" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Số lượng</label>
                                        <input type="number" name="soluong" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">Ngày nhập</label>
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="" required="true" name="ngaynhap" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Ảnh dịch vụ</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="">xuất xứ</label>
                                        <input type="text" name="xuatxu" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">Mô tả dịch vụ</label>
                                    <input type="text" name="mota" class="form-control" required>
                                </div>
                                <button name="sbm" class="btn btn-success" type="submit">Thêm linh kiện</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <?php
    include './footer.php';
?>
</body>
<!--
public function deleteProduct($id,$table) {
        $sql = "DELETE FROM $table WHERE id = $id";
        return $this->conn->query($sql);
}
-->