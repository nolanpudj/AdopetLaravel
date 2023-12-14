@extends('template')

@section('content')

@if($pets->isEmpty())
<div class="no-results">
    <h1>No Results</h1>
</div>
@else
<div class="search-results-count">
    <h1>Results Found for  "{{ $searchQuery }}", {{ $pets->total() }} Results Found</h1>
</div>
@endif   
<div class="article" id="category-2">

    <div class="favorites-container">
        @foreach ($pets as $item)
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
    <div>
        {{ $pets->appends(['searchpet' => $searchQuery])->links() }}
    </div>
</div>



@endsection