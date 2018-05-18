<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.home');
    }

    public function allproducts()
    {
        return view('front.vitrine');
    }

    public function produit()
    {
        return view('front.produit');
    }

   public function cigarette()
   {
       return view('front.cigarette');
   }
   
   public function eliquide()
   {
       return view('front.eliquide');
   }
   
   public function panier()
   {
       return view('front.panier');
   }
}
