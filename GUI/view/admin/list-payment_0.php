<html lang="en">
<?php require('../../../config.php') ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hình thức thanh toán</title>

    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
    <?php require('../../css/admin/sidebar.css');
    require('../../css/admin/header_admin.css');
    require('../../css/admin/footer_admin.css');
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
            <div class="content-page-sb ">
                <div class="container-product">
                    <div class="top-container mt-2">
                        <h2>Danh sách hình thức thanh toán</h2>
                        <a href="./add-payment.php" type="button" class="btn btn-primary btn-add">Thêm hình thức thanh
                            toán</a>
                    </div>
                    <div class="mb-3 mt-5">
                        <div class="input-group">
                            <input type="text" id="input-search-payment" class="form-control"
                                placeholder="Nhập tên hoặc mã hình thức thanh toán">
                            <button class="btn btn-primary">Tìm kiếm <i class="fa fa-search"
                                    style="font-size: 15px;"></i></button>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>Mã hình thức thanh toán</th>
                                <th class="table-cell">Tên hình thức thanh toán</th>
                                <th>Ngân hàng liên kết</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody id="table-payment">
                            <tr>
                                <td>AP004</td>
                                <td>Apple Pay</td>
                                <td>City Bank</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#editPayment"><i class="fa fa-edit"></i> Sửa</a>
                                    <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#deletePayment"><i class="fa fa-trash"></i> Xóa</a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <ul class="pagination pagination-sm justify-content-end" id="Pagination"
                style="cursor:pointer; margin-right:1rem;">
                <!-- <li class="page-item"><a class="page-link">Previous</a></li>
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">Next</a></li> -->
            </ul>

            <div class="footer">
                <?php require('./footer_admin.php'); ?>
            </div>
        </div>
    </div>

    <!-- Modal sửa hình thức thanh toán -->
    <div id="table-edit-payment">
        <div class="modal fade" id="editPayment" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Cập nhật thông tin hình thức thanh toán</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm">
                            <div class="mb-3">
                                <label for="codePayments" class="form-label">Mã hình thức thanh toán</label>
                                <input type="text" class="form-control" id="codePayments" name="codePayments"
                                    value="AP004" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="namePayment" class="form-label">Tên hình thức thanh toán</label>
                                <input type="text" class="form-control" id="namePayment" name="namePayment"
                                    value="Apple Pay">
                            </div>
                            <div class="mb-3">
                                <label for="affiliatedBank" class="form-label">Công ty liên kết</label>
                                <input type="text" class="form-control" id="affiliatedBank" name="affiliatedBank"
                                    value="City Bank">
                            </div>
                            <div style="text-align:right;">
                                <button type="submit" class="btn btn-primary">Cập nhật hình thức thanh toán</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal xóa hình thức thanh toán-->
    <div id="table-delete-payment">
        <div class="modal fade" id="deletePayment" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Xóa hình thức thanh toán</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Bạn có chắc muốn xóa hình thức thanh toán này?
                        <br>
                        Mã hình thức thanh toán: AP004

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-danger btn-confirm-delete">Xóa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="../../Js/admin/sidebar.js?v=<?php echo $version ?>"></script>
    <script src="../../Js/admin/payment.js?v=<?php echo $version ?>"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" INDX( 	 �=�           (   P  �       	                