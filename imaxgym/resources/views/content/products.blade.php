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

<section class="padding-top-small">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8">
        <div class="form-group">
          Sort by:
          <a href="?sort=asc&name=price" class="label-light label">Price low to high</a>
          <a href="?sort=desc&name=price" class="label-light label">Price high to low</a>
          <a href="?sort=asc&name=title" class="label-light label">Products a-z</a>
          <a href="?sort=desc&name=title" class="label-light label">Products z-a</a>
        </div>
      </div>
    </div>
    <br><br><br><br>
    <div class="row" id="prg-and-cat">
      <div class="col-md-9">
        <div class="page-content" > 
          @if( !empty($products))
          <div>
            @foreach($products as $product)
            <div class="col-md-4 col-sm-6 masnory-item shop-filter-skirt ">
              <div class="shop text-center box-shadow-hover">
                <div class="shop-image">
                  <a href="{{url('shop/'.$cat_url.'/'.$product['url'])}}" class=""><img class="shop-img-feature img-responsive" alt="Shop" src="{{asset('images/'.$product['image'])}}"></a>
                </div>
                <div class="forsale">
                  <span class="label label-base text-uppercase text-weight-700">sale</span>
                </div>
                <div class="shop-text">
                  <div title="" data-placement="top" data-toggle="tooltip" class="star-rating" data-original-title="{{$product['rating']}} Rating"><span class="width-50"><strong class="rating">{{$product['rating']}}</strong> out of 5</span></div>
                  <h4 class="shop-heading text-weight-600"><a href="#">{{ ucfirst($product['title']) }}</a></h4>
                  <div class="shop-price"><del><i class="fa fa-usd"></i>45.00</del> <span class="text-weight-700"><i class="fa fa-usd"></i>{{ $product['price'] }}</span></div>
                </div>
                <div class="btn-group btn-group-justified">
                  @if ( !Cart::get($product['id']))
                  <a data-id="{{ $product['id'] }}" class="btn btn-base btn-lg text-weight-700 text-uppercase add-to-cart-btn" href="#">Add to Cart</a>
                  @else
                  <a href="#" class="btn btn-base btn-lg text-weight-700 text-uppercase add-to-cart-btn" disabled="disabled">I'm in Cart </a>
                  @endif       
                  <a href="{{ url('shop/'.$cat_url.'/'.$product['url']) }}" class="btn btn-dark btn-lg text-weight-700 text-uppercase">More Detail</a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          @endif 


        </div>
      </div>                   
      <div class="col-md-3" id="category-side">
        <aside class="sidebar padding-bottom-medium">
          <div class="widget margin-bottom-medium">
            <h4 class="page-header text-weight-500 widget-title">Product Categories</h4>
            @if(!empty($allCategory))
            <div class="list-menu">
              <ul class="list-ul">
                @foreach($allCategory as $category)
                <li class=""><i class="fa fa-circle-o"></i><a href="{{url('shop/'.$category['url'])}}">{{$category['title']}} <span class="badge"> {{count($products)}}</span></a></li>
                @endforeach
              </ul>
            </div>
            @endif
          </div>

          <div class="widget margin-bottom-medium">
            @if(!empty($latestProducts))
            <h4 class="page-header text-weight-500 widget-title">Latest Products</h4>
            <div class="list-img">
              <ul class="list-ul">
                @foreach($latestProducts as $item)
                <li>
                  <div class="list-img">
                    <a href="{{ url('shop/'.$cat_url.'/'.$item['url']) }}"><img src="{{ asset('images/'.$item['image']) }}" alt="{{ $item['title'] }}"></a>
                  </div>
                  <div class="list-text">
                    <h5 class="list-title text-weight-600"><a href="{{ url('shop/'.$cat_url.'/'.$item['url']) }}">{{ucfirst($item['title'])}}</a></h5>
                    <ul class="list-meta list-inline">
                      <li class="price">${{$item['price']}}</li>
                      <li><div class="star-rating" data-toggle="tooltip" data-placement="top" title="{{$product['rating']}}"><span class="width-100"><strong class="rating">{{$product['rating']}}</strong> out of 5</span></div></li>
                    </ul>
                  </div>
                </li>
                @endforeach
              </ul>
            </div>
            @endif    
          </div>

         <div class="widget margin-bottom-medium">
            <h4 class="page-header text-weight-500 widget-title">Connect with Us</h4>
            <ul class="social-icon light">
              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a></li>
              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</div>
</section>

<section class="padding-0">
  <div class="container">
    <div class="row text-center">
      <div class="col-sm-12">
        <div class="clients owl-carousel">
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/wilson.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/adidas.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/brooks.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/jade.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/columbia.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/tyr.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/zoot.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/armour.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
          <div class="item">
            <div class="client">
              <a href="#" class="hover-2"><img src="{{asset('/images/logo/nike.png')}}" alt="Client" class="img-responsive"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection

