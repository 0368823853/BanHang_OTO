<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Linh Kiện Ô Tô</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background: linear-gradient(45deg, #4caf50, #2196f3);
            color: #fff;
            margin-bottom: 50px;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            align-self: center;
            margin-top: 20px;
        }

        h2 {
            font-size: 36px;
            margin: 0;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .components {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .component {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin: 10px;
            width: 300px;
            max-width: 100%;
            text-align: center;
            transition: transform 0.3s;
            color: #333;
            text-decoration: none;
            display: block;
        }

        .component:hover {
            transform: scale(1.05);
        }

        img {
            max-width: 100%;
            max-height: 200px;
            object-fit: cover;
        }

        .component-info {
            padding: 16px;
        }

        .contact-section {
            background-color: #333;
            color: #fff;
            padding: 50px 0;
            text-align: center;
        }

        .contact-form {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .contact-form button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-info {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .contact-info-item {
            flex: 0 0 50%;
            max-width: 300px;
            margin-bottom: 20px;
            padding: 0 10px;
        }

        .contact-info-item h3 {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .social-icons a {
            display: inline-block;
            margin: 0 10px;
        }

        .social-icons img {
            max-width: 40px;
            max-height: 40px;
            border-radius: 50%;
        }
    </style>
</head>
<body>

    <div class="header">
        <h2>Danh Sách Linh Kiện Ô Tô</h2>
    </div>

    <div class="components">
        <?php
        $components = [
            [
                'ten' => 'Android',
                'mo_ta' => 'cảm ứng nhanh nhạy tích hợp hỗ trợ lái xe',
                'gia' => '1100 USD',
                'hinh_anh' => 'image/adroid.png',
                'link' => 'binh_xang.html',
            ],
            [
                'ten' => 'Vô Lăng',
                'mo_ta' => 'kích thước 205, tay cầm êm ái',
                'gia' => '110 USD',
                'hinh_anh' => 'image/volang.png',
                'link' => 'binh_xang.html',
            ],
            [
                'ten' => 'Bánh Xe',
                'mo_ta' => 'Lốp xe chất lượng cao, kích thước 205/60R16.',
                'gia' => '80 USD',
                'hinh_anh' => 'image/BanhXe.png',
                'link' => 'binh_xang.html',
            ],
            [
                'ten' => 'Loa',
                'mo_ta' => 'Âm thanh sắc xảo',
                'gia' => '102 USD',
                'hinh_anh' => 'image/loa.png',
                'link' => 'binh_xang.html',
            ],
            [
                'ten' => 'cam',
                'mo_ta' => 'cam chất lương 4k',
                'gia' => '800 USD',
                'hinh_anh' => 'image/cam.png',
                'link' => 'binh_xang.html',
            ],

            // Thêm các linh kiện khác vào đây
        ];

        foreach ($components as $component) {
            echo '<a href="' . $component['link'] . '" class="component">';
            echo '<img src="' . $component['hinh_anh'] . '" alt="' . $component['ten'] . '">';
            echo '<div class="component-info">';
            echo '<h3>' . $component['ten'] . '</h3>';
            echo '<p>' . $component['mo_ta'] . '</p>';
            echo '<p>Giá: ' . $component['gia'] . '</p>';
            echo '</div></a>';
        }
        ?>
    </div>

    <div class="contact-section">
        <div class="contact-info" class = >
            <div class="contact-info-item">
                <h3>Địa Chỉ</h3>
                <p>24 Phú Đô, Quận Nam Từ Liêm, Hà Nội</p>
            </div>
            <div class="contact-info-item">
                <h3>Điện Thoại</h3>
                <p>0375114483</p>
            </div>
            <div class="contact-info-item">
                <h3>Mạng Xã Hội</h3>
                <div class="social-icons">
                    <a href="#" target="_blank"><img src="image/facebook.png" alt="Facebook"></a>
                    <a href="#" target="_blank"><img src="image/insta.png" alt="Instagram"></a>
                    <a href="#" target="_blank"><img src="image/zalo.png" alt="Zalo"></a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
