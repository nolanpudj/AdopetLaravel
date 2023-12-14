<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Register</title>
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
    <main class="register">
        <div class="register-img">
            <img src="Assets/dogo-register.jpg" alt="dogo-register" />
        </div>
        <div class="register-data">
            <div>
                <h1>Become A Member</h1>
                <p>Join the Adopet family and gain rewards!</p>
                <form class="register-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <label for="name">Username</label><br>
                    <input type="text" class="input-field" id="name" name="name" required><br>
                    <label for="email">Email</label><br>
                    <input type="email" class="input-field" id="email" name="email" required><br>
                    <label for="password">Password</label><br>
                    <div class="input-field-password">
                        <input type="password" class="input-field" id="password" name="password"
                            placeholder="Min. 8 characters or numbers in lower and upper." required>
                        <img src="./Assets/eye-close.png" class="eye" id="eye-close">
                    </div>
                    <label for="confirm-password">Confirm Password</label><br>
                    <div class="input-field-password">
                        <input type="password" class="input-field" id="confirm-password" name="password_confirmation"
                            placeholder="Please Retype your password" required>
                        <img src="./Assets/eye-close.png" class="eye" id="eye-close-confirm">
                    </div>
                    <button type="submit" name="Register" value="Register" class="register-button">Register</button>
                </form>
            </div>
        </div>
    </main>
</body>
<script src="{{asset('js/scripts.js')}}"></script>
</html>
