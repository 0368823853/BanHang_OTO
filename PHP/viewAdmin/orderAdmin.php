<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/orderAdmin.css">
    <link rel="stylesheet" href="../uploads/">
    <link rel="stylesheet" href="../css/indexAdmin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div>
            <a href=""><p>Nha Khoa <span>PHP</span></p></a>
            <p>Admin<span>Controller</span></p>
            <div>.</div>
        </div>
    </header>
    <div class="body">
        <div class="body_container">
            <div class="body_container_left">
                <div class="body_container_left_container">
                    <ul>
                        <li class="action"><i style="color: aliceblue;" class='bx bx-universal-access'></i><a href="orderAdmin.php" style="color: aliceblue;">Quản lý khách hàng</a></li>
                        <li><i class='bx bx-plus-medical'></i><a href="doctorAdmin.php">Quản lý bác sĩ</a></li>
                        <li><i class='bx bx-align-left'></i><a href="">Quản lý dịch vụ</a></li>
                        <li><i class='bx bx-notepad'></i><a href="">Quản lý lịch sử</a></li>
                        <li><i class='bx bx-signal-4' ></i><a href="">Báo cáo thống kê</a></li>
                    </ul>
                </div>
            </div>
            <div class="body_container_right">
                <div>
                    <form style="margin: 5px 0;" class="QLKH" name="search" method="post" action="../model/search.php">
                        <input type="text" name="txtsearch">
                        <button type="submit" class="" name="btnSearch">Tìm kiếm</button>
                    </form>
                    <div class="QLKH">
                        <button type="submit" class="btnThem " value="">Thêm</button>
                    </div>
                    <form class="QLKH">
                        <table >
                            <tr class="header-first">
                                <td>ID</td>
                                <td>Name</td>
                                <td>Giới Tính</td>
                                <td>Ngày Sinh</td>
                                <td>Số điện thoại</td>
                                <td>Địa chỉ</td>
                                <td>Lịch hẹn</td>
                                <td>Ghi chú</td>
                                <td>Thao Tác</td>
                            </tr>
                            <?php
                            require '../model/connect.php';   
                            $sql = "SELECT * FROM khachhang";
                            $result = mysqli_query($conn,$sql);
                            while($row  = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $row['maKhach'];?></td>
                                    <td class='name'><?php echo $row['tenKhach'];?></td>
                                    <td><?php echo $row['sexKhach'];?></td>
                                    <td><?php echo $row['ngaySinh'];?></td>
                                    <td><?php echo $row['SDT'];?></td>
                                    <td><?php echo $row['diaChi'];?></td>
                                    <td><?php echo $row['timeCome'];?></td>
                                    <td><?php echo $row['ghiChu'];?></td>
                                    <td>
                                        <a href="../model/sua.php?maKhach=<?php echo $row['maKhach'];?>">Sửa</a>
                                        <a onclick ="return confirm('Bạn có chắc xóa chưa');" href="../model/xoa.php?maKhach=<?php echo $row['maKhach'];?>">Xóa</a>
                                    </td>
                                </tr>    
                            <?php
                            }
                            ?>
                        </table>
                    </form>
                    <div class="order">
                        <img style="width: 20px;" class="close" src="../img/close icon.png">
                        <div class="order-container">
                            <form name="order" action="../model/Add.php" method="post">
                               <div class="form-container">
                                    <div class="form-container-raidio">
                                        <input type="radio" name="sex" value="Nam" id="male">
                                        <label>Anh</label>
                                        <input type="radio" name="sex" value="Nữ" id="female">
                                        <label>Chị</label>
                                    </div>
                                    <div class="form-container-text">
                                        <input type="text" name="name_khach" placeholder="Họ tên..." value="">
                                        <input type="text" name="ngay_sinh" placeholder="Ngày sinh..(năm-tháng-ngày)" value="">
                                    </div>
                                    <div class="form-container-text">
                                        <input type="text" name="number" placeholder="Số điện thoại.." value="">
                                        <input type="text" name="diachi" placeholder="Địa chỉ.." value="">
                                    </div>
                                    <div class="form-container-text2">
                                        <input type="text" name="date_order" placeholder="Thời gian..(năm-tháng-ngày)" value="">
                                    </div>
                                    <div>
                                        <textarea name="ghi_chu" placeholder="Ghi chú (nếu có)..."></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" name="sbm_orderAdmin" value="">Thêm</button>
                                    </div>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: rgb(6, 119, 211); font-size: 5px; margin: 20px 0;">.</div>
    <script src="../controller/onlick.js"></script>
</body>
</html>