<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;

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
            return new Response(abort(403, 'Acesso não autorizado'));
        }
        
        return $next($request);
    }
}
