<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioSettingsController extends Controller
{
    public function index(Request $request){
        $portfolios = Portfolio::where('is_active',1)->get();
        return view('backend.portfolio.index',['portfolios'=>$portfolios]);
    }
    public function create(Request $request){
        return view('backend.portfolio.create');
    }
}
