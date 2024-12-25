<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function home(){
        return view('frontend.home');
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function kalari(){
        return view('frontend.kalari');
        
    }
    public function cart(){
        return view('frontend.cart');
    }
    public function cafe(){
        return view('frontend.cafe');
    }
    public function privacy(){
        return view('frontend.privacy');
    }
    public function franchise(){
        return view('frontend.franchise');
    }
    public function products(){
        return view('frontend.products');
    } 
    public function refund(){
        return view('frontend.refund');
    }
  
    public function termsconditions(){
        return view('frontend.terms_conditions');
    }
    public function login(){
        return view('frontend.login');
    }
    public function register(){
        return view('frontend.register');
    }

    public function singlepage(){
        return view('frontend.singleproduct');
    }
}
