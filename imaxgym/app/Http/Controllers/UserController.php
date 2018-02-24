<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SigninRequest;
use App\Http\Requests\SignupRequest;
use App\Models\User;
use Session;

class UserController extends MainController
{
        function __construct() {
        parent::__construct();
        $this->middleware('signmid',['except'=>['logout']]);//[method names]
  }
  
public function getSignin()
{
        self::$data['title'] .='sign in page';
        return view('forms.signin',self::$data);
}
   
public function postSignin(SigninRequest $request)
{
        $rt= !empty($request['rt']) ? $request['rt'] : '';//rt=shop/checkout
        if( User::validate($request) ){
         return redirect($rt);//goes to home page
        }else{
        self::$data['title'] .='sign in page';//return back to signin page and display error in email/passw
        return view('forms.signin',self::$data)->withErrors('Wrong Email/Password');
   }
}

public function logout()
{
        Session::flush();
        return redirect('user/signin');
}

public function getSignup()
{
        self::$data['title'] .='sign up page';
        return view('forms.signup',self::$data);
}
public function postSignup(SignupRequest $request)
{
        User::save_new($request);//need to save this user in data base then redirect back to home page
        return redirect('');
}
}
