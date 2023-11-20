<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Motorbike</title>
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
                <li><a href="Pets.html" class="navigation-item navigation-item-active">Adopt a Pet</a></li>

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
                <li><a href="Login.html" class="navigation-item">Login</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="shelter-section ">
            <img src="Assets/Shelter Detail.png"/>
            <div class="shelter-icon">
                <img src="Assets/shelter icon.png">
                <div class="shelter-text">
                    <h6>Pets House Animal Store</h6>
                    <img src="Assets/Line 32.png"/>
                    <div class="shelter-loc">
                        <img src="Assets/pin map.png"/>
                        <h5>Tangerang, Poris Indah</h5>
                    </div>
                </div>
            </div> 
        </div>   
        <div class="favorites">
            <div class="mobile-head">
                <h1 class="subtitle">Available Pets</h1>
            </div>
            <div class="favorites-container">
                <div class="motorcycle-card">
                    <img src="Assets/motor (1).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <h4>Helly</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/motor (1).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <h4>Helly</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/motor (1).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <h4>Helly</h4>
                    </div>
                </div>
            </div>
            <div class="mobile-head">
                <h1 class="ShelterPolicy">Shelter Policy</h1>
                <div class="shelter-policy">
                    <h6>Our shelter prioritizes the well-being of animals and staff through comprehensive policies. We provide proper care, including nutrition and medical attention. Adopters undergo screening, and animals are spayed/neutered. Behavioral rehabilitation is offered, and health is closely monitored. Humane euthanasia is considered when necessary. Training ensures a safe environment. Our goal is to create a nurturing space, promote responsible pet ownership, and reduce homelessness.</h6>
                </div>
            </div>
            <div class="mobile-head">
                <h1 class="ShelterMissions">Shelter Missions</h1>
                <div class="shelter-missions">
                    <h6>Our shelter's mission is to rescue and care for homeless animals. We strive to provide a safe haven, medical attention, nourishment, and a loving home for each animal. We work closely with the community, respond to reports, and conduct safe rescues. Once in our care, we assess their health and behavior, provide necessary treatments and rehabilitation. Our ultimate goal is to find them permanent, loving homes through adoption programs. By doing so, we aim to improve the lives of homeless animals and promote responsible pet ownership.</h6>
                </div>
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