<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
 use App\Models\Role;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * @param $request
     * @param Closure $next
     * @param $role
     * @param null $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if ($request->user()===null){
             return response('Нет доступа', 401);
         }
         if ($request-> user () -> hasAnyRole ($roles) || !$roles) {
             return $next($request);}

         return response('Нет доступа', 401);

    }
}
