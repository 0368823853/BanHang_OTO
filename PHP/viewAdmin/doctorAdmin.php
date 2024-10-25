<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/orderAdmin.css">
    <link rel="stylesheet" href="../css/doctorAdmin.css">
    <link rel="stylesheet" href="../css/update.css">
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
                        <li><i class='bx bx-universal-access'></i><a href="orderAdmin.php">Quản lý khách hàng</a></li>
                        <li class="action"><i style="color: aliceblue;" class='bx bx-plus-medical'></i><a  style="color: aliceblue;" href="doctorAdmin.php">Quản lý bác sĩ</a></li>
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
                                <td>Công tác</td>
                                <td>Tốt nghiệp</td>
                                <td>Chuyên ngành</td>
                                <td>Thông tin</td>
                                <td>Thông tin</td>
                                <td>Thông tin</td>
                                <td>Imaga</td>
                                <td>Thao Tác</td>
                            </tr>
                            <?php
                            require '../model/connect.php';   
                            $sql = "SELECT * FROM doctor";
                            $result = mysqli_query($conn,$sql);
                            while($row  = mysqli_fetch_assoc($result)){
                                ?>
                                <tr>
                                    <td><?php echo $row['maDoctor'];?></td>
                                    <td class="name"><textarea rows="1" cols="10"><?php echo $row['tenDoctor'];?></textarea></td>
                                    <td><textarea rows="1" cols="5"><?php echo $row['congTac'];?></textarea></td>
                                    <td><textarea rows="1" cols="5"><?php echo $row['totNghiep'];?></textarea></td>
                                    <td><textarea rows="1" cols="5"><?php echo $row['chuyenNganh'];?></textarea></td>
                                    <td><textarea rows="1" cols="5"><?php echo $row['thongTin1'];?></textarea></td>
                                    <td><textarea rows="1" cols="5"><?php echo $row['thongTin2'];?></textarea></td>
                                    <td><textarea rows="1" cols="5"><?php echo $row['thongTin3'];?></textarea></td>
                                    <td><img style="width: 50; height: 30px;" src="../uploads/<?php echo $row['image']?>" alt=""></td>
                                    <td>
                                        <a href="../model/suaDoctor.php?php echo $row['maDoctor'];?>">Sửa</a>
                                        <a onclick ="return confirm('Bạn có chắc xóa chưa');" href="../model/xoa.php?maDoctor=<?php echo $row['maDoctor'];?>">Xóa</a>
                                    </td>
                                </tr>    
                            <?php
                            }
                            ?>
                        </table>
                    </form>
                    <div class="doctorAdmin_print">
                        <img style="width: 20px;" class="close" src="../img/close icon.png">
                        <div class="doctorAdmin">
                            <div class="doctorAdmin_container">
                                <form name="doctorAdmin" method="post" action="../model/Add.php" enctype="multipart/form-data">
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
                </div>
            </div>
        </div>
    </div>

 
    <div style="background-color: rgb(6, 119, 211); font-size: 5px; margin: 20px 0;">.</div>

    <script>
        let body = document.querySelector('.doctorAdmin_print');
        let order_update = document.querySelector('.order_update');
        let btnThem = document.querySelector('.btnThem');
        let close = document.querySelector('.close');
        let btnSua= document.querySelector('.btnSua');

        btnThem.addEventListener('click' , ()=>{
            body.style.display="block";
        })
        close.addEventListener('click' , () =>{
            body.style.display="none";
        })
        btnSua.addEventListener('click', ()=>{
            order_update.style.display="block";
        })
    </script>
</body>
</html>