<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ... $Quyen): Response
    {
        if(Session::has('Quyen'))
        {
            foreach($Quyen as $item)
            {
                if($item == Session::get('Quyen'))
                {
                    return $next($request);
                }
            }
        }
        else
        {
            return redirect()->route('Login');
        }
        
    }
}
