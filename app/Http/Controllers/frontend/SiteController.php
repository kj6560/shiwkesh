<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function about(Request $request){
        return view('frontend.about');
    }
    public function contactUs(Request $request){
        return view('frontend.contact_us');
    }
    public function blog(Request $request){
        return view('frontend.blog');
    }
    public function blogDetails(Request $request){
        return view('frontend.blogDetails');
    }
    public function portfolio(Request $request){
        return view('frontend.portfolio');
    }
    public function services(Request $request){
        return view('frontend.services');
    }
}
