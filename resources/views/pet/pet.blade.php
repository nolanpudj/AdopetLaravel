@extends('template')

@section('content')
    <main>

        <div class="hero-section motorcycle">

            <div class="input-box" id="inputPets">
                <input type="text" placeholder="Search for pets...">
                <a href="PetSearchResults.html">
                    <i class="uil uil-search"></i>
                </a>
            </div>

            <div class="input-boxs" id="inputsPets">
                <input type="text" placeholder="Search for location...">
                <a href="ShelterDetails.html">
                    <i class="uil uil-search"></i>
                </a>
            </div>

            <a href="PetDetails.html" class="event-banner-link">
                <video loop autoplay muted class="hero-motorcycle">
                    <source src="Assets/HellyHero.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </a>

            <div class="heading">
                <h4 class="purple-highlight">Featured Pet</h4>
                <h1>Helly</h1>
                <h3>Male Golden Retriever</h3>
                <h2>SHELTER</h2>
                <h3>House of Dogs</h3>
                <h3>Helly is very gentle and kind. He’s great with kids and older people. His parents passed from cancer
                </h3>
            </div>
        </div>

        <div class="categories" id="categories">
            <a href="PetSearchResults.html" class="event-banner-link">
                <div id="categories1" class="square" onclick="location.href='Pets.html';" type="submit"
                    name="Dog Categories" value="Dog Categories">
                    <span>Dogs</span>
                </div>
            </a>
            <div id="categories2" class="square" onclick="location.href='Pets.html';" type="submit" name="Cat Categories"
                value="Cat Categories">
                <span>Cats</span>
            </div>
            <div id="categories3" class="square" onclick="location.href='Pets.html';" type="submit" name="Other Categories"
                value="Other Categories">
                <span>Reptiles</span>
            </div>
            <div id="categories4" class="square" onclick="location.href='Pets.html';" type="submit" name="Dog Categories"
                value="Dog Categories">
                <span>Birds</span>
            </div>
            <div id="categories5" class="square" onclick="location.href='Pets.html';" type="submit" name="Cat Categories"
                value="Cat Categories">
                <span>Fish</span>
            </div>
            <div id="categories6" class="square" onclick="location.href='Pets.html';" type="submit" name="Other Categories"
                value="Other Categories">
                <span>Exotic</span>
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
                        <img src="Assets/motor (1).png" />
                        <div class="motorcycle-desc">
                            <div class="motorcycle-series-price">
                                <h2>Golden Retriever</h2>
                            </div>
                            <div class="motorcycle-series-price">
                                <h4>Helly</h4>
                                <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                            </div>
                        </div>
                    </div>
                </a>
                <div class="motorcycle-card">
                    <img src="Assets/motor (2).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Toy Poodle</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Rambo</h4>
                            <a href="Wishlist.html" class="event-banner-link wishlist">
                                <img src="Assets/Black Icon/heart.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/motor (3).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Bulldog</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Cindy</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/motor (4).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Pitbull</h2>
                        </div>
                        <h4>Boy</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="article" id="category-1">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/ph_dog.svg"></img>
                    <h1 class="subtitle">Dogs</h1>
                </div>
                <div class="articles-button">
                    <input onclick="location.href='Articles.html';" type="submit" name="View All" value="View All"
                        class="view-collection-button">
                </div>
            </div>
            <div class="favorites-container">
                <div class="motorcycle-card">
                    <img src="Assets/Dogs/Rectangle 7.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Sky</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Dogs/Rectangle 7-1.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Chihuahua</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Biggie</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Dogs/Rectangle 7-3.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Cavoodle</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Kav</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/Dogs/Rectangle 7-2.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <h4>Josh</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="article" id="category-2">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/ph_cat.svg"></img>
                    <h1 class="subtitle">Cats</h1>
                </div>
                <div class="articles-button">
                    <input onclick="location.href='Articles.html';" type="submit" name="View All" value="View All"
                        class="view-collection-button">
                </div>
            </div>
            <div class="favorites-container">
                <div class="motorcycle-card">
                    <img src="Assets/Cats/Rectangle 7.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Oyen Catto</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Dima</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Cats/Rectangle 7-1.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Siberian Cat</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Malika</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Cats/Rectangle 7-2.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Scottish Fold</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Susy Glitt</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/Cats/Rectangle 7-3.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Angora</h2>
                        </div>
                        <h4>Snowy</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="article" id="category-3">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/fluent_animal-turtle-20-regular.svg"></img>
                    <h1 class="subtitle">Reptiles</h1>
                </div>
                <div class="articles-button">
                    <input onclick="location.href='Articles.html';" type="submit" name="View All" value="View All"
                        class="view-collection-button">
                </div>
            </div>
            <div class="favorites-container">
                <div class="motorcycle-card">
                    <img src="Assets/Reptiles/Rectangle 7.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Leopard Gecko</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Sammy</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Reptiles/Rectangle 7-1.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Blue Tongue Skink</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Mostima</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Reptiles/Rectangle 7-2.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Veiled Chameleon</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Midoriya</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/Reptiles/Rectangle 7-3.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Burmese Python</h2>
                        </div>
                        <h4>Heidi</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="article" id="category-4">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/ph_bird.svg"></img>
                    <h1 class="subtitle">Birds</h1>
                </div>
                <div class="articles-button">
                    <input onclick="location.href='Articles.html';" type="submit" name="View All" value="View All"
                        class="view-collection-button">
                </div>
            </div>
            <div class="favorites-container">
                <div class="motorcycle-card">
                    <img src="Assets/Birds/Rectangle 7.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Maccaw</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Blue</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Birds/Rectangle 7-1.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Sun Conure</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Weedy</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Birds/Rectangle 7-2.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Lovebirds</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Azure</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/Birds/Rectangle 7-3.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Cockatail</h2>
                        </div>
                        <h4>Sunny</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="article" id="category-5">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/ion_fish-outline.svg"></img>
                    <h1 class="subtitle">Fish</h1>
                </div>
                <div class="articles-button">
                    <input onclick="location.href='Articles.html';" type="submit" name="View All" value="View All"
                        class="view-collection-button">
                </div>
            </div>
            <div class="favorites-container">
                <div class="motorcycle-card">
                    <img src="Assets/Fish/Rectangle 7.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Goldfish</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Goldi</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Fish/Rectangle 7-1.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Clownfish</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Nemo</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Fish/Rectangle 7-2.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Betta</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Alpha</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/Fish/Rectangle 7-3.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Moray Eel</h2>
                        </div>
                        <h4>Morty</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="article" id="category-6">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/tabler_spider.svg"></img>
                    <h1 class="subtitle">Exotic</h1>
                </div>
                <div class="articles-button">
                    <input onclick="location.href='Articles.html';" type="submit" name="View All" value="View All"
                        class="view-collection-button">
                </div>
            </div>
            <div class="favorites-container">
                <div class="motorcycle-card">
                    <img src="Assets/Exotic/Rectangle 7.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Tarantula</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Miles</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Exotic/Rectangle 7-1.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Hedgehog</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Sonic</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Exotic/Rectangle 7-2.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Sugar Glider</h2>
                        </div>
                        <div class="motorcycle-series-price">
                            <h4>Caramel</h4>
                            <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                        </div>
                    </div>
                </div>
                <div class="motorcycle-card-mobile">
                    <img src="Assets/Exotic/Rectangle 7-3.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Fennec Fox</h2>
                        </div>
                        <h4>Fendi</h4>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
