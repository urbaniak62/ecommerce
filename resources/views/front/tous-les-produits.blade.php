@extends('layout.template')

@section('title', 'mes-produits')

@section('content')

<br>
<div class="subheader text-center"> 
    <h2>
       TOUS MES PRODUITS.
    </h2>
</div>

<hr>
<div class="row">

    <div class="small-12 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/box-liquide.png')}}"/>
                </a>
            </div>
            <a href="{{route('produit')}}">
                <h3>
                    parfum chocolat
                </h3>
            </a>
            <h5>
                19.99 euros
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-12 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    ajouter au panier
                </a>
                <a href="">
                    <img src="{{asset('dist/img/azeoth.jpg')}}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    box azeroth
                </h3>
            </a>
            <h5>
                19.99 euros
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-12 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/tube1.jpg')}}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    tube mécanique
                </h3>
            </a>
            <h5>
                19.99 euros
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
    <div class="small-12 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/cookies.jpeg')}}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    parfun cookies
                </h3>
            </a>
            <h5>
                19.99 euros
            </h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin posuere sem enim, accumsan convallis risus semper.
            </p>
        </div>
    </div>
</div>
<br>
<hr>
{{-- footers --}}

@endsection