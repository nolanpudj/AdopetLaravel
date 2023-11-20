<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <title>Home</title>
</head>

<body>
    <header>
        <div class="logo">
            <button id="burger">☰</button>
            <a href="/home"><img src="Assets/yamada.svg" alt="logo" /></a>
        </div>
        <div class="navigation-bar" id="navigation-bar">
            <ul class="navigation-list">
                <li><a href="/home" class="navigation-item">Home</a></li>
                <li><a href="/pet" class="navigation-item">Adopt a Pet</a></li>
                <li class="navigation-item dropdown">
                    <a class="navigation-link dropdown-toggle disabled-link" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Community Hub
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/article">Articles</a>
                        <a class="dropdown-item" href="/forum">Forum</a>
                    </div>
                </li>
                <li><a href="/event" class="navigation-item">Events</a></li>
                @if (Auth::user())
                    <li><a class="navigation-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                    <li><a href="/register" class="navigation-item">Register</a></li>
                    <li><a href="/login" class="navigation-item">Login</a></li>
                @endif
            </ul>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="headfoot-clear">
            <div>
                <div>
                    <h2><a href="Home.html"><img src="Assets/yamada.svg" alt="logo" /></a></h2>
                </div>
                <div>
                    <ul class="navigation-list-footer">
                        <li><a href="Pets.html" class="navigation-item">Pets</a></li>
                        <li><a href="Events.html" class="navigation-item">Events</a></li>
                        <li><a href="Articles.html" class="navigation-item">Articles</a></li>
                        <li><a href="Forum.html" class="navigation-item">Forum</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <h2>Explore</h2>
                </div>
                <div>
                    <ul class="navigation-list-footer">
                        <li><a>Partners</a></li>
                        <li><a>Shelters</a></li>
                        <li><a>Reviews</a></li>
                        <li><a>Ambassadors</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div>
                    <ul class="navigation-list-footer">
                        <li><a class="event-banner-link" href="TermsNCondition.html">Terms & Conditions</a></li>
                        <li><a>Privacy & Policy</a></li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="footer-title">
                    <h2>Social networks</h2>
                </div>
                <div class="social-media">
                    <div class="social-media-link">
                        <a href="https://www.facebook.com/"><img src="Assets/facebook.svg" alt="facebook"
                                class="social-media" /></a>
                    </div>
                    <div class="social-media-link">
                        <a href="https://www.instagram.com/"><img src="Assets/instagram.svg" alt="instagram"
                                class="social-media" /></a>
                    </div>
                    <div class="social-media-link">
                        <a href="https://www.twitter.com/"><img src="Assets/twitter.svg" alt="twitter"
                                class="social-media" /></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="{{ asset('js/scripts.js') }}"></script>

</html>
