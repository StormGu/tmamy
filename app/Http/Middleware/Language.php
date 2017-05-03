<?php

namespace App\Http\Middleware;

use Closure;

class Language
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     * @return mixed
     */
    public function handle($request, Closure $next) {

        // Get Current Locale
        if (!session('locale')) {
            \Session::put('locale', \Config::get('app.locale'));
        }

        $current_locale_code = session('locale');

        // Set Current Locale
        \App::setLocale($current_locale_code);

        // Set Available Languages
        $available_locales = \DB::table('languages')
            ->where('status', '1')
            ->orderBy('sort_order', 'asc')
            ->get();

        $current_locale = \DB::table('languages')
            ->where('code', $current_locale_code)
            ->where('status', '1')
            ->first();

        // Set Template Vars.
        \View::share('current_locale', $current_locale);
        \View::share('available_locales', $available_locales);


        return $next($request);
    }
}
