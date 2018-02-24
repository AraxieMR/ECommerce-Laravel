@extends('master')
@section('main_content')

<section class="padding-top-medium padding-bottom-medium shop-cart">
  <div class="container">
    <div class="table-responsive">
      @if ($cart)
      <table class="table">
        <thead>
          <tr>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub Total</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cart as $item)
          <tr class="alert">
            <td class="cart-product-remove"><a href='{{url('shop/remove-item'.$item['id']) }}' data-dismiss="alert" aria-hidden="false"><i class="fa fa-close"></i></a> </td>
    
            <td class="cart-product-thumbnail"> 
             <a href="#"> <img alt="" src="{{ asset('images/'. $item['attributes']['image']) }}"> </a> 
             </td>
            
            <td class="cart-product-name"><div title="" data-placement="top" data-toggle="tooltip" class="star-rating" data-original-title="4.50 Rating"><span class="width-50"><strong class="rating">4.50</strong> out of 5</span></div><a href="#">{{ $item['name'] }}</a> </td>
            <td class="cart-product-price"><span class="amount">${{ $item['price'] }}</span> </td>
            <td class="cart-product-quantity">
              <form class="form-inline">
                <div class="product-quantity">
                  <div class="form-group plus">
                    <input data-id="{{$item['id']}}" class="btn btn-light update-cart" type="button" value="-">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="exampleInputEmail1" value="{{$item['quantity']}}">
                  </div>
                  <div class="form-group minus update-cart">
                    <input  data-id="{{$item['id']}}" class="btn btn-light update-cart" type="button" value="+">
                  </div>
                </div>
              </form>
            </td>
            <td class="cart-product-subtotal"><span class="amount">{{ $item['quantity'] * $item['price'] }} $</span> </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <form class="form-inline">
          <div class="form-group">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Coupon Code">
              <div class="input-group-btn">
                <a class="btn btn-dark text-weight-600 text-uppercase" href="#"><span>Apply</span> </a>
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6 col-sm-6 text-right">
        <a href="{{url('shop/clear-cart')}}" class="btn btn-base text-weight-600 text-uppercase"><span>Clear Cart</span></a>
      </div>
    </div>
    <div class="row margin-top-medium">
      <div class="col-md-6">
        <h3>Calculate Shipping</h3>
        <form class="row">
          <div class="col-md-12 form-group">
            <select class="form-control input-lg">
              <option value="CA">Canada</option>
              <option value="IL">Israel</option>
              <option value="RU">Russia</option>
              <option value="GB" >United Kingdom (UK)</option>
              <option value="US" selected="selected">United States (US)</option>
            </select>
          </div>
          <div class="col-md-6 col-sm-6 form-group">
            <input type="text" class="form-control input-lg" placeholder="State / County">
          </div>
          <div class="col-md-6 col-sm-6  form-group">
            <input type="text" class="form-control input-lg" placeholder="Post Code / Zip">
          </div>
        </form>
      </div>
      <div class="col-md-5">

        <h3>Cart Subtotal</h3>
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td class="cart-product-name"><strong>Cart Subtotal</strong> </td>
                <td class="cart-product-name text-right"><span class="amount">{{ Cart::getSubTotal() }} $</span> </td>
              </tr>
              <tr>
                <td class="cart-product-name"><strong>Shipping</strong> </td>
                <td class="cart-product-name text-right"><span class="amount">Free Shipping</span> </td>
              </tr>
              <tr>
                <td class="cart-product-name"><strong>Coupon</strong> </td>
                <td class="cart-product-name text-right"><span class="amount"></span> </td>
              </tr>
              <tr>
                <td class="cart-product-name"><strong>Total</strong> </td>
                <td class="cart-product-name text-right"><span class="amount color lead"><strong>{{ Cart::getTotal() }}$</strong></span> </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="text-right">
          <a href="{{url('shop/order')}}" class="btn btn-base text-weight-600 text-uppercase"><span>Proceed to Checkout</span></a>
        </div>
      </div>
      @else                            
      <p><i>No items in cart</i></p>
      @endif
    </div>
  </div>
</section>
</div>
@endsection

