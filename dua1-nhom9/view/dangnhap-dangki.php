<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animated Login & Registration Form HTML CSS | Codehal</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background: #f9f9f9;
    }

    .wrapper {
        position: relative;
        width: 800px;
        height: 500px;
        background: linear-gradient(90deg, #64b1ed, #f2f2f2);
        border-radius: 50px;
        box-shadow: 0 0 60px rgba(0, 0, 0, .3);
        padding: 60px;
        display: flex;
        align-items: center;
        overflow: hidden;
    }

    .wrapper .text-right {
        position: absolute;
        top: 60px;
        right: 180px;
        color: #f2f2f2;
        text-shadow: 0 0 20px rgba(0, 0, 0, .3);
        font-size: 50px;
        user-select: none;
        font-family: 'Parisienne', cursive;
    }

    .wrapper .text-right::before {
        content: 'Back';
        position: absolute;
        top: 60px;
        right: -50px;
    }

    .wrapper img {
        position: absolute;
        right: -40px;
        bottom: -160px;
        width: 60%;
        transform: rotate(260deg);
    }

    .form-wrapper {
        z-index: 2;
    }

    .wrapper .form-wrapper.login {
        transition: .7s ease-in-out;
        transition-delay: .7s;
    }

    .wrapper.active .form-wrapper.login {
        transition-delay: 0s;
        transform: translateX(-400px);
    }

    .wrapper .form-wrapper.register {
        position: absolute;
        margin-top: 15px;
        transform: translateX(-400px);
        transition: .7s ease-in-out;
    }

    .wrapper.active .form-wrapper.register {
        transition-delay: .7s;
        transform: translateX(0);
    }

    h2 {
        font-size: 2em;
        text-align: center;
        color: #f2f2f2;
    }

    .input-box {
        position: relative;
        width: 320px;
        margin: 30px 0;
    }

    .input-box input {
        width: 100%;
        height: 50px;
        background: transparent;
        border: 2px solid #f2f2f2;
        outline: none;
        border-radius: 40px;
        font-size: 1em;
        color: #f2f2f2;
        padding: 0 20px 0 40px;
    }

    .input-box input::placeholder {
        color: rgba(255, 255, 255, .3);
    }

    .input-box .icon {
        position: absolute;
        left: 15px;
        color: #f2f2f2;
        font-size: 1.2em;
        line-height: 55px;
    }

    .forgot-pass {
        margin: -15px 0 15px 15px;
    }

    .forgot-pass a {
        color: #f2f2f2;
        font-size: .9em;
        text-decoration: none;
    }

    .forgot-pass a:hover {
        text-decoration: underline;
    }

    button {
        width: 100%;
        height: 45px;
        background: #f2f2f2;
        border: none;
        outline: none;
        border-radius: 40px;
        cursor: pointer;
        font-size: 1em;
        color: #54880e;
        font-weight: 500;
    }

    .sign-link {
        font-size: .9em;
        text-align: center;
        margin: 25px 0;
    }

    .sign-link p {
        color: #f2f2f2;
    }

    .sign-link p a {
        color: #f2f2f2;
        text-decoration: none;
        font-weight: 600;
    }

    .sign-link p a:hover {
        text-decoration: underline;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Parisienne&display=swap');

.main {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.duoimain {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #f9f9f9;
}

.wrapper {
    position: relative;
    width: 800px;
    height: 500px;
    background: linear-gradient(90deg, #64b1ed, #f2f2f2);
    border-radius: 50px;
    box-shadow: 0 0 60px rgba(0, 0, 0, .3);
    padding: 60px;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.wrapper .text-right {
    position: absolute;
    top: 60px;
    right: 180px;
    color: #f2f2f2;
    text-shadow: 0 0 20px rgba(0, 0, 0, .3);
    font-size: 50px;
    user-select: none;
    font-family: 'Parisienne', cursive;
}

.wrapper .text-right::before {
    content: 'Back';
    position: absolute;
    top: 60px;
    right: -50px;
}

.wrapper img {
    position: absolute;
    right: -40px;
    bottom: -160px;
    width: 60%;
    transform: rotate(260deg);
}

.form-wrapper {
    z-index: 2;
}

.wrapper .form-wrapper.login {
    transition: .7s ease-in-out;
    transition-delay: .7s;
}

.wrapper.active .form-wrapper.login {
    transition-delay: 0s;
    transform: translateX(-400px);
}

.wrapper .form-wrapper.register {
    position: absolute;
    margin-top: 15px;
    transform: translateX(-400px);
    transition: .7s ease-in-out;
}

.wrapper.active .form-wrapper.register {
    transition-delay: .7s;
    transform: translateX(0);
}

h2 {
    font-size: 2em;
    text-align: center;
    color: #f2f2f2;
}

.input-box {
    position: relative;
    width: 320px;
    margin: 30px 0;
}

.input-box input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: 2px solid #f2f2f2;
    outline: none;
    border-radius: 40px;
    font-size: 1em;
    color: #f2f2f2;
    padding: 0 20px 0 40px;
}

.input-box input::placeholder {
    color: rgba(255, 255, 255, .3);
}

.input-box .icon {
    position: absolute;
    left: 15px;
    color: #f2f2f2;
    font-size: 1.2em;
    line-height: 55px;
}

.forgot-pass {
    margin: -15px 0 15px 15px;
}

.forgot-pass a {
    color: #f2f2f2;
    font-size: .9em;
    text-decoration: none;
}

.forgot-pass a:hover {
    text-decoration: underline;
}

button {
    width: 100%;
    height: 45px;
    background: #f2f2f2;
    border: none;
    outline: none;
    border-radius: 40px;
    cursor: pointer;
    font-size: 1em;
    color: #54880e;
    font-weight: 500;
}

.sign-link {
    font-size: .9em;
    text-align: center;
    margin: 25px 0;
}

.sign-link p {
    color: #f2f2f2;
}

.sign-link p a {
    color: #f2f2f2;
    text-decoration: none;
    font-weight: 600;
}

.sign-link p a:hover {
    text-decoration: underline;
}

.error-message {
    color: red;
    display: none; /* Bắt đầu ẩn thông báo lỗi */
}

.error-message:not(:empty) {
    display: block; /* Hiển thị thông báo lỗi khi có nội dung */
}
</style>

<body>

    <div class="main">
        <div class="duoimain">
        <div class="wrapper">
        <img src="html-css/img/img.png" alt="">
        <h2 class="text-right">Welcome</h2>

        <div class="form-wrapper login">
            <form action="" method="POST" onsubmit="return validateLogin()">
                <h2>Login</h2>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <span id="emailError" class="error-message"></span>
                    <input id="loginEmail" type="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="forgot-pass">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="dangnhap">Login</button>
                <div class="sign-link">
                    <p>Don't have an account? <a href="#" onclick="registerActive()">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-wrapper register">
            <form action="index.php?pg=adduser">
                <h2>Registration</h2>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                    </span>
                    <input type="text" placeholder="Full Name" required>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" placeholder="Password" required>
                </div>
                <button type="submit" name="dangki">Register</button>
                <div class="sign-link">
                    <p>Already have an account? <a href="#" onclick="loginActive()">Login</a></p>
                </div>
            </form>
        </div>
    </div>

        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        const wrapper = document.querySelector('.wrapper');

        function registerActive() {
            wrapper.classList.toggle('active');
        }

        function loginActive() {
            wrapper.classList.toggle('active');
        }

        function validateLogin() {
            let email = document.getElementById('loginEmail').value;
            let password = document.getElementById('loginPassword').value;
            let emailError = document.getElementById('emailError');
            let errorMessage = document.getElementById('errorMessage');
            
            //reset thong bao loi
            emailError.innerHTML = '';
            errorMessage.innerHTML = '';

            // Kiểm tra nếu trường email rỗng
            if (!email) {
                emailError.innerHTML = '* Email is required';
                return false;
            }

            // Kiểm tra các trường khác và thực hiện validation logic của bạn

            // Nếu có lỗi ở bất kỳ nơi nào trong form
            errorMessage.innerHTML = 'Please check the form for errors.';
            return false;
        }

    </script>
</body>

</html>