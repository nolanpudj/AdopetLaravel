@extends('template')

@section('content')
    <main>
        <div class="hero-section home-title">

            <div class="input-box" id="inputForum">
                <input type="text" placeholder="Search for forums...">
                <a href="ForumSearchResults.html">
                    <i class="uil uil-search"></i>
                </a>
            </div>

            <img src="Assets/black-background.png" />
            <div class="heading">
                <h4 class="green-highlight green-event">Let's Talk</h4>
                <h1>Providing Love and a New Home</h1>
                <h3>Let's share adoption experiences and provide advice and information to those planning to adopt!</h3>
            </div>
        </div>
        <section>
            <a href="/forum-details" class="event-banner-link">
                <div class="event-banner">
                    <div class="heading-forum">
                        <div class="more-button">
                            <h2>Introduce your adopted fur babies! 🐕‍🦺</h2>
                            <img src="Assets/more.png" alt="more" />
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                            stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="event-banner-column">Sun, 22 Jun</p>
                                </div>
                            </div>
                        </div>
                        <p class="event-banner-desc-forum">
                            Share the heartwarming stories of your adopted fur babies and how they've brought joy to your
                            life. Let's celebrate the power of pet adoption!&nbsp;
                        </p>
                        <div class="forum-contents">
                            <div class="event-banner-row forum-contents">
                                <div>
                                    <div>
                                        <a> <img src="Assets/likes.png" alt="likes" /> </a>
                                    </div>
                                    <div>
                                        <a>
                                            <p class="event-banner-column-padding">Likes</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="event-banner-row forum-contents">
                                <div>
                                    <div>
                                        <a> <img src="Assets/views.png" alt="views" /> </a>
                                    </div>
                                    <div>
                                        <a>
                                            <p class="event-banner-column-padding">Views</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="event-banner-row forum-contents">
                                <div>
                                    <div>
                                        <a> <img src="Assets/shares.png" alt="Shares" /> </a>
                                    </div>
                                    <div>
                                        <a>
                                            <p class="event-banner-column-padding">Shares</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="event-banner-row forum-contents">
                                <div>
                                    <div>
                                        <a> <img src="Assets/saves.png" alt="Saves" /> </a>
                                    </div>
                                    <div>
                                        <a>
                                            <p class="event-banner-column-padding">Saves</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            <div class="event-banner">
                <div class="heading-forum">
                    <div class="more-button">
                        <h2>Exciting news! Just adopted the sweetest furball today! 🐾</h2>
                        <a> <img src="Assets/more.png" alt="more" /> </a>
                    </div>
                    <div class="event-banner-row forum-contents">
                        <div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="event-banner-column">Sat, 21 Jun</p>
                            </div>
                        </div>
                    </div>
                    <p class="event-banner-desc-forum">
                        Meet my newest family member! I couldn't resist those puppy eyes. #AdoptDontShop #NewestMember&nbsp;
                    </p>
                    <div class="forum-contents">
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/likes.png" alt="likes" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Likes</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/views.png" alt="views" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Views</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/shares.png" alt="Shares" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Shares</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/saves.png" alt="Saves" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Saves</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-banner">
                <div class="heading-forum">
                    <div class="more-button">
                        <h2>Looking for a forever home for this adorable kitten! 😺</h2>
                        <a> <img src="Assets/more.png" alt="more" /> </a>
                    </div>
                    <div class="event-banner-row forum-contents">
                        <div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="event-banner-column">Fri, 20 Jun</p>
                            </div>
                        </div>
                    </div>
                    <p class="event-banner-desc-forum">
                        Help us find a loving family for this little furball. Spread the word and let's make a forever
                        match! #AdoptKittens #ForeverHomeNeeded&nbsp;
                    </p>
                    <div class="forum-contents">
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/likes.png" alt="likes" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Likes</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/views.png" alt="views" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Views</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/shares.png" alt="Shares" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Shares</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/saves.png" alt="Saves" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Saves</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-banner">
                <div class="heading-forum">
                    <div class="more-button">
                        <h2>Sharing adoption success stories 🤳🏻</h2>
                        <a> <img src="Assets/more.png" alt="more" /> </a>
                    </div>
                    <div class="event-banner-row forum-contents">
                        <div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="event-banner-column">Thu, 19 Jun</p>
                            </div>
                        </div>
                    </div>
                    <p class="event-banner-desc-forum">
                        Have you recently adopted a pet and witnessed a heartwarming transformation? Share your success
                        stories, before-and-after pictures, and inspire others to consider pet adoption!
                        #AdoptionSuccess&nbsp;
                    </p>
                    <div class="forum-contents">
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/likes.png" alt="likes" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Likes</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/views.png" alt="views" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Views</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/shares.png" alt="Shares" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Shares</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/saves.png" alt="Saves" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Saves</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event-banner">
                <div class="heading-forum">
                    <div class="more-button">
                        <h2>Adoption success story! 🐶❤️</h2>
                        <a> <img src="Assets/more.png" alt="more" /> </a>
                    </div>
                    <div class="event-banner-row forum-contents">
                        <div>
                            <div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 4H5C3.89543 4 3 4.89543 3 6V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V6C21 4.89543 20.1046 4 19 4Z"
                                        stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M16 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M8 2V6" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M3 10H21" stroke="white" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <p class="event-banner-column">Wed, 18 Jun</p>
                            </div>
                        </div>
                    </div>
                    <p class="event-banner-desc-forum">
                        Remember the shy pup we found at the shelter? Well, he's now a happy tail-wagger in his forever
                        home! Thanks, everyone! #HappyTails #AdoptionSuccess&nbsp;
                    </p>
                    <div class="forum-contents">
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/likes.png" alt="likes" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Likes</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/views.png" alt="views" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Views</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/shares.png" alt="Shares" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Shares</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="event-banner-row forum-contents">
                            <div>
                                <div>
                                    <a> <img src="Assets/saves.png" alt="Saves" /> </a>
                                </div>
                                <div>
                                    <a>
                                        <p class="event-banner-column-padding">Saves</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="pagination pagination">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <!-- <span class="sr-only">Previous</span> -->
                </a>
                <a class="page-link" href="Forum.html">1</a>
                <a class="page-link" href="Forum.html">2</a>
                <a class="page-link" href="Forum.html">3</a>
                <a class="page-link" href="Forum.html">4</a>
                <a class="page-link" href="Forum.html">5</a>
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <!-- <span class="sr-only">Next</span> -->
                </a>
            </ul>

        </section>
    </main>
@endsection
