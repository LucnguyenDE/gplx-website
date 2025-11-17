
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Khóa học GPLX</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS riêng -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php include __DIR__ . '/components/header.php'; ?>
  <!-- KHÓA HỌC -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Các khóa học hiện có</h2>
      <div class="row g-4">
        <!-- Khóa A1 -->
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/a1.jpg" class="card-img-top" alt="Khóa A1">
            <div class="card-body">
              <h5 class="card-title">GPLX Hạng A1</h5>
              <p class="card-text">Dành cho xe máy. Học lý thuyết + thực hành cơ bản, phù hợp người mới bắt đầu.</p>
              <a href="register.html" class="btn btn-primary">Đăng ký</a>
            </div>
          </div>
        </div>

        <!-- Khóa B số tự động -->
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/b_auto.jpg" class="card-img-top" alt="B số tự động">
            <div class="card-body">
              <h5 class="card-title">GPLX B1 (Số tự động)</h5>
              <p class="card-text">Dành cho ô tô số tự động. Lý thuyết + lái thực hành số tự động.</p>
              <a href="register.html" class="btn btn-primary">Đăng ký</a>
            </div>
          </div>
        </div>

        <!-- Khóa B số sàn -->
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/b_manual.jpg" class="card-img-top" alt="B số sàn">
            <div class="card-body">
              <h5 class="card-title">GPLX B2 (Số sàn)</h5>
              <p class="card-text">Dành cho ô tô số sàn. Lý thuyết + thực hành lái xe số sàn.</p>
              <a href="register.html" class="btn btn-primary">Đăng ký</a>
            </div>
          </div>
        </div>

        <!-- Khóa C1 -->
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="assets/img/c1.jpg" class="card-img-top" alt="Khóa C1">
            <div class="card-body">
              <h5 class="card-title">GPLX C1</h5>
              <p class="card-text">Dành cho xe tải nhỏ. Lý thuyết + thực hành nâng cao, hướng dẫn chuyên sâu.</p>
              <a href="register.php" class="btn btn-primary">Đăng ký</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include __DIR__ . '/components/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>