<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioSettingsController extends Controller
{
    public function index(Request $request)
    {
        $portfolios = Portfolio::get();
        return view('backend.portfolio.index', ['portfolios' => $portfolios]);
    }
    public function create(Request $request)
    {
        return view('backend.portfolio.create');
    }
    public function edit(Request $request, $id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
        return view('backend.portfolio.create', ['portfolio' => $portfolio]);
    }
    public function delete(Request $request, $id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
        if (!empty($portfolio->id) && $portfolio->delete()) {
            return redirect()->back()->with('success', 'Portfolio deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Portfolio not deleted');
        }
    }
    public function store(Request $request)
    {
        $data = $request->all();
        if (!empty($data['id'])) {
            $portfolio = Portfolio::where('id', $data['id'])->first();
        } else {
            $portfolio = new Portfolio();
        }

        $portfolio->client_name = $data['client_name'];
        $portfolio->work_type = $data['work_type'];
        $portfolio->work_url = $data['work_url'];
        $portfolio->status = $data['status'];
        $portfolio->is_active = $data['is_active'];
        $work_image = $request->file('work_image');
        if (!empty($work_image)) {
            $imageName = time() . '.' . $work_image->getClientOriginalExtension();
            $workImage = $work_image->storeAs('uploads', $imageName, 'public');
            $portfolio->work_image = $workImage;
        }
        if ($portfolio->save()) {
            return redirect()->back()->with('success', 'Portfolio saved successfully');
        } else {
            return redirect()->back()->with('error', 'Portfolio not saved');
        }
    }
}
