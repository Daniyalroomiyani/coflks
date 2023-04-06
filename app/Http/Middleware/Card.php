<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Card
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
//        dd($request->cookie('coflksOrderid'));
        if ($request->cookie('coflksOrderid') != null)
            return $next($request);
        else
            return redirect()->route('Product.front.index');
    }
}
