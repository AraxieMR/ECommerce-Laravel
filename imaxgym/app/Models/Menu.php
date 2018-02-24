<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
 static public function save_new($request)
{
      $menu=new self();
      $menu->link=$request['link'];
      $menu->mtitle=$request['mtitle'];
      $menu->url=$request['url'];
      $menu->save();
      Session::flash('sm','Menu has been saved');
 }
 
static public function update_item($request,$id)
{
      $menu= self::find($id);
      $menu->link=$request['link'];
      $menu->mtitle=$request['mtitle'];
      $menu->url=$request['url'];
      $menu->save();
      Session::flash('sm','Menu has been updated');
 }
}
