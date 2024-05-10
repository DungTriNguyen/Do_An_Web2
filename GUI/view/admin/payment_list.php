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
                <?php

                // Kết nối đến cơ sở dữ liệu
                $servername = "localhost";
                $username = "root";
                $password = "";
                $databaseName = "website_sells_clothes_and_bags";
                $conn = null;

                // Tạo kết nối
                $conn = new mysqli($servername, $username, $password, $databaseName);

                // Kiểm tra kết nối
                if ($conn->connect_error) {
                    die("Kết nối thất bại: " . $conn->connect_error);
                }

                // Lấy danh sách người dùng
                $sql = "SELECT namePayment, codePayments, affiliatedBank FROM payment;";
                $result = $conn->query($sql);

                ?>
                <div>
                    <h1>QUẢN LÝ PHƯƠNG THỨC THANH TOÁN</h1>
                    <a href="addpayment.php" class="add-new"><i class="fa fa-plus"></i>Thêm Phương Thức Mới</a>
                </div>
                <div class="tim-kiem">
                    <form action="payment_list.php" method="get" onsubmit="timKiem(); return false;">
                        <input type="text" name="tenTimKiem" placeholder="Nhập tên phương thức cần tìm">
                        <button class="search" type="submit">Tìm kiếm</button>
                    </form>
                </div>
                <table class="danh-sach">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Phương Thức</th>
                            <th>Mã Phương Thức</th>
                            <th>Ngân Hàng Chi Nhánh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <script>
                        function deletePayments(codePayments) {
                            if (confirm('Bạn có chắc chắn muốn xóa nhóm người dùng này không?')) {
                                // Gửi yêu cầu xóa đến trang xử lý PHP
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function() {
                                    if (this.readyState == 4 && this.status == 200) {
                                        // Xử lý kết quả nếu cần
                                        alert('Phương thức thanh toán đã được xóa thành công.');
                                        // Reload trang hoặc thực hiện các hành động khác
                                        window.location.reload();
                                    }
                                };
                                xhttp.open("GET", "delete_permission.php?codePayments=" + codePayments, true);
                                xhttp.send();
                            }
                        }
                    </script>
                    <tbody id="danhsach">
                        <?php

                        // Lấy dữ liệu tìm kiếm
                        $tenTimKiem = "";

                        if (isset($_GET["tenTimKiem"])) {
                            $tenTimKiem = $_GET["tenTimKiem"];
                        }

                        // Truy vấn dữ liệu
                        $sql = "SELECT * FROM payment WHERE namePayment LIKE '%$tenTimKiem%';";
                        $result = $conn->query($sql);

                        // Duyệt qua kết quả và hiển thị từng phương thức
                        $stt = 1; // Khởi tạo số thứ tự
                        while ($row = $result->fetch_assoc()) {
                        ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $row["namePayment"]; ?></td>
                                <td><?php echo $row["codePayments"]; ?></td>
                                <td><?php echo $row["affiliatedBank"]; ?></td>
                                <td><a href="payment_edit.php?codePayments=<?php echo $row["codePayments"]; ?>" class="edit-button"><i class="fa fa-edit"></i>Sửa</a></td>
                                <?php echo "<td><a href='#' onclick='deletePayments(\"" . $row["codePayments"] . "\")' class='delete-button'><i class='fa fa-trash'></i> Xóa</a></td>"; ?>
                            </tr>
                        <?php
                            $stt++; // Tăng số thứ tự sau mỗi lần lặp
                        }
                        ?>
                    </tbody>
                </table>
                <div class="phan-trang">
                    <a href="#">&laquo;</a>
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">&raquo;</a>
                </div>
                <script>
                    // function timKiem() {
                    //     var tenTimKiem = document.getElementById("tenTimKiem").value;
                    //     var xhttp = new XMLHttpRequest();
                    //     xhttp.onreadystatechange = function() {
                    //         if (this.readyState == 4 && this.status == 200) {
                    //             var data = JSON.parse(this.responseText);
                    //             var html = "";
                    //             for (var i = 0; i < data.length; i++) {
                    //                 html += "<tr>";
                    //                 html += "<td>" + (i + 1) + "</td>";
                    //                 html += "<td>" + data[i].namePermissions + "</td>";

                    //                 html += "<td><a href='#'>Phân quyền</a></td>";
                    //                 html += "<td><a href='suaNhomNguoiDung.php?codePermissions=" + data[i]
                    //                     .codePermissions +
                    //                     "' class='edit-button'>Sửa</a></td>";
                    //                 html += "<td><a href='suaNhomNguoiDung.php?namePermissions=" + data[i]
                    //                     .namePermissions +
                    //                     "' class='edit-button'>Xóa</a></td>";
                    //                 html += "</tr>";
                    //             }
                    //             document.getElementById("danhSach").innerHTML = html;
                    //         }
                    //     };
                    //     xhttp.open("POST", "timKiemAjax.php", true);
                    //     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    //     xhttp.send("tenTimKiem=" + tenTimKiem);
                    // }

                    // function editPermission(namePermissions) {
                    //     window.location.href = "edit_permission.php?namePermissions=" + namePermissions;
                    // }
                </script>
                <?php

                // Đóng kết nối
                $conn->close();

                ?>
            </div>
            <div class="footer">
                <?php require('./footer_admin.php'); ?>
            </div>
        </div>
    </div>
    <script src="../../Js/sidebar.js"></script>
</body>

</html>