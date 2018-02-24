<header class="main-header sticky-header logo-position-top-setting logo-position-top base">
  <nav class="navbar navbar-default">
    <div class="container-fluid position-relative">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header dark-bg-setting dark-bg">
        <!-- Begin: RESPONSIVE MENU TOGGLER -->
        <button type="button" class="navbar-toggle" data-toggle="modal" data-target=".header-search">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-search"></i>
        </button>
        <!-- End: RESPONSIVE MENU TOGGLER -->
        <!-- Begin: RESPONSIVE MENU TOGGLER -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-shopping-bag"></i>
        </button>
        <!-- End: RESPONSIVE MENU TOGGLER -->
        <!-- Begin: RESPONSIVE MENU TOGGLER -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <i class="fa fa-bars"></i>
        </button>
        <!-- End: RESPONSIVE MENU TOGGLER -->
        <!-- Begin: LOGO -->
        <a class="navbar-brand logo" href="{{ url('') }}"><span><i class="fa fa-info"></i></span> MaxGym</a>
        <!-- End: LOGO -->
      </div>
      <div class="logo-position-top-menu">
        <div class="collapse navbar-collapse text-weight-400" id="nav-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right margin-right-0">
            @foreach($menu as $item)
            <li > <a href="{{ url($item['url']) }}" >{{ $item['link'] }} <span ></span></a> </li> 
            @endforeach
             <li > <a href="{{ url('shop') }}">Shop <span ></span></a> </li>  
            @if( !Session::has('user_id') )
            <li> <a href="{{ url('user/signin') }}">Login <span ></span></a> </li>
            <li><a href="{{ url('user/signup') }}">SignUp <span ></span></a></li>
            @else
            <li><a href="{{ url('user/profile') }}">{{ Session::get('user_name') }}</a></li>
            @if( Session::has('is_admin') )
            <li><a href="{{ url('cms/dashboard') }}" >CMS Dashboard</a></li>
            @endif
            <li><a href="{{ url('user/logout') }}" >Logout</a></li>
            @endif
          </ul>
        </div>

        <div class="collapse navbar-collapse pull-right search-shop-dropdown" id="nav-navbar-collapse-2">
          <ul class="nav navbar-nav navbar-right margin-right-0">
            <li class="dropdown search-dropdown hidden-xs hidden-sm">
              <a href="#" class="" data-toggle="modal" data-target=".header-search"><i class="fa fa-search"></i></a>
            </li>
            <li class="dropdown shop-cart-dropdown">
                <a href="#"  class="dropdown-toggle hidden-xs hidden-sm" data-hover="dropdown" data-toggle="" role="button" aria-haspopup="true" aria-expanded="false"> 
                  <i class="fa fa-shopping-bag"></i> 
                  @if( !Cart::isEmpty() )
                  <div class='badge total-cart'>{{Cart::getTotalQuantity()}}</div>
                  @endif
                </a>
            <ul class="dropdown-menu">
               <li class="list-img">
               <ul class="list-ul">
                        <li>
                          <div class="row text-weight-700">
                            <div class="col-xs-8">item(s)</div>
                            <div class="col-xs-4 text-right">${{Cart::getTotal()}}</div>
                          </div>
                        </li>
       @foreach (Cart::getContent()->toArray() as $product)

                        <li class="alert">
                          <div class="close"><a href="#" data-dismiss="alert" aria-hidden="false"><i class="fa fa-close"></i></a></div>
                        <div class="list-img"> <a href="#"><img src="{{ asset('images/'.$product['attributes']['image'] ) }}" alt="{{ $product['name'] }}"></a> </div>
                          <div class="list-text">
                           <h5 class="list-title text-weight-600"><a href="#">{{ ucfirst($product['name'] )}}</a></h5>
                            <ul class="list-meta list-inline">
                       <li><i class="fa fa-usd"></i> {{  $product['price']}}</li>
                              <li>
                                <div class="star-rating" data-toggle="tooltip" data-placement="top" title="5.00"> <span class="width-100"><strong class="rating">5.00</strong> out of 5</span> </div>
                              </li>
                            </ul>
                          </div>
                        </li>

              @endforeach

                      </ul>
               </li>
               <li class="shop-cart-btn">
                 <div class="btn-group btn-group-justified"> 
                        <a href="{{ url('shop/checkout') }}" class="btn btn-base btn-sm text-weight-700 text-spacing-2 text-uppercase">View Cart</a>
                        <a href="{{ url('shop/order') }}" class="btn btn-dark btn-sm text-weight-700  text-spacing-2 text-uppercase">Checkout</a> </div>
               </li>
             </ul>
                       
              </li>
          </ul>
        </div>
      </div>
      </div>
  </nav>
</header>




