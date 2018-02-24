<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Session;

class Content extends Model
{
static public function save_new($request)
{
      $content=new self();
      $content->menu_id = $request['menu_id'];
      $content->title = $request['title'];
      $content->article = $request['article'];
      $content->save();
      Session::flash('sm','Content has been saved !');
 }
 
static public function update_item($request,$id)
{
      $content= self::find($id);
      //dd($content['id']);
      $content->menu_id = $request['menu_id'];
      $content->title = $request['title'];
      $content->article = $request['article'];
      $content->save();
      Session::flash('sm','Content has been updated !');
 }
}
