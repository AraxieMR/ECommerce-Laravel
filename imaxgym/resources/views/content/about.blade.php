@extends('master')
@section('main_content')

 <!--
    #################################
        - Begin: ABOUT US -
    #################################
    -->
    <section class="padding-top-large padding-bottom-small">
        <div class="container">
            <div class="row">
                <div class="col-md-4 padding-bottom-medium">
                    <img class="img-responsive" alt="About Us" src="{{asset('lib/iMax/assets/images/gym/about-us.jpg')}}">
                </div>
                <div class="col-md-8 padding-bottom-medium">
                    <h1 class="text-weight-800 text-size-xsmall">Come to Join Us</h1>
                    <hr>
                    <p class="lead text-black">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo</p>

                    <p class="margin-bottom-small">Lorem ipsum dolor sit amets consec tetuer adipiscing elit. Aenean commodo ligulia eget dolors. Aenean massa. Cum sociis natoque penatibus et magnis dis. ullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna. sed consequat leo eget sodales.</p>

                    <!-- Begin: WIDGET -->
                    <div class="widget">
                        <div class="panel-group accordion base" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true">
                                            <span class="icon-collapse"></span>
                                            etiam sit amet orci eget eros fabus
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna. sed consequat leo eget sodales. ntesque habitant morbi que senectus et netus et fames ac turpis egestas consequat leo eget sodales. ntesque habitant morbi que senectus et netus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                                            <span class="icon-collapse"></span>
                                            ntesque habitant morbi que senectus
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna. sed consequat leo eget sodales. ntesque habitant morbi que senectus et netus et fames ac turpis egestas consequat leo eget sodales. ntesque habitant morbi que senectus et netus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                                            <span class="icon-collapse"></span>
                                            duis leo sed fringilla mauris sit amet
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p>Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna. sed consequat leo eget sodales. ntesque habitant morbi que senectus et netus et fames ac turpis egestas consequat leo eget sodales. ntesque habitant morbi que senectus et netus.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End: WIDGET -->
                </div>
            </div>
        </div>
    </section>
    <!-- End: ABOUT US -
    ################################################################## -->
    <!--
    #################################
        - Begin: COACHES -
    #################################
    -->
    <section class="light-bg border-top-light padding-bottom-large">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-weight-800 text-size-xsmall text-center">Our Coaches</h1>
                    <p class="text-center margin-bottom-medium">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="team base box-shadow-hover text-center">
                        <div class="team-image">
                            <img src="{{asset('lib/iMax/assets/images/gym/team-1.jpg')}}" alt="Team" class="img-responsive">
                        </div>
                        <div class="team-designation">
                            <h2 class="team-name text-weight-700">Nicole Bell</h2>
                            <span><i>duis leo sed</i></span>
                            <ul class="social-icon">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="team base box-shadow-hover text-center">
                        <div class="team-image">
                            <img src="{{asset('lib/iMax/assets/images/gym/team-2.jpg')}}" alt="Team" class="img-responsive">
                        </div>
                        <div class="team-designation">
                            <h2 class="team-name text-weight-700">Josh Thompson</h2>
                            <span><i>mauris sit amet</i></span>
                            <ul class="social-icon">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="team base box-shadow-hover text-center">
                        <div class="team-image">
                            <img src="{{asset('lib/iMax/assets/images/gym/team-4.jpg')}}" alt="Team" class="img-responsive">
                        </div>
                        <div class="team-designation">
                            <h2 class="team-name text-weight-700">Josh Clark</h2>
                            <span><i>consequat leo</i></span>
                            <ul class="social-icon">
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: COACHES -
    ################################################################## -->
    
    <!--
    #################################
        - Begin: SCHEDULE -
    #################################
    -->
    <section class="padding-top-medium padding-bottom-medium">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-weight-800 text-size-xsmall text-center">GYM Schedule time</h1>
                    <p class="text-center margin-bottom-medium">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet donec sodales sagittis magna.<br>sed consequat leo eget sodales. ntesque habitant morbi que senectus.</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="text-uppercase dark-bg text-white">
                            <th>&nbsp;</th>
                            <th class="text-center"><h2 class="text-weight-700">Monday</h2></th>
                            <th class="text-center"><h2 class="text-weight-700">Tuesday</h2></th>
                            <th class="text-center"><h2 class="text-weight-700">Wednesday</h2></th>
                            <th class="text-center"><h2 class="text-weight-700">Thursday</h2></th>
                            <th class="text-center"><h2 class="text-weight-700">Friday</h2></th>
                            <th class="text-center"><h2 class="text-weight-700">Saturday</h2></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">09:30</h4></th>
                            <td class="text-center base-bg"><h4>Fitness Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Personal Training</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">10:00</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Yoga Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">10:30</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Personal Training</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Group Class</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">11:00</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Group Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">11:30</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Fitness Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Yoga Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">12:00</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Group Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">12:30</h4></th>
                            <td class="text-center base-bg"><h4>Group Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Yoga Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">01:00</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Personal Training</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">01:30</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Group Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Group Class</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">02:00</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Personal Training</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                        <tr>
                            <th scope="row" class="dark-bg text-white text-center"><h4 class="text-weight-700">02:30</h4></th>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center base-bg"><h4>Group Class</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                            <td class="text-center light-bg"><h4>&nbsp;</h4></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- End: SCHEDULE -
    ################################################################## -->

    <!--
    #################################
        - Begin: TESTIMONIALS -
    #################################
    -->
    <section class="parallax text-white">
        <div class="parallax_child img-gym-1"></div>
        <div class="container position-relative z-index-2">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="text-weight-800 text-size-xsmall text-center margin-bottom-medium">Testimonials</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials owl-carousel">
                        <div class="item">
                            <div class="testimonial text-center">
                                <div class="testimonial-img"><img class="" alt="Testimonial" src="{{asset('lib/iMax/assets/images/testimonial/testimonial-1.png')}}"></div>
                                <p class="testimonial-text">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet.<br>etiam sit amet orci eget sed fringilla mauris quis ante etiam</p>
                                <div class="separator light"><i class="short-line"></i><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i><span class="short-line"></span></div>
                                <p class="testimonial-name">Herman Miller</p>
                                <p class="testimonial-designation">General Manager</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial text-center">
                                <div class="testimonial-img"><img class="" alt="Testimonial" src="{{asset('lib/iMax/assets/images/testimonial/testimonial-2.png')}}"></div>
                                <p class="testimonial-text">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet.<br>etiam sit amet orci eget sed fringilla mauris quis ante etiam</p>
                                <div class="separator light"><i class="short-line"></i><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i><span class="short-line"></span></div>
                                <p class="testimonial-name">Adele Maitland</p>
                                <p class="testimonial-designation">Visual Designer</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial text-center">
                                <div class="testimonial-img"><img class="" alt="Testimonial" src="{{asset('lib/iMax/assets/images/testimonial/testimonial-3.png')}}"></div>
                                <p class="testimonial-text">Nullam quis ante etiam sit amet orci eget eros fabus tincidunt duis leo sed fringilla mauris sit amet.<br>etiam sit amet orci eget sed fringilla mauris quis ante etiam</p>
                                <div class="separator light"><i class="short-line"></i><i class="fa fa-circle-o"></i><i class="fa fa-circle"></i><i class="fa fa-circle-o"></i><span class="short-line"></span></div>
                                <p class="testimonial-name">John Davis</p>
                                <p class="testimonial-designation">Marketing Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay dark-8"></div>
    </section>
    <!-- End: TESTIMONIALS -
    ################################################################## -->

@endsection
