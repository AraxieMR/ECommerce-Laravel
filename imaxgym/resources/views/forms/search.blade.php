@extends('master')
@section('main_content')

<section class="page-main-heading padding-top-small padding-bottom-small light box-shadow-inside">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8">
        <h3 class="text-weight-300 ">{{str_replace('iMAXGYM | ','',$title)}}</h3>
      </div> 
      <div class="col-md-4 col-sm-4 text-right breadcrumb-setting">
        <ol class="breadcrumb">
          <li><a href="{{url('')}}"><i class="fa fa-home"></i>Home</a></li>

          <li><a href="{{url('/shop')}}"><i class="fa fa-home"></i> Categories</a></li>
          <li class="active">Products</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section>
    <div class="container">
          @if($searched_products )
            <div class="row masnory-container">
                 <div class="col-md-12 masnory-item shop-filter-skirt">
                    <div class="shop shop-single-column text-left">
                        @foreach($searched_products as $row)
                        <div class="row">
                            <div class="col-md-4">
                                <div class="shop-image box-shadow-hover">
                                    <a href="#">
                                        <img class="shop-img-feature img-responsive" alt="Shop" src="{{ asset('images/'.$row->image) }}">
                                    </a>
                                </div>
                                <div class="forsale">
                                    <span class="label label-base text-uppercase text-weight-700">sale</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="shop-text box-shadow-hover">
                                    <div title="" data-placement="top" data-toggle="tooltip" class="star-rating" data-original-title="4.50 Rating"><span class="width-50"><strong class="rating">4.50</strong> out of 5</span></div>
                                    <h3 class="shop-heading text-weight-600"><a href="#">{{ $row->title }}</a></h3>
                                    <div class="shop-price"><del><i class="fa fa-usd"></i>{{  $row->price }}</del> <span class="text-weight-700"><i class="fa fa-usd"></i>30.00</span></div>
                                    <p class="text-justify">{!! $row->article !!}</p>
                                </div>
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-base btn-lg text-weight-700 text-uppercase add-to-cart-btn" data-id="{{ $row->id }}">Add to Cart</a>
                                    <a href="{{url('shop/checkout')}}" class="btn btn-dark btn-lg text-weight-700 text-uppercase">Checkout</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
          @endif
        </div>
</section>

 
      @endsection
