<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./styles.css" />
    <title>ADOPET</title>
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
      <section>
        <div class="events">
          <div class="events-head">
            <h4 class="green-highlight green-event">Let's meet up!</h4>
            <h1 class="subtitle">Upcoming Events</h1>
          </div>
        </div>
      </section>
      <section>
        <a href="EventDetails.html" class="event-banner-link">
        <div class="event-banner" id="event-banner-1">
          <div>
            <div class="event-banner-row">
              <div>
                <div>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">Wed, 18 Jun</p>
                </div>
              </div>
              <div>
                <div class="event-clock">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 6V12L16 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">4 PM - 5 PM</p>
                </div>
              </div>
            </div>
            <div>
              <h2>Gathering Event</h2>
              <p class="event-banner-desc">
                Join us for a gathering event celebrating our furry friends! Connect with fellow animal lovers, share stories, and promote pet well-being! Don't miss this opportunity to celebrate the joy animals bring into our lives!&nbsp;
              </p>
            </div>
          </div>
        </div>
        </a>
        <div class="event-banner" id="event-banner-2">
          <div>
            <div class="event-banner-row">
              <div>
                <div>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">Thu, 19 Jun</p>
                </div>
              </div>
              <div>
                <div class="event-clock">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 6V12L16 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">3 PM - 5 PM</p>
                </div>
              </div>
            </div>
            <h2>Meet and Greet</h2>
            <p class="event-banner-desc">
              Join us for a Meet and Greet event celebrating animals! Connect with fellow animal lovers, learn fascinating facts, and meet a variety of creatures! It's an unforgettable experience that will deepen your appreciation for the
              animal kingdom! Don't miss this opportunity to expand your knowledge and make lasting memories!&nbsp;
            </p>
          </div>
        </div>
        <div class="event-banner" id="event-banner-3">
          <div>
            <div class="event-banner-row">
              <div>
                <div>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">Fri, 20 Jun</p>
                </div>
              </div>
              <div>
                <div class="event-clock">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 6V12L16 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">7 PM - 9 PM</p>
                </div>
              </div>
            </div>
            <h2>Animal Day Celebration</h2>
            <p class="event-banner-desc">
              Join us for an Animal Day Celebration event that aims to raise awareness about animal welfare and conservation! The event includes educational talks, workshops, animal exhibitions, and engaging activities! Let's unite in our
              love for animals and celebrate their beauty and impact on our lives! Be part of this meaningful movement for a brighter future for all creatures!&nbsp;
            </p>
          </div>
        </div>
        <div class="event-banner" id="event-banner-4">
          <div>
            <div class="event-banner-row">
              <div>
                <div>
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">Sat, 21 Jun</p>
                </div>
              </div>
              <div>
                <div class="event-clock">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M12 6V12L16 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </div>
                <div>
                  <p class="event-banner-column">3 PM - 5 PM</p>
                </div>
              </div>
            </div>
            <h2>Paw Day</h2>
            <p class="event-banner-desc">
              Join our Paw Day event to celebrate the joy of pets! Enjoy pet shows, agility contests, workshops, and connect with fellow pet lovers! Bring your furry friends for a day of fun and create unforgettable memories! Don't miss out
              on this wagging-tails-and-wet-noses extravaganza!&nbsp;
            </p>
          </div>
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
  <script src="./scripts.js"></script>
</html>
