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
            <a href="Home.html"><img src="Assets/yamada.svg" alt="logo"/></a>
        </div>
        <div class="navigation-bar" id="navigation-bar">
            <ul class="navigation-list">
                <li><a href="Home.html" class="navigation-item navigation-item-active">Home</a></li>
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
                <li><a href="Login.html" class="navigation-item">Login</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="hero-section motorcycle">
            <div class="input-box" id="input">
                <input type="text" placeholder="Search for pets..." >
                <a href="PetSearchResults.html">
                <i class="uil uil-search"></i>
                </a> 
            </div>

            <div class="input-boxs" id="inputs">
                <input type="text" placeholder="Search for location..." >
                <a href="ShelterDetails.html">
                <i class="uil uil-search"></i>
                </a>
            </div>

            <video loop autoplay muted class="hero-motorcycle">
                <source src="Assets/HeroVideo.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <!-- <img class="hero-motorcycle" src="Assets/hero-motorcycle.png"/> -->

            <div class="heading">
                <h1>Adopt a Forever Friend today!</h1>
                <h3>Discover Unconditional Love and Joy with a Forever Friend</h3>
            </div>

        </div>

        <div class="overlay">
            <a href="PetSearchResults.html" class="event-banner-link">
            <div class="square" onclick="location.href='Pets.html';" type="submit" name="Dog Categories" value="Dog Categories">
              <img src="Assets/ph_dog.svg"></img>
              <span>Dogs</span>
            </div>
            </a>
            <div class="square" onclick="location.href='Pets.html';" type="submit" name="Cat Categories" value="Cat Categories">
              <img src="Assets/ph_cat.svg"></img>
              <span>Cats</span>
            </div>
            <div class="square" onclick="location.href='Pets.html#categories';" type="submit" name="Other Categories" value="Other Categories">
                <img src="Assets/fluent_animal-turtle-20-regular.svg">
                <span>Other Animals</span>
            </div>            
        </div>
          
        <div class="article" id="reccomendation">
            <div class="reccomendation-container">
                <h1 class="subtitle">Pets available for adoption nearby</h1>
            </div>
            <div class="favorites-container">
                <div class="purple-rectangle"></div>
                <a href="PetDetails.html" class="event-banner-link">
                <div class="motorcycle-card">
                    <img src="Assets/motor (1).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Helly</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg"/>
                        </div>
                    </div>
                </div>
                </a>
                <div class="motorcycle-card">
                    <img src="Assets/motor (2).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Toy Poodle</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Rambo</h4>
                            <a href="Wishlist.html" class="event-banner-link wishlist">
                            <img  src="Assets/Black Icon/heart.svg"/>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/motor (3).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Bulldog</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Cindy</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg"/>
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/motor (4).png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Pitbull</h2>
                        </div>
                        <h4>Boy</h4>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="whoweare">
            <div class="whoweare-head">
                <h4 class="purple-highlight">Events</h4>
                <h1 class="subtitle">Don't Miss Out on Our Exclusive Events</h1>
                <p>
                    Stay updated with our exciting lineup of upcoming events. From workshops to conferences, our Events section offers a diverse range of opportunities for learning, networking, and professional growth.
                </p>
                <input onclick="location.href='Events.html';" type="submit" name="Explore Events" value="Explore Events" class="view-collection-button">
            </div>
            <div>
                <img class="whoweare-image" src="Assets/madewithlove.svg" alt="Barista brewing coffee."/>
            </div>
        </section>
        
        <div class="article">
            <div class="articles-container">
                <div class="our-mission-head">
                    <h4 class="purple-highlight">Guide</h4>
                    <h1 class="subtitle">Pet Parenting 101</h1>
                </div>
                <div class="articles-button">
                    <input onclick="location.href='Articles.html';" type="submit" name="Learn More" value="Learn More" class="view-collection-button">
                </div>
            </div>
            <div class="favorites-container">
                <div class="purple-rectangle"></div>
                <div class="motorcycle-card">
                    <img src="Assets/Article1.png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <div class="motorcycle-series-name">
                            <h4>Cleaning and Grooming</h4>
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Article2.png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tips</h5>
                        </div>
                        <div class="motorcycle-series-name">
                            <h4>Walking in the Neighbourhood</h4>
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Article3.png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Reptiles</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <div class="motorcycle-series-name">
                            <h4>Basking 101</h4>
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/Article4.png"/>
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Cats</h2>
                            <h5>Tips</h5>
                        </div>
                        <div class="motorcycle-series-name">
                            <h4>Choosing your Toys</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <section class="whoweare">
            <div>
                <img class="whoweare-image" src="Assets/community.png" alt="Barista brewing coffee."/>
            </div>
            <div class="whoweare-head">
                <h4 class="purple-highlight">Forum</h4>
                <h1 class="subtitle">Join the Discussion on Our Forum!</h1>
                <p>
                    Get involved in our vibrant community of pet lovers and professionals by joining our Forum. Share your experiences, seek advice, and connect with like-minded individuals who are passionate about animals. Have questions? or simply want to share stories? Come and join us!
                </p>
                <input onclick="location.href='Forum.html';" type="submit" name="Join Us" value="Join Us" class="view-collection-button">
            </div>
        </section>
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
<script src="{{ asset('js/scripts.js') }}"></script>
</html>