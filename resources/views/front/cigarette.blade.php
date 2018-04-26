@extends('layout.template')

@section('content')

<div class="row">

    <div class="text-center">
        <h1>Les cigarettes</h1>
    </div>

    <div class="col small-12 medium-4 large-4">
        <div class="item-wrapper">
            <div class="img-wrapper ">
                <img src="{{asset('dist/img/azeoth.jpg')}}"/>
            </div>
            <a href="{{route('produit')}}">
            <h3>
            azerote mécanique
            </h3>
            </a>
            <h5>
                19.99 euro
    
            </h5>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
</div>
<hr>
<br>

@endsection