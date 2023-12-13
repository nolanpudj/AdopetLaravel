@extends('template')

@section('content')
    <main class="mainresult">
        <div class="favorites">

            <div class="mobile-head">

            </div>
            <div class="motorcycles-cont" id="bikes">
                @foreach ($data as $item)
                    <a href="{{ route('pet.detail', $item->id) }}" style="text-decoration: none">
                        <div class="motorcycle-card">
                            <img src="{{ asset('/Assets/'. $item->petType. '/'. $item->image) }}" />
                            <div class="motorcycle-desc">
                                <div class="motorcycle-series-price">
                                    <h2>{{ $item->petType }}</h2>
                                </div>
                                <div class="motorcycle-series-price">
                                    <h4>{{ $item->petName }}</h4>
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
                {{ $data->links() }}
            </div>
        </div>
    </main>
@endsection
