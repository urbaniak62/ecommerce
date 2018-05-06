@extends('layout.template')

@section('content')
<section class="hero text-center">

</section>
<div class="subheader text-center">
    <h3><em>Detail de votre facture</em></h3>
</div>

<div class="row">
    <div class="col">
        <table>
            <thead>
                <tr>
                    <th>Categories</th>
                    <th>Produits</th>
                    <th>Prix</th>
                    <th>Quantitées</th>
                    <th>Total</th>
                </tr>
            </thead>
            
            <tbody>
                <tr>
                    <td>Cigarettes </td>
                    <td>Azeroth </td>
                    <td>20 euros </td>
                    <td>x 2 </td>
                    <td>40 euros </td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <a href="{{url('/')}}" class="button">Confirmer</a>
        </div>
        
    </div>
    
</div>



</div>

@endsection