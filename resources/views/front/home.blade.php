@extends('layout.template')

@section('content')

<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <h2 >
        <strong>
           Bonjour, et bienvenue chez VAPE INDUSTRY.
        </strong>
    </h2>
    <br>
    <a href=" {{ url('/cigarette') }} ">
    <button class="button large">Visiter mon site.</button>
    </a>
</section>
<br/>
<div class="subheader text-center"> 
     <h2>
    MES DERNIERES RECEPTIONS ( E-liquide).
</div>

<!-- Latest SHirts -->
<div class="row">
    <div class="small-10 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper ">
                <a class="button expanded add-to-cart">
                   Ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/chocolate.jpeg')}}"/>
                </a>
            </div>
            <a href="#">
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
    <div class="small-10 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/cookies.jpeg')}}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    J-WELL
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
    <div class="small-10 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/churros.jpeg')}}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    Cyclope
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
    <div class="small-10 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper">
                <a class="button expanded add-to-cart">
                    Add to Cart
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/smore.jpeg')}}"/>
                </a>
            </div>
            <a href="#">
                <h3>
                    urbaniak
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
<!-- Footer -->
<br>

@endsection