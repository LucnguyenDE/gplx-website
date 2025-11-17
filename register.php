
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng ký học viên - GPLX</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- CSS riêng -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  
<?php include __DIR__ . '/components/header.php'; ?>
  <!-- FORM ĐĂNG KÝ -->
  <section class="py-5">
    <div class="container">
      <h2 class="text-center fw-bold mb-4">Đăng ký học viên</h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form id="registerForm" action="db/register_process.php" method="POST" class="needs-validation" novalidate>
            
            <!-- Họ tên -->
            <div class="mb-3">
              <label for="fullname" class="form-label">Họ và tên</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nguyễn Văn A" required>
              <div class="invalid-feedback">Vui lòng nhập họ tên</div>
            </div>

            <!-- Số điện thoại -->
            <div class="mb-3">
              <label for="phone" class="form-label">Số điện thoại</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="0912345678" required pattern="[0-9]{9,11}">
              <div class="invalid-feedback">Nhập số điện thoại hợp lệ (9-11 số)</div>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
              <div class="invalid-feedback">Nhập email hợp lệ</div>
            </div>

            <!-- Chọn khóa học -->
            <div class="mb-3">
              <label for="course" class="form-label">Chọn khóa học</label>
              <select class="form-select" id="course" name="course" required>
                <option value="" selected disabled>-- Chọn khóa học --</option>
                <option value="A1">GPLX Hạng A1</option>
                <option value="B1_auto">GPLX B (Số tự động)</option>
                <option value="B2_manual">GPLX B (Số sàn)</option>
                <option value="C1">GPLX C1</option>
              </select>
              <div class="invalid-feedback">Vui lòng chọn khóa học</div>
            </div>

            <!-- Ghi chú (nếu cần) -->
            <div class="mb-3">
              <label for="note" class="form-label">Ghi chú</label>
              <textarea class="form-control" id="note" name="note" rows="3" placeholder="Bạn có thể để lại thông tin thêm"></textarea>
            </div>

            <!-- Submit -->
            <div class="text-center">
              <button type="submit" class="btn btn-success btn-lg">Đăng ký</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

<?php include __DIR__ . '/components/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS validation -->
  <script>
    // Form validation bootstrap
    (function () {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>
</html>
