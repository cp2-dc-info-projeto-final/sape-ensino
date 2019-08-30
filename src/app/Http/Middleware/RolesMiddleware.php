<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Closure;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $roleIds = ['Diretor' => 'Diretor', 'Professor' => 'Professor', 'Aluno' => 'Aluno'];
        
        foreach ($roles as $role)
        {
           if(isset($roleIds[$role]))
           {
               $allowedRoleIds[] = $roleIds[$role];
           }
        }
        $allowedRoleIds = array_unique($allowedRoleIds); 

        if(Auth::check()) {
            if(in_array(Auth::user()->cargo, $allowedRoleIds)) {
              return $next($request);
            }
        } else {

            return new Response(abort(403, 'Acesso não autorizado'));
        }
    }
}
