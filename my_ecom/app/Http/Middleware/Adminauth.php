<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Adminauth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->has('ADMIN_LOGIN')){
            
        }else{
            $request->session()->flash('error','Access Denaid');
            return redirect('admin');
        }
        return $next($request); 
    }
}
