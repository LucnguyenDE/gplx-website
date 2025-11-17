<?php
// Kết nối database
include 'db_connect.php';

// Kiểm tra dữ liệu gửi lên
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $conn->real_escape_string($_POST['fullname']);
    $phone    = $conn->real_escape_string($_POST['phone']);
    $email    = $conn->real_escape_string($_POST['email']);
    $course   = $conn->real_escape_string($_POST['course']);
    $note     = $conn->real_escape_string($_POST['note']);

    // Chuẩn bị câu lệnh SQL
    $sql = "INSERT INTO tbl_students (fullname, phone, email, course, note) 
            VALUES ('$fullname', '$phone', '$email', '$course', '$note')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Đăng ký thành công!'); window.location.href='../register.html';</script>";
    } else {
        echo "<script>alert('Lỗi: " . $conn->error . "'); window.history.back();</script>";
    }

    $conn->close();
} else {
    // Nếu truy cập trực tiếp
    header("Location: register.html");
    exit();
}
?>
