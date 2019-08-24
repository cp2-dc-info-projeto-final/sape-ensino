<?php

namespace App\Http\Middleware;

use Closure;

class AlunoMiddleware
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
        if ($request->user() && $request->user()->cargo != 'Aluno')
        {
            return new Response(view('unauthorized')->with('cargo', 'Aluno'));
        }
        
        return $next($request);
    }
}
