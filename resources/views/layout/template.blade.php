<!doctype html>
<html class="no-js" lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title', 'Vape-industry')
        </title>
        <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
        <link rel="stylesheet" href="{{asset('dist/css/style.css')}}"/>
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        {{-- ajout --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


    </head>

    <body>
            <div  class="top-bar">
                    <div style="color:white" class="top-bar-left">
                        <h4 class="brand-title"  >
                            <a href="{{url('/')}} ">
                                <i class="fa fa-home fa-lg" aria-hidden="true">
                                    Vape Industry
                                </i>
                            </a>
                        </h4>
                    </div>
                    <div class="top-bar-right">
                        <ol class="menu">
                            <li>
                                <a href="#">
                                    CIGARETTE 
                                </a>
                            </li> 
                                    
                                  
                            <li>
                                <a href="#">
                                    E-LIQUIDES
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                        <i class="fi-torso fa-2x" aria-hidden="true">
                                            </i>
                                    CONTACT
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                                    </i>
                                    VOTRE PANIER :  &nbsp
                                    <span class="alert badge">
                                        8
                                    </span>
                                </a>
                            </li>
                        </ol>
                    </div>
                </div>
       

@yield('content')

    <footer class="footer container-fluid">
        <div class="row justify-content-md-center">
            <div class="col small-1 medium-4 large-4 columns">
                <br>
                <i class="fi-telephone ">
                <br><br>09 05 05 05 05</i>
                <hr>
                <i class="fa fa-home"><p>11 rue edouard plachez
                <br>                     62220 CARVIN
                <br>                     FRANCE
                </p>
                </i>
            </div>
            <div class="col small-12 medium-4 large-4 columns">
                <br>
                <i class="fa fa-clock-o"><h4>Horaire d'ouverture</h4></i>
                    <ul>
                        <li><strong>lun.</strong> 10h00 - 19h00.</li>
                        <li><strong>mar.</strong> 10h00 - 19h00.</li>
                        <li><strong>mer.</strong> 10h00 - 19h00.</li>
                        <li><strong>jeu.</strong> 10h00 - 19h00.</li>
                        <li><strong>ven.</strong> 10h00 - 19h00.</li>
                        <li><strong>sam.</strong> 10h00 - 19h00.</li>
                        <li style="color:rgb(236, 88, 64)">
                            <strong>dim.</strong>
                        fermer.</li>
                    </ul>
            </div>
            
            <div class="col small-12 medium-4 large-4 columns">
            <br>
            <i class="fa fa-road"><h4>Nous suivre</h4></i>
            <ul class="footer-links">
                <li><a href="https://github.com/webdevmatics">GitHub</a></li>
                <li><a href="#">&nbsp<i class="fa fa-facebook"> &nbsp: Facebook</i></a></li>
                <li><a href="https://twitter.com/webdevmatics"><i class="fa fa-twitter"> : Twitter &nbsp</i></a></li>
            <ul>
            </div>
        </div>
    </footer>

    <script src="{{asset('dist/js/vendor/jquery.js')}}">
    <script src="{{asset('dist/js/app.js')}}">
    </body>
</html>
