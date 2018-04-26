@extends('layout.template')

@section('content')

<div class="row">

    <div class="text-center">
        <h1>Me contacter</h1>
    </div>
{{------------------------FORM CONTACT----------------------------------------}}
{{----------------------------------------------------------------------------}}
    <div class="col samll 12 medium-6 medium-centered large-6 large-centered">
        <form action="" method="POST" class="form-group">
        @csrf
        <input type="text" name="name" placeholder="Votre NOM :">
        <input type="text" name="tel" placeholder="Votre Téléphone :">
        <input type="email" name="name" placeholder="Votre Email :">
        <textarea name="message" id="" cols="30" rows="5"></textarea>
        <a href="#" class="buttun">Envoyer</a>
        </form>

    </div>


</div>
<hr>
<br>


@endsection