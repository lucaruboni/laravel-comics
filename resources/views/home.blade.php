@extends('layout.app')

@section('content')
<div class='jumbotron'>

</div>

<div class="prodotti">
    <div class="container">
        <h2 class="my-4">Tutti i prodotti</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 g-4">
            @foreach ($comics as $comic)
            <li class="mt-3 d-flex">
                <div>
                    <img src="{{$comic['thumb']}}" class="card-img-top card_image" alt="...">
                    <div>
                        <p>{{ $comic['title'] }}</p>
                    </div>
                </div>
            </li>       
            @endforeach
        </div>
    </div>
</div>

@endsection
