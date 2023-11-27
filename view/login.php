<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   
    <title>ĐĂNG NHẬP</title>
</head>
<style>
    .all{
        display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    
    }
    .wrapper{
    
    width: 430px;
    background: transparent;
    border: 2px solid rgba(255, 255, 255, .2);
    backdrop-filter: blur(20px);
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    color: black;
    border-radius: 8%;
    padding: 30px 40px;
}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.wrapper .input-box{
    position: relative;
    width: 98%;
    height: 50px;
    margin: 20px 0;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    border: 2px solid rgba(255, 255, 255, .2);
    border-radius: 40px;
    font-size: 16px;
    color: black;
}
.input-box i{
    position: absolute;
    right: 20px;
    top: 50%;
    transform: translateY(-50%);
    font-size: 20px;
}
.wrapper .remenber-forgot{
    display: flex;
    margin-bottom: 10px ;
}
.remenber-forgot label input{
    accent-color: #fff;
}
.remenber-forgot a{
    text-decoration: none;
}
.wrapper .btn{
    width: 98%;
    height: 45px;
    background-color: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0 , .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
}
.wrapper .register-link{
    font-size: 15.5px;
    text-align: center;
    margin-top: 20px;
}
.register-link p a{
    color: black;
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}
</style>
<body>
   <div class="all">
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
                
             </div>
             <button class="btn">ĐĂNG NHẬP</button>
             <div class="register-link">
                <p>Chưa có tài khoản?<a href="index.php?pg=logout"> Tạo tài khoản mới</a>
                </p>
             </div>
        </form>
    </div>
   </div>
</body>
</html>