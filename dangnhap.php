<?php
    require_once('./utils/utility.php');
    require_once('./database/dbhelper.php');

    $fullname = $email = $phone = $msg = '';
    if(!empty($_POST)){
        $email = getPost('email');
        $pwd = getPost('password');
        

        $sql = "select * from user where email='$email' and password='$pwd'";
        $userExist = executeResult($sql, true);
        if($userExist == null){
            $msg = 'Email hoặc Password không đúng!';
        }else{
            header('Location: index.php');
            die();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./img/logo_btl.png">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./css/dangnhap.css">
</head>
<body>
    <div class="login">
        <div class="title">
            Đăng ký tài khoản thành công!
        </div>
        <div class="des">
            Chào mừng bạn đến với GARA VIET<br>
            Mời bạn đăng nhập
        </div>
        <form action="" method="post">
        <div class="group">
        <input required="true" type="email" class="form-control" 
        id="email" name="email" placeholder="Email">
        </div>
        <div class="group">
        <input required="true" type="password" class="form-control" 
        id="pwd" name="password" minlength="6" placeholder="Password">
            <!--<input type="text" id="password"
                placeholder="Password">-->
                <span id="showPassword">
                    <ion-icon name="eye"></ion-icon>
                    <ion-icon name="eye-off"></ion-icon>
                </span>
        </div>
        <p style="font-size: 10px; color:red;"><?=$msg?></p>
        <div class="recovery">
            <a href="">Quên mật khẩu?</a>
        </div>
        <div class="signIn">
            <button>Đăng nhập</button>
        </div>
        <div class="or">
            Liên hệ với tôi
        </div>
        <div class="list">
            <div class="item"><a href="https://youtube.com/@ntvanimebro6816?si=6Wu9LM7LQsv4dDCU">
                <img src="./img/youtube.png" alt="">
            </a>
            </div>
            <div class="item"><a href="https://www.tiktok.com/@viet17110?_t=8hITpzZgNbr&_r=1">
                <img src="./img/tik-tok.png" alt="">
                </a>
            </div>
            <div class="item"><a href="https://github.com/0368823853">
                <img src="./img/github.png" alt="">
                </a>
            </div>
            <div class="item"><a href="https://www.facebook.com/profile.php?id=100024948677618&mibextid=LQQJ4d">
                <img src="./img/facebook.png" alt="">
            </a>
            </div>
        </div>
        <div class="register">
            Bạn chưa có tài khoản?
            <a href="./dangky.php">Đăng ký ngay</a>
        </div>
        </form>
    </div>
    <script>
        let inputPassword = document.getElementById('pwd');
        let showPassword = document.getElementById('showPassword');
        showPassword.onclick = function() {
            if(inputPassword.type == 'pwd'){
                inputPassword.type = 'password';
                showPassword.classList.add('show');
            }else{
                inputPassword.type = 'pwd';
                showPassword.classList.remove('show');
            }   
        }
    </script>
    
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>