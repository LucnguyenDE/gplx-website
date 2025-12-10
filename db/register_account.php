<?php
session_start();
include 'db_connect.php'; // Kết nối SQL Server

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST['new_username']);
    $password = $_POST['new_password'];
    $confirm  = $_POST['confirm_password'];

    // 1. Kiểm tra mật khẩu khớp
    if ($password !== $confirm) {
        echo "<script>alert('Mật khẩu xác nhận không khớp!'); window.history.back();</script>";
        exit;
    }

    // 2. Kiểm tra độ mạnh mật khẩu
    $pattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,12}$/";
    if (!preg_match($pattern, $password)) {
        echo "<script>alert('Mật khẩu phải 6–12 ký tự, có chữ IN HOA + số + ký tự đặc biệt!'); window.history.back();</script>";
        exit;
    }

    // 3. Kiểm tra username tồn tại chưa
    $sql_check = "SELECT Id FROM Users WHERE Username = ?";
    $params_check = [$username];
    $stmt_check = sqlsrv_query($conn, $sql_check, $params_check);

    if ($stmt_check === false) {
        $_SESSION['error'] = "Lỗi hệ thống!";
        header("Location: ../pages/register.php");
        exit;
    }

    if (sqlsrv_fetch_array($stmt_check, SQLSRV_FETCH_ASSOC)) {
        echo "<script>alert('Tài khoản đã tồn tại! Vui lòng chọn tên khác.'); window.history.back();</script>";
        exit;
    }

    // 4. Hash mật khẩu
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // 5. Insert user mới vào Users
    $sql_insert = "INSERT INTO Users (Username, PasswordHash) VALUES (?, ?)";
    $params_insert = [$username, $password_hash];
    $stmt_insert = sqlsrv_query($conn, $sql_insert, $params_insert);

    if ($stmt_insert) {
        echo "<script>alert('Tạo tài khoản thành công! Hãy đăng nhập.'); window.location.href='../login.php';</script>";
        exit;
    } else {
        echo "<script>alert('Lỗi hệ thống khi tạo tài khoản!'); window.history.back();</script>";
        exit;
    }
}
?>
