@extends('template')

@section('content')
    <main>
        <div class="pet-section">
            <img src="Assets/hero-motorcycle.png" />
            <div class="pet-name home-title">
                <h1>Helly</h1>
            </div>
            <div class="button">
                <div class="call-button">
                    <input onclick="location.href='ShelterDetails.html';" type="submit" name="Call Shelter"
                        value="Call Shelter" class="pet-collection-button">
                </div>
                <div class="adopt-button">
                    <input onclick="location.href='form.html';" type="submit" name="Adopt" value="Adopt"
                        class="pet-collection-button">
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
                        <h2>Helly is very gentle and kind. He’s great with kids and older people. His parents passed from
                            cancer </h2>
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
                    <img src="Assets/Shelter Detail.png" />
                    <div class="shelter-desc">
                        <h1>Almart</h1>
                        <img src="Assets/Line 33.png" />
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
                        <img src="Assets/Line 33.png" />
                        <input onclick="location.href='ShelterDetails.html';" type="submit" name="Shelter Details"
                            value="Shelter Details" class="shelter-button">
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
                    <img src="Assets/Rectangle 7.png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (1).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (2).png" />
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
                    <img src="Assets/motor (1).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <h4>Helly</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (9).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Border Collie</h2>
                        </div>
                        <h4>Cindy</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (5).png" />
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
                    <img src="Assets/Rectangle 7 (6).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Bulldog</h2>
                        </div>
                        <h4>Loki</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (7).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Toy Puddle</h2>
                        </div>
                        <h4>Helly</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="Assets/Rectangle 7 (8).png" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Golden Retriever</h2>
                        </div>
                        <h4>Boy</h4>
                    </div>
                </div>
            </div>
    </main>
@endsection
