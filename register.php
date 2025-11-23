<?php
$selectedCourse = $_GET['course'] ?? '';

$selectedCourseFinal='';
if($selectedCourse == "moto"){
  $selectedCourseFinal = "hạng Mô tô";
}
if($selectedCourse == "B_auto"){
  $selectedCourseFinal = "hạng B số tự động";
}
if($selectedCourse == "B_manual"){
  $selectedCourseFinal = "hạng B số sàn";
}
if($selectedCourse == "C1"){
  $selectedCourseFinal = "hạng C1";
}
?>
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
      <h2 class="text-center fw-bold mb-4">Đăng ký học bằng lái <?php echo $selectedCourseFinal ?> </h2>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <form id="registerForm" action="db/register_process.php" method="POST" class="needs-validation" novalidate>
            
            <!-- Họ tên -->
            <div class="mb-3">
              <label for="fullname" class="form-label">Họ và tên:</label>
              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nguyễn Văn A" required>
              <div class="invalid-feedback">Vui lòng nhập họ tên</div>
            </div>

            <!-- Số điện thoại -->
            <div class="mb-3">
              <label for="phone" class="form-label">Số điện thoại:</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="0912345678" required pattern="[0-9]{9,11}">
              <div class="invalid-feedback">Nhập số điện thoại hợp lệ (9-11 số)</div>
            </div>

            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
              <div class="invalid-feedback">Nhập email hợp lệ</div>
            </div>

            <!-- Chọn khóa học -->
            <?php if (!$selectedCourse): ?>
            <div class="mb-3">
              <label for="course" class="form-label">Chọn khóa học</label>
              <select class="form-select" id="course" name="course" required>
                <option value="" selected disabled>-- Chọn khóa học --</option>
                <option value="A1" >GPLX Hạng A1</option>
                <option value="A" >GPLX Hạng A</option>
                <option value="B_auto" >GPLX B (Số tự động)</option>
                <option value="B_manual" >GPLX B (Số sàn)</option>
                <option value="C1" >GPLX C1</option>
              </select>
              <div class="invalid-feedback">Vui lòng chọn khóa học</div>
            </div>
            <?php endif; ?>
            <?php if ($selectedCourse == 'moto'): ?>
               <div class="mb-3">
              <label for="course" class="form-label">Chọn hạng Mô tô - xe máy</label>
              <select class="form-select" id="course" name="course" required>
                <option value="" selected disabled>-- Chọn khóa học --</option>
                <option value="A1" >GPLX Hạng A1</option>
                <option value="A" >GPLX Hạng A</option>                
              </select>
              <div class="invalid-feedback">Vui lòng chọn khóa học</div>
            </div>
            <?php endif; ?>



            <!-- Ghi chú (nếu cần) -->
            <div class="mb-3">
              <label for="note" class="form-label">Để lại lời nhắn:</label>
              <textarea class="form-control" id="note" name="note" rows="3" placeholder="Bạn có thể để lại thông tin thêm"></textarea>
            </div>

            <!-- Submit -->
            <div class="text-center">
              <button type="submit" class="btn btn-success btn-lg">Gửi thông tin</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </section>

<?php include __DIR__ . '/components/footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
