<!-- Home page -->
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trung tâm Đào tạo Lái xe - GPLX</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS riêng -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/components/header.php'; ?>

  <!-- HERO SECTION -->
  <section class="hero-section d-flex align-items-center text-center text-white">
  <div class="container position-relative">
      <h1 class="fw-bold">Cơ sở Đào tạo & Tổ chức thi Sát hạch Lái xe</h1>
      <p class="lead mt-3">Học lý thuyết – Thực hành – Mô phỏng – Thi thử trực tuyến</p>
      <a href="register.php" class="btn btn-warning btn-lg mt-3">Đăng ký ngay</a>
  </div>
</section>

  <!-- GIỚI THIỆU -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="fw-bold mb-4">Tại sao chọn chúng tôi?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Giáo viên giàu kinh nghiệm</h5>
              <p class="card-text">Đội ngũ giảng viên tận tâm, hướng dẫn chi tiết từng phần học lý thuyết và thực hành.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Học lý thuyết online từ xa</h5>
              <p class="card-text">Hỗ trợ học viên học Lý thuyết online, không cần đến trường.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Hỗ trợ đăng ký nhanh</h5>
              <p class="card-text">Đăng ký học trực tuyến, chọn lịch học linh hoạt, phù hợp với thời gian cá nhân.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include __DIR__ . '/components/footer.php'; ?>

  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
