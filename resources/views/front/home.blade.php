@extends('layout.template')

@section('content')

<section class="hero text-center">
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <h1 >
        <strong>
                Vape Industry.
        </strong>
    </h1>
    <br>
    <br>
    <a href=" {{ url('/cigarette') }} ">
    <button class="button large">Visiter mon site.</button>
    </a>
    
</section>

<section class="row subheader" style="margin:3% 0 3% 28%" >
<h2 class="text-left">Qui sommes-nous ?</h3>
<h4 class="text-left"><i>Vape Industry est une boutique de vape qui s’adapte a ses clients,<br>
        lieu convivial possédant un espace dégustation, <br> ainsi qu’un petit salon d’attente.</i></h4>
</section>

<br>
<div class="subheader text-center"> 
     <h2>
    MES DERNIERES RECEPTIONS ( E-liquide).
</div>

<!-- Latest recpection e-liquide -->
<div class="row">
    <div class="small-10 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper ">
                <a class="button expanded add-to-cart">
                   Ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/liquide.jpg')}}"/>
                </a>
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
                    ajouter au panier
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
                    ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/liquide4.jpg')}}"/>
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
    <br>
    <hr>
    <br>
<div class="subheader text-center"> 
     <h2>
    MES DERNIERES RECEPTIONS ( Box mecanique et electronique).
</div>

<!-- Latest recpection e-liquide -->
<div class="row">
    <div class="small-10 medium-6 large-3 columns">
        <div class="item-wrapper">
            <div class="img-wrapper ">
                <a class="button expanded add-to-cart">
                   Ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/azeoth.jpg')}}"/>
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
                    <img src="{{asset('dist/img/tube2.jpg')}}"/>
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
                    ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/tube1.jpg')}}"/>
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
                    ajouter au panier
                </a>
                <a href="#">
                    <img src="{{asset('dist/img/tube4.png')}}"/>
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
<hr>
</div>
<!-- Footer -->
<br>



@endsection