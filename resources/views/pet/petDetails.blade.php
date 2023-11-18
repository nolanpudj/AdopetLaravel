<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Pet Details</title>
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
        <div class="pet-section">
            <img src="Assets/hero-motorcycle.png"/>
            <div class="pet-name home-title">
                <h1>Helly</h1>
            </div>
            <div class="button">
            <div class="call-button">
                <input onclick="location.href='ShelterDetails.html';" type="submit" name="Call Shelter" value="Call Shelter" class="pet-collection-button">
            </div>
            <div class="adopt-button">
                <input onclick="location.href='form.html';" type="submit" name="Adopt" value="Adopt" class="pet-collection-button">
            </div>
            </div>
        </div>
        <div class="profile">
            <div class="profile-description">
                    <div class="profile-head">
                    <h1>Breed</h1>
                    <div class="breed">
                        <h2>Golden Retriever</h2>
                    </div>
                </div>
                <div class="profile-head">
                    <h1>Gender</h1>
                    <div class="breed">
                        <h2>Male</h2>
                    </div>
                </div>
                <div class="profile-head">
                    <h1>Shelter</h1>
                    <div class="breed">
                        <h2>House of Dogs</h2>
                    </div>
                </div>
                <div class="profile-head">
                    <div class="breed">
                        <h2>Helly is very gentle and kind. He’s great with kids and older people. His parents passed from cancer </h2>
                    </div>
                </div>
                <div class="profile-head">
                    <h1>Health</h1>
                    <div class="breed">
                        <h2>Vaccinations up to date</h2>
                    </div>
                </div>
            </div>
              <div class="shelter-container">
                <div class="shelter-card">
                    <img src="Assets/Shelter Detail.png"/>
                    <div class="shelter-desc">
                        <h1>Almart</h1>
                        <img src="Assets/Line 33.png"/>
                        <div class="shelter-number-row"> 
                            <div>
                                <h2 class="shelter-number-coloumn">Location</h2>
                                <h3 class="shelter-number-coloumn">Cengkareng, Jakarta Barat</h3>
                            </div>
                            <div>
                                <h2 class="shelter-number-coloumn">Contact Shelter</h2>
                                <h3 class="shelter-number-coloumn">1234567890</h3>
                            </div>
                        </div>
                        <img src="Assets/Line 33.png"/>
                        <input onclick="location.href='ShelterDetails.html';" type="submit" name="Shelter Details" value="Shelter Details" class="shelter-button">
                    </div>
                </div>
            </div>
        </div>
        <div class="favorites">
            <div class="mobile-head">
                <h1 class="subtitle">Tutorials</h1>
            </div>
            <div class="favorites-container">
                <div class="purple-rectangle"></div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7.png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (1).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (2).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
            </div>
            <div class="mobile-head">
                <h1 class="subtitle">More from this shelter</h1>
            </div>
            <div class="motorcycles-cont" id="bikes">
                <div class="purple-rectangle"></div>
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
                    <img src="Assets/Rectangle 7 (9).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Border Collie</h2>
                        </div>
                        <h4>Cindy</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (5).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Bulldog</h2>
                        </div>
                        <h4>Rambo</h4>
                    </div>
                </div>
            </div>
            <div class="mobile-head">
                <h1 class="subtitle">Dogs nearby</h1>
            </div>
            <div class="motorcycles-cont" id="bikes">
                <div class="purple-rectangle"></div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (6).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Bulldog</h2>
                        </div>
                        <h4>Loki</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (7).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Toy Puddle</h2>
                        </div>
                        <h4>Helly</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (8).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <h4>Boy</h4>
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