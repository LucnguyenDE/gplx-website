<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập hệ thống</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f2f2f2;
        }
        .login-box {
            max-width: 450px;
            margin: 40px auto;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h3 {
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="login-box">
    <h3 class="text-center mb-4">Đăng nhập</h3>

    <!-- Form Login -->
    <form action="db/login_process.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Tài khoản</label>
            <input type="text" name="username" class="form-control" required placeholder="Nhập tài khoản">
        </div>

        <div class="mb-3">
            <label class="form-label">Mật khẩu</label>
            <input type="password" name="password" class="form-control" required placeholder="Nhập mật khẩu">
        </div>

        <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
    </form>

    <hr>

    <!-- Form Register -->
    <h5 class="text-center mb-3">Chưa có tài khoản? Đăng ký ngay</h5>

    <form action="db/register_account.php" method="POST" onsubmit="return validatePassword()">

        <div class="mb-3">
            <label class="form-label">Tài khoản</label>
            <input type="text" name="new_username" class="form-control" required placeholder="Tạo tài khoản">
        </div>

        <div class="mb-3">
            <label class="form-label">Mật khẩu</label>
            <input type="password" id="new_password" name="new_password" class="form-control" required>
            <small class="text-muted">
                Mật khẩu 6–12 ký tự, có chữ in hoa, số và ký tự đặc biệt.
            </small>
        </div>

        <div class="mb-3">
            <label class="form-label">Xác nhận mật khẩu</label>
            <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Tạo tài khoản</button>
    </form>
</div>


<script>
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
</script>

</body>
</html>