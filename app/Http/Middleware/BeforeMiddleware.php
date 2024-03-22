<?php

namespace App\Http\Middleware;

use App\Models\Menu;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\GeneralSettings;
class BeforeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $settings = GeneralSettings::where('id', 1)->first();
        $menus = Menu::all();
        view()->share('menus', $menus);
        view()->share('settings', $settings);
        return $next($request);
    }
}
