<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style-dang-nhap.css">
    <title>ĐĂNG NHẬP</title>
</head>
<body>
    <div class="wrapper">
        <form action="index.php?pg=login" method="POST">
            <h1>ĐĂNG NHẬP</h1>
            <div class="input-box">
                <input type="text" placeholder="Tên đăng nhập" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Mặt khẩu" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
             <div class="remenber-forgot">
                <label><input type="checkbox">Lưu tên đăng nhập</label>
                <a href="#">Quên mật khẩu</a>
             </div>
             <button class="btn">ĐĂNG NHẬP</button>
             <div class="register-link">
                <p>Chưa có tài khoản?<a href="logout.php"> Tạo tài khoản mới</a>
                </p>
             </div>
        </form>
    </div>
</body>
</html>