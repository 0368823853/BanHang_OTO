<?php
    require './connect.php';
    if(isset($_POST["btnSearch"])){
        $search = $_POST["txtsearch"];
        if($search == ""){
            echo "Vui lòng nhập tên vào thành tìm kiếm";
        }else{
            $sql = "SELECT * FROM khachhang WHERE tenKhach LIKE '%$search%'";
            $query = mysqli_query($conn, $sql);
            $count = mysqli_num_rows($query);
                ?>
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                        <link rel="stylesheet" href="../css/orderAdmin.css">
                    </head>
                    <body>
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
                                <td>Thao tác</td>
                            </tr>
                            <?php
                            while($row  = mysqli_fetch_array($query)){
                                ?>
                                <tr>
                                    <td><?php echo $row['maKhach'];?></td>
                                    <td class='name'><?php echo $row['tenKhach'];?></td>
                                    <td><?php echo $row['sexKhach'];?></td>
                                    <td><?php echo $row['date'];?></td>
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
                    </body>
                    </html>
                <?php
        }
    }   
?>