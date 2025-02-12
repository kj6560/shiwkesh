<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        return view('frontend.index',['settings'=>$request->settings]);
    }
    public function about(Request $request){
        return view('frontend.about',['settings'=>$request->settings]);
    }
    public function contactUs(Request $request){
        return view('frontend.contact_us',['settings'=>$request->settings]);
    }
    public function blog(Request $request){
        return view('frontend.blog',['settings'=>$request->settings]);
    }
    public function blogDetails(Request $request){
        return view('frontend.blogDetails',['settings'=>$request->settings]);
    }
    public function portfolio(Request $request){
        return view('frontend.portfolio',['settings'=>$request->settings]);
    }
    public function services(Request $request){
        return view('frontend.services',['settings'=>$request->settings]);
    }
}
