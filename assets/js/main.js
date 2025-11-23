// Thêm hiệu ứng cuộn mượt khi nhấp menu
document.querySelectorAll('a[href^="#"]').forEach(link => {
  link.addEventListener('click', e => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute('href'));
    if (target) target.scrollIntoView({ behavior: 'smooth' });
  });
});


// Đăng ký tài khoản-trang login-phần đăng ký
function validatePassword() {
    let pass = document.getElementById("new_password").value;
    let confirm = document.getElementById("confirm_password").value;

    let pattern = /^(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,12}$/;

    if (!pattern.test(pass)) {
        alert("Mật khẩu phải 6–12 ký tự, có chữ in hoa, số và ký tự đặc biệt!");
        return false;
    }

    if (pass !== confirm) {
        alert("Mật khẩu xác nhận không khớp!");
        return false;
    }

    return true;
}

// Trang register - phần đăng ký học bằng lái
// Form validation bootstrap
    (function () {
      'use strict'
      const forms = document.querySelectorAll('.needs-validation')
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            // event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
    })()
  // Giải thích:
  //(function () { ... }): hàm này chưa được khai báo tên, chưa được gán biến
  // Bao ngoài hàm (...) để biến hàm ẩn danh thành biểu thức (expression)
  //(): chạy hàm ngay khi trình duyệt đọc file
  // 'use strict' - bắt buộc khai báo biến
  // form.checkValidity() - mặc định của browser kiểm tra các trường của form như input,select
  // form.checkValidity() chỉ làm trong client - trả về true khi các trường đều thỏa
  // event.preventDefault(): ngăn form gửi lên server
  // event.stopPropagation() ngăn không cho sự kiện chạy ra ngoài node cha (khi có function ở node cha)
  // callback event => {} chỉ chạy khi có sự kiện 'submit'
  // luôn gắn 'was-validated' ở form có class 'need-validattion' khi sự kiện xảy ra
