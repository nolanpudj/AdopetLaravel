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
            <a href="Home.html"><img src="Assets/yamada.svg" alt="logo"/></a>
        </div>
        <div class="navigation-bar" id="navigation-bar">
            <ul class="navigation-list">
                <li><a href="Home.html" class="navigation-item">Home</a></li>
                <li><a href="Pets.html" class="navigation-item">Adopt a Pet</a></li>

                <li class="navigation-item dropdown">
                    <a class="navigation-link dropdown-toggle disabled-link" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Community Hub
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Articles.html">Articles</a>
                        <a class="dropdown-item" href="Forum.html">Forum</a>
                    </div>
                </li>
                <li><a href="Events.html" class="navigation-item">Events</a></li>
                <li><a href="Register.html" class="navigation-item">Register</a></li>
                <li><a href="Login.html" class="navigation-item navigation-item-active">Login</a></li>
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
                <form name="logForm" class="login-data" id="logForm" action="./Home.html">
                    <!-- <label for="name">Full Name</label><br>
                    <input type="text" class="input-field" id="name" name="name"><br> -->
                    <label for="email">Email</label><br>
                    <input type="email" class="input-field" id="email" name="email"><br>
                    <label for="password">Password</label><br>
                    <div class="input-field-password">
                        <input type="password" class="input-field" id="password" name="password" placeholder="Min. 8 characters or numbers in lower and upper.">
                        <img src="./Assets/eye-close.png" class="eye" id="eye-close">
                    </div>
                    <!-- <label for="address">Address</label><br>
                    <input type="text" class="input-field" id="address" name="address"><br> -->
                    <!-- <label for="gender">Gender:&nbsp</label><br>
                    <input type="radio" id="male" name="gender" value="male" class="gender-male">
                    <label for="male" class="gender-label-male">Male</label>
                    <input type="radio" id="female" name="gender" value="female"class="gender-female">
                    <label for="female">Female</label><br>
                    <input type="checkbox" id="terms" name="terms" value="terms" class="terms">
                    <label for="terms"> I agree to the terms and conditions</label><br> -->
                    <input type="submit" name="Log-in" value="Submit" class="login-button">  
                </form>
            </div>
        </div>
    </main>
</body>
<script src="./scripts.js"></script>
</html>