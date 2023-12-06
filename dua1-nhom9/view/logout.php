<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.csrel=' rel='stylesheet'>

    <title>ĐĂNG KÝ TÀI KHOẢN</title>
    <style>
        .all {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .wrapper {
            width: 430px;
           
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: black;
            border-radius: 8%;
            padding: 30px 40px;
        }

        .wrapper h1 {
            font-size: 36px;
            text-align: center;
        }

        .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 20px 0;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: black;
            padding: 5px;
            
        }
        .input-box placeholder{
            color : #fff;
        }
        .wrapper .btn {
            width: 98%;
            height: 40px;
            background-color: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
   
    </style>
</head>

<body>
    <div class="all">
        <div class="wrapper">
            <form action="">
                <h1>ĐĂNG KÝ</h1>
                <div class="input-box">
                   
                    <div class="input-field">
                        <label for="">Tên Đăng Nhập</label>
                        <input type="text" placeholder="Tên đăng nhập" required>
                    </div>
                </div>
                <div class="input-box">
                  <label for="">Mật Khẩu</label>
                    <div class="input-field">
                        <input type="password" placeholder="Nhập mật khẩu" required>
                    </div>
                </div>
                <div class="input-box">
                    <label for="">Nhập Lại Mật Khẩu</label>
                    <div class="input-field">
                        <input type="input" placeholder="Nhập lại mật Khẩu..." required>
                    </div>
                </div>
               
                <button type="submit" class="btn">ĐĂNG KÝ</button>
            </form>
        </div>
    </div>
</body>

</html>