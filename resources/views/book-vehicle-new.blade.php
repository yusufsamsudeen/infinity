<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Reservation - Infinity Conceirge</title>
    @include('styles')
</head>
<body>
@include('header')
<main>

    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
             data-bg-image="{{asset("assets/images/breadcrumb/bg_03.jpg")}}">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100"><h1 class="page_title text-white mb-0">
                    Reservation</h1></div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="/">Home</a></li>
                    <li><a href="#">Our Cars</a></li>
                    <li>Reservation</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="reservation_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
                    <div class="feature_vehicle_item mt-0 ml-0" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="item_title mb-0"><a href="#!">{{$vehicle->getTitle()}}</a></h3>
                        <div class="item_image position-relative"><a class="image_wrap" href="#!"><img
                                    src="{{asset($vehicle->getImage())}}" alt="image_not_found"> </a><span
                                class="item_price bg_default_blue">$230/Day</span></div>
                        <ul class="info_list ul_li_center clearfix">
                            <li>{{$vehicle->getType()}}</li>
                            <li>{{$vehicle->getTransmission()}}</li>
                            <li>{{$vehicle->getPassengers()}} Passengers</li>
                            <li>{{$vehicle->getFuel()}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="reservation_form">
                        {{Form::open(['url' => 'book-vehicle'])}}
                        @include("messages")
                        <div class="row">
                                <input type="hidden" name="vehicle_id" value="{{$vehicle->getId()}}">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                        <h4 class="input_title">Pick Up Location</h4>
                                        <div class="position-relative">
                                            <input id="location_two" required type="text" name="pick_up_location" placeholder="City, State or Airport Code">
                                            <label for="location_two" class="input_icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="300">
                                        <h4 class="input_title">Pick Up Date</h4>
                                        <input type="date" required name="pick_up_date">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="500">
                                        <h4 class="input_title">Pick Up Time</h4>
                                        <input type="time" required name="pick_up_date">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                        <h4 class="input_title">Drop Off location</h4>
                                        <div class="position-relative">
                                            <input id="location_three" type="text" required name="drop_off_location" placeholder="City, State or Airport Code">
                                            <label for="location_three" class="input_icon">
                                                <i class="fas fa-map-marker-alt"></i>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="300">
                                        <h4 class="input_title">Drop off Date</h4>
                                        <input type="date" required name="drop_off_date">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                                    <div class="form_item" data-aos="fade-up" data-aos-delay="500">
                                        <h4 class="input_title">Drop Off Time</h4>
                                        <input type="time" required name="drop_off_time">
                                    </div>
                                </div>

                            </div>

                            <hr class="mt-0" data-aos="fade-up" data-aos-delay="100">

                                <div class="row align-items-center justify-content-lg-between">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">

                                        <div class="checkbox_input mb-0">
                                            <label for="accept">
                                                <input type="checkbox" required id="accept">
                                                I accept all information and Payments etc
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" data-aos="fade-up"
                                         data-aos-delay="300">
                                        <button type="submit" class="custom_btn bg_default_blue text-uppercase">
                                            Reserve Now
                                            <img src="{{asset("assets/images/icons/icon_01.png")}}" alt="icon_not_found">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('footer')
</body>
</html>
