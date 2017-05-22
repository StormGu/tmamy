<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\DB;

class AdPoints
{

    protected $auth;

    public function __construct(Guard $auth) {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next) {

        if ($this->auth->check()) {
            $row = DB::table('profiles')->select('points')->where('user_id', $this->auth->id())->first();
            $row->points += 2;
            DB::table('profiles')->where('user_id', $this->auth->id())->update(['points' => $row->points]);
        }

        return $next($request);
    }
}
