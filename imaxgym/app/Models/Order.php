<?php

namespace App\Models;

use Session,Cart;
use Illuminate\Database\Eloquent\Model;
use DB;
use App\Models\Product;

class Order extends Model
{
static public function save_new()
 {
        $cartCollection= Cart::getContent();
        $cart= $cartCollection->toArray();//gets array and turn into string so we can store it in data column in orders
        $order= new self();
        $order->user_id = Session::get('user_id');
        $order->data = serialize($cart);
        $order->total = Cart::getTotal();
        $order->save();
          
        foreach($cart as $item){
          $id=$item['id'];
          $stock = DB::select('select stock from products where id = :id',['id'=>$id]);
          $stock=($stock[0]->stock);
          $reduceStock=$stock-$item['quantity'];
          $sql = "UPDATE products SET stock = $reduceStock "
                ."  WHERE id =$id ";
           DB::update($sql);
    }
       
          Cart::clear();
          Session::flash('sm','Thanks your order saved!');
   }
   
static public function getOrders()
{
     $sql = "SELECT o.*,u.name FROM orders o "
             . " JOIN users u ON u.id=o.user_id "
             . " ORDER BY o.created_at DESC ";
     return DB::select($sql);
}
}
