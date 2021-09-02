<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - Infinity Concierge</title>
    @include("styles")
</head>
<body>
@include("header")
<main>
    <section class="breadcrumb_section text-center clearfix">
        <div class="page_title_area has_overlay d-flex align-items-center clearfix"
             data-bg-image="assets/images/breadcrumb/bg_09.jpg">
            <div class="overlay"></div>
            <div class="container" data-aos="fade-up" data-aos-delay="100"><h1 class="page_title text-white mb-0">
                    Login</h1></div>
        </div>
        <div class="breadcrumb_nav clearfix" data-bg-color="#F2F2F2">
            <div class="container">
                <ul class="ul_li clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="register_section sec_ptb_100 clearfix">
        <div class="container">
            <div class="register_card mb_60" data-bg-color="##F2F2F2" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="reg_image" data-aos="fade-up" data-aos-delay="300"><img
                                src="assets/images/about/img_03.jpg" alt="image_not_found"></div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="reg_form" data-aos="fade-up" data-aos-delay="500"><h3 class="form_title">LogIn:</h3>
                            <p>Savings of up to 15% with our car rental solutions, global coverage and a dedicated
                                customer team</p><span class="new_account mb_15">Log In or <a href="create-account">Create an Account?</a></span>
                            {!! Form::open(['url' => 'login']) !!}
                                <div class="form_item"><input type="email" name="email" placeholder="Your email"></div>
                                <div class="form_item"><input type="password" name="password" placeholder="Password">
                                </div>
                                <button type="submit" class="custom_btn bg_default_blue text-uppercase">Login <img
                                        src="assets/images/icons/icon_01.png" alt="icon_not_found"></button>
                                <span class="reset_pass mb_15"><a href="#!">Reset Your Password by e-mail?</a></span>
                                <div class="checkbox_input mb-0"><label for="input_save"><input id="input_save"
                                                                                                type="checkbox"> Save my
                                        name, email, and website in this browser for the next time I comment</label>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include("footer")

</body>
</html>
