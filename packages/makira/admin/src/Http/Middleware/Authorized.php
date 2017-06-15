<?php

namespace MAkira\Admin\Http\Middleware;

use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

class Authorized
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

        $user = Sentinel::check();

        if(!$user){
            return redirect()
                ->guest(route('admin::auth.login'))
                ->withErrors('Please login to your account');
        }

        // ddd($user->toArray);

        if($user->isSuperUser()){
            return $next($request);
        }

        $permission = Route::currentRouteName();
        if(!Sentinel::hasAccess($permission)){
            return App::abort(403);
        }
        return $next($request);
    }

}