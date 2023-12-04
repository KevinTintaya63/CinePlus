<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login</title>
</head>

<style>
    body {
        padding: 0;
        margin: 0;
        height: 100vh;
        width: 100%;
        position: relative;
        /* background-image: url('https://cdn.discordapp.com/attachments/864577245905551391/1099097200639873127/image.png'); */
        background-image: cover;
        background-repeat: no-repeat;
        font-family: Arial, Helvetica, sans-serif;
    }

    body::before {
        content: '';
        background-color: rgb(0, 0, 0, .5);
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }

    .logo img {
        height: 45px;
        width: 167px;
    }

    .header {
        padding: 20px 50px;
        position: relative;
        z-index: 10;
    }

    .login_body {
        padding: 60px;
        z-index: 90;
        position: relative;
        max-width: 450px;
        height: 550px;
        margin-left: 50%;
        background-color: rgb(0, 0, 0, 0.75);
        border-radius: 10px;
        box-sizing: border-box;
        transform: translateX(-50%);
    }

    .login_body h2 {
        font-size: 32px;
        color: #fff;
        margin-top: 0;
    }

    .login_body input {
        height: 50px;
        width: 100%;
        color: #fff;
        background-color: #333;
        border: none;
        border-radius: 5px;
        padding-left: 15px;
        box-sizing: border-box;
        outline: none;
    }

    .login_body input:hover {
        background-color: #444;
    }

    .input_box {
        margin-bottom: 25px;
        color: #fff
    }

    .login_body button {
        height: 50px;
        width: 100%;
        color: #fff;
        background-color: #e50914;
        border-radius: 3px;
        font-weight: bold;
        font-size: 16px;
        border: none;
        margin-bottom: 10px;
    }

    .login_body button:hover {
        background-color: #fc1722;
        cursor: pointer;
    }

    .support {
        display: flex;
        color: #b3b3b3;
        justify-content: space-between;
        font-size: 12px;
        margin-bottom: 5px;
    }

    .support input {
        width: 15px;
        height: 15px;
    }

    .remember {
        display: flex;
        align-items: center;
    }

    .remember span {
        margin-right: 5px;
        height: 25px;
    }

    .help a {
        text-decoration: none;
        color: #737373;
    }

    .help a:hover {
        text-decoration: underline;
    }

    .login_facebook {
        display: flex;
        align-items: center;
        width: 100%;
        color: #737373;
    }

    .login_facebook span {
        margin-right: 5px;
        font-size: 13px;
    }

    .login_facebook span a {
        text-decoration: none;
        color: #737373;
    }

    .sign_up {
        color: #737373;
        font-size: 16px;
    }

    .sign_up a {
        color: #fff;
        font-size: 16px;
        text-decoration: none;
    }

    .sign_up a:hover {
        text-decoration: underline;
    }

    .terms {
        color: #737373;
        font-size: 13px;
    }

    .terms a {
        text-decoration: none;
        color: #0071eb;
    }

    .terms a:hover {
        text-decoration: underline;
    }
</style>

<body>
    <div>
        <img src='https://cdn.discordapp.com/attachments/864577245905551391/1099097200639873127/image.png' alt=""
            style="position: absolute;width: 100%;height: 100vh;">
    </div>
    <div class="header">
        <div class="logo">
            <a href="#">
                {{-- <img src="assets/img/netflixlogo.png" alt=""> --}}
            </a>
        </div>
    </div>
    <div class="login_body">
        <div class="login_box">
            <h2>Entrar</h2>
            <form action="{{ route('inicia-sesion') }}" method="post">
                @csrf
                <div class="input_box">
                    <label for="emailInput" class="form-label">Email</label>
                    <input type="email" class="form-control" id="emailInput" name="email" required>
                </div>

                <div class="input_box">
                    <label for="passwordInput" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="passwordInput" required>
                </div>

                <div>
                    <button class="submit">
                        Entrar
                    </button>
                </div>
            </form>

            <div class="login_footer">
                <div class="sign_up">
                    <p>¿No tienes cuenta?<a href="{{ route('registro') }}">Registrarse</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>