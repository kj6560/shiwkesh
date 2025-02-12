<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }
    public function login(Request $request)
    {
        return view('backend.login');
    }
    public function register(Request $request)
    {
        return view('backend.register');
    }
    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $user = User::create($validatedData);
        Auth::login($user);
        return redirect('/dashboard');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function generalSettings()
    {
        $settings = WebsiteSetting::all();
        return view('backend.settings.generalSettings', ['settings' => $settings]);
    }
    public function editGeneralSettings(Request $request, $id)
    {
        $settings = WebsiteSetting::all();
        $setting = WebsiteSetting::find($id);
        return view('backend.settings.generalSettings', ['settings' => $settings, 'setting' => $setting]);
    }
    public function deleteGeneralSettings(Request $request, $id)
    {
        $setting = WebsiteSetting::find($id);
        if ($setting->delete()) {
            return redirect()->back()->with('success', 'Settings deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
    public function storeGeneralSettings(Request $request)
    {
        $request->validate(
            [
                'settings_name' => 'required',
                'settings_value' => 'required',
                'is_active' => 'required'
            ]
        );
        $data = $request->all();
        $website_settings = new WebsiteSetting();
        $website_settings->settings_name = $data['settings_name'];
        $website_settings->settings_value = $data['settings_value'];
        $website_settings->is_active = $data['is_active'];
        if ($website_settings->save()) {
            return redirect()->back()->with('success', 'Settings saved successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
