<?php

namespace App\Http\Middleware;

use Closure;

class DiretorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->cargo != 'Diretor')
        {
            return new Response(view('unauthorized')->with('cargo', 'Diretor'));
        }
        
        return $next($request);
    }
}
