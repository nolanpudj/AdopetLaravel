@extends('template')

@section('content')
    <main class="form-adopet">
        <img src = "Assets/address-data.svg" alt = "Logo">
            <div class="form-inputs">
                <form name="FormAdopet" class="form-data" id="FormAdopet" action="./form-experience">
                    <h1>Address Data</h1>
                    <p>Please input the correct data/information within this form</p><br>
                    <!-- Gender Radio Button -->
                    <label for="gender">- What is your type of residence:&nbsp</label><br>
                    <input type="radio" id="male" name="gender" value="male" class="gender-male">
                    <label for="male" class="gender-label-male">Yes</label>
                    <input type="radio" id="female" name="gender" value="female"class="gender-female">
                    <label for="female">No</label><br>
                    
                    <label for = "first-name"> What is your ownership status of your residence? </label>
                    <input type="text" class="input-field" id="first-name" name="first-name"><br>
                    
                    <label for = "last-name"> If it’s an rented residence, provide your landlord info here </label><br>
                    <input type="text" class="input-field" id="last-name" name="last-name"><br>
                    
                    <label for = "last-name"> What is your landlord's pet policy? </label><br>
                    <input type="text" class="input-field" id="last-name" name="last-name"><br>
                    
                    <label for = "last-name"> How is your living condition? </label><br>
                    <input type="text" class="input-field" id="last-name" name="last-name"><br>

                    <label for = "last-name"> describe the activity level in your home? </label><br>
                    <input type="text" class="input-field" id="last-name" name="last-name"><br>

                    <label for = "last-name"> Is there anyone in the house allergic to animals? </label><br>
                    <input type="text" class="input-field" id="last-name" name="last-name"><br>

                    <label for = "last-name"> Are there any children at home, if so state their age? </label><br>
                    <input type="text" class="input-field" id="last-name" name="last-name"><br>

                    <!-- Submit Button -->
                    <input type="submit" name="next" value="Next" class="next-button">  
                </form>
            </div>
    </main>
    {{-- <footer>
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
    </footer> --}}
</body>
<script src="./scripts.js"></script>
</html>
@endsection