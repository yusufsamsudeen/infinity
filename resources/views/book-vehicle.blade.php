<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book A Ride - Infinity Concierge</title>
    @include("styles")
</head>
<body>
@include("header")
<main>

    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
             data-bg-image="{{asset("assets/images/breadcrumb/bg_09.jpg")}}">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100"><h1 class="page_title text-white mb-0">
                    Book A Ride</h1></div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Book A Ride</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="register_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="register_card mb-0" data-bg-color="##81D8D0" data-aos="fade-up" data-aos-delay="100">
                <div class="section_title mb_30 text-center">
                    <h2 class="title_text mb-0" data-aos="fade-up" data-aos-delay="300">
                        <span>Book A Ride</span>
                    </h2>

                    <h3>{{$vehicle->getTitle()}}</h3>
                </div>
                @include("messages")
                {{Form::open(['url' => 'book-vehicle'])}}
                    <div class="row">
                        <input type="hidden" name="vehicle_id" value="{{$vehicle->getId()}}">
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                <h4 class="input_title text-white">Pick Up Location</h4>
                                <div class="position-relative">
                                    <input id="location_two" type="text" name="pick_up_location" placeholder="City, State or Airport Code">
                                    <label for="location_two" class="input_icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item" data-aos="fade-up" data-aos-delay="300">
                                <h4 class="input_title text-white">Pick Up Date</h4>
                                <input type="date" name="pick_up_date">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item" data-aos="fade-up" data-aos-delay="500">
                                <h4 class="input_title text-white">Pick Up Time</h4>
                                <input type="time" name="pick_up_date">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item" data-aos="fade-up" data-aos-delay="100">
                                <h4 class="input_title text-white">Return car to a different location</h4>
                                <div class="position-relative">
                                    <input id="location_three" type="text" name="drop_off_location" placeholder="City, State or Airport Code">
                                    <label for="location_three" class="input_icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item" data-aos="fade-up" data-aos-delay="300">
                                <h4 class="input_title text-white">Return Date</h4>
                                <input type="date" name="drop_off_date">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                            <div class="form_item" data-aos="fade-up" data-aos-delay="500">
                                <h4 class="input_title text-white">Time</h4>
                                <input type="time" name="drop_off_time">
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-12 text-right">
                            <button type="submit" class="custom_btn bg_default_black text-uppercase mb-0">Book Ride<img
                                    src="{{asset("assets/images/icons/icon_01.png")}}" alt="icon_not_found"></button>
                        </div>
                    </div>

                {{Form::close()}}
            </div>
        </div>
    </section>
</main>
@include("footer")

</body>
</html>
