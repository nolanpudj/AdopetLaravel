@extends('template')

@section('content')
    <main class="form-adopet">
        <img src = "Assets/summary.svg" alt = "Logo">
            <div class="form-inputs">
                <form name="FormAdopet" class="form-data" id="FormAdopet" action="./">
                    <h1>Your form has been successfuly been sent to our team</h1>
                    <p>Thanks for choosing our service in finding your best friend.</p><br>
                    <p2>We will reply to your request shortly upon reviewing this form</p2>

                    <!-- Submit Button -->
                    <input type="submit" name="next" value="Back to Home Page" class="next-button">  
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