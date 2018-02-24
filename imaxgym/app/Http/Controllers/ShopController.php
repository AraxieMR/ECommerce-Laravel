<?php

namespace App\Http\Controllers;

        use Illuminate\Http\Request;
        use App\Models\Categorie;
        use App\Models\Product;
        use Cart;
        use App\Models\Order;
        use Session;


class ShopController extends MainController
{
public function categories()
        {

        self::$data['categories']=Categorie::all()->toArray();//creating new index for $data=categories
        self::$data['title'].='Shop Categories';
         
        return view('content.categories',self::$data);
        }
   
public function latestPrd() 
{
      Product::latestProducts(self::$data);
      return view('content.products',self::$data);
}
   
public function products(Request $request,$cat_url)
{
        (!empty($request['sort']) )  ?  ($orderBy=$request['sort'] )  :  $orderBy='asc';
        (!empty($request['name']) )  ?  ($orderName=$request['name'] )  :  $orderName='price';
         Product::getProducts($cat_url,self::$data,$orderBy,$orderName);
         Product::getLatestProducts(self::$data);
         Product::getAllCategory(self::$data);
         return view('content.products',self::$data);
}
   
public function item($cat_url,$prd_url)
{
        self::$data['allkat'] = Categorie::all()->toArray();
        self::$data['cat']=$cat_url;
        self::$data['allproducts'] = Product::all()->toArray();
        if($product=Product::where('url','=',$prd_url)->first()){
           $product=$product->toArray();//full data of one product
           self::$data['title'].=$product['title'];
           self::$data['product']=$product;
           return view('content.item',self::$data);
        }else{//in case $product=null which means no product
            abort(404);
        }
}
   
public function addToCart(Request $request)
{
        $products= Product::addToCart($request['id']);
        self::$data['products']=$products;
        return view('header',self::$data);
}
   
public function checkout()
{
        $cartCollection=Cart::getContent();
        $cart=$cartCollection->toArray();
        sort($cart);
        self::$data['cart']=$cart;//id,name,price,attributes(size,color..),conditions
        self::$data['title'].='checkout page';
        return view('content.checkout',self::$data);
}
    
public function clearCart()
{
        Cart::clear();
        return redirect('shop/checkout');//what comes after base url=accepts full path
}
   
public function updateCart(Request $request)
{
       Product::updateCart($request);
}
   
public function removeItem($id)
{
         Cart::remove($id);
         return redirect('shop/checkout');
}
   
public function order()
{
 
        if( Cart::isEmpty()){
        return redirect('shop');
        }else{
           if( !Session::has('user_id') ){
           return redirect('user/signin?rt=shop/checkout');
           }else{
              Order::save_new();
              return redirect('shop');
            }
       }
}
       
}
