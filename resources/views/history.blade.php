<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>History - Infinity Conceirge</title>
    @include('styles')
</head>
<body>
@include('header')
<main>
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
             data-bg-image="assets/images/breadcrumb/bg_11.jpg">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100"><h1 class="page_title text-white mb-0">
                    Reservation History</h1></div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Reservation History</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="cart_section sec_ptb_100 clearfix">
        <div class="container">
            @foreach($histories as $history)
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-4 col-md-9 col-sm-10 col-xs-12">
                    <div class="feature_vehicle_item mt-0 ml-0" data-aos="fade-up" data-aos-delay="100"><h3
                            class="item_title mb-0"><a href="#!">{{$history->getVehicle()->getTitle()}}</a></h3>
                        <div class="item_image position-relative"><a class="image_wrap" href="#!"><img
                                    src="{{asset($history->getVehicle()->getImage())}}" alt="image_not_found"> </a><span
                                class="item_price bg_default_blue">AED {{$history->getVehicle()->getPrice()}}/Day</span></div>
                        <ul class="info_list ul_li_center clearfix">
                            <li>{{$history->getVehicle()->getType()}}</li>
                            <li>{{$history->getVehicle()->getTransmission()}}</li>
                            <li>{{$history->getVehicle()->getPassengers()}} Passengers</li>
                            <li>{{$history->getVehicle()->getFuel()}}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-9 col-sm-10 col-xs-12">
                    <div class="cart_info_content">
                        <div class="row mt__30">
                            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                                <div class="cart_address_item" data-aos="fade-up" data-aos-delay="100"><h4>Pick Up
                                        Location:</h4>
                                    <p class="mb-0">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{$history->getPickUpLocation()}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="cart_address_item" data-aos="fade-up" data-aos-delay="200"><h4>Pick Up
                                        Date:</h4>
                                    <p class="mb-0"><i class="fas fa-calendar-alt"></i> {{$history->getPickUpDate()}}  </p></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <div class="cart_address_item" data-aos="fade-up" data-aos-delay="300"><h4>Pick Up Time:</h4>
                                    <p class="mb-0"><i class="fas fa-clock"></i> {{$history->getPickUpTime()}}  </p></div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                                <div class="cart_address_item" data-aos="fade-up" data-aos-delay="400"><h4>Return Car
                                        Location:</h4>
                                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i>
                                        {{$history->getDropOffLocation()}}
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="cart_address_item" data-aos="fade-up" data-aos-delay="500"><h4>Return
                                        Date:</h4>
                                    <p class="mb-0"><i class="fas fa-calendar-alt"></i> {{$history->getDropOffDate()}}  </p></div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                                <div class="cart_address_item" data-aos="fade-up" data-aos-delay="600"><h4>Time:</h4>
                                    <p class="mb-0"><i class="fas fa-clock"></i> {{$history->getDropOffTime()}}</p></div>
                            </div>
                        </div>

                        <hr data-aos="fade-up" data-aos-delay="100">
                        <ul class="cart_info_list2 ul_li_block clearfix" data-aos="fade-up" data-aos-delay="100">
                            <li><strong>Car rental duration:</strong> {{daysDiff($history->getPickUpDate(), $history->getDropOffDate())}} days</li>
                            <li><strong>Rental Price:</strong> {{$history->getVehicle()->getPrice()}}/day</li>
                            <li><strong>Subtotal:</strong> AED{{total($history->getPickUpDate(), $history->getDropOffDate(), $history->getVehicle()->getPrice())}}</li>
                        </ul>
                        <hr data-aos="fade-up" data-aos-delay="100">


                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</main>
@include('footer')
</body>
</html>
