<div id="thetop"></div>
<div class="backtotop"><a href="#" class="scroll"><i class="far fa-arrow-up"></i></a></div>
<div class="preloader">
    <div class="animation_preloader">
        <div class="spinner"></div>
        <p class="text-center">Loading</p></div>
    <div class="loader">
        <div class="row vh-100">
            <div class="col-3 loader_section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader_section section-left">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader_section section-right">
                <div class="bg"></div>
            </div>
            <div class="col-3 loader_section section-right">
                <div class="bg"></div>
            </div>
        </div>
    </div>
</div>
<header class="header_section secondary_header sticky text-white clearfix">
    <div class="header_top clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <ul class="header_contact_info ul_li clearfix">
                        <li><i class="fal fa-envelope"></i>
                            yusuf_samsudeen@yahoo.com
                        </li>
                        <li><i class="fal fa-phone"></i> +971562708712</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <ul class="primary_social_links ul_li_right clearfix">
                        <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="brand_logo"><a href="/">
                            <img src="{{asset("assets/images/logo/logo_01_1x.png")}}" srcset="{{asset("assets/images/logo/logo_01_2x.png")}} 2x"
                                                                      alt="logo_not_found">
                            <img src="{{asset("assets/images/logo/logo_02_1x.png")}}" srcset="{{asset("assets/images/logo/logo_02_2x.png")}} 2x"
                                alt="logo_not_found"></a>
                    </div>
                </div>
                @auth()
                <div class="col-lg-9 col-md-6 col-sm-6 col-6 order-last">
                    <ul class="header_action_btns ul_li_right clearfix">

                        <li class="dropdown">
                            <button type="button" class="user_btn" id="user_dropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class="fal fa-user"></i></button>
                            <div class="user_dropdown rotors_dropdown dropdown-menu clearfix"
                                 aria-labelledby="user_dropdown">
                                <div class="profile_info clearfix"><a href="#!" class="user_thumbnail"><img
                                            src="{{asset("assets/images/meta/img_01.png")}}" alt="thumbnail_not_found"></a>
                                    <div class="user_content"><h4 class="user_name"><a href="#!">{{auth()->user()->name}}</a></h4>
                                    </div>
                                </div>
                                <ul class="ul_li_block clearfix">
                                    <li><a href="/account"><i class="fal fa-user-circle"></i> Profile</a></li>
                                    <li><a href="/logout"><i class="fal fa-sign-out"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                @endauth
            </div>
        </div>
    </div>
    <div id="collapse_search_body" class="collapse_search_body collapse">
        <div class="search_body">
            <div class="container">
                <form action="#">
                    <div class="form_item"><input type="search" name="search" placeholder="Type here...">
                        <button type="submit"><i class="fal fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>
