<?php
include '../database/connect.php';
    // if(isset($_POST['sbm'])){
    //     $name_khach = $_POST['name'];
    //     $SDT = $_POST['number'];
    //     $Email = $_POST['Email'];
    //     $content = $_POST['content'];
    //     $trang_thai = $_POST['tinh_trang'];
    //     $dia_chi =$_POST['dia_chi'];
    //     if(!empty($name_khach)&&!empty($SDT)&&!empty($Email)
    //     &&!empty($Email)&&!empty($Email)&&!empty($Email)){
    //         $sql = "INSERT INTO `hotro` (`fullname`, `phone`, `email`, `noidung`, `tinhtrang`,
    //         `diachi`) VALUES('$name_khach', '$SDT', '$Email', $content, '$trang_thai', '$dia_chi')";
    //         if($conn->query($sql)===TRUE){
    //             echo "Đặt lịch thành công";
    //         }else{
    //             echo "lỗi {$sql}".$conn->error;
    //         }
    //     }else{
    //         echo "Bạn cần nhập đủ thông tin";
    //     }
    // }

        $fullname = $phone = $email = $noidung = $tinhtrang = $diachi ='';
        if(isset($_POST['sbm'])){
            $fullname = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $noidung = $_POST['noidung'];
            $tinhtrang = $_POST['tinhtrang'];
            $diachi = $_POST['diachi'];
            $sql = "INSERT INTO hotro(fullname, phone, email, noidung, tinhtrang, diachi)
            VALUES ('$fullname', $phone, '$email', '$noidung', '$tinhtrang', '$diachi')";
                    $query= mysqli_query($conn, $sql);
                    if($query){
                    header("Location: index.php?hotrokhachhang.php");
                    exit(); 
                    }else{
                    echo "Lỗi khi thêm sản phẩm: " . mysqli_error($conn);
                    }

        }
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/hotro.css">
<form class="row g-3 needs-validation" method="post" action="hotro.php">
    <h3>Hỗ trợ khách hàng</h3>
    <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="validationCustom01" name="fullname">
        <div class="valid-feedback">

        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="validationCustom02" name="phone">
        <div class="valid-feedback">

        </div>
    </div>
    <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
            <span span class="input-group-text" id="inputGroupPrepend">@</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend"
                name="email">
            <div class="invalid-feedback">
                Vui lòng nhập email của bạn!
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Nội dung</label>
        <textarea name="noidung" id="validationCustom05" cols="30" rows="10" class="form-control"></textarea>
        <div class="invalid-feedback">
            Vui lòng cung nhập nội dung
        </div>

    </div>
    <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Tình trạng</label>
        <select class="form-select" id="validationCustom04" name="tinhtrang">
            <option selected disabled value="">Choose...</option>
            <option>Chăm sóc xe</option>
            <option>Linh kiện</option>
            <option>Đơn hàng</option>
            <option>Liên hệ</option>
        </select>
        <div class="invalid-feedback">
            Vui lòng tải file lên
        </div>
    </div>
    <div class="col-md-3">
        <label for="validationCustom03" class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="validationCustom03" required name="diachi">
        <div class="invalid-feedback">
            Vui lòng nhập địa chỉ
        </div>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
                Đồng ý với các điều khoản và điều kiện
            </label>
            <div class="invalid-feedback">
                Bạn phải đồng ý trước khi gửi.
            </div>
        </div>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit" name="sbm">Gửi hỗ trợ</button>
    </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
        }, false)
    })
})()
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>