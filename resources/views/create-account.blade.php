<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Create Account - Infinity Concierge</title>
    @include("styles")
</head>
<body>
@include("header")
<main>
    <div class="sidebar-menu-wrapper">
        <div class="mobile_sidebar_menu">
            <button type="button" class="close_btn"><i class="fal fa-times"></i></button>
            <div class="about_content mb_60">
                <div class="brand_logo mb_15"><a href="index.html"><img src="assets/images/logo/logo_01_1x.png"
                                                                        srcset="assets/images/logo/logo_01_2x.png 2x"
                                                                        alt="logo_not_found"></a></div>
                <p class="mb-0">Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque tincidunt, elit a
                    facilisis efficitur, nunc nisi scelerisque enim, rhoncus malesuada est velit a nulla. Cras porta mi
                    vitae dolor tristique euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
            <div class="menu_list mb_60 clearfix"><h3 class="title_text text-white">Menu List</h3>
                <ul class="ul_li_block clearfix">
                    <li class="active dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                                   aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index_1.html">Home Page V.1</a></li>
                            <li><a href="index_2.html">Home Page V.2</a></li>
                        </ul>
                    </li>
                    <li><a href="gallery.html">Our Cars</a></li>
                    <li><a href="review.html">Reviews</a></li>
                    <li><a href="about.html">About</a></li>
                    <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="service.html">Our Service</a></li>
                            <li><a href="gallery.html">Car Gallery</a></li>
                            <li><a href="account.html">My Account</a></li>
                            <li><a href="reservation.html">Reservation</a></li>
                            <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Blogs</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog_details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">Our Cars</a>
                                <ul class="dropdown-menu">
                                    <li><a href="car.html">Cars</a></li>
                                    <li><a href="car_details.html">Car Details</a></li>
                                </ul>
                            </li>
                            <li><a href="cart.html">Shopping Cart</a></li>
                            <li><a href="faq.html">F.A.Q.</a></li>
                            <li><a href="login.html">Login</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#!" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact
                            Us</a>
                        <ul class="dropdown-menu">
                            <li><a href="contact.html">Contact Default</a></li>
                            <li><a href="contact_wordwide.html">Contact Wordwide</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="booking_car_form"><h3 class="title_text text-white mb-2">Book A Car</h3>
                <p class="mb_15">Nullam id dolor auctor, dignissim magna eu, mattis ante. Pellentesque tincidunt, elit a
                    facilisis efficitur.</p>
                <form action="#">
                    <div class="form_item"><h4 class="input_title text-white">Pick Up Location</h4>
                        <div class="position-relative"><input id="location_one" type="text" name="location"
                                                              placeholder="City, State or Airport Code"> <label
                                for="location_one" class="input_icon"><i class="fas fa-map-marker-alt"></i></label>
                        </div>
                    </div>
                    <div class="form_item"><h4 class="input_title text-white">Pick A Date</h4><input type="date"
                                                                                                     name="date"></div>
                    <button type="submit" class="custom_btn bg_default_red btn_width text-uppercase">Book A Car <img
                            src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                </form>
            </div>
        </div>
        <div class="overlay"></div>
    </div>
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
             data-bg-image="assets/images/breadcrumb/bg_09.jpg">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100"><h1 class="page_title text-white mb-0">
                    Create Account</h1></div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Create Account</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="register_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="register_card mb-0" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100">
                <div class="section_title mb_30 text-center"><h2 class="title_text mb-0" data-aos="fade-up"
                                                                 data-aos-delay="300"><span>Register</span></h2></div>
                @include("messages")
                {!! Form::open(['url' => 'create-account']) !!}
                <div class="row justify-content-lg-between">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="500">
                        <div class="form_item"><input type="text" name="name" placeholder="Your Name*"></div>
                        <div class="form_item"><input type="email" name="email" placeholder="Your Email*"></div>
                        <div class="form_item"><input type="password" name="password" placeholder="Password*"></div>
                        <div class="form_item"><input type="password" name="confirmpass"
                                                      placeholder="Confirm Password*"></div>
                        <div class="form_item"><input type="tel" name="phone_number" placeholder="Phone Number*"></div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="700">

                        <div class="form_item"><input type="text" name="country" placeholder="Country*"></div>
                        <div class="form_item"><input type="text" name="address" placeholder="Billing Address*">
                        </div>
                        <p>Your personal data will be used in mapping with the vehicles you added to the website, to
                            manage access to your account, and for other purposes described in our</p>
                        <button type="submit" class="custom_btn bg_default_blue text-uppercase mb-0">Create Account<img
                                src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </section>
</main>
@include("footer")

</body>
</html>
