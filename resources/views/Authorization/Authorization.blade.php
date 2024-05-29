<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css/Authorization-style.css') }}">
    <title>Авторизация</title>
</head>
<body class="d-flex align-items-center py-4">

    <main class="form-signin w-100 m-auto">
        <form>
            <div class="bd-example" style="border-width: 1px; padding: 5px" >
            <img src="img/logo_kp11 1.png" alt="Логотип" width="352" height="281">

            <div class="form-floating">
            <input type="text" class="form-control" name="" id="login-Auth" placeholder="Логин">
            <label for="login-Auth">Логин</label>
            </div>

            <div class="form-floating">
            <input type="password" class="form-control" name="" id="password-Auth" placeholder="Пароль">
            <label for="password-Auth">Пароль</label>
            </div>

            <button class=" btn-in">Войти</button>
            </div>
        </form>

    </main>
</body>
</html>
