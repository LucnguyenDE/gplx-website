<?php
include 'db_connect.php';  // kết nối database

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// Kiểm tra kết nối database
if ($conn === false) {
    $_SESSION['error'] = "Lỗi hệ thống!";
    header("Location: ../pages/login.php");
    exit;
}

// 1. Lấy user theo username
$sql = "SELECT * FROM Users WHERE Username = ?";
$params = [$username];
$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    $_SESSION['error'] = "Lỗi hệ thống!";
    header("Location: ../pages/login.php");
    exit;
}

$user = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);

// Chống User Enumeration + Timing attack
$fake_hash = '$2y$10$KFaQzGv5d2L1IO2o0pOddOIoU7wQ0Vq1jZP0vyP3xXjK0L2gYV7Na';
$hashToCheck = $user['PasswordHash'] ?? $fake_hash;

// Kiểm tra password
$loginOK = password_verify($password, $hashToCheck);

// -----------------------------
// KẾT LUẬN LOGIN
// -----------------------------
if ($loginOK && $user) {
    // Lưu session nếu cần

    header("Location: ../index.php");
    exit;
} else {
    echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!'); window.location.href='../login.php';</script>";
    exit;
}
