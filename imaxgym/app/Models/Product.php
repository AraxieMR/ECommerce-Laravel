<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use  Cart,
        Session,
        Image,
        DB,
        Request;

class Product extends Model
{

static public function getProducts($cat_url, &$data,$orderBy,$orderName)
{
        if ($categorie = Categorie::where('url', '=', $cat_url)->first()) {//collection   
            $categorie = $categorie->toArray();
            $data['title'] .= $categorie['title'];
            $data['cat_url'] = $cat_url;
               if ($products = Product::where('categorie_id','=',$categorie['id'])->orderBy($orderName,$orderBy)->get()){
               $data['products'] = $products->toArray();
               }
         } else {
            abort(404);
         }
}

static public function getLatestProducts(&$data) 
{
        $data['latestProducts'] = Product::orderBy('created_at', 'DESC')->take(3)->get()->toArray();
}

static public function getAllCategory(&$data) 
{
        $data['allCategory'] = Categorie::all()->toArray();
}

static public function addToCart($id)
{
        if (!empty($id) && is_numeric($id)) {
            if (!Cart::get($id)) {                           //if product doesnt exist in the cart then add 1 to cart
                if ($product = self::find($id)) {
                $product = $product->toArray();
                Cart::add($id, $product['title'], $product['price'], 1, ['image' => $product['image'], 'url' => $product['url']]); //in array u can store extra data about the product user chose like color,size..
                Session::flash('sm', ucwords($product['title']) . ' added to cart'); //stored sm(msg)in session
                }
             }
         }
  }

static public function updateCart($request)
{
        if (!empty($request['id']) && is_numeric($request['id'])) {
           if (!empty($request['op'])) {
           $item = Cart::get($request['id']);
               if ($item) { //in cart then
                  if ($request['op'] == '+') {
                  Cart::update($request['id'], ['quantity' => 1]);
                  } elseif ($request['op'] == '-') {
                  $item = $item->toArray();
                     if ($item['quantity'] - 1 != 0) {
                     Cart::update($request['id'], ['quantity' => -1]);
                     }
                 }
               }
         }
   }
}

static public function save_new($request)
{
    $img = self::loadImage($request);
    $image_name = $img ? $img : 'noimageicon.png';

    $product = new self();
    $product->categorie_id = $request['categorie_id'];
    $product->title = $request['title'];
    $product->article = $request['article'];
    $product->image = $image_name;
    $product->url = $request['url'];
    $product->price = $request['price'];
    $product->rating = $request['rating'];
    $product->stock = $request['stock'];
    $product->save();
    Session::flash('sm', 'Product has been saved');
}

static public function update_item($request, $id)
{
    $image_name = self::loadImage($request);

    $product = self::find($id);
    $product->categorie_id = $request['categorie_id'];
    $product->title = $request['title'];
    $product->article = $request['article'];
    if ($image_name) {
        $product->image = $image_name;
    }
    $product->url = $request['url'];
    $product->price = $request['price'];
    $product->rating = $request['rating'];
    $product->stock = $request['stock'];
    $product->save();
    Session::flash('sm', 'Product has been updated');
  }

static private function loadImage($request)
{
    $image_name = '';

    if ($request->hasFile('image') && $request->file('image')->isValid()) {
        $file = $request->file('image');
        $image_name = date('Y.m.d.H.i.s') . '-' . $file->getClientOriginalName();
        $request->file('image')->move(public_path() . '/images', $image_name);
        $img = Image::make(public_path() . '/images/' . $image_name);
        $img->resize(300, null, function ($constraint) {
        $constraint->aspectRatio();
      });
         $img->save(public_path() . '/images' . $image_name);
    }
    return $image_name;
}

static public function search($request)
{
        $searched_products = [];
        $user_search = '';

        if (!empty($request['search'])) {
           $user_search = filter_var($request['search'], FILTER_SANITIZE_STRING);
        if ($user_search) {
            $sql = "SELECT * FROM products WHERE title LIKE ? OR article LIKE ?";
            //$search_result=DB::select($sql,[$user_search]);
            $search_result = DB::select($sql, ["%$user_search%", "%$user_search%"]);
            //dd($search_result);
            $searched_products = $search_result ? $search_result : [];
            return ($searched_products );
             } else {
             echo false;
         }
         }
}

static public function autocomplete($request)
{
        $searched_products = [];
        $user_search = '';

        if (!empty($request['search'])) {
            $user_search = filter_var($request['search'], FILTER_SANITIZE_STRING);
        if ($user_search) {
            $sql = "SELECT title FROM products WHERE title LIKE ? OR article LIKE ?";
            //$search_result=DB::select($sql,[$user_search]);
            $search_result = DB::select($sql, ["%$user_search%", "%$user_search%"]);
            //dd($search_result);
            $searched_products = $search_result ? $search_result : [];

            return $searched_products;
            }
          }
        }

}
