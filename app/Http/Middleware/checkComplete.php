<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkComplete
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {



        if (
            Auth::user()->alamat != '' && !is_null(Auth::user()->alamat) &&
            Auth::user()->phone != '' && !is_null(Auth::user()->phone) &&
            Auth::user()->email != '' && !is_null(Auth::user()->email)

        ) {
            return $next($request);
        }
        else {
            return redirect()->back()->with(['message'=>'Data anda tidak lengkap','status'=>'success']);
        }

    }
}
