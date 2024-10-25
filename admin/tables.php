<?php
    include './head.php';
?>
<?php
    include '../database/connect.php';
    $result = mysqli_query($conn,"SELECT * FROM checkout ");
    mysqli_close($conn);
?>
<?php
    include '../database/connect.php';
    if( isset($_GET['tukhoa']) && !empty($_GET['tukhoa'])){
        $tukhoa = $_GET['tukhoa'];
        $sql = "SELECT * FROM checkout WHERE id LIKE '%$tukhoa%' OR fullname LIKE '%$tukhoa%' OR ngaynhap LIKE '%$tukhoa%' ";
    }else{
        $sql = "SELECT * FROM checkout";
    }
    $result = mysqli_query($conn, $sql);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Bảng doanh thu</h1>
    <p class="mb-4">Chúng tôi sẽ trình bày một cái nhìn tổng quan về hiệu suất và sự ứng dụng của phần mềm quản lý chăm
        sóc ô tô, đồng thời phản ánh những đóng góp tích cực của nó trong việc đáp ứng những thách thức ngày càng đa
        dạng của ngành công nghiệp ô tô hiện đại. Từ số liệu thống kê chi tiết đến phản hồi của người dùng, chúng ta sẽ
        cùng nhau khám phá những thành công và những hướng phát triển tương lai của phần mềm này. <a target="_blank"
            href="#">Tài liệu thống kê chính thức</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Báo cáo thống kê</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Quê Quán</th>
                            <th>Email</th>
                            <th>Ngày thanh toán</th>
                            <th>Đơn giá</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while($row = mysqli_fetch_array($result)){?>
                        <tr>
                            <td><?= $row['id']?></td>
                            <td><?= $row['fullname']?></td>
                            <td><?= $row['diachi']?></td>
                            <td><?= $row['email']?></td>
                            <td><?= $row['ngaynhap']?></td>
                            <td><?= $row['tongtien']?></td>
                        </tr>
                        <?php
                        }
                    ?>
                    </tbody>
                    <tfoot>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th style="color:red;">Tổng doanh thu</th>
                        <th style="color:red;"><?php 
                                                $sql = "SELECT SUM(tongtien) FROM checkout";
                                                $query= mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_array($query);
                                            echo $row[0];?></th>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php
    include './footer.php';
?>