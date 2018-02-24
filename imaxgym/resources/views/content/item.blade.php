@extends('master')
@section('main_content')

<section class="padding-top-small">
  <div class="container">
    @if(!empty($allkat))
    <div class="row">
      <div class="col-md-9">
        <div class="page-content">
        <div id="masnory-filter" class="text-center">
            <ul id="filterable">
               <li class="active"><a class="btn btn-default text-weight-600 text-uppercase" data-filter="*">All</a> </li>
                @foreach ($allkat as $kat)
                 <li><a  href="{{ url('shop/'.$kat['url']) }}" class="btn btn-default text-weight-600 text-uppercase" >{{ucwords($kat['title'])}}</a> </li>
                @endforeach
             </ul>
          </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</section>

<section>
        <div class="container">
            <div class="row masnory-container">
                <div class="col-md-12 masnory-item shop-filter-skirt">
                    <div class="shop shop-single-column text-left">
                        <div class="row">
                            <div class="col-md-4">
                               
                                  <div class=" shop-image box-shadow-hover portfolio text-center box-shadow-active">
                                 <div class="portfolio-image">
                                 <a href="#">
                                    <img class="shop-img-feature img-responsive" alt="Shop" src="{{ asset('images/'.$product['image']) }}">
                                <div class="portfolio-hover text-center">
                                    <a class="zoom" href="{{url('images/'.$product['image'])}}" data-placement="top" data-toggle="tooltip" title="Zoom" data-gal="prettyPhoto">
                                    <i class="fa fa-search"></i>
                                   </a>
                                </div>
                                </a>
                                </div>
                             
                                </div>
                               <div class="overlay dark-7"></div>
                                <div class="forsale">
                                    <span class="label label-base text-uppercase text-weight-700">sale</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="shop-text box-shadow-hover">
                                    <div title="" data-placement="top" data-toggle="tooltip" class="star-rating" data-original-title="4.50 Rating"><span class="width-50"><strong class="rating">4.50</strong> out of 5</span></div>
                                    <h3 class="shop-heading text-weight-600"><a href="#">{{ucfirst($product['title'] )}}</a></h3>
                                    <div class="shop-price"><del><i class="fa fa-usd"></i>{{$product['price']}}</del> <span class="text-weight-700"><i class="fa fa-usd"></i>30.00</span></div>
                                    <p class="text-justify">{!! $product['article'] !!}</p>
                                </div>
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-base btn-lg text-weight-700 text-uppercase add-to-cart-btn" data-id="{{ $product['id'] }}">Add to Cart</a>
                                    <a href="{{url('shop/checkout')}}" class="btn btn-dark btn-lg text-weight-700 text-uppercase">Checkout</a>
                                </div>
                            </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
  

        </div>
</section>

<!--<div class="row">
  <div class="col-md-12">
    <h1>{{ $product['title'] }}</h1>
    <p><img width="500" src="{{ asset('images/'.$product['image']) }}"></p>
    <p>{!! $product['article'] !!}</p>
    <p><b>Price on site:</b>{{$product['price']}}$</p>
     <input data-id="{{ $product['id'] }}" class="btn btn-success add-to-cart-btn" type="button" value="+Add to cart">
     <a class='btn btn-primary' href='{{url('shop/checkout')}}'>Checkout</a>
  </div>
</div>-->
@endsection
