@extends('template')

@section('content')
    <main>
        <div class="pet-section">
            <img class="centered-image" src="{{ asset('/Assets/'. $data->petType. '/'. $data->image) }}" />
            <div class="pet-name home-title">
                <h1>{{ $data->petName }}</h1>
            </div>
            <div class="button">
                {{-- <div class="call-button">
                    <input onclick="location.href='ShelterDetails.html';" type="submit" name="Call Shelter"
                        value="Call Shelter" class="pet-collection-button">
                </div> --}}
                <div class="adopt-button">
                    <input onclick="location.href='/form-personal-data';" type="submit" name="Adopt" value="Adopt"
                        class="pet-collection-button">
                </div>
            </div>
        </div>
        <div class="profile">
            <div class="profile-description">
                <div class="profile-head">
                    <h1>Type</h1>
                    <div class="breed">
                        <h2>{{ $data->petType }}</h2>
                    </div>
                </div>
                <div class="profile-head">
                    <h1>Gender</h1>
                    <div class="breed">
                        <h2>{{ $data->gender }}</h2>
                    </div>
                </div>
                <div class="profile-head">
                    <h1>Shelter</h1>
                    <div class="breed">
                        <h2>{{ $data->shelter->slug }}</h2>
                    </div>
                </div>
                <div class="profile-head">
                    <div class="breed">
                        <h2>{{ $data->shelter->description }}</h2>
                    </div>
                </div>
                <div class="profile-head">
                    <h1>Health</h1>
                    <div class="breed">
                        <h2>{{ $data->health }}</h2>
                    </div>
                </div>
            </div>
            <div class="shelter-container">
                <div class="shelter-card">
                    <img src="{{ asset('Assets/' . $data->shelter->image) }}" />
                    <div class="shelter-desc">
                        <h1>{{ $data->shelter->name }}</h1>
                        <img src="{{ asset('Assets/Line 33.png') }}" />
                        <div class="shelter-number-row">
                            <div>
                                <h2 class="shelter-number-coloumn">Location</h2>
                                <h3 class="shelter-number-coloumn">{{ $data->shelter->location }}</h3>
                            </div>
                            <div>
                                <h2 class="shelter-number-coloumn">Contact Shelter</h2>
                                <h3 class="shelter-number-coloumn">{{ $data->shelter->contact }}</h3>
                            </div>
                        </div>
                        <img src="{{ asset('Assets/Line 33.png') }}" />
                        {{-- <input onclick="location.href='/shelter-details';" type="submit" name="Shelter Details"
                            value="Shelter Details" class="shelter-button"> --}}
                            <a href="{{route('shelter-detail',['id'=>$data->shelter->id])}}" class="shelter-button">ShelterDetail</a>
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
                    <img src="{{ asset('Assets/Rectangle 7.png') }}" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="{{ asset('Assets/Rectangle 7 (1).png') }}" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
                <div class="motorcycle-card">
                    <img src="{{ asset('Assets/Rectangle 7 (2).png') }}" />
                    <div class="motorcycle-desc">
                        <div class="motorcycle-series-price">
                            <h2>Dogs</h2>
                            <h5>Tutorial</h5>
                        </div>
                        <h4>Cleaning and Grooming</h4>
                    </div>
                </div>
            </div>
            {{-- <div class="mobile-head">
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
            </div> --}}
    </main>
@endsection
