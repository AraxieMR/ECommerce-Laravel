<?php

namespace App\Http\Middleware;

use Closure,Session;

class SignMid
{
    /**we need to tell Kernal that we have signmid middleware we want him to use
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //return $next($request); means continue normal,dont do anything
      if(Session::has('user_id')){
        return redirect('');
      }else{
        return $next($request);//let him go where he wanted to
      }
    }
}
