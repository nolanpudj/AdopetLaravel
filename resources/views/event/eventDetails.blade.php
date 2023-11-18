<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">

    <title>About Us</title>
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
                        <a href="Forum.html" class="dropdown-item">Forum</a>
                    </div>
                </li>
                <li><a href="Events.html" class="navigation-item navigation-item-active">Events</a></li>
                <li><a href="Register.html" class="navigation-item">Register</a></li>
                <li><a href="Login.html" class="navigation-item">Login</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="event-section">
            <img src="Assets/Event (1).png"/>
            <div>
                <h1>Gathering Event</h1>
                <p>Join us for a gathering event celebrating our furry friends! Connect with fellow animal lovers, share stories, and promote pet well-being! Don't miss this opportunity to celebrate the joy animals bring into our lives!</p>
            </div>
        </div>
        <div class="event-details">
            <div class="event-detail">
                <div class="event-icon">
                    <img src="Assets/Calendar.png">
                </div>
                </h3> Wednesday, 18 February 2024 </h3>
            </div>
            <div class="event-detail">
                <div class="event-icon">
                    <img src="Assets/Clock.png">
                </div>
                </h3> 4 PM - 5 PM </h3>
            </div>
            <div class="event-detail">
                <div class="event-icon">
                    <img src="Assets/Map Pin.svg">
                </div>
                </h3> Pet Kingdom Alam Sutera </h3>
            </div>
            <div class="event-detail">
                <div class="event-icon">
                    <img src="Assets/Map.svg">
                </div>
                </h3> Alam Sutera, Jl. Jalur Sutera No.Kav.11A, RT.001/RW.015, Pakulonan, Kec. Serpong Utara, Kota Tangerang Selatan, Banten 15143 </h3>
            </div>    
            <div class="event-description">
                <h3>Welcome to our Animal-themed Gathering Event!</h3>
                <h3>Join us for a fun-filled celebration of our furry, feathered, and scaly friends. This event is dedicated to appreciating the beauty and companionship that animals bring into our lives. During the gathering, you'll have the chance to interact with a wide variety of animals, including dogs, cats, rabbits, and even some exotic species. Experience the joy of petting and playing with these adorable creatures and learn more about responsible pet ownership.</h3>
                <h3>In addition to the interactive sessions, there will be informative talks by experts in animal care and welfare. You'll gain valuable insights into animal behavior, nutrition, and general well-being. Don't miss out on this opportunity to deepen your understanding and connection with the animal kingdom. Come and be a part of our Animal-themed Gathering Event, where you can celebrate the wonders of the animal world and create lasting memories with these incredible beings.</h3>                    
            </div>  
        </div> 
    </main>
    <footer>
        <div class="headfoot-clear">
            <div>
                <div><h2><a href="Home.html"><img src="Assets/yamada.svg" alt="logo"/></a></h2></div>
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
                <div><h2>Explore</h2></div>
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
                <div class="footer-title"><h2>Social networks</h2></div>
                <div class="social-media">
                    <div class="social-media-link">
                        <a href="https://www.facebook.com/"><img src="Assets/facebook.svg" alt="facebook" class="social-media"/></a>
                    </div>
                    <div class="social-media-link">
                        <a href="https://www.instagram.com/"><img src="Assets/instagram.svg" alt="instagram" class="social-media"/></a>
                    </div>
                    <div class="social-media-link">
                        <a href="https://www.twitter.com/"><img src="Assets/twitter.svg" alt="twitter" class="social-media"/></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="./scripts.js"></script>
</html>