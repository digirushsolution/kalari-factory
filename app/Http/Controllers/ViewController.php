<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
class ViewController extends Controller
{
    //
    public function home()
{
    
    $kalariProducts = Product::where('product_category_id', ProductCategory::where('name', 'Kalari')->first()->id)->get();

    $burgerProducts = Product::where('product_category_id', ProductCategory::where('name', 'anu2')->first()->id)->get();

    return view('frontend.home', compact('kalariProducts', 'burgerProducts'));
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


    public function showCart()
    {
     
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

        $products = Product::with('category')->get();
        $categories = ProductCategory::all();
        return view('frontend.products', compact('products', 'categories'));
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
