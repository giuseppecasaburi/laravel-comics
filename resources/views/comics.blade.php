@php
    $comics_array = config('comics');
@endphp

@foreach ($comics_array as $comics)
    <div class="card" style="width: 18rem;">
        <img src="{{$comics["thumb"]}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$comics["title"]}}</h5>
            <p class="card-text">{{$comics["description"]}}</p>
            <button class="btn btn-primary">{{$comics["price"]}}</button>
        </div>
    </div>
@endforeach
