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
            <a href="Home.html"><img src="./public/Assets/yamada.svg" alt="logo"/></a>
        </div>
        <div class="navigation-bar" id="navigation-bar">
            <ul class="navigation-list">
                <li><a href="Home.html" class="navigation-item">Home</a></li>
                <li><a href="Pets.html" class="navigation-item">Adopt a Pet</a></li>
                
                <li class="navigation-item dropdown">
                    <a class="navigation-link dropdown-toggle disabled-link navigation-item-active" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Community Hub
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Articles.html">Articles</a>
                        <a href="Forum.html" class="dropdown-item">Forum</a>
                    </div>
                </li>
                <li><a href="Events.html" class="navigation-item">Events</a></li>
                <li><a href="Register.html" class="navigation-item">Register</a></li>
                <li><a href="Login.html" class="navigation-item">Login</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="hero-section forum-title">
            <img src="Assets/boney-dHIRbh9En6I-unsplash.jpg"/>
            <div class="heading">
                <h4 class="green-highlight green-event">Tutorial</h4>
                <h1>Cleaning and Grooming</h1>
                <h3>Getting your loved one a fresh cut!</h3>
            </div>
        </div>

        <div class="forum-desc">
          <div class="mobile-head">
            <h1 class="ShelterMissions">Introduction</h1>
            <div class="shelter-missions">
                <h6>Cleaning and grooming are vital aspects of pet care that should not be overlooked by responsible pet owners. These practices play a significant role in maintaining the overall health and well-being of our beloved furry companions. By incorporating regular cleaning and grooming routines into our pets' lives, we not only keep them looking and smelling fresh but also prevent potential health issues and strengthen the bond between pet and owner.</h6>
            </div>
          </div>
  
          <div class="mobile-head">
            <h1 class="ShelterMissions">Content</h1>
            <div class="shelter-missions">
                <h6>Regular cleaning is essential for pets to maintain cleanliness and hygiene. Bathing helps remove dirt, odors, and parasites from their fur, preventing skin irritations and infestations. It also provides an opportunity to examine their skin for any signs of allergies, infections, or abnormalities that may require veterinary attention. Additionally, cleaning their ears, teeth, and eyes helps prevent infections, removes excess wax or debris, and promotes good oral hygiene.
                    Grooming, on the other hand, involves activities like nail trimming, fur brushing, and coat maintenance. Trimming nails not only prevents them from becoming overgrown and causing discomfort but also reduces the risk of scratches or injuries. Regular brushing of the fur removes loose hair, prevents matting, and stimulates the skin, promoting healthy coat growth and improving blood circulation. Grooming sessions also provide opportunities for pet owners to check for any lumps, bumps, or skin issues that may require professional evaluation.</h6>
            </div>
          </div>
  
          <div class="mobile-head">
            <h1 class="ShelterMissions">Conclusion</h1>
            <div class="shelter-missions">
              <h6>In conclusion, cleaning and grooming are essential components of pet care that contribute to the overall health, comfort, and happiness of our pets. By incorporating regular cleaning practices such as bathing, ear cleaning, and dental care, we can prevent infections and ensure a clean environment for both our pets and ourselves. Grooming activities like nail trimming, fur brushing, and coat maintenance not only keep our pets looking their best but also help prevent discomfort and identify any potential health concerns. Through regular cleaning and grooming, we demonstrate our love and commitment to the well-being of our furry friends, enhancing the bond between pet and owner.</h6>
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
                        <a href="https://www.facebook.com/"><img src="./public/Assets/facebook.svg" alt="facebook" class="social-media"/></a>
                    </div>
                    <div class="social-media-link">
                        <a href="https://www.instagram.com/"><img src="./public/Assets/instagram.svg" alt="instagram" class="social-media"/></a>
                    </div>
                    <div class="social-media-link">
                        <a href="https://www.twitter.com/"><img src="./public/Assets/twitter.svg" alt="twitter" class="social-media"/></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="{{ asset('js/scripts.js') }}"></script>
</html>