<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB,Session,Hash;

class User extends Model
{
 static public function validate($request)
{
        $valid=false;
        $email=$request['email'];
        $password=$request['password'];
        $sql="SELECT * FROM users u "
               . "JOIN user_roles r ON u.id=r.uid "
               . "WHERE u.email=?";   
        $user=DB::select($sql,[$email]);//auto sql inj cleaning
        if($user){
           $user=$user[0];//obj with user details
              if(Hash::check($password,$user->password)){
              $valid=true;
                  if($user->role == 6) {
                  Session::put('is_admin',true);
              }
         Session::put('user_id',$user->id);
         Session::put('user_name',$user->name);
         Session::flash('sm',$user->name.' Welcome back!');
     }
     }
 return $valid;
}
 
static public function save_new($request)
{
      $user=new self();
      $user->name = $request['name'];
      $user->email = $request['email'];
      $user->password = bcrypt($request['password'] );
      $user->save();
      $uid=$user->id;//new id will be a_i in data base for new user
      DB::insert( "INSERT INTO user_roles VALUES($uid,7)" );
           Session::put('user_id',$uid);
           Session::put('user_name',$request['name']);
           Session::flash('sm',$request['name'].' your account has been created !,you are logged in.');
   }
}
