<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscription;
class InscriptionController extends Controller
{
    public function index(){
        return view('front.inscription');
    }

    public function inscription(){
        dd($inscription);
        $inscription=Inscription::create([
            'name'=>request('name'),
            'tel'=>request('tel'),
            'email'=>request('email'),
            'password'=>request('password'),
            ]);
            return 'inscris' . request('name') ;
    }
}
