<?php 
$title= 'iMAXGYM | page 404';
$menu= App\Models\Menu::all()->toArray();
$errors=[];
?>
@extends('master')
@section('content')
 <!--
    #################################
        - Begin: ERROR 404 -
    #################################
    -->
    <section class="fullscreen">
        <div class="vertical-content">
            <div class="fullscreen-setting vertical-content-setting">
                <div class="container padding-top-medium padding-bottom-medium">
                    <div class="row text-center">
                        <div class="col-md-12">
                            <h1 class="error-404 text-weight-700 text-uppercase text-size-xlarge">404</h1>
                            <p class="margin-top-small margin-bottom-small">sorry the page you were looking for can not be found<br>You can go back to</p>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                    <div aria-label="Justified button group" role="group" class="btn-group btn-group-justified">
                                        <a class="btn btn-default btn-lg btn-block text-weight-700 text-uppercase box-shadow-active" href="{{ url('')  }}"><i class="fa fa-arrow-left"></i> Go Home</a>
                                        <a class="btn btn-base btn-lg btn-block text-weight-700 text-uppercase" href="{{ url('shop')  }}"><i class="fa fa-shopping-bag"></i> Buy iMaxGym</a>
                                    </div>
                                   </div>
                                <div class="col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: ERROR 404 -
    ################################################################## -->
@endsection
