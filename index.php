<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css//style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Site</title>
</head>
<body>
    <div class="wrapper">

        <!-- ФОРМА РЕГИСТРАЦИИ -->
        <form action="register.php" method="post">
            <h1>Регистрация</h1>
                <div class="input-box">
                    <input type="text" placeholder="Логин" name="login" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Введите email" name="email" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Пароль" name="pass" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Повторите пароль" name="repeatpass" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" class="btn">Зарегистрироваться</button>
                <div class="logo">
                    <img src="/jpg/logo1.png"  style="position:absolute; left:165px; top: -25px" ; width="85px"/>
                </div>
        </form>
        
        <!--ФОРМА ВХОДА  -->
        <!-- <form action="login.php">
            <h1>Вход</h1>
                <div class="input-box">
                    <input type="text" placeholder="Логин" name="login" required>
                    <i class='bx bx-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Пароль" name="pass" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="remember">
                    <label for=""><input type="checkbox">Запомнить меня</label>
                </div>
                <button type="submit" class="btn">Войти</button>
                <div class="logo">
                    <img src="./jpg/logo1.png"  style="position:absolute; left:165px; top: -25px" ; width="85px"/>
                </div>
        </form> -->

    </div>
</body>
</html>