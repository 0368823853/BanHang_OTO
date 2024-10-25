<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$name = isset($_GET['name']) ? urldecode($_GET['name']) : '';
$description = isset($_GET['description']) ? urldecode($_GET['description']) : '';
$price = isset($_GET['price']) ? $_GET['price'] : '';
$image = isset($_GET['image']) ? $_GET['image'] : '';
$images = "image/";
$imagess = $image."".$images;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Chi tiết sản phẩm</title>
</head>
<body>

<div class="product-detail-container">
    <div class="product_ChiTiet">
        <div class="product-image">
            <img src=<?php echo $imagess?> alt="<?php echo $name; ?>">
        </div>

        <div class="product-info">
            <h2><?php echo $name; ?></h2>
            <p class="price">$<?php echo $price; ?></p>
            <p><?php echo $description; ?></p>

            <div class="additional-info">
                <h3>Điền thông tin của bạn :</h3>
                <form action="process_order.php" method="post">
                    <label for="name">Tên:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="phone">Số điện thoại:</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="address">Địa chỉ:</label>
                    <input type="text" id="address" name="address" required>

                    <label for="payment">Phương thức thanh toán:</label>
                    <select id="payment" name="payment" required>
                        <option value="credit_card">Thẻ tín dụng</option>
                        <option value="paypal">PayPal</option>
                        <!-- Thêm các phương thức thanh toán khác nếu cần -->
                    </select>

                    <button type="submit">Đặt hàng</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
