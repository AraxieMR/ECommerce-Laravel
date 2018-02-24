<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Categorie;
use App\Models\Product;
use Session;

class ProductsController extends MainController
{
      public function index()
    {
            self::$data['products'] = Product::all()->toArray();
            // dd(self::$data['products']);
            return view('cms.products',self::$data);
    }
    public function create()
    {
          self::$data['categories']= Categorie::all()->toArray();
          //self::$data['stock']= Product::
          return view('cms.add_product',self::$data);
    }

    public function store(ProductRequest $request)
    {
            Product::save_new($request);
            return redirect('cms/products');
    }

      public function show($id)
    {
            self::$data['id'] = $id;
            return view('cms.delete_product',self::$data);
    }

    public function edit($id)
    {
            self::$data['categories'] =  Categorie::all()->toArray();
            self::$data['product']= Product::find($id)->toArray();
            //dd(self::$data);
            return view('cms.edit_product',self::$data);
    }

    public function update(ProductRequest $request, $id)
    {
             Product::update_item($request,$id);
             return redirect('cms/products');
    }

    public function destroy($id)
    {
            Product::destroy($id);
            Session::flash('sm','Product deleted successfully !');
            return redirect('cms/products');
    }
    
    public function searchShop(Request $request)
    {
            $results = Product::search($request);
            self::$data['searched_products'] = $results;
            return view('forms.search',self::$data);
    }
   
   public function autocompleteShop(Request $request)
   {
          $results = Product::autocomplete($request);
          if ($results) {
             echo json_encode($results );
             } else {
             echo false;
             }
    }
    
}
