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
