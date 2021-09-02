<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My Account - Infinity Concierge</title>
    @include('styles')
</head>
<body>
@include('header')
<main>

    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
             data-bg-image="assets/images/breadcrumb/bg_10.jpg">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h1 class="page_title text-white mb-0">
                    My Account</h1>
            </div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Account</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="account_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-4 col-md-8 col-sm-10 col-xs-12">
                    <div class="account_tabs_menu clearfix" data-bg-color="#F2F2F2" data-aos="fade-up"
                         data-aos-delay="100"><h3 class="list_title mb_15">Account Details:</h3>
                        <ul class="ul_li_block nav" role="tablist">
                            <li><a class="active" data-toggle="tab" href="#admin_tab"><i class="fas fa-user"></i>
                                {{$user->getName()}}</a></li>
                            <li>
                                <a href="/logout">
                                    <i class="fas fa-sign-out-alt"></i> Log Out
                                    <img class="arrow" src="{{asset("assets/images/icons/icon_02.png")}}" alt="icon_not_found">
                                </a>
                            </li>
                            <li><a data-toggle="tab" href="#profile_tab"><i class="fas fa-address-book"></i> Booking
                                    Profiles</a></li>
                            <li><a data-toggle="tab" href="#history_tab"><i class="fas fa-file-alt"></i> Booking History</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-10 col-xs-12">
                    <div class="account_tab_content tab-content">
                        <div id="admin_tab" class="tab-pane active">
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="100"><h3
                                    class="list_title mb_30">Account:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Name:</span> {{$user->getName()}}</li>
                                    <li><span>E-mail:</span> {{$user->getEmail()}}
                                    </li>
                                    <li><span>Phone Number:</span> {{$user->getPhoneNumber()}}</li>
                                    <li><span>Country:</span> {{$user->getCountry()}}</li>
                                    <li><span>Address:</span> {{$user->getAddress()}}</li>
                                </ul>
                                <a class="text_btn text-uppercase" href="#!"><span>Change Account Information</span>
                                    <img src="{{asset("assets/images/icons/icon_02.png")}}" alt="icon_not_found"></a></div>
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="300"><h3
                                    class="list_title mb_30">Booking Profiles:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Profile ID:</span> 1234557jt</li>
                                    <li><span>Payment Method:</span> Visa Credit Card</li>
                                    <li><span>Phone Number:</span> {{$user->getPhoneNumber()}}</li>
                                </ul>
                            </div>
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="500"><h3
                                    class="list_title mb_30">Booking History:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Upcoming Reservations:</span> No Reservations Yet</li>
                                    <li><span>Past Rentals:</span> 0</li>
                                </ul>
                                <a class="text_btn text-uppercase" href="/book"><span>Book A Car</span> <img
                                        src="{{asset("assets/images/icons/icon_02.png")}}" alt="icon_not_found"></a></div>
                        </div>
                        <div id="profile_tab" class="tab-pane fade">
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="100"><h3
                                    class="list_title mb_30">Booking Profiles:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Profile ID:</span> 1234557jt</li>
                                    <li><span>Payment Method:</span> Visa Credit Card</li>
                                    <li><span>Phone Number:</span> {{$user->getPhoneNumber()}}</li>
                                </ul>
                            </div>
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="300"><h3
                                    class="list_title mb_30">Booking History:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Upcoming Reservations:</span> No Reservations Yet</li>
                                    <li><span>Past Rentals:</span> 0</li>
                                </ul>
                                <a class="text_btn text-uppercase" href="/book"><span>Book A Car</span> <img
                                        src="{{asset("assets/images/icons/icon_02.png")}}" alt="icon_not_found"></a></div>
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="500"><h3
                                    class="list_title mb_30">Account:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Name:</span> {{$user->getName()}}</li>
                                    <li><span>E-mail:</span> {{$user->getEmail()}} </li>
                                    <li><span>Phone Number:</span> {{$user->getPhoneNumber()}}</li>
                                    <li><span>Country:</span> {{$user->getCountry()}}</li>
                                    <li><span>Address:</span> {{$user->getAddress()}}</li>
                                </ul>
                                <a class="text_btn text-uppercase" href="#!"><span>Change Account Information</span>
                                    <img src="{{asset("assets/images/icons/icon_02.png")}}" alt="icon_not_found"></a></div>
                        </div>
                        <div id="history_tab" class="tab-pane fade">
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="100"><h3
                                    class="list_title mb_30">Booking History:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Upcoming Reservations:</span> No Reservations Yet</li>
                                    <li><span>Past Rentals:</span> 0</li>
                                </ul>
                                <a class="text_btn text-uppercase" href="/book"><span>Book A Car</span> <img
                                        src="{{asset("assets/images/icons/icon_02.png")}}" alt="icon_not_found"></a></div>
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="300"><h3
                                    class="list_title mb_30">Booking Profiles:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Profile ID:</span> 1234557jt</li>
                                    <li><span>Payment Method:</span> Visa Credit Card</li>
                                    <li><span>Phone Number:</span> {{$user->getPhoneNumber()}}</li>
                                </ul>
                            </div>
                            <div class="account_info_list" data-aos="fade-up" data-aos-delay="500"><h3
                                    class="list_title mb_30">Account:</h3>
                                <ul class="ul_li_block clearfix">
                                    <li><span>Name:</span> {{$user->getName()}}</li>
                                    <li><span>E-mail:</span> {{$user->getEmail()}}
                                    </li>
                                    <li><span>Phone Number:</span> {{$user->getPhoneNumber()}}</li>
                                    <li><span>Country:</span> {{$user->getCountry()}}</li>
                                    <li><span>Address:</span> {{$user->getAddress()}}</li>
                                </ul>
                                <a class="text_btn text-uppercase" href="#!"><span>Change Account Information</span>
                                    <img src="{{asset("assets/images/icons/icon_02.png")}}" alt="icon_not_found"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('footer')
</body>
</html>
