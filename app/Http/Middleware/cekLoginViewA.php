<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class cekLoginViewA
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (session('berhasil_Login')) {
            return $next($request);
        }
    }
}
