<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function home(){
        return view('layout.home');
    }
    public function index2(){
        return view('layout.index-2');
    }
    public function about2(){
        return view('MU.about2');
    }
    public function about(){
        return view('MU.about');
    }
    public function blog_sidebar(){
        return view('MU.blog-sidebar');
    }
    public function blog_details(){
        return view('MU.blog_details');
    }
    public function blog(){
        return view('MU.blog');
    }
    public function cart(){
        return view('MU.cart');
    }

    public function contact(){
        return view('MU.contact');
    }
    public function checkout(){
        return view('MU.checkout');
    }
    public function login(){
        return view('MU.login');
    }
    public function my_account(){
        return view('MU.my-account');
    }
    public function portfolio_details(){
        return view('MU.portfolio-details');
    }
    public function portfolio(){
        return view('MU.portfolio');
    }
    public function services(){
        return view('MU.services');
    }
    public function shop_sidebar_list(){
        return view('MU.shop-sidebar-list');
    }
    public function shop_sidebar(){
        return view('MU.shop-sidebar');
    }
    public function shop(){
        return view('MU.shop');
    }
    public function single_product_gallery(){
        return view('MU.single-product-gallery');
    }
    public function servicsingle_product_sidebares(){
        return view('MU.single-product-sidebar');
    }
    public function single_product_video(){
        return view('MU.single-product-video');
    }
    public function single_product(){
        return view('MU.single-product');
    }
    public function wishlist(){
        return view('MU.wishlist');
    }
   
   
}
