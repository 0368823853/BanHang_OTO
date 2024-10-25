<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = htmlspecialchars($_POST["ten"]);
    $gia = htmlspecialchars($_POST["gia"]);
    $mo_ta = htmlspecialchars($_POST["mo_ta"]);

    // Xử lý tải lên hình ảnh
    $hinh_anh = $_FILES["hinh_anh"]["name"];
    $hinh_anh_tmp = $_FILES["hinh_anh"]["tmp_name"];
    $uploads_dir = "uploads/";

    move_uploaded_file($hinh_anh_tmp, $uploads_dir . $hinh_anh);

    // Thực hiện xử lý dữ liệu (ví dụ: lưu vào cơ sở dữ liệu)

    echo "<h2>Linh kiện đã được thêm:</h2>";
    echo "<p><strong>Tên:</strong> $ten</p>";
    echo "<p><strong>Giá:</strong> $gia</p>";
    echo "<p><strong>Mô tả:</strong> $mo_ta</p>";
    echo "<p><strong>Hình ảnh:</strong> <img src='$uploads_dir$hinh_anh' alt='Hình ảnh linh kiện'></p>";
}
?>