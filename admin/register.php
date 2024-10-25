<?php
  require_once '../database/dbhelper.php';
  require_once '../utils/utility.php';

  $fullname = $email = $msg = '';
  if(!empty($_POST)){
      $fullname = getPost('fullname');
      $email = getPost('email');
      $pwd = getPost('password');

      if(empty($fullname) || empty($email) || empty($pwd) || strlen($pwd) < 6){

      }else{
          $userExist = executeResult("select * from nhanvien where email='$email'", true);
          if($userExist != null){
              $msg = 'Email đã được đăng ký!';
          }else{
              $sql = "insert into nhanvien (fullname, email, password) 
              values('$fullname', '$email', '$pwd')";
              execute($sql);
              header('Location: ./login.php');
              die();
          }
      }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Đăng ký Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
</head>

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
                                <h1 class="h4 text-gray-900 mb-4">Đăng ký tài khoản mới!</h1>
                            </div>
                            <form class="user" action="" method="post" onsubmit="return validateForm();">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Họ và tên..." required="true" name="fullname" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Địa chỉ email..." required="true" name="email" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password..." required="true"
                                            name="password" minlength="6" />
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Nhập lại password..."
                                            required="true" minlength="6" />
                                    </div>
                                </div>
                                <a class="btn btn-primary btn-user btn-block"><button
                                        style="border: none; background-color:#4e73df; color: #fff;">
                                        Đăng ký tài khoản</button>
                                </a>
                                <hr />
                                <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Đăng ký với Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Đăng ký với Facebook
                                </a>
                            </form>
                            <hr />
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Quên mật khẩu?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Đã có tài khoản? Đăng nhâp!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    function validateForm() {
        $pwd = $('#exampleInputPassword').val();
        $confirmPwd = $('#exampleRepeatPassword').val();
        if ($pwd != $confirmPwd) {
            alert("Mật khẩu không khớp, vui lòng kiểm tra!");
            return false;
        }
        return true;
    }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>