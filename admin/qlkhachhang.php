<?php
    include './head.php';
?>
<?php
    include '../database/connect.php';
?>

<?php
        $result = mysqli_query($conn, "select * from user");
        mysqli_close($conn);
    ?>

<style>
table {
    color: black;
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
    <h2>Danh sách tài khoản</h2>
    <table>
        <tr>
            <td>ID khách hàng</td>
            <td>Tên khách hàng</td>
            <td>Email khách hàng</td>
            <td>Số điện thoại</td>
            <td>Password</td>
        </tr>
        <?php
                    while($row = mysqli_fetch_array($result)){
                        ?><tr>
            <td><?= $row['id']?></td>
            <td><?= $row['fullname']?></td>
            <td><?= $row['email']?></td>
            <td><?= $row['phone']?></td>
            <td><?= $row['password'] == 1 ? "**********" : "***********"?></td>
        </tr>
        <?php
                    }
                ?>
    </table>
</div>

<?php
    include './footer.php';
?>