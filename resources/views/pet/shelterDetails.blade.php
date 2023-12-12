@extends('template')

@section('content')
    <main>
        <div class="shelter-section ">
            <img src="/Assets/{{$shelter->image}}" />
            <div class="shelter-icon">
                <img src="/Assets/shelter icon.png">
                <div class="shelter-text">
                    <h6>Pets House Animal Store</h6>
                    <img src="/Assets/Line 32.png" />
                    <div class="shelter-loc">
                        <img src="/Assets/pin map.png" />
                        <h5>{{$shelter->location}}, Griya sutera</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="favorites">
            <div class="mobile-head">
                <h1 class="subtitle">Available Pets</h1>
            </div>
            <div class="favorites-container">

                @foreach ($pet as $item)
                    <div class="motorcycle-card">
                        <img src="/Assets/{{$item->petType}}/{{$item->image}}" />
                        <div class="motorcycle-desc">
                            <div class="motorcycle-series-price">
                                <h2>{{$item->petBreed}}</h2>
                            </div>
                            <h4>{{$item->petName}}</h4>
                        </div>
                    </div>
                @endforeach
                

            </div>
            <div class="mobile-head">
                <h1 class="ShelterPolicy">Shelter Policy</h1>
                <div class="shelter-policy">
                    <h6>Our shelter prioritizes the well-being of animals and staff through comprehensive policies. We
                        provide proper care, including nutrition and medical attention. Adopters undergo screening, and
                        animals are spayed/neutered. Behavioral rehabilitation is offered, and health is closely monitored.
                        Humane euthanasia is considered when necessary. Training ensures a safe environment. Our goal is to
                        create a nurturing space, promote responsible pet ownership, and reduce homelessness.</h6>
                </div>
            </div>
            <div class="mobile-head">
                <h1 class="ShelterMissions">Shelter Missions</h1>
                <div class="shelter-missions">
                    <h6>Our shelter's mission is to rescue and care for homeless animals. We strive to provide a safe haven,
                        medical attention, nourishment, and a loving home for each animal. We work closely with the
                        community, respond to reports, and conduct safe rescues. Once in our care, we assess their health
                        and behavior, provide necessary treatments and rehabilitation. Our ultimate goal is to find them
                        permanent, loving homes through adoption programs. By doing so, we aim to improve the lives of
                        homeless animals and promote responsible pet ownership.</h6>
                </div>
            </div>
        </div>
    </main>
@endsection
