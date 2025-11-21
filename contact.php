<!-- TRANG LIÊN HỆ -->
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liên hệ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- style ở đây -->
     <link rel="stylesheet" href="assets/css/style.css">
<body>
<?php include __DIR__ . '/components/header.php'; ?>
    <!-- Contact Section -->
    <section class="form-section">
        <div class="container">
            <h2>Liên hệ với chúng tôi</h2>
            <p>Hãy để lại thông tin, chúng tôi sẽ liên hệ lại trong vòng 24 giờ.</p>

            <form action="#" method="post" class="contact-form">
                <label>Họ và tên:</label>
                <input type="text" name="fullname" required>

                <label>Email:</label>
                <input type="email" name="email" required>

                <label>Số điện thoại:</label>
                <input type="text" name="phone" required>

                <label>Nội dung:</label>
                <textarea name="message" rows="4" required></textarea>

                <button type="submit">Gửi liên hệ</button>
            </form>
        </div>
    </section>

<?php include __DIR__ . '/components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>