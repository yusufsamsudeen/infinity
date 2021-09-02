<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Ride - Infinity Concierge</title>
    @include('styles')
    <link href="assets/js/sweet-alert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
</head>
<body>
@include('header')
<main>
    <div class="sidebar-menu-wrapper">

        <div class="overlay"></div>
    </div>
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
             data-bg-image="assets/images/breadcrumb/bg_13.jpg">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100"><h1 class="page_title text-white mb-0">
                    Gallery</h1></div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Pages</li>
                    <li>Gallery</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="gallery_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10 col-xs-12">
                    <div class="section_title mb_60 text-center" data-aos="fade-up" data-aos-delay="100"><h2
                            class="title_text mb_15"><span>Featured Vehicles</span></h2>

                    </div>
                </div>
            </div>
            <ul class="button-group filters-button-group ul_li_center mb_30 clearfix" data-aos="fade-up"
                data-aos-delay="300">
                <li>
                    <button class="button active" data-filter="*">All</button>
                </li>
                <li>
                    <button class="button" data-filter=".sedan">Sedan</button>
                </li>
                <li>
                    <button class="button" data-filter=".sports">Sports</button>
                </li>
                <li>
                    <button class="button" data-filter=".luxury">Luxury</button>
                </li>
            </ul>
            <div class="feature_vehicle_filter mb-0 element-grid clearfix">
                @foreach($vehicles as $vehicle)

                <div class="element-item {{strtolower($vehicle->getType())}}" data-category="sedan">
                    <div class="feature_vehicle_item" data-aos="fade-up" data-aos-delay="100"><h3
                            class="item_title mb-0"><a href="#!" data-id="{{$vehicle->getId()}}" data-available="{{$vehicle->getAvailable()}}" class="book">{{$vehicle->getTitle()}}</a></h3>
                        <div class="item_image position-relative"><a class="image_wrap" href="#!"><img
                                    src="{{$vehicle->getImage()}}" alt="image_not_found"> </a><span
                                class="item_price bg_default_blue">AED {{$vehicle->getPrice()}}/Day</span></div>
                        <ul class="info_list ul_li_center clearfix">
                            <li>{{$vehicle->getType()}}</li>
                            <li>{{$vehicle->getTransmission()}}</li>
                            <li>{{$vehicle->getPassengers()}} Passengers</li>
                            <li>{{$vehicle->getFuel()}}</li>
                        </ul>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </section>
</main>

@include('footer')
<script src="assets/js/sweet-alert2/sweetalert2.min.js"></script>
<script src="assets/js/jquery.sweet-alert.init.js"></script>
<script>
    $(function (){
        $(".book").click(function (){
            const available = $(this).attr("data-available") == 1 ? true: false;
            if (available){
                const id = $(this).attr("data-id")
                window.location.href = 'book/'+id;
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Booking Service',
                    text: 'Sorry this vehicle is not available',
                    confirmButtonText: 'Ok'
                })
            }

        })
    })
</script>
</body>
</html>
