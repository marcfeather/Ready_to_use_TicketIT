<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
// use Kordy\Ticketit\Models\Agent;

class IsAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::user()->UserisAdmin())
        {
            return $next($request); 
        }

        /*
        if(Agent::isAgent() && !(Auth::user()->UserisAdmin()))
        {
           return redirect('/agent');
            return $next($request); 
        }

        if (!Agent::isAgent() && !Auth::user()->UserisAdmin())
        {
            return redirect('/');
            return $next($request); 
        }

        return redirect()->action('\Kordy\Ticketit\Controllers\TicketsController@index')
        ->with('warning', trans('ticketit::lang.you-are-not-permitted-to-access'));*/
        
    }
}
