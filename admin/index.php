<?php
    include './head.php';
?>

<!-- End of Topbar -->
<img src="../img/backgound/background_5.png" alt="" style="width: 100%" />
<!-- Begin Page Content -->

<!-- Quản lý dịch vụ -->
<section id="service">
    <?php
            if(isset($_GET['page_layout'])){
                switch ($_GET['page_layout']){
                    case 'danhsach':
                        require_once '../admin/danhsach.php';
                        break;
                    case 'them':
                        require_once './them.php';
                        break;
                    case 'sua':
                        require_once '../admin/sua.php';
                        break;
                    case 'xoa':
                        require_once '../admin/xoa.php';
                        break;
                    case 'timkiem':
                        require_once '../admin/timkiem.php';
                        break;
                    default:
                        require_once '../admin/danhsach.php';
                        break;
                }
            }
        ?>

    <!--
        <form id="serviceForm">
            <label for="serviceName">Tên Dịch Vụ:</label>
            <input type="text" id="serviceName" required>
    
            <label for="serviceType">Loại Dịch Vụ:</label>
            <select id="serviceType" required>
                <option value="Bảo dưỡng">Bảo dưỡng</option>
                <option value="Sửa chữa">Sửa chữa</option>

            </select>
    
            <button type="button" onclick="addService()">Thêm Dịch Vụ</button>
        </form>
    
        <ul id="serviceList">

        </ul>-->
</section>

<?php
    include '../admin/footer.php';
?>