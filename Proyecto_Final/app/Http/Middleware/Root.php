<?php

namespace App\Http\Middleware;

use Closure;
use Session;


class Root
{


protected $auth;

public function __construct(Guard $auth){

    $this->auth = $auth;
}
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
  public function handle($request, Closure $next)
    {
        if($this->auth->user()->roll_cod !=3){
            Session::flash('message-error','sin privilegio');
            return redirect()->to('/home');
        }
        return $next($request);
    }
}
