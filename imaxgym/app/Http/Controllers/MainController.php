<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Menu;

class MainController extends Controller
{
      public $ob='Hello';
      static public $data=['title'=>'iMAXGYM | '];
  
public function __construct() 
{
      self::$data['menu'] = Menu::all()->toArray();//like select all from table menus
}
}
