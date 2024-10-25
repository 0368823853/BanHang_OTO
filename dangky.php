<?php
    require_once('./utils/utility.php');
    require_once('./database/dbhelper.php');
    
    $fullname = $email = $phone = $msg = '';
    if(!empty($_POST)){
        $fullname = getPost('fullname');
        $email = getPost('email');
        $phone = getPost('phone');
        $pwd = getPost('password');

        if(empty($fullname) || empty($email) || empty($phone) || empty($pwd) || strlen($pwd) < 6){

        }else{
            $userExist = executeResult("select * from user where email='$email'", true);
            if($userExist != null){
                $msg = 'Email đã được đăng ký!';
            }else{
                $sql = "insert into user (fullname, email, phone, password) 
                values('$fullname', '$email', '$phone', '$pwd')";
                execute($sql);
                header('Location: dangnhap.php');
                die();
            }
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="icon" type="image/png" href="./img/logo_btl.png">

    <title>Đăng ký</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
body {
    background: url(./img/backgound/background_5.png);
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center left;
}

.container {
    padding: 20px;
}

.container .panel {
    background: gainsboro;
    border: 1px solid black;
    padding: 20px;
    box-shadow: 3px 3px 9px rgba(0, 0, 0, 1);
    border-radius: 10px;
    width: 400px;
    margin: 0px auto;
}

.panel-body {
    line-height: 10px;
}

.panel-body input:hover {
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.5);
}
</style>

<body>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h2 class="text-center">Đăng ký tài khoản</h2>

            </div>
            <div class="panel-body">
                <form action="" method="post" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="usr">Họ và tên</label>
                        <input required="true" type="text" class="form-control" id="usr" name="fullname">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <p style="color: red;"><?=$msg?></p>
                        <input required="true" type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="birthday">Số điện thoại</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Mật khẩu:</label>
                        <input required="true" type="password" class="form-control" id="pwd" name="password"
                            minlength="6">
                    </div>
                    <div class="form-group">
                        <label for="confirmation_pwd">Nhập lại mật khẩu:</label>
                        <input required="true" type="password" class="form-control" id="confirmation_pwd" minlength="6">
                    </div>
                    <p>Bạn đã có tài khoản?<a href="">Đăng nhập ngay</a></p>
                    <button class="btn btn-success">Đăng ký</button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function validateForm() {
        $pwd = $('#pwd').val();
        $confirmPwd = $('#confirmation_pwd').val();
        if ($pwd != $confirmPwd) {
            alert("Mật khẩu không khớp, vui lòng kiểm tra!");
            return false;
        }
        return true;
    }
    </script>
</body>

</html>