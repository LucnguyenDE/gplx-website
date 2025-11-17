<?php
$host = "localhost";    // localhost khi chạy XAMPP
$user = "root";         // tài khoản MySQL mặc định
$pass = "";             // mật khẩu mặc định để trống
$dbname = "gplx_db";    // tên database đã tạo

$conn = new mysqli($host, $user, $pass, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// echo "Kết nối thành công!";
?>
?>
