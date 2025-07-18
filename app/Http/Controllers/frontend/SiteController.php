<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Downloads;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use App\Models\Query;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $blogs = BlogPost::join('blog_categories', 'blog_categories.id', '=', 'blog_posts.category_id')->where('blog_posts.active', 1)->orderBy('blog_posts.id', 'desc')->limit(3)->get();
        return view('frontend.index', ['settings' => $request->settings, 'blogs' => $blogs]);
    }
    public function about(Request $request)
    {
        return view('frontend.about', ['settings' => $request->settings]);
    }
    public function contactUs(Request $request)
    {
        return view('frontend.contact_us', ['settings' => $request->settings]);
    }
    public function blog(Request $request)
    {
        $blogs = BlogPost::join('blog_categories', 'blog_categories.id', '=', 'blog_posts.category_id')
            ->where('blog_posts.active', 1)
            ->orderBy('blog_posts.id', 'desc')
            ->get();
        return view('frontend.blog', ['settings' => $request->settings, "blogs" => $blogs]);
    }
    public function blogDetails(Request $request)
    {
        return view('frontend.blogDetails', ['settings' => $request->settings]);
    }
    public function portfolio(Request $request)
    {
        $portfolios = Portfolio::where('is_active', 1)->get();
        return view('frontend.portfolio', ['settings' => $request->settings, 'portfolios' => $portfolios]);
    }
    public function services(Request $request)
    {
        return view('frontend.services', ['settings' => $request->settings]);
    }
    public function storeQueries(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = $request->all();
        $query = new Query;
        $query->name = $data['name'];
        $query->email = $data['email'];
        $query->subject = $data['subject'];
        $query->message = $data['message'];
        if ($query->save()) {
            echo "OK";
        } else {
            return response()->json(['error' => 'Something went wrong.']);
        }
    }
    public function downloads(Request $request)
    {
        $downloads = Downloads::where('is_available', 1)->get();
        return view('frontend.downloads', ['settings' => $request->settings, 'downloads' => $downloads]);
    }
    public function downloadFile(Request $request)
    {
        $fileName = $request->file_name;
        $filePath = storage_path('app/public/uploads/' . $fileName);
        if (!file_exists($filePath)) {
            echo $filePath;
            return response()->json(['error' => 'File not found'], 404);
        }
        return response()->download($filePath);
    }
    public function privacy(Request $request)
    {
        return view('frontend.privacy', ['settings' => $request->settings]);
    }
    public function terms(Request $request)
    {
        return view('frontend.terms', ['settings' => $request->settings]);
    }
    public function webdesign(Request $request)
    {
        return view('frontend.webdesign', ['settings' => $request->settings]);
    }
    public function mobileApplications(Request $request)
    {
        return view('frontend.mobileApplications', ['settings' => $request->settings]);
    }
    public function productManagement(Request $request)
    {
        return view('frontend.productManagement', ['settings' => $request->settings]);
    }
    public function marketing(Request $request)
    {
        return view('frontend.marketing', ['settings' => $request->settings]);
    }
    public function graphicDesign(Request $request)
    {
        return view('frontend.graphicDesign', ['settings' => $request->settings]);
    }
    public function paymentAndRefund(Request $request)
    {
        return view('frontend.paymentRefunds', ['settings' => $request->settings]);
    }
}
