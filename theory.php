<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học lý thuyết GPLX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* THEORY PAGE */
.theory-section {
    padding: 40px 0;
}

.theory-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
}

.theory-card {
    background: white;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 8px;
}

.theory-card h3 {
    margin-bottom: 10px;
}

.theory-card p {
    color: #555;
}

.theory-card .btn {
    display: inline-block;
    margin-top: 10px;
}
    </style>
</head>

<body>

<?php include __DIR__ . '/components/header.php'; ?>

    <!-- THEORY CONTENT -->
    <section class="theory-section">
        <div class="container">

            <h2>Bài học lý thuyết GPLX</h2>
            <p>Hệ thống các bài học lý thuyết dành cho thi GPLX mô tô & ô tô.</p>

            <div class="theory-list">

                <div class="theory-card">
                    <h3>1. Khái niệm và quy tắc giao thông</h3>
                    <p>Giải thích các khái niệm cơ bản, nguyên tắc tham gia giao thông.</p>
                    <a class="btn" href="#">Xem bài</a>
                </div>

                <div class="theory-card">
                    <h3>2. Hệ thống biển báo giao thông</h3>
                    <p>Học đầy đủ 5 nhóm biển báo + ý nghĩa từng biển.</p>
                    <a class="btn" href="#">Xem bài</a>
                </div>

                <div class="theory-card">
                    <h3>3. Sa hình & quy tắc ưu tiên</h3>
                    <p>Hướng dẫn giải sa hình đúng luật và nhanh.</p>
                    <a class="btn" href="#">Xem bài</a>
                </div>

                <div class="theory-card">
                    <h3>4. Văn hóa & đạo đức người lái xe</h3>
                    <p>Những hành vi phải tránh – trách nhiệm khi lái xe.</p>
                    <a class="btn" href="#">Xem bài</a>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
<?php include __DIR__ . '/components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>