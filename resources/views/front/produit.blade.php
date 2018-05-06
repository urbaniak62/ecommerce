@extends('layout.template')

@section('content');
<section class="hero text-center">

</section>
<div class="row">
        <div class="small-4 small-offset-2 columns">
            <div class="item-wrapper">
                <div class="img-wrapper">
                    <a href="#">
                         <img src="{{asset('dist/img/azeoth.jpg')}}"/>
                    </a>
                </div>
            </div>
        </div>
        <div class="small-6 columns">
            <div class="item-wrapper">
                <h3 class="subheader">
                   <span class="price-tag">19.99 euros</span> Azeroth mecanique
                </h3>
                <div class="row">
                    <div class="large-12 columns">
                        <label>
                            nombre :
                            <select>
                                <option value="0">
                                    0
                                </option>
                                <option value="1">
                                    1
                                </option>
                                <option value="2">
                                    2
                                </option>
                                <option value="3">
                                    3
                                </option>
                               
                            </select>
                        </label>
                        <a href="#" class="button  expanded">Ajouter au panier</a>
                    </div>
                </div>
            <p class="text-left subheader"><small>* Produit par <a href="https://urbaniak62.github.io/portfolio/"><strong>URBANIAK Nicolas</strong></a></small></p>

            </div>
        </div>
    </div>
</div>
<br>
<hr><hr>

@endsection