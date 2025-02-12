<?php

namespace App\Http\Middleware;

use App\Models\WebsiteSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Settings
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allSettings = WebsiteSetting::where('is_active',1)->get();
        $settings = [];
        foreach ($allSettings as $setting) {
            $settings[$setting->settings_name] = $setting->settings_value;
        }
        $request->merge(['settings' => $settings]);
        return $next($request);
    }
}
