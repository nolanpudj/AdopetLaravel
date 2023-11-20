<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="logo">
            <button id="burger">☰</button>
            <a href="Home.html"><img src="Assets/yamada.svg" alt="logo" /></a>
        </div>
        <div class="navigation-bar" id="navigation-bar">
            <ul class="navigation-list">
                <li><a href="{{ url('/') }}" class="navigation-item">Home</a></li>
            </ul>
        </div>
    </header>
    <main class="Login">
        <div class="register-img">
            <img src="Assets/dogo-login.jpg" alt="dogo-login"/>
        </div>
        <div class="register-data">
            <div class="login-form">
                <h1>Log-in</h1>
                <p>Ready to find your new friend?</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- <label for="name">Full Name</label><br>
                    <input type="text" class="input-field" id="name" name="name"><br> -->
                    <label for="email">Email</label><br>
                    <input id="email" type="email" class="input-field" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="password">Password</label><br>
                    <div class="input-field-password">
                        <input id="password" type="password" class="input-field" name="password" required autocomplete="current-password" placeholder="Min. 8 characters or numbers in lower and upper.">
                        <img src="./Assets/eye-close.png" class="eye" id="eye-close">
                    </div>
                    <button type="submit" name="Log-in" value="Submit" class="login-button"> Login </button>
                </form><br><br>
                <a class="btn" href="{{ route('register') }}">
                    {{ __('Dont have an account?') }}
                </a>
            </div>
        </div>
    </main>
</body>
<script src="./scripts.js"></script>
</html>