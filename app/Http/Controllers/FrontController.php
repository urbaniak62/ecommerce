<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.home');
    }
    public function allproducts(){
        return view('front.tous-les-produits');
    }
    public function produit(){
        return view('front.produit');
    }
    // public function admin(){
    //     return  view('admin.index');
    // }   
}
