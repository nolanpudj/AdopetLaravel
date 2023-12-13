@extends('template')

@section('content')
    <main>
       
        <div class="hero-section motorcycle">
            <div class="input-box" id="inputPets">
                <form action="{{route('search-pet')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="searchpet" placeholder="Search for pets...">
                   
                    {{-- <button>
                        <i class="uil uil-search"></i>
                    </button> --}}
                </form>
            </div>

            {{-- <div class="input-boxs" id="inputsPets">
                <input type="text" placeholder="Search for location...">
                <a href="ShelterDetails.html">
                    <i class="uil uil-search"></i>
                </a>
            </div> --}}

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
                    <a href="{{ route('pet.type.result', 'Dog') }}" name="View All" value="View All"
                        class="view-collection-button">View All</a>
                </div>
            </div>
            <div class="favorites-container">
                @foreach ($dogs as $item)
                <a href="{{ route('pet.detail', $item->id) }}" style="text-decoration: none">
                    <div class="motorcycle-card">
                        <img src="{{ asset('/Assets/'. $item->petType. '/'. $item->image) }}" />
                        <div class="motorcycle-desc">
                            <div class="motorcycle-series-price">
                                <h2>{{ $item->petBreed }}</h2>
                            </div>
                            <div class="motorcycle-series-price">
                                <h4>{{ $item->petName }}</h4>
                                <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                            </div>
                        </div>
                        {{-- <div class="manage-button">
                         
                            
                        </div> --}}
                        @auth
                            @if (Auth::User()->role == "admin")
                            <a href="{{route('edit-pet', ['id' =>$item->id])}}" class="manage-button">Edit</a>
                            <a href="{{route('delete-animal-validate',['id' =>$item->id])}}" class="manage-button">Delete</a>
                            @endif
                        @endauth
                    </div>
                </a>
                @endforeach
               
            </div>
        </div>
        @if(session('success'))
        <div class="alert alert-success auto-dismiss" data-dismiss-timeout="3000">
            {{ session('success') }}
        </div>
        @endif

       
       

        <div class="article" id="category-2">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/ph_cat.svg"></img>
                    <h1 class="subtitle">Cats</h1>
                </div>
                <div class="articles-button">
                    <a href="{{ route('pet.type.result', 'Cat') }}" name="View All" value="View All"
                        class="view-collection-button">View All</a>
                </div>
            </div>
            <div class="favorites-container">
                @foreach ($cats as $item)
                <a href="{{ route('pet.detail', $item->id) }}" style="text-decoration: none">
                    <div class="motorcycle-card">
                        <img src="{{ asset('/Assets/'. $item->petType. '/'. $item->image) }}" />
                        <div class="motorcycle-desc">
                            <div class="motorcycle-series-price">
                                <h2>{{ $item->petBreed }}</h2>
                            </div>
                            <div class="motorcycle-series-price">
                                <h4>{{ $item->petName }}</h4>
                                <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                            </div>
                        </div>
                        @auth
                            @if (Auth::User()->role == "admin")
                            <a href="{{route('edit-pet', ['id' =>$item->id])}}" class="manage-button">Edit</a>
                            <a href="{{route('delete-animal-validate',['id' =>$item->id])}}" class="manage-button">Delete</a>
                            @endif
                        @endauth
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="article" id="category-3">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/fluent_animal-turtle-20-regular.svg"></img>
                    <h1 class="subtitle">Reptiles</h1>
                </div>
                <div class="articles-button">
                    <a href="{{ route('pet.type.result', 'Reptiles') }}" name="View All" value="View All"
                        class="view-collection-button">View All</a>
                </div>
            </div>
            <div class="favorites-container">
                @foreach ($reptiles as $item)
                <a href="{{ route('pet.detail', $item->id) }}" style="text-decoration: none">
                    <div class="motorcycle-card">
                        <img src="{{ asset('/Assets/'. $item->petType. '/'. $item->image) }}" />
                        <div class="motorcycle-desc">
                            <div class="motorcycle-series-price">
                                <h2>{{ $item->petBreed }}</h2>
                            </div>
                            <div class="motorcycle-series-price">
                                <h4>{{ $item->petName }}</h4>
                                <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                            </div>
                        </div>
                        @auth
                            @if (Auth::User()->role == "admin")
                            <a href="{{route('edit-pet', ['id' =>$item->id])}}" class="manage-button">Edit</a>
                            <a href="{{route('delete-animal-validate',['id' =>$item->id])}}" class="manage-button">Delete</a>
                            @endif
                        @endauth
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="article" id="category-4">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/ph_bird.svg"></img>
                    <h1 class="subtitle">Birds</h1>
                </div>
                <div class="articles-button">
                    <a href="{{ route('pet.type.result', 'Bird') }}" name="View All" value="View All"
                        class="view-collection-button">View All</a>
                </div>
            </div>
            <div class="favorites-container">
                @foreach ($birds as $item)
                <a href="{{ route('pet.detail', $item->id) }}" style="text-decoration: none">
                    <div class="motorcycle-card">
                        <img src="{{ asset('/Assets/'. $item->petType. '/'. $item->image) }}" />
                        <div class="motorcycle-desc">
                            <div class="motorcycle-series-price">
                                <h2>{{ $item->petBreed }}</h2>
                            </div>
                            <div class="motorcycle-series-price">
                                <h4>{{ $item->petName }}</h4>
                                <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                            </div>
                        </div>
                        @auth
                            @if (Auth::User()->role == "admin")
                            <a href="{{route('edit-pet', ['id' =>$item->id])}}" class="manage-button">Edit</a>
                            <a href="{{route('delete-animal-validate',['id' =>$item->id])}}" class="manage-button">Delete</a>
                            @endif
                        @endauth
                    </div>
                </a>
                @endforeach
            </div>
        </div>

        <div class="article" id="category-5">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/ion_fish-outline.svg"></img>
                    <h1 class="subtitle">Fish</h1>
                </div>
                <div class="articles-button">
                    <a href="{{ route('pet.type.result', 'Fish') }}" name="View All" value="View All"
                        class="view-collection-button">View All</a>
                </div>
            </div>
            <div class="favorites-container">
                @foreach ($fish as $item)
                    <a href="{{ route('pet.detail', $item->id) }}" style="text-decoration: none">
                        <div class="motorcycle-card">
                            <img src="{{ asset('/Assets/' . $item->petType . '/' . $item->image) }}" />
                            <div class="motorcycle-desc">
                                <div class="motorcycle-series-price">
                                    <h2>{{ $item->petBreed }}</h2>
                                </div>
                                <div class="motorcycle-series-price">
                                    <h4>{{ $item->petName }}</h4>
                                    <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                                </div>
                            </div>
                            @auth
                                @if (Auth::User()->role == "admin")
                                <a href="{{route('edit-pet', ['id' =>$item->id])}}" class="manage-button">Edit</a>
                                <a href="{{route('delete-animal-validate',['id' =>$item->id])}}" class="manage-button">Delete</a>
                                @endif
                            @endauth
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="article" id="category-6">
            <div class="articles-container">
                <div class="categories-image">
                    <img src="Assets/Black Icon/tabler_spider.svg"></img>
                    <h1 class="subtitle">Exotic</h1>
                </div>
                <div class="articles-button">
                    <a href="{{ route('pet.type.result', 'Exotic') }}" name="View All" value="View All"
                        class="view-collection-button">View All</a>
                </div>
            </div>
            <div class="favorites-container">
                @foreach ($exotics as $item)
                    <a href="{{ route('pet.detail', $item->id) }}" style="text-decoration: none">
                        <div class="motorcycle-card">
                            <img src="{{ asset('/Assets/' . $item->petType . '/' . $item->image) }}" />
                            <div class="motorcycle-desc">
                                <div class="motorcycle-series-price">
                                    <h2>{{ $item->petBreed }}</h2>
                                </div>
                                <div class="motorcycle-series-price">
                                    <h4>{{ $item->petName }}</h4>
                                    <img class="wishlist" src="Assets/Black Icon/heart.svg" />
                                </div>
                            </div>
                            @auth
                                @if (Auth::User()->role == "admin")
                                <a href="{{route('edit-pet', ['id' =>$item->id])}}" class="manage-button">Edit</a>
                                <a href="{{route('delete-animal-validate',['id' =>$item->id])}}" class="manage-button">Delete</a>
                                @endif
                            @endauth
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        // Find all elements with the auto-dismiss class
        var autoDismissElements = document.querySelectorAll('.auto-dismiss');
    
        // Loop through each element and set a timeout to remove it
        autoDismissElements.forEach(function (element) {
            var timeout = element.dataset.dismissTimeout || 5000; // Default to 5000 milliseconds if not specified
            setTimeout(function () {
                element.remove(); // Remove the element from the DOM
            }, timeout);
        });
        });
    </script>
@endsection
