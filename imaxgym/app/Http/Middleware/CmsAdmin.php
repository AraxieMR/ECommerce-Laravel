<?php

namespace App\Http\Middleware;

use Closure,Session;

class CmsAdmin {

  /**
   * Handle an incoming request.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next) {
    if( !Session::has('is_admin')){
      return redirect('user/signin');//when admin went away and his session died he needs to sign in again
    }else{
      return $next($request);
    }
  }

}
