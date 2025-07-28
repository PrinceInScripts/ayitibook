<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function myAccount()
    {
        return view('pages.account');
    }

    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function cart()
    {
        return view('pages.my-cart');
    }

    public function contactSeller()
    {
        return view('pages.contact-seller');
    }

    public function productDetails($id)
    {
        // Logic to fetch product details by ID
        return view('pages.product-details', compact('id'));
    }

    public function searchProduct(Request $request)
    {
        $query = $request->input('query');
        // Logic to search for products based on the query
        return view('pages.search-product', compact('query'));
    }


}
