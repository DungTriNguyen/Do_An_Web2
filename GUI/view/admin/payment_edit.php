<!DOCTYPE html>
<html lang="en">
<?php require('../../../config.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        <?php require('../../css/admin/sidebar.css');
        require('../../css/admin/header_admin.css');
        require('../../css/admin/footer_admin.css');
        // require('../../css/admin/danhsachnguoidung2.css');
        require('../../css/admin/QLND.css');
        ?>
    </style>
</head>

<body>
    <div class="container-sb">
        <div class="side-bar"><?php require('./sidebar.php'); ?></div>
        <div class="content">
            <div class="header">
                <?php require('./header_admin.php'); ?>
            </div>
            <div class="content-page">
                <div class="form-container">
                    <h1>SỬA PHƯƠNG THỨC THANH TOÁN</h1> <!-- Sửa title -->
                    <form action="update_permission.php" method="post" class="payment-form">
                        <input type="hidden" id="codePayments" name="codePayments" value="<?php echo $_GET['codePayments']; ?>">
                        <div class="form-group">
                            <label for="newCodePayments">Mã Phương Thức Mới:</label>
                            <input type="text" id="newCodePayments" name="newCodePayments" class="form-control">
                            <label for="newNamePayment">Tên Phương Thức Mới:</label>
                            <input type="text" id="newNamePayment" name="newNamePayment" class="form-control">
                            <label for="newAffiliatedBank">Tên Chi Nhánh Ngân Hàng Mới:</label>
                            <input type="text" id="newAffiliatedBank" name="newAffiliatedBank" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cập nhật</button> <!-- Sửa nút cập nhật -->
                            <a href="./payment_list.php" class="btn btn-secondary">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="footer">
                <?php require('./footer_admin.php'); ?>
            </div>
        </div>
    </div>
    <script src="../../Js/sidebar.js"></script>
</body>

</html>