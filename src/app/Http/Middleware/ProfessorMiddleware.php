<?php

namespace App\Http\Middleware;

use Closure;

class ProfessorMiddleware
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
        if ($request->user() && $request->user()->cargo != 'Professor')
        {
            return new Response(view('unauthorized')->with('cargo', 'Professor'));
        }
        
        return $next($request);
    }
}
