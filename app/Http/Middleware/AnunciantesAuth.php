<?php

namespace App\Http\Middleware;

use Closure;

class AnunciantesAuth
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

        if (auth()->guard('anunciante')->check()) {

            return $next($request);

        }

        return redirect('anunciante');

    }
}
