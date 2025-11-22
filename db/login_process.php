<?php
session_start();
include 'db_connect.php';  // kết nối database

// Kiểm tra form gửi bằng POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Lấy tài khoản từ database
    $sql = "SELECT * FROM user_accounts WHERE username = '$username' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();

        // Kiểm tra mật khẩu
        if (password_verify($password, $row['password'])) {

            // Lưu thông tin đăng nhập vào session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            echo "<script>
                    alert('Đăng nhập thành công!');
                    window.location.href='../index.php';
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Sai mật khẩu!');
                    window.history.back();
                  </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('Tài khoản không tồn tại!');
                window.history.back();
              </script>";
        exit();
    }
}
?>