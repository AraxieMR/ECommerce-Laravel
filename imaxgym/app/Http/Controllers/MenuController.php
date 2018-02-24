<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Session;

class MenuController extends MainController
{
    public function index()
    {
      self::$data['menu'] = Menu::all()->toArray();
      //dd(self::$data['menu']);
      return view('cms.menu',self::$data);
    }

    public function create()
    {
     return view('cms.add_menu',self::$data);
    }

       public function store(MenuRequest $request)
    {
     Menu::save_new($request);
     return redirect('cms/menu');
    }

    public function show($id)
    {
      self::$data['id'] = $id;
    return view('cms.delete_menu',self::$data);
    }
    
    public function edit($id)
    {
     self::$data['menu']=Menu::find($id)->toArray();
   //dd(self::$data);
     return view('cms.edit_menu',self::$data);
    }
    
    public function update(Request $request, $id)
    {
       Menu::update_item($request,$id);
       return redirect('cms/menu');
    }

    
    public function destroy($id)
    {
    Menu::destroy($id);
     Session::flash('sm','Menu deleted successfully !');
    return redirect('cms/menu');
    }
}
