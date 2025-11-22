<?php
include 'db_connect.php';  // kết nối DB

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $conn->real_escape_string($_POST['new_username']);
    $password = $_POST['new_password'];
    $confirm  = $_POST['confirm_password'];

    // 1. Kiểm tra mật khẩu khớp
    if ($password !== $confirm) {
        echo "<script>alert('Mật khẩu xác nhận không khớp!'); window.history.back();</script>";
        exit();
    }

    // 2. Kiểm tra độ mạnh mật khẩu
    $pattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,12}$/";
    if (!preg_match($pattern, $password)) {
        echo "<script>alert('Mật khẩu phải 6–12 ký tự, có IN HOA + số + ký tự đặc biệt!'); window.history.back();</script>";
        exit();
    }

    // 3. Kiểm tra username tồn tại chưa
    $sql_check = "SELECT id FROM user_accounts WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "<script>alert('Tài khoản đã tồn tại! Vui lòng chọn tên khác.'); window.history.back();</script>";
        exit();
    }

    // 4. Mã hóa mật khẩu
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // 5. Lưu vào database
    $sql_insert = "INSERT INTO user_accounts (username, password) 
                   VALUES ('$username', '$password_hash')";

    if ($conn->query($sql_insert) === TRUE) {
        echo "<script>alert('Tạo tài khoản thành công! Hãy đăng nhập.'); window.location.href='../login.php';</script>";
        exit();
    } else {
        echo "<script>alert('Lỗi: " . $conn->error . "'); window.history.back();</script>";
        exit();
    }
}
?>