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
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const registerForm = document.querySelector('.register-form');

            registerForm.addEventListener('submit', function (event) {
                // Prevent the form from submitting
                event.preventDefault();

                // Your custom validation logic
                const username = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirm-password').value;

                // Example: Check if the username is incorrect
                if (username.length < 3) {
                    alert('Username is too short. Please enter at least 3 characters.');
                    return;
                }

                // Example: Check if the email is incorrect
                // You can use a more sophisticated email validation
                if (!email.includes('@')) {
                    alert('Invalid email address.');
                    return;
                }

                // Example: Check if the password is incorrect
                if (password.length < 8) {
                    alert('Password is too short. Please enter at least 8 characters.');
                    return;
                }

                // Example: Check if the passwords match
                if (password !== confirmPassword) {
                    alert('Passwords do not match. Please retype your password.');
                    return;
                }

                // If all validations pass, you can submit the form
                registerForm.submit();
            });
        });
    </script>
</body>
<script src="{{asset('js/scripts.js')}}"></script>
</html>
