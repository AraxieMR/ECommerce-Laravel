<!DOCTYPE html>
<html lang="en" ng-app="myModule">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $title }}</title>


    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('favicon.ico')}}" type="image/x-icon">
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,800italic,300,300italic">
    
    <!-- Begin: MAIN CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib/iMax/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/iMax/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/iMax/assets/css/plugins-min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('lib/iMax/assets/css/menu-overright.css')}}">
    <link href="{{asset('lib/iMax/assets/css/colors/orange-burgundy.css')}}" type="text/css" media="all" rel="stylesheet" id="colors" />
    <!-- End: MAIN CSS -->
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    
    <!-- Begin: REQUIRED FOR THIS PAGE ONLY -->
    <link rel="stylesheet" type="text/css" href="{{asset('lib/iMax/assets/plugins/revolution/css/layers.css')}}"/> 
    <link rel="stylesheet" type="text/css" href="{{asset('lib/iMax/assets/plugins/revolution/css/settings.css')}}"/> 
    <link rel="stylesheet" type="text/css" href="{{asset('lib/iMax/assets/plugins/revolution/css/navigation.css')}}"/> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.1/angular.js"></script>
    <script>var BASE_URL = "{{ url('') }}/";</script>
    
    <!-- End: REQUIRED FOR THIS PAGE ONLY -->

    <!-- Begin: HTML5SHIV FOR IE8 -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/internetexplorer/html5shiv.min.js"></script>
      <script src="js/internetexplorer/respond.min.js"></script>
    <![endif]-->
    <!-- end: HTML5SHIV FOR IE8 -->
    <style>
        h1, h2, h3, h4, h5, h6,
        .base-font-family {
            font-family: 'Raleway', sans-serif !important;
        }
    </style>
</head>

<body class="switcher_boxed boxed">
 
<div class="modal fade header-search" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="search">
                <form method="get"  autocomplete="off" action="{{url("shop/search")}}">
                    <div class="form-group full-width">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg search" placeholder="Search Here..." value="" id="searchField" name="search">
                            <div class="input-group-btn">
                              <button type="submit" name="submit" class="btn btn-base btn-lg submit-btn" ><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
          </div>
     </div>
</div>
 
 
@include('header')


      <br><br><br>
<div class='container'>
        @if( Session::has('sm') )
        <div class='row sm-box'>
          <div class='col-md-12'>
            <br>
            <div class='alert alert-success'>{{ Session::get('sm') }}</div>
          </div>
        </div>
        @endif

      @if( is_object($errors) && $errors->any() )
        <div class='row'>
          <div class='col-md-12'>
            <br>
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          </div>
        </div>
        @endif
</div>
        
@yield('main_content') 
  
 @include('footer')

    <!-- Begin: BACK TO TOP -->
    <a id="back-to-top" href="#" class="back-to-top btn btn-base">
        <i class="fa fa-chevron-up"></i>
    </a>
   
    <!-- End: BACK TO TOP -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script type="text/javascript" src="{{asset('lib/iMax/assets/js/jquery.min.js')}}"></script>
   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="{{asset('lib/iMax/assets/js/bootstrap.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/iMax/assets/js/main.js')}}"></script>
    <script src="{{asset('js/script.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/sort.js')}}" type="text/javascript"></script>

 
    <!-- Begin: REQUIRED FOR THIS PAGE ONLY -->
    
 <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/jquery.themepunch.revolution.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/jquery.themepunch.tools.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.actions.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.carousel.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.kenburn.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.migration.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.navigation.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.parallax.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.slideanims.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('lib/iMax/assets/plugins/revolution/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- Slider JS -->
    <script type="text/javascript">
    var tpj=jQuery;         
        var revapi4;
        tpj(document).ready(function() {
            if(tpj("#rev_slider").revolution == undefined){
                revslider_showDoubleJqueryError("#rev_slider");
            }else{
                revapi6 = tpj("#rev_slider").show().revolution({
                    sliderType:"standard",
                    jsFileLocation:"{{asset('lib/iMax/assets/plugins/revolution/')}}",
                    sliderLayout:"fullscreen",
                    dottedOverlay:"none",
                    delay:9000,
                    navigation: {
                        keyboardNavigation:"off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation:"off",
                        mouseScrollReverse:"default",
                        onHoverStop:"on",
                        touch:{
                            touchenabled:"on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        }
                        ,
                        arrows: {
                            style:"metis",
                            enable:true,
                            hide_onmobile:true,
                            hide_under:800,
                            hide_onleave:true,
                            hide_delay:200,
                            hide_delay_mobile:1200,
                            tmp:'',
                            left: {
                                h_align:"left",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            },
                            right: {
                                h_align:"right",
                                v_align:"center",
                                h_offset:20,
                                v_offset:0
                            }
                        }
                        ,
                        bullets: {
                            enable:true,
                            hide_onmobile:false,
                            style:"uranus",
                            hide_onleave:false,
                            direction:"horizontal",
                            h_align:"center",
                            v_align:"bottom",
                            h_offset:0,
                            v_offset:20,
                            space:5,
                            tmp:'<span class="tp-bullet-inner"></span>'
                        }
                    },
                    visibilityLevels:[1240,1024,778,480],
                    gridwidth:1240,
                    gridheight:500,
                    lazyType:"none",
                    parallax: {
                        type:"mouse",
                        origo:"enterpoint",
                        speed:400,
                        levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                        type:"mouse",
                    },
                    shadow:0,
                    spinner:"spinner2",
                    stopLoop:"off",
                    stopAfterLoops:-1,
                    stopAtSlide:-1,
                    shuffle:"off",
                    autoHeight:"off",
                    fullScreenAutoWidth:"off",
                    fullScreenAlignForce:"off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "",
                    disableProgressBar:"on",
                    hideThumbsOnMobile:"off",
                    hideSliderAtLimit:0,
                    hideCaptionAtLimit:0,
                    hideAllCaptionAtLilmit:0,
                    debugMode:false,
                    fallbacks: {
                        simplifyAll:"off",
                        nextSlideOnWindowFocus:"off",
                        disableFocusListener:false,
                    }
                });
            }
        }); /*ready*/
    </script>
     <script type="text/javascript" defer src="{{asset('lib/iMax/assets/plugins/countdown/jquery.countdown.js')}}"></script>	
    <script>
        $(document).ready(function () {
            $(".testimonials").owlCarousel({
                autoPlay: 3000,
                stopOnHover: false,
                navigation: true,
                pagination: false,
                paginationSpeed: 1000,
                goToFirstSpeed: 2000,
                singleItem: true,
                autoHeight: true,
                transitionStyle: "fadeUp" // "fade", "fadeUp", "backSlide", "goDown"
            });
           
        });
          $(document).ready(function () {
            $(".shop-carousel").owlCarousel({
                items: 5, //10 items above 1000px browser width
                itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                itemsTablet: [600, 3], //2 items between 600 and 0
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                pagination: false,
                paginationSpeed: 1000,
                goToFirstSpeed: 2000,
                singleItem: false,
                autoHeight: true,
                transitionStyle: "fade"
            });
        });
 $(document).ready(function () {
            $(".clients").owlCarousel({
                items: 6, //10 items above 1000px browser width
                itemsDesktop: [1000, 5], //5 items between 1000px and 901px
                itemsDesktopSmall: [900, 3], // betweem 900px and 601px
                itemsTablet: [600, 3], //2 items between 600 and 0
                autoPlay: 3000,
                stopOnHover: true,
                navigation: true,
                pagination: false,
                paginationSpeed: 1000,
                goToFirstSpeed: 2000,
                singleItem: false,
                autoHeight: true,
                transitionStyle: "fade"
            });
        });
  $(document).ready(function () {
            $('.countdown').countdown('2017/08/30', function (event) { // Year - Month - Day
                var $this = $(this).html(event.strftime(''
                  + '<div class="col-countdown"><h1 class="text-size-xsmall">%d</h1> <h4 class="counter-text">days</h4></div>'
                  + '<div class="col-countdown"><h1 class="text-size-xsmall">%H</h1> <h4 class="counter-text">hr</h4></div>'
                  + '<div class="col-countdown"><h1 class="text-size-xsmall">%M</h1> <h4 class="counter-text">min</h4></div>'
                  + '<div class="col-countdown"><h1 class="text-size-xsmall">%S</h1> <h4 class="counter-text">sec</h4></div>'));
            });
        });

    </script>
    <!-- End: REQUIRED FOR THIS PAGE ONLY -->
 
</body>
</html>