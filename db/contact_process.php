<?php
// Kết nối database
include 'db_connect.php';

// Kiểm tra dữ liệu gửi lên
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = $conn->real_escape_string($_POST['fullname']);
    $email    = $conn->real_escape_string($_POST['email']);
    $phone    = $conn->real_escape_string($_POST['phone']);
    $message  = $conn->real_escape_string($_POST['message']);

    // Câu SQL thêm vào bảng contact_messages
    $sql = "INSERT INTO contact_messages (fullname, email, phone, message)
            VALUES ('$fullname', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Gửi liên hệ thành công! Chúng tôi sẽ phản hồi trong thời gian sớm nhất.');
                window.location.href='../index.php';
              </script>";
    } else {
        echo "<script>
                alert('Lỗi: " . $conn->error . "');
                window.history.back();
              </script>";
    }

    $conn->close();

} else {
    // Nếu truy cập trực tiếp
    header("Location: contact.php");
    exit();
}
?>