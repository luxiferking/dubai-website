<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">

    <link href="assets/css/bootstrap-icons.css" rel="stylesheet">

    <link href="assets/css/all.min.css" rel="stylesheet">

    <link href="assets/css/animate.min.css" rel="stylesheet">

    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">

    <link href="assets/css/fontawesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/daterangepicker.css">

    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">

    <link href="assets/css/boxicons.min.css" rel="stylesheet">

    <link href="assets/css/select2.css" rel="stylesheet">
    <link href="assets/css/nice-select.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Xpress Tourism - Tour & Travel Agency HTML Template</title>
    <link rel="icon" href="assets/img/sm-logo.svg" type="image/gif" sizes="20x20">
</head>

<body>




    <div class="modal login-modal" id="user-login" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-clode-btn" data-bs-dismiss="modal"></div>
                <div class="modal-header">
                    <img src="assets/img/home1/login-modal-header-img.jpg" alt>
                </div>
                <div class="modal-body">
                    <div class="login-registration-form">
                        <div class="form-title">
                            <h2>Sign in to continue</h2>
                            <p>Enter your email address for Login.</p>
                        </div>
                        <form>
                            <div class="form-inner mb-20">
                                <input type="text" placeholder="User name or Email *">
                            </div>
                            <a href="#" class="login-btn mb-25">Sign In</a>
                            <div class="divider">
                                <span>or</span>
                            </div>
                            <a href="#" class="google-login-btn">
                                <div class="icon">
                                    <img src="assets/img/home1/icon/google-icon.svg" alt>
                                </div>
                                Sign in with Google
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-bar style-2">
        <div class="topbar-left two">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
                    <g>
                        <path
                            d="M9.84497 19.8136V25.0313C9.84583 25.2087 9.90247 25.3812 10.0069 25.5246C10.1112 25.6679 10.2581 25.7748 10.4266 25.8301C10.5951 25.8853 10.7767 25.8861 10.9457 25.8324C11.1147 25.7787 11.2625 25.6732 11.3682 25.5308L14.4203 21.3773L9.84497 19.8136ZM26.6468 0.156459C26.5201 0.0661815 26.3708 0.0127263 26.2155 0.00200482C26.0603 -0.00871662 25.9051 0.0237135 25.7671 0.0957086L0.454599 13.3145C0.308959 13.3914 0.188959 13.5092 0.109326 13.6535C0.0296936 13.7977 -0.00610776 13.962 0.00631628 14.1262C0.0187403 14.2905 0.0788492 14.4475 0.179266 14.5781C0.279683 14.7087 0.416039 14.8071 0.571599 14.8613L7.60847 17.2666L22.5946 4.45283L10.9981 18.4242L22.7915 22.4551C22.9085 22.4944 23.0327 22.5077 23.1554 22.4939C23.2781 22.4802 23.3963 22.4399 23.5017 22.3757C23.6072 22.3115 23.6973 22.225 23.7659 22.1223C23.8344 22.0196 23.8797 21.9032 23.8985 21.7812L26.9922 0.968709C27.0151 0.81464 26.995 0.657239 26.934 0.513898C26.8731 0.370556 26.7737 0.246854 26.6468 0.156459Z" />
                    </g>
                </svg>
            </div>
            <div class="content">
                <span>Email:</span>
                <a href="mailto:xpresstourism24@gmail.com">xpresstourism24@gmail.com</a>
            </div>
        </div>
        <p>Xpress Tourism For Life Time Experience </p>
        <div class="topbar-right">
            <div class="social-icon-area">
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a></li>
                    <li><a href="https://twitter.com/"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10"
                                fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                                <path
                                    d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z" />
                            </svg></a></li>
                    <li><a href="https://www.linkedin.com/"><i class="bx bxl-pinterest-alt"></i></a></li>
                    <li><a href="https://www.instagram.com/"><i class="bx bxl-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- header start -->

    <?php 
    Include("./include/header.php");
    ?>


    <!-- header ends -->


    <!-- Banner crousel start -->
    <div class="home1-banner-area">
        <div class="container-fluid">
            <div class="swiper home1-banner-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="home1-banner-wrapper"
                            style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home1/home1-banner-img1.webp);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home1-banner-content">
                                            <div class="eg-tag">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M12.005 11.8928C13.9204 8.88722 13.6796 9.2622 13.7348 9.18383C14.4322 8.20023 14.8008 7.04257 14.8008 5.83594C14.8008 2.63602 12.2041 0 9 0C5.80634 0 3.19922 2.63081 3.19922 5.83594C3.19922 7.0418 3.57553 8.22976 4.29574 9.22662L5.99491 11.8929C4.17822 12.172 1.08984 13.004 1.08984 14.8359C1.08984 15.5037 1.52571 16.4554 3.60218 17.197C5.05209 17.7148 6.96906 18 9 18C12.7978 18 16.9102 16.9287 16.9102 14.8359C16.9102 13.0037 13.8254 12.1726 12.005 11.8928ZM5.17672 8.6465C5.17093 8.63744 5.16487 8.62856 5.15855 8.61985C4.55924 7.79537 4.25391 6.81824 4.25391 5.83594C4.25391 3.19859 6.37755 1.05469 9 1.05469C11.617 1.05469 13.7461 3.19954 13.7461 5.83594C13.7461 6.81982 13.4465 7.7638 12.8796 8.56656C12.8288 8.63357 13.0939 8.22182 9 14.6457L5.17672 8.6465ZM9 16.9453C4.85177 16.9453 2.14453 15.726 2.14453 14.8359C2.14453 14.2377 3.53559 13.2541 6.61809 12.8707L8.55527 15.9104C8.60291 15.9852 8.66863 16.0467 8.74636 16.0893C8.82408 16.132 8.91131 16.1543 8.99996 16.1543C9.08862 16.1543 9.17584 16.132 9.25357 16.0893C9.3313 16.0467 9.39702 15.9852 9.44466 15.9104L11.3818 12.8707C14.4644 13.2541 15.8555 14.2377 15.8555 14.8359C15.8555 15.7184 13.1726 16.9453 9 16.9453Z" />
                                                        <path
                                                            d="M9 3.19922C7.54611 3.19922 6.36328 4.38205 6.36328 5.83594C6.36328 7.28982 7.54611 8.47266 9 8.47266C10.4539 8.47266 11.6367 7.28982 11.6367 5.83594C11.6367 4.38205 10.4539 3.19922 9 3.19922ZM9 7.41797C8.12767 7.41797 7.41797 6.70827 7.41797 5.83594C7.41797 4.96361 8.12767 4.25391 9 4.25391C9.87233 4.25391 10.582 4.96361 10.582 5.83594C10.582 6.70827 9.87233 7.41797 9 7.41797Z" />
                                                    </svg>
                                                    Dubai
                                                </span>
                                            </div>
                                            <h1>Let's Travel And Explore Destination.</h1>
                                            <p>Life is unpredictable, and we understand that plans might change. Enjoy
                                                flexible booking options, so you can reschedule or modify your trip with
                                                ease.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home1-banner-wrapper"
                            style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home1/home1-banner-img2.webp);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home1-banner-content">
                                            <div class="eg-tag">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M12.005 11.8928C13.9204 8.88722 13.6796 9.2622 13.7348 9.18383C14.4322 8.20023 14.8008 7.04257 14.8008 5.83594C14.8008 2.63602 12.2041 0 9 0C5.80634 0 3.19922 2.63081 3.19922 5.83594C3.19922 7.0418 3.57553 8.22976 4.29574 9.22662L5.99491 11.8929C4.17822 12.172 1.08984 13.004 1.08984 14.8359C1.08984 15.5037 1.52571 16.4554 3.60218 17.197C5.05209 17.7148 6.96906 18 9 18C12.7978 18 16.9102 16.9287 16.9102 14.8359C16.9102 13.0037 13.8254 12.1726 12.005 11.8928ZM5.17672 8.6465C5.17093 8.63744 5.16487 8.62856 5.15855 8.61985C4.55924 7.79537 4.25391 6.81824 4.25391 5.83594C4.25391 3.19859 6.37755 1.05469 9 1.05469C11.617 1.05469 13.7461 3.19954 13.7461 5.83594C13.7461 6.81982 13.4465 7.7638 12.8796 8.56656C12.8288 8.63357 13.0939 8.22182 9 14.6457L5.17672 8.6465ZM9 16.9453C4.85177 16.9453 2.14453 15.726 2.14453 14.8359C2.14453 14.2377 3.53559 13.2541 6.61809 12.8707L8.55527 15.9104C8.60291 15.9852 8.66863 16.0467 8.74636 16.0893C8.82408 16.132 8.91131 16.1543 8.99996 16.1543C9.08862 16.1543 9.17584 16.132 9.25357 16.0893C9.3313 16.0467 9.39702 15.9852 9.44466 15.9104L11.3818 12.8707C14.4644 13.2541 15.8555 14.2377 15.8555 14.8359C15.8555 15.7184 13.1726 16.9453 9 16.9453Z" />
                                                        <path
                                                            d="M9 3.19922C7.54611 3.19922 6.36328 4.38205 6.36328 5.83594C6.36328 7.28982 7.54611 8.47266 9 8.47266C10.4539 8.47266 11.6367 7.28982 11.6367 5.83594C11.6367 4.38205 10.4539 3.19922 9 3.19922ZM9 7.41797C8.12767 7.41797 7.41797 6.70827 7.41797 5.83594C7.41797 4.96361 8.12767 4.25391 9 4.25391C9.87233 4.25391 10.582 4.96361 10.582 5.83594C10.582 6.70827 9.87233 7.41797 9 7.41797Z" />
                                                    </svg>
                                                    Dubai
                                                </span>
                                            </div>
                                            <h2>Let’s Explore Your Holiday Trip.</h2>
                                            <p>Life is unpredictable, and we understand that plans might change. Enjoy
                                                flexible booking options, so you can reschedule or modify your trip with
                                                ease.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home1-banner-wrapper"
                            style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home1/home1-banner-img3.webp);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home1-banner-content">
                                            <div class="eg-tag">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M12.005 11.8928C13.9204 8.88722 13.6796 9.2622 13.7348 9.18383C14.4322 8.20023 14.8008 7.04257 14.8008 5.83594C14.8008 2.63602 12.2041 0 9 0C5.80634 0 3.19922 2.63081 3.19922 5.83594C3.19922 7.0418 3.57553 8.22976 4.29574 9.22662L5.99491 11.8929C4.17822 12.172 1.08984 13.004 1.08984 14.8359C1.08984 15.5037 1.52571 16.4554 3.60218 17.197C5.05209 17.7148 6.96906 18 9 18C12.7978 18 16.9102 16.9287 16.9102 14.8359C16.9102 13.0037 13.8254 12.1726 12.005 11.8928ZM5.17672 8.6465C5.17093 8.63744 5.16487 8.62856 5.15855 8.61985C4.55924 7.79537 4.25391 6.81824 4.25391 5.83594C4.25391 3.19859 6.37755 1.05469 9 1.05469C11.617 1.05469 13.7461 3.19954 13.7461 5.83594C13.7461 6.81982 13.4465 7.7638 12.8796 8.56656C12.8288 8.63357 13.0939 8.22182 9 14.6457L5.17672 8.6465ZM9 16.9453C4.85177 16.9453 2.14453 15.726 2.14453 14.8359C2.14453 14.2377 3.53559 13.2541 6.61809 12.8707L8.55527 15.9104C8.60291 15.9852 8.66863 16.0467 8.74636 16.0893C8.82408 16.132 8.91131 16.1543 8.99996 16.1543C9.08862 16.1543 9.17584 16.132 9.25357 16.0893C9.3313 16.0467 9.39702 15.9852 9.44466 15.9104L11.3818 12.8707C14.4644 13.2541 15.8555 14.2377 15.8555 14.8359C15.8555 15.7184 13.1726 16.9453 9 16.9453Z" />
                                                        <path
                                                            d="M9 3.19922C7.54611 3.19922 6.36328 4.38205 6.36328 5.83594C6.36328 7.28982 7.54611 8.47266 9 8.47266C10.4539 8.47266 11.6367 7.28982 11.6367 5.83594C11.6367 4.38205 10.4539 3.19922 9 3.19922ZM9 7.41797C8.12767 7.41797 7.41797 6.70827 7.41797 5.83594C7.41797 4.96361 8.12767 4.25391 9 4.25391C9.87233 4.25391 10.582 4.96361 10.582 5.83594C10.582 6.70827 9.87233 7.41797 9 7.41797Z" />
                                                    </svg>
                                                    Dubai
                                                </span>
                                            </div>
                                            <h2>Let's journey and discover a place.</h2>
                                            <p>Life is unpredictable, and we understand that plans might change. Enjoy
                                                flexible booking options, so you can reschedule or modify your trip with
                                                ease.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="home1-banner-wrapper"
                            style="background-image: linear-gradient(180deg, rgba(16, 12, 8, 0.4) 0%, rgba(16, 12, 8, 0.4) 100%), url(assets/img/home1/home1-banner-img4.webp);">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="home1-banner-content">
                                            <div class="eg-tag">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M12.005 11.8928C13.9204 8.88722 13.6796 9.2622 13.7348 9.18383C14.4322 8.20023 14.8008 7.04257 14.8008 5.83594C14.8008 2.63602 12.2041 0 9 0C5.80634 0 3.19922 2.63081 3.19922 5.83594C3.19922 7.0418 3.57553 8.22976 4.29574 9.22662L5.99491 11.8929C4.17822 12.172 1.08984 13.004 1.08984 14.8359C1.08984 15.5037 1.52571 16.4554 3.60218 17.197C5.05209 17.7148 6.96906 18 9 18C12.7978 18 16.9102 16.9287 16.9102 14.8359C16.9102 13.0037 13.8254 12.1726 12.005 11.8928ZM5.17672 8.6465C5.17093 8.63744 5.16487 8.62856 5.15855 8.61985C4.55924 7.79537 4.25391 6.81824 4.25391 5.83594C4.25391 3.19859 6.37755 1.05469 9 1.05469C11.617 1.05469 13.7461 3.19954 13.7461 5.83594C13.7461 6.81982 13.4465 7.7638 12.8796 8.56656C12.8288 8.63357 13.0939 8.22182 9 14.6457L5.17672 8.6465ZM9 16.9453C4.85177 16.9453 2.14453 15.726 2.14453 14.8359C2.14453 14.2377 3.53559 13.2541 6.61809 12.8707L8.55527 15.9104C8.60291 15.9852 8.66863 16.0467 8.74636 16.0893C8.82408 16.132 8.91131 16.1543 8.99996 16.1543C9.08862 16.1543 9.17584 16.132 9.25357 16.0893C9.3313 16.0467 9.39702 15.9852 9.44466 15.9104L11.3818 12.8707C14.4644 13.2541 15.8555 14.2377 15.8555 14.8359C15.8555 15.7184 13.1726 16.9453 9 16.9453Z" />
                                                        <path
                                                            d="M9 3.19922C7.54611 3.19922 6.36328 4.38205 6.36328 5.83594C6.36328 7.28982 7.54611 8.47266 9 8.47266C10.4539 8.47266 11.6367 7.28982 11.6367 5.83594C11.6367 4.38205 10.4539 3.19922 9 3.19922ZM9 7.41797C8.12767 7.41797 7.41797 6.70827 7.41797 5.83594C7.41797 4.96361 8.12767 4.25391 9 4.25391C9.87233 4.25391 10.582 4.96361 10.582 5.83594C10.582 6.70827 9.87233 7.41797 9 7.41797Z" />
                                                    </svg>
                                                    Dubai
                                                </span>
                                            </div>
                                            <h2>Let's trek and venture to a spot.</h2>
                                            <p>Life is unpredictable, and we understand that plans might change. Enjoy
                                                flexible booking options, so you can reschedule or modify your trip with
                                                ease.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-btn-grp">
                <div class="slider-btn home1-banner-prev">
                    <i class="bi bi-arrow-left"></i>
                </div>
                <div class="slider-btn home1-banner-next">
                    <i class="bi bi-arrow-right"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- banner crousel end -->



    <!-- About  Us starts -->
    <div class="home2-about-section pt-120 mb-120">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="section-title2 mb-30">
                            <div class="eg-section-tag">
                                <span>About Us</span>
                            </div>
                            <h2>We provide the best tour facilities.</h2>
                            <p>At Xpress Tourism, we believe that travel is not just about visiting new destinations,
                                but about creating unforgettable experiences that leave a lasting imprint on your heart
                                and mind. As one of Dubai's leading travel companies, we specialize in crafting bespoke
                                travel journeys that cater to your unique interests, preferences, and aspirations.</p>
                        </div>
                        <div class="row g-4 mb-50">
                            <div class="col-md-6">
                                <div class="facility-card">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon1.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Safety first <br>always</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-card two">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon2.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Trusted travel <br>guide</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-card two">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon3.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Expertise and <br> Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="facility-card">
                                    <div class="icon">
                                        <img src="assets/img/home2/icon/facility-card-icon3.svg" alt>
                                    </div>
                                    <div class="content">
                                        <h6>Expertise and <br> Experience</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-bottom-area">
                            <a href="about.html" class="primary-btn3">Find Out More</a>
                            <a data-fancybox="popup-video"
                                href="https://www.youtube.com/watch?v=MLpWrANjFbI&amp;ab_channel=eidelchteinadvogados"
                                class="video-area">
                                <div class="icon">
                                    <svg class="video-circle" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="51px"
                                        viewBox="0 0 206 206" style="enable-background:new 0 0 206 206;"
                                        xml:space="preserve">
                                        <circle class="circle" stroke-miterlimit="10" cx="103" cy="103" r="100">
                                        </circle>
                                        <path class="circle-half top-half" stroke-width="4" stroke-miterlimit="10"
                                            d="M16.4,53C44,5.2,105.2-11.2,153,16.4s64.2,88.8,36.6,136.6"></path>
                                        <path class="circle-half bottom-half" stroke-width="4" stroke-miterlimit="10"
                                            d="M189.6,153C162,200.8,100.8,217.2,53,189.6S-11.2,100.8,16.4,53"></path>
                                    </svg>
                                    <i class="bi bi-play"></i>
                                </div>
                                <h6>Watch Tour</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div class="about-img-wrap">
                        <div class="about-img">
                            <img src="assets\img\home1/about-image.webp" alt class="about-img">
                        </div>
                        <div class="experience">
                            <h3>05</h3>
                            <p>Years of experience</p>
                        </div>
                        <img src="assets/img/home2/vector/plane-vector.svg" alt class="vector">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- About Us ends -->



    <!-- Best Places In Dubai Starts -->
    <div class="home1-destination-section mb-120">
        <img src="assets/img/home1/section-vector2.png" alt class="section-vector2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-40">
                        <div class="section-title2 mb-30">
                            <div class="eg-section-tag">
                                <span>Best Places In Dubai</span>
                            </div>

                        </div>

                        </span>
                        <h2>Desired Vacation Spots</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="destination-card">
                        <img src="assets/img/home1/destination-card-img1.webp" alt>
                        <div class="overlay"></div>
                        <div class="card-title">
                            <h4>Desert Safari</h4>
                        </div>
                        <div class="content">
                            <h4><a href="desert-safari.php">Desert Safari</a></h4>
                            <div class="eg-tag">
                                <span>
                                    Tour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="destination-card">
                        <img src="assets/img/home1/destination-card-img2.webp" alt>
                        <div class="overlay"></div>
                        <div class="card-title">
                            <h4>City Tour</h4>
                        </div>
                        <div class="content">
                            <h4><a href="dubai-city-tour.php">Dubai City Tour</a></h4>
                            <div class="eg-tag">
                                <span>
                                    Tour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="destination-card">
                        <img src="assets/img/home1/destination-card-img3.webp" alt>
                        <div class="overlay"></div>
                        <div class="card-title">
                            <h4>Cruise Tour</h4>
                        </div>
                        <div class="content">
                            <h4><a href="dubai-cruise.php">Dubai Cruise</a></h4>
                            <div class="eg-tag">
                                <span>
                                    Tour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-6">
                    <div class="destination-card">
                        <img src="assets/img/home1/destination-card-img4.jpg" alt>
                        <div class="overlay"></div>
                        <div class="card-title">
                            <h4>Old Dubai</h4>
                        </div>
                        <div class="content">
                            <h4><a href="old-dubai.php">Old Dubai</a></h4>
                            <div class="eg-tag">
                                <span>
                                    Tour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="destination-card">
                        <img src="assets/img/home1/destination-card-img5.webp" alt>
                        <div class="overlay"></div>
                        <div class="card-title">
                            <h4>Burj Khalifa Tour</h4>
                        </div>
                        <div class="content">
                            <h4><a href="burj-khalifa-tour.php">Burj Khalifa</a></h4>
                            <div class="eg-tag">
                                <span>
                                    Tour
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="destination-banner">
                        <div class="destination-banner-content">
                            <div class="batch">
                                <span>
                                    Get 10% Off
                                </span>
                            </div>
                            <h2>Of Our All Destination</h2>
                            <a href="destination1.php" class="primary-btn1">View All Destination</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Places In Dubai Starts ends -->


    <!-- Tour Packaage Starts -->
    <div class="tour-facilites-section mb-120">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-12 d-flex flex-column align-items-center justify-content-between flex-wrap gap-4 mb-60">
                    <div class="section-title text-center">
                        <span>
                            <div class="section-title2 mb-30">
                                <div class="eg-section-tag">
                                    <span>Tour Experience</span>
                                </div>

                            </div>

                        </span>
                        <h2>Ultimate Travel Experience</h2>
                    </div>
                    <ul class="nav nav-tabs" id="facilitesTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Tour-tab" data-bs-toggle="tab" data-bs-target="#Tour"
                                type="button" role="tab" aria-controls="Tour" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <g>
                                        <path
                                            d="M5.64903 6.91357C2.53954 6.91357 0.00976562 9.44335 0.00976562 12.5528C0.00976562 14.4834 0.928148 16.5592 2.73944 18.7225C2.9952 19.0275 3.26021 19.3246 3.53411 19.6134C2.36462 19.9327 1.66244 20.5062 1.66244 21.1756C1.66244 22.3605 3.71636 23 5.64885 23C7.58139 23 9.63527 22.3605 9.63527 21.1756C9.63527 20.5067 8.93332 19.9331 7.76458 19.6137C8.2315 19.1208 8.73391 18.5408 9.21062 17.894C9.23746 17.8583 9.25696 17.8178 9.26801 17.7746C9.27906 17.7314 9.28143 17.6864 9.27499 17.6423C9.26854 17.5981 9.25341 17.5557 9.23047 17.5175C9.20753 17.4792 9.17723 17.4459 9.14132 17.4195C9.10542 17.393 9.06463 17.3739 9.02131 17.3634C8.97799 17.3528 8.933 17.3509 8.88894 17.3578C8.84489 17.3647 8.80264 17.3803 8.76465 17.4037C8.72666 17.427 8.69367 17.4577 8.6676 17.4938C8.09206 18.2749 7.46909 18.9613 6.92549 19.5065C6.86236 19.5385 6.8109 19.5896 6.77841 19.6525C6.29146 20.131 5.88168 20.486 5.64917 20.68C5.41921 20.4879 5.01568 20.1377 4.53497 19.6654C4.50093 19.5907 4.44083 19.531 4.36593 19.4974C2.83827 17.9609 0.684268 15.3062 0.684268 12.5529C0.684268 9.81539 2.91145 7.58821 5.64899 7.58821C8.38653 7.58821 10.6137 9.81539 10.6137 12.5529C10.6137 13.7484 10.2064 15.0395 9.40297 16.3902C9.38033 16.4283 9.36541 16.4705 9.35906 16.5143C9.35271 16.5581 9.35506 16.6028 9.36597 16.6457C9.37687 16.6887 9.39613 16.729 9.42264 16.7645C9.44914 16.8 9.48238 16.8299 9.52045 16.8525C9.55851 16.8752 9.60067 16.8901 9.6445 16.8965C9.68834 16.9028 9.73299 16.9005 9.77592 16.8895C9.81885 16.8786 9.85921 16.8594 9.89469 16.8329C9.93018 16.8064 9.9601 16.7731 9.98274 16.7351C10.849 15.2785 11.2883 13.8715 11.2883 12.5529C11.2883 9.44335 8.75852 6.91357 5.64903 6.91357ZM5.44262 21.3815C5.50169 21.4273 5.57431 21.4521 5.64903 21.452C5.72376 21.4521 5.79638 21.4273 5.85545 21.3815C5.89682 21.3495 6.46041 20.91 7.21164 20.1755C8.34915 20.4074 8.96081 20.8541 8.96081 21.1756C8.96081 21.4157 8.63171 21.699 8.10195 21.9148C7.4522 22.1796 6.58103 22.3255 5.6489 22.3255C3.62714 22.3255 2.33699 21.6444 2.33699 21.1756C2.33699 20.8536 2.94882 20.4072 4.08697 20.1752C4.84237 20.9141 5.40677 21.3538 5.44262 21.3815Z">
                                        </path>
                                        <path
                                            d="M5.64915 10.1009C5.1157 10.1009 4.60844 10.2693 4.18222 10.5879C4.1106 10.6415 4.06318 10.7213 4.05039 10.8098C4.0376 10.8984 4.06049 10.9883 4.11403 11.06C4.16761 11.1316 4.24744 11.179 4.33596 11.1918C4.42448 11.2046 4.51446 11.1817 4.58612 11.1282C4.89477 10.8974 5.26237 10.7754 5.6491 10.7754C6.62916 10.7754 7.42648 11.5727 7.42648 12.5528C7.42648 13.5329 6.62916 14.3302 5.6491 14.3302C4.66904 14.3302 3.87172 13.5329 3.87172 12.5528C3.87172 12.3856 3.89486 12.2202 3.94045 12.0615C3.96513 11.9755 3.95465 11.8833 3.91132 11.805C3.86799 11.7268 3.79534 11.6689 3.70938 11.6442C3.6234 11.6196 3.53117 11.6301 3.45294 11.6735C3.37471 11.7168 3.31687 11.7894 3.29214 11.8754C3.22906 12.0957 3.19713 12.3237 3.19727 12.5528C3.19727 13.9048 4.29718 15.0048 5.64919 15.0048C7.00116 15.0048 8.10112 13.9048 8.10112 12.5528C8.10107 11.2008 7.00112 10.1009 5.64915 10.1009ZM20.3471 9.7984C20.5276 9.60501 20.7029 9.40685 20.8728 9.20413C22.2769 7.52706 22.9889 5.91486 22.9889 4.41218C22.9889 1.97935 21.0096 0 18.5767 0C16.7995 0 15.2037 1.05773 14.5114 2.69468C14.4942 2.73547 14.4851 2.77926 14.4848 2.82354C14.4844 2.86783 14.4928 2.91175 14.5095 2.95279C14.5261 2.99383 14.5507 3.0312 14.5818 3.06275C14.6128 3.0943 14.6498 3.11942 14.6906 3.13667C14.773 3.1715 14.8658 3.17218 14.9487 3.13858C15.0316 3.10498 15.0977 3.03984 15.1326 2.95748C15.7192 1.57065 17.0711 0.674502 18.5767 0.674502C20.6377 0.674502 22.3144 2.35126 22.3144 4.41223C22.3144 7.19931 19.3883 9.86952 18.5766 10.5564C18.3977 10.4053 18.1161 10.1578 17.786 9.83421C17.7533 9.76971 17.7007 9.71745 17.636 9.68516C16.4715 8.51265 14.839 6.49714 14.839 4.41223C14.839 4.32278 14.8035 4.23699 14.7403 4.17374C14.677 4.11049 14.5912 4.07495 14.5018 4.07495C14.4123 4.07495 14.3265 4.11049 14.2633 4.17374C14.2 4.23699 14.1645 4.32278 14.1645 4.41223C14.1645 5.91486 14.8765 7.52706 16.2807 9.20418C16.4505 9.40677 16.6257 9.60484 16.806 9.79818C15.9366 10.0594 15.4347 10.504 15.4347 11.0395C15.4347 11.491 15.801 11.889 16.4662 12.16C17.0354 12.3919 17.7849 12.5197 18.5767 12.5197C19.3684 12.5197 20.1179 12.3919 20.6871 12.16C21.3522 11.8889 21.7185 11.491 21.7185 11.0394C21.7185 10.505 21.2162 10.0599 20.3471 9.7984ZM18.5766 11.8451C16.9802 11.8451 16.1093 11.3129 16.1093 11.0394C16.1093 10.8612 16.5054 10.5352 17.3514 10.3553C17.9206 10.9091 18.3431 11.2382 18.3703 11.2594C18.4294 11.3052 18.502 11.33 18.5768 11.3299C18.6515 11.33 18.7241 11.3052 18.7832 11.2594C18.8104 11.2383 19.2328 10.9092 19.8021 10.3554C20.1789 10.4358 20.5054 10.5535 20.7339 10.6926C20.9281 10.8109 21.0441 10.9405 21.0441 11.0394C21.044 11.3129 20.1731 11.8451 18.5766 11.8451Z">
                                        </path>
                                        <path
                                            d="M18.576 2.44968C17.4939 2.44968 16.6135 3.33006 16.6135 4.41227C16.6135 5.49439 17.4939 6.37477 18.576 6.37477C19.6582 6.37477 20.5386 5.49444 20.5386 4.41227C20.5386 3.3301 19.6582 2.44968 18.576 2.44968ZM18.5761 5.70022C17.8658 5.70022 17.288 5.12244 17.288 4.41222C17.288 3.70201 17.8658 3.12418 18.5761 3.12418C19.2863 3.12418 19.8641 3.70196 19.8641 4.41222C19.8641 5.12244 19.2863 5.70022 18.5761 5.70022ZM14.2011 10.7021H14.0471C13.935 10.7021 13.8223 10.7096 13.7121 10.7242C13.6241 10.7369 13.5446 10.7837 13.491 10.8545C13.4374 10.9254 13.4138 11.0145 13.4256 11.1026C13.4373 11.1907 13.4833 11.2706 13.5536 11.325C13.6239 11.3794 13.7128 11.4038 13.8011 11.3929C13.8826 11.3822 13.9648 11.3768 14.0471 11.3768H14.2011V11.3767C14.3874 11.3767 14.5384 11.2258 14.5384 11.0395C14.5384 10.8531 14.3874 10.7021 14.2011 10.7021ZM13.0861 20.8211H13.0845L12.6391 20.8231C12.5496 20.8233 12.4639 20.859 12.4008 20.9224C12.3377 20.9858 12.3023 21.0717 12.3025 21.1611C12.3027 21.2506 12.3384 21.3363 12.4018 21.3994C12.4652 21.4625 12.5511 21.4979 12.6405 21.4977H12.6421L13.0876 21.4957C13.177 21.4952 13.2626 21.4593 13.3256 21.3958C13.3885 21.3322 13.4237 21.2463 13.4233 21.1569C13.4229 21.0677 13.3872 20.9823 13.324 20.9193C13.2608 20.8564 13.1753 20.8211 13.0861 20.8211ZM14.6013 15.0708H14.1558C14.0664 15.0708 13.9806 15.1063 13.9174 15.1696C13.8541 15.2328 13.8186 15.3186 13.8186 15.4081C13.8186 15.4975 13.8541 15.5833 13.9174 15.6466C13.9806 15.7098 14.0664 15.7453 14.1558 15.7453H14.6013C14.6456 15.7453 14.6894 15.7366 14.7304 15.7197C14.7713 15.7027 14.8085 15.6779 14.8398 15.6466C14.8711 15.6152 14.896 15.5781 14.9129 15.5371C14.9299 15.4962 14.9386 15.4524 14.9386 15.4081C14.9386 15.3638 14.9299 15.3199 14.9129 15.279C14.896 15.2381 14.8711 15.2009 14.8398 15.1696C14.8085 15.1382 14.7713 15.1134 14.7304 15.0965C14.6894 15.0795 14.6456 15.0708 14.6013 15.0708ZM12.8142 11.3893C12.7535 11.3236 12.6693 11.2846 12.5799 11.281C12.4905 11.2774 12.4034 11.3095 12.3376 11.3701C12.2116 11.4863 12.0977 11.615 11.9977 11.7543C11.9477 11.827 11.9282 11.9164 11.9434 12.0034C11.9586 12.0903 12.0072 12.1679 12.0789 12.2194C12.1506 12.2709 12.2396 12.2922 12.3269 12.2788C12.4141 12.2654 12.4927 12.2184 12.5456 12.1478C12.619 12.0456 12.7026 11.9512 12.795 11.8659C12.8607 11.8052 12.8997 11.721 12.9033 11.6316C12.9069 11.5422 12.8749 11.4551 12.8142 11.3893ZM14.8679 20.8129H14.8664L14.421 20.815C14.3325 20.8166 14.2482 20.8529 14.1862 20.9162C14.1243 20.9794 14.0897 21.0644 14.0899 21.153C14.09 21.2415 14.125 21.3264 14.1873 21.3893C14.2495 21.4523 14.3339 21.4883 14.4225 21.4895H14.424L14.8694 21.4875C14.9579 21.4858 15.0423 21.4495 15.1042 21.3863C15.1661 21.323 15.2007 21.238 15.2006 21.1495C15.2004 21.061 15.1654 20.9761 15.1032 20.9131C15.0409 20.8501 14.9565 20.8142 14.8679 20.8129ZM11.3043 20.8291H11.3027L10.8572 20.8312C10.7678 20.8316 10.6822 20.8675 10.6192 20.9311C10.5563 20.9946 10.5211 21.0805 10.5215 21.17C10.5219 21.2591 10.5576 21.3445 10.6208 21.4075C10.684 21.4704 10.7695 21.5057 10.8587 21.5057H10.8603L11.3057 21.5037C11.3952 21.5033 11.4808 21.4673 11.5437 21.4038C11.6067 21.3403 11.6419 21.2543 11.6415 21.1649C11.6411 21.0757 11.6054 20.9903 11.5422 20.9274C11.479 20.8645 11.3934 20.8291 11.3043 20.8291ZM13.0633 14.7873C12.957 14.7202 12.8578 14.6425 12.7671 14.5554C12.7027 14.4934 12.6162 14.4595 12.5268 14.4613C12.4373 14.463 12.3523 14.5002 12.2902 14.5646C12.2595 14.5965 12.2354 14.6342 12.2193 14.6754C12.2031 14.7167 12.1952 14.7607 12.1961 14.805C12.197 14.8492 12.2065 14.8929 12.2243 14.9335C12.242 14.9741 12.2676 15.0108 12.2995 15.0415C12.4231 15.1603 12.5584 15.2663 12.7034 15.3578C12.7408 15.3815 12.7826 15.3975 12.8263 15.405C12.8699 15.4126 12.9146 15.4114 12.9579 15.4016C13.0011 15.3918 13.0419 15.3736 13.0781 15.348C13.1143 15.3224 13.145 15.29 13.1686 15.2525C13.1923 15.215 13.2083 15.1732 13.2158 15.1296C13.2233 15.0859 13.2221 15.0412 13.2123 14.9981C13.2025 14.9549 13.1843 14.914 13.1588 14.8778C13.1332 14.8417 13.1008 14.8109 13.0633 14.7873ZM12.2342 13.5793C12.2115 13.4622 12.2001 13.3431 12.2001 13.2238L12.2002 13.2051C12.2007 13.1608 12.1925 13.1168 12.176 13.0757C12.1595 13.0346 12.1351 12.9971 12.1042 12.9654C12.0732 12.9338 12.0363 12.9085 11.9956 12.8911C11.9549 12.8736 11.9111 12.8644 11.8669 12.8639L11.8629 12.8639C11.7741 12.8639 11.6889 12.8989 11.6258 12.9613C11.5627 13.0237 11.5267 13.1085 11.5257 13.1972L11.5255 13.2238C11.5255 13.3867 11.5412 13.5497 11.5721 13.7084C11.5806 13.7518 11.5975 13.7932 11.622 13.8301C11.6465 13.8671 11.678 13.8988 11.7147 13.9235C11.7514 13.9483 11.7927 13.9656 11.8361 13.9744C11.8795 13.9832 11.9242 13.9834 11.9677 13.9749C12.0112 13.9664 12.0526 13.9494 12.0895 13.925C12.1264 13.9005 12.1581 13.869 12.1829 13.8323C12.2076 13.7956 12.2249 13.7543 12.2337 13.7109C12.2425 13.6675 12.2427 13.6228 12.2342 13.5793ZM16.3832 15.0708H15.9378C15.8483 15.0708 15.7625 15.1063 15.6993 15.1696C15.636 15.2328 15.6005 15.3186 15.6005 15.4081C15.6005 15.4975 15.636 15.5833 15.6993 15.6466C15.7625 15.7098 15.8483 15.7453 15.9378 15.7453H16.3832C16.4727 15.7453 16.5584 15.7098 16.6217 15.6466C16.6849 15.5833 16.7205 15.4975 16.7205 15.4081C16.7205 15.3186 16.6849 15.2328 16.6217 15.1696C16.5584 15.1063 16.4727 15.0708 16.3832 15.0708ZM21.7981 15.7575C21.6679 15.6547 21.5298 15.5621 21.3852 15.4807C21.2231 15.3892 21.0173 15.4467 20.9258 15.609C20.9041 15.6475 20.8902 15.69 20.8849 15.734C20.8795 15.778 20.8829 15.8226 20.8948 15.8652C20.9068 15.9079 20.927 15.9478 20.9543 15.9826C20.9816 16.0175 21.0156 16.0466 21.0541 16.0683C21.1682 16.1327 21.2772 16.2058 21.38 16.2869C21.4395 16.334 21.513 16.3596 21.5888 16.3595C21.659 16.3596 21.7273 16.3378 21.7845 16.2972C21.8417 16.2566 21.8848 16.1992 21.9078 16.133C21.9308 16.0668 21.9326 15.995 21.913 15.9277C21.8933 15.8604 21.8532 15.8009 21.7981 15.7575ZM20.5462 21.0546C20.5206 20.8701 20.3501 20.741 20.1659 20.7667C20.0555 20.7819 19.9424 20.79 19.8296 20.7904L19.7665 20.7907C19.6783 20.793 19.5946 20.8296 19.5332 20.8928C19.4717 20.9559 19.4374 21.0406 19.4376 21.1288C19.4378 21.2169 19.4725 21.3015 19.5343 21.3644C19.596 21.4272 19.6799 21.4635 19.768 21.4653H19.7697L19.8327 21.465C19.975 21.4644 20.1172 21.4543 20.2583 21.4349C20.3021 21.4288 20.3444 21.4142 20.3826 21.3918C20.4208 21.3694 20.4543 21.3397 20.481 21.3044C20.5077 21.2691 20.5273 21.2288 20.5384 21.186C20.5496 21.1431 20.5523 21.0985 20.5462 21.0546ZM22.0347 20.1062C22.0042 20.0741 21.9676 20.0483 21.9271 20.0304C21.8866 20.0125 21.843 20.0027 21.7987 20.0016C21.7544 20.0005 21.7104 20.0082 21.669 20.0241C21.6277 20.0401 21.59 20.064 21.5579 20.0946C21.4629 20.185 21.3611 20.2679 21.2534 20.3427C21.1799 20.3937 21.1297 20.4718 21.1137 20.5598C21.0978 20.6478 21.1174 20.7385 21.1684 20.8121C21.1994 20.8569 21.2409 20.8936 21.2892 20.9188C21.3376 20.9441 21.3913 20.9573 21.4459 20.9572C21.5144 20.9572 21.5814 20.9363 21.6377 20.8971C21.7741 20.8025 21.9029 20.6975 22.0231 20.583C22.0552 20.5525 22.081 20.5159 22.0989 20.4754C22.1168 20.4349 22.1266 20.3913 22.1277 20.347C22.1288 20.3027 22.1211 20.2587 22.1051 20.2173C22.0892 20.176 22.0652 20.1382 22.0347 20.1062ZM22.6911 18.4682C22.6032 18.4517 22.5123 18.4707 22.4385 18.5212C22.3646 18.5716 22.3138 18.6493 22.2973 18.7372C22.273 18.8658 22.2387 18.9924 22.1948 19.1158C22.1659 19.1998 22.1713 19.2918 22.2098 19.3718C22.2483 19.4518 22.3169 19.5135 22.4005 19.5433C22.4842 19.5731 22.5762 19.5687 22.6567 19.5311C22.7371 19.4935 22.7995 19.4256 22.8303 19.3423C22.886 19.1858 22.9294 19.0253 22.9602 18.862C22.9767 18.7741 22.9577 18.6832 22.9072 18.6094C22.8567 18.5355 22.779 18.4847 22.6911 18.4682ZM22.8914 17.384C22.8455 17.2242 22.7872 17.0683 22.7169 16.9176C22.6782 16.8379 22.6097 16.7766 22.5263 16.747C22.4428 16.7173 22.3511 16.7217 22.2708 16.7592C22.1905 16.7966 22.1282 16.8641 22.0973 16.9471C22.0664 17.0301 22.0694 17.122 22.1056 17.2028C22.1609 17.3214 22.2069 17.4443 22.2431 17.5701C22.2633 17.6405 22.3058 17.7024 22.3643 17.7464C22.4227 17.7905 22.4939 17.8144 22.5671 17.8144C22.6194 17.8144 22.6709 17.8023 22.7177 17.779C22.7644 17.7557 22.8051 17.7218 22.8366 17.6801C22.868 17.6384 22.8894 17.5899 22.8989 17.5385C22.9084 17.4872 22.9059 17.4343 22.8914 17.384ZM18.1651 15.0708H17.7196C17.6302 15.0708 17.5444 15.1063 17.4811 15.1696C17.4179 15.2328 17.3824 15.3186 17.3824 15.4081C17.3824 15.4975 17.4179 15.5833 17.4811 15.6466C17.5444 15.7098 17.6302 15.7453 17.7196 15.7453H18.1651C18.2545 15.7453 18.3403 15.7098 18.4036 15.6466C18.4668 15.5833 18.5024 15.4975 18.5024 15.4081C18.5024 15.3186 18.4668 15.2328 18.4036 15.1696C18.3403 15.1063 18.2545 15.0708 18.1651 15.0708ZM16.6498 20.8048H16.6482L16.2028 20.8069C16.1143 20.8085 16.03 20.8448 15.968 20.9081C15.9061 20.9713 15.8715 21.0564 15.8717 21.1449C15.8719 21.2334 15.9069 21.3183 15.9691 21.3812C16.0313 21.4442 16.1158 21.4802 16.2043 21.4814H16.2059L16.6513 21.4794C16.7408 21.4792 16.8265 21.4435 16.8896 21.3801C16.9527 21.3167 16.988 21.2308 16.9878 21.1414C16.9876 21.0519 16.9519 20.9662 16.8885 20.9031C16.8251 20.84 16.7393 20.8046 16.6498 20.8048ZM19.9618 15.074C19.9139 15.0719 19.8661 15.0708 19.8182 15.0708H19.5015C19.412 15.0708 19.3262 15.1064 19.263 15.1696C19.1997 15.2329 19.1642 15.3187 19.1642 15.4081C19.1642 15.4976 19.1997 15.5833 19.263 15.6466C19.3262 15.7098 19.412 15.7454 19.5015 15.7454H19.8182V15.7453C19.8563 15.7453 19.8943 15.7462 19.9319 15.7479C19.9762 15.7498 20.0204 15.7431 20.062 15.7279C20.1036 15.7128 20.1419 15.6897 20.1746 15.6598C20.2072 15.6299 20.2337 15.5938 20.2524 15.5537C20.2712 15.5136 20.2818 15.4701 20.2838 15.4259C20.2857 15.3817 20.279 15.3374 20.2639 15.2958C20.2487 15.2542 20.2256 15.2159 20.1957 15.1833C20.1658 15.1506 20.1297 15.1241 20.0896 15.1054C20.0495 15.0866 20.006 15.076 19.9618 15.074ZM18.4316 20.7968H18.4301L17.9846 20.7988C17.8961 20.8004 17.8118 20.8368 17.7499 20.9C17.6879 20.9633 17.6533 21.0483 17.6535 21.1368C17.6537 21.2253 17.6887 21.3102 17.7509 21.3732C17.8131 21.4362 17.8976 21.4721 17.9861 21.4734H17.9877L18.4331 21.4713C18.5226 21.4709 18.6082 21.435 18.6711 21.3715C18.7341 21.3079 18.7693 21.222 18.7689 21.1325C18.7685 21.0434 18.7328 20.958 18.6696 20.895C18.6064 20.8321 18.5208 20.7968 18.4316 20.7968Z">
                                        </path>
                                    </g>
                                </svg>
                                Tour Package
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Hotel-tab" data-bs-toggle="tab" data-bs-target="#Hotel"
                                type="button" role="tab" aria-controls="Hotel" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
                                    <g>
                                        <path
                                            d="M19.5496 12.2665H16.0038C15.9021 12.2665 15.8046 12.3069 15.7327 12.3788C15.6608 12.4506 15.6204 12.5481 15.6204 12.6498V22.2333H13.6079V18.2562C13.6079 18.1545 13.5675 18.057 13.4956 17.9851C13.4237 17.9132 13.3262 17.8728 13.2245 17.8728H9.77448C9.67281 17.8728 9.57531 17.9132 9.50342 17.9851C9.43153 18.057 9.39114 18.1545 9.39114 18.2562V22.2333H7.37861V8.33724C7.37861 7.91452 7.72256 7.57056 8.14529 7.57056H14.8537C15.2765 7.57056 15.6204 7.91452 15.6204 8.33724V10.4696C15.6204 10.5712 15.6608 10.6687 15.7327 10.7406C15.8046 10.8125 15.9021 10.8529 16.0038 10.8529C16.1054 10.8529 16.2029 10.8125 16.2748 10.7406C16.3467 10.6687 16.3871 10.5712 16.3871 10.4696V8.33724C16.3871 7.49174 15.6992 6.80389 14.8537 6.80389H8.14529C7.29978 6.80389 6.61193 7.49174 6.61193 8.33724V22.2333H3.44937C3.02665 22.2333 2.6827 21.8894 2.6827 21.4666V13.7998C2.6827 13.3771 3.02665 13.0332 3.44937 13.0332H4.79106C4.89273 13.0332 4.99024 12.9928 5.06213 12.9209C5.13402 12.849 5.1744 12.7515 5.1744 12.6498C5.1744 12.5481 5.13402 12.4506 5.06213 12.3788C4.99024 12.3069 4.89273 12.2665 4.79106 12.2665H3.44937C2.60387 12.2665 1.91602 12.9543 1.91602 13.7998V21.4666C1.91602 22.3121 2.60387 23 3.44937 23H16.0038C16.1054 23 16.2029 22.9596 16.2748 22.8877C16.3467 22.8158 16.3871 22.7183 16.3871 22.6166V13.0332H19.5496C19.9724 13.0332 20.3163 13.3771 20.3163 13.7998V21.4666C20.3163 21.8894 19.9724 22.2333 19.5496 22.2333H17.9205C17.8188 22.2333 17.7213 22.2737 17.6494 22.3456C17.5775 22.4175 17.5371 22.515 17.5371 22.6166C17.5371 22.7183 17.5775 22.8158 17.6494 22.8877C17.7213 22.9596 17.8188 23 17.9205 23H19.5496C20.3951 23 21.083 22.3121 21.083 21.4666V13.7998C21.083 12.9543 20.3951 12.2665 19.5496 12.2665ZM10.1578 18.6395H12.8412V22.2333H10.1578V18.6395ZM9.91047 3.38493L9.66638 4.81306C9.61295 5.12577 9.94233 5.36473 10.2231 5.21667L11.4995 4.54323L12.7759 5.21667C13.0564 5.36473 13.3861 5.12591 13.3326 4.81306L13.0885 3.38493L14.1222 2.37377C14.3485 2.15239 14.2231 1.76613 13.9095 1.72042L12.4821 1.51226L11.8435 0.213796C11.7034 -0.0712652 11.2957 -0.0712652 11.1556 0.213796L10.517 1.51226L9.0896 1.72042C8.77631 1.76603 8.65029 2.15215 8.87684 2.37377L9.91047 3.38493ZM10.8272 2.24181C10.8888 2.23283 10.9472 2.209 10.9975 2.17239C11.0478 2.13577 11.0884 2.08747 11.1159 2.03164L11.4995 1.25159L11.8831 2.03164C11.9106 2.08746 11.9512 2.13577 12.0015 2.17238C12.0518 2.209 12.1102 2.23283 12.1718 2.24181L13.0324 2.36735L12.4087 2.97739C12.3644 3.02074 12.3313 3.07419 12.3122 3.13316C12.293 3.19213 12.2885 3.25486 12.2989 3.31597L12.4458 4.17571C11.6045 3.73185 11.6245 3.72648 11.4995 3.72648C11.3729 3.72648 11.3843 3.73717 10.5531 4.17571L10.7 3.31597C10.7105 3.25486 10.7059 3.19213 10.6868 3.13316C10.6677 3.07418 10.6345 3.02073 10.5902 2.97739L9.96653 2.36735L10.8272 2.24181ZM5.66953 3.49173C5.75655 3.22397 6.00088 3.22766 6.24406 3.1923C6.35365 2.9702 6.42462 2.73842 6.70633 2.73842C6.98784 2.73842 7.05986 2.97193 7.16863 3.1923L7.43371 3.23082C7.74748 3.27644 7.87335 3.66323 7.64618 3.8847L7.45436 4.07168C7.4962 4.31577 7.57507 4.54506 7.34713 4.71061C7.11937 4.87612 6.92387 4.72949 6.70633 4.61511C6.48715 4.73035 6.29347 4.87621 6.06552 4.71061C5.83772 4.54515 5.91674 4.3139 5.95829 4.07168C5.78113 3.89889 5.58247 3.75964 5.66953 3.49173ZM2.31531 5.40843C2.40233 5.14067 2.64666 5.14436 2.88984 5.109L3.00839 4.86879C3.14874 4.58449 3.55546 4.58425 3.69591 4.86879L3.81446 5.109C4.05951 5.1446 4.30192 5.14048 4.38899 5.40843C4.47601 5.6762 4.27614 5.81683 4.10019 5.98838L4.14547 6.2524C4.18577 6.48729 4.00426 6.70053 3.76759 6.70053C3.64943 6.70053 3.60271 6.66358 3.3522 6.53181L3.11515 6.65649C2.8345 6.80398 2.5053 6.56516 2.55892 6.2524L2.60421 5.98838C2.42691 5.81559 2.22825 5.67634 2.31531 5.40843ZM15.2559 3.49173C15.3429 3.22397 15.5872 3.22766 15.8304 3.1923L15.9489 2.95209C16.0893 2.66775 16.496 2.6676 16.6365 2.95209L16.755 3.1923C17 3.2279 17.2425 3.22378 17.3295 3.49173C17.4165 3.7595 17.2167 3.90013 17.0407 4.07168L17.086 4.3357C17.1263 4.5706 16.9448 4.78383 16.7081 4.78383C16.59 4.78383 16.5433 4.74688 16.2927 4.61511L16.0557 4.73979C15.775 4.88728 15.4458 4.64846 15.4995 4.3357L15.5447 4.07168C15.3674 3.89889 15.1688 3.75964 15.2559 3.49173ZM18.6101 5.40843C18.6971 5.14067 18.9414 5.14436 19.1846 5.109L19.3032 4.86879C19.4435 4.58444 19.8502 4.5843 19.9907 4.86879L20.1092 5.109C20.3542 5.1446 20.5967 5.14048 20.6838 5.40843C20.7708 5.6762 20.5709 5.81683 20.395 5.98838L20.4402 6.2524C20.4805 6.48729 20.299 6.70053 20.0624 6.70053C19.9442 6.70053 19.8975 6.66358 19.647 6.53181L19.4099 6.65649C19.1293 6.80398 18.8001 6.56516 18.8537 6.2524L18.899 5.98838C18.7216 5.81559 18.523 5.67634 18.6101 5.40843ZM4.64731 15.7165C4.74898 15.7165 4.84648 15.7569 4.91837 15.8288C4.99026 15.9007 5.03065 15.9982 5.03065 16.0999V17.7291C5.03065 17.8307 4.99026 17.9282 4.91837 18.0001C4.84648 18.072 4.74898 18.1124 4.64731 18.1124C4.54564 18.1124 4.44814 18.072 4.37625 18.0001C4.30436 17.9282 4.26397 17.8307 4.26397 17.7291V16.0999C4.26397 15.9982 4.30436 15.9007 4.37625 15.8288C4.44814 15.7569 4.54564 15.7165 4.64731 15.7165ZM18.3517 18.1124C18.25 18.1124 18.1525 18.072 18.0806 18.0001C18.0088 17.9282 17.9684 17.8307 17.9684 17.7291V16.0999C17.9684 15.9982 18.0088 15.9007 18.0806 15.8288C18.1525 15.7569 18.25 15.7165 18.3517 15.7165C18.4534 15.7165 18.5509 15.7569 18.6228 15.8288C18.6947 15.9007 18.735 15.9982 18.735 16.0999V17.7291C18.735 17.8307 18.6947 17.9282 18.6228 18.0001C18.5509 18.072 18.4534 18.1124 18.3517 18.1124ZM13.7037 11.4519H9.29531C9.19364 11.4519 9.09613 11.4115 9.02424 11.3396C8.95235 11.2677 8.91197 11.1702 8.91197 11.0685C8.91197 10.9669 8.95235 10.8694 9.02424 10.7975C9.09613 10.7256 9.19364 10.6852 9.29531 10.6852H13.7037C13.8054 10.6852 13.9029 10.7256 13.9748 10.7975C14.0467 10.8694 14.0871 10.9669 14.0871 11.0685C14.0871 11.1702 14.0467 11.2677 13.9748 11.3396C13.9029 11.4115 13.8054 11.4519 13.7037 11.4519ZM13.0329 14.3748C13.1345 14.3748 13.232 14.4152 13.3039 14.4871C13.3758 14.559 13.4162 14.6565 13.4162 14.7582C13.4162 14.8599 13.3758 14.9574 13.3039 15.0292C13.232 15.1011 13.1345 15.1415 13.0329 15.1415H9.96615C9.86448 15.1415 9.76698 15.1011 9.69509 15.0292C9.6232 14.9574 9.58281 14.8599 9.58281 14.7582C9.58281 14.6565 9.6232 14.559 9.69509 14.4871C9.76698 14.4152 9.86448 14.3748 9.96615 14.3748H13.0329Z">
                                        </path>
                                    </g>
                                </svg>
                                Hotel
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Transport-tab" data-bs-toggle="tab" data-bs-target="#Transport"
                                type="button" role="tab" aria-controls="Transport" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 51 51">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M45.8564 34.4958C45.8564 35.7619 46.8834 36.7871 48.1488 36.7871H50.2528C50.5289 36.7871 50.7528 36.5633 50.7528 36.2871V31.249C50.7528 30.9728 50.5289 30.749 50.2528 30.749H48.1488C46.883 30.749 45.8564 31.7757 45.8564 33.0413V34.4958ZM48.1488 35.7871C47.435 35.7871 46.8564 35.2088 46.8564 34.4958V33.0413C46.8564 32.328 47.4354 31.749 48.1488 31.749H49.7528V35.7871H48.1488Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.578816 36.5923C0.673478 36.7152 0.819779 36.7871 0.974858 36.7871H3.80037C5.06692 36.7871 6.09273 35.7617 6.09273 34.4958V33.0413C6.09273 31.7758 5.0673 30.749 3.80037 30.749H2.30235C2.07527 30.749 1.87671 30.902 1.81885 31.1216L0.49136 36.1597C0.451847 36.3097 0.484154 36.4695 0.578816 36.5923ZM1.62367 35.7871L2.68767 31.749H3.80037C4.51466 31.749 5.09273 32.3277 5.09273 33.0413V34.4958C5.09273 35.209 4.51504 35.7871 3.80037 35.7871H1.62367Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.26435 27.315C8.26436 27.3149 8.26435 27.315 8.26435 27.315L10.3466 19.4132C10.3639 19.3473 10.4026 19.2887 10.4565 19.247C10.5105 19.2054 10.5767 19.1828 10.6448 19.1827H18.1558C18.6207 19.1827 18.9975 19.5595 18.9975 20.0243V27.5296C18.9975 27.9943 18.6207 28.3711 18.1558 28.3711H9.07815C8.52629 28.3711 8.12377 27.8488 8.26435 27.315ZM7.29734 27.0602C6.98972 28.2281 7.87034 29.3711 9.07815 29.3711H18.1558C19.1729 29.3711 19.9975 28.5466 19.9975 27.5296V20.0243C19.9975 19.0073 19.173 18.1827 18.1558 18.1827H10.6442C10.3553 18.183 10.0741 18.2789 9.84539 18.4555C9.61672 18.6321 9.4529 18.8793 9.37949 19.1587L7.29734 27.0602Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M25.2215 28.3711C24.7567 28.3711 24.3799 27.9943 24.3799 27.5295V20.0243C24.3799 19.5596 24.7566 19.1828 25.2215 19.1828H32.4557C32.5237 19.1828 32.5898 19.2054 32.6436 19.2469C32.6974 19.2884 32.736 19.3466 32.7533 19.4123L33.3161 21.5481C33.3864 21.8151 33.6599 21.9746 33.9269 21.9042C34.194 21.8339 34.3534 21.5604 34.2831 21.2933L33.7204 19.1577C33.6469 18.8785 33.483 18.6314 33.2543 18.455C33.0257 18.2787 32.7451 18.1829 32.4563 18.1828H25.2215C24.2044 18.1828 23.3799 19.0073 23.3799 20.0243V27.5295C23.3799 28.5466 24.2044 29.3711 25.2215 29.3711H34.0221C35.2493 29.3711 36.1076 28.2048 35.7966 27.0381L35.792 27.0209L35.7916 27.0191L35.0628 24.2527C34.9924 23.9857 34.719 23.8263 34.4519 23.8966C34.1849 23.967 34.0254 24.2405 34.0958 24.5075L34.825 27.2756L34.8255 27.2774L34.8304 27.2957C34.9772 27.8466 34.5727 28.3711 34.0221 28.3711H25.2215Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.0698 41.0047C11.0698 42.687 12.4336 44.0508 14.1159 44.0508C15.7983 44.0508 17.162 42.687 17.162 41.0047C17.162 39.3224 15.7983 37.9586 14.1159 37.9586C12.4336 37.9586 11.0698 39.3224 11.0698 41.0047ZM14.1159 43.0508C12.9859 43.0508 12.0698 42.1347 12.0698 41.0047C12.0698 39.8746 12.9859 38.9586 14.1159 38.9586C15.246 38.9586 16.162 39.8746 16.162 41.0047C16.162 42.1347 15.246 43.0508 14.1159 43.0508Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M32.3147 41.0047C32.3147 42.687 33.6785 44.0508 35.3608 44.0508C37.0431 44.0508 38.4069 42.687 38.4069 41.0047C38.4069 39.3224 37.0431 37.9586 35.3608 37.9586C33.6785 37.9586 32.3147 39.3224 32.3147 41.0047ZM35.3608 43.0508C34.2308 43.0508 33.3147 42.1347 33.3147 41.0047C33.3147 39.8746 34.2308 38.9586 35.3608 38.9586C36.4908 38.9586 37.4069 39.8746 37.4069 41.0047C37.4069 42.1347 36.4908 43.0508 35.3608 43.0508Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.52888 13.9199C6.44663 13.9199 5.56934 13.0427 5.56934 11.9605V8.40513C5.56934 7.32301 6.44664 6.44568 7.52888 6.44568H12.0994V13.9199H7.52888ZM4.56934 11.9605C4.56934 13.595 5.8944 14.9199 7.52888 14.9199H12.5994C12.8755 14.9199 13.0994 14.6961 13.0994 14.4199V5.94568C13.0994 5.66954 12.8755 5.44568 12.5994 5.44568H7.52888C5.89439 5.44568 4.56934 6.7707 4.56934 8.40513V11.9605Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M12.0996 14.4199C12.0996 14.6961 12.3235 14.9199 12.5996 14.9199H17.2592C17.5354 14.9199 17.7592 14.6961 17.7592 14.4199V5.94568C17.7592 4.38279 16.4923 3.11582 14.9294 3.11582C13.3666 3.11582 12.0996 4.3828 12.0996 5.94568V14.4199ZM13.0996 13.9199V5.94568C13.0996 4.93506 13.9189 4.11582 14.9294 4.11582C15.94 4.11582 16.7592 4.93507 16.7592 5.94568V13.9199H13.0996Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M16.759 14.4199C16.759 14.6961 16.9829 14.9199 17.259 14.9199H25.1014C25.3775 14.9199 25.6014 14.6961 25.6014 14.4199V5.94568C25.6014 5.66954 25.3775 5.44568 25.1014 5.44568H17.259C16.9829 5.44568 16.759 5.66954 16.759 5.94568V14.4199ZM17.759 13.9199V6.44568H24.6014V13.9199H17.759Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M24.6016 14.4199C24.6016 14.6961 24.8254 14.9199 25.1016 14.9199H29.7612C30.0373 14.9199 30.2612 14.6961 30.2612 14.4199V5.94568C30.2612 4.38279 28.9942 3.11582 27.4313 3.11582C25.8684 3.11582 24.6016 4.38282 24.6016 5.94568V14.4199ZM25.6016 13.9199V5.94568C25.6016 4.93504 26.4207 4.11582 27.4313 4.11582C28.4419 4.11582 29.2612 4.93507 29.2612 5.94568V13.9199H25.6016Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M36.791 11.9609C36.791 12.2371 37.0149 12.4609 37.291 12.4609H40.6825C41.9404 12.4609 42.9601 11.4412 42.9601 10.1833C42.9601 8.92542 41.9404 7.90569 40.6825 7.90569H37.291C37.0149 7.90569 36.791 8.12955 36.791 8.40569V11.9609ZM37.791 11.4609V8.90569H40.6825C41.3881 8.90569 41.9601 9.47771 41.9601 10.1833C41.9601 10.8889 41.3881 11.4609 40.6825 11.4609H37.791Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M29.261 14.4199C29.261 14.6961 29.4848 14.9199 29.761 14.9199H34.8315C36.466 14.9199 37.791 13.595 37.791 11.9605V8.40513C37.791 6.7707 36.466 5.44568 34.8315 5.44568H29.761C29.4848 5.44568 29.261 5.66954 29.261 5.94568V14.4199ZM30.261 13.9199V6.44568H34.8315C35.9137 6.44568 36.791 7.32301 36.791 8.40513V11.9605C36.791 13.0427 35.9137 13.9199 34.8315 13.9199H30.261Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.23584 41.0046C7.23584 44.8044 10.3162 47.8848 14.116 47.8848C17.9158 47.8848 20.9962 44.8044 20.9962 41.0046C20.9962 37.2048 17.9158 34.1244 14.116 34.1244C10.3162 34.1244 7.23584 37.2048 7.23584 41.0046ZM14.116 46.8848C10.8685 46.8848 8.23584 44.2521 8.23584 41.0046C8.23584 37.7571 10.8685 35.1244 14.116 35.1244C17.3635 35.1244 19.9962 37.7571 19.9962 41.0046C19.9962 44.2521 17.3635 46.8848 14.116 46.8848Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M1.34781 36.8327C1.34784 36.8326 1.34778 36.8328 1.34781 36.8327L1.45832 36.4151L2.78595 31.3765L3.76729 27.6525C3.83766 27.3855 3.67824 27.112 3.41121 27.0416C3.14418 26.9712 2.87067 27.1306 2.80031 27.3977L1.81896 31.1217L0.380936 36.5774C-0.286037 39.1098 1.62328 41.5898 4.24304 41.5898H7.73792C7.87144 41.5898 7.99942 41.5364 8.09334 41.4415C8.18725 41.3466 8.2393 41.2181 8.23789 41.0846C8.23769 41.0652 8.23702 41.0463 8.2366 41.0341L8.23647 41.0303C8.23598 41.0161 8.23583 41.0097 8.23583 41.0051C8.23583 37.7575 10.8685 35.1249 14.116 35.1249C17.3635 35.1249 19.9961 37.7575 19.9961 41.0051C19.9961 41.0248 19.996 41.0263 19.9956 41.0287C19.9953 41.0318 19.9947 41.0365 19.994 41.0828C19.9921 41.2166 20.044 41.3456 20.1379 41.4409C20.2319 41.5362 20.3601 41.5898 20.494 41.5898H28.9827C29.1166 41.5898 29.2448 41.5362 29.3388 41.4409C29.4327 41.3456 29.4846 41.2166 29.4827 41.0828C29.4821 41.0402 29.4815 41.0338 29.4811 41.0294C29.4808 41.0258 29.4806 41.0236 29.4806 41.0051C29.4806 37.7575 32.1132 35.1249 35.3607 35.1249C38.6082 35.1249 41.2409 37.7575 41.2409 41.0051C41.2409 41.0097 41.2407 41.0161 41.2402 41.0303L41.2401 41.0341C41.2397 41.0462 41.239 41.0652 41.2388 41.0846C41.2374 41.2181 41.2894 41.3466 41.3834 41.4415C41.4773 41.5364 41.6053 41.5898 41.7388 41.5898H46.7595C48.9651 41.5898 50.7529 39.8019 50.7529 37.5955V31.2491C50.7529 29.0436 48.9651 27.2556 46.7595 27.2556H41.6271C41.2359 27.2555 40.8556 27.126 40.5458 26.8872C40.2359 26.6483 40.0138 26.3136 39.9141 25.9353L37.8427 18.0728C37.1983 15.6254 34.9851 13.9204 32.4561 13.9204H10.6442C8.11412 13.9204 5.90196 15.6254 5.25754 18.0728L3.58772 24.4094C3.51735 24.6764 3.67677 24.9499 3.9438 25.0203C4.21083 25.0907 4.48434 24.9312 4.5547 24.6642L6.22455 18.3275C6.75333 16.3193 8.56839 14.9204 10.6442 14.9204H32.4561C34.5309 14.9204 36.3469 16.3193 36.8757 18.3274L38.9471 26.1901C39.1031 26.782 39.4505 27.3056 39.9353 27.6792C40.4201 28.0528 41.0149 28.2555 41.627 28.2556H46.7595C48.4127 28.2556 49.7529 29.5959 49.7529 31.2491V37.5955C49.7529 39.2498 48.4127 40.5898 46.7595 40.5898H42.2285C42.0139 36.9834 39.0211 34.1249 35.3607 34.1249C31.7003 34.1249 28.7077 36.9834 28.493 40.5898H20.9838C20.7691 36.9834 17.7764 34.1249 14.116 34.1249C10.4556 34.1249 7.46284 36.9834 7.24815 40.5898H4.24304C2.2795 40.5898 0.848019 38.7312 1.34781 36.8327Z">
                                    </path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M28.4805 41.0046C28.4805 44.8044 31.5608 47.8848 35.3606 47.8848C39.1604 47.8848 42.2408 44.8044 42.2408 41.0046C42.2408 37.2048 39.1604 34.1244 35.3606 34.1244C31.5608 34.1244 28.4805 37.2048 28.4805 41.0046ZM35.3606 46.8848C32.1131 46.8848 29.4805 44.2521 29.4805 41.0046C29.4805 37.7571 32.1131 35.1244 35.3606 35.1244C38.6082 35.1244 41.2408 37.7571 41.2408 41.0046C41.2408 44.2521 38.6082 46.8848 35.3606 46.8848Z">
                                    </path>
                                </svg>
                                Transports
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-content" id="facilitesTabContent">
                        <div class="tab-pane fade show active" id="Tour" role="tabpanel" aria-labelledby="Tour-tab">
                            <div class="row g-4">
                                <!-- start1 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="spice-market.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img1.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">3 Days / 4 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="spice-market.php">Dubai</a></li>
                                                        <li><a href="spice-market.php">Spice Market</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="spice-market.php">Spices Market</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="spice-market.php" class="primary-btn2">Know More
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end1 -->

                                <!-- start2 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="dubai-frame.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img2.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">7 Days / 8 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="dubai-frame.php">Dubai</a></li>
                                                        <li><a href="dubai-frame.php">Dubai Frame</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="dubai-frame.php">Dubai Frame</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="dubai-frame.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end2 -->

                                <!-- start3 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="dubai-city-drive.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img3.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">5 Days / 6 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="dubai-city-drive.php">Dubai</a></li>
                                                        <li><a href="dubai-city-drive.php">City Drive</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="dubai-city-drive.php">Dubai City Drive</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="dubai-city-drive.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end3 -->

                                <!-- start4 -->

                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="burj-khalifa-outside-view.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img4.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">8 Days / 9 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="burj-khalifa-outside-view.php">Dubai</a></li>
                                                        <li><a href="burj-khalifa-outside-view.php">Burj Khalifa Outside
                                                                View</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="burj-khalifa-outside-view.php">Burj Khalifa Outside
                                                        View</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="burj-khalifa-outside-view.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end4 -->


                                <!-- start 5 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="blue-water-island.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img5.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">6 Days / 7 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="blue-water-island.php">Dubai</a></li>
                                                        <li><a href="blue-water-island.php">Blue Water Island</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="blue-water-island.php">Blue Water Island</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="blue-water-island.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- end 5 -->

                                <!-- start6 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="marina-beach-view.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img6.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">6 Days / 7 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="marina-beach-view.php">Dubai</a></li>
                                                        <li><a href="marina-beach-view.php">Marina Beach</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="marina-beach-view.php">Marina Beach view</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="marina-beach-view.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <!-- end 6 -->


                                <!-- start 7 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="palm-island.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img7.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="palm-island.php">Dubai</a></li>
                                                        <li><a href="palm-island.php">Palm Island </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="palm-island.php">Palm Island</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="palm-island.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end7 -->


                                <!-- start 8 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="burj-al-arab.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img8.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="burj-al-arab.php">Dubai</a></li>
                                                        <li><a href="burj-al-arab.php">Burj Al Arab </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="burj-al-arab.php">Burj Al Arab</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="burj-al-arab.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 8 -->


                                <!-- start 9 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="jumairah-beach.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img9.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="jumairah-beach.php">Dubai</a></li>
                                                        <li><a href="jumairah-beach.php">Jumairah Beach</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="jumairah-beach.php">Jumairah Beach</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="jumairah-beach.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end9 -->


                                <!-- start 10 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="burj-khalifa-night-program.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img10.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="burj-khalifa-night-program.php">Dubai</a></li>
                                                        <li><a href="burj-khalifa-night-program.php">Burj Khalifa Night
                                                                Program</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="burj-khalifa-night-program.php">Burj Khalifa Night
                                                        Program</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="burj-khalifa-night-program.php" class="primary-btn2">Book a
                                                    Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 10 -->


                                <!-- start 11 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="dubai-mall.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img11.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="dubai-mall.php">Dubai</a></li>
                                                        <li><a href="dubai-mall.php">Dubai Mall </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="dubai-mall.php">Dubai Mall</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="dubai-mall.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 11 -->

                                <!-- start 12 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="dubai-aquarium.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img12.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="dubai-aquarium.php">Dubai</a></li>
                                                        <li><a href="dubai-aquarium.php">Aquarium</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="dubai-aquarium.php">Dubai Aquarium</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="dubai-aquarium.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 12 -->


                                <!-- start 13 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="city-late-night-view.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img13.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="city-late-night-view.php">Dubai</a></li>
                                                        <li><a href="city-late-night-view.php">Late Night Tour</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="city-late-night-view.php">City Late Night View</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="city-late-night-view.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end13 -->


                                <!-- start 14 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="water-funtain-night-show.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img14.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="water-funtain-night-show.php">Dubai</a></li>
                                                        <li><a href="water-funtain-night-show.php">Water Fountain night
                                                                Show </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="water-funtain-night-show.php">Water Fountain Late Night
                                                        Show</a>
                                                </h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="water-funtain-night-show.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 14 -->


                                <!-- start 15 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="al-mamzar-beach.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img15.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="al-mamzar-beach.php">Dubai</a></li>
                                                        <li><a href="al-mamzar-beach.php">Al Mamzar Beach</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="al-mamzar-beach.php">Al Mamzar Beach</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="al-mamzar-beach.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 15 -->

                                <!-- start 16 -->
                                <div class="col-lg-4 col-md-6">
                                    <div class="package-card">
                                        <div class="package-card-img-wrap">
                                            <a href="dubai-mall-top-view.php" class="card-img"><img
                                                    src="assets/img/home1/package-card-img16.webp" alt></a>
                                            <div class="batch">
                                                <span class="date">4 Days / 5 Night</span>
                                                <div class="location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18">
                                                        <path
                                                            d="M8.99939 0C5.40484 0 2.48047 2.92437 2.48047 6.51888C2.48047 10.9798 8.31426 17.5287 8.56264 17.8053C8.79594 18.0651 9.20326 18.0646 9.43613 17.8053C9.68451 17.5287 15.5183 10.9798 15.5183 6.51888C15.5182 2.92437 12.5939 0 8.99939 0ZM8.99939 9.79871C7.19088 9.79871 5.71959 8.32739 5.71959 6.51888C5.71959 4.71037 7.19091 3.23909 8.99939 3.23909C10.8079 3.23909 12.2791 4.71041 12.2791 6.51892C12.2791 8.32743 10.8079 9.79871 8.99939 9.79871Z">
                                                        </path>
                                                    </svg>
                                                    <ul class="location-list">
                                                        <li><a href="dubai-mall-top-view.php">Dubai</a></li>
                                                        <li><a href="dubai-mall-top-view.php">Dubai Mall Top View</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="package-card-content">
                                            <div class="card-content-top">
                                                <h5><a href="dubai-mall-top-view.php">Dubai Mall Top View With Burj
                                                        Khalifa</a></h5>

                                            </div>
                                            <div class="card-content-bottom">
                                                <div class="price-area">
                                                    <h6>Starting From:</h6>
                                                    <span>$000 <del>$000</del></span>
                                                    <p>TAXES INCL/PERS</p>
                                                </div>
                                                <a href="dubai-mall-top-view.php" class="primary-btn2">Book a Trip
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 18 18" fill="none">
                                                        <path
                                                            d="M8.15624 10.2261L7.70276 12.3534L5.60722 18L6.85097 17.7928L12.6612 10.1948C13.4812 10.1662 14.2764 10.1222 14.9674 10.054C18.1643 9.73783 17.9985 8.99997 17.9985 8.99997C17.9985 8.99997 18.1643 8.26211 14.9674 7.94594C14.2764 7.87745 13.4811 7.8335 12.6611 7.80518L6.851 0.206972L5.60722 -5.41705e-07L7.70276 5.64663L8.15624 7.77386C7.0917 7.78979 6.37132 7.81403 6.37132 7.81403C6.37132 7.81403 4.90278 7.84793 2.63059 8.35988L0.778036 5.79016L0.000253424 5.79016L0.554115 8.91458C0.454429 8.94514 0.454429 9.05483 0.554115 9.08539L0.000253144 12.2098L0.778036 12.2098L2.63059 9.64035C4.90278 10.1523 6.37132 10.1857 6.37132 10.1857C6.37132 10.1857 7.0917 10.2102 8.15624 10.2261Z">
                                                        </path>
                                                        <path
                                                            d="M12.0703 11.9318L12.0703 12.7706L8.97041 12.7706L8.97041 11.9318L12.0703 11.9318ZM12.0703 5.23292L12.0703 6.0714L8.97059 6.0714L8.97059 5.23292L12.0703 5.23292ZM9.97892 14.7465L9.97892 15.585L7.11389 15.585L7.11389 14.7465L9.97892 14.7465ZM9.97892 2.41846L9.97892 3.2572L7.11389 3.2572L7.11389 2.41846L9.97892 2.41846Z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 16 -->


                            </div>
                        </div>


                        <div class="tab-pane fade" id="Hotel" role="tabpanel" aria-labelledby="Hotel-tab">
                            <div class="row g-4">
                                <div class="col-xxl-4 col-md-6">
                                    <div class="room-suits-card two">
                                        <div class="row g-0">
                                            <div class="col-md-12">
                                                <div class="swiper hotel-img-slider">
                                                    <span class="batch">Breakfast included</span>
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel1.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel2.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel3.webp" alt>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination5"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="room-content">
                                                    <div class="content-top">
                                                        <div class="reviews">
                                                            <ul>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-half"></i></li>
                                                            </ul>
                                                            <span>4.5 reviews</span>
                                                        </div>
                                                        <h5 class="hotel-fort mt-3">Dubai Grand hotel by Fortune</h5>
                                                        <ul class="loaction-area">
                                                            <li><i class="bi bi-geo-alt"></i>Dubai</li>

                                                        </ul>
                                                        <ul class="facilisis">
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.683593 0.0562801C0.490234 0.123077 0.30039 0.288311 0.180859 0.485186L0.0859375 0.650419V7.20705V13.7637L0.163281 13.9043C0.251172 14.0695 0.423437 14.2383 0.595702 14.3297C0.711718 14.393 0.848827 14.3965 2.87382 14.407L5.02538 14.4176L5.11327 14.3297C5.21874 14.2242 5.22577 14.1012 5.13437 13.9887L5.06757 13.9043L2.93711 13.8867L0.80664 13.8691L0.711718 13.7707L0.61328 13.6758L0.602734 10.582L0.595702 7.4883H3.79492H6.99413V10.6875V13.8867H6.55468C6.30507 13.8867 6.08007 13.9043 6.03085 13.9254C5.85155 14.0063 5.83749 14.2875 6.00624 14.3754C6.05194 14.4035 6.8289 14.4141 8.39686 14.4141H10.7172L10.7277 15.8801C10.7383 17.3109 10.7418 17.3531 10.8156 17.4902C10.9035 17.6555 11.0758 17.8242 11.248 17.9156C11.364 17.9789 11.5117 17.9824 14.3242 17.9824H17.2773L17.4179 17.9051C17.6043 17.8066 17.766 17.6309 17.8539 17.4375C17.9242 17.2863 17.9277 17.2125 17.9277 15.3949C17.9277 13.2645 17.9312 13.2891 17.664 13.0254C17.5832 12.9445 17.4461 12.8496 17.3582 12.8145L17.1965 12.7547L17.1824 11.9215C17.1683 11.1797 17.1578 11.0672 17.0875 10.8457C16.8344 10.0582 16.2683 9.41486 15.5371 9.07736C15.2383 8.93673 14.8551 8.82423 14.6863 8.82423C14.4648 8.82423 14.4824 9.17228 14.4824 4.78479C14.4824 0.260185 14.5035 0.580107 14.2012 0.281281C13.8988 -0.02458 14.5246 3.05176e-05 7.26132 0.00354576C1.7664 0.00354576 0.803124 0.0140934 0.683593 0.0562801ZM7.00116 1.09339C7.01171 1.63831 7.01522 1.6594 7.09608 1.7262C7.20155 1.81409 7.36327 1.81057 7.45116 1.72268C7.51444 1.6594 7.52147 1.60667 7.52147 1.08987V0.527372H10.5801C13.2484 0.527372 13.6562 0.534405 13.7441 0.580107C13.9656 0.692608 13.9551 0.541435 13.9551 3.90237V6.96096L10.7488 6.95393L7.53905 6.94338L7.5285 4.8094L7.52147 2.67542L7.43007 2.6051C7.30702 2.51018 7.22968 2.5137 7.11015 2.61565L7.01171 2.70003L7.00116 4.83049L6.99413 6.96096H3.79492H0.595702V3.90237C0.595702 1.23753 0.602734 0.8262 0.648437 0.73831C0.760936 0.520342 0.602734 0.53089 3.94257 0.527372H6.9871L7.00116 1.09339ZM13.9551 8.14924V8.81017L13.6844 8.87345C12.7633 9.08439 11.9758 9.76994 11.6383 10.6453C11.4871 11.0426 11.459 11.257 11.459 12.041V12.7512L11.2937 12.8145C10.9492 12.9481 10.7207 13.2996 10.7207 13.7004V13.8867H9.12108H7.52147V10.6875V7.4883H10.7383H13.9551V8.14924ZM15.0027 9.4254C15.4668 9.56955 15.9801 9.93869 16.2437 10.3254C16.5918 10.8281 16.6621 11.1199 16.6621 12.0516V12.7652L16.4793 12.7547L16.2929 12.7441L16.2754 11.9883C16.2578 11.3836 16.2437 11.1973 16.191 11.0567C16.0152 10.5645 15.6531 10.1496 15.2136 9.93517C14.9465 9.80158 14.5668 9.70314 14.3242 9.70314C14.0816 9.70314 13.7019 9.80158 13.4347 9.93517C12.9953 10.1496 12.6332 10.5645 12.4574 11.0567C12.4047 11.1973 12.3906 11.3836 12.373 11.9883L12.3555 12.7441L12.1726 12.7547L11.9863 12.7652V12.0516C11.9863 11.2289 12.0144 11.0777 12.2394 10.6172C12.4926 10.0969 13.0445 9.61876 13.6 9.43947C14.0254 9.30236 14.5738 9.29533 15.0027 9.4254ZM14.9676 10.3922C15.2312 10.5223 15.4844 10.7824 15.6179 11.0637L15.7304 11.3027L15.741 12.0305L15.7515 12.7617H14.3242H12.8969L12.9074 12.0305L12.9179 11.3027L13.0304 11.0637C13.1676 10.7789 13.4207 10.5188 13.6879 10.3922C13.7933 10.343 13.8988 10.3008 13.9164 10.3008C13.9445 10.3008 13.9551 10.5504 13.9551 11.0707C13.9551 11.7949 13.9586 11.8442 14.0289 11.932C14.1203 12.0481 14.2855 12.0551 14.4015 11.9461C14.4824 11.8723 14.4824 11.8617 14.4824 11.0637V10.2551L14.6336 10.2797C14.7144 10.2938 14.8656 10.343 14.9676 10.3922ZM17.2457 13.3524C17.2879 13.384 17.3406 13.4473 17.3617 13.4895C17.3898 13.5422 17.4004 14.1188 17.4004 15.3949V17.2266L17.2984 17.3391L17.1965 17.4551H14.3277H11.459L11.364 17.3566L11.2656 17.2617L11.2551 15.4406C11.2515 14.4422 11.2551 13.5914 11.2621 13.5492C11.2726 13.5106 11.3254 13.4332 11.3746 13.384L11.4695 13.2891H14.3207C16.9679 13.2891 17.1789 13.2961 17.2457 13.3524Z" />
                                                                        <path
                                                                            d="M1.88029 3.66674C1.30022 3.8601 0.92053 4.33823 0.885373 4.92182C0.811545 6.21908 2.35139 6.92221 3.26193 6.00463C3.4799 5.78666 3.61349 5.52651 3.66271 5.22768C3.76115 4.64057 3.43068 4.01479 2.88576 3.75463C2.68889 3.65971 2.60803 3.64213 2.33732 3.63159C2.14045 3.62456 1.96818 3.63862 1.88029 3.66674ZM2.66428 4.23979C3.38146 4.59838 3.28303 5.63198 2.50959 5.85698C1.68693 6.09604 1.05412 5.09409 1.62365 4.45073C1.89787 4.13784 2.29865 4.05698 2.66428 4.23979Z" />
                                                                        <path
                                                                            d="M1.87695 4.86914C1.82773 4.91484 1.78906 4.9957 1.78906 5.04492C1.78906 5.09414 1.82773 5.175 1.87695 5.2207C1.9543 5.30156 1.98945 5.30859 2.26367 5.30859C2.61172 5.30859 2.70312 5.25586 2.70312 5.04844C2.70312 4.85156 2.58008 4.78125 2.23906 4.78125C1.99297 4.78125 1.95078 4.7918 1.87695 4.86914Z" />
                                                                        <path
                                                                            d="M8.87639 3.66674C8.29631 3.8601 7.91662 4.33823 7.88147 4.92182C7.80764 6.21908 9.34748 6.92221 10.258 6.00463C10.476 5.78666 10.6096 5.52651 10.6588 5.22768C10.7572 4.64057 10.4268 4.01479 9.88185 3.75463C9.68498 3.65971 9.60412 3.64213 9.33342 3.63159C9.13654 3.62456 8.96428 3.63862 8.87639 3.66674ZM9.66037 4.23979C10.3776 4.59838 10.2791 5.63198 9.50568 5.85698C8.68303 6.09604 8.05022 5.09409 8.61975 4.45073C8.89397 4.13784 9.29475 4.05698 9.66037 4.23979Z" />
                                                                        <path
                                                                            d="M8.87305 4.86914C8.82383 4.91484 8.78516 4.9957 8.78516 5.04492C8.78516 5.09414 8.82383 5.175 8.87305 5.2207C8.95039 5.30156 8.98555 5.30859 9.25976 5.30859C9.60781 5.30859 9.69922 5.25586 9.69922 5.04844C9.69922 4.85156 9.57617 4.78125 9.23516 4.78125C8.98906 4.78125 8.94687 4.7918 8.87305 4.86914Z" />
                                                                        <path
                                                                            d="M8.92773 10.6313C8.51992 10.7438 8.18594 11.018 8.00664 11.3836C7.89766 11.6051 7.89062 11.6438 7.89062 11.9883C7.89062 12.3363 7.89766 12.375 8.00664 12.593C8.15078 12.8883 8.45664 13.1801 8.7414 13.2926C8.90312 13.3594 9.01562 13.3734 9.28281 13.377C9.59922 13.377 9.63086 13.3699 9.88398 13.2434C10.7207 12.832 10.9316 11.7668 10.3199 11.0566C10.0035 10.684 9.39883 10.5012 8.92773 10.6313ZM9.64492 11.1973C10.0949 11.4117 10.2777 11.9707 10.0387 12.4031C9.81015 12.818 9.325 12.9797 8.91015 12.7828C8.2 12.4488 8.2457 11.4328 8.98398 11.1586C9.15273 11.0953 9.46914 11.1164 9.64492 11.1973Z" />
                                                                        <path
                                                                            d="M8.85771 11.8546C8.71005 12.0164 8.812 12.2449 9.05458 12.2906C9.24091 12.3257 9.55731 12.2836 9.63466 12.2132C9.72255 12.1324 9.72606 11.9144 9.63817 11.8371C9.58896 11.7914 9.50106 11.7773 9.25146 11.7773C8.96669 11.7773 8.92099 11.7843 8.85771 11.8546Z" />
                                                                        <path
                                                                            d="M14.1098 13.676C13.7512 13.7498 13.3961 14.0346 13.2414 14.3721C13.1816 14.5022 13.1641 14.6041 13.1641 14.8537C13.1641 15.244 13.2344 15.4162 13.5156 15.7115L13.709 15.9154V16.1756C13.709 16.4779 13.7512 16.5764 13.9199 16.6924C14.0324 16.7662 14.0746 16.7733 14.384 16.7627C14.7039 16.7522 14.7285 16.7451 14.8305 16.6502C14.9605 16.5272 15.0098 16.369 15.0098 16.0912C15.0098 15.8944 15.0168 15.8768 15.1644 15.7326C15.2523 15.6483 15.3648 15.4971 15.4211 15.3951C15.509 15.2229 15.5195 15.1701 15.5195 14.8537C15.5195 14.5408 15.509 14.4846 15.4246 14.3229C15.3016 14.0908 14.9887 13.8061 14.7742 13.7322C14.5598 13.6584 14.2926 13.6373 14.1098 13.676ZM14.5281 14.2069C14.6934 14.2526 14.9008 14.4283 14.9605 14.5795C14.9887 14.6428 15.0098 14.7658 15.0098 14.8537C15.0098 14.9416 14.9887 15.0647 14.9605 15.1279C14.9184 15.2299 14.8586 15.2897 14.5633 15.5393C14.4895 15.599 14.4824 15.6342 14.4824 15.9225V16.2424H14.3629H14.2434L14.2293 15.9225C14.2187 15.5744 14.2434 15.6166 13.9199 15.367C13.5191 15.0612 13.6352 14.3932 14.1203 14.2209C14.2855 14.1612 14.3559 14.1576 14.5281 14.2069Z" />
                                                                        <path
                                                                            d="M1.93164 10.6313C1.52383 10.7438 1.18984 11.018 1.01055 11.3836C0.901562 11.6051 0.894531 11.6438 0.894531 11.9883C0.894531 12.3363 0.901562 12.375 1.01055 12.593C1.15469 12.8883 1.46055 13.1801 1.74531 13.2926C1.90703 13.3594 2.01953 13.3734 2.28672 13.377C2.60312 13.377 2.63476 13.3699 2.88789 13.2434C3.72461 12.832 3.93554 11.7668 3.32382 11.0566C3.00742 10.684 2.40273 10.5012 1.93164 10.6313ZM2.64883 11.1973C3.09882 11.4117 3.28164 11.9707 3.04257 12.4031C2.81406 12.818 2.3289 12.9797 1.91406 12.7828C1.20391 12.4488 1.24961 11.4328 1.98789 11.1586C2.15664 11.0953 2.47304 11.1164 2.64883 11.1973Z" />
                                                                        <path
                                                                            d="M1.86161 11.8546C1.71396 12.0164 1.81591 12.2449 2.05849 12.2906C2.24482 12.3257 2.56122 12.2836 2.63856 12.2132C2.72645 12.1324 2.72997 11.9144 2.64208 11.8371C2.59286 11.7914 2.50497 11.7773 2.25536 11.7773C1.9706 11.7773 1.92489 11.7843 1.86161 11.8546Z" />
                                                                    </g>
                                                                </svg> 24hrs Room services
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <path
                                                                        d="M9.20926 0.0478783C9.16707 0.076004 9.09676 0.181473 9.05106 0.283426C8.98075 0.438112 8.96668 0.529518 8.96668 0.803738C8.96668 1.15882 9.01239 1.29592 9.20926 1.53147L9.29364 1.63342L9.15653 1.91116C8.91395 2.39983 8.8577 2.86389 8.98426 3.34905C9.10731 3.83069 9.40614 4.28772 9.78934 4.576L9.99676 4.73068L9.65574 5.26506L9.31824 5.79592L9.037 5.78889L8.75575 5.77834L8.42176 5.2967C8.01395 4.70959 7.9577 4.64983 7.73622 4.54436C7.53231 4.44943 7.21942 4.43537 7.00497 4.5092C6.56551 4.6674 6.29481 5.19475 6.42489 5.64474C6.46005 5.76076 6.63583 6.04553 6.9452 6.48498C7.85926 7.77873 7.76083 7.7049 8.60809 7.72248L9.1952 7.73654V8.24982V8.7631L8.51317 9.44865C7.60614 10.3697 7.67294 10.1799 7.65536 11.8252L7.64129 13.0908L7.40926 13.1963C6.89598 13.4283 6.55145 13.8502 6.43895 14.3811L6.41786 14.4795H5.87645H5.33153L5.31044 14.2756C5.20849 13.3229 4.65653 12.6971 3.73896 12.4967L3.64052 12.4756V10.1026C3.64052 8.79826 3.64755 7.72951 3.6581 7.72951C3.66513 7.72951 3.83388 7.81388 4.02724 7.91232C4.35771 8.08459 4.39989 8.09865 4.61786 8.09513C5.01864 8.09162 5.34559 7.89123 5.51786 7.5467C5.69364 7.19513 5.60927 6.73107 5.3245 6.48146C5.17684 6.35139 1.45732 4.2385 1.27099 4.17873C1.08466 4.11897 0.704976 4.15061 0.529195 4.24201C0.363961 4.32639 0.160055 4.53381 0.0686488 4.70607C-0.026273 4.88889 -0.0227574 5.31076 0.0791956 5.49709C0.198727 5.71857 0.335836 5.82404 0.996772 6.20373L1.61904 6.55529L1.63662 7.91935L1.65419 9.28341L1.75263 9.36779C1.87216 9.46974 1.94951 9.47326 2.07255 9.37833L2.16396 9.30802V8.09162C2.16396 7.36037 2.17802 6.88576 2.1956 6.89279C2.21318 6.89631 2.42763 7.01232 2.67021 7.14943L3.11318 7.39552V9.93732V12.4791L2.64911 12.4686L2.18154 12.458L2.16396 11.3928C2.14638 10.3873 2.14286 10.324 2.07958 10.2748C1.97763 10.201 1.79833 10.2115 1.72099 10.2994C1.65771 10.3697 1.65419 10.4471 1.64365 11.4209L1.6331 12.4721L1.07412 12.4826C0.574898 12.4932 0.504586 12.5002 0.420211 12.567C0.279586 12.669 0.195211 12.7955 0.160055 12.9537C0.117867 13.133 0.117867 17.0564 0.160055 17.2357C0.202242 17.4256 0.293648 17.5416 0.476461 17.633L0.631148 17.7139H8.56942C14.212 17.7139 16.5569 17.7033 16.6905 17.6752C17.1546 17.5803 17.6221 17.2146 17.819 16.7928C18.2444 15.8928 17.7839 14.8416 16.8346 14.5498C16.6413 14.49 16.5077 14.4795 15.9944 14.4795C15.6569 14.4795 15.3827 14.4725 15.3827 14.4619C15.3827 14.4514 15.5444 14.0119 15.7378 13.4846C16.1104 12.4861 16.1526 12.2998 16.0542 12.11C16.026 12.0572 15.9522 11.9869 15.896 11.9483C15.7694 11.8744 14.8202 11.5299 13.8534 11.21C13.4878 11.0869 13.1819 10.985 13.1749 10.9815C13.1714 10.9779 13.0729 10.5033 12.9604 9.93029L12.7565 8.88615L12.8936 8.17599C12.971 7.78576 13.0378 7.46232 13.0448 7.45529C13.0518 7.44826 13.1046 7.45177 13.1643 7.46584L13.2663 7.48693L13.2803 8.16193C13.2909 8.83341 13.2909 8.83693 13.3928 9.02326C13.5827 9.36427 13.9096 9.54357 14.2858 9.51544C14.5389 9.49786 14.7288 9.40646 14.9151 9.21661C15.1647 8.95646 15.1788 8.87912 15.1647 7.63459C15.1542 6.41467 15.1542 6.41818 14.8624 6.13693C14.7147 5.99279 14.4968 5.9049 13.3155 5.51115L12.7811 5.33185L12.5702 5.03654C12.4542 4.87482 12.3593 4.73068 12.3593 4.72014C12.3593 4.70959 12.4401 4.62522 12.5421 4.53732C13.0378 4.09084 13.3155 3.34553 13.312 2.45608C13.312 2.19944 13.2944 1.97444 13.2557 1.84085C13.08 1.16585 12.63 0.691236 11.9233 0.427567C11.8249 0.388893 11.5542 0.364285 11.0585 0.343191C10.2956 0.315065 10.1233 0.283426 9.66278 0.100613C9.36395 -0.0189171 9.31121 -0.0259495 9.20926 0.0478783ZM9.6909 0.684206C10.0179 0.796705 10.3554 0.845924 11.0233 0.870533C11.6948 0.895144 11.7124 0.898659 11.9409 1.00764C12.2749 1.16936 12.4753 1.35921 12.6229 1.65803C12.7565 1.93225 12.8339 2.3717 12.7882 2.59319L12.7636 2.71272L12.4401 2.41389C11.9514 1.95686 11.6948 1.83733 11.0655 1.77053C10.3729 1.70022 9.68035 1.38381 9.5327 1.07092C9.47293 0.944363 9.45535 0.627956 9.50809 0.627956C9.52567 0.627956 9.60653 0.652565 9.6909 0.684206ZM10.5382 2.20998C10.6999 2.24514 10.96 2.29436 11.1218 2.31194C11.4593 2.35413 11.6737 2.4385 11.8917 2.6178C12.0675 2.76194 12.3065 3.08537 12.4647 3.39826L12.5772 3.61975L12.4788 3.78498C12.0675 4.48811 11.1429 4.73068 10.387 4.33342C10.0952 4.17873 9.74012 3.82014 9.60301 3.53537C9.39559 3.1135 9.3991 2.61077 9.61707 2.15725L9.72254 1.93577L9.98621 2.03772C10.1304 2.09397 10.38 2.17131 10.5382 2.20998ZM1.22529 4.73068C1.77021 5.01193 4.9413 6.84006 5.00458 6.90685C5.14872 7.06857 5.08544 7.3674 4.88153 7.50099C4.82177 7.53966 4.71981 7.56779 4.62489 7.56779C4.48075 7.56779 4.27685 7.45881 2.55419 6.48146C0.574898 5.35646 0.511617 5.31428 0.511617 5.09982C0.511617 4.7799 0.915913 4.56897 1.22529 4.73068ZM10.8546 5.03303C11.1077 5.06818 11.5331 5.04006 11.7827 4.96623C11.8425 4.95217 11.8811 4.98029 11.9866 5.12092C12.0569 5.21584 12.1132 5.30373 12.1132 5.31428C12.1132 5.32482 12.078 5.33889 12.0323 5.35295C11.9022 5.38459 11.6807 5.59904 11.5858 5.78185C11.4663 6.01389 11.4628 6.41115 11.5753 6.62209C11.7054 6.86818 11.9268 7.04045 12.2503 7.14943C12.528 7.24084 12.5421 7.24787 12.5245 7.33927C12.5139 7.38849 12.4542 7.69435 12.3909 8.01779L12.2749 8.60841H10.9987H9.72254V7.37443V6.13693L10.1022 5.54631C10.3764 5.11389 10.4925 4.95568 10.5311 4.97326C10.5593 4.98381 10.7069 5.00842 10.8546 5.03303ZM7.56747 5.04006C7.60965 5.0717 7.81004 5.33537 8.01043 5.63068C8.21434 5.92248 8.41473 6.1967 8.45692 6.23537C8.5202 6.29162 8.59403 6.3092 8.86473 6.31623L9.1952 6.33029V6.76623V7.20216H8.67137C8.22489 7.20216 8.137 7.19162 8.07723 7.13888C7.94715 7.02638 6.9663 5.60256 6.93465 5.47951C6.89247 5.32482 6.96981 5.1385 7.11395 5.05061C7.23348 4.97326 7.46903 4.96975 7.56747 5.04006ZM13.4667 6.11935C14.1417 6.35139 14.444 6.47092 14.5214 6.53771L14.6268 6.63263L14.6374 7.64865C14.6479 8.53107 14.6409 8.67521 14.5917 8.77013C14.4792 8.98107 14.212 9.0549 14.0081 8.93536C13.8218 8.82638 13.8007 8.72443 13.8007 7.94748C13.8007 7.30412 13.7936 7.24084 13.7303 7.15998C13.6776 7.09318 13.4983 7.01584 12.9534 6.83302C12.1729 6.56935 12.0534 6.49904 12.0182 6.28107C11.9796 6.02443 12.1659 5.79592 12.412 5.79592C12.4718 5.79592 12.9428 5.94006 13.4667 6.11935ZM12.1483 9.16388C12.1483 9.24122 11.8776 9.63146 11.6983 9.81427C11.4452 10.0744 11.1218 10.2854 10.2147 10.7881C9.81746 11.0061 9.45184 11.217 9.3991 11.2557C9.21278 11.3928 9.1952 11.4877 9.1952 12.2963V13.0381H8.68192H8.16864L8.1827 11.8322C8.19325 10.6791 8.19676 10.6229 8.27059 10.4893C8.30926 10.4119 8.62215 10.0744 8.95965 9.74044L9.57137 9.13576H10.8616C11.5682 9.13576 12.1483 9.14982 12.1483 9.16388ZM12.5139 10.4014C12.6475 11.1186 12.6932 11.2592 12.8163 11.3611C12.8796 11.4174 13.1714 11.5334 13.5792 11.667C13.9413 11.79 14.2647 11.899 14.2964 11.9166C14.3491 11.9447 14.335 12.001 14.1733 12.4229C14.0714 12.683 13.98 12.9045 13.9694 12.915C13.9589 12.9256 13.8639 12.9045 13.762 12.8658C13.6565 12.8272 13.1292 12.6443 12.5878 12.458C12.0499 12.2752 11.5682 12.0994 11.5225 12.0678C11.4698 12.0326 11.3468 11.8217 11.1921 11.5018C11.0585 11.2205 10.953 10.9885 10.96 10.985C10.9671 10.9779 11.0971 10.9006 11.2518 10.8092C11.6983 10.5385 12.2151 10.099 12.3346 9.8881C12.3522 9.85646 12.3804 9.84591 12.3944 9.86349C12.4085 9.87755 12.4647 10.1201 12.5139 10.4014ZM10.735 11.7654C10.8932 12.0959 11.0339 12.335 11.1147 12.4158C11.2624 12.5635 11.3643 12.6022 12.7846 13.0873L13.7901 13.4318L13.8112 13.7518C13.8253 13.9311 13.8569 14.1525 13.8886 14.251C13.9167 14.3459 13.9413 14.4373 13.9413 14.4514C13.9413 14.469 13.6178 14.4795 13.2206 14.4795C12.4999 14.4795 12.4964 14.4795 12.412 14.5674C12.2749 14.701 12.2995 14.8697 12.4682 14.9541C12.5526 14.9998 12.8796 15.0068 14.5671 15.0068C16.8276 15.0068 16.7608 14.9998 17.0702 15.2775C17.3409 15.5201 17.4393 15.7346 17.4393 16.0791C17.4393 16.29 17.4217 16.399 17.362 16.5221C17.2565 16.7541 17.0596 16.958 16.8311 17.0705L16.6307 17.1689L10.9811 17.1795L5.32802 17.1865V16.7646V16.3428H10.9073H16.4866L16.5675 16.2654C16.6659 16.174 16.6729 16.0299 16.5815 15.9174L16.5147 15.833L10.9214 15.8225L5.32802 15.8154V15.4111V15.0068H8.34442C11.5577 15.0068 11.4874 15.0104 11.5718 14.8346C11.6175 14.7467 11.5788 14.5709 11.505 14.5217C11.4804 14.5076 11.0761 14.49 10.6014 14.4795L9.74012 14.4619V13.0592V11.66L10.0917 11.4561C10.285 11.3436 10.4538 11.2486 10.4643 11.2486C10.4749 11.2451 10.5979 11.4807 10.735 11.7654ZM15.2456 12.2506L15.5901 12.3772L15.5268 12.5389C15.4917 12.6303 15.3159 13.1049 15.1331 13.59C14.8413 14.3881 14.7991 14.4795 14.7288 14.4795C14.6866 14.4795 14.6233 14.469 14.5917 14.4584C14.4686 14.4092 14.328 13.9803 14.328 13.6498C14.328 13.5408 14.3983 13.3088 14.56 12.8869C14.8659 12.0854 14.8518 12.124 14.8764 12.124C14.8905 12.124 15.0557 12.1803 15.2456 12.2506ZM3.96747 13.1154C4.22411 13.2385 4.52997 13.5268 4.64247 13.7553C4.77958 14.0436 4.80067 14.3002 4.80067 15.7873V17.1865H2.74755C0.908882 17.1865 0.694429 17.1795 0.673335 17.1303C0.64521 17.0564 0.64521 13.1295 0.673335 13.0557C0.694429 13.0065 0.842085 12.9994 2.23076 13.01L3.76357 13.0205L3.96747 13.1154ZM9.1952 14.0225V14.4795H8.08778C6.84325 14.4795 6.91708 14.4971 7.04715 14.2158C7.16317 13.9592 7.48661 13.6955 7.78192 13.6147C7.88387 13.5865 8.18622 13.569 8.57293 13.569L9.1952 13.5654V14.0225Z" />
                                                                    <path
                                                                        d="M2.09375 14.258C1.9918 14.2967 1.88281 14.4232 1.88281 14.4971C1.88281 14.5393 1.91445 14.6166 1.95664 14.6693C2.02695 14.7572 2.04102 14.7607 2.41367 14.7607C2.75117 14.7607 2.80391 14.7537 2.86719 14.6904C2.95508 14.6025 2.95859 14.4408 2.8707 14.3354C2.81094 14.258 2.77226 14.251 2.47344 14.2439C2.29414 14.2404 2.12187 14.2439 2.09375 14.258Z" />
                                                                    <path
                                                                        d="M1.9707 15.5869C1.92148 15.6326 1.88281 15.7135 1.88281 15.7627C1.88281 15.8119 1.92148 15.8928 1.9707 15.9385C2.04805 16.0193 2.07969 16.0264 2.40312 16.0264C2.70195 16.0264 2.76523 16.0158 2.84609 15.9525C2.96562 15.8576 2.97265 15.6748 2.86015 15.5693C2.79336 15.5096 2.73711 15.499 2.4207 15.499C2.07969 15.499 2.04805 15.5061 1.9707 15.5869Z" />
                                                                </svg> Gym
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M2.96092 0.994803C2.83436 1.06512 2.63748 1.34637 2.56365 1.56433C2.44412 1.9159 2.48631 2.38347 2.66561 2.67175C2.69373 2.72097 2.77811 2.83347 2.85193 2.92136C3.12615 3.25886 3.12967 3.53308 2.86248 3.8987C2.72537 4.08855 2.76404 4.31706 2.95389 4.4155C3.21053 4.54558 3.43553 4.39441 3.64646 3.94792C3.72732 3.77214 3.74139 3.70183 3.74139 3.41003C3.74139 3.11824 3.72732 3.04792 3.64646 2.87214C3.59373 2.75613 3.48475 2.59089 3.4074 2.49597C3.12615 2.15847 3.11912 1.88425 3.38982 1.51511C3.43904 1.44832 3.47771 1.36043 3.47771 1.31472C3.47771 1.04402 3.18943 0.868241 2.96092 0.994803Z" />
                                                                        <path
                                                                            d="M9.36717 2.03909C8.67108 2.17971 8.06639 2.69651 7.83788 3.35041C7.61991 3.97268 7.7078 4.68283 8.06991 5.1926L8.18944 5.36135L7.7078 5.38596C7.44061 5.3965 7.12772 5.43518 7.01171 5.46682C6.72343 5.54416 6.33319 5.73752 6.11874 5.90627C6.0203 5.98361 5.93241 6.04689 5.92538 6.04689C5.91483 6.04689 5.71796 5.81135 5.48593 5.52307C5.2539 5.2383 5.03944 4.99221 5.0078 4.97815C4.89882 4.93596 4.71601 4.95705 4.6457 5.01682C4.52616 5.12229 3.43632 6.50744 3.30976 6.71486C2.96875 7.28088 2.97226 8.05783 3.32031 8.58165C3.36953 8.65548 3.4082 8.72579 3.4082 8.73634C3.4082 8.74689 3.23593 8.75392 3.02851 8.75392H2.64531L2.34296 8.94376C1.9 9.2215 1.66797 9.41134 1.32695 9.76642C0.69414 10.4309 0.261718 11.2711 0.0789061 12.1922C-0.00546871 12.6176 -0.00546871 13.5773 0.0789061 13.9992C0.18789 14.5441 0.462109 15.2402 0.729296 15.6586C1.02812 16.1262 1.59414 16.7449 1.92461 16.9629L2.06172 17.0508L8.50936 17.0438L14.957 17.0332L15.3086 16.9383C16.1875 16.6957 16.9011 16.1789 17.4144 15.416C17.541 15.2262 17.5761 15.1453 17.5761 15.0293C17.5761 14.8219 17.4496 14.6953 17.2457 14.6953C17.0629 14.6988 17.0312 14.7234 16.8133 15.0469C16.5355 15.4617 16.1383 15.8133 15.7023 16.0277C15.0976 16.3301 14.9605 16.3477 13.1465 16.3477H11.6172L11.7402 16.2527C12.7808 15.4477 13.3785 14.1645 13.3082 12.8742C13.2836 12.4488 13.2308 12.2625 13.1113 12.1992C13.0726 12.1781 12.8933 12.143 12.7176 12.1219C12.1058 12.0445 11.3043 12.1816 10.6926 12.4629C10.5484 12.5297 10.4254 12.5859 10.4183 12.5859C10.4148 12.5859 10.3832 12.5016 10.348 12.3996C10.1722 11.8652 9.75389 11.2254 9.30741 10.8106L9.0578 10.5785L11.9898 10.5926C15.3086 10.6031 15.0449 10.582 15.7093 10.9055C16.0328 11.0602 16.1172 11.1199 16.4195 11.4223C16.6129 11.6156 16.8062 11.8477 16.873 11.9637C16.9328 12.0727 17.0242 12.1957 17.0734 12.2344C17.2879 12.4031 17.6113 12.2414 17.6113 11.9672C17.6113 11.6824 17.091 10.9969 16.5847 10.6172C16.2965 10.3992 15.8008 10.1356 15.5125 10.0512L15.3648 10.009L15.6074 9.74532C15.8781 9.45353 16.082 9.09142 16.2121 8.68361C16.2789 8.46564 16.2929 8.34259 16.2929 7.98048C16.2929 7.47072 16.2261 7.20002 15.9836 6.73244C15.7832 6.34221 15.3472 5.90627 14.957 5.70588C14.4789 5.45979 14.2574 5.40705 13.6351 5.38596L13.0867 5.37189L13.2273 5.16096C13.6211 4.57033 13.6703 3.80393 13.3539 3.14299C13.1922 2.80549 12.7633 2.37307 12.4328 2.21838C12.0285 2.02503 11.8492 2.00393 10.6152 2.00745C10.007 2.01096 9.44452 2.02503 9.36717 2.03909ZM12.039 2.80901C12.1867 2.86877 12.3133 2.95666 12.4644 3.10784C12.7492 3.3926 12.8441 3.62815 12.8441 4.04299C12.8441 4.45783 12.7492 4.69338 12.4644 4.97815C12.3133 5.12932 12.1867 5.21721 12.039 5.27697C11.8351 5.35783 11.7929 5.36135 10.7418 5.37189C10.0808 5.37893 9.58866 5.36838 9.4867 5.34729C8.77655 5.1926 8.31249 4.5176 8.43553 3.82502C8.53045 3.31877 8.84334 2.94963 9.33553 2.78088C9.53241 2.71057 9.60975 2.70706 10.6855 2.7176C11.8 2.72463 11.8316 2.72815 12.039 2.80901ZM5.32421 6.45119C5.5703 6.76056 5.81288 7.09806 5.85858 7.20002C6.02733 7.55861 5.96054 8.0297 5.7039 8.33205C5.58437 8.46916 5.29609 8.68361 5.22929 8.68361C5.21523 8.68361 5.20116 8.40587 5.20116 8.06486V7.44611L5.09921 7.34416C5.0289 7.27384 4.95859 7.2422 4.88476 7.2422C4.75116 7.2422 4.58945 7.32306 4.54726 7.40744C4.52968 7.44259 4.50859 7.74142 4.49804 8.07541L4.48046 8.68009L4.36796 8.62736C4.18163 8.53595 3.99179 8.34962 3.88281 8.15275C3.78788 7.98048 3.77734 7.93126 3.77734 7.6465C3.77734 7.38986 3.7914 7.29845 3.85468 7.17189C3.93202 7.02072 4.84257 5.85353 4.86718 5.87814C4.87421 5.88517 5.08163 6.14182 5.32421 6.45119ZM14.1801 6.15236C14.5281 6.24025 14.7918 6.39142 15.0449 6.64455C15.298 6.89767 15.4492 7.16134 15.5371 7.50939C15.625 7.85392 15.625 8.10705 15.5371 8.45158C15.4492 8.79962 15.298 9.06329 15.0449 9.31642C14.7918 9.56954 14.5281 9.72072 14.1801 9.80861C13.9199 9.8754 13.7863 9.87892 11.2058 9.87892H8.49881L8.26678 9.64689C7.97147 9.35509 7.69022 9.13712 7.33163 8.92267L7.05389 8.75392H6.66718H6.28397L6.34726 8.65548C6.55819 8.33908 6.6496 8.0297 6.65311 7.6465C6.65663 7.33361 6.5828 7.03478 6.44218 6.78517L6.35429 6.62697L6.4914 6.50744C6.65663 6.3633 7.06093 6.16642 7.29647 6.12424C7.39491 6.10314 8.83983 6.08908 10.689 6.08557C13.7933 6.08205 13.9199 6.08557 14.1801 6.15236ZM7.15233 9.63986C7.43007 9.81915 8.04881 10.3992 8.17186 10.5926L8.23514 10.691L8.00663 10.9266C7.60233 11.3484 7.31053 11.8055 7.11718 12.3223C7.06444 12.4559 7.01874 12.5719 7.01522 12.5789C7.00819 12.5824 6.88866 12.5332 6.74452 12.4664C6.15038 12.1852 5.32773 12.0445 4.71952 12.1219C4.38554 12.1606 4.29062 12.1992 4.22031 12.3117C4.15351 12.4207 4.10429 12.9586 4.1289 13.3066C4.21327 14.4844 4.74062 15.4828 5.67577 16.2316L5.8164 16.3441L4.03046 16.3477H2.24101L1.93515 16.0418C1.56953 15.6727 1.35859 15.3844 1.14765 14.959C0.46914 13.602 0.574608 12.034 1.43242 10.7402C1.65742 10.4063 2.16718 9.90001 2.52929 9.65743L2.82812 9.45704H4.8496H6.8746L7.15233 9.63986ZM8.91717 11.3977C9.28983 11.7914 9.53592 12.1887 9.69764 12.6738L9.80311 12.9902L9.52889 13.2715C9.21952 13.5914 8.98045 13.9148 8.83631 14.2102C8.78006 14.3227 8.72733 14.4141 8.71678 14.4141C8.70624 14.4141 8.67108 14.3508 8.63592 14.2734C8.50936 13.9992 8.22108 13.602 7.93983 13.3066L7.65155 13.0078L7.69374 12.8109C7.80975 12.2977 8.50585 11.25 8.73085 11.25C8.75546 11.25 8.83631 11.3168 8.91717 11.3977ZM5.87265 12.8988C6.4914 13.057 6.99764 13.3488 7.43358 13.7953C8.02421 14.4035 8.36522 15.2332 8.36522 16.0734V16.3477H8.10507C7.79569 16.3477 7.33514 16.2703 7.04686 16.1719C5.77421 15.7324 4.92343 14.6074 4.82851 13.2293C4.79335 12.7652 4.77929 12.7828 5.22929 12.8074C5.43671 12.8215 5.72499 12.8602 5.87265 12.8988ZM12.5945 13.2012C12.5664 14.734 11.4273 16.0277 9.87342 16.2984C9.70467 16.3266 9.45506 16.3477 9.32498 16.3406L9.08592 16.3301L9.07538 16.1191C9.06131 15.859 9.12108 15.4266 9.216 15.1207C9.63084 13.7566 10.9527 12.7793 12.3379 12.8074L12.6015 12.8145L12.5945 13.2012Z" />
                                                                        <path
                                                                            d="M1.10141 2.39074C0.922118 2.46106 0.693602 2.85129 0.630321 3.1923C0.563524 3.57199 0.697118 4.02199 0.960789 4.31379C1.24907 4.63722 1.26313 4.96418 0.999461 5.28058C0.809618 5.5091 0.929149 5.82199 1.22095 5.86066C1.36509 5.88175 1.37915 5.87472 1.54087 5.70597C1.77641 5.45988 1.87485 5.20324 1.87485 4.81652C1.87485 4.44035 1.78696 4.20832 1.5479 3.92355C1.25962 3.58605 1.23852 3.2802 1.4811 2.97434C1.63579 2.78098 1.63579 2.59465 1.4811 2.45754C1.36509 2.35559 1.24555 2.33098 1.10141 2.39074Z" />
                                                                        <path
                                                                            d="M17.4727 13.1977C17.1668 13.3664 17.2969 13.8516 17.6449 13.8516C17.8242 13.8516 17.9965 13.6793 17.9965 13.5035C17.9965 13.2398 17.7047 13.0676 17.4727 13.1977Z" />
                                                                    </g>
                                                                </svg> Spa
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 16">
                                                                    <path
                                                                        d="M12.0937 0.0562334C11.9531 0.126546 11.8371 0.239046 11.7668 0.369123C11.714 0.46053 11.707 0.615218 11.707 1.55037C11.707 2.56287 11.7105 2.63318 11.7738 2.7035C11.8652 2.80545 12.041 2.80193 12.1394 2.69646C12.2168 2.61561 12.2168 2.591 12.2168 1.61365C12.2168 1.06522 12.2308 0.594124 12.2449 0.569514C12.2695 0.534358 12.8144 0.527327 14.857 0.534358L17.4375 0.544905L17.448 3.10779C17.4515 4.97107 17.4445 5.68474 17.4164 5.71638C17.3601 5.78318 12.3258 5.79021 12.259 5.72341C12.2273 5.69177 12.2168 5.46326 12.2168 4.9113C12.2168 4.4367 12.2027 4.11677 12.1781 4.07459C12.1254 3.96912 11.9777 3.92693 11.8582 3.97615C11.7035 4.03943 11.6824 4.18006 11.6965 5.02732C11.707 5.75857 11.7105 5.79021 11.7949 5.94138C11.8476 6.0363 11.939 6.12771 12.0234 6.17693C12.1605 6.25427 12.1887 6.25779 13.2293 6.25779H14.291V7.80466C14.291 9.05622 14.284 9.35153 14.2453 9.35153C14.0941 9.35153 13.5597 9.17927 13.2926 9.04567C13.1203 8.9613 12.5051 8.56755 11.9215 8.17732C10.6137 7.29138 10.3183 7.14021 9.61522 6.97497C9.39022 6.92575 9.09842 6.91169 7.59374 6.90114C6.42304 6.8906 5.69179 6.89763 5.40351 6.92575C4.46835 7.01013 3.77578 7.32302 3.02343 8.00153C2.41875 8.54294 1.96875 8.782 1.20234 8.9613C0.956249 9.02106 0.692577 9.10192 0.611718 9.14059C0.418359 9.24255 0.214453 9.46052 0.0984373 9.69606L0 9.89645V11.3906C0 12.7441 0.00703124 12.8953 0.0597655 12.9972C0.175781 13.2047 0.323437 13.3066 0.878905 13.5527L1.43086 13.8023L1.5082 14.0132C1.62422 14.3261 1.74375 14.5125 1.96523 14.7234C2.78789 15.5004 4.14843 15.2437 4.64062 14.2207L4.76718 13.957H9.01756H13.2644L13.391 14.2242C13.5914 14.6496 13.9957 14.9906 14.4492 15.1207C14.6988 15.191 15.2086 15.1769 15.4511 15.0925C15.8836 14.9449 16.2527 14.6109 16.4461 14.1996L16.5551 13.964L16.9066 13.95C17.114 13.9394 17.3144 13.9078 17.3918 13.8761C17.6097 13.7847 17.8312 13.5527 17.9121 13.3312C17.9824 13.1449 17.9859 13.0781 17.9754 12.2343C17.9613 11.2078 17.9472 11.1515 17.6273 10.6699C17.2371 10.0898 16.8468 9.87184 15.8308 9.66794L15.6269 9.62927V7.94528V6.2613L16.6043 6.25076L17.5851 6.24021L17.7152 6.13826C17.789 6.08201 17.8804 5.96951 17.9156 5.88513C17.9824 5.74099 17.9824 5.62498 17.9754 3.08318L17.9648 0.435921L17.8699 0.29178C17.8136 0.207405 17.7152 0.119514 17.6238 0.0738115C17.4691 -1.62125e-05 17.448 -1.62125e-05 14.8324 -1.62125e-05C12.5156 -1.62125e-05 12.1851 0.00701523 12.0937 0.0562334ZM15.0996 7.89607C15.0996 9.43591 15.0961 9.53083 15.0398 9.51677C15.0047 9.50622 14.9344 9.48864 14.8816 9.47809L14.7832 9.457V7.87849C14.7832 7.01365 14.7937 6.29294 14.8078 6.2824C14.8183 6.26833 14.8922 6.25779 14.966 6.25779H15.0996V7.89607ZM9.49217 7.48474C9.89647 7.56911 10.3078 7.72732 10.6101 7.91716C10.7402 8.00153 11.2676 8.3531 11.7844 8.70114C12.7195 9.33044 13.2328 9.62223 13.5738 9.72419C13.6722 9.75231 14.3332 9.89294 15.0433 10.0336C16.1683 10.2586 16.3687 10.3078 16.5937 10.4203C16.8961 10.5679 17.1738 10.8492 17.3355 11.1691L17.4375 11.373L17.448 12.2343C17.4586 12.9761 17.4515 13.1097 17.4023 13.2047C17.3109 13.3734 17.1843 13.4297 16.882 13.4297H16.6148L16.5902 13.2609C16.4566 12.3328 15.6058 11.6859 14.6847 11.8125C13.9781 11.9074 13.4015 12.4418 13.2539 13.1379C13.2258 13.2714 13.2012 13.3875 13.2012 13.405C13.2012 13.4191 11.3133 13.4261 9.01053 13.4226L4.8164 13.4121L4.79179 13.2363C4.64765 12.1218 3.41718 11.4785 2.38007 11.9707C1.93359 12.1816 1.55742 12.6492 1.47656 13.0886C1.45195 13.2117 1.4414 13.2222 1.36054 13.2011C1.31484 13.1906 1.10742 13.0992 0.899999 12.9972L0.527343 12.8144L0.516796 11.4152C0.509765 10.0757 0.51328 10.0125 0.580077 9.87887C0.692577 9.65739 0.829686 9.58005 1.31836 9.46403C2.19023 9.25309 2.72461 8.97888 3.2871 8.45505C3.62812 8.13513 3.86015 7.96638 4.18359 7.79763C4.89726 7.43552 4.98163 7.42497 7.27733 7.42146C8.99999 7.41794 9.20389 7.42497 9.49217 7.48474ZM3.6457 12.4382C3.91288 12.5683 4.06757 12.73 4.19062 13.0007C4.47538 13.6195 4.17304 14.3507 3.53671 14.5933C3.37851 14.6531 3.28359 14.6636 3.05859 14.6531C2.55586 14.625 2.16562 14.3402 2.00039 13.8796C1.9125 13.6336 1.93008 13.2574 2.03906 13.0148C2.32734 12.3855 3.02695 12.1324 3.6457 12.4382ZM15.4336 12.4277C16.1578 12.7968 16.309 13.739 15.7359 14.3121C15.1594 14.8886 14.2031 14.7304 13.8445 13.9957C13.7601 13.8234 13.7461 13.7566 13.7461 13.4824C13.7461 13.2187 13.7601 13.1379 13.8304 12.9937C13.9429 12.7652 14.0871 12.6035 14.2875 12.4875C14.5336 12.3433 14.6707 12.3082 14.9625 12.3187C15.1769 12.3257 15.2754 12.3468 15.4336 12.4277Z" />
                                                                    <path
                                                                        d="M5.0871 7.85743C4.53515 7.97696 3.84609 8.34961 3.55078 8.6836C3.42422 8.82774 2.98125 9.16524 2.67187 9.35156C2.28164 9.58711 2.17969 9.72774 2.17969 10.0371C2.17969 10.2199 2.19727 10.2762 2.28164 10.3992C2.45742 10.6559 2.57344 10.6875 3.33281 10.6875C3.94453 10.6875 3.99375 10.684 4.06054 10.6172C4.09922 10.5785 4.13086 10.5012 4.13086 10.4414C4.13086 10.3816 4.09922 10.3043 4.06054 10.2656C3.99726 10.2023 3.94453 10.1953 3.40664 10.1953C3.07265 10.1953 2.79492 10.1813 2.75625 10.1602C2.63672 10.0934 2.67187 9.95977 2.84062 9.85781C3.26953 9.58711 3.4875 9.42539 3.81797 9.1336C4.55273 8.48321 4.90781 8.33907 5.84648 8.30743L6.41601 8.28633V9.24258V10.1953H5.9414C5.51249 10.1953 5.45976 10.2023 5.39648 10.2656C5.35781 10.3043 5.32617 10.3816 5.32617 10.4414C5.32617 10.5012 5.35781 10.5785 5.39648 10.6172C5.46679 10.6875 5.51249 10.6875 9.10546 10.6875H12.7441L12.8566 10.5855C12.9621 10.4941 12.9726 10.4625 12.9691 10.2938C12.9691 10.1215 12.9164 9.98086 12.8074 9.84024C12.7547 9.77695 10.5187 8.2793 10.3008 8.16329C10.0512 8.02969 9.81561 7.9418 9.51678 7.87149C9.24608 7.80821 9.08788 7.80469 7.26679 7.80821C5.74804 7.80821 5.25937 7.82227 5.0871 7.85743ZM9.46405 8.37774C9.85077 8.47969 10.1004 8.62032 11.2148 9.36211C11.816 9.76289 12.3363 10.1109 12.375 10.1391C12.4383 10.1848 12.1148 10.1918 9.69608 10.1953H6.94335V9.24258V8.28985L8.09647 8.30743C9.0035 8.31797 9.29178 8.33555 9.46405 8.37774Z" />
                                                                    <path
                                                                        d="M6.69194 11.1129C6.50561 11.1832 6.48452 11.4715 6.65678 11.5629C6.69545 11.584 6.92749 11.6016 7.18061 11.6016C7.58842 11.6016 7.64467 11.5945 7.72905 11.5277C7.83803 11.4398 7.84858 11.2957 7.75366 11.1762C7.69037 11.0953 7.66225 11.0918 7.23334 11.0848C6.98725 11.0813 6.74116 11.0918 6.69194 11.1129Z" />
                                                                    <path
                                                                        d="M2.76746 12.8002C2.60223 12.8811 2.47567 13.0252 2.39129 13.2291C2.16629 13.7705 2.71824 14.3893 3.29129 14.2381C3.88543 14.0834 4.08933 13.3416 3.6534 12.9303C3.42488 12.7193 3.0452 12.6631 2.76746 12.8002ZM3.23152 13.2572C3.41082 13.3381 3.42488 13.6193 3.25613 13.7072C2.9784 13.8549 2.71473 13.4822 2.95731 13.2924C3.06277 13.208 3.10848 13.201 3.23152 13.2572Z" />
                                                                    <path
                                                                        d="M14.5732 12.7935C14.1337 13.029 14.0072 13.5564 14.2954 13.9606C14.5521 14.3192 15.1744 14.3544 15.4732 14.0204C15.8283 13.6337 15.7052 13.0114 15.2306 12.7864C15.0619 12.7056 14.7314 12.7091 14.5732 12.7935ZM15.0829 13.3067C15.1357 13.356 15.1708 13.4333 15.1708 13.486C15.1708 13.6161 15.0443 13.7462 14.9177 13.7462C14.7912 13.7462 14.6435 13.6056 14.6435 13.4825C14.6435 13.3665 14.7912 13.2189 14.9072 13.2189C14.9564 13.2189 15.0372 13.2575 15.0829 13.3067Z" />
                                                                    <path
                                                                        d="M6.41061 1.3535C5.84459 1.45897 5.22233 1.70857 4.77936 2.00037C4.45944 2.21131 4.05866 2.56287 4.01998 2.66482C3.94616 2.85818 4.13952 3.05506 4.33639 2.98123C4.38209 2.96717 4.50514 2.87576 4.60709 2.78084C5.48248 1.97928 6.75162 1.64178 7.96099 1.88787C8.64654 2.02498 9.18794 2.30271 9.79966 2.82654C10.0282 3.02342 10.1793 3.05154 10.2883 2.91443C10.4043 2.77381 10.3692 2.66482 10.1512 2.4574C9.62388 1.95467 8.98404 1.61365 8.22466 1.41678C7.7817 1.30428 6.84303 1.27264 6.41061 1.3535Z" />
                                                                    <path
                                                                        d="M14.0009 1.51544C13.9411 1.54708 13.9376 1.65958 13.9376 3.0377C13.9376 4.72871 13.9235 4.64082 14.2259 4.64082C14.4825 4.64082 14.5001 4.60215 14.5001 3.99746V3.48067H14.6689C14.9853 3.48067 15.4106 3.41387 15.5478 3.34356C15.8747 3.17832 16.0294 2.84786 16.0048 2.37676C15.9802 1.92676 15.7798 1.63145 15.4353 1.5295C15.2278 1.46622 14.0993 1.45567 14.0009 1.51544ZM15.2349 2.02169C15.3825 2.09551 15.4599 2.28887 15.4423 2.53497C15.4142 2.90411 15.2595 3.01661 14.7743 3.02012L14.5001 3.02364V2.49629V1.96895H14.8165C15.0274 1.96895 15.1716 1.98653 15.2349 2.02169Z" />
                                                                    <path
                                                                        d="M6.66638 2.8299C6.21287 2.91427 5.80506 3.09709 5.40427 3.39943C5.10193 3.63146 5.02107 3.75802 5.08084 3.90216C5.1617 4.09552 5.42185 4.10255 5.57654 3.91623C5.68201 3.78615 6.15662 3.51193 6.43084 3.42404C6.80349 3.30451 7.30974 3.27638 7.6824 3.35373C8.01286 3.42404 8.4488 3.63498 8.69841 3.84943C8.80388 3.94084 8.92692 4.02873 8.97263 4.0463C9.13083 4.10607 9.29958 3.97599 9.29958 3.80021C9.29958 3.6174 8.72302 3.17443 8.23786 2.9881C7.73161 2.79123 7.18318 2.73849 6.66638 2.8299Z" />
                                                                    <path
                                                                        d="M6.87812 4.29258C6.52305 4.36289 6.09766 4.66524 6.09766 4.84805C6.09766 4.96758 6.22773 5.09766 6.34727 5.09766C6.39648 5.09766 6.49141 5.05547 6.5582 5.00625C6.95547 4.70391 7.39844 4.70391 7.79922 5.00977C7.93984 5.11523 8.07695 5.12227 8.17187 5.02734C8.39336 4.80586 8.06992 4.45078 7.51445 4.30664C7.29648 4.25039 7.11367 4.24336 6.87812 4.29258Z" />
                                                                </svg> Parking
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg> Bar
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <path
                                                                        d="M9.20926 0.0478783C9.16707 0.076004 9.09676 0.181473 9.05106 0.283426C8.98075 0.438112 8.96668 0.529518 8.96668 0.803738C8.96668 1.15882 9.01239 1.29592 9.20926 1.53147L9.29364 1.63342L9.15653 1.91116C8.91395 2.39983 8.8577 2.86389 8.98426 3.34905C9.10731 3.83069 9.40614 4.28772 9.78934 4.576L9.99676 4.73068L9.65574 5.26506L9.31824 5.79592L9.037 5.78889L8.75575 5.77834L8.42176 5.2967C8.01395 4.70959 7.9577 4.64983 7.73622 4.54436C7.53231 4.44943 7.21942 4.43537 7.00497 4.5092C6.56551 4.6674 6.29481 5.19475 6.42489 5.64474C6.46005 5.76076 6.63583 6.04553 6.9452 6.48498C7.85926 7.77873 7.76083 7.7049 8.60809 7.72248L9.1952 7.73654V8.24982V8.7631L8.51317 9.44865C7.60614 10.3697 7.67294 10.1799 7.65536 11.8252L7.64129 13.0908L7.40926 13.1963C6.89598 13.4283 6.55145 13.8502 6.43895 14.3811L6.41786 14.4795H5.87645H5.33153L5.31044 14.2756C5.20849 13.3229 4.65653 12.6971 3.73896 12.4967L3.64052 12.4756V10.1026C3.64052 8.79826 3.64755 7.72951 3.6581 7.72951C3.66513 7.72951 3.83388 7.81388 4.02724 7.91232C4.35771 8.08459 4.39989 8.09865 4.61786 8.09513C5.01864 8.09162 5.34559 7.89123 5.51786 7.5467C5.69364 7.19513 5.60927 6.73107 5.3245 6.48146C5.17684 6.35139 1.45732 4.2385 1.27099 4.17873C1.08466 4.11897 0.704976 4.15061 0.529195 4.24201C0.363961 4.32639 0.160055 4.53381 0.0686488 4.70607C-0.026273 4.88889 -0.0227574 5.31076 0.0791956 5.49709C0.198727 5.71857 0.335836 5.82404 0.996772 6.20373L1.61904 6.55529L1.63662 7.91935L1.65419 9.28341L1.75263 9.36779C1.87216 9.46974 1.94951 9.47326 2.07255 9.37833L2.16396 9.30802V8.09162C2.16396 7.36037 2.17802 6.88576 2.1956 6.89279C2.21318 6.89631 2.42763 7.01232 2.67021 7.14943L3.11318 7.39552V9.93732V12.4791L2.64911 12.4686L2.18154 12.458L2.16396 11.3928C2.14638 10.3873 2.14286 10.324 2.07958 10.2748C1.97763 10.201 1.79833 10.2115 1.72099 10.2994C1.65771 10.3697 1.65419 10.4471 1.64365 11.4209L1.6331 12.4721L1.07412 12.4826C0.574898 12.4932 0.504586 12.5002 0.420211 12.567C0.279586 12.669 0.195211 12.7955 0.160055 12.9537C0.117867 13.133 0.117867 17.0564 0.160055 17.2357C0.202242 17.4256 0.293648 17.5416 0.476461 17.633L0.631148 17.7139H8.56942C14.212 17.7139 16.5569 17.7033 16.6905 17.6752C17.1546 17.5803 17.6221 17.2146 17.819 16.7928C18.2444 15.8928 17.7839 14.8416 16.8346 14.5498C16.6413 14.49 16.5077 14.4795 15.9944 14.4795C15.6569 14.4795 15.3827 14.4725 15.3827 14.4619C15.3827 14.4514 15.5444 14.0119 15.7378 13.4846C16.1104 12.4861 16.1526 12.2998 16.0542 12.11C16.026 12.0572 15.9522 11.9869 15.896 11.9483C15.7694 11.8744 14.8202 11.5299 13.8534 11.21C13.4878 11.0869 13.1819 10.985 13.1749 10.9815C13.1714 10.9779 13.0729 10.5033 12.9604 9.93029L12.7565 8.88615L12.8936 8.17599C12.971 7.78576 13.0378 7.46232 13.0448 7.45529C13.0518 7.44826 13.1046 7.45177 13.1643 7.46584L13.2663 7.48693L13.2803 8.16193C13.2909 8.83341 13.2909 8.83693 13.3928 9.02326C13.5827 9.36427 13.9096 9.54357 14.2858 9.51544C14.5389 9.49786 14.7288 9.40646 14.9151 9.21661C15.1647 8.95646 15.1788 8.87912 15.1647 7.63459C15.1542 6.41467 15.1542 6.41818 14.8624 6.13693C14.7147 5.99279 14.4968 5.9049 13.3155 5.51115L12.7811 5.33185L12.5702 5.03654C12.4542 4.87482 12.3593 4.73068 12.3593 4.72014C12.3593 4.70959 12.4401 4.62522 12.5421 4.53732C13.0378 4.09084 13.3155 3.34553 13.312 2.45608C13.312 2.19944 13.2944 1.97444 13.2557 1.84085C13.08 1.16585 12.63 0.691236 11.9233 0.427567C11.8249 0.388893 11.5542 0.364285 11.0585 0.343191C10.2956 0.315065 10.1233 0.283426 9.66278 0.100613C9.36395 -0.0189171 9.31121 -0.0259495 9.20926 0.0478783ZM9.6909 0.684206C10.0179 0.796705 10.3554 0.845924 11.0233 0.870533C11.6948 0.895144 11.7124 0.898659 11.9409 1.00764C12.2749 1.16936 12.4753 1.35921 12.6229 1.65803C12.7565 1.93225 12.8339 2.3717 12.7882 2.59319L12.7636 2.71272L12.4401 2.41389C11.9514 1.95686 11.6948 1.83733 11.0655 1.77053C10.3729 1.70022 9.68035 1.38381 9.5327 1.07092C9.47293 0.944363 9.45535 0.627956 9.50809 0.627956C9.52567 0.627956 9.60653 0.652565 9.6909 0.684206ZM10.5382 2.20998C10.6999 2.24514 10.96 2.29436 11.1218 2.31194C11.4593 2.35413 11.6737 2.4385 11.8917 2.6178C12.0675 2.76194 12.3065 3.08537 12.4647 3.39826L12.5772 3.61975L12.4788 3.78498C12.0675 4.48811 11.1429 4.73068 10.387 4.33342C10.0952 4.17873 9.74012 3.82014 9.60301 3.53537C9.39559 3.1135 9.3991 2.61077 9.61707 2.15725L9.72254 1.93577L9.98621 2.03772C10.1304 2.09397 10.38 2.17131 10.5382 2.20998ZM1.22529 4.73068C1.77021 5.01193 4.9413 6.84006 5.00458 6.90685C5.14872 7.06857 5.08544 7.3674 4.88153 7.50099C4.82177 7.53966 4.71981 7.56779 4.62489 7.56779C4.48075 7.56779 4.27685 7.45881 2.55419 6.48146C0.574898 5.35646 0.511617 5.31428 0.511617 5.09982C0.511617 4.7799 0.915913 4.56897 1.22529 4.73068ZM10.8546 5.03303C11.1077 5.06818 11.5331 5.04006 11.7827 4.96623C11.8425 4.95217 11.8811 4.98029 11.9866 5.12092C12.0569 5.21584 12.1132 5.30373 12.1132 5.31428C12.1132 5.32482 12.078 5.33889 12.0323 5.35295C11.9022 5.38459 11.6807 5.59904 11.5858 5.78185C11.4663 6.01389 11.4628 6.41115 11.5753 6.62209C11.7054 6.86818 11.9268 7.04045 12.2503 7.14943C12.528 7.24084 12.5421 7.24787 12.5245 7.33927C12.5139 7.38849 12.4542 7.69435 12.3909 8.01779L12.2749 8.60841H10.9987H9.72254V7.37443V6.13693L10.1022 5.54631C10.3764 5.11389 10.4925 4.95568 10.5311 4.97326C10.5593 4.98381 10.7069 5.00842 10.8546 5.03303ZM7.56747 5.04006C7.60965 5.0717 7.81004 5.33537 8.01043 5.63068C8.21434 5.92248 8.41473 6.1967 8.45692 6.23537C8.5202 6.29162 8.59403 6.3092 8.86473 6.31623L9.1952 6.33029V6.76623V7.20216H8.67137C8.22489 7.20216 8.137 7.19162 8.07723 7.13888C7.94715 7.02638 6.9663 5.60256 6.93465 5.47951C6.89247 5.32482 6.96981 5.1385 7.11395 5.05061C7.23348 4.97326 7.46903 4.96975 7.56747 5.04006ZM13.4667 6.11935C14.1417 6.35139 14.444 6.47092 14.5214 6.53771L14.6268 6.63263L14.6374 7.64865C14.6479 8.53107 14.6409 8.67521 14.5917 8.77013C14.4792 8.98107 14.212 9.0549 14.0081 8.93536C13.8218 8.82638 13.8007 8.72443 13.8007 7.94748C13.8007 7.30412 13.7936 7.24084 13.7303 7.15998C13.6776 7.09318 13.4983 7.01584 12.9534 6.83302C12.1729 6.56935 12.0534 6.49904 12.0182 6.28107C11.9796 6.02443 12.1659 5.79592 12.412 5.79592C12.4718 5.79592 12.9428 5.94006 13.4667 6.11935ZM12.1483 9.16388C12.1483 9.24122 11.8776 9.63146 11.6983 9.81427C11.4452 10.0744 11.1218 10.2854 10.2147 10.7881C9.81746 11.0061 9.45184 11.217 9.3991 11.2557C9.21278 11.3928 9.1952 11.4877 9.1952 12.2963V13.0381H8.68192H8.16864L8.1827 11.8322C8.19325 10.6791 8.19676 10.6229 8.27059 10.4893C8.30926 10.4119 8.62215 10.0744 8.95965 9.74044L9.57137 9.13576H10.8616C11.5682 9.13576 12.1483 9.14982 12.1483 9.16388ZM12.5139 10.4014C12.6475 11.1186 12.6932 11.2592 12.8163 11.3611C12.8796 11.4174 13.1714 11.5334 13.5792 11.667C13.9413 11.79 14.2647 11.899 14.2964 11.9166C14.3491 11.9447 14.335 12.001 14.1733 12.4229C14.0714 12.683 13.98 12.9045 13.9694 12.915C13.9589 12.9256 13.8639 12.9045 13.762 12.8658C13.6565 12.8272 13.1292 12.6443 12.5878 12.458C12.0499 12.2752 11.5682 12.0994 11.5225 12.0678C11.4698 12.0326 11.3468 11.8217 11.1921 11.5018C11.0585 11.2205 10.953 10.9885 10.96 10.985C10.9671 10.9779 11.0971 10.9006 11.2518 10.8092C11.6983 10.5385 12.2151 10.099 12.3346 9.8881C12.3522 9.85646 12.3804 9.84591 12.3944 9.86349C12.4085 9.87755 12.4647 10.1201 12.5139 10.4014ZM10.735 11.7654C10.8932 12.0959 11.0339 12.335 11.1147 12.4158C11.2624 12.5635 11.3643 12.6022 12.7846 13.0873L13.7901 13.4318L13.8112 13.7518C13.8253 13.9311 13.8569 14.1525 13.8886 14.251C13.9167 14.3459 13.9413 14.4373 13.9413 14.4514C13.9413 14.469 13.6178 14.4795 13.2206 14.4795C12.4999 14.4795 12.4964 14.4795 12.412 14.5674C12.2749 14.701 12.2995 14.8697 12.4682 14.9541C12.5526 14.9998 12.8796 15.0068 14.5671 15.0068C16.8276 15.0068 16.7608 14.9998 17.0702 15.2775C17.3409 15.5201 17.4393 15.7346 17.4393 16.0791C17.4393 16.29 17.4217 16.399 17.362 16.5221C17.2565 16.7541 17.0596 16.958 16.8311 17.0705L16.6307 17.1689L10.9811 17.1795L5.32802 17.1865V16.7646V16.3428H10.9073H16.4866L16.5675 16.2654C16.6659 16.174 16.6729 16.0299 16.5815 15.9174L16.5147 15.833L10.9214 15.8225L5.32802 15.8154V15.4111V15.0068H8.34442C11.5577 15.0068 11.4874 15.0104 11.5718 14.8346C11.6175 14.7467 11.5788 14.5709 11.505 14.5217C11.4804 14.5076 11.0761 14.49 10.6014 14.4795L9.74012 14.4619V13.0592V11.66L10.0917 11.4561C10.285 11.3436 10.4538 11.2486 10.4643 11.2486C10.4749 11.2451 10.5979 11.4807 10.735 11.7654ZM15.2456 12.2506L15.5901 12.3772L15.5268 12.5389C15.4917 12.6303 15.3159 13.1049 15.1331 13.59C14.8413 14.3881 14.7991 14.4795 14.7288 14.4795C14.6866 14.4795 14.6233 14.469 14.5917 14.4584C14.4686 14.4092 14.328 13.9803 14.328 13.6498C14.328 13.5408 14.3983 13.3088 14.56 12.8869C14.8659 12.0854 14.8518 12.124 14.8764 12.124C14.8905 12.124 15.0557 12.1803 15.2456 12.2506ZM3.96747 13.1154C4.22411 13.2385 4.52997 13.5268 4.64247 13.7553C4.77958 14.0436 4.80067 14.3002 4.80067 15.7873V17.1865H2.74755C0.908882 17.1865 0.694429 17.1795 0.673335 17.1303C0.64521 17.0564 0.64521 13.1295 0.673335 13.0557C0.694429 13.0065 0.842085 12.9994 2.23076 13.01L3.76357 13.0205L3.96747 13.1154ZM9.1952 14.0225V14.4795H8.08778C6.84325 14.4795 6.91708 14.4971 7.04715 14.2158C7.16317 13.9592 7.48661 13.6955 7.78192 13.6147C7.88387 13.5865 8.18622 13.569 8.57293 13.569L9.1952 13.5654V14.0225Z" />
                                                                    <path
                                                                        d="M2.09375 14.258C1.9918 14.2967 1.88281 14.4232 1.88281 14.4971C1.88281 14.5393 1.91445 14.6166 1.95664 14.6693C2.02695 14.7572 2.04102 14.7607 2.41367 14.7607C2.75117 14.7607 2.80391 14.7537 2.86719 14.6904C2.95508 14.6025 2.95859 14.4408 2.8707 14.3354C2.81094 14.258 2.77226 14.251 2.47344 14.2439C2.29414 14.2404 2.12187 14.2439 2.09375 14.258Z" />
                                                                    <path
                                                                        d="M1.9707 15.5869C1.92148 15.6326 1.88281 15.7135 1.88281 15.7627C1.88281 15.8119 1.92148 15.8928 1.9707 15.9385C2.04805 16.0193 2.07969 16.0264 2.40312 16.0264C2.70195 16.0264 2.76523 16.0158 2.84609 15.9525C2.96562 15.8576 2.97265 15.6748 2.86015 15.5693C2.79336 15.5096 2.73711 15.499 2.4207 15.499C2.07969 15.499 2.04805 15.5061 1.9707 15.5869Z" />
                                                                </svg> Outdoor Pool
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg>Wifi
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <div class="room-type">
                                                            <h6>Deluxe King Room</h6>
                                                            <span>1 king bed</span>
                                                            <div class="deals">
                                                                <span><strong>Free cancellation</strong> <br> before 48
                                                                    hours</span>
                                                            </div>
                                                        </div>
                                                        <div class="price-and-book">
                                                            <div class="price-area">
                                                                <p>1 night, 2 adults</p>
                                                            </div>
                                                            <div class="book-btn">
                                                                <a href="contact.php" class="primary-btn2">Enquire Now<i
                                                                        class="bi bi-arrow-right"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xxl-4 col-md-6">
                                    <div class="room-suits-card two">
                                        <div class="row g-0">
                                            <div class="col-md-12">
                                                <div class="swiper hotel-img-slider">
                                                    <span class="batch">Breakfast included</span>
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel4.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel5.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel6.webp" alt>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination5"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="room-content">
                                                    <div class="content-top">
                                                        <div class="reviews">
                                                            <ul>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-half"></i></li>
                                                            </ul>
                                                            <span>4.5 reviews</span>
                                                        </div>
                                                        <h5 class="hotel-fort mt-3">Hampton By Hilton Dubai Airport</h5>
                                                        <ul class="loaction-area">
                                                            <li><i class="bi bi-geo-alt"></i>Dubai</li>

                                                        </ul>
                                                        <ul class="facilisis">
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.683593 0.0562801C0.490234 0.123077 0.30039 0.288311 0.180859 0.485186L0.0859375 0.650419V7.20705V13.7637L0.163281 13.9043C0.251172 14.0695 0.423437 14.2383 0.595702 14.3297C0.711718 14.393 0.848827 14.3965 2.87382 14.407L5.02538 14.4176L5.11327 14.3297C5.21874 14.2242 5.22577 14.1012 5.13437 13.9887L5.06757 13.9043L2.93711 13.8867L0.80664 13.8691L0.711718 13.7707L0.61328 13.6758L0.602734 10.582L0.595702 7.4883H3.79492H6.99413V10.6875V13.8867H6.55468C6.30507 13.8867 6.08007 13.9043 6.03085 13.9254C5.85155 14.0063 5.83749 14.2875 6.00624 14.3754C6.05194 14.4035 6.8289 14.4141 8.39686 14.4141H10.7172L10.7277 15.8801C10.7383 17.3109 10.7418 17.3531 10.8156 17.4902C10.9035 17.6555 11.0758 17.8242 11.248 17.9156C11.364 17.9789 11.5117 17.9824 14.3242 17.9824H17.2773L17.4179 17.9051C17.6043 17.8066 17.766 17.6309 17.8539 17.4375C17.9242 17.2863 17.9277 17.2125 17.9277 15.3949C17.9277 13.2645 17.9312 13.2891 17.664 13.0254C17.5832 12.9445 17.4461 12.8496 17.3582 12.8145L17.1965 12.7547L17.1824 11.9215C17.1683 11.1797 17.1578 11.0672 17.0875 10.8457C16.8344 10.0582 16.2683 9.41486 15.5371 9.07736C15.2383 8.93673 14.8551 8.82423 14.6863 8.82423C14.4648 8.82423 14.4824 9.17228 14.4824 4.78479C14.4824 0.260185 14.5035 0.580107 14.2012 0.281281C13.8988 -0.02458 14.5246 3.05176e-05 7.26132 0.00354576C1.7664 0.00354576 0.803124 0.0140934 0.683593 0.0562801ZM7.00116 1.09339C7.01171 1.63831 7.01522 1.6594 7.09608 1.7262C7.20155 1.81409 7.36327 1.81057 7.45116 1.72268C7.51444 1.6594 7.52147 1.60667 7.52147 1.08987V0.527372H10.5801C13.2484 0.527372 13.6562 0.534405 13.7441 0.580107C13.9656 0.692608 13.9551 0.541435 13.9551 3.90237V6.96096L10.7488 6.95393L7.53905 6.94338L7.5285 4.8094L7.52147 2.67542L7.43007 2.6051C7.30702 2.51018 7.22968 2.5137 7.11015 2.61565L7.01171 2.70003L7.00116 4.83049L6.99413 6.96096H3.79492H0.595702V3.90237C0.595702 1.23753 0.602734 0.8262 0.648437 0.73831C0.760936 0.520342 0.602734 0.53089 3.94257 0.527372H6.9871L7.00116 1.09339ZM13.9551 8.14924V8.81017L13.6844 8.87345C12.7633 9.08439 11.9758 9.76994 11.6383 10.6453C11.4871 11.0426 11.459 11.257 11.459 12.041V12.7512L11.2937 12.8145C10.9492 12.9481 10.7207 13.2996 10.7207 13.7004V13.8867H9.12108H7.52147V10.6875V7.4883H10.7383H13.9551V8.14924ZM15.0027 9.4254C15.4668 9.56955 15.9801 9.93869 16.2437 10.3254C16.5918 10.8281 16.6621 11.1199 16.6621 12.0516V12.7652L16.4793 12.7547L16.2929 12.7441L16.2754 11.9883C16.2578 11.3836 16.2437 11.1973 16.191 11.0567C16.0152 10.5645 15.6531 10.1496 15.2136 9.93517C14.9465 9.80158 14.5668 9.70314 14.3242 9.70314C14.0816 9.70314 13.7019 9.80158 13.4347 9.93517C12.9953 10.1496 12.6332 10.5645 12.4574 11.0567C12.4047 11.1973 12.3906 11.3836 12.373 11.9883L12.3555 12.7441L12.1726 12.7547L11.9863 12.7652V12.0516C11.9863 11.2289 12.0144 11.0777 12.2394 10.6172C12.4926 10.0969 13.0445 9.61876 13.6 9.43947C14.0254 9.30236 14.5738 9.29533 15.0027 9.4254ZM14.9676 10.3922C15.2312 10.5223 15.4844 10.7824 15.6179 11.0637L15.7304 11.3027L15.741 12.0305L15.7515 12.7617H14.3242H12.8969L12.9074 12.0305L12.9179 11.3027L13.0304 11.0637C13.1676 10.7789 13.4207 10.5188 13.6879 10.3922C13.7933 10.343 13.8988 10.3008 13.9164 10.3008C13.9445 10.3008 13.9551 10.5504 13.9551 11.0707C13.9551 11.7949 13.9586 11.8442 14.0289 11.932C14.1203 12.0481 14.2855 12.0551 14.4015 11.9461C14.4824 11.8723 14.4824 11.8617 14.4824 11.0637V10.2551L14.6336 10.2797C14.7144 10.2938 14.8656 10.343 14.9676 10.3922ZM17.2457 13.3524C17.2879 13.384 17.3406 13.4473 17.3617 13.4895C17.3898 13.5422 17.4004 14.1188 17.4004 15.3949V17.2266L17.2984 17.3391L17.1965 17.4551H14.3277H11.459L11.364 17.3566L11.2656 17.2617L11.2551 15.4406C11.2515 14.4422 11.2551 13.5914 11.2621 13.5492C11.2726 13.5106 11.3254 13.4332 11.3746 13.384L11.4695 13.2891H14.3207C16.9679 13.2891 17.1789 13.2961 17.2457 13.3524Z" />
                                                                        <path
                                                                            d="M1.88029 3.66674C1.30022 3.8601 0.92053 4.33823 0.885373 4.92182C0.811545 6.21908 2.35139 6.92221 3.26193 6.00463C3.4799 5.78666 3.61349 5.52651 3.66271 5.22768C3.76115 4.64057 3.43068 4.01479 2.88576 3.75463C2.68889 3.65971 2.60803 3.64213 2.33732 3.63159C2.14045 3.62456 1.96818 3.63862 1.88029 3.66674ZM2.66428 4.23979C3.38146 4.59838 3.28303 5.63198 2.50959 5.85698C1.68693 6.09604 1.05412 5.09409 1.62365 4.45073C1.89787 4.13784 2.29865 4.05698 2.66428 4.23979Z" />
                                                                        <path
                                                                            d="M1.87695 4.86914C1.82773 4.91484 1.78906 4.9957 1.78906 5.04492C1.78906 5.09414 1.82773 5.175 1.87695 5.2207C1.9543 5.30156 1.98945 5.30859 2.26367 5.30859C2.61172 5.30859 2.70312 5.25586 2.70312 5.04844C2.70312 4.85156 2.58008 4.78125 2.23906 4.78125C1.99297 4.78125 1.95078 4.7918 1.87695 4.86914Z" />
                                                                        <path
                                                                            d="M8.87639 3.66674C8.29631 3.8601 7.91662 4.33823 7.88147 4.92182C7.80764 6.21908 9.34748 6.92221 10.258 6.00463C10.476 5.78666 10.6096 5.52651 10.6588 5.22768C10.7572 4.64057 10.4268 4.01479 9.88185 3.75463C9.68498 3.65971 9.60412 3.64213 9.33342 3.63159C9.13654 3.62456 8.96428 3.63862 8.87639 3.66674ZM9.66037 4.23979C10.3776 4.59838 10.2791 5.63198 9.50568 5.85698C8.68303 6.09604 8.05022 5.09409 8.61975 4.45073C8.89397 4.13784 9.29475 4.05698 9.66037 4.23979Z" />
                                                                        <path
                                                                            d="M8.87305 4.86914C8.82383 4.91484 8.78516 4.9957 8.78516 5.04492C8.78516 5.09414 8.82383 5.175 8.87305 5.2207C8.95039 5.30156 8.98555 5.30859 9.25976 5.30859C9.60781 5.30859 9.69922 5.25586 9.69922 5.04844C9.69922 4.85156 9.57617 4.78125 9.23516 4.78125C8.98906 4.78125 8.94687 4.7918 8.87305 4.86914Z" />
                                                                        <path
                                                                            d="M8.92773 10.6313C8.51992 10.7438 8.18594 11.018 8.00664 11.3836C7.89766 11.6051 7.89062 11.6438 7.89062 11.9883C7.89062 12.3363 7.89766 12.375 8.00664 12.593C8.15078 12.8883 8.45664 13.1801 8.7414 13.2926C8.90312 13.3594 9.01562 13.3734 9.28281 13.377C9.59922 13.377 9.63086 13.3699 9.88398 13.2434C10.7207 12.832 10.9316 11.7668 10.3199 11.0566C10.0035 10.684 9.39883 10.5012 8.92773 10.6313ZM9.64492 11.1973C10.0949 11.4117 10.2777 11.9707 10.0387 12.4031C9.81015 12.818 9.325 12.9797 8.91015 12.7828C8.2 12.4488 8.2457 11.4328 8.98398 11.1586C9.15273 11.0953 9.46914 11.1164 9.64492 11.1973Z" />
                                                                        <path
                                                                            d="M8.85771 11.8546C8.71005 12.0164 8.812 12.2449 9.05458 12.2906C9.24091 12.3257 9.55731 12.2836 9.63466 12.2132C9.72255 12.1324 9.72606 11.9144 9.63817 11.8371C9.58896 11.7914 9.50106 11.7773 9.25146 11.7773C8.96669 11.7773 8.92099 11.7843 8.85771 11.8546Z" />
                                                                        <path
                                                                            d="M14.1098 13.676C13.7512 13.7498 13.3961 14.0346 13.2414 14.3721C13.1816 14.5022 13.1641 14.6041 13.1641 14.8537C13.1641 15.244 13.2344 15.4162 13.5156 15.7115L13.709 15.9154V16.1756C13.709 16.4779 13.7512 16.5764 13.9199 16.6924C14.0324 16.7662 14.0746 16.7733 14.384 16.7627C14.7039 16.7522 14.7285 16.7451 14.8305 16.6502C14.9605 16.5272 15.0098 16.369 15.0098 16.0912C15.0098 15.8944 15.0168 15.8768 15.1644 15.7326C15.2523 15.6483 15.3648 15.4971 15.4211 15.3951C15.509 15.2229 15.5195 15.1701 15.5195 14.8537C15.5195 14.5408 15.509 14.4846 15.4246 14.3229C15.3016 14.0908 14.9887 13.8061 14.7742 13.7322C14.5598 13.6584 14.2926 13.6373 14.1098 13.676ZM14.5281 14.2069C14.6934 14.2526 14.9008 14.4283 14.9605 14.5795C14.9887 14.6428 15.0098 14.7658 15.0098 14.8537C15.0098 14.9416 14.9887 15.0647 14.9605 15.1279C14.9184 15.2299 14.8586 15.2897 14.5633 15.5393C14.4895 15.599 14.4824 15.6342 14.4824 15.9225V16.2424H14.3629H14.2434L14.2293 15.9225C14.2187 15.5744 14.2434 15.6166 13.9199 15.367C13.5191 15.0612 13.6352 14.3932 14.1203 14.2209C14.2855 14.1612 14.3559 14.1576 14.5281 14.2069Z" />
                                                                        <path
                                                                            d="M1.93164 10.6313C1.52383 10.7438 1.18984 11.018 1.01055 11.3836C0.901562 11.6051 0.894531 11.6438 0.894531 11.9883C0.894531 12.3363 0.901562 12.375 1.01055 12.593C1.15469 12.8883 1.46055 13.1801 1.74531 13.2926C1.90703 13.3594 2.01953 13.3734 2.28672 13.377C2.60312 13.377 2.63476 13.3699 2.88789 13.2434C3.72461 12.832 3.93554 11.7668 3.32382 11.0566C3.00742 10.684 2.40273 10.5012 1.93164 10.6313ZM2.64883 11.1973C3.09882 11.4117 3.28164 11.9707 3.04257 12.4031C2.81406 12.818 2.3289 12.9797 1.91406 12.7828C1.20391 12.4488 1.24961 11.4328 1.98789 11.1586C2.15664 11.0953 2.47304 11.1164 2.64883 11.1973Z" />
                                                                        <path
                                                                            d="M1.86161 11.8546C1.71396 12.0164 1.81591 12.2449 2.05849 12.2906C2.24482 12.3257 2.56122 12.2836 2.63856 12.2132C2.72645 12.1324 2.72997 11.9144 2.64208 11.8371C2.59286 11.7914 2.50497 11.7773 2.25536 11.7773C1.9706 11.7773 1.92489 11.7843 1.86161 11.8546Z" />
                                                                    </g>
                                                                </svg> 24hrs Room services
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <path
                                                                        d="M9.20926 0.0478783C9.16707 0.076004 9.09676 0.181473 9.05106 0.283426C8.98075 0.438112 8.96668 0.529518 8.96668 0.803738C8.96668 1.15882 9.01239 1.29592 9.20926 1.53147L9.29364 1.63342L9.15653 1.91116C8.91395 2.39983 8.8577 2.86389 8.98426 3.34905C9.10731 3.83069 9.40614 4.28772 9.78934 4.576L9.99676 4.73068L9.65574 5.26506L9.31824 5.79592L9.037 5.78889L8.75575 5.77834L8.42176 5.2967C8.01395 4.70959 7.9577 4.64983 7.73622 4.54436C7.53231 4.44943 7.21942 4.43537 7.00497 4.5092C6.56551 4.6674 6.29481 5.19475 6.42489 5.64474C6.46005 5.76076 6.63583 6.04553 6.9452 6.48498C7.85926 7.77873 7.76083 7.7049 8.60809 7.72248L9.1952 7.73654V8.24982V8.7631L8.51317 9.44865C7.60614 10.3697 7.67294 10.1799 7.65536 11.8252L7.64129 13.0908L7.40926 13.1963C6.89598 13.4283 6.55145 13.8502 6.43895 14.3811L6.41786 14.4795H5.87645H5.33153L5.31044 14.2756C5.20849 13.3229 4.65653 12.6971 3.73896 12.4967L3.64052 12.4756V10.1026C3.64052 8.79826 3.64755 7.72951 3.6581 7.72951C3.66513 7.72951 3.83388 7.81388 4.02724 7.91232C4.35771 8.08459 4.39989 8.09865 4.61786 8.09513C5.01864 8.09162 5.34559 7.89123 5.51786 7.5467C5.69364 7.19513 5.60927 6.73107 5.3245 6.48146C5.17684 6.35139 1.45732 4.2385 1.27099 4.17873C1.08466 4.11897 0.704976 4.15061 0.529195 4.24201C0.363961 4.32639 0.160055 4.53381 0.0686488 4.70607C-0.026273 4.88889 -0.0227574 5.31076 0.0791956 5.49709C0.198727 5.71857 0.335836 5.82404 0.996772 6.20373L1.61904 6.55529L1.63662 7.91935L1.65419 9.28341L1.75263 9.36779C1.87216 9.46974 1.94951 9.47326 2.07255 9.37833L2.16396 9.30802V8.09162C2.16396 7.36037 2.17802 6.88576 2.1956 6.89279C2.21318 6.89631 2.42763 7.01232 2.67021 7.14943L3.11318 7.39552V9.93732V12.4791L2.64911 12.4686L2.18154 12.458L2.16396 11.3928C2.14638 10.3873 2.14286 10.324 2.07958 10.2748C1.97763 10.201 1.79833 10.2115 1.72099 10.2994C1.65771 10.3697 1.65419 10.4471 1.64365 11.4209L1.6331 12.4721L1.07412 12.4826C0.574898 12.4932 0.504586 12.5002 0.420211 12.567C0.279586 12.669 0.195211 12.7955 0.160055 12.9537C0.117867 13.133 0.117867 17.0564 0.160055 17.2357C0.202242 17.4256 0.293648 17.5416 0.476461 17.633L0.631148 17.7139H8.56942C14.212 17.7139 16.5569 17.7033 16.6905 17.6752C17.1546 17.5803 17.6221 17.2146 17.819 16.7928C18.2444 15.8928 17.7839 14.8416 16.8346 14.5498C16.6413 14.49 16.5077 14.4795 15.9944 14.4795C15.6569 14.4795 15.3827 14.4725 15.3827 14.4619C15.3827 14.4514 15.5444 14.0119 15.7378 13.4846C16.1104 12.4861 16.1526 12.2998 16.0542 12.11C16.026 12.0572 15.9522 11.9869 15.896 11.9483C15.7694 11.8744 14.8202 11.5299 13.8534 11.21C13.4878 11.0869 13.1819 10.985 13.1749 10.9815C13.1714 10.9779 13.0729 10.5033 12.9604 9.93029L12.7565 8.88615L12.8936 8.17599C12.971 7.78576 13.0378 7.46232 13.0448 7.45529C13.0518 7.44826 13.1046 7.45177 13.1643 7.46584L13.2663 7.48693L13.2803 8.16193C13.2909 8.83341 13.2909 8.83693 13.3928 9.02326C13.5827 9.36427 13.9096 9.54357 14.2858 9.51544C14.5389 9.49786 14.7288 9.40646 14.9151 9.21661C15.1647 8.95646 15.1788 8.87912 15.1647 7.63459C15.1542 6.41467 15.1542 6.41818 14.8624 6.13693C14.7147 5.99279 14.4968 5.9049 13.3155 5.51115L12.7811 5.33185L12.5702 5.03654C12.4542 4.87482 12.3593 4.73068 12.3593 4.72014C12.3593 4.70959 12.4401 4.62522 12.5421 4.53732C13.0378 4.09084 13.3155 3.34553 13.312 2.45608C13.312 2.19944 13.2944 1.97444 13.2557 1.84085C13.08 1.16585 12.63 0.691236 11.9233 0.427567C11.8249 0.388893 11.5542 0.364285 11.0585 0.343191C10.2956 0.315065 10.1233 0.283426 9.66278 0.100613C9.36395 -0.0189171 9.31121 -0.0259495 9.20926 0.0478783ZM9.6909 0.684206C10.0179 0.796705 10.3554 0.845924 11.0233 0.870533C11.6948 0.895144 11.7124 0.898659 11.9409 1.00764C12.2749 1.16936 12.4753 1.35921 12.6229 1.65803C12.7565 1.93225 12.8339 2.3717 12.7882 2.59319L12.7636 2.71272L12.4401 2.41389C11.9514 1.95686 11.6948 1.83733 11.0655 1.77053C10.3729 1.70022 9.68035 1.38381 9.5327 1.07092C9.47293 0.944363 9.45535 0.627956 9.50809 0.627956C9.52567 0.627956 9.60653 0.652565 9.6909 0.684206ZM10.5382 2.20998C10.6999 2.24514 10.96 2.29436 11.1218 2.31194C11.4593 2.35413 11.6737 2.4385 11.8917 2.6178C12.0675 2.76194 12.3065 3.08537 12.4647 3.39826L12.5772 3.61975L12.4788 3.78498C12.0675 4.48811 11.1429 4.73068 10.387 4.33342C10.0952 4.17873 9.74012 3.82014 9.60301 3.53537C9.39559 3.1135 9.3991 2.61077 9.61707 2.15725L9.72254 1.93577L9.98621 2.03772C10.1304 2.09397 10.38 2.17131 10.5382 2.20998ZM1.22529 4.73068C1.77021 5.01193 4.9413 6.84006 5.00458 6.90685C5.14872 7.06857 5.08544 7.3674 4.88153 7.50099C4.82177 7.53966 4.71981 7.56779 4.62489 7.56779C4.48075 7.56779 4.27685 7.45881 2.55419 6.48146C0.574898 5.35646 0.511617 5.31428 0.511617 5.09982C0.511617 4.7799 0.915913 4.56897 1.22529 4.73068ZM10.8546 5.03303C11.1077 5.06818 11.5331 5.04006 11.7827 4.96623C11.8425 4.95217 11.8811 4.98029 11.9866 5.12092C12.0569 5.21584 12.1132 5.30373 12.1132 5.31428C12.1132 5.32482 12.078 5.33889 12.0323 5.35295C11.9022 5.38459 11.6807 5.59904 11.5858 5.78185C11.4663 6.01389 11.4628 6.41115 11.5753 6.62209C11.7054 6.86818 11.9268 7.04045 12.2503 7.14943C12.528 7.24084 12.5421 7.24787 12.5245 7.33927C12.5139 7.38849 12.4542 7.69435 12.3909 8.01779L12.2749 8.60841H10.9987H9.72254V7.37443V6.13693L10.1022 5.54631C10.3764 5.11389 10.4925 4.95568 10.5311 4.97326C10.5593 4.98381 10.7069 5.00842 10.8546 5.03303ZM7.56747 5.04006C7.60965 5.0717 7.81004 5.33537 8.01043 5.63068C8.21434 5.92248 8.41473 6.1967 8.45692 6.23537C8.5202 6.29162 8.59403 6.3092 8.86473 6.31623L9.1952 6.33029V6.76623V7.20216H8.67137C8.22489 7.20216 8.137 7.19162 8.07723 7.13888C7.94715 7.02638 6.9663 5.60256 6.93465 5.47951C6.89247 5.32482 6.96981 5.1385 7.11395 5.05061C7.23348 4.97326 7.46903 4.96975 7.56747 5.04006ZM13.4667 6.11935C14.1417 6.35139 14.444 6.47092 14.5214 6.53771L14.6268 6.63263L14.6374 7.64865C14.6479 8.53107 14.6409 8.67521 14.5917 8.77013C14.4792 8.98107 14.212 9.0549 14.0081 8.93536C13.8218 8.82638 13.8007 8.72443 13.8007 7.94748C13.8007 7.30412 13.7936 7.24084 13.7303 7.15998C13.6776 7.09318 13.4983 7.01584 12.9534 6.83302C12.1729 6.56935 12.0534 6.49904 12.0182 6.28107C11.9796 6.02443 12.1659 5.79592 12.412 5.79592C12.4718 5.79592 12.9428 5.94006 13.4667 6.11935ZM12.1483 9.16388C12.1483 9.24122 11.8776 9.63146 11.6983 9.81427C11.4452 10.0744 11.1218 10.2854 10.2147 10.7881C9.81746 11.0061 9.45184 11.217 9.3991 11.2557C9.21278 11.3928 9.1952 11.4877 9.1952 12.2963V13.0381H8.68192H8.16864L8.1827 11.8322C8.19325 10.6791 8.19676 10.6229 8.27059 10.4893C8.30926 10.4119 8.62215 10.0744 8.95965 9.74044L9.57137 9.13576H10.8616C11.5682 9.13576 12.1483 9.14982 12.1483 9.16388ZM12.5139 10.4014C12.6475 11.1186 12.6932 11.2592 12.8163 11.3611C12.8796 11.4174 13.1714 11.5334 13.5792 11.667C13.9413 11.79 14.2647 11.899 14.2964 11.9166C14.3491 11.9447 14.335 12.001 14.1733 12.4229C14.0714 12.683 13.98 12.9045 13.9694 12.915C13.9589 12.9256 13.8639 12.9045 13.762 12.8658C13.6565 12.8272 13.1292 12.6443 12.5878 12.458C12.0499 12.2752 11.5682 12.0994 11.5225 12.0678C11.4698 12.0326 11.3468 11.8217 11.1921 11.5018C11.0585 11.2205 10.953 10.9885 10.96 10.985C10.9671 10.9779 11.0971 10.9006 11.2518 10.8092C11.6983 10.5385 12.2151 10.099 12.3346 9.8881C12.3522 9.85646 12.3804 9.84591 12.3944 9.86349C12.4085 9.87755 12.4647 10.1201 12.5139 10.4014ZM10.735 11.7654C10.8932 12.0959 11.0339 12.335 11.1147 12.4158C11.2624 12.5635 11.3643 12.6022 12.7846 13.0873L13.7901 13.4318L13.8112 13.7518C13.8253 13.9311 13.8569 14.1525 13.8886 14.251C13.9167 14.3459 13.9413 14.4373 13.9413 14.4514C13.9413 14.469 13.6178 14.4795 13.2206 14.4795C12.4999 14.4795 12.4964 14.4795 12.412 14.5674C12.2749 14.701 12.2995 14.8697 12.4682 14.9541C12.5526 14.9998 12.8796 15.0068 14.5671 15.0068C16.8276 15.0068 16.7608 14.9998 17.0702 15.2775C17.3409 15.5201 17.4393 15.7346 17.4393 16.0791C17.4393 16.29 17.4217 16.399 17.362 16.5221C17.2565 16.7541 17.0596 16.958 16.8311 17.0705L16.6307 17.1689L10.9811 17.1795L5.32802 17.1865V16.7646V16.3428H10.9073H16.4866L16.5675 16.2654C16.6659 16.174 16.6729 16.0299 16.5815 15.9174L16.5147 15.833L10.9214 15.8225L5.32802 15.8154V15.4111V15.0068H8.34442C11.5577 15.0068 11.4874 15.0104 11.5718 14.8346C11.6175 14.7467 11.5788 14.5709 11.505 14.5217C11.4804 14.5076 11.0761 14.49 10.6014 14.4795L9.74012 14.4619V13.0592V11.66L10.0917 11.4561C10.285 11.3436 10.4538 11.2486 10.4643 11.2486C10.4749 11.2451 10.5979 11.4807 10.735 11.7654ZM15.2456 12.2506L15.5901 12.3772L15.5268 12.5389C15.4917 12.6303 15.3159 13.1049 15.1331 13.59C14.8413 14.3881 14.7991 14.4795 14.7288 14.4795C14.6866 14.4795 14.6233 14.469 14.5917 14.4584C14.4686 14.4092 14.328 13.9803 14.328 13.6498C14.328 13.5408 14.3983 13.3088 14.56 12.8869C14.8659 12.0854 14.8518 12.124 14.8764 12.124C14.8905 12.124 15.0557 12.1803 15.2456 12.2506ZM3.96747 13.1154C4.22411 13.2385 4.52997 13.5268 4.64247 13.7553C4.77958 14.0436 4.80067 14.3002 4.80067 15.7873V17.1865H2.74755C0.908882 17.1865 0.694429 17.1795 0.673335 17.1303C0.64521 17.0564 0.64521 13.1295 0.673335 13.0557C0.694429 13.0065 0.842085 12.9994 2.23076 13.01L3.76357 13.0205L3.96747 13.1154ZM9.1952 14.0225V14.4795H8.08778C6.84325 14.4795 6.91708 14.4971 7.04715 14.2158C7.16317 13.9592 7.48661 13.6955 7.78192 13.6147C7.88387 13.5865 8.18622 13.569 8.57293 13.569L9.1952 13.5654V14.0225Z" />
                                                                    <path
                                                                        d="M2.09375 14.258C1.9918 14.2967 1.88281 14.4232 1.88281 14.4971C1.88281 14.5393 1.91445 14.6166 1.95664 14.6693C2.02695 14.7572 2.04102 14.7607 2.41367 14.7607C2.75117 14.7607 2.80391 14.7537 2.86719 14.6904C2.95508 14.6025 2.95859 14.4408 2.8707 14.3354C2.81094 14.258 2.77226 14.251 2.47344 14.2439C2.29414 14.2404 2.12187 14.2439 2.09375 14.258Z" />
                                                                    <path
                                                                        d="M1.9707 15.5869C1.92148 15.6326 1.88281 15.7135 1.88281 15.7627C1.88281 15.8119 1.92148 15.8928 1.9707 15.9385C2.04805 16.0193 2.07969 16.0264 2.40312 16.0264C2.70195 16.0264 2.76523 16.0158 2.84609 15.9525C2.96562 15.8576 2.97265 15.6748 2.86015 15.5693C2.79336 15.5096 2.73711 15.499 2.4207 15.499C2.07969 15.499 2.04805 15.5061 1.9707 15.5869Z" />
                                                                </svg> Gym
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M2.96092 0.994803C2.83436 1.06512 2.63748 1.34637 2.56365 1.56433C2.44412 1.9159 2.48631 2.38347 2.66561 2.67175C2.69373 2.72097 2.77811 2.83347 2.85193 2.92136C3.12615 3.25886 3.12967 3.53308 2.86248 3.8987C2.72537 4.08855 2.76404 4.31706 2.95389 4.4155C3.21053 4.54558 3.43553 4.39441 3.64646 3.94792C3.72732 3.77214 3.74139 3.70183 3.74139 3.41003C3.74139 3.11824 3.72732 3.04792 3.64646 2.87214C3.59373 2.75613 3.48475 2.59089 3.4074 2.49597C3.12615 2.15847 3.11912 1.88425 3.38982 1.51511C3.43904 1.44832 3.47771 1.36043 3.47771 1.31472C3.47771 1.04402 3.18943 0.868241 2.96092 0.994803Z" />
                                                                        <path
                                                                            d="M9.36717 2.03909C8.67108 2.17971 8.06639 2.69651 7.83788 3.35041C7.61991 3.97268 7.7078 4.68283 8.06991 5.1926L8.18944 5.36135L7.7078 5.38596C7.44061 5.3965 7.12772 5.43518 7.01171 5.46682C6.72343 5.54416 6.33319 5.73752 6.11874 5.90627C6.0203 5.98361 5.93241 6.04689 5.92538 6.04689C5.91483 6.04689 5.71796 5.81135 5.48593 5.52307C5.2539 5.2383 5.03944 4.99221 5.0078 4.97815C4.89882 4.93596 4.71601 4.95705 4.6457 5.01682C4.52616 5.12229 3.43632 6.50744 3.30976 6.71486C2.96875 7.28088 2.97226 8.05783 3.32031 8.58165C3.36953 8.65548 3.4082 8.72579 3.4082 8.73634C3.4082 8.74689 3.23593 8.75392 3.02851 8.75392H2.64531L2.34296 8.94376C1.9 9.2215 1.66797 9.41134 1.32695 9.76642C0.69414 10.4309 0.261718 11.2711 0.0789061 12.1922C-0.00546871 12.6176 -0.00546871 13.5773 0.0789061 13.9992C0.18789 14.5441 0.462109 15.2402 0.729296 15.6586C1.02812 16.1262 1.59414 16.7449 1.92461 16.9629L2.06172 17.0508L8.50936 17.0438L14.957 17.0332L15.3086 16.9383C16.1875 16.6957 16.9011 16.1789 17.4144 15.416C17.541 15.2262 17.5761 15.1453 17.5761 15.0293C17.5761 14.8219 17.4496 14.6953 17.2457 14.6953C17.0629 14.6988 17.0312 14.7234 16.8133 15.0469C16.5355 15.4617 16.1383 15.8133 15.7023 16.0277C15.0976 16.3301 14.9605 16.3477 13.1465 16.3477H11.6172L11.7402 16.2527C12.7808 15.4477 13.3785 14.1645 13.3082 12.8742C13.2836 12.4488 13.2308 12.2625 13.1113 12.1992C13.0726 12.1781 12.8933 12.143 12.7176 12.1219C12.1058 12.0445 11.3043 12.1816 10.6926 12.4629C10.5484 12.5297 10.4254 12.5859 10.4183 12.5859C10.4148 12.5859 10.3832 12.5016 10.348 12.3996C10.1722 11.8652 9.75389 11.2254 9.30741 10.8106L9.0578 10.5785L11.9898 10.5926C15.3086 10.6031 15.0449 10.582 15.7093 10.9055C16.0328 11.0602 16.1172 11.1199 16.4195 11.4223C16.6129 11.6156 16.8062 11.8477 16.873 11.9637C16.9328 12.0727 17.0242 12.1957 17.0734 12.2344C17.2879 12.4031 17.6113 12.2414 17.6113 11.9672C17.6113 11.6824 17.091 10.9969 16.5847 10.6172C16.2965 10.3992 15.8008 10.1356 15.5125 10.0512L15.3648 10.009L15.6074 9.74532C15.8781 9.45353 16.082 9.09142 16.2121 8.68361C16.2789 8.46564 16.2929 8.34259 16.2929 7.98048C16.2929 7.47072 16.2261 7.20002 15.9836 6.73244C15.7832 6.34221 15.3472 5.90627 14.957 5.70588C14.4789 5.45979 14.2574 5.40705 13.6351 5.38596L13.0867 5.37189L13.2273 5.16096C13.6211 4.57033 13.6703 3.80393 13.3539 3.14299C13.1922 2.80549 12.7633 2.37307 12.4328 2.21838C12.0285 2.02503 11.8492 2.00393 10.6152 2.00745C10.007 2.01096 9.44452 2.02503 9.36717 2.03909ZM12.039 2.80901C12.1867 2.86877 12.3133 2.95666 12.4644 3.10784C12.7492 3.3926 12.8441 3.62815 12.8441 4.04299C12.8441 4.45783 12.7492 4.69338 12.4644 4.97815C12.3133 5.12932 12.1867 5.21721 12.039 5.27697C11.8351 5.35783 11.7929 5.36135 10.7418 5.37189C10.0808 5.37893 9.58866 5.36838 9.4867 5.34729C8.77655 5.1926 8.31249 4.5176 8.43553 3.82502C8.53045 3.31877 8.84334 2.94963 9.33553 2.78088C9.53241 2.71057 9.60975 2.70706 10.6855 2.7176C11.8 2.72463 11.8316 2.72815 12.039 2.80901ZM5.32421 6.45119C5.5703 6.76056 5.81288 7.09806 5.85858 7.20002C6.02733 7.55861 5.96054 8.0297 5.7039 8.33205C5.58437 8.46916 5.29609 8.68361 5.22929 8.68361C5.21523 8.68361 5.20116 8.40587 5.20116 8.06486V7.44611L5.09921 7.34416C5.0289 7.27384 4.95859 7.2422 4.88476 7.2422C4.75116 7.2422 4.58945 7.32306 4.54726 7.40744C4.52968 7.44259 4.50859 7.74142 4.49804 8.07541L4.48046 8.68009L4.36796 8.62736C4.18163 8.53595 3.99179 8.34962 3.88281 8.15275C3.78788 7.98048 3.77734 7.93126 3.77734 7.6465C3.77734 7.38986 3.7914 7.29845 3.85468 7.17189C3.93202 7.02072 4.84257 5.85353 4.86718 5.87814C4.87421 5.88517 5.08163 6.14182 5.32421 6.45119ZM14.1801 6.15236C14.5281 6.24025 14.7918 6.39142 15.0449 6.64455C15.298 6.89767 15.4492 7.16134 15.5371 7.50939C15.625 7.85392 15.625 8.10705 15.5371 8.45158C15.4492 8.79962 15.298 9.06329 15.0449 9.31642C14.7918 9.56954 14.5281 9.72072 14.1801 9.80861C13.9199 9.8754 13.7863 9.87892 11.2058 9.87892H8.49881L8.26678 9.64689C7.97147 9.35509 7.69022 9.13712 7.33163 8.92267L7.05389 8.75392H6.66718H6.28397L6.34726 8.65548C6.55819 8.33908 6.6496 8.0297 6.65311 7.6465C6.65663 7.33361 6.5828 7.03478 6.44218 6.78517L6.35429 6.62697L6.4914 6.50744C6.65663 6.3633 7.06093 6.16642 7.29647 6.12424C7.39491 6.10314 8.83983 6.08908 10.689 6.08557C13.7933 6.08205 13.9199 6.08557 14.1801 6.15236ZM7.15233 9.63986C7.43007 9.81915 8.04881 10.3992 8.17186 10.5926L8.23514 10.691L8.00663 10.9266C7.60233 11.3484 7.31053 11.8055 7.11718 12.3223C7.06444 12.4559 7.01874 12.5719 7.01522 12.5789C7.00819 12.5824 6.88866 12.5332 6.74452 12.4664C6.15038 12.1852 5.32773 12.0445 4.71952 12.1219C4.38554 12.1606 4.29062 12.1992 4.22031 12.3117C4.15351 12.4207 4.10429 12.9586 4.1289 13.3066C4.21327 14.4844 4.74062 15.4828 5.67577 16.2316L5.8164 16.3441L4.03046 16.3477H2.24101L1.93515 16.0418C1.56953 15.6727 1.35859 15.3844 1.14765 14.959C0.46914 13.602 0.574608 12.034 1.43242 10.7402C1.65742 10.4063 2.16718 9.90001 2.52929 9.65743L2.82812 9.45704H4.8496H6.8746L7.15233 9.63986ZM8.91717 11.3977C9.28983 11.7914 9.53592 12.1887 9.69764 12.6738L9.80311 12.9902L9.52889 13.2715C9.21952 13.5914 8.98045 13.9148 8.83631 14.2102C8.78006 14.3227 8.72733 14.4141 8.71678 14.4141C8.70624 14.4141 8.67108 14.3508 8.63592 14.2734C8.50936 13.9992 8.22108 13.602 7.93983 13.3066L7.65155 13.0078L7.69374 12.8109C7.80975 12.2977 8.50585 11.25 8.73085 11.25C8.75546 11.25 8.83631 11.3168 8.91717 11.3977ZM5.87265 12.8988C6.4914 13.057 6.99764 13.3488 7.43358 13.7953C8.02421 14.4035 8.36522 15.2332 8.36522 16.0734V16.3477H8.10507C7.79569 16.3477 7.33514 16.2703 7.04686 16.1719C5.77421 15.7324 4.92343 14.6074 4.82851 13.2293C4.79335 12.7652 4.77929 12.7828 5.22929 12.8074C5.43671 12.8215 5.72499 12.8602 5.87265 12.8988ZM12.5945 13.2012C12.5664 14.734 11.4273 16.0277 9.87342 16.2984C9.70467 16.3266 9.45506 16.3477 9.32498 16.3406L9.08592 16.3301L9.07538 16.1191C9.06131 15.859 9.12108 15.4266 9.216 15.1207C9.63084 13.7566 10.9527 12.7793 12.3379 12.8074L12.6015 12.8145L12.5945 13.2012Z" />
                                                                        <path
                                                                            d="M1.10141 2.39074C0.922118 2.46106 0.693602 2.85129 0.630321 3.1923C0.563524 3.57199 0.697118 4.02199 0.960789 4.31379C1.24907 4.63722 1.26313 4.96418 0.999461 5.28058C0.809618 5.5091 0.929149 5.82199 1.22095 5.86066C1.36509 5.88175 1.37915 5.87472 1.54087 5.70597C1.77641 5.45988 1.87485 5.20324 1.87485 4.81652C1.87485 4.44035 1.78696 4.20832 1.5479 3.92355C1.25962 3.58605 1.23852 3.2802 1.4811 2.97434C1.63579 2.78098 1.63579 2.59465 1.4811 2.45754C1.36509 2.35559 1.24555 2.33098 1.10141 2.39074Z" />
                                                                        <path
                                                                            d="M17.4727 13.1977C17.1668 13.3664 17.2969 13.8516 17.6449 13.8516C17.8242 13.8516 17.9965 13.6793 17.9965 13.5035C17.9965 13.2398 17.7047 13.0676 17.4727 13.1977Z" />
                                                                    </g>
                                                                </svg> Spa
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 16">
                                                                    <path
                                                                        d="M12.0937 0.0562334C11.9531 0.126546 11.8371 0.239046 11.7668 0.369123C11.714 0.46053 11.707 0.615218 11.707 1.55037C11.707 2.56287 11.7105 2.63318 11.7738 2.7035C11.8652 2.80545 12.041 2.80193 12.1394 2.69646C12.2168 2.61561 12.2168 2.591 12.2168 1.61365C12.2168 1.06522 12.2308 0.594124 12.2449 0.569514C12.2695 0.534358 12.8144 0.527327 14.857 0.534358L17.4375 0.544905L17.448 3.10779C17.4515 4.97107 17.4445 5.68474 17.4164 5.71638C17.3601 5.78318 12.3258 5.79021 12.259 5.72341C12.2273 5.69177 12.2168 5.46326 12.2168 4.9113C12.2168 4.4367 12.2027 4.11677 12.1781 4.07459C12.1254 3.96912 11.9777 3.92693 11.8582 3.97615C11.7035 4.03943 11.6824 4.18006 11.6965 5.02732C11.707 5.75857 11.7105 5.79021 11.7949 5.94138C11.8476 6.0363 11.939 6.12771 12.0234 6.17693C12.1605 6.25427 12.1887 6.25779 13.2293 6.25779H14.291V7.80466C14.291 9.05622 14.284 9.35153 14.2453 9.35153C14.0941 9.35153 13.5597 9.17927 13.2926 9.04567C13.1203 8.9613 12.5051 8.56755 11.9215 8.17732C10.6137 7.29138 10.3183 7.14021 9.61522 6.97497C9.39022 6.92575 9.09842 6.91169 7.59374 6.90114C6.42304 6.8906 5.69179 6.89763 5.40351 6.92575C4.46835 7.01013 3.77578 7.32302 3.02343 8.00153C2.41875 8.54294 1.96875 8.782 1.20234 8.9613C0.956249 9.02106 0.692577 9.10192 0.611718 9.14059C0.418359 9.24255 0.214453 9.46052 0.0984373 9.69606L0 9.89645V11.3906C0 12.7441 0.00703124 12.8953 0.0597655 12.9972C0.175781 13.2047 0.323437 13.3066 0.878905 13.5527L1.43086 13.8023L1.5082 14.0132C1.62422 14.3261 1.74375 14.5125 1.96523 14.7234C2.78789 15.5004 4.14843 15.2437 4.64062 14.2207L4.76718 13.957H9.01756H13.2644L13.391 14.2242C13.5914 14.6496 13.9957 14.9906 14.4492 15.1207C14.6988 15.191 15.2086 15.1769 15.4511 15.0925C15.8836 14.9449 16.2527 14.6109 16.4461 14.1996L16.5551 13.964L16.9066 13.95C17.114 13.9394 17.3144 13.9078 17.3918 13.8761C17.6097 13.7847 17.8312 13.5527 17.9121 13.3312C17.9824 13.1449 17.9859 13.0781 17.9754 12.2343C17.9613 11.2078 17.9472 11.1515 17.6273 10.6699C17.2371 10.0898 16.8468 9.87184 15.8308 9.66794L15.6269 9.62927V7.94528V6.2613L16.6043 6.25076L17.5851 6.24021L17.7152 6.13826C17.789 6.08201 17.8804 5.96951 17.9156 5.88513C17.9824 5.74099 17.9824 5.62498 17.9754 3.08318L17.9648 0.435921L17.8699 0.29178C17.8136 0.207405 17.7152 0.119514 17.6238 0.0738115C17.4691 -1.62125e-05 17.448 -1.62125e-05 14.8324 -1.62125e-05C12.5156 -1.62125e-05 12.1851 0.00701523 12.0937 0.0562334ZM15.0996 7.89607C15.0996 9.43591 15.0961 9.53083 15.0398 9.51677C15.0047 9.50622 14.9344 9.48864 14.8816 9.47809L14.7832 9.457V7.87849C14.7832 7.01365 14.7937 6.29294 14.8078 6.2824C14.8183 6.26833 14.8922 6.25779 14.966 6.25779H15.0996V7.89607ZM9.49217 7.48474C9.89647 7.56911 10.3078 7.72732 10.6101 7.91716C10.7402 8.00153 11.2676 8.3531 11.7844 8.70114C12.7195 9.33044 13.2328 9.62223 13.5738 9.72419C13.6722 9.75231 14.3332 9.89294 15.0433 10.0336C16.1683 10.2586 16.3687 10.3078 16.5937 10.4203C16.8961 10.5679 17.1738 10.8492 17.3355 11.1691L17.4375 11.373L17.448 12.2343C17.4586 12.9761 17.4515 13.1097 17.4023 13.2047C17.3109 13.3734 17.1843 13.4297 16.882 13.4297H16.6148L16.5902 13.2609C16.4566 12.3328 15.6058 11.6859 14.6847 11.8125C13.9781 11.9074 13.4015 12.4418 13.2539 13.1379C13.2258 13.2714 13.2012 13.3875 13.2012 13.405C13.2012 13.4191 11.3133 13.4261 9.01053 13.4226L4.8164 13.4121L4.79179 13.2363C4.64765 12.1218 3.41718 11.4785 2.38007 11.9707C1.93359 12.1816 1.55742 12.6492 1.47656 13.0886C1.45195 13.2117 1.4414 13.2222 1.36054 13.2011C1.31484 13.1906 1.10742 13.0992 0.899999 12.9972L0.527343 12.8144L0.516796 11.4152C0.509765 10.0757 0.51328 10.0125 0.580077 9.87887C0.692577 9.65739 0.829686 9.58005 1.31836 9.46403C2.19023 9.25309 2.72461 8.97888 3.2871 8.45505C3.62812 8.13513 3.86015 7.96638 4.18359 7.79763C4.89726 7.43552 4.98163 7.42497 7.27733 7.42146C8.99999 7.41794 9.20389 7.42497 9.49217 7.48474ZM3.6457 12.4382C3.91288 12.5683 4.06757 12.73 4.19062 13.0007C4.47538 13.6195 4.17304 14.3507 3.53671 14.5933C3.37851 14.6531 3.28359 14.6636 3.05859 14.6531C2.55586 14.625 2.16562 14.3402 2.00039 13.8796C1.9125 13.6336 1.93008 13.2574 2.03906 13.0148C2.32734 12.3855 3.02695 12.1324 3.6457 12.4382ZM15.4336 12.4277C16.1578 12.7968 16.309 13.739 15.7359 14.3121C15.1594 14.8886 14.2031 14.7304 13.8445 13.9957C13.7601 13.8234 13.7461 13.7566 13.7461 13.4824C13.7461 13.2187 13.7601 13.1379 13.8304 12.9937C13.9429 12.7652 14.0871 12.6035 14.2875 12.4875C14.5336 12.3433 14.6707 12.3082 14.9625 12.3187C15.1769 12.3257 15.2754 12.3468 15.4336 12.4277Z" />
                                                                    <path
                                                                        d="M5.0871 7.85743C4.53515 7.97696 3.84609 8.34961 3.55078 8.6836C3.42422 8.82774 2.98125 9.16524 2.67187 9.35156C2.28164 9.58711 2.17969 9.72774 2.17969 10.0371C2.17969 10.2199 2.19727 10.2762 2.28164 10.3992C2.45742 10.6559 2.57344 10.6875 3.33281 10.6875C3.94453 10.6875 3.99375 10.684 4.06054 10.6172C4.09922 10.5785 4.13086 10.5012 4.13086 10.4414C4.13086 10.3816 4.09922 10.3043 4.06054 10.2656C3.99726 10.2023 3.94453 10.1953 3.40664 10.1953C3.07265 10.1953 2.79492 10.1813 2.75625 10.1602C2.63672 10.0934 2.67187 9.95977 2.84062 9.85781C3.26953 9.58711 3.4875 9.42539 3.81797 9.1336C4.55273 8.48321 4.90781 8.33907 5.84648 8.30743L6.41601 8.28633V9.24258V10.1953H5.9414C5.51249 10.1953 5.45976 10.2023 5.39648 10.2656C5.35781 10.3043 5.32617 10.3816 5.32617 10.4414C5.32617 10.5012 5.35781 10.5785 5.39648 10.6172C5.46679 10.6875 5.51249 10.6875 9.10546 10.6875H12.7441L12.8566 10.5855C12.9621 10.4941 12.9726 10.4625 12.9691 10.2938C12.9691 10.1215 12.9164 9.98086 12.8074 9.84024C12.7547 9.77695 10.5187 8.2793 10.3008 8.16329C10.0512 8.02969 9.81561 7.9418 9.51678 7.87149C9.24608 7.80821 9.08788 7.80469 7.26679 7.80821C5.74804 7.80821 5.25937 7.82227 5.0871 7.85743ZM9.46405 8.37774C9.85077 8.47969 10.1004 8.62032 11.2148 9.36211C11.816 9.76289 12.3363 10.1109 12.375 10.1391C12.4383 10.1848 12.1148 10.1918 9.69608 10.1953H6.94335V9.24258V8.28985L8.09647 8.30743C9.0035 8.31797 9.29178 8.33555 9.46405 8.37774Z" />
                                                                    <path
                                                                        d="M6.69194 11.1129C6.50561 11.1832 6.48452 11.4715 6.65678 11.5629C6.69545 11.584 6.92749 11.6016 7.18061 11.6016C7.58842 11.6016 7.64467 11.5945 7.72905 11.5277C7.83803 11.4398 7.84858 11.2957 7.75366 11.1762C7.69037 11.0953 7.66225 11.0918 7.23334 11.0848C6.98725 11.0813 6.74116 11.0918 6.69194 11.1129Z" />
                                                                    <path
                                                                        d="M2.76746 12.8002C2.60223 12.8811 2.47567 13.0252 2.39129 13.2291C2.16629 13.7705 2.71824 14.3893 3.29129 14.2381C3.88543 14.0834 4.08933 13.3416 3.6534 12.9303C3.42488 12.7193 3.0452 12.6631 2.76746 12.8002ZM3.23152 13.2572C3.41082 13.3381 3.42488 13.6193 3.25613 13.7072C2.9784 13.8549 2.71473 13.4822 2.95731 13.2924C3.06277 13.208 3.10848 13.201 3.23152 13.2572Z" />
                                                                    <path
                                                                        d="M14.5732 12.7935C14.1337 13.029 14.0072 13.5564 14.2954 13.9606C14.5521 14.3192 15.1744 14.3544 15.4732 14.0204C15.8283 13.6337 15.7052 13.0114 15.2306 12.7864C15.0619 12.7056 14.7314 12.7091 14.5732 12.7935ZM15.0829 13.3067C15.1357 13.356 15.1708 13.4333 15.1708 13.486C15.1708 13.6161 15.0443 13.7462 14.9177 13.7462C14.7912 13.7462 14.6435 13.6056 14.6435 13.4825C14.6435 13.3665 14.7912 13.2189 14.9072 13.2189C14.9564 13.2189 15.0372 13.2575 15.0829 13.3067Z" />
                                                                    <path
                                                                        d="M6.41061 1.3535C5.84459 1.45897 5.22233 1.70857 4.77936 2.00037C4.45944 2.21131 4.05866 2.56287 4.01998 2.66482C3.94616 2.85818 4.13952 3.05506 4.33639 2.98123C4.38209 2.96717 4.50514 2.87576 4.60709 2.78084C5.48248 1.97928 6.75162 1.64178 7.96099 1.88787C8.64654 2.02498 9.18794 2.30271 9.79966 2.82654C10.0282 3.02342 10.1793 3.05154 10.2883 2.91443C10.4043 2.77381 10.3692 2.66482 10.1512 2.4574C9.62388 1.95467 8.98404 1.61365 8.22466 1.41678C7.7817 1.30428 6.84303 1.27264 6.41061 1.3535Z" />
                                                                    <path
                                                                        d="M14.0009 1.51544C13.9411 1.54708 13.9376 1.65958 13.9376 3.0377C13.9376 4.72871 13.9235 4.64082 14.2259 4.64082C14.4825 4.64082 14.5001 4.60215 14.5001 3.99746V3.48067H14.6689C14.9853 3.48067 15.4106 3.41387 15.5478 3.34356C15.8747 3.17832 16.0294 2.84786 16.0048 2.37676C15.9802 1.92676 15.7798 1.63145 15.4353 1.5295C15.2278 1.46622 14.0993 1.45567 14.0009 1.51544ZM15.2349 2.02169C15.3825 2.09551 15.4599 2.28887 15.4423 2.53497C15.4142 2.90411 15.2595 3.01661 14.7743 3.02012L14.5001 3.02364V2.49629V1.96895H14.8165C15.0274 1.96895 15.1716 1.98653 15.2349 2.02169Z" />
                                                                    <path
                                                                        d="M6.66638 2.8299C6.21287 2.91427 5.80506 3.09709 5.40427 3.39943C5.10193 3.63146 5.02107 3.75802 5.08084 3.90216C5.1617 4.09552 5.42185 4.10255 5.57654 3.91623C5.68201 3.78615 6.15662 3.51193 6.43084 3.42404C6.80349 3.30451 7.30974 3.27638 7.6824 3.35373C8.01286 3.42404 8.4488 3.63498 8.69841 3.84943C8.80388 3.94084 8.92692 4.02873 8.97263 4.0463C9.13083 4.10607 9.29958 3.97599 9.29958 3.80021C9.29958 3.6174 8.72302 3.17443 8.23786 2.9881C7.73161 2.79123 7.18318 2.73849 6.66638 2.8299Z" />
                                                                    <path
                                                                        d="M6.87812 4.29258C6.52305 4.36289 6.09766 4.66524 6.09766 4.84805C6.09766 4.96758 6.22773 5.09766 6.34727 5.09766C6.39648 5.09766 6.49141 5.05547 6.5582 5.00625C6.95547 4.70391 7.39844 4.70391 7.79922 5.00977C7.93984 5.11523 8.07695 5.12227 8.17187 5.02734C8.39336 4.80586 8.06992 4.45078 7.51445 4.30664C7.29648 4.25039 7.11367 4.24336 6.87812 4.29258Z" />
                                                                </svg> Parking
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg> Bar
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg>Wifi
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <div class="room-type">
                                                            <h6>Deluxe King Room</h6>
                                                            <span>1 king bed</span>
                                                            <div class="deals">
                                                                <span><strong>Free cancellation</strong> <br> before 48
                                                                    hours</span>
                                                            </div>
                                                        </div>
                                                        <div class="price-and-book">
                                                            <div class="price-area">
                                                                <p>1 night, 2 adults</p>
                                                            </div>
                                                            <div class="book-btn">
                                                                <a href="contact.php" class="primary-btn2">Enquire Now<i
                                                                        class="bi bi-arrow-right"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-md-6">
                                    <div class="room-suits-card two">
                                        <div class="row g-0">
                                            <div class="col-md-12">
                                                <div class="swiper hotel-img-slider">
                                                    <span class="batch">Breakfast included</span>
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel7.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel8.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel9.webp" alt>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination5"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="room-content">
                                                    <div class="content-top">
                                                        <div class="reviews">
                                                            <ul>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-half"></i></li>
                                                            </ul>
                                                            <span>4.5 reviews</span>
                                                        </div>
                                                        <h5 class="hotel-fort mt-3">The Grand Hotel</h5>
                                                        <ul class="loaction-area">
                                                            <li><i class="bi bi-geo-alt"></i>Dubai</li>

                                                        </ul>
                                                        <ul class="facilisis">
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.683593 0.0562801C0.490234 0.123077 0.30039 0.288311 0.180859 0.485186L0.0859375 0.650419V7.20705V13.7637L0.163281 13.9043C0.251172 14.0695 0.423437 14.2383 0.595702 14.3297C0.711718 14.393 0.848827 14.3965 2.87382 14.407L5.02538 14.4176L5.11327 14.3297C5.21874 14.2242 5.22577 14.1012 5.13437 13.9887L5.06757 13.9043L2.93711 13.8867L0.80664 13.8691L0.711718 13.7707L0.61328 13.6758L0.602734 10.582L0.595702 7.4883H3.79492H6.99413V10.6875V13.8867H6.55468C6.30507 13.8867 6.08007 13.9043 6.03085 13.9254C5.85155 14.0063 5.83749 14.2875 6.00624 14.3754C6.05194 14.4035 6.8289 14.4141 8.39686 14.4141H10.7172L10.7277 15.8801C10.7383 17.3109 10.7418 17.3531 10.8156 17.4902C10.9035 17.6555 11.0758 17.8242 11.248 17.9156C11.364 17.9789 11.5117 17.9824 14.3242 17.9824H17.2773L17.4179 17.9051C17.6043 17.8066 17.766 17.6309 17.8539 17.4375C17.9242 17.2863 17.9277 17.2125 17.9277 15.3949C17.9277 13.2645 17.9312 13.2891 17.664 13.0254C17.5832 12.9445 17.4461 12.8496 17.3582 12.8145L17.1965 12.7547L17.1824 11.9215C17.1683 11.1797 17.1578 11.0672 17.0875 10.8457C16.8344 10.0582 16.2683 9.41486 15.5371 9.07736C15.2383 8.93673 14.8551 8.82423 14.6863 8.82423C14.4648 8.82423 14.4824 9.17228 14.4824 4.78479C14.4824 0.260185 14.5035 0.580107 14.2012 0.281281C13.8988 -0.02458 14.5246 3.05176e-05 7.26132 0.00354576C1.7664 0.00354576 0.803124 0.0140934 0.683593 0.0562801ZM7.00116 1.09339C7.01171 1.63831 7.01522 1.6594 7.09608 1.7262C7.20155 1.81409 7.36327 1.81057 7.45116 1.72268C7.51444 1.6594 7.52147 1.60667 7.52147 1.08987V0.527372H10.5801C13.2484 0.527372 13.6562 0.534405 13.7441 0.580107C13.9656 0.692608 13.9551 0.541435 13.9551 3.90237V6.96096L10.7488 6.95393L7.53905 6.94338L7.5285 4.8094L7.52147 2.67542L7.43007 2.6051C7.30702 2.51018 7.22968 2.5137 7.11015 2.61565L7.01171 2.70003L7.00116 4.83049L6.99413 6.96096H3.79492H0.595702V3.90237C0.595702 1.23753 0.602734 0.8262 0.648437 0.73831C0.760936 0.520342 0.602734 0.53089 3.94257 0.527372H6.9871L7.00116 1.09339ZM13.9551 8.14924V8.81017L13.6844 8.87345C12.7633 9.08439 11.9758 9.76994 11.6383 10.6453C11.4871 11.0426 11.459 11.257 11.459 12.041V12.7512L11.2937 12.8145C10.9492 12.9481 10.7207 13.2996 10.7207 13.7004V13.8867H9.12108H7.52147V10.6875V7.4883H10.7383H13.9551V8.14924ZM15.0027 9.4254C15.4668 9.56955 15.9801 9.93869 16.2437 10.3254C16.5918 10.8281 16.6621 11.1199 16.6621 12.0516V12.7652L16.4793 12.7547L16.2929 12.7441L16.2754 11.9883C16.2578 11.3836 16.2437 11.1973 16.191 11.0567C16.0152 10.5645 15.6531 10.1496 15.2136 9.93517C14.9465 9.80158 14.5668 9.70314 14.3242 9.70314C14.0816 9.70314 13.7019 9.80158 13.4347 9.93517C12.9953 10.1496 12.6332 10.5645 12.4574 11.0567C12.4047 11.1973 12.3906 11.3836 12.373 11.9883L12.3555 12.7441L12.1726 12.7547L11.9863 12.7652V12.0516C11.9863 11.2289 12.0144 11.0777 12.2394 10.6172C12.4926 10.0969 13.0445 9.61876 13.6 9.43947C14.0254 9.30236 14.5738 9.29533 15.0027 9.4254ZM14.9676 10.3922C15.2312 10.5223 15.4844 10.7824 15.6179 11.0637L15.7304 11.3027L15.741 12.0305L15.7515 12.7617H14.3242H12.8969L12.9074 12.0305L12.9179 11.3027L13.0304 11.0637C13.1676 10.7789 13.4207 10.5188 13.6879 10.3922C13.7933 10.343 13.8988 10.3008 13.9164 10.3008C13.9445 10.3008 13.9551 10.5504 13.9551 11.0707C13.9551 11.7949 13.9586 11.8442 14.0289 11.932C14.1203 12.0481 14.2855 12.0551 14.4015 11.9461C14.4824 11.8723 14.4824 11.8617 14.4824 11.0637V10.2551L14.6336 10.2797C14.7144 10.2938 14.8656 10.343 14.9676 10.3922ZM17.2457 13.3524C17.2879 13.384 17.3406 13.4473 17.3617 13.4895C17.3898 13.5422 17.4004 14.1188 17.4004 15.3949V17.2266L17.2984 17.3391L17.1965 17.4551H14.3277H11.459L11.364 17.3566L11.2656 17.2617L11.2551 15.4406C11.2515 14.4422 11.2551 13.5914 11.2621 13.5492C11.2726 13.5106 11.3254 13.4332 11.3746 13.384L11.4695 13.2891H14.3207C16.9679 13.2891 17.1789 13.2961 17.2457 13.3524Z" />
                                                                        <path
                                                                            d="M1.88029 3.66674C1.30022 3.8601 0.92053 4.33823 0.885373 4.92182C0.811545 6.21908 2.35139 6.92221 3.26193 6.00463C3.4799 5.78666 3.61349 5.52651 3.66271 5.22768C3.76115 4.64057 3.43068 4.01479 2.88576 3.75463C2.68889 3.65971 2.60803 3.64213 2.33732 3.63159C2.14045 3.62456 1.96818 3.63862 1.88029 3.66674ZM2.66428 4.23979C3.38146 4.59838 3.28303 5.63198 2.50959 5.85698C1.68693 6.09604 1.05412 5.09409 1.62365 4.45073C1.89787 4.13784 2.29865 4.05698 2.66428 4.23979Z" />
                                                                        <path
                                                                            d="M1.87695 4.86914C1.82773 4.91484 1.78906 4.9957 1.78906 5.04492C1.78906 5.09414 1.82773 5.175 1.87695 5.2207C1.9543 5.30156 1.98945 5.30859 2.26367 5.30859C2.61172 5.30859 2.70312 5.25586 2.70312 5.04844C2.70312 4.85156 2.58008 4.78125 2.23906 4.78125C1.99297 4.78125 1.95078 4.7918 1.87695 4.86914Z" />
                                                                        <path
                                                                            d="M8.87639 3.66674C8.29631 3.8601 7.91662 4.33823 7.88147 4.92182C7.80764 6.21908 9.34748 6.92221 10.258 6.00463C10.476 5.78666 10.6096 5.52651 10.6588 5.22768C10.7572 4.64057 10.4268 4.01479 9.88185 3.75463C9.68498 3.65971 9.60412 3.64213 9.33342 3.63159C9.13654 3.62456 8.96428 3.63862 8.87639 3.66674ZM9.66037 4.23979C10.3776 4.59838 10.2791 5.63198 9.50568 5.85698C8.68303 6.09604 8.05022 5.09409 8.61975 4.45073C8.89397 4.13784 9.29475 4.05698 9.66037 4.23979Z" />
                                                                        <path
                                                                            d="M8.87305 4.86914C8.82383 4.91484 8.78516 4.9957 8.78516 5.04492C8.78516 5.09414 8.82383 5.175 8.87305 5.2207C8.95039 5.30156 8.98555 5.30859 9.25976 5.30859C9.60781 5.30859 9.69922 5.25586 9.69922 5.04844C9.69922 4.85156 9.57617 4.78125 9.23516 4.78125C8.98906 4.78125 8.94687 4.7918 8.87305 4.86914Z" />
                                                                        <path
                                                                            d="M8.92773 10.6313C8.51992 10.7438 8.18594 11.018 8.00664 11.3836C7.89766 11.6051 7.89062 11.6438 7.89062 11.9883C7.89062 12.3363 7.89766 12.375 8.00664 12.593C8.15078 12.8883 8.45664 13.1801 8.7414 13.2926C8.90312 13.3594 9.01562 13.3734 9.28281 13.377C9.59922 13.377 9.63086 13.3699 9.88398 13.2434C10.7207 12.832 10.9316 11.7668 10.3199 11.0566C10.0035 10.684 9.39883 10.5012 8.92773 10.6313ZM9.64492 11.1973C10.0949 11.4117 10.2777 11.9707 10.0387 12.4031C9.81015 12.818 9.325 12.9797 8.91015 12.7828C8.2 12.4488 8.2457 11.4328 8.98398 11.1586C9.15273 11.0953 9.46914 11.1164 9.64492 11.1973Z" />
                                                                        <path
                                                                            d="M8.85771 11.8546C8.71005 12.0164 8.812 12.2449 9.05458 12.2906C9.24091 12.3257 9.55731 12.2836 9.63466 12.2132C9.72255 12.1324 9.72606 11.9144 9.63817 11.8371C9.58896 11.7914 9.50106 11.7773 9.25146 11.7773C8.96669 11.7773 8.92099 11.7843 8.85771 11.8546Z" />
                                                                        <path
                                                                            d="M14.1098 13.676C13.7512 13.7498 13.3961 14.0346 13.2414 14.3721C13.1816 14.5022 13.1641 14.6041 13.1641 14.8537C13.1641 15.244 13.2344 15.4162 13.5156 15.7115L13.709 15.9154V16.1756C13.709 16.4779 13.7512 16.5764 13.9199 16.6924C14.0324 16.7662 14.0746 16.7733 14.384 16.7627C14.7039 16.7522 14.7285 16.7451 14.8305 16.6502C14.9605 16.5272 15.0098 16.369 15.0098 16.0912C15.0098 15.8944 15.0168 15.8768 15.1644 15.7326C15.2523 15.6483 15.3648 15.4971 15.4211 15.3951C15.509 15.2229 15.5195 15.1701 15.5195 14.8537C15.5195 14.5408 15.509 14.4846 15.4246 14.3229C15.3016 14.0908 14.9887 13.8061 14.7742 13.7322C14.5598 13.6584 14.2926 13.6373 14.1098 13.676ZM14.5281 14.2069C14.6934 14.2526 14.9008 14.4283 14.9605 14.5795C14.9887 14.6428 15.0098 14.7658 15.0098 14.8537C15.0098 14.9416 14.9887 15.0647 14.9605 15.1279C14.9184 15.2299 14.8586 15.2897 14.5633 15.5393C14.4895 15.599 14.4824 15.6342 14.4824 15.9225V16.2424H14.3629H14.2434L14.2293 15.9225C14.2187 15.5744 14.2434 15.6166 13.9199 15.367C13.5191 15.0612 13.6352 14.3932 14.1203 14.2209C14.2855 14.1612 14.3559 14.1576 14.5281 14.2069Z" />
                                                                        <path
                                                                            d="M1.93164 10.6313C1.52383 10.7438 1.18984 11.018 1.01055 11.3836C0.901562 11.6051 0.894531 11.6438 0.894531 11.9883C0.894531 12.3363 0.901562 12.375 1.01055 12.593C1.15469 12.8883 1.46055 13.1801 1.74531 13.2926C1.90703 13.3594 2.01953 13.3734 2.28672 13.377C2.60312 13.377 2.63476 13.3699 2.88789 13.2434C3.72461 12.832 3.93554 11.7668 3.32382 11.0566C3.00742 10.684 2.40273 10.5012 1.93164 10.6313ZM2.64883 11.1973C3.09882 11.4117 3.28164 11.9707 3.04257 12.4031C2.81406 12.818 2.3289 12.9797 1.91406 12.7828C1.20391 12.4488 1.24961 11.4328 1.98789 11.1586C2.15664 11.0953 2.47304 11.1164 2.64883 11.1973Z" />
                                                                        <path
                                                                            d="M1.86161 11.8546C1.71396 12.0164 1.81591 12.2449 2.05849 12.2906C2.24482 12.3257 2.56122 12.2836 2.63856 12.2132C2.72645 12.1324 2.72997 11.9144 2.64208 11.8371C2.59286 11.7914 2.50497 11.7773 2.25536 11.7773C1.9706 11.7773 1.92489 11.7843 1.86161 11.8546Z" />
                                                                    </g>
                                                                </svg> Room Service
                                                            </li>



                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg> Restaurant
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg>Tea/Coffee Maker In Every Room
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <div class="room-type">
                                                            <h6>Deluxe King Room</h6>
                                                            <span>1 king bed</span>
                                                            <div class="deals">
                                                                <span><strong>Free cancellation</strong> <br> before 48
                                                                    hours</span>
                                                            </div>
                                                        </div>
                                                        <div class="price-and-book">
                                                            <div class="price-area">
                                                                <p>1 night, 2 adults</p>
                                                            </div>
                                                            <div class="book-btn">
                                                                <a href="contact.php" class="primary-btn2">Enquire Now<i
                                                                        class="bi bi-arrow-right"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-xxl-4 col-md-6">
                                    <div class="room-suits-card two">
                                        <div class="row g-0">
                                            <div class="col-md-12">
                                                <div class="swiper hotel-img-slider">
                                                    <span class="batch">Breakfast included</span>
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel10.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel11.webp" alt>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="room-img">
                                                                <img src="assets/img/innerpage/hotel12.webp" alt>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-pagination5"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="room-content">
                                                    <div class="content-top">
                                                        <div class="reviews">
                                                            <ul>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-fill"></i></li>
                                                                <li><i class="bi bi-star-half"></i></li>
                                                            </ul>
                                                            <span>4.5 reviews</span>
                                                        </div>
                                                        <h5 class="hotel-fort mt-3">Fortune Atrium Hotel</h5>
                                                        <ul class="loaction-area">
                                                            <li><i class="bi bi-geo-alt"></i>Dubai</li>

                                                        </ul>
                                                        <ul class="facilisis">
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.683593 0.0562801C0.490234 0.123077 0.30039 0.288311 0.180859 0.485186L0.0859375 0.650419V7.20705V13.7637L0.163281 13.9043C0.251172 14.0695 0.423437 14.2383 0.595702 14.3297C0.711718 14.393 0.848827 14.3965 2.87382 14.407L5.02538 14.4176L5.11327 14.3297C5.21874 14.2242 5.22577 14.1012 5.13437 13.9887L5.06757 13.9043L2.93711 13.8867L0.80664 13.8691L0.711718 13.7707L0.61328 13.6758L0.602734 10.582L0.595702 7.4883H3.79492H6.99413V10.6875V13.8867H6.55468C6.30507 13.8867 6.08007 13.9043 6.03085 13.9254C5.85155 14.0063 5.83749 14.2875 6.00624 14.3754C6.05194 14.4035 6.8289 14.4141 8.39686 14.4141H10.7172L10.7277 15.8801C10.7383 17.3109 10.7418 17.3531 10.8156 17.4902C10.9035 17.6555 11.0758 17.8242 11.248 17.9156C11.364 17.9789 11.5117 17.9824 14.3242 17.9824H17.2773L17.4179 17.9051C17.6043 17.8066 17.766 17.6309 17.8539 17.4375C17.9242 17.2863 17.9277 17.2125 17.9277 15.3949C17.9277 13.2645 17.9312 13.2891 17.664 13.0254C17.5832 12.9445 17.4461 12.8496 17.3582 12.8145L17.1965 12.7547L17.1824 11.9215C17.1683 11.1797 17.1578 11.0672 17.0875 10.8457C16.8344 10.0582 16.2683 9.41486 15.5371 9.07736C15.2383 8.93673 14.8551 8.82423 14.6863 8.82423C14.4648 8.82423 14.4824 9.17228 14.4824 4.78479C14.4824 0.260185 14.5035 0.580107 14.2012 0.281281C13.8988 -0.02458 14.5246 3.05176e-05 7.26132 0.00354576C1.7664 0.00354576 0.803124 0.0140934 0.683593 0.0562801ZM7.00116 1.09339C7.01171 1.63831 7.01522 1.6594 7.09608 1.7262C7.20155 1.81409 7.36327 1.81057 7.45116 1.72268C7.51444 1.6594 7.52147 1.60667 7.52147 1.08987V0.527372H10.5801C13.2484 0.527372 13.6562 0.534405 13.7441 0.580107C13.9656 0.692608 13.9551 0.541435 13.9551 3.90237V6.96096L10.7488 6.95393L7.53905 6.94338L7.5285 4.8094L7.52147 2.67542L7.43007 2.6051C7.30702 2.51018 7.22968 2.5137 7.11015 2.61565L7.01171 2.70003L7.00116 4.83049L6.99413 6.96096H3.79492H0.595702V3.90237C0.595702 1.23753 0.602734 0.8262 0.648437 0.73831C0.760936 0.520342 0.602734 0.53089 3.94257 0.527372H6.9871L7.00116 1.09339ZM13.9551 8.14924V8.81017L13.6844 8.87345C12.7633 9.08439 11.9758 9.76994 11.6383 10.6453C11.4871 11.0426 11.459 11.257 11.459 12.041V12.7512L11.2937 12.8145C10.9492 12.9481 10.7207 13.2996 10.7207 13.7004V13.8867H9.12108H7.52147V10.6875V7.4883H10.7383H13.9551V8.14924ZM15.0027 9.4254C15.4668 9.56955 15.9801 9.93869 16.2437 10.3254C16.5918 10.8281 16.6621 11.1199 16.6621 12.0516V12.7652L16.4793 12.7547L16.2929 12.7441L16.2754 11.9883C16.2578 11.3836 16.2437 11.1973 16.191 11.0567C16.0152 10.5645 15.6531 10.1496 15.2136 9.93517C14.9465 9.80158 14.5668 9.70314 14.3242 9.70314C14.0816 9.70314 13.7019 9.80158 13.4347 9.93517C12.9953 10.1496 12.6332 10.5645 12.4574 11.0567C12.4047 11.1973 12.3906 11.3836 12.373 11.9883L12.3555 12.7441L12.1726 12.7547L11.9863 12.7652V12.0516C11.9863 11.2289 12.0144 11.0777 12.2394 10.6172C12.4926 10.0969 13.0445 9.61876 13.6 9.43947C14.0254 9.30236 14.5738 9.29533 15.0027 9.4254ZM14.9676 10.3922C15.2312 10.5223 15.4844 10.7824 15.6179 11.0637L15.7304 11.3027L15.741 12.0305L15.7515 12.7617H14.3242H12.8969L12.9074 12.0305L12.9179 11.3027L13.0304 11.0637C13.1676 10.7789 13.4207 10.5188 13.6879 10.3922C13.7933 10.343 13.8988 10.3008 13.9164 10.3008C13.9445 10.3008 13.9551 10.5504 13.9551 11.0707C13.9551 11.7949 13.9586 11.8442 14.0289 11.932C14.1203 12.0481 14.2855 12.0551 14.4015 11.9461C14.4824 11.8723 14.4824 11.8617 14.4824 11.0637V10.2551L14.6336 10.2797C14.7144 10.2938 14.8656 10.343 14.9676 10.3922ZM17.2457 13.3524C17.2879 13.384 17.3406 13.4473 17.3617 13.4895C17.3898 13.5422 17.4004 14.1188 17.4004 15.3949V17.2266L17.2984 17.3391L17.1965 17.4551H14.3277H11.459L11.364 17.3566L11.2656 17.2617L11.2551 15.4406C11.2515 14.4422 11.2551 13.5914 11.2621 13.5492C11.2726 13.5106 11.3254 13.4332 11.3746 13.384L11.4695 13.2891H14.3207C16.9679 13.2891 17.1789 13.2961 17.2457 13.3524Z" />
                                                                        <path
                                                                            d="M1.88029 3.66674C1.30022 3.8601 0.92053 4.33823 0.885373 4.92182C0.811545 6.21908 2.35139 6.92221 3.26193 6.00463C3.4799 5.78666 3.61349 5.52651 3.66271 5.22768C3.76115 4.64057 3.43068 4.01479 2.88576 3.75463C2.68889 3.65971 2.60803 3.64213 2.33732 3.63159C2.14045 3.62456 1.96818 3.63862 1.88029 3.66674ZM2.66428 4.23979C3.38146 4.59838 3.28303 5.63198 2.50959 5.85698C1.68693 6.09604 1.05412 5.09409 1.62365 4.45073C1.89787 4.13784 2.29865 4.05698 2.66428 4.23979Z" />
                                                                        <path
                                                                            d="M1.87695 4.86914C1.82773 4.91484 1.78906 4.9957 1.78906 5.04492C1.78906 5.09414 1.82773 5.175 1.87695 5.2207C1.9543 5.30156 1.98945 5.30859 2.26367 5.30859C2.61172 5.30859 2.70312 5.25586 2.70312 5.04844C2.70312 4.85156 2.58008 4.78125 2.23906 4.78125C1.99297 4.78125 1.95078 4.7918 1.87695 4.86914Z" />
                                                                        <path
                                                                            d="M8.87639 3.66674C8.29631 3.8601 7.91662 4.33823 7.88147 4.92182C7.80764 6.21908 9.34748 6.92221 10.258 6.00463C10.476 5.78666 10.6096 5.52651 10.6588 5.22768C10.7572 4.64057 10.4268 4.01479 9.88185 3.75463C9.68498 3.65971 9.60412 3.64213 9.33342 3.63159C9.13654 3.62456 8.96428 3.63862 8.87639 3.66674ZM9.66037 4.23979C10.3776 4.59838 10.2791 5.63198 9.50568 5.85698C8.68303 6.09604 8.05022 5.09409 8.61975 4.45073C8.89397 4.13784 9.29475 4.05698 9.66037 4.23979Z" />
                                                                        <path
                                                                            d="M8.87305 4.86914C8.82383 4.91484 8.78516 4.9957 8.78516 5.04492C8.78516 5.09414 8.82383 5.175 8.87305 5.2207C8.95039 5.30156 8.98555 5.30859 9.25976 5.30859C9.60781 5.30859 9.69922 5.25586 9.69922 5.04844C9.69922 4.85156 9.57617 4.78125 9.23516 4.78125C8.98906 4.78125 8.94687 4.7918 8.87305 4.86914Z" />
                                                                        <path
                                                                            d="M8.92773 10.6313C8.51992 10.7438 8.18594 11.018 8.00664 11.3836C7.89766 11.6051 7.89062 11.6438 7.89062 11.9883C7.89062 12.3363 7.89766 12.375 8.00664 12.593C8.15078 12.8883 8.45664 13.1801 8.7414 13.2926C8.90312 13.3594 9.01562 13.3734 9.28281 13.377C9.59922 13.377 9.63086 13.3699 9.88398 13.2434C10.7207 12.832 10.9316 11.7668 10.3199 11.0566C10.0035 10.684 9.39883 10.5012 8.92773 10.6313ZM9.64492 11.1973C10.0949 11.4117 10.2777 11.9707 10.0387 12.4031C9.81015 12.818 9.325 12.9797 8.91015 12.7828C8.2 12.4488 8.2457 11.4328 8.98398 11.1586C9.15273 11.0953 9.46914 11.1164 9.64492 11.1973Z" />
                                                                        <path
                                                                            d="M8.85771 11.8546C8.71005 12.0164 8.812 12.2449 9.05458 12.2906C9.24091 12.3257 9.55731 12.2836 9.63466 12.2132C9.72255 12.1324 9.72606 11.9144 9.63817 11.8371C9.58896 11.7914 9.50106 11.7773 9.25146 11.7773C8.96669 11.7773 8.92099 11.7843 8.85771 11.8546Z" />
                                                                        <path
                                                                            d="M14.1098 13.676C13.7512 13.7498 13.3961 14.0346 13.2414 14.3721C13.1816 14.5022 13.1641 14.6041 13.1641 14.8537C13.1641 15.244 13.2344 15.4162 13.5156 15.7115L13.709 15.9154V16.1756C13.709 16.4779 13.7512 16.5764 13.9199 16.6924C14.0324 16.7662 14.0746 16.7733 14.384 16.7627C14.7039 16.7522 14.7285 16.7451 14.8305 16.6502C14.9605 16.5272 15.0098 16.369 15.0098 16.0912C15.0098 15.8944 15.0168 15.8768 15.1644 15.7326C15.2523 15.6483 15.3648 15.4971 15.4211 15.3951C15.509 15.2229 15.5195 15.1701 15.5195 14.8537C15.5195 14.5408 15.509 14.4846 15.4246 14.3229C15.3016 14.0908 14.9887 13.8061 14.7742 13.7322C14.5598 13.6584 14.2926 13.6373 14.1098 13.676ZM14.5281 14.2069C14.6934 14.2526 14.9008 14.4283 14.9605 14.5795C14.9887 14.6428 15.0098 14.7658 15.0098 14.8537C15.0098 14.9416 14.9887 15.0647 14.9605 15.1279C14.9184 15.2299 14.8586 15.2897 14.5633 15.5393C14.4895 15.599 14.4824 15.6342 14.4824 15.9225V16.2424H14.3629H14.2434L14.2293 15.9225C14.2187 15.5744 14.2434 15.6166 13.9199 15.367C13.5191 15.0612 13.6352 14.3932 14.1203 14.2209C14.2855 14.1612 14.3559 14.1576 14.5281 14.2069Z" />
                                                                        <path
                                                                            d="M1.93164 10.6313C1.52383 10.7438 1.18984 11.018 1.01055 11.3836C0.901562 11.6051 0.894531 11.6438 0.894531 11.9883C0.894531 12.3363 0.901562 12.375 1.01055 12.593C1.15469 12.8883 1.46055 13.1801 1.74531 13.2926C1.90703 13.3594 2.01953 13.3734 2.28672 13.377C2.60312 13.377 2.63476 13.3699 2.88789 13.2434C3.72461 12.832 3.93554 11.7668 3.32382 11.0566C3.00742 10.684 2.40273 10.5012 1.93164 10.6313ZM2.64883 11.1973C3.09882 11.4117 3.28164 11.9707 3.04257 12.4031C2.81406 12.818 2.3289 12.9797 1.91406 12.7828C1.20391 12.4488 1.24961 11.4328 1.98789 11.1586C2.15664 11.0953 2.47304 11.1164 2.64883 11.1973Z" />
                                                                        <path
                                                                            d="M1.86161 11.8546C1.71396 12.0164 1.81591 12.2449 2.05849 12.2906C2.24482 12.3257 2.56122 12.2836 2.63856 12.2132C2.72645 12.1324 2.72997 11.9144 2.64208 11.8371C2.59286 11.7914 2.50497 11.7773 2.25536 11.7773C1.9706 11.7773 1.92489 11.7843 1.86161 11.8546Z" />
                                                                    </g>
                                                                </svg> Room Service
                                                            </li>



                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg> Restaurant
                                                            </li>
                                                            <li>
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" viewBox="0 0 18 18">
                                                                    <g>
                                                                        <path
                                                                            d="M0.180398 0.0492477C0.00110123 0.147686 0.00461685 0.0984669 0.00461685 2.54885C0.00110123 5.11526 0.00110123 5.11877 0.247195 5.61799C0.41946 5.96252 0.753444 6.3176 1.08391 6.50392L1.30188 6.62697L1.30891 11.918L1.31946 17.209L1.39329 17.3707C1.50227 17.6027 1.66751 17.7715 1.8925 17.884C2.05774 17.9648 2.1386 17.9824 2.35657 17.9824C2.79602 17.9824 3.13703 17.7645 3.31985 17.3707L3.39367 17.209L3.40422 11.918L3.41477 6.62697L3.63274 6.50392C3.95969 6.3176 4.29367 5.96252 4.46594 5.61799C4.71203 5.11877 4.71203 5.11174 4.71203 2.55588C4.71203 0.084404 4.71555 0.130108 4.51867 0.0422173C4.40266 -0.0105171 4.31828 -0.0105171 4.20227 0.0422173C4.00891 0.130108 4.00891 0.11253 4.00891 2.21487V4.14846H3.6925H3.3761V2.21487C3.3761 0.794559 3.36555 0.260185 3.33391 0.193388C3.28821 0.0914345 3.14055 2.86102e-05 3.02453 2.86102e-05C2.90852 2.86102e-05 2.76086 0.0914345 2.71516 0.193388C2.68352 0.260185 2.67297 0.794559 2.67297 2.21487V4.14846H2.35657H2.04016V2.21487C2.04016 0.794559 2.02961 0.260185 1.99797 0.193388C1.92415 0.0281544 1.70969 -0.0421581 1.5304 0.0422173C1.33704 0.130108 1.33704 0.11253 1.33704 2.21487V4.14846H1.02063H0.704225V2.21487C0.704225 0.794559 0.693678 0.260185 0.662038 0.193388C0.584694 0.0246391 0.352663 -0.0456734 0.180398 0.0492477ZM3.9632 4.97112C3.90344 5.34729 3.49914 5.82189 3.10891 5.97307C2.99641 6.01877 2.8593 6.09963 2.80657 6.15588L2.70813 6.25783V11.6402C2.70813 17.4902 2.71868 17.1633 2.51477 17.2547C2.39875 17.3074 2.31438 17.3074 2.19836 17.2547C1.99446 17.1633 2.005 17.4902 2.005 11.6402V6.26486L1.9136 6.15588C1.86438 6.09611 1.80461 6.04689 1.78 6.04689C1.67102 6.04689 1.30188 5.82189 1.13665 5.65666C0.950318 5.47033 0.781569 5.1715 0.749928 4.97112L0.728835 4.85158H2.35657H3.9843L3.9632 4.97112Z" />
                                                                        <path
                                                                            d="M17.3467 0.137138C17.0268 0.351591 16.5733 0.759403 16.2709 1.10393C15.5291 1.94065 15.0194 2.98831 14.7944 4.12033C14.717 4.50705 14.717 4.59494 14.703 7.24572C14.6924 10.2586 14.6889 10.2199 14.9104 10.6594C14.9913 10.8176 15.1424 11.0039 15.4553 11.3203L15.8913 11.7633L15.8983 14.4879C15.9088 17.1703 15.9088 17.2125 15.9827 17.3707C16.0916 17.6027 16.2569 17.7715 16.4819 17.884C16.6471 17.9648 16.728 17.9824 16.9459 17.9824C17.3854 17.9824 17.7264 17.7645 17.9092 17.3707L17.983 17.209L17.9936 8.75392C18.0006 2.42932 17.9901 0.274248 17.962 0.200418C17.9162 0.0914345 17.7686 2.86102e-05 17.6385 2.86102e-05C17.5893 2.86102e-05 17.4592 0.0633106 17.3467 0.137138ZM17.2588 17.0965C17.2131 17.202 17.0655 17.2969 16.9459 17.2969C16.844 17.2969 16.6788 17.2055 16.6436 17.1316C16.626 17.0965 16.6049 15.8063 16.5944 14.2664L16.5768 11.4645L16.0811 10.9617C15.7577 10.6313 15.5573 10.3992 15.501 10.2832L15.4166 10.1074L15.4061 7.52697C15.3991 5.38947 15.4061 4.87268 15.4518 4.53869C15.6065 3.33284 16.1444 2.22542 16.9811 1.37464L17.2799 1.07229L17.2905 9.03517C17.2975 14.9766 17.287 17.0227 17.2588 17.0965Z" />
                                                                        <path
                                                                            d="M8.22656 2.32383C7.57968 2.39766 6.78164 2.62266 6.20508 2.89688C5.85352 3.06211 5.76562 3.15 5.76562 3.33282C5.76562 3.49453 5.92734 3.65625 6.08555 3.65625C6.14883 3.65625 6.40547 3.57188 6.65859 3.46641C7.67812 3.04102 8.71875 2.90039 9.78398 3.04102C11.0601 3.20977 12.1535 3.72656 13.1098 4.62305C13.4402 4.92891 13.4789 4.95703 13.609 4.95703C13.8129 4.95703 13.957 4.80938 13.957 4.60195C13.957 4.46484 13.9394 4.43672 13.6933 4.19766C12.6 3.13594 11.2184 2.48907 9.69609 2.32383C9.30234 2.27813 8.61328 2.28164 8.22656 2.32383Z" />
                                                                        <path
                                                                            d="M8.49175 4.02902C7.72183 4.11339 6.86753 4.4298 6.19253 4.8798C5.79878 5.13996 5.14136 5.79738 4.88121 6.18761C4.50152 6.76066 4.25191 7.34776 4.10777 8.01222C3.99878 8.49386 4.0023 9.49932 4.10777 9.98799C4.54371 11.9814 6.03081 13.4649 8.02768 13.8938C8.54097 14.0028 9.46206 14.0028 9.97182 13.8938C10.4851 13.7849 10.8296 13.6618 11.2902 13.4228C12.6296 12.7372 13.5683 11.4927 13.8953 9.97393C13.9972 9.49581 14.0042 8.57472 13.9093 8.10362C13.5964 6.52159 12.6156 5.22785 11.1988 4.52472C10.5308 4.19425 9.91909 4.0466 9.14214 4.0255C8.86089 4.01847 8.56909 4.02199 8.49175 4.02902ZM9.63784 4.76378C11.0124 4.97121 12.2078 5.83956 12.8441 7.10167C13.0199 7.45323 13.1781 7.95245 13.2378 8.36378C13.5894 10.6946 11.9722 12.8849 9.63432 13.2399C7.78159 13.5177 5.94644 12.5403 5.13433 10.8458C4.17457 8.83839 4.90933 6.4548 6.83941 5.30167C7.65503 4.813 8.67456 4.61613 9.63784 4.76378Z" />
                                                                        <path
                                                                            d="M8.83828 5.80063C8.72227 5.84633 8.64844 5.97641 8.64844 6.12758C8.64844 6.47914 9.14062 6.59867 9.30234 6.2893C9.46055 5.97993 9.16172 5.66703 8.83828 5.80063Z" />
                                                                        <path
                                                                            d="M7.54427 6.12056C6.60912 6.59166 5.94818 7.51978 5.80404 8.5604C5.74076 9.01743 5.74779 9.09478 5.8849 9.23189C6.01849 9.36548 6.13099 9.38306 6.28919 9.29868C6.41224 9.2354 6.45091 9.13345 6.49662 8.73267C6.5388 8.36353 6.65833 7.99087 6.82708 7.70611C7.00286 7.40376 7.45638 6.97134 7.78685 6.78853C7.94153 6.70064 8.09622 6.60923 8.12786 6.58111C8.21927 6.50377 8.24388 6.32095 8.17708 6.19439C8.06458 5.97994 7.86419 5.95533 7.54427 6.12056Z" />
                                                                        <path
                                                                            d="M13.881 12.6143C13.8494 12.6283 13.635 12.8358 13.41 13.0748C12.4994 14.0276 11.5853 14.5619 10.3619 14.8537C8.89941 15.2018 7.28223 14.9592 5.99551 14.2033C5.79864 14.0873 5.63692 14.017 5.56661 14.017C5.32403 14.01 5.14825 14.2631 5.23965 14.4881C5.2959 14.6182 5.48926 14.7483 5.99551 15.0014C8.8291 16.4217 12.2709 15.6658 14.2502 13.1908C14.31 13.1135 14.3451 13.0256 14.3451 12.9518C14.3451 12.7338 14.0674 12.5334 13.881 12.6143Z" />
                                                                        <path
                                                                            d="M4.32967 13.1978C4.28397 13.2225 4.2242 13.2822 4.19959 13.3279C4.00272 13.683 4.46678 14.0346 4.75155 13.7498C5.03631 13.465 4.68475 13.001 4.32967 13.1978Z" />
                                                                    </g>
                                                                </svg>Tea/Coffee Maker In Every Room
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="content-bottom">
                                                        <div class="room-type">
                                                            <h6>Deluxe King Room</h6>
                                                            <span>1 king bed</span>
                                                            <div class="deals">
                                                                <span><strong>Free cancellation</strong> <br> before 48
                                                                    hours</span>
                                                            </div>
                                                        </div>
                                                        <div class="price-and-book">
                                                            <div class="price-area">
                                                                <p>1 night, 2 adults</p>
                                                            </div>
                                                            <div class="book-btn">
                                                                <a href="contact.php" class="primary-btn2">Enquire Now<i
                                                                        class="bi bi-arrow-right"></i></a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="tab-pane fade" id="Transport" role="tabpanel" aria-labelledby="Transport-tab">
                            <div class="row g-4">
                                <div class="col-lg-4 col-md-6">
                                    <div class="transport-card">
                                        <a href="transport-details.php" class="transport-img">
                                            <img src="assets/img/innerpage/sajhek.jpg" alt>
                                            <span>250km</span>
                                        </a>
                                        <div class="transport-content">
                                            <h4><a href="transport-details.php">Travel to Sajek from Dhaka.</a></h4>
                                            <div class="transport-type">
                                                <h6>Available Transport:</h6>
                                                <div class="row g-2">
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M44.125 12.4167L41.4351 11.9392C41.092 11.8787 40.7659 11.7373 40.4806 11.5252C40.1953 11.3131 39.9579 11.0358 39.7859 10.7134L36.0711 3.78001C35.4551 2.63294 34.5663 1.67947 33.4945 1.0158C32.4227 0.352133 31.2057 0.00174827 29.9664 0H16.9086C15.6693 0.00166413 14.4524 0.351923 13.3806 1.01544C12.3088 1.67896 11.42 2.63226 10.8039 3.77918L7.01484 10.8517C6.85724 11.1442 6.64605 11.3999 6.39384 11.6035C6.14164 11.807 5.8536 11.9544 5.54687 12.0367L2.95781 12.7267C2.31318 12.8988 1.72057 13.244 1.23634 13.7295C0.752121 14.2149 0.3924 14.8244 0.191406 15.5001C0.182812 15.5217 0.182031 15.5476 0.175 15.5701C0.0618921 15.9585 0.0029285 16.3625 0 16.7692L0 22.5001C0.00124051 23.6047 0.413189 24.6638 1.14548 25.4449C1.87778 26.226 2.87063 26.6654 3.90625 26.6668H6.78515C7.22701 27.6638 7.92531 28.5065 8.79876 29.0966C9.6722 29.6867 10.6848 30 11.7187 30C12.7527 30 13.7653 29.6867 14.6387 29.0966C15.5122 28.5065 16.2105 27.6638 16.6523 26.6668H33.3476C33.7895 27.6638 34.4878 28.5065 35.3612 29.0966C36.2347 29.6867 37.2473 30 38.2812 30C39.3151 30 40.3278 29.6867 41.2012 29.0966C42.0747 28.5065 42.773 27.6638 43.2148 26.6668H46.0937C47.1293 26.6654 48.1222 26.226 48.8545 25.4449C49.5868 24.6638 49.9987 23.6047 50 22.5001V19.8142C50.0041 18.0378 49.4152 16.3177 48.3387 14.9623C47.2622 13.6068 45.7684 12.7044 44.125 12.4167ZM47.5734 16.6667C47.8824 17.1805 48.1136 17.7429 48.2586 18.3334H47.6562C47.0364 18.3332 46.4418 18.0721 46.0015 17.6067C45.7541 17.3407 45.5647 17.0198 45.4469 16.6667H47.5734ZM1.57031 16.6667H2.90547L2.51484 18.3334H1.5625V16.7692C1.5625 16.7342 1.56953 16.7009 1.57031 16.6667ZM11.7187 28.3334C10.9462 28.3334 10.1909 28.0891 9.54855 27.6312C8.90617 27.1734 8.4055 26.5226 8.10984 25.7613C7.81419 24.9999 7.73683 24.1621 7.88755 23.3539C8.03828 22.5456 8.41031 21.8032 8.95661 21.2205C9.50291 20.6377 10.1989 20.2409 10.9567 20.0801C11.7144 19.9194 12.4998 20.0019 13.2136 20.3172C13.9274 20.6326 14.5374 21.1667 14.9667 21.8519C15.3959 22.5371 15.625 23.3427 15.625 24.1668C15.6238 25.2714 15.2118 26.3305 14.4795 27.1116C13.7472 27.8927 12.7544 28.3321 11.7187 28.3334ZM38.2812 28.3334C37.5086 28.3334 36.7534 28.0891 36.111 27.6312C35.4687 27.1734 34.968 26.5226 34.6723 25.7613C34.3767 24.9999 34.2993 24.1621 34.45 23.3539C34.6008 22.5456 34.9728 21.8032 35.5191 21.2205C36.0654 20.6377 36.7614 20.2409 37.5192 20.0801C38.2769 19.9194 39.0623 20.0019 39.7761 20.3172C40.4899 20.6326 41.0999 21.1667 41.5292 21.8519C41.9584 22.5371 42.1875 23.3427 42.1875 24.1668C42.1862 25.2714 41.7743 26.3305 41.042 27.1116C40.3097 27.8927 39.3169 28.3321 38.2812 28.3334ZM46.0937 25.0001H43.6875C43.8063 24.1693 43.7553 23.3209 43.5382 22.5131C43.3211 21.7052 42.9429 20.957 42.4295 20.3195C41.9161 19.682 41.2796 19.1704 40.5636 18.8197C39.8477 18.4689 39.0691 18.2873 38.2812 18.2873C37.4934 18.2873 36.7148 18.4689 35.9988 18.8197C35.2829 19.1704 34.6464 19.682 34.133 20.3195C33.6196 20.957 33.2414 21.7052 33.0243 22.5131C32.8071 23.3209 32.7562 24.1693 32.875 25.0001H17.125C17.2438 24.1693 17.1928 23.3209 16.9757 22.5131C16.7586 21.7052 16.3804 20.957 15.867 20.3195C15.3536 19.682 14.7171 19.1704 14.0011 18.8197C13.2852 18.4689 12.5066 18.2873 11.7187 18.2873C10.9309 18.2873 10.1523 18.4689 9.43634 18.8197C8.72037 19.1704 8.0839 19.682 7.5705 20.3195C7.0571 20.957 6.6789 21.7052 6.46177 22.5131C6.24464 23.3209 6.19372 24.1693 6.3125 25.0001H3.90625C3.28465 25.0001 2.68851 24.7367 2.24897 24.2679C1.80943 23.799 1.5625 23.1631 1.5625 22.5001V20.0001H3.125C3.29916 20.0001 3.46833 19.938 3.60563 19.8237C3.74293 19.7094 3.84049 19.5494 3.88281 19.3692L4.66406 16.0359C4.69292 15.913 4.69513 15.7847 4.67054 15.6608C4.64595 15.5369 4.59519 15.4206 4.52213 15.3207C4.44907 15.2208 4.35563 15.1401 4.24891 15.0845C4.14219 15.0289 4.025 15.0001 3.90625 15.0001H2.25703C2.55487 14.6811 2.92831 14.4544 3.3375 14.3442L5.92734 13.6534C6.43804 13.5158 6.91757 13.2701 7.3374 12.9308C7.75723 12.5915 8.10877 12.1656 8.37109 11.6784L12.1602 4.60585C12.6395 3.71385 13.3308 2.97245 14.1645 2.45642C14.9982 1.9404 15.9447 1.66799 16.9086 1.66667H29.9664C30.9303 1.66799 31.8768 1.9404 32.7105 2.45642C33.5441 2.97245 34.2355 3.71385 34.7148 4.60585L38.4289 11.5392C38.7154 12.0769 39.1109 12.5395 39.5866 12.8932C40.0622 13.2469 40.606 13.4827 41.1781 13.5834L43.8679 14.0617C44.6545 14.2005 45.4032 14.5208 46.0617 15.0001H44.5312C44.324 15.0001 44.1253 15.0879 43.9788 15.2441C43.8323 15.4004 43.75 15.6124 43.75 15.8334C43.7495 16.3807 43.8502 16.9228 44.0463 17.4286C44.2424 17.9343 44.5301 18.3939 44.8929 18.7809C45.2558 19.1679 45.6866 19.4748 46.1608 19.684C46.6349 19.8932 47.1431 20.0006 47.6562 20.0001H48.4375V22.5001C48.4375 23.1631 48.1905 23.799 47.751 24.2679C47.3115 24.7367 46.7153 25.0001 46.0937 25.0001Z">
                                                                </path>
                                                                <path
                                                                    d="M35.5141 7.90419C35.4073 7.71467 35.2344 7.57812 35.0333 7.5246C34.8322 7.47107 34.6195 7.50495 34.4418 7.61877C34.2641 7.73259 34.1361 7.91704 34.0859 8.13153C34.0357 8.34603 34.0675 8.573 34.1742 8.76252L35.3391 10.8334H25.7812V4.16667H30.2617C30.6663 4.16785 31.0638 4.28019 31.4159 4.49286C31.768 4.70552 32.0628 5.01134 32.2719 5.38084L32.7672 6.26251C32.8739 6.45203 33.0468 6.58858 33.2479 6.6421C33.449 6.69563 33.6618 6.66175 33.8394 6.54793C34.0171 6.43411 34.1451 6.24966 34.1953 6.03517C34.2455 5.82067 34.2137 5.5937 34.107 5.40418L33.6109 4.52251C33.2625 3.90693 32.7714 3.39746 32.1847 3.04321C31.5981 2.68897 30.9358 2.50188 30.2617 2.5H25C24.7928 2.5 24.5941 2.5878 24.4476 2.74408C24.3011 2.90036 24.2187 3.11232 24.2187 3.33334V11.6667C24.2187 11.8877 24.3011 12.0997 24.4476 12.256C24.5941 12.4122 24.7928 12.5 25 12.5H36.7187C36.857 12.5 36.9928 12.4608 37.1123 12.3865C37.2317 12.3122 37.3305 12.2054 37.3986 12.077C37.4667 11.9486 37.5016 11.8033 37.4998 11.6558C37.498 11.5083 37.4595 11.364 37.3883 11.2375L35.5141 7.90419ZM21.875 2.5H16.6133C15.9392 2.50188 15.2769 2.68897 14.6903 3.04321C14.1036 3.39746 13.6125 3.90693 13.2641 4.52251L9.48672 11.2375C9.41551 11.364 9.37703 11.5083 9.37522 11.6558C9.3734 11.8033 9.40832 11.9486 9.47641 12.077C9.54449 12.2054 9.6433 12.3122 9.76274 12.3865C9.88218 12.4608 10.018 12.5 10.1563 12.5H21.875C22.0822 12.5 22.2809 12.4122 22.4274 12.256C22.5739 12.0997 22.6562 11.8877 22.6562 11.6667V3.33334C22.6562 3.11232 22.5739 2.90036 22.4274 2.74408C22.2809 2.5878 22.0822 2.5 21.875 2.5ZM21.0937 10.8334H11.5359L14.6031 5.38084C14.8122 5.01134 15.107 4.70552 15.4591 4.49286C15.8112 4.28019 16.2087 4.16785 16.6133 4.16667H21.0937V10.8334ZM26.5625 13.3334H25C24.7928 13.3334 24.5941 13.4212 24.4476 13.5775C24.3011 13.7337 24.2187 13.9457 24.2187 14.1667C24.2187 14.3877 24.3011 14.5997 24.4476 14.756C24.5941 14.9122 24.7928 15 25 15H26.5625C26.7697 15 26.9684 14.9122 27.1149 14.756C27.2614 14.5997 27.3437 14.3877 27.3437 14.1667C27.3437 13.9457 27.2614 13.7337 27.1149 13.5775C26.9684 13.4212 26.7697 13.3334 26.5625 13.3334ZM11.7188 13.3334H10.1563C9.94905 13.3334 9.75034 13.4212 9.60382 13.5775C9.45731 13.7337 9.375 13.9457 9.375 14.1667C9.375 14.3877 9.45731 14.5997 9.60382 14.756C9.75034 14.9122 9.94905 15 10.1563 15H11.7188C11.926 15 12.1247 14.9122 12.2712 14.756C12.4177 14.5997 12.5 14.3877 12.5 14.1667C12.5 13.9457 12.4177 13.7337 12.2712 13.5775C12.1247 13.4212 11.926 13.3334 11.7188 13.3334ZM38.2812 21.6667C37.8177 21.6667 37.3645 21.8134 36.9791 22.0881C36.5937 22.3628 36.2933 22.7532 36.1159 23.21C35.9385 23.6669 35.8921 24.1695 35.9825 24.6545C36.073 25.1394 36.2962 25.5849 36.624 25.9345C36.9517 26.2841 37.3694 26.5223 37.824 26.6187C38.2786 26.7152 38.7499 26.6657 39.1781 26.4765C39.6064 26.2872 39.9725 25.9668 40.23 25.5557C40.4875 25.1446 40.625 24.6612 40.625 24.1667C40.625 23.5037 40.3781 22.8678 39.9385 22.399C39.499 21.9301 38.9028 21.6667 38.2812 21.6667ZM38.2812 25.0001C38.1267 25.0001 37.9757 24.9512 37.8472 24.8596C37.7187 24.7681 37.6186 24.6379 37.5595 24.4856C37.5003 24.3334 37.4849 24.1658 37.515 24.0042C37.5451 23.8425 37.6195 23.694 37.7288 23.5775C37.8381 23.4609 37.9773 23.3816 38.1288 23.3494C38.2804 23.3173 38.4375 23.3338 38.5802 23.3968C38.723 23.4599 38.845 23.5667 38.9308 23.7038C39.0167 23.8408 39.0625 24.0019 39.0625 24.1667C39.0625 24.3878 38.9802 24.5997 38.8337 24.756C38.6872 24.9123 38.4884 25.0001 38.2812 25.0001ZM11.7188 21.6667C11.2552 21.6667 10.8021 21.8134 10.4166 22.0881C10.0312 22.3628 9.7308 22.7532 9.55341 23.21C9.37602 23.6669 9.3296 24.1695 9.42004 24.6545C9.51047 25.1394 9.73369 25.5849 10.0615 25.9345C10.3892 26.2841 10.8069 26.5223 11.2615 26.6187C11.7162 26.7152 12.1874 26.6657 12.6157 26.4765C13.0439 26.2872 13.41 25.9668 13.6675 25.5557C13.925 25.1446 14.0625 24.6612 14.0625 24.1667C14.0625 23.5037 13.8156 22.8678 13.376 22.399C12.9365 21.9301 12.3404 21.6667 11.7188 21.6667ZM11.7188 25.0001C11.5642 25.0001 11.4132 24.9512 11.2847 24.8596C11.1562 24.7681 11.0561 24.6379 10.997 24.4856C10.9378 24.3334 10.9224 24.1658 10.9525 24.0042C10.9827 23.8425 11.0571 23.694 11.1663 23.5775C11.2756 23.4609 11.4148 23.3816 11.5663 23.3494C11.7179 23.3173 11.875 23.3338 12.0177 23.3968C12.1605 23.4599 12.2825 23.5667 12.3683 23.7038C12.4542 23.8408 12.5 24.0019 12.5 24.1667C12.5 24.3878 12.4177 24.5997 12.2712 24.756C12.1247 24.9123 11.926 25.0001 11.7188 25.0001Z">
                                                                </path>
                                                            </svg> <span>Car</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M2.5 30H47.5C48.163 30 48.7989 29.7742 49.2678 29.3724C49.7366 28.9705 50 28.4255 50 27.8571V27.1429C50 26.5745 49.7366 26.0295 49.2678 25.6276C48.7989 25.2258 48.163 25 47.5 25H41.4492C42.037 24.3912 42.3961 23.6442 42.4792 22.8571H43.3233C44.53 22.8572 45.714 22.5765 46.7491 22.0451C47.7843 21.5136 48.6317 20.7513 49.2011 19.8395C49.7706 18.9276 50.0406 17.9004 49.9824 16.8674C49.9242 15.8343 49.5401 14.8342 48.8708 13.9736L39.9817 2.545C39.3738 1.76137 38.5491 1.11886 37.5811 0.674797C36.6132 0.230731 35.532 -0.00109223 34.4342 3.8689e-06H2.5C1.83696 3.8689e-06 1.20107 0.225769 0.732233 0.627632C0.263392 1.0295 0 1.57454 0 2.14286L0 22.1429C0 22.3323 0.0877974 22.514 0.244078 22.6479C0.400358 22.7819 0.61232 22.8571 0.833333 22.8571H22.5208C22.6042 23.6443 22.9625 24.3914 23.5508 25H2.5C1.83696 25 1.20107 25.2258 0.732233 25.6276C0.263392 26.0295 0 26.5745 0 27.1429L0 27.8571C0 28.4255 0.263392 28.9705 0.732233 29.3724C1.20107 29.7742 1.83696 30 2.5 30ZM37.9167 25C37.2172 24.9983 36.5418 24.7808 36.014 24.3873C35.4863 23.9939 35.1414 23.4507 35.0425 22.8571H40.7925C40.6936 23.4509 40.3485 23.9943 39.8203 24.3878C39.2922 24.7813 38.6164 24.9986 37.9167 25ZM33.3542 22.8571C33.4375 23.6443 33.7958 24.3914 34.3842 25H30.6158C31.2037 24.3912 31.5628 23.6442 31.6458 22.8571H33.3542ZM44.8883 11.4286H33.3333C33.1123 11.4286 32.9004 11.3533 32.7441 11.2194C32.5878 11.0854 32.5 10.9037 32.5 10.7143V5.71429C32.5 5.52485 32.5878 5.34317 32.7441 5.20921C32.9004 5.07526 33.1123 5 33.3333 5H39.8883L44.8883 11.4286ZM1.66667 16.4286H4.16667V17.1429C4.16667 17.7112 4.43006 18.2562 4.8989 18.6581C5.36774 19.06 6.00363 19.2857 6.66667 19.2857H12.5C13.163 19.2857 13.7989 19.06 14.2678 18.6581C14.7366 18.2562 15 17.7112 15 17.1429V16.4286H34.1667C34.3877 16.4286 34.5996 16.3533 34.7559 16.2194C34.9122 16.0854 35 15.9037 35 15.7143C35 15.5248 34.9122 15.3432 34.7559 15.2092C34.5996 15.0753 34.3877 15 34.1667 15H15V5.71429C15 5.14597 14.7366 4.60092 14.2678 4.19906C13.7989 3.7972 13.163 3.57143 12.5 3.57143H6.66667C6.00363 3.57143 5.36774 3.7972 4.8989 4.19906C4.43006 4.60092 4.16667 5.14597 4.16667 5.71429V15H1.66667V2.14286C1.66667 1.95342 1.75446 1.77174 1.91074 1.63778C2.06702 1.50383 2.27899 1.42858 2.5 1.42858H34.4342C35.2575 1.42781 36.0682 1.60168 36.794 1.9347C37.5199 2.26771 38.1383 2.74952 38.5942 3.33715L38.7767 3.57143H33.3333C32.6703 3.57143 32.0344 3.7972 31.5656 4.19906C31.0967 4.60092 30.8333 5.14597 30.8333 5.71429V10.7143C30.8333 11.2826 31.0967 11.8277 31.5656 12.2295C32.0344 12.6314 32.6703 12.8571 33.3333 12.8571H46L47.4842 14.7657C47.5442 14.8414 47.5883 14.9221 47.6417 15H38.3333C38.1123 15 37.9004 15.0753 37.7441 15.2092C37.5878 15.3432 37.5 15.5248 37.5 15.7143C37.5 15.9037 37.5878 16.0854 37.7441 16.2194C37.9004 16.3533 38.1123 16.4286 38.3333 16.4286H48.26C48.3792 17.0433 48.3409 17.673 48.1478 18.2738C47.9547 18.8746 47.6114 19.4322 47.1417 19.9079C46.6721 20.3836 46.0872 20.766 45.4279 21.0286C44.7685 21.2912 44.0504 21.4277 43.3233 21.4286H1.66667V16.4286ZM13.3333 17.1429C13.3333 17.3323 13.2455 17.514 13.0893 17.6479C12.933 17.7819 12.721 17.8571 12.5 17.8571H6.66667C6.44565 17.8571 6.23369 17.7819 6.07741 17.6479C5.92113 17.514 5.83333 17.3323 5.83333 17.1429V5.71429C5.83333 5.52485 5.92113 5.34317 6.07741 5.20921C6.23369 5.07526 6.44565 5 6.66667 5H12.5C12.721 5 12.933 5.07526 13.0893 5.20921C13.2455 5.34317 13.3333 5.52485 13.3333 5.71429V17.1429ZM24.2092 22.8571H29.9592C29.8629 23.4521 29.5188 23.9971 28.9904 24.3916C28.462 24.786 27.7849 25.0033 27.0842 25.0033C26.3834 25.0033 25.7063 24.786 25.1779 24.3916C24.6495 23.9971 24.3054 23.4521 24.2092 22.8571ZM1.66667 27.1429C1.66667 26.9534 1.75446 26.7717 1.91074 26.6378C2.06702 26.5038 2.27899 26.4286 2.5 26.4286H47.5C47.721 26.4286 47.933 26.5038 48.0893 26.6378C48.2455 26.7717 48.3333 26.9534 48.3333 27.1429V27.8571C48.3333 28.0466 48.2455 28.2283 48.0893 28.3622C47.933 28.4962 47.721 28.5714 47.5 28.5714H2.5C2.27899 28.5714 2.06702 28.4962 1.91074 28.3622C1.75446 28.2283 1.66667 28.0466 1.66667 27.8571V27.1429Z">
                                                                </path>
                                                                <path
                                                                    d="M25.8333 3.57141H20C19.337 3.57141 18.7011 3.79718 18.2322 4.19904C17.7634 4.6009 17.5 5.14595 17.5 5.71427V10.7143C17.5 11.2826 17.7634 11.8276 18.2322 12.2295C18.7011 12.6314 19.337 12.8571 20 12.8571H25.8333C26.4964 12.8571 27.1323 12.6314 27.6011 12.2295C28.0699 11.8276 28.3333 11.2826 28.3333 10.7143V5.71427C28.3333 5.14595 28.0699 4.6009 27.6011 4.19904C27.1323 3.79718 26.4964 3.57141 25.8333 3.57141ZM26.6667 10.7143C26.6667 10.9037 26.5789 11.0854 26.4226 11.2193C26.2663 11.3533 26.0543 11.4286 25.8333 11.4286H20C19.779 11.4286 19.567 11.3533 19.4107 11.2193C19.2545 11.0854 19.1667 10.9037 19.1667 10.7143V5.71427C19.1667 5.52483 19.2545 5.34315 19.4107 5.20919C19.567 5.07524 19.779 4.99998 20 4.99998H25.8333C26.0543 4.99998 26.2663 5.07524 26.4226 5.20919C26.5789 5.34315 26.6667 5.52483 26.6667 5.71427V10.7143ZM10.8333 6.42855H8.33333C8.11232 6.42855 7.90036 6.50381 7.74408 6.63776C7.5878 6.77172 7.5 6.9534 7.5 7.14284C7.5 7.33228 7.5878 7.51396 7.74408 7.64792C7.90036 7.78187 8.11232 7.85713 8.33333 7.85713H10.8333C11.0543 7.85713 11.2663 7.78187 11.4226 7.64792C11.5789 7.51396 11.6667 7.33228 11.6667 7.14284C11.6667 6.9534 11.5789 6.77172 11.4226 6.63776C11.2663 6.50381 11.0543 6.42855 10.8333 6.42855ZM10.8333 9.2857H8.33333C8.11232 9.2857 7.90036 9.36095 7.74408 9.49491C7.5878 9.62886 7.5 9.81054 7.5 9.99998C7.5 10.1894 7.5878 10.3711 7.74408 10.5051C7.90036 10.639 8.11232 10.7143 8.33333 10.7143H10.8333C11.0543 10.7143 11.2663 10.639 11.4226 10.5051C11.5789 10.3711 11.6667 10.1894 11.6667 9.99998C11.6667 9.81054 11.5789 9.62886 11.4226 9.49491C11.2663 9.36095 11.0543 9.2857 10.8333 9.2857Z">
                                                                </path>
                                                            </svg> <span>Train</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M49.2587 28.5694C47.1164 28.5694 46.1141 28.1755 44.9534 27.7193C43.9689 27.3324 42.9508 26.9323 41.3434 26.7543C40.9423 26.7107 40.5783 26.9918 40.5326 27.3842C40.5107 27.5727 40.5664 27.7619 40.6875 27.9103C40.8085 28.0587 40.9851 28.1541 41.1782 28.1755C42.5879 28.3316 43.471 28.6786 44.406 29.0462C45.5988 29.5151 46.8323 29.9998 49.2587 29.9998C49.3556 30.0009 49.4518 29.9832 49.5417 29.9478C49.6316 29.9123 49.7134 29.8598 49.7823 29.7933C49.8513 29.7268 49.906 29.6476 49.9434 29.5602C49.9808 29.4729 50 29.3792 50 29.2846C50 29.19 49.9808 29.0963 49.9434 29.009C49.906 28.9217 49.8513 28.8425 49.7823 28.776C49.7134 28.7094 49.6316 28.6569 49.5417 28.6215C49.4518 28.586 49.3556 28.5683 49.2587 28.5694ZM38.5737 27.3844C38.5281 26.9919 38.1652 26.7103 37.7628 26.7543C36.1555 26.9323 35.1374 27.3324 34.1527 27.7193C32.9922 28.1755 31.9899 28.5694 29.8476 28.5694C27.7054 28.5694 26.7032 28.1755 25.5427 27.7193C24.282 27.2238 22.8531 26.6622 20.1426 26.6622C17.4321 26.6622 16.0032 27.2238 14.7425 27.7193C13.5821 28.1755 12.5798 28.5694 10.4378 28.5694C8.29567 28.5694 7.2934 28.1755 6.13285 27.7193C4.87222 27.2238 3.44327 26.6622 0.732884 26.6622C0.538511 26.6622 0.352099 26.7376 0.214657 26.8717C0.0772143 27.0058 0 27.1878 0 27.3774C0 27.5671 0.0772143 27.7491 0.214657 27.8832C0.352099 28.0173 0.538511 28.0927 0.732884 28.0927C3.15923 28.0927 4.33764 28.5559 5.58538 29.0464C6.77815 29.5152 8.01154 30 10.4378 30C12.8638 30 14.0972 29.5153 15.2902 29.0464C16.5377 28.556 17.7161 28.0927 20.1426 28.0927C22.569 28.0927 23.7474 28.5559 24.9951 29.0464C26.188 29.5152 27.4213 30 29.8476 30C32.2738 30 33.5073 29.5153 34.7004 29.0464C35.6354 28.6789 36.5185 28.3318 37.9281 28.1757C38.0237 28.1651 38.1162 28.1363 38.2005 28.0908C38.2847 28.0453 38.3589 27.984 38.4188 27.9106C38.4788 27.8371 38.5233 27.7528 38.5499 27.6625C38.5764 27.5722 38.5845 27.4777 38.5737 27.3844Z">
                                                                </path>
                                                                <path
                                                                    d="M49.2587 25.5429C46.9743 25.5429 45.8597 25.1049 44.6796 24.6411C43.9381 24.3496 43.1814 24.0524 42.159 23.8575L49.5227 14.6371C49.64 14.4915 49.7127 14.3165 49.7323 14.1323C49.752 13.9481 49.7179 13.7622 49.6339 13.5961C49.5513 13.4294 49.4221 13.2888 49.2611 13.1907C49.1002 13.0926 48.9141 13.041 48.7243 13.0417H38.1889L34.2998 5.21255C34.0367 4.66692 33.4676 4.31434 32.8497 4.31434H16.9192L15.4371 0.850369C15.3297 0.59824 15.1481 0.382865 14.9153 0.231494C14.6825 0.080124 14.4088 -0.000438062 14.1291 1.79156e-06H9.96394C9.18224 1.79156e-06 8.54641 0.620624 8.54641 1.38351V4.31434H7.17017C6.28663 4.31434 5.56771 5.01587 5.56771 5.87824V14.8942H1.65363C1.33718 14.8942 1.03469 15.0416 0.844486 15.2885C0.654284 15.5354 0.593161 15.8599 0.681135 16.1567L2.94345 23.7897C2.31914 23.6938 1.59817 23.6357 0.732884 23.6357C0.538511 23.6357 0.352099 23.711 0.214657 23.8452C0.0772143 23.9793 0 24.1612 0 24.3509C0 24.5406 0.0772143 24.7226 0.214657 24.8567C0.352099 24.9908 0.538511 25.0662 0.732884 25.0662C3.01707 25.0662 4.13163 25.5042 5.3116 25.968C6.5692 26.4624 7.86957 26.9734 10.4379 26.9734C13.0061 26.9734 14.3065 26.4624 15.5641 25.968C16.744 25.5042 17.8585 25.0662 20.1427 25.0662C22.427 25.0662 23.5414 25.5042 24.7214 25.968C25.979 26.4624 27.2795 26.9734 29.8477 26.9734C32.4161 26.9734 33.7166 26.4624 34.9742 25.968C36.1542 25.5042 37.2688 25.0662 39.5532 25.0662C41.8375 25.0662 42.9521 25.5042 44.1322 25.968C45.3899 26.4624 46.6902 26.9734 49.2587 26.9734C49.453 26.9734 49.6394 26.8981 49.7769 26.7639C49.9143 26.6298 49.9915 26.4479 49.9915 26.2582C49.9915 26.0685 49.9143 25.8865 49.7769 25.7524C49.6394 25.6183 49.453 25.5429 49.2587 25.5429ZM10.0121 1.43059H14.097L15.3309 4.31444H10.0121V1.43059ZM39.5532 23.6358C36.9848 23.6358 35.6843 24.1468 34.4266 24.6412C33.2465 25.105 32.132 25.543 29.8476 25.543C27.5633 25.543 26.4487 25.105 25.2689 24.6412C24.0113 24.1468 22.7109 23.6358 20.1426 23.6358C17.5744 23.6358 16.2739 24.1468 15.0164 24.6412C13.8364 25.105 12.722 25.543 10.4378 25.543C8.1536 25.543 7.03904 25.105 5.85907 24.6412C5.4521 24.4813 5.04046 24.3197 4.58311 24.1741L2.25675 16.3247H8.35366C8.54804 16.3247 8.73445 16.2493 8.87189 16.1152C9.00933 15.981 9.08655 15.7991 9.08655 15.6094C9.08655 15.4197 9.00933 15.2378 8.87189 15.1037C8.73445 14.9695 8.54804 14.8942 8.35366 14.8942H7.03358V5.87824C7.03358 5.80468 7.09489 5.74484 7.17027 5.74484H32.8498C32.9025 5.74484 32.9512 5.77495 32.9773 5.82898L36.5603 13.0417H32.441C31.946 13.0416 31.468 13.2182 31.0971 13.5382L29.6847 14.7563C29.5817 14.8452 29.4489 14.8942 29.3114 14.8942H11.7636C11.5693 14.8942 11.3829 14.9695 11.2454 15.1037C11.108 15.2378 11.0308 15.4197 11.0308 15.6094C11.0308 15.7991 11.108 15.981 11.2454 16.1152C11.3829 16.2493 11.5693 16.3247 11.7636 16.3247H29.3114C29.807 16.3247 30.2842 16.1484 30.6554 15.8282L32.0677 14.6101C32.1707 14.5212 32.3035 14.4722 32.441 14.4722H47.7962L40.4596 23.6588C40.1577 23.6431 39.8555 23.6354 39.5532 23.6358Z">
                                                                </path>
                                                                <path
                                                                    d="M12.4227 7.25165H9.94664C9.32545 7.25165 8.82007 7.74487 8.82007 8.3511V10.5679C8.82007 11.1741 9.32545 11.6673 9.94664 11.6673H12.4227C13.0439 11.6673 13.5492 11.1741 13.5492 10.5679V8.3511C13.5492 7.74487 13.0439 7.25165 12.4227 7.25165ZM12.0835 10.2368H10.2858V8.68204H12.0835V10.2368ZM18.4565 7.25165H15.9805C15.3593 7.25165 14.8539 7.74487 14.8539 8.3511V10.5679C14.854 11.1741 15.3593 11.6673 15.9805 11.6673H18.4565C19.0777 11.6673 19.583 11.1741 19.583 10.5679V8.3511C19.583 7.74487 19.0777 7.25165 18.4565 7.25165ZM18.1173 10.2368H16.3197V8.68204H18.1173V10.2368ZM24.4904 7.25165H22.0143C21.3931 7.25165 20.8878 7.74487 20.8878 8.3511V10.5679C20.8878 11.1741 21.3931 11.6673 22.0143 11.6673H24.4904C25.1116 11.6673 25.6168 11.1741 25.6168 10.5679V8.3511C25.6168 7.74487 25.1116 7.25165 24.4904 7.25165ZM24.1512 10.2368H22.3535V8.68204H24.1512V10.2368ZM32.6201 10.3663L31.666 7.8778C31.595 7.69428 31.4686 7.53614 31.3035 7.42433C31.1383 7.31253 30.9423 7.25234 30.7413 7.25174H28.0481C27.4269 7.25174 26.9215 7.74496 26.9215 8.3512V10.568C26.9216 11.1741 27.427 11.6673 28.0481 11.6673H31.6955C31.855 11.6673 32.0121 11.6297 32.1534 11.5576C32.2947 11.4854 32.416 11.3809 32.5068 11.2531C32.5977 11.1252 32.6555 10.9777 32.6752 10.8233C32.695 10.6688 32.6761 10.512 32.6201 10.3663ZM28.3873 10.2368V8.68204H30.4095L31.0056 10.2368H28.3873Z">
                                                                </path>
                                                            </svg> <span>Boat</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M39.1667 22.1034C38.6722 22.1034 38.1889 22.2423 37.7777 22.5025C37.3666 22.7627 37.0462 23.1326 36.857 23.5653C36.6677 23.9981 36.6182 24.4742 36.7147 24.9336C36.8112 25.393 37.0493 25.815 37.3989 26.1462C37.7485 26.4774 38.194 26.7029 38.6789 26.7943C39.1639 26.8857 39.6666 26.8388 40.1234 26.6595C40.5802 26.4803 40.9706 26.1768 41.2453 25.7873C41.52 25.3979 41.6667 24.94 41.6667 24.4716C41.666 23.8437 41.4024 23.2417 40.9337 22.7977C40.465 22.3537 39.8295 22.104 39.1667 22.1034ZM39.1667 25.261C39.0018 25.261 38.8407 25.2147 38.7037 25.128C38.5667 25.0412 38.4598 24.9179 38.3968 24.7737C38.3337 24.6294 38.3172 24.4707 38.3493 24.3176C38.3815 24.1645 38.4609 24.0238 38.5774 23.9134C38.694 23.803 38.8424 23.7278 39.0041 23.6974C39.1657 23.6669 39.3333 23.6825 39.4856 23.7423C39.6378 23.802 39.768 23.9032 39.8596 24.033C39.9511 24.1628 40 24.3155 40 24.4716C39.9998 24.6809 39.9119 24.8816 39.7557 25.0296C39.5994 25.1776 39.3876 25.2608 39.1667 25.261ZM46.7558 12.5097L43.155 11.2309L39.9083 2.61925C39.6181 1.85331 39.0855 1.19081 38.3833 0.722079C37.681 0.253345 36.8432 0.00119249 35.9842 0H4.16667C3.062 0.00125346 2.00296 0.417503 1.22185 1.15744C0.440735 1.89738 0.00132321 2.9006 0 3.94703V22.8928C0.000661846 23.5207 0.264267 24.1227 0.732964 24.5667C1.20166 25.0107 1.83716 25.2604 2.5 25.261H4.23333C4.43131 26.5762 5.12354 27.7796 6.18289 28.6501C7.24223 29.5207 8.59758 30 10 30C11.4024 30 12.7578 29.5207 13.8171 28.6501C14.8765 27.7796 15.5687 26.5762 15.7667 25.261H33.4C33.598 26.5762 34.2902 27.7796 35.3496 28.6501C36.4089 29.5207 37.7642 30 39.1667 30C40.5691 30 41.9244 29.5207 42.9838 28.6501C44.0431 27.7796 44.7354 26.5762 44.9333 25.261H47.5C48.1628 25.2604 48.7983 25.0107 49.267 24.5667C49.7357 24.1227 49.9993 23.5207 50 22.8928V16.9446C49.9966 15.9812 49.6847 15.0415 49.1054 14.2496C48.5262 13.4577 47.7069 12.851 46.7558 12.5097ZM41.3167 11.0517H31.6667V4.73644H38.9367L41.3167 11.0517ZM10 28.4186C9.17591 28.4186 8.37033 28.1871 7.68512 27.7534C6.99992 27.3197 6.46587 26.7033 6.1505 25.9821C5.83514 25.2608 5.75262 24.4672 5.91339 23.7016C6.07417 22.9359 6.471 22.2326 7.05372 21.6806C7.63644 21.1286 8.37887 20.7527 9.18712 20.6004C9.99538 20.4481 10.8332 20.5263 11.5945 20.825C12.3559 21.1238 13.0066 21.6297 13.4645 22.2787C13.9223 22.9278 14.1667 23.6909 14.1667 24.4716C14.1653 25.518 13.7259 26.5212 12.9448 27.2612C12.1637 28.0011 11.1047 28.4174 10 28.4186ZM39.1667 28.4186C38.3426 28.4186 37.537 28.1871 36.8518 27.7534C36.1666 27.3197 35.6325 26.7033 35.3172 25.9821C35.0018 25.2608 34.9193 24.4672 35.0801 23.7016C35.2408 22.9359 35.6377 22.2326 36.2204 21.6806C36.8031 21.1286 37.5455 20.7527 38.3538 20.6004C39.162 20.4481 39.9998 20.5263 40.7612 20.825C41.5225 21.1238 42.1733 21.6297 42.6311 22.2787C43.089 22.9278 43.3333 23.6909 43.3333 24.4716C43.332 25.518 42.8926 26.5212 42.1115 27.2612C41.3304 28.0011 40.2713 28.4174 39.1667 28.4186ZM48.3333 22.8928C48.3331 23.1021 48.2452 23.3028 48.089 23.4507C47.9328 23.5987 47.7209 23.682 47.5 23.6822H44.9333C44.7354 22.367 44.0431 21.1636 42.9838 20.2931C41.9244 19.4225 40.5691 18.9432 39.1667 18.9432C37.7642 18.9432 36.4089 19.4225 35.3496 20.2931C34.2902 21.1636 33.598 22.367 33.4 23.6822H15.7667C15.5687 22.367 14.8765 21.1636 13.8171 20.2931C12.7578 19.4225 11.4024 18.9432 10 18.9432C8.59758 18.9432 7.24223 19.4225 6.18289 20.2931C5.12354 21.1636 4.43131 22.367 4.23333 23.6822H2.5C2.27905 23.682 2.06722 23.5987 1.91099 23.4507C1.75476 23.3028 1.66689 23.1021 1.66667 22.8928V3.94703C1.66733 3.31913 1.93093 2.71713 2.39963 2.27314C2.86833 1.82915 3.50383 1.57944 4.16667 1.57881H35.9842C36.4996 1.57954 37.0022 1.73086 37.4235 2.01213C37.8448 2.2934 38.1643 2.69094 38.3383 3.15052L38.3417 3.15763H31.6667C31.2248 3.15804 30.8011 3.32452 30.4886 3.62051C30.1762 3.9165 30.0004 4.31784 30 4.73644V11.0517C30.0004 11.4703 30.1762 11.8716 30.4886 12.1676C30.8011 12.4636 31.2248 12.6301 31.6667 12.6305H42.3483L46.1708 13.9883C46.8048 14.2158 47.3509 14.6203 47.737 15.1481C48.1232 15.676 48.3311 16.3024 48.3333 16.9446V22.8928ZM10 22.1034C9.50555 22.1034 9.0222 22.2423 8.61107 22.5025C8.19995 22.7627 7.87952 23.1326 7.6903 23.5653C7.50108 23.9981 7.45157 24.4742 7.54804 24.9336C7.6445 25.393 7.8826 25.815 8.23223 26.1462C8.58186 26.4774 9.02732 26.7029 9.51227 26.7943C9.99723 26.8857 10.4999 26.8388 10.9567 26.6595C11.4135 26.4803 11.804 26.1768 12.0787 25.7873C12.3534 25.3979 12.5 24.94 12.5 24.4716C12.4993 23.8437 12.2357 23.2417 11.767 22.7977C11.2983 22.3537 10.6628 22.104 10 22.1034ZM10 25.261C9.83518 25.261 9.67407 25.2147 9.53702 25.128C9.39998 25.0412 9.29317 24.9179 9.2301 24.7737C9.16703 24.6294 9.15052 24.4707 9.18268 24.3176C9.21483 24.1645 9.2942 24.0238 9.41074 23.9134C9.52729 23.803 9.67577 23.7278 9.83742 23.6974C9.99908 23.6669 10.1666 23.6825 10.3189 23.7423C10.4712 23.802 10.6013 23.9032 10.6929 24.033C10.7845 24.1628 10.8333 24.3155 10.8333 24.4716C10.8331 24.6809 10.7452 24.8816 10.589 25.0296C10.4328 25.1776 10.2209 25.2608 10 25.261ZM35 15.7881C35 15.9975 34.9122 16.1983 34.7559 16.3463C34.5996 16.4944 34.3877 16.5775 34.1667 16.5775H30.8333C30.6123 16.5775 30.4004 16.4944 30.2441 16.3463C30.0878 16.1983 30 15.9975 30 15.7881C30 15.5788 30.0878 15.378 30.2441 15.2299C30.4004 15.0819 30.6123 14.9987 30.8333 14.9987H34.1667C34.3877 14.9987 34.5996 15.0819 34.7559 15.2299C34.9122 15.378 35 15.5788 35 15.7881ZM26.6667 3.15763H5C4.55811 3.15804 4.13444 3.32452 3.82198 3.62051C3.50951 3.9165 3.33377 4.31784 3.33333 4.73644V11.0517C3.33377 11.4703 3.50951 11.8716 3.82198 12.1676C4.13444 12.4636 4.55811 12.6301 5 12.6305H26.6667C27.1086 12.6301 27.5322 12.4636 27.8447 12.1676C28.1572 11.8716 28.3329 11.4703 28.3333 11.0517V4.73644C28.3329 4.31784 28.1572 3.9165 27.8447 3.62051C27.5322 3.32452 27.1086 3.15804 26.6667 3.15763ZM5 4.73644H15V11.0517H5V4.73644ZM16.6667 11.0517V4.73644H26.6667L26.6683 11.0517H16.6667Z">
                                                                </path>
                                                            </svg> <span>Bus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="details-btn">
                                                    <a href="transport-details.php" class="primary-btn1">View
                                                        Details</a>
                                                </div>
                                                <div class="review-area">
                                                    <ul class="rating">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(214 reviewes)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="transport-card">
                                        <a href="transport-details.php" class="transport-img">
                                            <img src="assets/img/innerpage/ifel-tower.jpg" alt>
                                            <span>5.6km</span>
                                        </a>
                                        <div class="transport-content">
                                            <h4><a href="transport-details.php">Travel to Eiffel Tower from Paris.</a>
                                            </h4>
                                            <div class="transport-type">
                                                <h6>Available Transport:</h6>
                                                <div class="row g-2">
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M44.125 12.4167L41.4351 11.9392C41.092 11.8787 40.7659 11.7373 40.4806 11.5252C40.1953 11.3131 39.9579 11.0358 39.7859 10.7134L36.0711 3.78001C35.4551 2.63294 34.5663 1.67947 33.4945 1.0158C32.4227 0.352133 31.2057 0.00174827 29.9664 0H16.9086C15.6693 0.00166413 14.4524 0.351923 13.3806 1.01544C12.3088 1.67896 11.42 2.63226 10.8039 3.77918L7.01484 10.8517C6.85724 11.1442 6.64605 11.3999 6.39384 11.6035C6.14164 11.807 5.8536 11.9544 5.54687 12.0367L2.95781 12.7267C2.31318 12.8988 1.72057 13.244 1.23634 13.7295C0.752121 14.2149 0.3924 14.8244 0.191406 15.5001C0.182812 15.5217 0.182031 15.5476 0.175 15.5701C0.0618921 15.9585 0.0029285 16.3625 0 16.7692L0 22.5001C0.00124051 23.6047 0.413189 24.6638 1.14548 25.4449C1.87778 26.226 2.87063 26.6654 3.90625 26.6668H6.78515C7.22701 27.6638 7.92531 28.5065 8.79876 29.0966C9.6722 29.6867 10.6848 30 11.7187 30C12.7527 30 13.7653 29.6867 14.6387 29.0966C15.5122 28.5065 16.2105 27.6638 16.6523 26.6668H33.3476C33.7895 27.6638 34.4878 28.5065 35.3612 29.0966C36.2347 29.6867 37.2473 30 38.2812 30C39.3151 30 40.3278 29.6867 41.2012 29.0966C42.0747 28.5065 42.773 27.6638 43.2148 26.6668H46.0937C47.1293 26.6654 48.1222 26.226 48.8545 25.4449C49.5868 24.6638 49.9987 23.6047 50 22.5001V19.8142C50.0041 18.0378 49.4152 16.3177 48.3387 14.9623C47.2622 13.6068 45.7684 12.7044 44.125 12.4167ZM47.5734 16.6667C47.8824 17.1805 48.1136 17.7429 48.2586 18.3334H47.6562C47.0364 18.3332 46.4418 18.0721 46.0015 17.6067C45.7541 17.3407 45.5647 17.0198 45.4469 16.6667H47.5734ZM1.57031 16.6667H2.90547L2.51484 18.3334H1.5625V16.7692C1.5625 16.7342 1.56953 16.7009 1.57031 16.6667ZM11.7187 28.3334C10.9462 28.3334 10.1909 28.0891 9.54855 27.6312C8.90617 27.1734 8.4055 26.5226 8.10984 25.7613C7.81419 24.9999 7.73683 24.1621 7.88755 23.3539C8.03828 22.5456 8.41031 21.8032 8.95661 21.2205C9.50291 20.6377 10.1989 20.2409 10.9567 20.0801C11.7144 19.9194 12.4998 20.0019 13.2136 20.3172C13.9274 20.6326 14.5374 21.1667 14.9667 21.8519C15.3959 22.5371 15.625 23.3427 15.625 24.1668C15.6238 25.2714 15.2118 26.3305 14.4795 27.1116C13.7472 27.8927 12.7544 28.3321 11.7187 28.3334ZM38.2812 28.3334C37.5086 28.3334 36.7534 28.0891 36.111 27.6312C35.4687 27.1734 34.968 26.5226 34.6723 25.7613C34.3767 24.9999 34.2993 24.1621 34.45 23.3539C34.6008 22.5456 34.9728 21.8032 35.5191 21.2205C36.0654 20.6377 36.7614 20.2409 37.5192 20.0801C38.2769 19.9194 39.0623 20.0019 39.7761 20.3172C40.4899 20.6326 41.0999 21.1667 41.5292 21.8519C41.9584 22.5371 42.1875 23.3427 42.1875 24.1668C42.1862 25.2714 41.7743 26.3305 41.042 27.1116C40.3097 27.8927 39.3169 28.3321 38.2812 28.3334ZM46.0937 25.0001H43.6875C43.8063 24.1693 43.7553 23.3209 43.5382 22.5131C43.3211 21.7052 42.9429 20.957 42.4295 20.3195C41.9161 19.682 41.2796 19.1704 40.5636 18.8197C39.8477 18.4689 39.0691 18.2873 38.2812 18.2873C37.4934 18.2873 36.7148 18.4689 35.9988 18.8197C35.2829 19.1704 34.6464 19.682 34.133 20.3195C33.6196 20.957 33.2414 21.7052 33.0243 22.5131C32.8071 23.3209 32.7562 24.1693 32.875 25.0001H17.125C17.2438 24.1693 17.1928 23.3209 16.9757 22.5131C16.7586 21.7052 16.3804 20.957 15.867 20.3195C15.3536 19.682 14.7171 19.1704 14.0011 18.8197C13.2852 18.4689 12.5066 18.2873 11.7187 18.2873C10.9309 18.2873 10.1523 18.4689 9.43634 18.8197C8.72037 19.1704 8.0839 19.682 7.5705 20.3195C7.0571 20.957 6.6789 21.7052 6.46177 22.5131C6.24464 23.3209 6.19372 24.1693 6.3125 25.0001H3.90625C3.28465 25.0001 2.68851 24.7367 2.24897 24.2679C1.80943 23.799 1.5625 23.1631 1.5625 22.5001V20.0001H3.125C3.29916 20.0001 3.46833 19.938 3.60563 19.8237C3.74293 19.7094 3.84049 19.5494 3.88281 19.3692L4.66406 16.0359C4.69292 15.913 4.69513 15.7847 4.67054 15.6608C4.64595 15.5369 4.59519 15.4206 4.52213 15.3207C4.44907 15.2208 4.35563 15.1401 4.24891 15.0845C4.14219 15.0289 4.025 15.0001 3.90625 15.0001H2.25703C2.55487 14.6811 2.92831 14.4544 3.3375 14.3442L5.92734 13.6534C6.43804 13.5158 6.91757 13.2701 7.3374 12.9308C7.75723 12.5915 8.10877 12.1656 8.37109 11.6784L12.1602 4.60585C12.6395 3.71385 13.3308 2.97245 14.1645 2.45642C14.9982 1.9404 15.9447 1.66799 16.9086 1.66667H29.9664C30.9303 1.66799 31.8768 1.9404 32.7105 2.45642C33.5441 2.97245 34.2355 3.71385 34.7148 4.60585L38.4289 11.5392C38.7154 12.0769 39.1109 12.5395 39.5866 12.8932C40.0622 13.2469 40.606 13.4827 41.1781 13.5834L43.8679 14.0617C44.6545 14.2005 45.4032 14.5208 46.0617 15.0001H44.5312C44.324 15.0001 44.1253 15.0879 43.9788 15.2441C43.8323 15.4004 43.75 15.6124 43.75 15.8334C43.7495 16.3807 43.8502 16.9228 44.0463 17.4286C44.2424 17.9343 44.5301 18.3939 44.8929 18.7809C45.2558 19.1679 45.6866 19.4748 46.1608 19.684C46.6349 19.8932 47.1431 20.0006 47.6562 20.0001H48.4375V22.5001C48.4375 23.1631 48.1905 23.799 47.751 24.2679C47.3115 24.7367 46.7153 25.0001 46.0937 25.0001Z">
                                                                </path>
                                                                <path
                                                                    d="M35.5141 7.90419C35.4073 7.71467 35.2344 7.57812 35.0333 7.5246C34.8322 7.47107 34.6195 7.50495 34.4418 7.61877C34.2641 7.73259 34.1361 7.91704 34.0859 8.13153C34.0357 8.34603 34.0675 8.573 34.1742 8.76252L35.3391 10.8334H25.7812V4.16667H30.2617C30.6663 4.16785 31.0638 4.28019 31.4159 4.49286C31.768 4.70552 32.0628 5.01134 32.2719 5.38084L32.7672 6.26251C32.8739 6.45203 33.0468 6.58858 33.2479 6.6421C33.449 6.69563 33.6618 6.66175 33.8394 6.54793C34.0171 6.43411 34.1451 6.24966 34.1953 6.03517C34.2455 5.82067 34.2137 5.5937 34.107 5.40418L33.6109 4.52251C33.2625 3.90693 32.7714 3.39746 32.1847 3.04321C31.5981 2.68897 30.9358 2.50188 30.2617 2.5H25C24.7928 2.5 24.5941 2.5878 24.4476 2.74408C24.3011 2.90036 24.2187 3.11232 24.2187 3.33334V11.6667C24.2187 11.8877 24.3011 12.0997 24.4476 12.256C24.5941 12.4122 24.7928 12.5 25 12.5H36.7187C36.857 12.5 36.9928 12.4608 37.1123 12.3865C37.2317 12.3122 37.3305 12.2054 37.3986 12.077C37.4667 11.9486 37.5016 11.8033 37.4998 11.6558C37.498 11.5083 37.4595 11.364 37.3883 11.2375L35.5141 7.90419ZM21.875 2.5H16.6133C15.9392 2.50188 15.2769 2.68897 14.6903 3.04321C14.1036 3.39746 13.6125 3.90693 13.2641 4.52251L9.48672 11.2375C9.41551 11.364 9.37703 11.5083 9.37522 11.6558C9.3734 11.8033 9.40832 11.9486 9.47641 12.077C9.54449 12.2054 9.6433 12.3122 9.76274 12.3865C9.88218 12.4608 10.018 12.5 10.1563 12.5H21.875C22.0822 12.5 22.2809 12.4122 22.4274 12.256C22.5739 12.0997 22.6562 11.8877 22.6562 11.6667V3.33334C22.6562 3.11232 22.5739 2.90036 22.4274 2.74408C22.2809 2.5878 22.0822 2.5 21.875 2.5ZM21.0937 10.8334H11.5359L14.6031 5.38084C14.8122 5.01134 15.107 4.70552 15.4591 4.49286C15.8112 4.28019 16.2087 4.16785 16.6133 4.16667H21.0937V10.8334ZM26.5625 13.3334H25C24.7928 13.3334 24.5941 13.4212 24.4476 13.5775C24.3011 13.7337 24.2187 13.9457 24.2187 14.1667C24.2187 14.3877 24.3011 14.5997 24.4476 14.756C24.5941 14.9122 24.7928 15 25 15H26.5625C26.7697 15 26.9684 14.9122 27.1149 14.756C27.2614 14.5997 27.3437 14.3877 27.3437 14.1667C27.3437 13.9457 27.2614 13.7337 27.1149 13.5775C26.9684 13.4212 26.7697 13.3334 26.5625 13.3334ZM11.7188 13.3334H10.1563C9.94905 13.3334 9.75034 13.4212 9.60382 13.5775C9.45731 13.7337 9.375 13.9457 9.375 14.1667C9.375 14.3877 9.45731 14.5997 9.60382 14.756C9.75034 14.9122 9.94905 15 10.1563 15H11.7188C11.926 15 12.1247 14.9122 12.2712 14.756C12.4177 14.5997 12.5 14.3877 12.5 14.1667C12.5 13.9457 12.4177 13.7337 12.2712 13.5775C12.1247 13.4212 11.926 13.3334 11.7188 13.3334ZM38.2812 21.6667C37.8177 21.6667 37.3645 21.8134 36.9791 22.0881C36.5937 22.3628 36.2933 22.7532 36.1159 23.21C35.9385 23.6669 35.8921 24.1695 35.9825 24.6545C36.073 25.1394 36.2962 25.5849 36.624 25.9345C36.9517 26.2841 37.3694 26.5223 37.824 26.6187C38.2786 26.7152 38.7499 26.6657 39.1781 26.4765C39.6064 26.2872 39.9725 25.9668 40.23 25.5557C40.4875 25.1446 40.625 24.6612 40.625 24.1667C40.625 23.5037 40.3781 22.8678 39.9385 22.399C39.499 21.9301 38.9028 21.6667 38.2812 21.6667ZM38.2812 25.0001C38.1267 25.0001 37.9757 24.9512 37.8472 24.8596C37.7187 24.7681 37.6186 24.6379 37.5595 24.4856C37.5003 24.3334 37.4849 24.1658 37.515 24.0042C37.5451 23.8425 37.6195 23.694 37.7288 23.5775C37.8381 23.4609 37.9773 23.3816 38.1288 23.3494C38.2804 23.3173 38.4375 23.3338 38.5802 23.3968C38.723 23.4599 38.845 23.5667 38.9308 23.7038C39.0167 23.8408 39.0625 24.0019 39.0625 24.1667C39.0625 24.3878 38.9802 24.5997 38.8337 24.756C38.6872 24.9123 38.4884 25.0001 38.2812 25.0001ZM11.7188 21.6667C11.2552 21.6667 10.8021 21.8134 10.4166 22.0881C10.0312 22.3628 9.7308 22.7532 9.55341 23.21C9.37602 23.6669 9.3296 24.1695 9.42004 24.6545C9.51047 25.1394 9.73369 25.5849 10.0615 25.9345C10.3892 26.2841 10.8069 26.5223 11.2615 26.6187C11.7162 26.7152 12.1874 26.6657 12.6157 26.4765C13.0439 26.2872 13.41 25.9668 13.6675 25.5557C13.925 25.1446 14.0625 24.6612 14.0625 24.1667C14.0625 23.5037 13.8156 22.8678 13.376 22.399C12.9365 21.9301 12.3404 21.6667 11.7188 21.6667ZM11.7188 25.0001C11.5642 25.0001 11.4132 24.9512 11.2847 24.8596C11.1562 24.7681 11.0561 24.6379 10.997 24.4856C10.9378 24.3334 10.9224 24.1658 10.9525 24.0042C10.9827 23.8425 11.0571 23.694 11.1663 23.5775C11.2756 23.4609 11.4148 23.3816 11.5663 23.3494C11.7179 23.3173 11.875 23.3338 12.0177 23.3968C12.1605 23.4599 12.2825 23.5667 12.3683 23.7038C12.4542 23.8408 12.5 24.0019 12.5 24.1667C12.5 24.3878 12.4177 24.5997 12.2712 24.756C12.1247 24.9123 11.926 25.0001 11.7188 25.0001Z">
                                                                </path>
                                                            </svg> <span>Car</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M2.5 30H47.5C48.163 30 48.7989 29.7742 49.2678 29.3724C49.7366 28.9705 50 28.4255 50 27.8571V27.1429C50 26.5745 49.7366 26.0295 49.2678 25.6276C48.7989 25.2258 48.163 25 47.5 25H41.4492C42.037 24.3912 42.3961 23.6442 42.4792 22.8571H43.3233C44.53 22.8572 45.714 22.5765 46.7491 22.0451C47.7843 21.5136 48.6317 20.7513 49.2011 19.8395C49.7706 18.9276 50.0406 17.9004 49.9824 16.8674C49.9242 15.8343 49.5401 14.8342 48.8708 13.9736L39.9817 2.545C39.3738 1.76137 38.5491 1.11886 37.5811 0.674797C36.6132 0.230731 35.532 -0.00109223 34.4342 3.8689e-06H2.5C1.83696 3.8689e-06 1.20107 0.225769 0.732233 0.627632C0.263392 1.0295 0 1.57454 0 2.14286L0 22.1429C0 22.3323 0.0877974 22.514 0.244078 22.6479C0.400358 22.7819 0.61232 22.8571 0.833333 22.8571H22.5208C22.6042 23.6443 22.9625 24.3914 23.5508 25H2.5C1.83696 25 1.20107 25.2258 0.732233 25.6276C0.263392 26.0295 0 26.5745 0 27.1429L0 27.8571C0 28.4255 0.263392 28.9705 0.732233 29.3724C1.20107 29.7742 1.83696 30 2.5 30ZM37.9167 25C37.2172 24.9983 36.5418 24.7808 36.014 24.3873C35.4863 23.9939 35.1414 23.4507 35.0425 22.8571H40.7925C40.6936 23.4509 40.3485 23.9943 39.8203 24.3878C39.2922 24.7813 38.6164 24.9986 37.9167 25ZM33.3542 22.8571C33.4375 23.6443 33.7958 24.3914 34.3842 25H30.6158C31.2037 24.3912 31.5628 23.6442 31.6458 22.8571H33.3542ZM44.8883 11.4286H33.3333C33.1123 11.4286 32.9004 11.3533 32.7441 11.2194C32.5878 11.0854 32.5 10.9037 32.5 10.7143V5.71429C32.5 5.52485 32.5878 5.34317 32.7441 5.20921C32.9004 5.07526 33.1123 5 33.3333 5H39.8883L44.8883 11.4286ZM1.66667 16.4286H4.16667V17.1429C4.16667 17.7112 4.43006 18.2562 4.8989 18.6581C5.36774 19.06 6.00363 19.2857 6.66667 19.2857H12.5C13.163 19.2857 13.7989 19.06 14.2678 18.6581C14.7366 18.2562 15 17.7112 15 17.1429V16.4286H34.1667C34.3877 16.4286 34.5996 16.3533 34.7559 16.2194C34.9122 16.0854 35 15.9037 35 15.7143C35 15.5248 34.9122 15.3432 34.7559 15.2092C34.5996 15.0753 34.3877 15 34.1667 15H15V5.71429C15 5.14597 14.7366 4.60092 14.2678 4.19906C13.7989 3.7972 13.163 3.57143 12.5 3.57143H6.66667C6.00363 3.57143 5.36774 3.7972 4.8989 4.19906C4.43006 4.60092 4.16667 5.14597 4.16667 5.71429V15H1.66667V2.14286C1.66667 1.95342 1.75446 1.77174 1.91074 1.63778C2.06702 1.50383 2.27899 1.42858 2.5 1.42858H34.4342C35.2575 1.42781 36.0682 1.60168 36.794 1.9347C37.5199 2.26771 38.1383 2.74952 38.5942 3.33715L38.7767 3.57143H33.3333C32.6703 3.57143 32.0344 3.7972 31.5656 4.19906C31.0967 4.60092 30.8333 5.14597 30.8333 5.71429V10.7143C30.8333 11.2826 31.0967 11.8277 31.5656 12.2295C32.0344 12.6314 32.6703 12.8571 33.3333 12.8571H46L47.4842 14.7657C47.5442 14.8414 47.5883 14.9221 47.6417 15H38.3333C38.1123 15 37.9004 15.0753 37.7441 15.2092C37.5878 15.3432 37.5 15.5248 37.5 15.7143C37.5 15.9037 37.5878 16.0854 37.7441 16.2194C37.9004 16.3533 38.1123 16.4286 38.3333 16.4286H48.26C48.3792 17.0433 48.3409 17.673 48.1478 18.2738C47.9547 18.8746 47.6114 19.4322 47.1417 19.9079C46.6721 20.3836 46.0872 20.766 45.4279 21.0286C44.7685 21.2912 44.0504 21.4277 43.3233 21.4286H1.66667V16.4286ZM13.3333 17.1429C13.3333 17.3323 13.2455 17.514 13.0893 17.6479C12.933 17.7819 12.721 17.8571 12.5 17.8571H6.66667C6.44565 17.8571 6.23369 17.7819 6.07741 17.6479C5.92113 17.514 5.83333 17.3323 5.83333 17.1429V5.71429C5.83333 5.52485 5.92113 5.34317 6.07741 5.20921C6.23369 5.07526 6.44565 5 6.66667 5H12.5C12.721 5 12.933 5.07526 13.0893 5.20921C13.2455 5.34317 13.3333 5.52485 13.3333 5.71429V17.1429ZM24.2092 22.8571H29.9592C29.8629 23.4521 29.5188 23.9971 28.9904 24.3916C28.462 24.786 27.7849 25.0033 27.0842 25.0033C26.3834 25.0033 25.7063 24.786 25.1779 24.3916C24.6495 23.9971 24.3054 23.4521 24.2092 22.8571ZM1.66667 27.1429C1.66667 26.9534 1.75446 26.7717 1.91074 26.6378C2.06702 26.5038 2.27899 26.4286 2.5 26.4286H47.5C47.721 26.4286 47.933 26.5038 48.0893 26.6378C48.2455 26.7717 48.3333 26.9534 48.3333 27.1429V27.8571C48.3333 28.0466 48.2455 28.2283 48.0893 28.3622C47.933 28.4962 47.721 28.5714 47.5 28.5714H2.5C2.27899 28.5714 2.06702 28.4962 1.91074 28.3622C1.75446 28.2283 1.66667 28.0466 1.66667 27.8571V27.1429Z">
                                                                </path>
                                                                <path
                                                                    d="M25.8333 3.57141H20C19.337 3.57141 18.7011 3.79718 18.2322 4.19904C17.7634 4.6009 17.5 5.14595 17.5 5.71427V10.7143C17.5 11.2826 17.7634 11.8276 18.2322 12.2295C18.7011 12.6314 19.337 12.8571 20 12.8571H25.8333C26.4964 12.8571 27.1323 12.6314 27.6011 12.2295C28.0699 11.8276 28.3333 11.2826 28.3333 10.7143V5.71427C28.3333 5.14595 28.0699 4.6009 27.6011 4.19904C27.1323 3.79718 26.4964 3.57141 25.8333 3.57141ZM26.6667 10.7143C26.6667 10.9037 26.5789 11.0854 26.4226 11.2193C26.2663 11.3533 26.0543 11.4286 25.8333 11.4286H20C19.779 11.4286 19.567 11.3533 19.4107 11.2193C19.2545 11.0854 19.1667 10.9037 19.1667 10.7143V5.71427C19.1667 5.52483 19.2545 5.34315 19.4107 5.20919C19.567 5.07524 19.779 4.99998 20 4.99998H25.8333C26.0543 4.99998 26.2663 5.07524 26.4226 5.20919C26.5789 5.34315 26.6667 5.52483 26.6667 5.71427V10.7143ZM10.8333 6.42855H8.33333C8.11232 6.42855 7.90036 6.50381 7.74408 6.63776C7.5878 6.77172 7.5 6.9534 7.5 7.14284C7.5 7.33228 7.5878 7.51396 7.74408 7.64792C7.90036 7.78187 8.11232 7.85713 8.33333 7.85713H10.8333C11.0543 7.85713 11.2663 7.78187 11.4226 7.64792C11.5789 7.51396 11.6667 7.33228 11.6667 7.14284C11.6667 6.9534 11.5789 6.77172 11.4226 6.63776C11.2663 6.50381 11.0543 6.42855 10.8333 6.42855ZM10.8333 9.2857H8.33333C8.11232 9.2857 7.90036 9.36095 7.74408 9.49491C7.5878 9.62886 7.5 9.81054 7.5 9.99998C7.5 10.1894 7.5878 10.3711 7.74408 10.5051C7.90036 10.639 8.11232 10.7143 8.33333 10.7143H10.8333C11.0543 10.7143 11.2663 10.639 11.4226 10.5051C11.5789 10.3711 11.6667 10.1894 11.6667 9.99998C11.6667 9.81054 11.5789 9.62886 11.4226 9.49491C11.2663 9.36095 11.0543 9.2857 10.8333 9.2857Z">
                                                                </path>
                                                            </svg> <span>Train</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M49.2587 28.5694C47.1164 28.5694 46.1141 28.1755 44.9534 27.7193C43.9689 27.3324 42.9508 26.9323 41.3434 26.7543C40.9423 26.7107 40.5783 26.9918 40.5326 27.3842C40.5107 27.5727 40.5664 27.7619 40.6875 27.9103C40.8085 28.0587 40.9851 28.1541 41.1782 28.1755C42.5879 28.3316 43.471 28.6786 44.406 29.0462C45.5988 29.5151 46.8323 29.9998 49.2587 29.9998C49.3556 30.0009 49.4518 29.9832 49.5417 29.9478C49.6316 29.9123 49.7134 29.8598 49.7823 29.7933C49.8513 29.7268 49.906 29.6476 49.9434 29.5602C49.9808 29.4729 50 29.3792 50 29.2846C50 29.19 49.9808 29.0963 49.9434 29.009C49.906 28.9217 49.8513 28.8425 49.7823 28.776C49.7134 28.7094 49.6316 28.6569 49.5417 28.6215C49.4518 28.586 49.3556 28.5683 49.2587 28.5694ZM38.5737 27.3844C38.5281 26.9919 38.1652 26.7103 37.7628 26.7543C36.1555 26.9323 35.1374 27.3324 34.1527 27.7193C32.9922 28.1755 31.9899 28.5694 29.8476 28.5694C27.7054 28.5694 26.7032 28.1755 25.5427 27.7193C24.282 27.2238 22.8531 26.6622 20.1426 26.6622C17.4321 26.6622 16.0032 27.2238 14.7425 27.7193C13.5821 28.1755 12.5798 28.5694 10.4378 28.5694C8.29567 28.5694 7.2934 28.1755 6.13285 27.7193C4.87222 27.2238 3.44327 26.6622 0.732884 26.6622C0.538511 26.6622 0.352099 26.7376 0.214657 26.8717C0.0772143 27.0058 0 27.1878 0 27.3774C0 27.5671 0.0772143 27.7491 0.214657 27.8832C0.352099 28.0173 0.538511 28.0927 0.732884 28.0927C3.15923 28.0927 4.33764 28.5559 5.58538 29.0464C6.77815 29.5152 8.01154 30 10.4378 30C12.8638 30 14.0972 29.5153 15.2902 29.0464C16.5377 28.556 17.7161 28.0927 20.1426 28.0927C22.569 28.0927 23.7474 28.5559 24.9951 29.0464C26.188 29.5152 27.4213 30 29.8476 30C32.2738 30 33.5073 29.5153 34.7004 29.0464C35.6354 28.6789 36.5185 28.3318 37.9281 28.1757C38.0237 28.1651 38.1162 28.1363 38.2005 28.0908C38.2847 28.0453 38.3589 27.984 38.4188 27.9106C38.4788 27.8371 38.5233 27.7528 38.5499 27.6625C38.5764 27.5722 38.5845 27.4777 38.5737 27.3844Z">
                                                                </path>
                                                                <path
                                                                    d="M49.2587 25.5429C46.9743 25.5429 45.8597 25.1049 44.6796 24.6411C43.9381 24.3496 43.1814 24.0524 42.159 23.8575L49.5227 14.6371C49.64 14.4915 49.7127 14.3165 49.7323 14.1323C49.752 13.9481 49.7179 13.7622 49.6339 13.5961C49.5513 13.4294 49.4221 13.2888 49.2611 13.1907C49.1002 13.0926 48.9141 13.041 48.7243 13.0417H38.1889L34.2998 5.21255C34.0367 4.66692 33.4676 4.31434 32.8497 4.31434H16.9192L15.4371 0.850369C15.3297 0.59824 15.1481 0.382865 14.9153 0.231494C14.6825 0.080124 14.4088 -0.000438062 14.1291 1.79156e-06H9.96394C9.18224 1.79156e-06 8.54641 0.620624 8.54641 1.38351V4.31434H7.17017C6.28663 4.31434 5.56771 5.01587 5.56771 5.87824V14.8942H1.65363C1.33718 14.8942 1.03469 15.0416 0.844486 15.2885C0.654284 15.5354 0.593161 15.8599 0.681135 16.1567L2.94345 23.7897C2.31914 23.6938 1.59817 23.6357 0.732884 23.6357C0.538511 23.6357 0.352099 23.711 0.214657 23.8452C0.0772143 23.9793 0 24.1612 0 24.3509C0 24.5406 0.0772143 24.7226 0.214657 24.8567C0.352099 24.9908 0.538511 25.0662 0.732884 25.0662C3.01707 25.0662 4.13163 25.5042 5.3116 25.968C6.5692 26.4624 7.86957 26.9734 10.4379 26.9734C13.0061 26.9734 14.3065 26.4624 15.5641 25.968C16.744 25.5042 17.8585 25.0662 20.1427 25.0662C22.427 25.0662 23.5414 25.5042 24.7214 25.968C25.979 26.4624 27.2795 26.9734 29.8477 26.9734C32.4161 26.9734 33.7166 26.4624 34.9742 25.968C36.1542 25.5042 37.2688 25.0662 39.5532 25.0662C41.8375 25.0662 42.9521 25.5042 44.1322 25.968C45.3899 26.4624 46.6902 26.9734 49.2587 26.9734C49.453 26.9734 49.6394 26.8981 49.7769 26.7639C49.9143 26.6298 49.9915 26.4479 49.9915 26.2582C49.9915 26.0685 49.9143 25.8865 49.7769 25.7524C49.6394 25.6183 49.453 25.5429 49.2587 25.5429ZM10.0121 1.43059H14.097L15.3309 4.31444H10.0121V1.43059ZM39.5532 23.6358C36.9848 23.6358 35.6843 24.1468 34.4266 24.6412C33.2465 25.105 32.132 25.543 29.8476 25.543C27.5633 25.543 26.4487 25.105 25.2689 24.6412C24.0113 24.1468 22.7109 23.6358 20.1426 23.6358C17.5744 23.6358 16.2739 24.1468 15.0164 24.6412C13.8364 25.105 12.722 25.543 10.4378 25.543C8.1536 25.543 7.03904 25.105 5.85907 24.6412C5.4521 24.4813 5.04046 24.3197 4.58311 24.1741L2.25675 16.3247H8.35366C8.54804 16.3247 8.73445 16.2493 8.87189 16.1152C9.00933 15.981 9.08655 15.7991 9.08655 15.6094C9.08655 15.4197 9.00933 15.2378 8.87189 15.1037C8.73445 14.9695 8.54804 14.8942 8.35366 14.8942H7.03358V5.87824C7.03358 5.80468 7.09489 5.74484 7.17027 5.74484H32.8498C32.9025 5.74484 32.9512 5.77495 32.9773 5.82898L36.5603 13.0417H32.441C31.946 13.0416 31.468 13.2182 31.0971 13.5382L29.6847 14.7563C29.5817 14.8452 29.4489 14.8942 29.3114 14.8942H11.7636C11.5693 14.8942 11.3829 14.9695 11.2454 15.1037C11.108 15.2378 11.0308 15.4197 11.0308 15.6094C11.0308 15.7991 11.108 15.981 11.2454 16.1152C11.3829 16.2493 11.5693 16.3247 11.7636 16.3247H29.3114C29.807 16.3247 30.2842 16.1484 30.6554 15.8282L32.0677 14.6101C32.1707 14.5212 32.3035 14.4722 32.441 14.4722H47.7962L40.4596 23.6588C40.1577 23.6431 39.8555 23.6354 39.5532 23.6358Z">
                                                                </path>
                                                                <path
                                                                    d="M12.4227 7.25165H9.94664C9.32545 7.25165 8.82007 7.74487 8.82007 8.3511V10.5679C8.82007 11.1741 9.32545 11.6673 9.94664 11.6673H12.4227C13.0439 11.6673 13.5492 11.1741 13.5492 10.5679V8.3511C13.5492 7.74487 13.0439 7.25165 12.4227 7.25165ZM12.0835 10.2368H10.2858V8.68204H12.0835V10.2368ZM18.4565 7.25165H15.9805C15.3593 7.25165 14.8539 7.74487 14.8539 8.3511V10.5679C14.854 11.1741 15.3593 11.6673 15.9805 11.6673H18.4565C19.0777 11.6673 19.583 11.1741 19.583 10.5679V8.3511C19.583 7.74487 19.0777 7.25165 18.4565 7.25165ZM18.1173 10.2368H16.3197V8.68204H18.1173V10.2368ZM24.4904 7.25165H22.0143C21.3931 7.25165 20.8878 7.74487 20.8878 8.3511V10.5679C20.8878 11.1741 21.3931 11.6673 22.0143 11.6673H24.4904C25.1116 11.6673 25.6168 11.1741 25.6168 10.5679V8.3511C25.6168 7.74487 25.1116 7.25165 24.4904 7.25165ZM24.1512 10.2368H22.3535V8.68204H24.1512V10.2368ZM32.6201 10.3663L31.666 7.8778C31.595 7.69428 31.4686 7.53614 31.3035 7.42433C31.1383 7.31253 30.9423 7.25234 30.7413 7.25174H28.0481C27.4269 7.25174 26.9215 7.74496 26.9215 8.3512V10.568C26.9216 11.1741 27.427 11.6673 28.0481 11.6673H31.6955C31.855 11.6673 32.0121 11.6297 32.1534 11.5576C32.2947 11.4854 32.416 11.3809 32.5068 11.2531C32.5977 11.1252 32.6555 10.9777 32.6752 10.8233C32.695 10.6688 32.6761 10.512 32.6201 10.3663ZM28.3873 10.2368V8.68204H30.4095L31.0056 10.2368H28.3873Z">
                                                                </path>
                                                            </svg> <span>Boat</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M39.1667 22.1034C38.6722 22.1034 38.1889 22.2423 37.7777 22.5025C37.3666 22.7627 37.0462 23.1326 36.857 23.5653C36.6677 23.9981 36.6182 24.4742 36.7147 24.9336C36.8112 25.393 37.0493 25.815 37.3989 26.1462C37.7485 26.4774 38.194 26.7029 38.6789 26.7943C39.1639 26.8857 39.6666 26.8388 40.1234 26.6595C40.5802 26.4803 40.9706 26.1768 41.2453 25.7873C41.52 25.3979 41.6667 24.94 41.6667 24.4716C41.666 23.8437 41.4024 23.2417 40.9337 22.7977C40.465 22.3537 39.8295 22.104 39.1667 22.1034ZM39.1667 25.261C39.0018 25.261 38.8407 25.2147 38.7037 25.128C38.5667 25.0412 38.4598 24.9179 38.3968 24.7737C38.3337 24.6294 38.3172 24.4707 38.3493 24.3176C38.3815 24.1645 38.4609 24.0238 38.5774 23.9134C38.694 23.803 38.8424 23.7278 39.0041 23.6974C39.1657 23.6669 39.3333 23.6825 39.4856 23.7423C39.6378 23.802 39.768 23.9032 39.8596 24.033C39.9511 24.1628 40 24.3155 40 24.4716C39.9998 24.6809 39.9119 24.8816 39.7557 25.0296C39.5994 25.1776 39.3876 25.2608 39.1667 25.261ZM46.7558 12.5097L43.155 11.2309L39.9083 2.61925C39.6181 1.85331 39.0855 1.19081 38.3833 0.722079C37.681 0.253345 36.8432 0.00119249 35.9842 0H4.16667C3.062 0.00125346 2.00296 0.417503 1.22185 1.15744C0.440735 1.89738 0.00132321 2.9006 0 3.94703V22.8928C0.000661846 23.5207 0.264267 24.1227 0.732964 24.5667C1.20166 25.0107 1.83716 25.2604 2.5 25.261H4.23333C4.43131 26.5762 5.12354 27.7796 6.18289 28.6501C7.24223 29.5207 8.59758 30 10 30C11.4024 30 12.7578 29.5207 13.8171 28.6501C14.8765 27.7796 15.5687 26.5762 15.7667 25.261H33.4C33.598 26.5762 34.2902 27.7796 35.3496 28.6501C36.4089 29.5207 37.7642 30 39.1667 30C40.5691 30 41.9244 29.5207 42.9838 28.6501C44.0431 27.7796 44.7354 26.5762 44.9333 25.261H47.5C48.1628 25.2604 48.7983 25.0107 49.267 24.5667C49.7357 24.1227 49.9993 23.5207 50 22.8928V16.9446C49.9966 15.9812 49.6847 15.0415 49.1054 14.2496C48.5262 13.4577 47.7069 12.851 46.7558 12.5097ZM41.3167 11.0517H31.6667V4.73644H38.9367L41.3167 11.0517ZM10 28.4186C9.17591 28.4186 8.37033 28.1871 7.68512 27.7534C6.99992 27.3197 6.46587 26.7033 6.1505 25.9821C5.83514 25.2608 5.75262 24.4672 5.91339 23.7016C6.07417 22.9359 6.471 22.2326 7.05372 21.6806C7.63644 21.1286 8.37887 20.7527 9.18712 20.6004C9.99538 20.4481 10.8332 20.5263 11.5945 20.825C12.3559 21.1238 13.0066 21.6297 13.4645 22.2787C13.9223 22.9278 14.1667 23.6909 14.1667 24.4716C14.1653 25.518 13.7259 26.5212 12.9448 27.2612C12.1637 28.0011 11.1047 28.4174 10 28.4186ZM39.1667 28.4186C38.3426 28.4186 37.537 28.1871 36.8518 27.7534C36.1666 27.3197 35.6325 26.7033 35.3172 25.9821C35.0018 25.2608 34.9193 24.4672 35.0801 23.7016C35.2408 22.9359 35.6377 22.2326 36.2204 21.6806C36.8031 21.1286 37.5455 20.7527 38.3538 20.6004C39.162 20.4481 39.9998 20.5263 40.7612 20.825C41.5225 21.1238 42.1733 21.6297 42.6311 22.2787C43.089 22.9278 43.3333 23.6909 43.3333 24.4716C43.332 25.518 42.8926 26.5212 42.1115 27.2612C41.3304 28.0011 40.2713 28.4174 39.1667 28.4186ZM48.3333 22.8928C48.3331 23.1021 48.2452 23.3028 48.089 23.4507C47.9328 23.5987 47.7209 23.682 47.5 23.6822H44.9333C44.7354 22.367 44.0431 21.1636 42.9838 20.2931C41.9244 19.4225 40.5691 18.9432 39.1667 18.9432C37.7642 18.9432 36.4089 19.4225 35.3496 20.2931C34.2902 21.1636 33.598 22.367 33.4 23.6822H15.7667C15.5687 22.367 14.8765 21.1636 13.8171 20.2931C12.7578 19.4225 11.4024 18.9432 10 18.9432C8.59758 18.9432 7.24223 19.4225 6.18289 20.2931C5.12354 21.1636 4.43131 22.367 4.23333 23.6822H2.5C2.27905 23.682 2.06722 23.5987 1.91099 23.4507C1.75476 23.3028 1.66689 23.1021 1.66667 22.8928V3.94703C1.66733 3.31913 1.93093 2.71713 2.39963 2.27314C2.86833 1.82915 3.50383 1.57944 4.16667 1.57881H35.9842C36.4996 1.57954 37.0022 1.73086 37.4235 2.01213C37.8448 2.2934 38.1643 2.69094 38.3383 3.15052L38.3417 3.15763H31.6667C31.2248 3.15804 30.8011 3.32452 30.4886 3.62051C30.1762 3.9165 30.0004 4.31784 30 4.73644V11.0517C30.0004 11.4703 30.1762 11.8716 30.4886 12.1676C30.8011 12.4636 31.2248 12.6301 31.6667 12.6305H42.3483L46.1708 13.9883C46.8048 14.2158 47.3509 14.6203 47.737 15.1481C48.1232 15.676 48.3311 16.3024 48.3333 16.9446V22.8928ZM10 22.1034C9.50555 22.1034 9.0222 22.2423 8.61107 22.5025C8.19995 22.7627 7.87952 23.1326 7.6903 23.5653C7.50108 23.9981 7.45157 24.4742 7.54804 24.9336C7.6445 25.393 7.8826 25.815 8.23223 26.1462C8.58186 26.4774 9.02732 26.7029 9.51227 26.7943C9.99723 26.8857 10.4999 26.8388 10.9567 26.6595C11.4135 26.4803 11.804 26.1768 12.0787 25.7873C12.3534 25.3979 12.5 24.94 12.5 24.4716C12.4993 23.8437 12.2357 23.2417 11.767 22.7977C11.2983 22.3537 10.6628 22.104 10 22.1034ZM10 25.261C9.83518 25.261 9.67407 25.2147 9.53702 25.128C9.39998 25.0412 9.29317 24.9179 9.2301 24.7737C9.16703 24.6294 9.15052 24.4707 9.18268 24.3176C9.21483 24.1645 9.2942 24.0238 9.41074 23.9134C9.52729 23.803 9.67577 23.7278 9.83742 23.6974C9.99908 23.6669 10.1666 23.6825 10.3189 23.7423C10.4712 23.802 10.6013 23.9032 10.6929 24.033C10.7845 24.1628 10.8333 24.3155 10.8333 24.4716C10.8331 24.6809 10.7452 24.8816 10.589 25.0296C10.4328 25.1776 10.2209 25.2608 10 25.261ZM35 15.7881C35 15.9975 34.9122 16.1983 34.7559 16.3463C34.5996 16.4944 34.3877 16.5775 34.1667 16.5775H30.8333C30.6123 16.5775 30.4004 16.4944 30.2441 16.3463C30.0878 16.1983 30 15.9975 30 15.7881C30 15.5788 30.0878 15.378 30.2441 15.2299C30.4004 15.0819 30.6123 14.9987 30.8333 14.9987H34.1667C34.3877 14.9987 34.5996 15.0819 34.7559 15.2299C34.9122 15.378 35 15.5788 35 15.7881ZM26.6667 3.15763H5C4.55811 3.15804 4.13444 3.32452 3.82198 3.62051C3.50951 3.9165 3.33377 4.31784 3.33333 4.73644V11.0517C3.33377 11.4703 3.50951 11.8716 3.82198 12.1676C4.13444 12.4636 4.55811 12.6301 5 12.6305H26.6667C27.1086 12.6301 27.5322 12.4636 27.8447 12.1676C28.1572 11.8716 28.3329 11.4703 28.3333 11.0517V4.73644C28.3329 4.31784 28.1572 3.9165 27.8447 3.62051C27.5322 3.32452 27.1086 3.15804 26.6667 3.15763ZM5 4.73644H15V11.0517H5V4.73644ZM16.6667 11.0517V4.73644H26.6667L26.6683 11.0517H16.6667Z">
                                                                </path>
                                                            </svg> <span>Bus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="details-btn">
                                                    <a href="transport-details.php" class="primary-btn1">View
                                                        Details</a>
                                                </div>
                                                <div class="review-area">
                                                    <ul class="rating">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(214 reviewes)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="transport-card">
                                        <a href="transport-details.php" class="transport-img">
                                            <img src="assets/img/innerpage/kashmir.jpg" alt>
                                            <span>250km</span>
                                        </a>
                                        <div class="transport-content">
                                            <h4><a href="transport-details.php">Travel to Kashmir from Delhi.</a></h4>
                                            <div class="transport-type">
                                                <h6>Available Transport:</h6>
                                                <div class="row g-2">
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M44.125 12.4167L41.4351 11.9392C41.092 11.8787 40.7659 11.7373 40.4806 11.5252C40.1953 11.3131 39.9579 11.0358 39.7859 10.7134L36.0711 3.78001C35.4551 2.63294 34.5663 1.67947 33.4945 1.0158C32.4227 0.352133 31.2057 0.00174827 29.9664 0H16.9086C15.6693 0.00166413 14.4524 0.351923 13.3806 1.01544C12.3088 1.67896 11.42 2.63226 10.8039 3.77918L7.01484 10.8517C6.85724 11.1442 6.64605 11.3999 6.39384 11.6035C6.14164 11.807 5.8536 11.9544 5.54687 12.0367L2.95781 12.7267C2.31318 12.8988 1.72057 13.244 1.23634 13.7295C0.752121 14.2149 0.3924 14.8244 0.191406 15.5001C0.182812 15.5217 0.182031 15.5476 0.175 15.5701C0.0618921 15.9585 0.0029285 16.3625 0 16.7692L0 22.5001C0.00124051 23.6047 0.413189 24.6638 1.14548 25.4449C1.87778 26.226 2.87063 26.6654 3.90625 26.6668H6.78515C7.22701 27.6638 7.92531 28.5065 8.79876 29.0966C9.6722 29.6867 10.6848 30 11.7187 30C12.7527 30 13.7653 29.6867 14.6387 29.0966C15.5122 28.5065 16.2105 27.6638 16.6523 26.6668H33.3476C33.7895 27.6638 34.4878 28.5065 35.3612 29.0966C36.2347 29.6867 37.2473 30 38.2812 30C39.3151 30 40.3278 29.6867 41.2012 29.0966C42.0747 28.5065 42.773 27.6638 43.2148 26.6668H46.0937C47.1293 26.6654 48.1222 26.226 48.8545 25.4449C49.5868 24.6638 49.9987 23.6047 50 22.5001V19.8142C50.0041 18.0378 49.4152 16.3177 48.3387 14.9623C47.2622 13.6068 45.7684 12.7044 44.125 12.4167ZM47.5734 16.6667C47.8824 17.1805 48.1136 17.7429 48.2586 18.3334H47.6562C47.0364 18.3332 46.4418 18.0721 46.0015 17.6067C45.7541 17.3407 45.5647 17.0198 45.4469 16.6667H47.5734ZM1.57031 16.6667H2.90547L2.51484 18.3334H1.5625V16.7692C1.5625 16.7342 1.56953 16.7009 1.57031 16.6667ZM11.7187 28.3334C10.9462 28.3334 10.1909 28.0891 9.54855 27.6312C8.90617 27.1734 8.4055 26.5226 8.10984 25.7613C7.81419 24.9999 7.73683 24.1621 7.88755 23.3539C8.03828 22.5456 8.41031 21.8032 8.95661 21.2205C9.50291 20.6377 10.1989 20.2409 10.9567 20.0801C11.7144 19.9194 12.4998 20.0019 13.2136 20.3172C13.9274 20.6326 14.5374 21.1667 14.9667 21.8519C15.3959 22.5371 15.625 23.3427 15.625 24.1668C15.6238 25.2714 15.2118 26.3305 14.4795 27.1116C13.7472 27.8927 12.7544 28.3321 11.7187 28.3334ZM38.2812 28.3334C37.5086 28.3334 36.7534 28.0891 36.111 27.6312C35.4687 27.1734 34.968 26.5226 34.6723 25.7613C34.3767 24.9999 34.2993 24.1621 34.45 23.3539C34.6008 22.5456 34.9728 21.8032 35.5191 21.2205C36.0654 20.6377 36.7614 20.2409 37.5192 20.0801C38.2769 19.9194 39.0623 20.0019 39.7761 20.3172C40.4899 20.6326 41.0999 21.1667 41.5292 21.8519C41.9584 22.5371 42.1875 23.3427 42.1875 24.1668C42.1862 25.2714 41.7743 26.3305 41.042 27.1116C40.3097 27.8927 39.3169 28.3321 38.2812 28.3334ZM46.0937 25.0001H43.6875C43.8063 24.1693 43.7553 23.3209 43.5382 22.5131C43.3211 21.7052 42.9429 20.957 42.4295 20.3195C41.9161 19.682 41.2796 19.1704 40.5636 18.8197C39.8477 18.4689 39.0691 18.2873 38.2812 18.2873C37.4934 18.2873 36.7148 18.4689 35.9988 18.8197C35.2829 19.1704 34.6464 19.682 34.133 20.3195C33.6196 20.957 33.2414 21.7052 33.0243 22.5131C32.8071 23.3209 32.7562 24.1693 32.875 25.0001H17.125C17.2438 24.1693 17.1928 23.3209 16.9757 22.5131C16.7586 21.7052 16.3804 20.957 15.867 20.3195C15.3536 19.682 14.7171 19.1704 14.0011 18.8197C13.2852 18.4689 12.5066 18.2873 11.7187 18.2873C10.9309 18.2873 10.1523 18.4689 9.43634 18.8197C8.72037 19.1704 8.0839 19.682 7.5705 20.3195C7.0571 20.957 6.6789 21.7052 6.46177 22.5131C6.24464 23.3209 6.19372 24.1693 6.3125 25.0001H3.90625C3.28465 25.0001 2.68851 24.7367 2.24897 24.2679C1.80943 23.799 1.5625 23.1631 1.5625 22.5001V20.0001H3.125C3.29916 20.0001 3.46833 19.938 3.60563 19.8237C3.74293 19.7094 3.84049 19.5494 3.88281 19.3692L4.66406 16.0359C4.69292 15.913 4.69513 15.7847 4.67054 15.6608C4.64595 15.5369 4.59519 15.4206 4.52213 15.3207C4.44907 15.2208 4.35563 15.1401 4.24891 15.0845C4.14219 15.0289 4.025 15.0001 3.90625 15.0001H2.25703C2.55487 14.6811 2.92831 14.4544 3.3375 14.3442L5.92734 13.6534C6.43804 13.5158 6.91757 13.2701 7.3374 12.9308C7.75723 12.5915 8.10877 12.1656 8.37109 11.6784L12.1602 4.60585C12.6395 3.71385 13.3308 2.97245 14.1645 2.45642C14.9982 1.9404 15.9447 1.66799 16.9086 1.66667H29.9664C30.9303 1.66799 31.8768 1.9404 32.7105 2.45642C33.5441 2.97245 34.2355 3.71385 34.7148 4.60585L38.4289 11.5392C38.7154 12.0769 39.1109 12.5395 39.5866 12.8932C40.0622 13.2469 40.606 13.4827 41.1781 13.5834L43.8679 14.0617C44.6545 14.2005 45.4032 14.5208 46.0617 15.0001H44.5312C44.324 15.0001 44.1253 15.0879 43.9788 15.2441C43.8323 15.4004 43.75 15.6124 43.75 15.8334C43.7495 16.3807 43.8502 16.9228 44.0463 17.4286C44.2424 17.9343 44.5301 18.3939 44.8929 18.7809C45.2558 19.1679 45.6866 19.4748 46.1608 19.684C46.6349 19.8932 47.1431 20.0006 47.6562 20.0001H48.4375V22.5001C48.4375 23.1631 48.1905 23.799 47.751 24.2679C47.3115 24.7367 46.7153 25.0001 46.0937 25.0001Z">
                                                                </path>
                                                                <path
                                                                    d="M35.5141 7.90419C35.4073 7.71467 35.2344 7.57812 35.0333 7.5246C34.8322 7.47107 34.6195 7.50495 34.4418 7.61877C34.2641 7.73259 34.1361 7.91704 34.0859 8.13153C34.0357 8.34603 34.0675 8.573 34.1742 8.76252L35.3391 10.8334H25.7812V4.16667H30.2617C30.6663 4.16785 31.0638 4.28019 31.4159 4.49286C31.768 4.70552 32.0628 5.01134 32.2719 5.38084L32.7672 6.26251C32.8739 6.45203 33.0468 6.58858 33.2479 6.6421C33.449 6.69563 33.6618 6.66175 33.8394 6.54793C34.0171 6.43411 34.1451 6.24966 34.1953 6.03517C34.2455 5.82067 34.2137 5.5937 34.107 5.40418L33.6109 4.52251C33.2625 3.90693 32.7714 3.39746 32.1847 3.04321C31.5981 2.68897 30.9358 2.50188 30.2617 2.5H25C24.7928 2.5 24.5941 2.5878 24.4476 2.74408C24.3011 2.90036 24.2187 3.11232 24.2187 3.33334V11.6667C24.2187 11.8877 24.3011 12.0997 24.4476 12.256C24.5941 12.4122 24.7928 12.5 25 12.5H36.7187C36.857 12.5 36.9928 12.4608 37.1123 12.3865C37.2317 12.3122 37.3305 12.2054 37.3986 12.077C37.4667 11.9486 37.5016 11.8033 37.4998 11.6558C37.498 11.5083 37.4595 11.364 37.3883 11.2375L35.5141 7.90419ZM21.875 2.5H16.6133C15.9392 2.50188 15.2769 2.68897 14.6903 3.04321C14.1036 3.39746 13.6125 3.90693 13.2641 4.52251L9.48672 11.2375C9.41551 11.364 9.37703 11.5083 9.37522 11.6558C9.3734 11.8033 9.40832 11.9486 9.47641 12.077C9.54449 12.2054 9.6433 12.3122 9.76274 12.3865C9.88218 12.4608 10.018 12.5 10.1563 12.5H21.875C22.0822 12.5 22.2809 12.4122 22.4274 12.256C22.5739 12.0997 22.6562 11.8877 22.6562 11.6667V3.33334C22.6562 3.11232 22.5739 2.90036 22.4274 2.74408C22.2809 2.5878 22.0822 2.5 21.875 2.5ZM21.0937 10.8334H11.5359L14.6031 5.38084C14.8122 5.01134 15.107 4.70552 15.4591 4.49286C15.8112 4.28019 16.2087 4.16785 16.6133 4.16667H21.0937V10.8334ZM26.5625 13.3334H25C24.7928 13.3334 24.5941 13.4212 24.4476 13.5775C24.3011 13.7337 24.2187 13.9457 24.2187 14.1667C24.2187 14.3877 24.3011 14.5997 24.4476 14.756C24.5941 14.9122 24.7928 15 25 15H26.5625C26.7697 15 26.9684 14.9122 27.1149 14.756C27.2614 14.5997 27.3437 14.3877 27.3437 14.1667C27.3437 13.9457 27.2614 13.7337 27.1149 13.5775C26.9684 13.4212 26.7697 13.3334 26.5625 13.3334ZM11.7188 13.3334H10.1563C9.94905 13.3334 9.75034 13.4212 9.60382 13.5775C9.45731 13.7337 9.375 13.9457 9.375 14.1667C9.375 14.3877 9.45731 14.5997 9.60382 14.756C9.75034 14.9122 9.94905 15 10.1563 15H11.7188C11.926 15 12.1247 14.9122 12.2712 14.756C12.4177 14.5997 12.5 14.3877 12.5 14.1667C12.5 13.9457 12.4177 13.7337 12.2712 13.5775C12.1247 13.4212 11.926 13.3334 11.7188 13.3334ZM38.2812 21.6667C37.8177 21.6667 37.3645 21.8134 36.9791 22.0881C36.5937 22.3628 36.2933 22.7532 36.1159 23.21C35.9385 23.6669 35.8921 24.1695 35.9825 24.6545C36.073 25.1394 36.2962 25.5849 36.624 25.9345C36.9517 26.2841 37.3694 26.5223 37.824 26.6187C38.2786 26.7152 38.7499 26.6657 39.1781 26.4765C39.6064 26.2872 39.9725 25.9668 40.23 25.5557C40.4875 25.1446 40.625 24.6612 40.625 24.1667C40.625 23.5037 40.3781 22.8678 39.9385 22.399C39.499 21.9301 38.9028 21.6667 38.2812 21.6667ZM38.2812 25.0001C38.1267 25.0001 37.9757 24.9512 37.8472 24.8596C37.7187 24.7681 37.6186 24.6379 37.5595 24.4856C37.5003 24.3334 37.4849 24.1658 37.515 24.0042C37.5451 23.8425 37.6195 23.694 37.7288 23.5775C37.8381 23.4609 37.9773 23.3816 38.1288 23.3494C38.2804 23.3173 38.4375 23.3338 38.5802 23.3968C38.723 23.4599 38.845 23.5667 38.9308 23.7038C39.0167 23.8408 39.0625 24.0019 39.0625 24.1667C39.0625 24.3878 38.9802 24.5997 38.8337 24.756C38.6872 24.9123 38.4884 25.0001 38.2812 25.0001ZM11.7188 21.6667C11.2552 21.6667 10.8021 21.8134 10.4166 22.0881C10.0312 22.3628 9.7308 22.7532 9.55341 23.21C9.37602 23.6669 9.3296 24.1695 9.42004 24.6545C9.51047 25.1394 9.73369 25.5849 10.0615 25.9345C10.3892 26.2841 10.8069 26.5223 11.2615 26.6187C11.7162 26.7152 12.1874 26.6657 12.6157 26.4765C13.0439 26.2872 13.41 25.9668 13.6675 25.5557C13.925 25.1446 14.0625 24.6612 14.0625 24.1667C14.0625 23.5037 13.8156 22.8678 13.376 22.399C12.9365 21.9301 12.3404 21.6667 11.7188 21.6667ZM11.7188 25.0001C11.5642 25.0001 11.4132 24.9512 11.2847 24.8596C11.1562 24.7681 11.0561 24.6379 10.997 24.4856C10.9378 24.3334 10.9224 24.1658 10.9525 24.0042C10.9827 23.8425 11.0571 23.694 11.1663 23.5775C11.2756 23.4609 11.4148 23.3816 11.5663 23.3494C11.7179 23.3173 11.875 23.3338 12.0177 23.3968C12.1605 23.4599 12.2825 23.5667 12.3683 23.7038C12.4542 23.8408 12.5 24.0019 12.5 24.1667C12.5 24.3878 12.4177 24.5997 12.2712 24.756C12.1247 24.9123 11.926 25.0001 11.7188 25.0001Z">
                                                                </path>
                                                            </svg> <span>Car</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M2.5 30H47.5C48.163 30 48.7989 29.7742 49.2678 29.3724C49.7366 28.9705 50 28.4255 50 27.8571V27.1429C50 26.5745 49.7366 26.0295 49.2678 25.6276C48.7989 25.2258 48.163 25 47.5 25H41.4492C42.037 24.3912 42.3961 23.6442 42.4792 22.8571H43.3233C44.53 22.8572 45.714 22.5765 46.7491 22.0451C47.7843 21.5136 48.6317 20.7513 49.2011 19.8395C49.7706 18.9276 50.0406 17.9004 49.9824 16.8674C49.9242 15.8343 49.5401 14.8342 48.8708 13.9736L39.9817 2.545C39.3738 1.76137 38.5491 1.11886 37.5811 0.674797C36.6132 0.230731 35.532 -0.00109223 34.4342 3.8689e-06H2.5C1.83696 3.8689e-06 1.20107 0.225769 0.732233 0.627632C0.263392 1.0295 0 1.57454 0 2.14286L0 22.1429C0 22.3323 0.0877974 22.514 0.244078 22.6479C0.400358 22.7819 0.61232 22.8571 0.833333 22.8571H22.5208C22.6042 23.6443 22.9625 24.3914 23.5508 25H2.5C1.83696 25 1.20107 25.2258 0.732233 25.6276C0.263392 26.0295 0 26.5745 0 27.1429L0 27.8571C0 28.4255 0.263392 28.9705 0.732233 29.3724C1.20107 29.7742 1.83696 30 2.5 30ZM37.9167 25C37.2172 24.9983 36.5418 24.7808 36.014 24.3873C35.4863 23.9939 35.1414 23.4507 35.0425 22.8571H40.7925C40.6936 23.4509 40.3485 23.9943 39.8203 24.3878C39.2922 24.7813 38.6164 24.9986 37.9167 25ZM33.3542 22.8571C33.4375 23.6443 33.7958 24.3914 34.3842 25H30.6158C31.2037 24.3912 31.5628 23.6442 31.6458 22.8571H33.3542ZM44.8883 11.4286H33.3333C33.1123 11.4286 32.9004 11.3533 32.7441 11.2194C32.5878 11.0854 32.5 10.9037 32.5 10.7143V5.71429C32.5 5.52485 32.5878 5.34317 32.7441 5.20921C32.9004 5.07526 33.1123 5 33.3333 5H39.8883L44.8883 11.4286ZM1.66667 16.4286H4.16667V17.1429C4.16667 17.7112 4.43006 18.2562 4.8989 18.6581C5.36774 19.06 6.00363 19.2857 6.66667 19.2857H12.5C13.163 19.2857 13.7989 19.06 14.2678 18.6581C14.7366 18.2562 15 17.7112 15 17.1429V16.4286H34.1667C34.3877 16.4286 34.5996 16.3533 34.7559 16.2194C34.9122 16.0854 35 15.9037 35 15.7143C35 15.5248 34.9122 15.3432 34.7559 15.2092C34.5996 15.0753 34.3877 15 34.1667 15H15V5.71429C15 5.14597 14.7366 4.60092 14.2678 4.19906C13.7989 3.7972 13.163 3.57143 12.5 3.57143H6.66667C6.00363 3.57143 5.36774 3.7972 4.8989 4.19906C4.43006 4.60092 4.16667 5.14597 4.16667 5.71429V15H1.66667V2.14286C1.66667 1.95342 1.75446 1.77174 1.91074 1.63778C2.06702 1.50383 2.27899 1.42858 2.5 1.42858H34.4342C35.2575 1.42781 36.0682 1.60168 36.794 1.9347C37.5199 2.26771 38.1383 2.74952 38.5942 3.33715L38.7767 3.57143H33.3333C32.6703 3.57143 32.0344 3.7972 31.5656 4.19906C31.0967 4.60092 30.8333 5.14597 30.8333 5.71429V10.7143C30.8333 11.2826 31.0967 11.8277 31.5656 12.2295C32.0344 12.6314 32.6703 12.8571 33.3333 12.8571H46L47.4842 14.7657C47.5442 14.8414 47.5883 14.9221 47.6417 15H38.3333C38.1123 15 37.9004 15.0753 37.7441 15.2092C37.5878 15.3432 37.5 15.5248 37.5 15.7143C37.5 15.9037 37.5878 16.0854 37.7441 16.2194C37.9004 16.3533 38.1123 16.4286 38.3333 16.4286H48.26C48.3792 17.0433 48.3409 17.673 48.1478 18.2738C47.9547 18.8746 47.6114 19.4322 47.1417 19.9079C46.6721 20.3836 46.0872 20.766 45.4279 21.0286C44.7685 21.2912 44.0504 21.4277 43.3233 21.4286H1.66667V16.4286ZM13.3333 17.1429C13.3333 17.3323 13.2455 17.514 13.0893 17.6479C12.933 17.7819 12.721 17.8571 12.5 17.8571H6.66667C6.44565 17.8571 6.23369 17.7819 6.07741 17.6479C5.92113 17.514 5.83333 17.3323 5.83333 17.1429V5.71429C5.83333 5.52485 5.92113 5.34317 6.07741 5.20921C6.23369 5.07526 6.44565 5 6.66667 5H12.5C12.721 5 12.933 5.07526 13.0893 5.20921C13.2455 5.34317 13.3333 5.52485 13.3333 5.71429V17.1429ZM24.2092 22.8571H29.9592C29.8629 23.4521 29.5188 23.9971 28.9904 24.3916C28.462 24.786 27.7849 25.0033 27.0842 25.0033C26.3834 25.0033 25.7063 24.786 25.1779 24.3916C24.6495 23.9971 24.3054 23.4521 24.2092 22.8571ZM1.66667 27.1429C1.66667 26.9534 1.75446 26.7717 1.91074 26.6378C2.06702 26.5038 2.27899 26.4286 2.5 26.4286H47.5C47.721 26.4286 47.933 26.5038 48.0893 26.6378C48.2455 26.7717 48.3333 26.9534 48.3333 27.1429V27.8571C48.3333 28.0466 48.2455 28.2283 48.0893 28.3622C47.933 28.4962 47.721 28.5714 47.5 28.5714H2.5C2.27899 28.5714 2.06702 28.4962 1.91074 28.3622C1.75446 28.2283 1.66667 28.0466 1.66667 27.8571V27.1429Z">
                                                                </path>
                                                                <path
                                                                    d="M25.8333 3.57141H20C19.337 3.57141 18.7011 3.79718 18.2322 4.19904C17.7634 4.6009 17.5 5.14595 17.5 5.71427V10.7143C17.5 11.2826 17.7634 11.8276 18.2322 12.2295C18.7011 12.6314 19.337 12.8571 20 12.8571H25.8333C26.4964 12.8571 27.1323 12.6314 27.6011 12.2295C28.0699 11.8276 28.3333 11.2826 28.3333 10.7143V5.71427C28.3333 5.14595 28.0699 4.6009 27.6011 4.19904C27.1323 3.79718 26.4964 3.57141 25.8333 3.57141ZM26.6667 10.7143C26.6667 10.9037 26.5789 11.0854 26.4226 11.2193C26.2663 11.3533 26.0543 11.4286 25.8333 11.4286H20C19.779 11.4286 19.567 11.3533 19.4107 11.2193C19.2545 11.0854 19.1667 10.9037 19.1667 10.7143V5.71427C19.1667 5.52483 19.2545 5.34315 19.4107 5.20919C19.567 5.07524 19.779 4.99998 20 4.99998H25.8333C26.0543 4.99998 26.2663 5.07524 26.4226 5.20919C26.5789 5.34315 26.6667 5.52483 26.6667 5.71427V10.7143ZM10.8333 6.42855H8.33333C8.11232 6.42855 7.90036 6.50381 7.74408 6.63776C7.5878 6.77172 7.5 6.9534 7.5 7.14284C7.5 7.33228 7.5878 7.51396 7.74408 7.64792C7.90036 7.78187 8.11232 7.85713 8.33333 7.85713H10.8333C11.0543 7.85713 11.2663 7.78187 11.4226 7.64792C11.5789 7.51396 11.6667 7.33228 11.6667 7.14284C11.6667 6.9534 11.5789 6.77172 11.4226 6.63776C11.2663 6.50381 11.0543 6.42855 10.8333 6.42855ZM10.8333 9.2857H8.33333C8.11232 9.2857 7.90036 9.36095 7.74408 9.49491C7.5878 9.62886 7.5 9.81054 7.5 9.99998C7.5 10.1894 7.5878 10.3711 7.74408 10.5051C7.90036 10.639 8.11232 10.7143 8.33333 10.7143H10.8333C11.0543 10.7143 11.2663 10.639 11.4226 10.5051C11.5789 10.3711 11.6667 10.1894 11.6667 9.99998C11.6667 9.81054 11.5789 9.62886 11.4226 9.49491C11.2663 9.36095 11.0543 9.2857 10.8333 9.2857Z">
                                                                </path>
                                                            </svg> <span>Train</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M49.2587 28.5694C47.1164 28.5694 46.1141 28.1755 44.9534 27.7193C43.9689 27.3324 42.9508 26.9323 41.3434 26.7543C40.9423 26.7107 40.5783 26.9918 40.5326 27.3842C40.5107 27.5727 40.5664 27.7619 40.6875 27.9103C40.8085 28.0587 40.9851 28.1541 41.1782 28.1755C42.5879 28.3316 43.471 28.6786 44.406 29.0462C45.5988 29.5151 46.8323 29.9998 49.2587 29.9998C49.3556 30.0009 49.4518 29.9832 49.5417 29.9478C49.6316 29.9123 49.7134 29.8598 49.7823 29.7933C49.8513 29.7268 49.906 29.6476 49.9434 29.5602C49.9808 29.4729 50 29.3792 50 29.2846C50 29.19 49.9808 29.0963 49.9434 29.009C49.906 28.9217 49.8513 28.8425 49.7823 28.776C49.7134 28.7094 49.6316 28.6569 49.5417 28.6215C49.4518 28.586 49.3556 28.5683 49.2587 28.5694ZM38.5737 27.3844C38.5281 26.9919 38.1652 26.7103 37.7628 26.7543C36.1555 26.9323 35.1374 27.3324 34.1527 27.7193C32.9922 28.1755 31.9899 28.5694 29.8476 28.5694C27.7054 28.5694 26.7032 28.1755 25.5427 27.7193C24.282 27.2238 22.8531 26.6622 20.1426 26.6622C17.4321 26.6622 16.0032 27.2238 14.7425 27.7193C13.5821 28.1755 12.5798 28.5694 10.4378 28.5694C8.29567 28.5694 7.2934 28.1755 6.13285 27.7193C4.87222 27.2238 3.44327 26.6622 0.732884 26.6622C0.538511 26.6622 0.352099 26.7376 0.214657 26.8717C0.0772143 27.0058 0 27.1878 0 27.3774C0 27.5671 0.0772143 27.7491 0.214657 27.8832C0.352099 28.0173 0.538511 28.0927 0.732884 28.0927C3.15923 28.0927 4.33764 28.5559 5.58538 29.0464C6.77815 29.5152 8.01154 30 10.4378 30C12.8638 30 14.0972 29.5153 15.2902 29.0464C16.5377 28.556 17.7161 28.0927 20.1426 28.0927C22.569 28.0927 23.7474 28.5559 24.9951 29.0464C26.188 29.5152 27.4213 30 29.8476 30C32.2738 30 33.5073 29.5153 34.7004 29.0464C35.6354 28.6789 36.5185 28.3318 37.9281 28.1757C38.0237 28.1651 38.1162 28.1363 38.2005 28.0908C38.2847 28.0453 38.3589 27.984 38.4188 27.9106C38.4788 27.8371 38.5233 27.7528 38.5499 27.6625C38.5764 27.5722 38.5845 27.4777 38.5737 27.3844Z">
                                                                </path>
                                                                <path
                                                                    d="M49.2587 25.5429C46.9743 25.5429 45.8597 25.1049 44.6796 24.6411C43.9381 24.3496 43.1814 24.0524 42.159 23.8575L49.5227 14.6371C49.64 14.4915 49.7127 14.3165 49.7323 14.1323C49.752 13.9481 49.7179 13.7622 49.6339 13.5961C49.5513 13.4294 49.4221 13.2888 49.2611 13.1907C49.1002 13.0926 48.9141 13.041 48.7243 13.0417H38.1889L34.2998 5.21255C34.0367 4.66692 33.4676 4.31434 32.8497 4.31434H16.9192L15.4371 0.850369C15.3297 0.59824 15.1481 0.382865 14.9153 0.231494C14.6825 0.080124 14.4088 -0.000438062 14.1291 1.79156e-06H9.96394C9.18224 1.79156e-06 8.54641 0.620624 8.54641 1.38351V4.31434H7.17017C6.28663 4.31434 5.56771 5.01587 5.56771 5.87824V14.8942H1.65363C1.33718 14.8942 1.03469 15.0416 0.844486 15.2885C0.654284 15.5354 0.593161 15.8599 0.681135 16.1567L2.94345 23.7897C2.31914 23.6938 1.59817 23.6357 0.732884 23.6357C0.538511 23.6357 0.352099 23.711 0.214657 23.8452C0.0772143 23.9793 0 24.1612 0 24.3509C0 24.5406 0.0772143 24.7226 0.214657 24.8567C0.352099 24.9908 0.538511 25.0662 0.732884 25.0662C3.01707 25.0662 4.13163 25.5042 5.3116 25.968C6.5692 26.4624 7.86957 26.9734 10.4379 26.9734C13.0061 26.9734 14.3065 26.4624 15.5641 25.968C16.744 25.5042 17.8585 25.0662 20.1427 25.0662C22.427 25.0662 23.5414 25.5042 24.7214 25.968C25.979 26.4624 27.2795 26.9734 29.8477 26.9734C32.4161 26.9734 33.7166 26.4624 34.9742 25.968C36.1542 25.5042 37.2688 25.0662 39.5532 25.0662C41.8375 25.0662 42.9521 25.5042 44.1322 25.968C45.3899 26.4624 46.6902 26.9734 49.2587 26.9734C49.453 26.9734 49.6394 26.8981 49.7769 26.7639C49.9143 26.6298 49.9915 26.4479 49.9915 26.2582C49.9915 26.0685 49.9143 25.8865 49.7769 25.7524C49.6394 25.6183 49.453 25.5429 49.2587 25.5429ZM10.0121 1.43059H14.097L15.3309 4.31444H10.0121V1.43059ZM39.5532 23.6358C36.9848 23.6358 35.6843 24.1468 34.4266 24.6412C33.2465 25.105 32.132 25.543 29.8476 25.543C27.5633 25.543 26.4487 25.105 25.2689 24.6412C24.0113 24.1468 22.7109 23.6358 20.1426 23.6358C17.5744 23.6358 16.2739 24.1468 15.0164 24.6412C13.8364 25.105 12.722 25.543 10.4378 25.543C8.1536 25.543 7.03904 25.105 5.85907 24.6412C5.4521 24.4813 5.04046 24.3197 4.58311 24.1741L2.25675 16.3247H8.35366C8.54804 16.3247 8.73445 16.2493 8.87189 16.1152C9.00933 15.981 9.08655 15.7991 9.08655 15.6094C9.08655 15.4197 9.00933 15.2378 8.87189 15.1037C8.73445 14.9695 8.54804 14.8942 8.35366 14.8942H7.03358V5.87824C7.03358 5.80468 7.09489 5.74484 7.17027 5.74484H32.8498C32.9025 5.74484 32.9512 5.77495 32.9773 5.82898L36.5603 13.0417H32.441C31.946 13.0416 31.468 13.2182 31.0971 13.5382L29.6847 14.7563C29.5817 14.8452 29.4489 14.8942 29.3114 14.8942H11.7636C11.5693 14.8942 11.3829 14.9695 11.2454 15.1037C11.108 15.2378 11.0308 15.4197 11.0308 15.6094C11.0308 15.7991 11.108 15.981 11.2454 16.1152C11.3829 16.2493 11.5693 16.3247 11.7636 16.3247H29.3114C29.807 16.3247 30.2842 16.1484 30.6554 15.8282L32.0677 14.6101C32.1707 14.5212 32.3035 14.4722 32.441 14.4722H47.7962L40.4596 23.6588C40.1577 23.6431 39.8555 23.6354 39.5532 23.6358Z">
                                                                </path>
                                                                <path
                                                                    d="M12.4227 7.25165H9.94664C9.32545 7.25165 8.82007 7.74487 8.82007 8.3511V10.5679C8.82007 11.1741 9.32545 11.6673 9.94664 11.6673H12.4227C13.0439 11.6673 13.5492 11.1741 13.5492 10.5679V8.3511C13.5492 7.74487 13.0439 7.25165 12.4227 7.25165ZM12.0835 10.2368H10.2858V8.68204H12.0835V10.2368ZM18.4565 7.25165H15.9805C15.3593 7.25165 14.8539 7.74487 14.8539 8.3511V10.5679C14.854 11.1741 15.3593 11.6673 15.9805 11.6673H18.4565C19.0777 11.6673 19.583 11.1741 19.583 10.5679V8.3511C19.583 7.74487 19.0777 7.25165 18.4565 7.25165ZM18.1173 10.2368H16.3197V8.68204H18.1173V10.2368ZM24.4904 7.25165H22.0143C21.3931 7.25165 20.8878 7.74487 20.8878 8.3511V10.5679C20.8878 11.1741 21.3931 11.6673 22.0143 11.6673H24.4904C25.1116 11.6673 25.6168 11.1741 25.6168 10.5679V8.3511C25.6168 7.74487 25.1116 7.25165 24.4904 7.25165ZM24.1512 10.2368H22.3535V8.68204H24.1512V10.2368ZM32.6201 10.3663L31.666 7.8778C31.595 7.69428 31.4686 7.53614 31.3035 7.42433C31.1383 7.31253 30.9423 7.25234 30.7413 7.25174H28.0481C27.4269 7.25174 26.9215 7.74496 26.9215 8.3512V10.568C26.9216 11.1741 27.427 11.6673 28.0481 11.6673H31.6955C31.855 11.6673 32.0121 11.6297 32.1534 11.5576C32.2947 11.4854 32.416 11.3809 32.5068 11.2531C32.5977 11.1252 32.6555 10.9777 32.6752 10.8233C32.695 10.6688 32.6761 10.512 32.6201 10.3663ZM28.3873 10.2368V8.68204H30.4095L31.0056 10.2368H28.3873Z">
                                                                </path>
                                                            </svg> <span>Boat</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M39.1667 22.1034C38.6722 22.1034 38.1889 22.2423 37.7777 22.5025C37.3666 22.7627 37.0462 23.1326 36.857 23.5653C36.6677 23.9981 36.6182 24.4742 36.7147 24.9336C36.8112 25.393 37.0493 25.815 37.3989 26.1462C37.7485 26.4774 38.194 26.7029 38.6789 26.7943C39.1639 26.8857 39.6666 26.8388 40.1234 26.6595C40.5802 26.4803 40.9706 26.1768 41.2453 25.7873C41.52 25.3979 41.6667 24.94 41.6667 24.4716C41.666 23.8437 41.4024 23.2417 40.9337 22.7977C40.465 22.3537 39.8295 22.104 39.1667 22.1034ZM39.1667 25.261C39.0018 25.261 38.8407 25.2147 38.7037 25.128C38.5667 25.0412 38.4598 24.9179 38.3968 24.7737C38.3337 24.6294 38.3172 24.4707 38.3493 24.3176C38.3815 24.1645 38.4609 24.0238 38.5774 23.9134C38.694 23.803 38.8424 23.7278 39.0041 23.6974C39.1657 23.6669 39.3333 23.6825 39.4856 23.7423C39.6378 23.802 39.768 23.9032 39.8596 24.033C39.9511 24.1628 40 24.3155 40 24.4716C39.9998 24.6809 39.9119 24.8816 39.7557 25.0296C39.5994 25.1776 39.3876 25.2608 39.1667 25.261ZM46.7558 12.5097L43.155 11.2309L39.9083 2.61925C39.6181 1.85331 39.0855 1.19081 38.3833 0.722079C37.681 0.253345 36.8432 0.00119249 35.9842 0H4.16667C3.062 0.00125346 2.00296 0.417503 1.22185 1.15744C0.440735 1.89738 0.00132321 2.9006 0 3.94703V22.8928C0.000661846 23.5207 0.264267 24.1227 0.732964 24.5667C1.20166 25.0107 1.83716 25.2604 2.5 25.261H4.23333C4.43131 26.5762 5.12354 27.7796 6.18289 28.6501C7.24223 29.5207 8.59758 30 10 30C11.4024 30 12.7578 29.5207 13.8171 28.6501C14.8765 27.7796 15.5687 26.5762 15.7667 25.261H33.4C33.598 26.5762 34.2902 27.7796 35.3496 28.6501C36.4089 29.5207 37.7642 30 39.1667 30C40.5691 30 41.9244 29.5207 42.9838 28.6501C44.0431 27.7796 44.7354 26.5762 44.9333 25.261H47.5C48.1628 25.2604 48.7983 25.0107 49.267 24.5667C49.7357 24.1227 49.9993 23.5207 50 22.8928V16.9446C49.9966 15.9812 49.6847 15.0415 49.1054 14.2496C48.5262 13.4577 47.7069 12.851 46.7558 12.5097ZM41.3167 11.0517H31.6667V4.73644H38.9367L41.3167 11.0517ZM10 28.4186C9.17591 28.4186 8.37033 28.1871 7.68512 27.7534C6.99992 27.3197 6.46587 26.7033 6.1505 25.9821C5.83514 25.2608 5.75262 24.4672 5.91339 23.7016C6.07417 22.9359 6.471 22.2326 7.05372 21.6806C7.63644 21.1286 8.37887 20.7527 9.18712 20.6004C9.99538 20.4481 10.8332 20.5263 11.5945 20.825C12.3559 21.1238 13.0066 21.6297 13.4645 22.2787C13.9223 22.9278 14.1667 23.6909 14.1667 24.4716C14.1653 25.518 13.7259 26.5212 12.9448 27.2612C12.1637 28.0011 11.1047 28.4174 10 28.4186ZM39.1667 28.4186C38.3426 28.4186 37.537 28.1871 36.8518 27.7534C36.1666 27.3197 35.6325 26.7033 35.3172 25.9821C35.0018 25.2608 34.9193 24.4672 35.0801 23.7016C35.2408 22.9359 35.6377 22.2326 36.2204 21.6806C36.8031 21.1286 37.5455 20.7527 38.3538 20.6004C39.162 20.4481 39.9998 20.5263 40.7612 20.825C41.5225 21.1238 42.1733 21.6297 42.6311 22.2787C43.089 22.9278 43.3333 23.6909 43.3333 24.4716C43.332 25.518 42.8926 26.5212 42.1115 27.2612C41.3304 28.0011 40.2713 28.4174 39.1667 28.4186ZM48.3333 22.8928C48.3331 23.1021 48.2452 23.3028 48.089 23.4507C47.9328 23.5987 47.7209 23.682 47.5 23.6822H44.9333C44.7354 22.367 44.0431 21.1636 42.9838 20.2931C41.9244 19.4225 40.5691 18.9432 39.1667 18.9432C37.7642 18.9432 36.4089 19.4225 35.3496 20.2931C34.2902 21.1636 33.598 22.367 33.4 23.6822H15.7667C15.5687 22.367 14.8765 21.1636 13.8171 20.2931C12.7578 19.4225 11.4024 18.9432 10 18.9432C8.59758 18.9432 7.24223 19.4225 6.18289 20.2931C5.12354 21.1636 4.43131 22.367 4.23333 23.6822H2.5C2.27905 23.682 2.06722 23.5987 1.91099 23.4507C1.75476 23.3028 1.66689 23.1021 1.66667 22.8928V3.94703C1.66733 3.31913 1.93093 2.71713 2.39963 2.27314C2.86833 1.82915 3.50383 1.57944 4.16667 1.57881H35.9842C36.4996 1.57954 37.0022 1.73086 37.4235 2.01213C37.8448 2.2934 38.1643 2.69094 38.3383 3.15052L38.3417 3.15763H31.6667C31.2248 3.15804 30.8011 3.32452 30.4886 3.62051C30.1762 3.9165 30.0004 4.31784 30 4.73644V11.0517C30.0004 11.4703 30.1762 11.8716 30.4886 12.1676C30.8011 12.4636 31.2248 12.6301 31.6667 12.6305H42.3483L46.1708 13.9883C46.8048 14.2158 47.3509 14.6203 47.737 15.1481C48.1232 15.676 48.3311 16.3024 48.3333 16.9446V22.8928ZM10 22.1034C9.50555 22.1034 9.0222 22.2423 8.61107 22.5025C8.19995 22.7627 7.87952 23.1326 7.6903 23.5653C7.50108 23.9981 7.45157 24.4742 7.54804 24.9336C7.6445 25.393 7.8826 25.815 8.23223 26.1462C8.58186 26.4774 9.02732 26.7029 9.51227 26.7943C9.99723 26.8857 10.4999 26.8388 10.9567 26.6595C11.4135 26.4803 11.804 26.1768 12.0787 25.7873C12.3534 25.3979 12.5 24.94 12.5 24.4716C12.4993 23.8437 12.2357 23.2417 11.767 22.7977C11.2983 22.3537 10.6628 22.104 10 22.1034ZM10 25.261C9.83518 25.261 9.67407 25.2147 9.53702 25.128C9.39998 25.0412 9.29317 24.9179 9.2301 24.7737C9.16703 24.6294 9.15052 24.4707 9.18268 24.3176C9.21483 24.1645 9.2942 24.0238 9.41074 23.9134C9.52729 23.803 9.67577 23.7278 9.83742 23.6974C9.99908 23.6669 10.1666 23.6825 10.3189 23.7423C10.4712 23.802 10.6013 23.9032 10.6929 24.033C10.7845 24.1628 10.8333 24.3155 10.8333 24.4716C10.8331 24.6809 10.7452 24.8816 10.589 25.0296C10.4328 25.1776 10.2209 25.2608 10 25.261ZM35 15.7881C35 15.9975 34.9122 16.1983 34.7559 16.3463C34.5996 16.4944 34.3877 16.5775 34.1667 16.5775H30.8333C30.6123 16.5775 30.4004 16.4944 30.2441 16.3463C30.0878 16.1983 30 15.9975 30 15.7881C30 15.5788 30.0878 15.378 30.2441 15.2299C30.4004 15.0819 30.6123 14.9987 30.8333 14.9987H34.1667C34.3877 14.9987 34.5996 15.0819 34.7559 15.2299C34.9122 15.378 35 15.5788 35 15.7881ZM26.6667 3.15763H5C4.55811 3.15804 4.13444 3.32452 3.82198 3.62051C3.50951 3.9165 3.33377 4.31784 3.33333 4.73644V11.0517C3.33377 11.4703 3.50951 11.8716 3.82198 12.1676C4.13444 12.4636 4.55811 12.6301 5 12.6305H26.6667C27.1086 12.6301 27.5322 12.4636 27.8447 12.1676C28.1572 11.8716 28.3329 11.4703 28.3333 11.0517V4.73644C28.3329 4.31784 28.1572 3.9165 27.8447 3.62051C27.5322 3.32452 27.1086 3.15804 26.6667 3.15763ZM5 4.73644H15V11.0517H5V4.73644ZM16.6667 11.0517V4.73644H26.6667L26.6683 11.0517H16.6667Z">
                                                                </path>
                                                            </svg> <span>Bus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="details-btn">
                                                    <a href="transport-details.php" class="primary-btn1">View
                                                        Details</a>
                                                </div>
                                                <div class="review-area">
                                                    <ul class="rating">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(214 reviewes)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="transport-card">
                                        <a href="transport-details.php" class="transport-img">
                                            <img src="assets/img/innerpage/mount-averest.jpg" alt>
                                            <span>250km</span>
                                        </a>
                                        <div class="transport-content">
                                            <h4><a href="transport-details.php">Travel to Mt Everest from Pokhara.</a>
                                            </h4>
                                            <div class="transport-type">
                                                <h6>Available Transport:</h6>
                                                <div class="row g-2">
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M44.125 12.4167L41.4351 11.9392C41.092 11.8787 40.7659 11.7373 40.4806 11.5252C40.1953 11.3131 39.9579 11.0358 39.7859 10.7134L36.0711 3.78001C35.4551 2.63294 34.5663 1.67947 33.4945 1.0158C32.4227 0.352133 31.2057 0.00174827 29.9664 0H16.9086C15.6693 0.00166413 14.4524 0.351923 13.3806 1.01544C12.3088 1.67896 11.42 2.63226 10.8039 3.77918L7.01484 10.8517C6.85724 11.1442 6.64605 11.3999 6.39384 11.6035C6.14164 11.807 5.8536 11.9544 5.54687 12.0367L2.95781 12.7267C2.31318 12.8988 1.72057 13.244 1.23634 13.7295C0.752121 14.2149 0.3924 14.8244 0.191406 15.5001C0.182812 15.5217 0.182031 15.5476 0.175 15.5701C0.0618921 15.9585 0.0029285 16.3625 0 16.7692L0 22.5001C0.00124051 23.6047 0.413189 24.6638 1.14548 25.4449C1.87778 26.226 2.87063 26.6654 3.90625 26.6668H6.78515C7.22701 27.6638 7.92531 28.5065 8.79876 29.0966C9.6722 29.6867 10.6848 30 11.7187 30C12.7527 30 13.7653 29.6867 14.6387 29.0966C15.5122 28.5065 16.2105 27.6638 16.6523 26.6668H33.3476C33.7895 27.6638 34.4878 28.5065 35.3612 29.0966C36.2347 29.6867 37.2473 30 38.2812 30C39.3151 30 40.3278 29.6867 41.2012 29.0966C42.0747 28.5065 42.773 27.6638 43.2148 26.6668H46.0937C47.1293 26.6654 48.1222 26.226 48.8545 25.4449C49.5868 24.6638 49.9987 23.6047 50 22.5001V19.8142C50.0041 18.0378 49.4152 16.3177 48.3387 14.9623C47.2622 13.6068 45.7684 12.7044 44.125 12.4167ZM47.5734 16.6667C47.8824 17.1805 48.1136 17.7429 48.2586 18.3334H47.6562C47.0364 18.3332 46.4418 18.0721 46.0015 17.6067C45.7541 17.3407 45.5647 17.0198 45.4469 16.6667H47.5734ZM1.57031 16.6667H2.90547L2.51484 18.3334H1.5625V16.7692C1.5625 16.7342 1.56953 16.7009 1.57031 16.6667ZM11.7187 28.3334C10.9462 28.3334 10.1909 28.0891 9.54855 27.6312C8.90617 27.1734 8.4055 26.5226 8.10984 25.7613C7.81419 24.9999 7.73683 24.1621 7.88755 23.3539C8.03828 22.5456 8.41031 21.8032 8.95661 21.2205C9.50291 20.6377 10.1989 20.2409 10.9567 20.0801C11.7144 19.9194 12.4998 20.0019 13.2136 20.3172C13.9274 20.6326 14.5374 21.1667 14.9667 21.8519C15.3959 22.5371 15.625 23.3427 15.625 24.1668C15.6238 25.2714 15.2118 26.3305 14.4795 27.1116C13.7472 27.8927 12.7544 28.3321 11.7187 28.3334ZM38.2812 28.3334C37.5086 28.3334 36.7534 28.0891 36.111 27.6312C35.4687 27.1734 34.968 26.5226 34.6723 25.7613C34.3767 24.9999 34.2993 24.1621 34.45 23.3539C34.6008 22.5456 34.9728 21.8032 35.5191 21.2205C36.0654 20.6377 36.7614 20.2409 37.5192 20.0801C38.2769 19.9194 39.0623 20.0019 39.7761 20.3172C40.4899 20.6326 41.0999 21.1667 41.5292 21.8519C41.9584 22.5371 42.1875 23.3427 42.1875 24.1668C42.1862 25.2714 41.7743 26.3305 41.042 27.1116C40.3097 27.8927 39.3169 28.3321 38.2812 28.3334ZM46.0937 25.0001H43.6875C43.8063 24.1693 43.7553 23.3209 43.5382 22.5131C43.3211 21.7052 42.9429 20.957 42.4295 20.3195C41.9161 19.682 41.2796 19.1704 40.5636 18.8197C39.8477 18.4689 39.0691 18.2873 38.2812 18.2873C37.4934 18.2873 36.7148 18.4689 35.9988 18.8197C35.2829 19.1704 34.6464 19.682 34.133 20.3195C33.6196 20.957 33.2414 21.7052 33.0243 22.5131C32.8071 23.3209 32.7562 24.1693 32.875 25.0001H17.125C17.2438 24.1693 17.1928 23.3209 16.9757 22.5131C16.7586 21.7052 16.3804 20.957 15.867 20.3195C15.3536 19.682 14.7171 19.1704 14.0011 18.8197C13.2852 18.4689 12.5066 18.2873 11.7187 18.2873C10.9309 18.2873 10.1523 18.4689 9.43634 18.8197C8.72037 19.1704 8.0839 19.682 7.5705 20.3195C7.0571 20.957 6.6789 21.7052 6.46177 22.5131C6.24464 23.3209 6.19372 24.1693 6.3125 25.0001H3.90625C3.28465 25.0001 2.68851 24.7367 2.24897 24.2679C1.80943 23.799 1.5625 23.1631 1.5625 22.5001V20.0001H3.125C3.29916 20.0001 3.46833 19.938 3.60563 19.8237C3.74293 19.7094 3.84049 19.5494 3.88281 19.3692L4.66406 16.0359C4.69292 15.913 4.69513 15.7847 4.67054 15.6608C4.64595 15.5369 4.59519 15.4206 4.52213 15.3207C4.44907 15.2208 4.35563 15.1401 4.24891 15.0845C4.14219 15.0289 4.025 15.0001 3.90625 15.0001H2.25703C2.55487 14.6811 2.92831 14.4544 3.3375 14.3442L5.92734 13.6534C6.43804 13.5158 6.91757 13.2701 7.3374 12.9308C7.75723 12.5915 8.10877 12.1656 8.37109 11.6784L12.1602 4.60585C12.6395 3.71385 13.3308 2.97245 14.1645 2.45642C14.9982 1.9404 15.9447 1.66799 16.9086 1.66667H29.9664C30.9303 1.66799 31.8768 1.9404 32.7105 2.45642C33.5441 2.97245 34.2355 3.71385 34.7148 4.60585L38.4289 11.5392C38.7154 12.0769 39.1109 12.5395 39.5866 12.8932C40.0622 13.2469 40.606 13.4827 41.1781 13.5834L43.8679 14.0617C44.6545 14.2005 45.4032 14.5208 46.0617 15.0001H44.5312C44.324 15.0001 44.1253 15.0879 43.9788 15.2441C43.8323 15.4004 43.75 15.6124 43.75 15.8334C43.7495 16.3807 43.8502 16.9228 44.0463 17.4286C44.2424 17.9343 44.5301 18.3939 44.8929 18.7809C45.2558 19.1679 45.6866 19.4748 46.1608 19.684C46.6349 19.8932 47.1431 20.0006 47.6562 20.0001H48.4375V22.5001C48.4375 23.1631 48.1905 23.799 47.751 24.2679C47.3115 24.7367 46.7153 25.0001 46.0937 25.0001Z">
                                                                </path>
                                                                <path
                                                                    d="M35.5141 7.90419C35.4073 7.71467 35.2344 7.57812 35.0333 7.5246C34.8322 7.47107 34.6195 7.50495 34.4418 7.61877C34.2641 7.73259 34.1361 7.91704 34.0859 8.13153C34.0357 8.34603 34.0675 8.573 34.1742 8.76252L35.3391 10.8334H25.7812V4.16667H30.2617C30.6663 4.16785 31.0638 4.28019 31.4159 4.49286C31.768 4.70552 32.0628 5.01134 32.2719 5.38084L32.7672 6.26251C32.8739 6.45203 33.0468 6.58858 33.2479 6.6421C33.449 6.69563 33.6618 6.66175 33.8394 6.54793C34.0171 6.43411 34.1451 6.24966 34.1953 6.03517C34.2455 5.82067 34.2137 5.5937 34.107 5.40418L33.6109 4.52251C33.2625 3.90693 32.7714 3.39746 32.1847 3.04321C31.5981 2.68897 30.9358 2.50188 30.2617 2.5H25C24.7928 2.5 24.5941 2.5878 24.4476 2.74408C24.3011 2.90036 24.2187 3.11232 24.2187 3.33334V11.6667C24.2187 11.8877 24.3011 12.0997 24.4476 12.256C24.5941 12.4122 24.7928 12.5 25 12.5H36.7187C36.857 12.5 36.9928 12.4608 37.1123 12.3865C37.2317 12.3122 37.3305 12.2054 37.3986 12.077C37.4667 11.9486 37.5016 11.8033 37.4998 11.6558C37.498 11.5083 37.4595 11.364 37.3883 11.2375L35.5141 7.90419ZM21.875 2.5H16.6133C15.9392 2.50188 15.2769 2.68897 14.6903 3.04321C14.1036 3.39746 13.6125 3.90693 13.2641 4.52251L9.48672 11.2375C9.41551 11.364 9.37703 11.5083 9.37522 11.6558C9.3734 11.8033 9.40832 11.9486 9.47641 12.077C9.54449 12.2054 9.6433 12.3122 9.76274 12.3865C9.88218 12.4608 10.018 12.5 10.1563 12.5H21.875C22.0822 12.5 22.2809 12.4122 22.4274 12.256C22.5739 12.0997 22.6562 11.8877 22.6562 11.6667V3.33334C22.6562 3.11232 22.5739 2.90036 22.4274 2.74408C22.2809 2.5878 22.0822 2.5 21.875 2.5ZM21.0937 10.8334H11.5359L14.6031 5.38084C14.8122 5.01134 15.107 4.70552 15.4591 4.49286C15.8112 4.28019 16.2087 4.16785 16.6133 4.16667H21.0937V10.8334ZM26.5625 13.3334H25C24.7928 13.3334 24.5941 13.4212 24.4476 13.5775C24.3011 13.7337 24.2187 13.9457 24.2187 14.1667C24.2187 14.3877 24.3011 14.5997 24.4476 14.756C24.5941 14.9122 24.7928 15 25 15H26.5625C26.7697 15 26.9684 14.9122 27.1149 14.756C27.2614 14.5997 27.3437 14.3877 27.3437 14.1667C27.3437 13.9457 27.2614 13.7337 27.1149 13.5775C26.9684 13.4212 26.7697 13.3334 26.5625 13.3334ZM11.7188 13.3334H10.1563C9.94905 13.3334 9.75034 13.4212 9.60382 13.5775C9.45731 13.7337 9.375 13.9457 9.375 14.1667C9.375 14.3877 9.45731 14.5997 9.60382 14.756C9.75034 14.9122 9.94905 15 10.1563 15H11.7188C11.926 15 12.1247 14.9122 12.2712 14.756C12.4177 14.5997 12.5 14.3877 12.5 14.1667C12.5 13.9457 12.4177 13.7337 12.2712 13.5775C12.1247 13.4212 11.926 13.3334 11.7188 13.3334ZM38.2812 21.6667C37.8177 21.6667 37.3645 21.8134 36.9791 22.0881C36.5937 22.3628 36.2933 22.7532 36.1159 23.21C35.9385 23.6669 35.8921 24.1695 35.9825 24.6545C36.073 25.1394 36.2962 25.5849 36.624 25.9345C36.9517 26.2841 37.3694 26.5223 37.824 26.6187C38.2786 26.7152 38.7499 26.6657 39.1781 26.4765C39.6064 26.2872 39.9725 25.9668 40.23 25.5557C40.4875 25.1446 40.625 24.6612 40.625 24.1667C40.625 23.5037 40.3781 22.8678 39.9385 22.399C39.499 21.9301 38.9028 21.6667 38.2812 21.6667ZM38.2812 25.0001C38.1267 25.0001 37.9757 24.9512 37.8472 24.8596C37.7187 24.7681 37.6186 24.6379 37.5595 24.4856C37.5003 24.3334 37.4849 24.1658 37.515 24.0042C37.5451 23.8425 37.6195 23.694 37.7288 23.5775C37.8381 23.4609 37.9773 23.3816 38.1288 23.3494C38.2804 23.3173 38.4375 23.3338 38.5802 23.3968C38.723 23.4599 38.845 23.5667 38.9308 23.7038C39.0167 23.8408 39.0625 24.0019 39.0625 24.1667C39.0625 24.3878 38.9802 24.5997 38.8337 24.756C38.6872 24.9123 38.4884 25.0001 38.2812 25.0001ZM11.7188 21.6667C11.2552 21.6667 10.8021 21.8134 10.4166 22.0881C10.0312 22.3628 9.7308 22.7532 9.55341 23.21C9.37602 23.6669 9.3296 24.1695 9.42004 24.6545C9.51047 25.1394 9.73369 25.5849 10.0615 25.9345C10.3892 26.2841 10.8069 26.5223 11.2615 26.6187C11.7162 26.7152 12.1874 26.6657 12.6157 26.4765C13.0439 26.2872 13.41 25.9668 13.6675 25.5557C13.925 25.1446 14.0625 24.6612 14.0625 24.1667C14.0625 23.5037 13.8156 22.8678 13.376 22.399C12.9365 21.9301 12.3404 21.6667 11.7188 21.6667ZM11.7188 25.0001C11.5642 25.0001 11.4132 24.9512 11.2847 24.8596C11.1562 24.7681 11.0561 24.6379 10.997 24.4856C10.9378 24.3334 10.9224 24.1658 10.9525 24.0042C10.9827 23.8425 11.0571 23.694 11.1663 23.5775C11.2756 23.4609 11.4148 23.3816 11.5663 23.3494C11.7179 23.3173 11.875 23.3338 12.0177 23.3968C12.1605 23.4599 12.2825 23.5667 12.3683 23.7038C12.4542 23.8408 12.5 24.0019 12.5 24.1667C12.5 24.3878 12.4177 24.5997 12.2712 24.756C12.1247 24.9123 11.926 25.0001 11.7188 25.0001Z">
                                                                </path>
                                                            </svg> <span>Car</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M2.5 30H47.5C48.163 30 48.7989 29.7742 49.2678 29.3724C49.7366 28.9705 50 28.4255 50 27.8571V27.1429C50 26.5745 49.7366 26.0295 49.2678 25.6276C48.7989 25.2258 48.163 25 47.5 25H41.4492C42.037 24.3912 42.3961 23.6442 42.4792 22.8571H43.3233C44.53 22.8572 45.714 22.5765 46.7491 22.0451C47.7843 21.5136 48.6317 20.7513 49.2011 19.8395C49.7706 18.9276 50.0406 17.9004 49.9824 16.8674C49.9242 15.8343 49.5401 14.8342 48.8708 13.9736L39.9817 2.545C39.3738 1.76137 38.5491 1.11886 37.5811 0.674797C36.6132 0.230731 35.532 -0.00109223 34.4342 3.8689e-06H2.5C1.83696 3.8689e-06 1.20107 0.225769 0.732233 0.627632C0.263392 1.0295 0 1.57454 0 2.14286L0 22.1429C0 22.3323 0.0877974 22.514 0.244078 22.6479C0.400358 22.7819 0.61232 22.8571 0.833333 22.8571H22.5208C22.6042 23.6443 22.9625 24.3914 23.5508 25H2.5C1.83696 25 1.20107 25.2258 0.732233 25.6276C0.263392 26.0295 0 26.5745 0 27.1429L0 27.8571C0 28.4255 0.263392 28.9705 0.732233 29.3724C1.20107 29.7742 1.83696 30 2.5 30ZM37.9167 25C37.2172 24.9983 36.5418 24.7808 36.014 24.3873C35.4863 23.9939 35.1414 23.4507 35.0425 22.8571H40.7925C40.6936 23.4509 40.3485 23.9943 39.8203 24.3878C39.2922 24.7813 38.6164 24.9986 37.9167 25ZM33.3542 22.8571C33.4375 23.6443 33.7958 24.3914 34.3842 25H30.6158C31.2037 24.3912 31.5628 23.6442 31.6458 22.8571H33.3542ZM44.8883 11.4286H33.3333C33.1123 11.4286 32.9004 11.3533 32.7441 11.2194C32.5878 11.0854 32.5 10.9037 32.5 10.7143V5.71429C32.5 5.52485 32.5878 5.34317 32.7441 5.20921C32.9004 5.07526 33.1123 5 33.3333 5H39.8883L44.8883 11.4286ZM1.66667 16.4286H4.16667V17.1429C4.16667 17.7112 4.43006 18.2562 4.8989 18.6581C5.36774 19.06 6.00363 19.2857 6.66667 19.2857H12.5C13.163 19.2857 13.7989 19.06 14.2678 18.6581C14.7366 18.2562 15 17.7112 15 17.1429V16.4286H34.1667C34.3877 16.4286 34.5996 16.3533 34.7559 16.2194C34.9122 16.0854 35 15.9037 35 15.7143C35 15.5248 34.9122 15.3432 34.7559 15.2092C34.5996 15.0753 34.3877 15 34.1667 15H15V5.71429C15 5.14597 14.7366 4.60092 14.2678 4.19906C13.7989 3.7972 13.163 3.57143 12.5 3.57143H6.66667C6.00363 3.57143 5.36774 3.7972 4.8989 4.19906C4.43006 4.60092 4.16667 5.14597 4.16667 5.71429V15H1.66667V2.14286C1.66667 1.95342 1.75446 1.77174 1.91074 1.63778C2.06702 1.50383 2.27899 1.42858 2.5 1.42858H34.4342C35.2575 1.42781 36.0682 1.60168 36.794 1.9347C37.5199 2.26771 38.1383 2.74952 38.5942 3.33715L38.7767 3.57143H33.3333C32.6703 3.57143 32.0344 3.7972 31.5656 4.19906C31.0967 4.60092 30.8333 5.14597 30.8333 5.71429V10.7143C30.8333 11.2826 31.0967 11.8277 31.5656 12.2295C32.0344 12.6314 32.6703 12.8571 33.3333 12.8571H46L47.4842 14.7657C47.5442 14.8414 47.5883 14.9221 47.6417 15H38.3333C38.1123 15 37.9004 15.0753 37.7441 15.2092C37.5878 15.3432 37.5 15.5248 37.5 15.7143C37.5 15.9037 37.5878 16.0854 37.7441 16.2194C37.9004 16.3533 38.1123 16.4286 38.3333 16.4286H48.26C48.3792 17.0433 48.3409 17.673 48.1478 18.2738C47.9547 18.8746 47.6114 19.4322 47.1417 19.9079C46.6721 20.3836 46.0872 20.766 45.4279 21.0286C44.7685 21.2912 44.0504 21.4277 43.3233 21.4286H1.66667V16.4286ZM13.3333 17.1429C13.3333 17.3323 13.2455 17.514 13.0893 17.6479C12.933 17.7819 12.721 17.8571 12.5 17.8571H6.66667C6.44565 17.8571 6.23369 17.7819 6.07741 17.6479C5.92113 17.514 5.83333 17.3323 5.83333 17.1429V5.71429C5.83333 5.52485 5.92113 5.34317 6.07741 5.20921C6.23369 5.07526 6.44565 5 6.66667 5H12.5C12.721 5 12.933 5.07526 13.0893 5.20921C13.2455 5.34317 13.3333 5.52485 13.3333 5.71429V17.1429ZM24.2092 22.8571H29.9592C29.8629 23.4521 29.5188 23.9971 28.9904 24.3916C28.462 24.786 27.7849 25.0033 27.0842 25.0033C26.3834 25.0033 25.7063 24.786 25.1779 24.3916C24.6495 23.9971 24.3054 23.4521 24.2092 22.8571ZM1.66667 27.1429C1.66667 26.9534 1.75446 26.7717 1.91074 26.6378C2.06702 26.5038 2.27899 26.4286 2.5 26.4286H47.5C47.721 26.4286 47.933 26.5038 48.0893 26.6378C48.2455 26.7717 48.3333 26.9534 48.3333 27.1429V27.8571C48.3333 28.0466 48.2455 28.2283 48.0893 28.3622C47.933 28.4962 47.721 28.5714 47.5 28.5714H2.5C2.27899 28.5714 2.06702 28.4962 1.91074 28.3622C1.75446 28.2283 1.66667 28.0466 1.66667 27.8571V27.1429Z">
                                                                </path>
                                                                <path
                                                                    d="M25.8333 3.57141H20C19.337 3.57141 18.7011 3.79718 18.2322 4.19904C17.7634 4.6009 17.5 5.14595 17.5 5.71427V10.7143C17.5 11.2826 17.7634 11.8276 18.2322 12.2295C18.7011 12.6314 19.337 12.8571 20 12.8571H25.8333C26.4964 12.8571 27.1323 12.6314 27.6011 12.2295C28.0699 11.8276 28.3333 11.2826 28.3333 10.7143V5.71427C28.3333 5.14595 28.0699 4.6009 27.6011 4.19904C27.1323 3.79718 26.4964 3.57141 25.8333 3.57141ZM26.6667 10.7143C26.6667 10.9037 26.5789 11.0854 26.4226 11.2193C26.2663 11.3533 26.0543 11.4286 25.8333 11.4286H20C19.779 11.4286 19.567 11.3533 19.4107 11.2193C19.2545 11.0854 19.1667 10.9037 19.1667 10.7143V5.71427C19.1667 5.52483 19.2545 5.34315 19.4107 5.20919C19.567 5.07524 19.779 4.99998 20 4.99998H25.8333C26.0543 4.99998 26.2663 5.07524 26.4226 5.20919C26.5789 5.34315 26.6667 5.52483 26.6667 5.71427V10.7143ZM10.8333 6.42855H8.33333C8.11232 6.42855 7.90036 6.50381 7.74408 6.63776C7.5878 6.77172 7.5 6.9534 7.5 7.14284C7.5 7.33228 7.5878 7.51396 7.74408 7.64792C7.90036 7.78187 8.11232 7.85713 8.33333 7.85713H10.8333C11.0543 7.85713 11.2663 7.78187 11.4226 7.64792C11.5789 7.51396 11.6667 7.33228 11.6667 7.14284C11.6667 6.9534 11.5789 6.77172 11.4226 6.63776C11.2663 6.50381 11.0543 6.42855 10.8333 6.42855ZM10.8333 9.2857H8.33333C8.11232 9.2857 7.90036 9.36095 7.74408 9.49491C7.5878 9.62886 7.5 9.81054 7.5 9.99998C7.5 10.1894 7.5878 10.3711 7.74408 10.5051C7.90036 10.639 8.11232 10.7143 8.33333 10.7143H10.8333C11.0543 10.7143 11.2663 10.639 11.4226 10.5051C11.5789 10.3711 11.6667 10.1894 11.6667 9.99998C11.6667 9.81054 11.5789 9.62886 11.4226 9.49491C11.2663 9.36095 11.0543 9.2857 10.8333 9.2857Z">
                                                                </path>
                                                            </svg> <span>Train</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M49.2587 28.5694C47.1164 28.5694 46.1141 28.1755 44.9534 27.7193C43.9689 27.3324 42.9508 26.9323 41.3434 26.7543C40.9423 26.7107 40.5783 26.9918 40.5326 27.3842C40.5107 27.5727 40.5664 27.7619 40.6875 27.9103C40.8085 28.0587 40.9851 28.1541 41.1782 28.1755C42.5879 28.3316 43.471 28.6786 44.406 29.0462C45.5988 29.5151 46.8323 29.9998 49.2587 29.9998C49.3556 30.0009 49.4518 29.9832 49.5417 29.9478C49.6316 29.9123 49.7134 29.8598 49.7823 29.7933C49.8513 29.7268 49.906 29.6476 49.9434 29.5602C49.9808 29.4729 50 29.3792 50 29.2846C50 29.19 49.9808 29.0963 49.9434 29.009C49.906 28.9217 49.8513 28.8425 49.7823 28.776C49.7134 28.7094 49.6316 28.6569 49.5417 28.6215C49.4518 28.586 49.3556 28.5683 49.2587 28.5694ZM38.5737 27.3844C38.5281 26.9919 38.1652 26.7103 37.7628 26.7543C36.1555 26.9323 35.1374 27.3324 34.1527 27.7193C32.9922 28.1755 31.9899 28.5694 29.8476 28.5694C27.7054 28.5694 26.7032 28.1755 25.5427 27.7193C24.282 27.2238 22.8531 26.6622 20.1426 26.6622C17.4321 26.6622 16.0032 27.2238 14.7425 27.7193C13.5821 28.1755 12.5798 28.5694 10.4378 28.5694C8.29567 28.5694 7.2934 28.1755 6.13285 27.7193C4.87222 27.2238 3.44327 26.6622 0.732884 26.6622C0.538511 26.6622 0.352099 26.7376 0.214657 26.8717C0.0772143 27.0058 0 27.1878 0 27.3774C0 27.5671 0.0772143 27.7491 0.214657 27.8832C0.352099 28.0173 0.538511 28.0927 0.732884 28.0927C3.15923 28.0927 4.33764 28.5559 5.58538 29.0464C6.77815 29.5152 8.01154 30 10.4378 30C12.8638 30 14.0972 29.5153 15.2902 29.0464C16.5377 28.556 17.7161 28.0927 20.1426 28.0927C22.569 28.0927 23.7474 28.5559 24.9951 29.0464C26.188 29.5152 27.4213 30 29.8476 30C32.2738 30 33.5073 29.5153 34.7004 29.0464C35.6354 28.6789 36.5185 28.3318 37.9281 28.1757C38.0237 28.1651 38.1162 28.1363 38.2005 28.0908C38.2847 28.0453 38.3589 27.984 38.4188 27.9106C38.4788 27.8371 38.5233 27.7528 38.5499 27.6625C38.5764 27.5722 38.5845 27.4777 38.5737 27.3844Z">
                                                                </path>
                                                                <path
                                                                    d="M49.2587 25.5429C46.9743 25.5429 45.8597 25.1049 44.6796 24.6411C43.9381 24.3496 43.1814 24.0524 42.159 23.8575L49.5227 14.6371C49.64 14.4915 49.7127 14.3165 49.7323 14.1323C49.752 13.9481 49.7179 13.7622 49.6339 13.5961C49.5513 13.4294 49.4221 13.2888 49.2611 13.1907C49.1002 13.0926 48.9141 13.041 48.7243 13.0417H38.1889L34.2998 5.21255C34.0367 4.66692 33.4676 4.31434 32.8497 4.31434H16.9192L15.4371 0.850369C15.3297 0.59824 15.1481 0.382865 14.9153 0.231494C14.6825 0.080124 14.4088 -0.000438062 14.1291 1.79156e-06H9.96394C9.18224 1.79156e-06 8.54641 0.620624 8.54641 1.38351V4.31434H7.17017C6.28663 4.31434 5.56771 5.01587 5.56771 5.87824V14.8942H1.65363C1.33718 14.8942 1.03469 15.0416 0.844486 15.2885C0.654284 15.5354 0.593161 15.8599 0.681135 16.1567L2.94345 23.7897C2.31914 23.6938 1.59817 23.6357 0.732884 23.6357C0.538511 23.6357 0.352099 23.711 0.214657 23.8452C0.0772143 23.9793 0 24.1612 0 24.3509C0 24.5406 0.0772143 24.7226 0.214657 24.8567C0.352099 24.9908 0.538511 25.0662 0.732884 25.0662C3.01707 25.0662 4.13163 25.5042 5.3116 25.968C6.5692 26.4624 7.86957 26.9734 10.4379 26.9734C13.0061 26.9734 14.3065 26.4624 15.5641 25.968C16.744 25.5042 17.8585 25.0662 20.1427 25.0662C22.427 25.0662 23.5414 25.5042 24.7214 25.968C25.979 26.4624 27.2795 26.9734 29.8477 26.9734C32.4161 26.9734 33.7166 26.4624 34.9742 25.968C36.1542 25.5042 37.2688 25.0662 39.5532 25.0662C41.8375 25.0662 42.9521 25.5042 44.1322 25.968C45.3899 26.4624 46.6902 26.9734 49.2587 26.9734C49.453 26.9734 49.6394 26.8981 49.7769 26.7639C49.9143 26.6298 49.9915 26.4479 49.9915 26.2582C49.9915 26.0685 49.9143 25.8865 49.7769 25.7524C49.6394 25.6183 49.453 25.5429 49.2587 25.5429ZM10.0121 1.43059H14.097L15.3309 4.31444H10.0121V1.43059ZM39.5532 23.6358C36.9848 23.6358 35.6843 24.1468 34.4266 24.6412C33.2465 25.105 32.132 25.543 29.8476 25.543C27.5633 25.543 26.4487 25.105 25.2689 24.6412C24.0113 24.1468 22.7109 23.6358 20.1426 23.6358C17.5744 23.6358 16.2739 24.1468 15.0164 24.6412C13.8364 25.105 12.722 25.543 10.4378 25.543C8.1536 25.543 7.03904 25.105 5.85907 24.6412C5.4521 24.4813 5.04046 24.3197 4.58311 24.1741L2.25675 16.3247H8.35366C8.54804 16.3247 8.73445 16.2493 8.87189 16.1152C9.00933 15.981 9.08655 15.7991 9.08655 15.6094C9.08655 15.4197 9.00933 15.2378 8.87189 15.1037C8.73445 14.9695 8.54804 14.8942 8.35366 14.8942H7.03358V5.87824C7.03358 5.80468 7.09489 5.74484 7.17027 5.74484H32.8498C32.9025 5.74484 32.9512 5.77495 32.9773 5.82898L36.5603 13.0417H32.441C31.946 13.0416 31.468 13.2182 31.0971 13.5382L29.6847 14.7563C29.5817 14.8452 29.4489 14.8942 29.3114 14.8942H11.7636C11.5693 14.8942 11.3829 14.9695 11.2454 15.1037C11.108 15.2378 11.0308 15.4197 11.0308 15.6094C11.0308 15.7991 11.108 15.981 11.2454 16.1152C11.3829 16.2493 11.5693 16.3247 11.7636 16.3247H29.3114C29.807 16.3247 30.2842 16.1484 30.6554 15.8282L32.0677 14.6101C32.1707 14.5212 32.3035 14.4722 32.441 14.4722H47.7962L40.4596 23.6588C40.1577 23.6431 39.8555 23.6354 39.5532 23.6358Z">
                                                                </path>
                                                                <path
                                                                    d="M12.4227 7.25165H9.94664C9.32545 7.25165 8.82007 7.74487 8.82007 8.3511V10.5679C8.82007 11.1741 9.32545 11.6673 9.94664 11.6673H12.4227C13.0439 11.6673 13.5492 11.1741 13.5492 10.5679V8.3511C13.5492 7.74487 13.0439 7.25165 12.4227 7.25165ZM12.0835 10.2368H10.2858V8.68204H12.0835V10.2368ZM18.4565 7.25165H15.9805C15.3593 7.25165 14.8539 7.74487 14.8539 8.3511V10.5679C14.854 11.1741 15.3593 11.6673 15.9805 11.6673H18.4565C19.0777 11.6673 19.583 11.1741 19.583 10.5679V8.3511C19.583 7.74487 19.0777 7.25165 18.4565 7.25165ZM18.1173 10.2368H16.3197V8.68204H18.1173V10.2368ZM24.4904 7.25165H22.0143C21.3931 7.25165 20.8878 7.74487 20.8878 8.3511V10.5679C20.8878 11.1741 21.3931 11.6673 22.0143 11.6673H24.4904C25.1116 11.6673 25.6168 11.1741 25.6168 10.5679V8.3511C25.6168 7.74487 25.1116 7.25165 24.4904 7.25165ZM24.1512 10.2368H22.3535V8.68204H24.1512V10.2368ZM32.6201 10.3663L31.666 7.8778C31.595 7.69428 31.4686 7.53614 31.3035 7.42433C31.1383 7.31253 30.9423 7.25234 30.7413 7.25174H28.0481C27.4269 7.25174 26.9215 7.74496 26.9215 8.3512V10.568C26.9216 11.1741 27.427 11.6673 28.0481 11.6673H31.6955C31.855 11.6673 32.0121 11.6297 32.1534 11.5576C32.2947 11.4854 32.416 11.3809 32.5068 11.2531C32.5977 11.1252 32.6555 10.9777 32.6752 10.8233C32.695 10.6688 32.6761 10.512 32.6201 10.3663ZM28.3873 10.2368V8.68204H30.4095L31.0056 10.2368H28.3873Z">
                                                                </path>
                                                            </svg> <span>Boat</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M39.1667 22.1034C38.6722 22.1034 38.1889 22.2423 37.7777 22.5025C37.3666 22.7627 37.0462 23.1326 36.857 23.5653C36.6677 23.9981 36.6182 24.4742 36.7147 24.9336C36.8112 25.393 37.0493 25.815 37.3989 26.1462C37.7485 26.4774 38.194 26.7029 38.6789 26.7943C39.1639 26.8857 39.6666 26.8388 40.1234 26.6595C40.5802 26.4803 40.9706 26.1768 41.2453 25.7873C41.52 25.3979 41.6667 24.94 41.6667 24.4716C41.666 23.8437 41.4024 23.2417 40.9337 22.7977C40.465 22.3537 39.8295 22.104 39.1667 22.1034ZM39.1667 25.261C39.0018 25.261 38.8407 25.2147 38.7037 25.128C38.5667 25.0412 38.4598 24.9179 38.3968 24.7737C38.3337 24.6294 38.3172 24.4707 38.3493 24.3176C38.3815 24.1645 38.4609 24.0238 38.5774 23.9134C38.694 23.803 38.8424 23.7278 39.0041 23.6974C39.1657 23.6669 39.3333 23.6825 39.4856 23.7423C39.6378 23.802 39.768 23.9032 39.8596 24.033C39.9511 24.1628 40 24.3155 40 24.4716C39.9998 24.6809 39.9119 24.8816 39.7557 25.0296C39.5994 25.1776 39.3876 25.2608 39.1667 25.261ZM46.7558 12.5097L43.155 11.2309L39.9083 2.61925C39.6181 1.85331 39.0855 1.19081 38.3833 0.722079C37.681 0.253345 36.8432 0.00119249 35.9842 0H4.16667C3.062 0.00125346 2.00296 0.417503 1.22185 1.15744C0.440735 1.89738 0.00132321 2.9006 0 3.94703V22.8928C0.000661846 23.5207 0.264267 24.1227 0.732964 24.5667C1.20166 25.0107 1.83716 25.2604 2.5 25.261H4.23333C4.43131 26.5762 5.12354 27.7796 6.18289 28.6501C7.24223 29.5207 8.59758 30 10 30C11.4024 30 12.7578 29.5207 13.8171 28.6501C14.8765 27.7796 15.5687 26.5762 15.7667 25.261H33.4C33.598 26.5762 34.2902 27.7796 35.3496 28.6501C36.4089 29.5207 37.7642 30 39.1667 30C40.5691 30 41.9244 29.5207 42.9838 28.6501C44.0431 27.7796 44.7354 26.5762 44.9333 25.261H47.5C48.1628 25.2604 48.7983 25.0107 49.267 24.5667C49.7357 24.1227 49.9993 23.5207 50 22.8928V16.9446C49.9966 15.9812 49.6847 15.0415 49.1054 14.2496C48.5262 13.4577 47.7069 12.851 46.7558 12.5097ZM41.3167 11.0517H31.6667V4.73644H38.9367L41.3167 11.0517ZM10 28.4186C9.17591 28.4186 8.37033 28.1871 7.68512 27.7534C6.99992 27.3197 6.46587 26.7033 6.1505 25.9821C5.83514 25.2608 5.75262 24.4672 5.91339 23.7016C6.07417 22.9359 6.471 22.2326 7.05372 21.6806C7.63644 21.1286 8.37887 20.7527 9.18712 20.6004C9.99538 20.4481 10.8332 20.5263 11.5945 20.825C12.3559 21.1238 13.0066 21.6297 13.4645 22.2787C13.9223 22.9278 14.1667 23.6909 14.1667 24.4716C14.1653 25.518 13.7259 26.5212 12.9448 27.2612C12.1637 28.0011 11.1047 28.4174 10 28.4186ZM39.1667 28.4186C38.3426 28.4186 37.537 28.1871 36.8518 27.7534C36.1666 27.3197 35.6325 26.7033 35.3172 25.9821C35.0018 25.2608 34.9193 24.4672 35.0801 23.7016C35.2408 22.9359 35.6377 22.2326 36.2204 21.6806C36.8031 21.1286 37.5455 20.7527 38.3538 20.6004C39.162 20.4481 39.9998 20.5263 40.7612 20.825C41.5225 21.1238 42.1733 21.6297 42.6311 22.2787C43.089 22.9278 43.3333 23.6909 43.3333 24.4716C43.332 25.518 42.8926 26.5212 42.1115 27.2612C41.3304 28.0011 40.2713 28.4174 39.1667 28.4186ZM48.3333 22.8928C48.3331 23.1021 48.2452 23.3028 48.089 23.4507C47.9328 23.5987 47.7209 23.682 47.5 23.6822H44.9333C44.7354 22.367 44.0431 21.1636 42.9838 20.2931C41.9244 19.4225 40.5691 18.9432 39.1667 18.9432C37.7642 18.9432 36.4089 19.4225 35.3496 20.2931C34.2902 21.1636 33.598 22.367 33.4 23.6822H15.7667C15.5687 22.367 14.8765 21.1636 13.8171 20.2931C12.7578 19.4225 11.4024 18.9432 10 18.9432C8.59758 18.9432 7.24223 19.4225 6.18289 20.2931C5.12354 21.1636 4.43131 22.367 4.23333 23.6822H2.5C2.27905 23.682 2.06722 23.5987 1.91099 23.4507C1.75476 23.3028 1.66689 23.1021 1.66667 22.8928V3.94703C1.66733 3.31913 1.93093 2.71713 2.39963 2.27314C2.86833 1.82915 3.50383 1.57944 4.16667 1.57881H35.9842C36.4996 1.57954 37.0022 1.73086 37.4235 2.01213C37.8448 2.2934 38.1643 2.69094 38.3383 3.15052L38.3417 3.15763H31.6667C31.2248 3.15804 30.8011 3.32452 30.4886 3.62051C30.1762 3.9165 30.0004 4.31784 30 4.73644V11.0517C30.0004 11.4703 30.1762 11.8716 30.4886 12.1676C30.8011 12.4636 31.2248 12.6301 31.6667 12.6305H42.3483L46.1708 13.9883C46.8048 14.2158 47.3509 14.6203 47.737 15.1481C48.1232 15.676 48.3311 16.3024 48.3333 16.9446V22.8928ZM10 22.1034C9.50555 22.1034 9.0222 22.2423 8.61107 22.5025C8.19995 22.7627 7.87952 23.1326 7.6903 23.5653C7.50108 23.9981 7.45157 24.4742 7.54804 24.9336C7.6445 25.393 7.8826 25.815 8.23223 26.1462C8.58186 26.4774 9.02732 26.7029 9.51227 26.7943C9.99723 26.8857 10.4999 26.8388 10.9567 26.6595C11.4135 26.4803 11.804 26.1768 12.0787 25.7873C12.3534 25.3979 12.5 24.94 12.5 24.4716C12.4993 23.8437 12.2357 23.2417 11.767 22.7977C11.2983 22.3537 10.6628 22.104 10 22.1034ZM10 25.261C9.83518 25.261 9.67407 25.2147 9.53702 25.128C9.39998 25.0412 9.29317 24.9179 9.2301 24.7737C9.16703 24.6294 9.15052 24.4707 9.18268 24.3176C9.21483 24.1645 9.2942 24.0238 9.41074 23.9134C9.52729 23.803 9.67577 23.7278 9.83742 23.6974C9.99908 23.6669 10.1666 23.6825 10.3189 23.7423C10.4712 23.802 10.6013 23.9032 10.6929 24.033C10.7845 24.1628 10.8333 24.3155 10.8333 24.4716C10.8331 24.6809 10.7452 24.8816 10.589 25.0296C10.4328 25.1776 10.2209 25.2608 10 25.261ZM35 15.7881C35 15.9975 34.9122 16.1983 34.7559 16.3463C34.5996 16.4944 34.3877 16.5775 34.1667 16.5775H30.8333C30.6123 16.5775 30.4004 16.4944 30.2441 16.3463C30.0878 16.1983 30 15.9975 30 15.7881C30 15.5788 30.0878 15.378 30.2441 15.2299C30.4004 15.0819 30.6123 14.9987 30.8333 14.9987H34.1667C34.3877 14.9987 34.5996 15.0819 34.7559 15.2299C34.9122 15.378 35 15.5788 35 15.7881ZM26.6667 3.15763H5C4.55811 3.15804 4.13444 3.32452 3.82198 3.62051C3.50951 3.9165 3.33377 4.31784 3.33333 4.73644V11.0517C3.33377 11.4703 3.50951 11.8716 3.82198 12.1676C4.13444 12.4636 4.55811 12.6301 5 12.6305H26.6667C27.1086 12.6301 27.5322 12.4636 27.8447 12.1676C28.1572 11.8716 28.3329 11.4703 28.3333 11.0517V4.73644C28.3329 4.31784 28.1572 3.9165 27.8447 3.62051C27.5322 3.32452 27.1086 3.15804 26.6667 3.15763ZM5 4.73644H15V11.0517H5V4.73644ZM16.6667 11.0517V4.73644H26.6667L26.6683 11.0517H16.6667Z">
                                                                </path>
                                                            </svg> <span>Bus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="details-btn">
                                                    <a href="transport-details.php" class="primary-btn1">View
                                                        Details</a>
                                                </div>
                                                <div class="review-area">
                                                    <ul class="rating">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(214 reviewes)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="transport-card">
                                        <a href="transport-details.php" class="transport-img">
                                            <img src="assets/img/innerpage/picturesque-costal-town.jpg" alt>
                                            <span>470km</span>
                                        </a>
                                        <div class="transport-content">
                                            <h4><a href="transport-details.php">Travel to Cinque Terre from Rome.</a>
                                            </h4>
                                            <div class="transport-type">
                                                <h6>Available Transport:</h6>
                                                <div class="row g-2">
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M44.125 12.4167L41.4351 11.9392C41.092 11.8787 40.7659 11.7373 40.4806 11.5252C40.1953 11.3131 39.9579 11.0358 39.7859 10.7134L36.0711 3.78001C35.4551 2.63294 34.5663 1.67947 33.4945 1.0158C32.4227 0.352133 31.2057 0.00174827 29.9664 0H16.9086C15.6693 0.00166413 14.4524 0.351923 13.3806 1.01544C12.3088 1.67896 11.42 2.63226 10.8039 3.77918L7.01484 10.8517C6.85724 11.1442 6.64605 11.3999 6.39384 11.6035C6.14164 11.807 5.8536 11.9544 5.54687 12.0367L2.95781 12.7267C2.31318 12.8988 1.72057 13.244 1.23634 13.7295C0.752121 14.2149 0.3924 14.8244 0.191406 15.5001C0.182812 15.5217 0.182031 15.5476 0.175 15.5701C0.0618921 15.9585 0.0029285 16.3625 0 16.7692L0 22.5001C0.00124051 23.6047 0.413189 24.6638 1.14548 25.4449C1.87778 26.226 2.87063 26.6654 3.90625 26.6668H6.78515C7.22701 27.6638 7.92531 28.5065 8.79876 29.0966C9.6722 29.6867 10.6848 30 11.7187 30C12.7527 30 13.7653 29.6867 14.6387 29.0966C15.5122 28.5065 16.2105 27.6638 16.6523 26.6668H33.3476C33.7895 27.6638 34.4878 28.5065 35.3612 29.0966C36.2347 29.6867 37.2473 30 38.2812 30C39.3151 30 40.3278 29.6867 41.2012 29.0966C42.0747 28.5065 42.773 27.6638 43.2148 26.6668H46.0937C47.1293 26.6654 48.1222 26.226 48.8545 25.4449C49.5868 24.6638 49.9987 23.6047 50 22.5001V19.8142C50.0041 18.0378 49.4152 16.3177 48.3387 14.9623C47.2622 13.6068 45.7684 12.7044 44.125 12.4167ZM47.5734 16.6667C47.8824 17.1805 48.1136 17.7429 48.2586 18.3334H47.6562C47.0364 18.3332 46.4418 18.0721 46.0015 17.6067C45.7541 17.3407 45.5647 17.0198 45.4469 16.6667H47.5734ZM1.57031 16.6667H2.90547L2.51484 18.3334H1.5625V16.7692C1.5625 16.7342 1.56953 16.7009 1.57031 16.6667ZM11.7187 28.3334C10.9462 28.3334 10.1909 28.0891 9.54855 27.6312C8.90617 27.1734 8.4055 26.5226 8.10984 25.7613C7.81419 24.9999 7.73683 24.1621 7.88755 23.3539C8.03828 22.5456 8.41031 21.8032 8.95661 21.2205C9.50291 20.6377 10.1989 20.2409 10.9567 20.0801C11.7144 19.9194 12.4998 20.0019 13.2136 20.3172C13.9274 20.6326 14.5374 21.1667 14.9667 21.8519C15.3959 22.5371 15.625 23.3427 15.625 24.1668C15.6238 25.2714 15.2118 26.3305 14.4795 27.1116C13.7472 27.8927 12.7544 28.3321 11.7187 28.3334ZM38.2812 28.3334C37.5086 28.3334 36.7534 28.0891 36.111 27.6312C35.4687 27.1734 34.968 26.5226 34.6723 25.7613C34.3767 24.9999 34.2993 24.1621 34.45 23.3539C34.6008 22.5456 34.9728 21.8032 35.5191 21.2205C36.0654 20.6377 36.7614 20.2409 37.5192 20.0801C38.2769 19.9194 39.0623 20.0019 39.7761 20.3172C40.4899 20.6326 41.0999 21.1667 41.5292 21.8519C41.9584 22.5371 42.1875 23.3427 42.1875 24.1668C42.1862 25.2714 41.7743 26.3305 41.042 27.1116C40.3097 27.8927 39.3169 28.3321 38.2812 28.3334ZM46.0937 25.0001H43.6875C43.8063 24.1693 43.7553 23.3209 43.5382 22.5131C43.3211 21.7052 42.9429 20.957 42.4295 20.3195C41.9161 19.682 41.2796 19.1704 40.5636 18.8197C39.8477 18.4689 39.0691 18.2873 38.2812 18.2873C37.4934 18.2873 36.7148 18.4689 35.9988 18.8197C35.2829 19.1704 34.6464 19.682 34.133 20.3195C33.6196 20.957 33.2414 21.7052 33.0243 22.5131C32.8071 23.3209 32.7562 24.1693 32.875 25.0001H17.125C17.2438 24.1693 17.1928 23.3209 16.9757 22.5131C16.7586 21.7052 16.3804 20.957 15.867 20.3195C15.3536 19.682 14.7171 19.1704 14.0011 18.8197C13.2852 18.4689 12.5066 18.2873 11.7187 18.2873C10.9309 18.2873 10.1523 18.4689 9.43634 18.8197C8.72037 19.1704 8.0839 19.682 7.5705 20.3195C7.0571 20.957 6.6789 21.7052 6.46177 22.5131C6.24464 23.3209 6.19372 24.1693 6.3125 25.0001H3.90625C3.28465 25.0001 2.68851 24.7367 2.24897 24.2679C1.80943 23.799 1.5625 23.1631 1.5625 22.5001V20.0001H3.125C3.29916 20.0001 3.46833 19.938 3.60563 19.8237C3.74293 19.7094 3.84049 19.5494 3.88281 19.3692L4.66406 16.0359C4.69292 15.913 4.69513 15.7847 4.67054 15.6608C4.64595 15.5369 4.59519 15.4206 4.52213 15.3207C4.44907 15.2208 4.35563 15.1401 4.24891 15.0845C4.14219 15.0289 4.025 15.0001 3.90625 15.0001H2.25703C2.55487 14.6811 2.92831 14.4544 3.3375 14.3442L5.92734 13.6534C6.43804 13.5158 6.91757 13.2701 7.3374 12.9308C7.75723 12.5915 8.10877 12.1656 8.37109 11.6784L12.1602 4.60585C12.6395 3.71385 13.3308 2.97245 14.1645 2.45642C14.9982 1.9404 15.9447 1.66799 16.9086 1.66667H29.9664C30.9303 1.66799 31.8768 1.9404 32.7105 2.45642C33.5441 2.97245 34.2355 3.71385 34.7148 4.60585L38.4289 11.5392C38.7154 12.0769 39.1109 12.5395 39.5866 12.8932C40.0622 13.2469 40.606 13.4827 41.1781 13.5834L43.8679 14.0617C44.6545 14.2005 45.4032 14.5208 46.0617 15.0001H44.5312C44.324 15.0001 44.1253 15.0879 43.9788 15.2441C43.8323 15.4004 43.75 15.6124 43.75 15.8334C43.7495 16.3807 43.8502 16.9228 44.0463 17.4286C44.2424 17.9343 44.5301 18.3939 44.8929 18.7809C45.2558 19.1679 45.6866 19.4748 46.1608 19.684C46.6349 19.8932 47.1431 20.0006 47.6562 20.0001H48.4375V22.5001C48.4375 23.1631 48.1905 23.799 47.751 24.2679C47.3115 24.7367 46.7153 25.0001 46.0937 25.0001Z">
                                                                </path>
                                                                <path
                                                                    d="M35.5141 7.90419C35.4073 7.71467 35.2344 7.57812 35.0333 7.5246C34.8322 7.47107 34.6195 7.50495 34.4418 7.61877C34.2641 7.73259 34.1361 7.91704 34.0859 8.13153C34.0357 8.34603 34.0675 8.573 34.1742 8.76252L35.3391 10.8334H25.7812V4.16667H30.2617C30.6663 4.16785 31.0638 4.28019 31.4159 4.49286C31.768 4.70552 32.0628 5.01134 32.2719 5.38084L32.7672 6.26251C32.8739 6.45203 33.0468 6.58858 33.2479 6.6421C33.449 6.69563 33.6618 6.66175 33.8394 6.54793C34.0171 6.43411 34.1451 6.24966 34.1953 6.03517C34.2455 5.82067 34.2137 5.5937 34.107 5.40418L33.6109 4.52251C33.2625 3.90693 32.7714 3.39746 32.1847 3.04321C31.5981 2.68897 30.9358 2.50188 30.2617 2.5H25C24.7928 2.5 24.5941 2.5878 24.4476 2.74408C24.3011 2.90036 24.2187 3.11232 24.2187 3.33334V11.6667C24.2187 11.8877 24.3011 12.0997 24.4476 12.256C24.5941 12.4122 24.7928 12.5 25 12.5H36.7187C36.857 12.5 36.9928 12.4608 37.1123 12.3865C37.2317 12.3122 37.3305 12.2054 37.3986 12.077C37.4667 11.9486 37.5016 11.8033 37.4998 11.6558C37.498 11.5083 37.4595 11.364 37.3883 11.2375L35.5141 7.90419ZM21.875 2.5H16.6133C15.9392 2.50188 15.2769 2.68897 14.6903 3.04321C14.1036 3.39746 13.6125 3.90693 13.2641 4.52251L9.48672 11.2375C9.41551 11.364 9.37703 11.5083 9.37522 11.6558C9.3734 11.8033 9.40832 11.9486 9.47641 12.077C9.54449 12.2054 9.6433 12.3122 9.76274 12.3865C9.88218 12.4608 10.018 12.5 10.1563 12.5H21.875C22.0822 12.5 22.2809 12.4122 22.4274 12.256C22.5739 12.0997 22.6562 11.8877 22.6562 11.6667V3.33334C22.6562 3.11232 22.5739 2.90036 22.4274 2.74408C22.2809 2.5878 22.0822 2.5 21.875 2.5ZM21.0937 10.8334H11.5359L14.6031 5.38084C14.8122 5.01134 15.107 4.70552 15.4591 4.49286C15.8112 4.28019 16.2087 4.16785 16.6133 4.16667H21.0937V10.8334ZM26.5625 13.3334H25C24.7928 13.3334 24.5941 13.4212 24.4476 13.5775C24.3011 13.7337 24.2187 13.9457 24.2187 14.1667C24.2187 14.3877 24.3011 14.5997 24.4476 14.756C24.5941 14.9122 24.7928 15 25 15H26.5625C26.7697 15 26.9684 14.9122 27.1149 14.756C27.2614 14.5997 27.3437 14.3877 27.3437 14.1667C27.3437 13.9457 27.2614 13.7337 27.1149 13.5775C26.9684 13.4212 26.7697 13.3334 26.5625 13.3334ZM11.7188 13.3334H10.1563C9.94905 13.3334 9.75034 13.4212 9.60382 13.5775C9.45731 13.7337 9.375 13.9457 9.375 14.1667C9.375 14.3877 9.45731 14.5997 9.60382 14.756C9.75034 14.9122 9.94905 15 10.1563 15H11.7188C11.926 15 12.1247 14.9122 12.2712 14.756C12.4177 14.5997 12.5 14.3877 12.5 14.1667C12.5 13.9457 12.4177 13.7337 12.2712 13.5775C12.1247 13.4212 11.926 13.3334 11.7188 13.3334ZM38.2812 21.6667C37.8177 21.6667 37.3645 21.8134 36.9791 22.0881C36.5937 22.3628 36.2933 22.7532 36.1159 23.21C35.9385 23.6669 35.8921 24.1695 35.9825 24.6545C36.073 25.1394 36.2962 25.5849 36.624 25.9345C36.9517 26.2841 37.3694 26.5223 37.824 26.6187C38.2786 26.7152 38.7499 26.6657 39.1781 26.4765C39.6064 26.2872 39.9725 25.9668 40.23 25.5557C40.4875 25.1446 40.625 24.6612 40.625 24.1667C40.625 23.5037 40.3781 22.8678 39.9385 22.399C39.499 21.9301 38.9028 21.6667 38.2812 21.6667ZM38.2812 25.0001C38.1267 25.0001 37.9757 24.9512 37.8472 24.8596C37.7187 24.7681 37.6186 24.6379 37.5595 24.4856C37.5003 24.3334 37.4849 24.1658 37.515 24.0042C37.5451 23.8425 37.6195 23.694 37.7288 23.5775C37.8381 23.4609 37.9773 23.3816 38.1288 23.3494C38.2804 23.3173 38.4375 23.3338 38.5802 23.3968C38.723 23.4599 38.845 23.5667 38.9308 23.7038C39.0167 23.8408 39.0625 24.0019 39.0625 24.1667C39.0625 24.3878 38.9802 24.5997 38.8337 24.756C38.6872 24.9123 38.4884 25.0001 38.2812 25.0001ZM11.7188 21.6667C11.2552 21.6667 10.8021 21.8134 10.4166 22.0881C10.0312 22.3628 9.7308 22.7532 9.55341 23.21C9.37602 23.6669 9.3296 24.1695 9.42004 24.6545C9.51047 25.1394 9.73369 25.5849 10.0615 25.9345C10.3892 26.2841 10.8069 26.5223 11.2615 26.6187C11.7162 26.7152 12.1874 26.6657 12.6157 26.4765C13.0439 26.2872 13.41 25.9668 13.6675 25.5557C13.925 25.1446 14.0625 24.6612 14.0625 24.1667C14.0625 23.5037 13.8156 22.8678 13.376 22.399C12.9365 21.9301 12.3404 21.6667 11.7188 21.6667ZM11.7188 25.0001C11.5642 25.0001 11.4132 24.9512 11.2847 24.8596C11.1562 24.7681 11.0561 24.6379 10.997 24.4856C10.9378 24.3334 10.9224 24.1658 10.9525 24.0042C10.9827 23.8425 11.0571 23.694 11.1663 23.5775C11.2756 23.4609 11.4148 23.3816 11.5663 23.3494C11.7179 23.3173 11.875 23.3338 12.0177 23.3968C12.1605 23.4599 12.2825 23.5667 12.3683 23.7038C12.4542 23.8408 12.5 24.0019 12.5 24.1667C12.5 24.3878 12.4177 24.5997 12.2712 24.756C12.1247 24.9123 11.926 25.0001 11.7188 25.0001Z">
                                                                </path>
                                                            </svg> <span>Car</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M2.5 30H47.5C48.163 30 48.7989 29.7742 49.2678 29.3724C49.7366 28.9705 50 28.4255 50 27.8571V27.1429C50 26.5745 49.7366 26.0295 49.2678 25.6276C48.7989 25.2258 48.163 25 47.5 25H41.4492C42.037 24.3912 42.3961 23.6442 42.4792 22.8571H43.3233C44.53 22.8572 45.714 22.5765 46.7491 22.0451C47.7843 21.5136 48.6317 20.7513 49.2011 19.8395C49.7706 18.9276 50.0406 17.9004 49.9824 16.8674C49.9242 15.8343 49.5401 14.8342 48.8708 13.9736L39.9817 2.545C39.3738 1.76137 38.5491 1.11886 37.5811 0.674797C36.6132 0.230731 35.532 -0.00109223 34.4342 3.8689e-06H2.5C1.83696 3.8689e-06 1.20107 0.225769 0.732233 0.627632C0.263392 1.0295 0 1.57454 0 2.14286L0 22.1429C0 22.3323 0.0877974 22.514 0.244078 22.6479C0.400358 22.7819 0.61232 22.8571 0.833333 22.8571H22.5208C22.6042 23.6443 22.9625 24.3914 23.5508 25H2.5C1.83696 25 1.20107 25.2258 0.732233 25.6276C0.263392 26.0295 0 26.5745 0 27.1429L0 27.8571C0 28.4255 0.263392 28.9705 0.732233 29.3724C1.20107 29.7742 1.83696 30 2.5 30ZM37.9167 25C37.2172 24.9983 36.5418 24.7808 36.014 24.3873C35.4863 23.9939 35.1414 23.4507 35.0425 22.8571H40.7925C40.6936 23.4509 40.3485 23.9943 39.8203 24.3878C39.2922 24.7813 38.6164 24.9986 37.9167 25ZM33.3542 22.8571C33.4375 23.6443 33.7958 24.3914 34.3842 25H30.6158C31.2037 24.3912 31.5628 23.6442 31.6458 22.8571H33.3542ZM44.8883 11.4286H33.3333C33.1123 11.4286 32.9004 11.3533 32.7441 11.2194C32.5878 11.0854 32.5 10.9037 32.5 10.7143V5.71429C32.5 5.52485 32.5878 5.34317 32.7441 5.20921C32.9004 5.07526 33.1123 5 33.3333 5H39.8883L44.8883 11.4286ZM1.66667 16.4286H4.16667V17.1429C4.16667 17.7112 4.43006 18.2562 4.8989 18.6581C5.36774 19.06 6.00363 19.2857 6.66667 19.2857H12.5C13.163 19.2857 13.7989 19.06 14.2678 18.6581C14.7366 18.2562 15 17.7112 15 17.1429V16.4286H34.1667C34.3877 16.4286 34.5996 16.3533 34.7559 16.2194C34.9122 16.0854 35 15.9037 35 15.7143C35 15.5248 34.9122 15.3432 34.7559 15.2092C34.5996 15.0753 34.3877 15 34.1667 15H15V5.71429C15 5.14597 14.7366 4.60092 14.2678 4.19906C13.7989 3.7972 13.163 3.57143 12.5 3.57143H6.66667C6.00363 3.57143 5.36774 3.7972 4.8989 4.19906C4.43006 4.60092 4.16667 5.14597 4.16667 5.71429V15H1.66667V2.14286C1.66667 1.95342 1.75446 1.77174 1.91074 1.63778C2.06702 1.50383 2.27899 1.42858 2.5 1.42858H34.4342C35.2575 1.42781 36.0682 1.60168 36.794 1.9347C37.5199 2.26771 38.1383 2.74952 38.5942 3.33715L38.7767 3.57143H33.3333C32.6703 3.57143 32.0344 3.7972 31.5656 4.19906C31.0967 4.60092 30.8333 5.14597 30.8333 5.71429V10.7143C30.8333 11.2826 31.0967 11.8277 31.5656 12.2295C32.0344 12.6314 32.6703 12.8571 33.3333 12.8571H46L47.4842 14.7657C47.5442 14.8414 47.5883 14.9221 47.6417 15H38.3333C38.1123 15 37.9004 15.0753 37.7441 15.2092C37.5878 15.3432 37.5 15.5248 37.5 15.7143C37.5 15.9037 37.5878 16.0854 37.7441 16.2194C37.9004 16.3533 38.1123 16.4286 38.3333 16.4286H48.26C48.3792 17.0433 48.3409 17.673 48.1478 18.2738C47.9547 18.8746 47.6114 19.4322 47.1417 19.9079C46.6721 20.3836 46.0872 20.766 45.4279 21.0286C44.7685 21.2912 44.0504 21.4277 43.3233 21.4286H1.66667V16.4286ZM13.3333 17.1429C13.3333 17.3323 13.2455 17.514 13.0893 17.6479C12.933 17.7819 12.721 17.8571 12.5 17.8571H6.66667C6.44565 17.8571 6.23369 17.7819 6.07741 17.6479C5.92113 17.514 5.83333 17.3323 5.83333 17.1429V5.71429C5.83333 5.52485 5.92113 5.34317 6.07741 5.20921C6.23369 5.07526 6.44565 5 6.66667 5H12.5C12.721 5 12.933 5.07526 13.0893 5.20921C13.2455 5.34317 13.3333 5.52485 13.3333 5.71429V17.1429ZM24.2092 22.8571H29.9592C29.8629 23.4521 29.5188 23.9971 28.9904 24.3916C28.462 24.786 27.7849 25.0033 27.0842 25.0033C26.3834 25.0033 25.7063 24.786 25.1779 24.3916C24.6495 23.9971 24.3054 23.4521 24.2092 22.8571ZM1.66667 27.1429C1.66667 26.9534 1.75446 26.7717 1.91074 26.6378C2.06702 26.5038 2.27899 26.4286 2.5 26.4286H47.5C47.721 26.4286 47.933 26.5038 48.0893 26.6378C48.2455 26.7717 48.3333 26.9534 48.3333 27.1429V27.8571C48.3333 28.0466 48.2455 28.2283 48.0893 28.3622C47.933 28.4962 47.721 28.5714 47.5 28.5714H2.5C2.27899 28.5714 2.06702 28.4962 1.91074 28.3622C1.75446 28.2283 1.66667 28.0466 1.66667 27.8571V27.1429Z">
                                                                </path>
                                                                <path
                                                                    d="M25.8333 3.57141H20C19.337 3.57141 18.7011 3.79718 18.2322 4.19904C17.7634 4.6009 17.5 5.14595 17.5 5.71427V10.7143C17.5 11.2826 17.7634 11.8276 18.2322 12.2295C18.7011 12.6314 19.337 12.8571 20 12.8571H25.8333C26.4964 12.8571 27.1323 12.6314 27.6011 12.2295C28.0699 11.8276 28.3333 11.2826 28.3333 10.7143V5.71427C28.3333 5.14595 28.0699 4.6009 27.6011 4.19904C27.1323 3.79718 26.4964 3.57141 25.8333 3.57141ZM26.6667 10.7143C26.6667 10.9037 26.5789 11.0854 26.4226 11.2193C26.2663 11.3533 26.0543 11.4286 25.8333 11.4286H20C19.779 11.4286 19.567 11.3533 19.4107 11.2193C19.2545 11.0854 19.1667 10.9037 19.1667 10.7143V5.71427C19.1667 5.52483 19.2545 5.34315 19.4107 5.20919C19.567 5.07524 19.779 4.99998 20 4.99998H25.8333C26.0543 4.99998 26.2663 5.07524 26.4226 5.20919C26.5789 5.34315 26.6667 5.52483 26.6667 5.71427V10.7143ZM10.8333 6.42855H8.33333C8.11232 6.42855 7.90036 6.50381 7.74408 6.63776C7.5878 6.77172 7.5 6.9534 7.5 7.14284C7.5 7.33228 7.5878 7.51396 7.74408 7.64792C7.90036 7.78187 8.11232 7.85713 8.33333 7.85713H10.8333C11.0543 7.85713 11.2663 7.78187 11.4226 7.64792C11.5789 7.51396 11.6667 7.33228 11.6667 7.14284C11.6667 6.9534 11.5789 6.77172 11.4226 6.63776C11.2663 6.50381 11.0543 6.42855 10.8333 6.42855ZM10.8333 9.2857H8.33333C8.11232 9.2857 7.90036 9.36095 7.74408 9.49491C7.5878 9.62886 7.5 9.81054 7.5 9.99998C7.5 10.1894 7.5878 10.3711 7.74408 10.5051C7.90036 10.639 8.11232 10.7143 8.33333 10.7143H10.8333C11.0543 10.7143 11.2663 10.639 11.4226 10.5051C11.5789 10.3711 11.6667 10.1894 11.6667 9.99998C11.6667 9.81054 11.5789 9.62886 11.4226 9.49491C11.2663 9.36095 11.0543 9.2857 10.8333 9.2857Z">
                                                                </path>
                                                            </svg> <span>Train</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M49.2587 28.5694C47.1164 28.5694 46.1141 28.1755 44.9534 27.7193C43.9689 27.3324 42.9508 26.9323 41.3434 26.7543C40.9423 26.7107 40.5783 26.9918 40.5326 27.3842C40.5107 27.5727 40.5664 27.7619 40.6875 27.9103C40.8085 28.0587 40.9851 28.1541 41.1782 28.1755C42.5879 28.3316 43.471 28.6786 44.406 29.0462C45.5988 29.5151 46.8323 29.9998 49.2587 29.9998C49.3556 30.0009 49.4518 29.9832 49.5417 29.9478C49.6316 29.9123 49.7134 29.8598 49.7823 29.7933C49.8513 29.7268 49.906 29.6476 49.9434 29.5602C49.9808 29.4729 50 29.3792 50 29.2846C50 29.19 49.9808 29.0963 49.9434 29.009C49.906 28.9217 49.8513 28.8425 49.7823 28.776C49.7134 28.7094 49.6316 28.6569 49.5417 28.6215C49.4518 28.586 49.3556 28.5683 49.2587 28.5694ZM38.5737 27.3844C38.5281 26.9919 38.1652 26.7103 37.7628 26.7543C36.1555 26.9323 35.1374 27.3324 34.1527 27.7193C32.9922 28.1755 31.9899 28.5694 29.8476 28.5694C27.7054 28.5694 26.7032 28.1755 25.5427 27.7193C24.282 27.2238 22.8531 26.6622 20.1426 26.6622C17.4321 26.6622 16.0032 27.2238 14.7425 27.7193C13.5821 28.1755 12.5798 28.5694 10.4378 28.5694C8.29567 28.5694 7.2934 28.1755 6.13285 27.7193C4.87222 27.2238 3.44327 26.6622 0.732884 26.6622C0.538511 26.6622 0.352099 26.7376 0.214657 26.8717C0.0772143 27.0058 0 27.1878 0 27.3774C0 27.5671 0.0772143 27.7491 0.214657 27.8832C0.352099 28.0173 0.538511 28.0927 0.732884 28.0927C3.15923 28.0927 4.33764 28.5559 5.58538 29.0464C6.77815 29.5152 8.01154 30 10.4378 30C12.8638 30 14.0972 29.5153 15.2902 29.0464C16.5377 28.556 17.7161 28.0927 20.1426 28.0927C22.569 28.0927 23.7474 28.5559 24.9951 29.0464C26.188 29.5152 27.4213 30 29.8476 30C32.2738 30 33.5073 29.5153 34.7004 29.0464C35.6354 28.6789 36.5185 28.3318 37.9281 28.1757C38.0237 28.1651 38.1162 28.1363 38.2005 28.0908C38.2847 28.0453 38.3589 27.984 38.4188 27.9106C38.4788 27.8371 38.5233 27.7528 38.5499 27.6625C38.5764 27.5722 38.5845 27.4777 38.5737 27.3844Z">
                                                                </path>
                                                                <path
                                                                    d="M49.2587 25.5429C46.9743 25.5429 45.8597 25.1049 44.6796 24.6411C43.9381 24.3496 43.1814 24.0524 42.159 23.8575L49.5227 14.6371C49.64 14.4915 49.7127 14.3165 49.7323 14.1323C49.752 13.9481 49.7179 13.7622 49.6339 13.5961C49.5513 13.4294 49.4221 13.2888 49.2611 13.1907C49.1002 13.0926 48.9141 13.041 48.7243 13.0417H38.1889L34.2998 5.21255C34.0367 4.66692 33.4676 4.31434 32.8497 4.31434H16.9192L15.4371 0.850369C15.3297 0.59824 15.1481 0.382865 14.9153 0.231494C14.6825 0.080124 14.4088 -0.000438062 14.1291 1.79156e-06H9.96394C9.18224 1.79156e-06 8.54641 0.620624 8.54641 1.38351V4.31434H7.17017C6.28663 4.31434 5.56771 5.01587 5.56771 5.87824V14.8942H1.65363C1.33718 14.8942 1.03469 15.0416 0.844486 15.2885C0.654284 15.5354 0.593161 15.8599 0.681135 16.1567L2.94345 23.7897C2.31914 23.6938 1.59817 23.6357 0.732884 23.6357C0.538511 23.6357 0.352099 23.711 0.214657 23.8452C0.0772143 23.9793 0 24.1612 0 24.3509C0 24.5406 0.0772143 24.7226 0.214657 24.8567C0.352099 24.9908 0.538511 25.0662 0.732884 25.0662C3.01707 25.0662 4.13163 25.5042 5.3116 25.968C6.5692 26.4624 7.86957 26.9734 10.4379 26.9734C13.0061 26.9734 14.3065 26.4624 15.5641 25.968C16.744 25.5042 17.8585 25.0662 20.1427 25.0662C22.427 25.0662 23.5414 25.5042 24.7214 25.968C25.979 26.4624 27.2795 26.9734 29.8477 26.9734C32.4161 26.9734 33.7166 26.4624 34.9742 25.968C36.1542 25.5042 37.2688 25.0662 39.5532 25.0662C41.8375 25.0662 42.9521 25.5042 44.1322 25.968C45.3899 26.4624 46.6902 26.9734 49.2587 26.9734C49.453 26.9734 49.6394 26.8981 49.7769 26.7639C49.9143 26.6298 49.9915 26.4479 49.9915 26.2582C49.9915 26.0685 49.9143 25.8865 49.7769 25.7524C49.6394 25.6183 49.453 25.5429 49.2587 25.5429ZM10.0121 1.43059H14.097L15.3309 4.31444H10.0121V1.43059ZM39.5532 23.6358C36.9848 23.6358 35.6843 24.1468 34.4266 24.6412C33.2465 25.105 32.132 25.543 29.8476 25.543C27.5633 25.543 26.4487 25.105 25.2689 24.6412C24.0113 24.1468 22.7109 23.6358 20.1426 23.6358C17.5744 23.6358 16.2739 24.1468 15.0164 24.6412C13.8364 25.105 12.722 25.543 10.4378 25.543C8.1536 25.543 7.03904 25.105 5.85907 24.6412C5.4521 24.4813 5.04046 24.3197 4.58311 24.1741L2.25675 16.3247H8.35366C8.54804 16.3247 8.73445 16.2493 8.87189 16.1152C9.00933 15.981 9.08655 15.7991 9.08655 15.6094C9.08655 15.4197 9.00933 15.2378 8.87189 15.1037C8.73445 14.9695 8.54804 14.8942 8.35366 14.8942H7.03358V5.87824C7.03358 5.80468 7.09489 5.74484 7.17027 5.74484H32.8498C32.9025 5.74484 32.9512 5.77495 32.9773 5.82898L36.5603 13.0417H32.441C31.946 13.0416 31.468 13.2182 31.0971 13.5382L29.6847 14.7563C29.5817 14.8452 29.4489 14.8942 29.3114 14.8942H11.7636C11.5693 14.8942 11.3829 14.9695 11.2454 15.1037C11.108 15.2378 11.0308 15.4197 11.0308 15.6094C11.0308 15.7991 11.108 15.981 11.2454 16.1152C11.3829 16.2493 11.5693 16.3247 11.7636 16.3247H29.3114C29.807 16.3247 30.2842 16.1484 30.6554 15.8282L32.0677 14.6101C32.1707 14.5212 32.3035 14.4722 32.441 14.4722H47.7962L40.4596 23.6588C40.1577 23.6431 39.8555 23.6354 39.5532 23.6358Z">
                                                                </path>
                                                                <path
                                                                    d="M12.4227 7.25165H9.94664C9.32545 7.25165 8.82007 7.74487 8.82007 8.3511V10.5679C8.82007 11.1741 9.32545 11.6673 9.94664 11.6673H12.4227C13.0439 11.6673 13.5492 11.1741 13.5492 10.5679V8.3511C13.5492 7.74487 13.0439 7.25165 12.4227 7.25165ZM12.0835 10.2368H10.2858V8.68204H12.0835V10.2368ZM18.4565 7.25165H15.9805C15.3593 7.25165 14.8539 7.74487 14.8539 8.3511V10.5679C14.854 11.1741 15.3593 11.6673 15.9805 11.6673H18.4565C19.0777 11.6673 19.583 11.1741 19.583 10.5679V8.3511C19.583 7.74487 19.0777 7.25165 18.4565 7.25165ZM18.1173 10.2368H16.3197V8.68204H18.1173V10.2368ZM24.4904 7.25165H22.0143C21.3931 7.25165 20.8878 7.74487 20.8878 8.3511V10.5679C20.8878 11.1741 21.3931 11.6673 22.0143 11.6673H24.4904C25.1116 11.6673 25.6168 11.1741 25.6168 10.5679V8.3511C25.6168 7.74487 25.1116 7.25165 24.4904 7.25165ZM24.1512 10.2368H22.3535V8.68204H24.1512V10.2368ZM32.6201 10.3663L31.666 7.8778C31.595 7.69428 31.4686 7.53614 31.3035 7.42433C31.1383 7.31253 30.9423 7.25234 30.7413 7.25174H28.0481C27.4269 7.25174 26.9215 7.74496 26.9215 8.3512V10.568C26.9216 11.1741 27.427 11.6673 28.0481 11.6673H31.6955C31.855 11.6673 32.0121 11.6297 32.1534 11.5576C32.2947 11.4854 32.416 11.3809 32.5068 11.2531C32.5977 11.1252 32.6555 10.9777 32.6752 10.8233C32.695 10.6688 32.6761 10.512 32.6201 10.3663ZM28.3873 10.2368V8.68204H30.4095L31.0056 10.2368H28.3873Z">
                                                                </path>
                                                            </svg> <span>Boat</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M39.1667 22.1034C38.6722 22.1034 38.1889 22.2423 37.7777 22.5025C37.3666 22.7627 37.0462 23.1326 36.857 23.5653C36.6677 23.9981 36.6182 24.4742 36.7147 24.9336C36.8112 25.393 37.0493 25.815 37.3989 26.1462C37.7485 26.4774 38.194 26.7029 38.6789 26.7943C39.1639 26.8857 39.6666 26.8388 40.1234 26.6595C40.5802 26.4803 40.9706 26.1768 41.2453 25.7873C41.52 25.3979 41.6667 24.94 41.6667 24.4716C41.666 23.8437 41.4024 23.2417 40.9337 22.7977C40.465 22.3537 39.8295 22.104 39.1667 22.1034ZM39.1667 25.261C39.0018 25.261 38.8407 25.2147 38.7037 25.128C38.5667 25.0412 38.4598 24.9179 38.3968 24.7737C38.3337 24.6294 38.3172 24.4707 38.3493 24.3176C38.3815 24.1645 38.4609 24.0238 38.5774 23.9134C38.694 23.803 38.8424 23.7278 39.0041 23.6974C39.1657 23.6669 39.3333 23.6825 39.4856 23.7423C39.6378 23.802 39.768 23.9032 39.8596 24.033C39.9511 24.1628 40 24.3155 40 24.4716C39.9998 24.6809 39.9119 24.8816 39.7557 25.0296C39.5994 25.1776 39.3876 25.2608 39.1667 25.261ZM46.7558 12.5097L43.155 11.2309L39.9083 2.61925C39.6181 1.85331 39.0855 1.19081 38.3833 0.722079C37.681 0.253345 36.8432 0.00119249 35.9842 0H4.16667C3.062 0.00125346 2.00296 0.417503 1.22185 1.15744C0.440735 1.89738 0.00132321 2.9006 0 3.94703V22.8928C0.000661846 23.5207 0.264267 24.1227 0.732964 24.5667C1.20166 25.0107 1.83716 25.2604 2.5 25.261H4.23333C4.43131 26.5762 5.12354 27.7796 6.18289 28.6501C7.24223 29.5207 8.59758 30 10 30C11.4024 30 12.7578 29.5207 13.8171 28.6501C14.8765 27.7796 15.5687 26.5762 15.7667 25.261H33.4C33.598 26.5762 34.2902 27.7796 35.3496 28.6501C36.4089 29.5207 37.7642 30 39.1667 30C40.5691 30 41.9244 29.5207 42.9838 28.6501C44.0431 27.7796 44.7354 26.5762 44.9333 25.261H47.5C48.1628 25.2604 48.7983 25.0107 49.267 24.5667C49.7357 24.1227 49.9993 23.5207 50 22.8928V16.9446C49.9966 15.9812 49.6847 15.0415 49.1054 14.2496C48.5262 13.4577 47.7069 12.851 46.7558 12.5097ZM41.3167 11.0517H31.6667V4.73644H38.9367L41.3167 11.0517ZM10 28.4186C9.17591 28.4186 8.37033 28.1871 7.68512 27.7534C6.99992 27.3197 6.46587 26.7033 6.1505 25.9821C5.83514 25.2608 5.75262 24.4672 5.91339 23.7016C6.07417 22.9359 6.471 22.2326 7.05372 21.6806C7.63644 21.1286 8.37887 20.7527 9.18712 20.6004C9.99538 20.4481 10.8332 20.5263 11.5945 20.825C12.3559 21.1238 13.0066 21.6297 13.4645 22.2787C13.9223 22.9278 14.1667 23.6909 14.1667 24.4716C14.1653 25.518 13.7259 26.5212 12.9448 27.2612C12.1637 28.0011 11.1047 28.4174 10 28.4186ZM39.1667 28.4186C38.3426 28.4186 37.537 28.1871 36.8518 27.7534C36.1666 27.3197 35.6325 26.7033 35.3172 25.9821C35.0018 25.2608 34.9193 24.4672 35.0801 23.7016C35.2408 22.9359 35.6377 22.2326 36.2204 21.6806C36.8031 21.1286 37.5455 20.7527 38.3538 20.6004C39.162 20.4481 39.9998 20.5263 40.7612 20.825C41.5225 21.1238 42.1733 21.6297 42.6311 22.2787C43.089 22.9278 43.3333 23.6909 43.3333 24.4716C43.332 25.518 42.8926 26.5212 42.1115 27.2612C41.3304 28.0011 40.2713 28.4174 39.1667 28.4186ZM48.3333 22.8928C48.3331 23.1021 48.2452 23.3028 48.089 23.4507C47.9328 23.5987 47.7209 23.682 47.5 23.6822H44.9333C44.7354 22.367 44.0431 21.1636 42.9838 20.2931C41.9244 19.4225 40.5691 18.9432 39.1667 18.9432C37.7642 18.9432 36.4089 19.4225 35.3496 20.2931C34.2902 21.1636 33.598 22.367 33.4 23.6822H15.7667C15.5687 22.367 14.8765 21.1636 13.8171 20.2931C12.7578 19.4225 11.4024 18.9432 10 18.9432C8.59758 18.9432 7.24223 19.4225 6.18289 20.2931C5.12354 21.1636 4.43131 22.367 4.23333 23.6822H2.5C2.27905 23.682 2.06722 23.5987 1.91099 23.4507C1.75476 23.3028 1.66689 23.1021 1.66667 22.8928V3.94703C1.66733 3.31913 1.93093 2.71713 2.39963 2.27314C2.86833 1.82915 3.50383 1.57944 4.16667 1.57881H35.9842C36.4996 1.57954 37.0022 1.73086 37.4235 2.01213C37.8448 2.2934 38.1643 2.69094 38.3383 3.15052L38.3417 3.15763H31.6667C31.2248 3.15804 30.8011 3.32452 30.4886 3.62051C30.1762 3.9165 30.0004 4.31784 30 4.73644V11.0517C30.0004 11.4703 30.1762 11.8716 30.4886 12.1676C30.8011 12.4636 31.2248 12.6301 31.6667 12.6305H42.3483L46.1708 13.9883C46.8048 14.2158 47.3509 14.6203 47.737 15.1481C48.1232 15.676 48.3311 16.3024 48.3333 16.9446V22.8928ZM10 22.1034C9.50555 22.1034 9.0222 22.2423 8.61107 22.5025C8.19995 22.7627 7.87952 23.1326 7.6903 23.5653C7.50108 23.9981 7.45157 24.4742 7.54804 24.9336C7.6445 25.393 7.8826 25.815 8.23223 26.1462C8.58186 26.4774 9.02732 26.7029 9.51227 26.7943C9.99723 26.8857 10.4999 26.8388 10.9567 26.6595C11.4135 26.4803 11.804 26.1768 12.0787 25.7873C12.3534 25.3979 12.5 24.94 12.5 24.4716C12.4993 23.8437 12.2357 23.2417 11.767 22.7977C11.2983 22.3537 10.6628 22.104 10 22.1034ZM10 25.261C9.83518 25.261 9.67407 25.2147 9.53702 25.128C9.39998 25.0412 9.29317 24.9179 9.2301 24.7737C9.16703 24.6294 9.15052 24.4707 9.18268 24.3176C9.21483 24.1645 9.2942 24.0238 9.41074 23.9134C9.52729 23.803 9.67577 23.7278 9.83742 23.6974C9.99908 23.6669 10.1666 23.6825 10.3189 23.7423C10.4712 23.802 10.6013 23.9032 10.6929 24.033C10.7845 24.1628 10.8333 24.3155 10.8333 24.4716C10.8331 24.6809 10.7452 24.8816 10.589 25.0296C10.4328 25.1776 10.2209 25.2608 10 25.261ZM35 15.7881C35 15.9975 34.9122 16.1983 34.7559 16.3463C34.5996 16.4944 34.3877 16.5775 34.1667 16.5775H30.8333C30.6123 16.5775 30.4004 16.4944 30.2441 16.3463C30.0878 16.1983 30 15.9975 30 15.7881C30 15.5788 30.0878 15.378 30.2441 15.2299C30.4004 15.0819 30.6123 14.9987 30.8333 14.9987H34.1667C34.3877 14.9987 34.5996 15.0819 34.7559 15.2299C34.9122 15.378 35 15.5788 35 15.7881ZM26.6667 3.15763H5C4.55811 3.15804 4.13444 3.32452 3.82198 3.62051C3.50951 3.9165 3.33377 4.31784 3.33333 4.73644V11.0517C3.33377 11.4703 3.50951 11.8716 3.82198 12.1676C4.13444 12.4636 4.55811 12.6301 5 12.6305H26.6667C27.1086 12.6301 27.5322 12.4636 27.8447 12.1676C28.1572 11.8716 28.3329 11.4703 28.3333 11.0517V4.73644C28.3329 4.31784 28.1572 3.9165 27.8447 3.62051C27.5322 3.32452 27.1086 3.15804 26.6667 3.15763ZM5 4.73644H15V11.0517H5V4.73644ZM16.6667 11.0517V4.73644H26.6667L26.6683 11.0517H16.6667Z">
                                                                </path>
                                                            </svg> <span>Bus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="details-btn">
                                                    <a href="transport-details.php" class="primary-btn1">View
                                                        Details</a>
                                                </div>
                                                <div class="review-area">
                                                    <ul class="rating">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(214 reviewes)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="transport-card">
                                        <a href="transport-details.php" class="transport-img">
                                            <img src="assets/img/innerpage/prince-edward-iceland.jpg" alt>
                                            <span>1347km</span>
                                        </a>
                                        <div class="transport-content">
                                            <h4><a href="transport-details.php">Travel to Prince Edward Island from
                                                    Ottawa.</a></h4>
                                            <div class="transport-type">
                                                <h6>Available Transport:</h6>
                                                <div class="row g-2">
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M44.125 12.4167L41.4351 11.9392C41.092 11.8787 40.7659 11.7373 40.4806 11.5252C40.1953 11.3131 39.9579 11.0358 39.7859 10.7134L36.0711 3.78001C35.4551 2.63294 34.5663 1.67947 33.4945 1.0158C32.4227 0.352133 31.2057 0.00174827 29.9664 0H16.9086C15.6693 0.00166413 14.4524 0.351923 13.3806 1.01544C12.3088 1.67896 11.42 2.63226 10.8039 3.77918L7.01484 10.8517C6.85724 11.1442 6.64605 11.3999 6.39384 11.6035C6.14164 11.807 5.8536 11.9544 5.54687 12.0367L2.95781 12.7267C2.31318 12.8988 1.72057 13.244 1.23634 13.7295C0.752121 14.2149 0.3924 14.8244 0.191406 15.5001C0.182812 15.5217 0.182031 15.5476 0.175 15.5701C0.0618921 15.9585 0.0029285 16.3625 0 16.7692L0 22.5001C0.00124051 23.6047 0.413189 24.6638 1.14548 25.4449C1.87778 26.226 2.87063 26.6654 3.90625 26.6668H6.78515C7.22701 27.6638 7.92531 28.5065 8.79876 29.0966C9.6722 29.6867 10.6848 30 11.7187 30C12.7527 30 13.7653 29.6867 14.6387 29.0966C15.5122 28.5065 16.2105 27.6638 16.6523 26.6668H33.3476C33.7895 27.6638 34.4878 28.5065 35.3612 29.0966C36.2347 29.6867 37.2473 30 38.2812 30C39.3151 30 40.3278 29.6867 41.2012 29.0966C42.0747 28.5065 42.773 27.6638 43.2148 26.6668H46.0937C47.1293 26.6654 48.1222 26.226 48.8545 25.4449C49.5868 24.6638 49.9987 23.6047 50 22.5001V19.8142C50.0041 18.0378 49.4152 16.3177 48.3387 14.9623C47.2622 13.6068 45.7684 12.7044 44.125 12.4167ZM47.5734 16.6667C47.8824 17.1805 48.1136 17.7429 48.2586 18.3334H47.6562C47.0364 18.3332 46.4418 18.0721 46.0015 17.6067C45.7541 17.3407 45.5647 17.0198 45.4469 16.6667H47.5734ZM1.57031 16.6667H2.90547L2.51484 18.3334H1.5625V16.7692C1.5625 16.7342 1.56953 16.7009 1.57031 16.6667ZM11.7187 28.3334C10.9462 28.3334 10.1909 28.0891 9.54855 27.6312C8.90617 27.1734 8.4055 26.5226 8.10984 25.7613C7.81419 24.9999 7.73683 24.1621 7.88755 23.3539C8.03828 22.5456 8.41031 21.8032 8.95661 21.2205C9.50291 20.6377 10.1989 20.2409 10.9567 20.0801C11.7144 19.9194 12.4998 20.0019 13.2136 20.3172C13.9274 20.6326 14.5374 21.1667 14.9667 21.8519C15.3959 22.5371 15.625 23.3427 15.625 24.1668C15.6238 25.2714 15.2118 26.3305 14.4795 27.1116C13.7472 27.8927 12.7544 28.3321 11.7187 28.3334ZM38.2812 28.3334C37.5086 28.3334 36.7534 28.0891 36.111 27.6312C35.4687 27.1734 34.968 26.5226 34.6723 25.7613C34.3767 24.9999 34.2993 24.1621 34.45 23.3539C34.6008 22.5456 34.9728 21.8032 35.5191 21.2205C36.0654 20.6377 36.7614 20.2409 37.5192 20.0801C38.2769 19.9194 39.0623 20.0019 39.7761 20.3172C40.4899 20.6326 41.0999 21.1667 41.5292 21.8519C41.9584 22.5371 42.1875 23.3427 42.1875 24.1668C42.1862 25.2714 41.7743 26.3305 41.042 27.1116C40.3097 27.8927 39.3169 28.3321 38.2812 28.3334ZM46.0937 25.0001H43.6875C43.8063 24.1693 43.7553 23.3209 43.5382 22.5131C43.3211 21.7052 42.9429 20.957 42.4295 20.3195C41.9161 19.682 41.2796 19.1704 40.5636 18.8197C39.8477 18.4689 39.0691 18.2873 38.2812 18.2873C37.4934 18.2873 36.7148 18.4689 35.9988 18.8197C35.2829 19.1704 34.6464 19.682 34.133 20.3195C33.6196 20.957 33.2414 21.7052 33.0243 22.5131C32.8071 23.3209 32.7562 24.1693 32.875 25.0001H17.125C17.2438 24.1693 17.1928 23.3209 16.9757 22.5131C16.7586 21.7052 16.3804 20.957 15.867 20.3195C15.3536 19.682 14.7171 19.1704 14.0011 18.8197C13.2852 18.4689 12.5066 18.2873 11.7187 18.2873C10.9309 18.2873 10.1523 18.4689 9.43634 18.8197C8.72037 19.1704 8.0839 19.682 7.5705 20.3195C7.0571 20.957 6.6789 21.7052 6.46177 22.5131C6.24464 23.3209 6.19372 24.1693 6.3125 25.0001H3.90625C3.28465 25.0001 2.68851 24.7367 2.24897 24.2679C1.80943 23.799 1.5625 23.1631 1.5625 22.5001V20.0001H3.125C3.29916 20.0001 3.46833 19.938 3.60563 19.8237C3.74293 19.7094 3.84049 19.5494 3.88281 19.3692L4.66406 16.0359C4.69292 15.913 4.69513 15.7847 4.67054 15.6608C4.64595 15.5369 4.59519 15.4206 4.52213 15.3207C4.44907 15.2208 4.35563 15.1401 4.24891 15.0845C4.14219 15.0289 4.025 15.0001 3.90625 15.0001H2.25703C2.55487 14.6811 2.92831 14.4544 3.3375 14.3442L5.92734 13.6534C6.43804 13.5158 6.91757 13.2701 7.3374 12.9308C7.75723 12.5915 8.10877 12.1656 8.37109 11.6784L12.1602 4.60585C12.6395 3.71385 13.3308 2.97245 14.1645 2.45642C14.9982 1.9404 15.9447 1.66799 16.9086 1.66667H29.9664C30.9303 1.66799 31.8768 1.9404 32.7105 2.45642C33.5441 2.97245 34.2355 3.71385 34.7148 4.60585L38.4289 11.5392C38.7154 12.0769 39.1109 12.5395 39.5866 12.8932C40.0622 13.2469 40.606 13.4827 41.1781 13.5834L43.8679 14.0617C44.6545 14.2005 45.4032 14.5208 46.0617 15.0001H44.5312C44.324 15.0001 44.1253 15.0879 43.9788 15.2441C43.8323 15.4004 43.75 15.6124 43.75 15.8334C43.7495 16.3807 43.8502 16.9228 44.0463 17.4286C44.2424 17.9343 44.5301 18.3939 44.8929 18.7809C45.2558 19.1679 45.6866 19.4748 46.1608 19.684C46.6349 19.8932 47.1431 20.0006 47.6562 20.0001H48.4375V22.5001C48.4375 23.1631 48.1905 23.799 47.751 24.2679C47.3115 24.7367 46.7153 25.0001 46.0937 25.0001Z">
                                                                </path>
                                                                <path
                                                                    d="M35.5141 7.90419C35.4073 7.71467 35.2344 7.57812 35.0333 7.5246C34.8322 7.47107 34.6195 7.50495 34.4418 7.61877C34.2641 7.73259 34.1361 7.91704 34.0859 8.13153C34.0357 8.34603 34.0675 8.573 34.1742 8.76252L35.3391 10.8334H25.7812V4.16667H30.2617C30.6663 4.16785 31.0638 4.28019 31.4159 4.49286C31.768 4.70552 32.0628 5.01134 32.2719 5.38084L32.7672 6.26251C32.8739 6.45203 33.0468 6.58858 33.2479 6.6421C33.449 6.69563 33.6618 6.66175 33.8394 6.54793C34.0171 6.43411 34.1451 6.24966 34.1953 6.03517C34.2455 5.82067 34.2137 5.5937 34.107 5.40418L33.6109 4.52251C33.2625 3.90693 32.7714 3.39746 32.1847 3.04321C31.5981 2.68897 30.9358 2.50188 30.2617 2.5H25C24.7928 2.5 24.5941 2.5878 24.4476 2.74408C24.3011 2.90036 24.2187 3.11232 24.2187 3.33334V11.6667C24.2187 11.8877 24.3011 12.0997 24.4476 12.256C24.5941 12.4122 24.7928 12.5 25 12.5H36.7187C36.857 12.5 36.9928 12.4608 37.1123 12.3865C37.2317 12.3122 37.3305 12.2054 37.3986 12.077C37.4667 11.9486 37.5016 11.8033 37.4998 11.6558C37.498 11.5083 37.4595 11.364 37.3883 11.2375L35.5141 7.90419ZM21.875 2.5H16.6133C15.9392 2.50188 15.2769 2.68897 14.6903 3.04321C14.1036 3.39746 13.6125 3.90693 13.2641 4.52251L9.48672 11.2375C9.41551 11.364 9.37703 11.5083 9.37522 11.6558C9.3734 11.8033 9.40832 11.9486 9.47641 12.077C9.54449 12.2054 9.6433 12.3122 9.76274 12.3865C9.88218 12.4608 10.018 12.5 10.1563 12.5H21.875C22.0822 12.5 22.2809 12.4122 22.4274 12.256C22.5739 12.0997 22.6562 11.8877 22.6562 11.6667V3.33334C22.6562 3.11232 22.5739 2.90036 22.4274 2.74408C22.2809 2.5878 22.0822 2.5 21.875 2.5ZM21.0937 10.8334H11.5359L14.6031 5.38084C14.8122 5.01134 15.107 4.70552 15.4591 4.49286C15.8112 4.28019 16.2087 4.16785 16.6133 4.16667H21.0937V10.8334ZM26.5625 13.3334H25C24.7928 13.3334 24.5941 13.4212 24.4476 13.5775C24.3011 13.7337 24.2187 13.9457 24.2187 14.1667C24.2187 14.3877 24.3011 14.5997 24.4476 14.756C24.5941 14.9122 24.7928 15 25 15H26.5625C26.7697 15 26.9684 14.9122 27.1149 14.756C27.2614 14.5997 27.3437 14.3877 27.3437 14.1667C27.3437 13.9457 27.2614 13.7337 27.1149 13.5775C26.9684 13.4212 26.7697 13.3334 26.5625 13.3334ZM11.7188 13.3334H10.1563C9.94905 13.3334 9.75034 13.4212 9.60382 13.5775C9.45731 13.7337 9.375 13.9457 9.375 14.1667C9.375 14.3877 9.45731 14.5997 9.60382 14.756C9.75034 14.9122 9.94905 15 10.1563 15H11.7188C11.926 15 12.1247 14.9122 12.2712 14.756C12.4177 14.5997 12.5 14.3877 12.5 14.1667C12.5 13.9457 12.4177 13.7337 12.2712 13.5775C12.1247 13.4212 11.926 13.3334 11.7188 13.3334ZM38.2812 21.6667C37.8177 21.6667 37.3645 21.8134 36.9791 22.0881C36.5937 22.3628 36.2933 22.7532 36.1159 23.21C35.9385 23.6669 35.8921 24.1695 35.9825 24.6545C36.073 25.1394 36.2962 25.5849 36.624 25.9345C36.9517 26.2841 37.3694 26.5223 37.824 26.6187C38.2786 26.7152 38.7499 26.6657 39.1781 26.4765C39.6064 26.2872 39.9725 25.9668 40.23 25.5557C40.4875 25.1446 40.625 24.6612 40.625 24.1667C40.625 23.5037 40.3781 22.8678 39.9385 22.399C39.499 21.9301 38.9028 21.6667 38.2812 21.6667ZM38.2812 25.0001C38.1267 25.0001 37.9757 24.9512 37.8472 24.8596C37.7187 24.7681 37.6186 24.6379 37.5595 24.4856C37.5003 24.3334 37.4849 24.1658 37.515 24.0042C37.5451 23.8425 37.6195 23.694 37.7288 23.5775C37.8381 23.4609 37.9773 23.3816 38.1288 23.3494C38.2804 23.3173 38.4375 23.3338 38.5802 23.3968C38.723 23.4599 38.845 23.5667 38.9308 23.7038C39.0167 23.8408 39.0625 24.0019 39.0625 24.1667C39.0625 24.3878 38.9802 24.5997 38.8337 24.756C38.6872 24.9123 38.4884 25.0001 38.2812 25.0001ZM11.7188 21.6667C11.2552 21.6667 10.8021 21.8134 10.4166 22.0881C10.0312 22.3628 9.7308 22.7532 9.55341 23.21C9.37602 23.6669 9.3296 24.1695 9.42004 24.6545C9.51047 25.1394 9.73369 25.5849 10.0615 25.9345C10.3892 26.2841 10.8069 26.5223 11.2615 26.6187C11.7162 26.7152 12.1874 26.6657 12.6157 26.4765C13.0439 26.2872 13.41 25.9668 13.6675 25.5557C13.925 25.1446 14.0625 24.6612 14.0625 24.1667C14.0625 23.5037 13.8156 22.8678 13.376 22.399C12.9365 21.9301 12.3404 21.6667 11.7188 21.6667ZM11.7188 25.0001C11.5642 25.0001 11.4132 24.9512 11.2847 24.8596C11.1562 24.7681 11.0561 24.6379 10.997 24.4856C10.9378 24.3334 10.9224 24.1658 10.9525 24.0042C10.9827 23.8425 11.0571 23.694 11.1663 23.5775C11.2756 23.4609 11.4148 23.3816 11.5663 23.3494C11.7179 23.3173 11.875 23.3338 12.0177 23.3968C12.1605 23.4599 12.2825 23.5667 12.3683 23.7038C12.4542 23.8408 12.5 24.0019 12.5 24.1667C12.5 24.3878 12.4177 24.5997 12.2712 24.756C12.1247 24.9123 11.926 25.0001 11.7188 25.0001Z">
                                                                </path>
                                                            </svg> <span>Car</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M2.5 30H47.5C48.163 30 48.7989 29.7742 49.2678 29.3724C49.7366 28.9705 50 28.4255 50 27.8571V27.1429C50 26.5745 49.7366 26.0295 49.2678 25.6276C48.7989 25.2258 48.163 25 47.5 25H41.4492C42.037 24.3912 42.3961 23.6442 42.4792 22.8571H43.3233C44.53 22.8572 45.714 22.5765 46.7491 22.0451C47.7843 21.5136 48.6317 20.7513 49.2011 19.8395C49.7706 18.9276 50.0406 17.9004 49.9824 16.8674C49.9242 15.8343 49.5401 14.8342 48.8708 13.9736L39.9817 2.545C39.3738 1.76137 38.5491 1.11886 37.5811 0.674797C36.6132 0.230731 35.532 -0.00109223 34.4342 3.8689e-06H2.5C1.83696 3.8689e-06 1.20107 0.225769 0.732233 0.627632C0.263392 1.0295 0 1.57454 0 2.14286L0 22.1429C0 22.3323 0.0877974 22.514 0.244078 22.6479C0.400358 22.7819 0.61232 22.8571 0.833333 22.8571H22.5208C22.6042 23.6443 22.9625 24.3914 23.5508 25H2.5C1.83696 25 1.20107 25.2258 0.732233 25.6276C0.263392 26.0295 0 26.5745 0 27.1429L0 27.8571C0 28.4255 0.263392 28.9705 0.732233 29.3724C1.20107 29.7742 1.83696 30 2.5 30ZM37.9167 25C37.2172 24.9983 36.5418 24.7808 36.014 24.3873C35.4863 23.9939 35.1414 23.4507 35.0425 22.8571H40.7925C40.6936 23.4509 40.3485 23.9943 39.8203 24.3878C39.2922 24.7813 38.6164 24.9986 37.9167 25ZM33.3542 22.8571C33.4375 23.6443 33.7958 24.3914 34.3842 25H30.6158C31.2037 24.3912 31.5628 23.6442 31.6458 22.8571H33.3542ZM44.8883 11.4286H33.3333C33.1123 11.4286 32.9004 11.3533 32.7441 11.2194C32.5878 11.0854 32.5 10.9037 32.5 10.7143V5.71429C32.5 5.52485 32.5878 5.34317 32.7441 5.20921C32.9004 5.07526 33.1123 5 33.3333 5H39.8883L44.8883 11.4286ZM1.66667 16.4286H4.16667V17.1429C4.16667 17.7112 4.43006 18.2562 4.8989 18.6581C5.36774 19.06 6.00363 19.2857 6.66667 19.2857H12.5C13.163 19.2857 13.7989 19.06 14.2678 18.6581C14.7366 18.2562 15 17.7112 15 17.1429V16.4286H34.1667C34.3877 16.4286 34.5996 16.3533 34.7559 16.2194C34.9122 16.0854 35 15.9037 35 15.7143C35 15.5248 34.9122 15.3432 34.7559 15.2092C34.5996 15.0753 34.3877 15 34.1667 15H15V5.71429C15 5.14597 14.7366 4.60092 14.2678 4.19906C13.7989 3.7972 13.163 3.57143 12.5 3.57143H6.66667C6.00363 3.57143 5.36774 3.7972 4.8989 4.19906C4.43006 4.60092 4.16667 5.14597 4.16667 5.71429V15H1.66667V2.14286C1.66667 1.95342 1.75446 1.77174 1.91074 1.63778C2.06702 1.50383 2.27899 1.42858 2.5 1.42858H34.4342C35.2575 1.42781 36.0682 1.60168 36.794 1.9347C37.5199 2.26771 38.1383 2.74952 38.5942 3.33715L38.7767 3.57143H33.3333C32.6703 3.57143 32.0344 3.7972 31.5656 4.19906C31.0967 4.60092 30.8333 5.14597 30.8333 5.71429V10.7143C30.8333 11.2826 31.0967 11.8277 31.5656 12.2295C32.0344 12.6314 32.6703 12.8571 33.3333 12.8571H46L47.4842 14.7657C47.5442 14.8414 47.5883 14.9221 47.6417 15H38.3333C38.1123 15 37.9004 15.0753 37.7441 15.2092C37.5878 15.3432 37.5 15.5248 37.5 15.7143C37.5 15.9037 37.5878 16.0854 37.7441 16.2194C37.9004 16.3533 38.1123 16.4286 38.3333 16.4286H48.26C48.3792 17.0433 48.3409 17.673 48.1478 18.2738C47.9547 18.8746 47.6114 19.4322 47.1417 19.9079C46.6721 20.3836 46.0872 20.766 45.4279 21.0286C44.7685 21.2912 44.0504 21.4277 43.3233 21.4286H1.66667V16.4286ZM13.3333 17.1429C13.3333 17.3323 13.2455 17.514 13.0893 17.6479C12.933 17.7819 12.721 17.8571 12.5 17.8571H6.66667C6.44565 17.8571 6.23369 17.7819 6.07741 17.6479C5.92113 17.514 5.83333 17.3323 5.83333 17.1429V5.71429C5.83333 5.52485 5.92113 5.34317 6.07741 5.20921C6.23369 5.07526 6.44565 5 6.66667 5H12.5C12.721 5 12.933 5.07526 13.0893 5.20921C13.2455 5.34317 13.3333 5.52485 13.3333 5.71429V17.1429ZM24.2092 22.8571H29.9592C29.8629 23.4521 29.5188 23.9971 28.9904 24.3916C28.462 24.786 27.7849 25.0033 27.0842 25.0033C26.3834 25.0033 25.7063 24.786 25.1779 24.3916C24.6495 23.9971 24.3054 23.4521 24.2092 22.8571ZM1.66667 27.1429C1.66667 26.9534 1.75446 26.7717 1.91074 26.6378C2.06702 26.5038 2.27899 26.4286 2.5 26.4286H47.5C47.721 26.4286 47.933 26.5038 48.0893 26.6378C48.2455 26.7717 48.3333 26.9534 48.3333 27.1429V27.8571C48.3333 28.0466 48.2455 28.2283 48.0893 28.3622C47.933 28.4962 47.721 28.5714 47.5 28.5714H2.5C2.27899 28.5714 2.06702 28.4962 1.91074 28.3622C1.75446 28.2283 1.66667 28.0466 1.66667 27.8571V27.1429Z">
                                                                </path>
                                                                <path
                                                                    d="M25.8333 3.57141H20C19.337 3.57141 18.7011 3.79718 18.2322 4.19904C17.7634 4.6009 17.5 5.14595 17.5 5.71427V10.7143C17.5 11.2826 17.7634 11.8276 18.2322 12.2295C18.7011 12.6314 19.337 12.8571 20 12.8571H25.8333C26.4964 12.8571 27.1323 12.6314 27.6011 12.2295C28.0699 11.8276 28.3333 11.2826 28.3333 10.7143V5.71427C28.3333 5.14595 28.0699 4.6009 27.6011 4.19904C27.1323 3.79718 26.4964 3.57141 25.8333 3.57141ZM26.6667 10.7143C26.6667 10.9037 26.5789 11.0854 26.4226 11.2193C26.2663 11.3533 26.0543 11.4286 25.8333 11.4286H20C19.779 11.4286 19.567 11.3533 19.4107 11.2193C19.2545 11.0854 19.1667 10.9037 19.1667 10.7143V5.71427C19.1667 5.52483 19.2545 5.34315 19.4107 5.20919C19.567 5.07524 19.779 4.99998 20 4.99998H25.8333C26.0543 4.99998 26.2663 5.07524 26.4226 5.20919C26.5789 5.34315 26.6667 5.52483 26.6667 5.71427V10.7143ZM10.8333 6.42855H8.33333C8.11232 6.42855 7.90036 6.50381 7.74408 6.63776C7.5878 6.77172 7.5 6.9534 7.5 7.14284C7.5 7.33228 7.5878 7.51396 7.74408 7.64792C7.90036 7.78187 8.11232 7.85713 8.33333 7.85713H10.8333C11.0543 7.85713 11.2663 7.78187 11.4226 7.64792C11.5789 7.51396 11.6667 7.33228 11.6667 7.14284C11.6667 6.9534 11.5789 6.77172 11.4226 6.63776C11.2663 6.50381 11.0543 6.42855 10.8333 6.42855ZM10.8333 9.2857H8.33333C8.11232 9.2857 7.90036 9.36095 7.74408 9.49491C7.5878 9.62886 7.5 9.81054 7.5 9.99998C7.5 10.1894 7.5878 10.3711 7.74408 10.5051C7.90036 10.639 8.11232 10.7143 8.33333 10.7143H10.8333C11.0543 10.7143 11.2663 10.639 11.4226 10.5051C11.5789 10.3711 11.6667 10.1894 11.6667 9.99998C11.6667 9.81054 11.5789 9.62886 11.4226 9.49491C11.2663 9.36095 11.0543 9.2857 10.8333 9.2857Z">
                                                                </path>
                                                            </svg> <span>Train</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M49.2587 28.5694C47.1164 28.5694 46.1141 28.1755 44.9534 27.7193C43.9689 27.3324 42.9508 26.9323 41.3434 26.7543C40.9423 26.7107 40.5783 26.9918 40.5326 27.3842C40.5107 27.5727 40.5664 27.7619 40.6875 27.9103C40.8085 28.0587 40.9851 28.1541 41.1782 28.1755C42.5879 28.3316 43.471 28.6786 44.406 29.0462C45.5988 29.5151 46.8323 29.9998 49.2587 29.9998C49.3556 30.0009 49.4518 29.9832 49.5417 29.9478C49.6316 29.9123 49.7134 29.8598 49.7823 29.7933C49.8513 29.7268 49.906 29.6476 49.9434 29.5602C49.9808 29.4729 50 29.3792 50 29.2846C50 29.19 49.9808 29.0963 49.9434 29.009C49.906 28.9217 49.8513 28.8425 49.7823 28.776C49.7134 28.7094 49.6316 28.6569 49.5417 28.6215C49.4518 28.586 49.3556 28.5683 49.2587 28.5694ZM38.5737 27.3844C38.5281 26.9919 38.1652 26.7103 37.7628 26.7543C36.1555 26.9323 35.1374 27.3324 34.1527 27.7193C32.9922 28.1755 31.9899 28.5694 29.8476 28.5694C27.7054 28.5694 26.7032 28.1755 25.5427 27.7193C24.282 27.2238 22.8531 26.6622 20.1426 26.6622C17.4321 26.6622 16.0032 27.2238 14.7425 27.7193C13.5821 28.1755 12.5798 28.5694 10.4378 28.5694C8.29567 28.5694 7.2934 28.1755 6.13285 27.7193C4.87222 27.2238 3.44327 26.6622 0.732884 26.6622C0.538511 26.6622 0.352099 26.7376 0.214657 26.8717C0.0772143 27.0058 0 27.1878 0 27.3774C0 27.5671 0.0772143 27.7491 0.214657 27.8832C0.352099 28.0173 0.538511 28.0927 0.732884 28.0927C3.15923 28.0927 4.33764 28.5559 5.58538 29.0464C6.77815 29.5152 8.01154 30 10.4378 30C12.8638 30 14.0972 29.5153 15.2902 29.0464C16.5377 28.556 17.7161 28.0927 20.1426 28.0927C22.569 28.0927 23.7474 28.5559 24.9951 29.0464C26.188 29.5152 27.4213 30 29.8476 30C32.2738 30 33.5073 29.5153 34.7004 29.0464C35.6354 28.6789 36.5185 28.3318 37.9281 28.1757C38.0237 28.1651 38.1162 28.1363 38.2005 28.0908C38.2847 28.0453 38.3589 27.984 38.4188 27.9106C38.4788 27.8371 38.5233 27.7528 38.5499 27.6625C38.5764 27.5722 38.5845 27.4777 38.5737 27.3844Z">
                                                                </path>
                                                                <path
                                                                    d="M49.2587 25.5429C46.9743 25.5429 45.8597 25.1049 44.6796 24.6411C43.9381 24.3496 43.1814 24.0524 42.159 23.8575L49.5227 14.6371C49.64 14.4915 49.7127 14.3165 49.7323 14.1323C49.752 13.9481 49.7179 13.7622 49.6339 13.5961C49.5513 13.4294 49.4221 13.2888 49.2611 13.1907C49.1002 13.0926 48.9141 13.041 48.7243 13.0417H38.1889L34.2998 5.21255C34.0367 4.66692 33.4676 4.31434 32.8497 4.31434H16.9192L15.4371 0.850369C15.3297 0.59824 15.1481 0.382865 14.9153 0.231494C14.6825 0.080124 14.4088 -0.000438062 14.1291 1.79156e-06H9.96394C9.18224 1.79156e-06 8.54641 0.620624 8.54641 1.38351V4.31434H7.17017C6.28663 4.31434 5.56771 5.01587 5.56771 5.87824V14.8942H1.65363C1.33718 14.8942 1.03469 15.0416 0.844486 15.2885C0.654284 15.5354 0.593161 15.8599 0.681135 16.1567L2.94345 23.7897C2.31914 23.6938 1.59817 23.6357 0.732884 23.6357C0.538511 23.6357 0.352099 23.711 0.214657 23.8452C0.0772143 23.9793 0 24.1612 0 24.3509C0 24.5406 0.0772143 24.7226 0.214657 24.8567C0.352099 24.9908 0.538511 25.0662 0.732884 25.0662C3.01707 25.0662 4.13163 25.5042 5.3116 25.968C6.5692 26.4624 7.86957 26.9734 10.4379 26.9734C13.0061 26.9734 14.3065 26.4624 15.5641 25.968C16.744 25.5042 17.8585 25.0662 20.1427 25.0662C22.427 25.0662 23.5414 25.5042 24.7214 25.968C25.979 26.4624 27.2795 26.9734 29.8477 26.9734C32.4161 26.9734 33.7166 26.4624 34.9742 25.968C36.1542 25.5042 37.2688 25.0662 39.5532 25.0662C41.8375 25.0662 42.9521 25.5042 44.1322 25.968C45.3899 26.4624 46.6902 26.9734 49.2587 26.9734C49.453 26.9734 49.6394 26.8981 49.7769 26.7639C49.9143 26.6298 49.9915 26.4479 49.9915 26.2582C49.9915 26.0685 49.9143 25.8865 49.7769 25.7524C49.6394 25.6183 49.453 25.5429 49.2587 25.5429ZM10.0121 1.43059H14.097L15.3309 4.31444H10.0121V1.43059ZM39.5532 23.6358C36.9848 23.6358 35.6843 24.1468 34.4266 24.6412C33.2465 25.105 32.132 25.543 29.8476 25.543C27.5633 25.543 26.4487 25.105 25.2689 24.6412C24.0113 24.1468 22.7109 23.6358 20.1426 23.6358C17.5744 23.6358 16.2739 24.1468 15.0164 24.6412C13.8364 25.105 12.722 25.543 10.4378 25.543C8.1536 25.543 7.03904 25.105 5.85907 24.6412C5.4521 24.4813 5.04046 24.3197 4.58311 24.1741L2.25675 16.3247H8.35366C8.54804 16.3247 8.73445 16.2493 8.87189 16.1152C9.00933 15.981 9.08655 15.7991 9.08655 15.6094C9.08655 15.4197 9.00933 15.2378 8.87189 15.1037C8.73445 14.9695 8.54804 14.8942 8.35366 14.8942H7.03358V5.87824C7.03358 5.80468 7.09489 5.74484 7.17027 5.74484H32.8498C32.9025 5.74484 32.9512 5.77495 32.9773 5.82898L36.5603 13.0417H32.441C31.946 13.0416 31.468 13.2182 31.0971 13.5382L29.6847 14.7563C29.5817 14.8452 29.4489 14.8942 29.3114 14.8942H11.7636C11.5693 14.8942 11.3829 14.9695 11.2454 15.1037C11.108 15.2378 11.0308 15.4197 11.0308 15.6094C11.0308 15.7991 11.108 15.981 11.2454 16.1152C11.3829 16.2493 11.5693 16.3247 11.7636 16.3247H29.3114C29.807 16.3247 30.2842 16.1484 30.6554 15.8282L32.0677 14.6101C32.1707 14.5212 32.3035 14.4722 32.441 14.4722H47.7962L40.4596 23.6588C40.1577 23.6431 39.8555 23.6354 39.5532 23.6358Z">
                                                                </path>
                                                                <path
                                                                    d="M12.4227 7.25165H9.94664C9.32545 7.25165 8.82007 7.74487 8.82007 8.3511V10.5679C8.82007 11.1741 9.32545 11.6673 9.94664 11.6673H12.4227C13.0439 11.6673 13.5492 11.1741 13.5492 10.5679V8.3511C13.5492 7.74487 13.0439 7.25165 12.4227 7.25165ZM12.0835 10.2368H10.2858V8.68204H12.0835V10.2368ZM18.4565 7.25165H15.9805C15.3593 7.25165 14.8539 7.74487 14.8539 8.3511V10.5679C14.854 11.1741 15.3593 11.6673 15.9805 11.6673H18.4565C19.0777 11.6673 19.583 11.1741 19.583 10.5679V8.3511C19.583 7.74487 19.0777 7.25165 18.4565 7.25165ZM18.1173 10.2368H16.3197V8.68204H18.1173V10.2368ZM24.4904 7.25165H22.0143C21.3931 7.25165 20.8878 7.74487 20.8878 8.3511V10.5679C20.8878 11.1741 21.3931 11.6673 22.0143 11.6673H24.4904C25.1116 11.6673 25.6168 11.1741 25.6168 10.5679V8.3511C25.6168 7.74487 25.1116 7.25165 24.4904 7.25165ZM24.1512 10.2368H22.3535V8.68204H24.1512V10.2368ZM32.6201 10.3663L31.666 7.8778C31.595 7.69428 31.4686 7.53614 31.3035 7.42433C31.1383 7.31253 30.9423 7.25234 30.7413 7.25174H28.0481C27.4269 7.25174 26.9215 7.74496 26.9215 8.3512V10.568C26.9216 11.1741 27.427 11.6673 28.0481 11.6673H31.6955C31.855 11.6673 32.0121 11.6297 32.1534 11.5576C32.2947 11.4854 32.416 11.3809 32.5068 11.2531C32.5977 11.1252 32.6555 10.9777 32.6752 10.8233C32.695 10.6688 32.6761 10.512 32.6201 10.3663ZM28.3873 10.2368V8.68204H30.4095L31.0056 10.2368H28.3873Z">
                                                                </path>
                                                            </svg> <span>Boat</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="single-transport">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="35"
                                                                height="30" viewBox="0 0 50 30">
                                                                <path
                                                                    d="M39.1667 22.1034C38.6722 22.1034 38.1889 22.2423 37.7777 22.5025C37.3666 22.7627 37.0462 23.1326 36.857 23.5653C36.6677 23.9981 36.6182 24.4742 36.7147 24.9336C36.8112 25.393 37.0493 25.815 37.3989 26.1462C37.7485 26.4774 38.194 26.7029 38.6789 26.7943C39.1639 26.8857 39.6666 26.8388 40.1234 26.6595C40.5802 26.4803 40.9706 26.1768 41.2453 25.7873C41.52 25.3979 41.6667 24.94 41.6667 24.4716C41.666 23.8437 41.4024 23.2417 40.9337 22.7977C40.465 22.3537 39.8295 22.104 39.1667 22.1034ZM39.1667 25.261C39.0018 25.261 38.8407 25.2147 38.7037 25.128C38.5667 25.0412 38.4598 24.9179 38.3968 24.7737C38.3337 24.6294 38.3172 24.4707 38.3493 24.3176C38.3815 24.1645 38.4609 24.0238 38.5774 23.9134C38.694 23.803 38.8424 23.7278 39.0041 23.6974C39.1657 23.6669 39.3333 23.6825 39.4856 23.7423C39.6378 23.802 39.768 23.9032 39.8596 24.033C39.9511 24.1628 40 24.3155 40 24.4716C39.9998 24.6809 39.9119 24.8816 39.7557 25.0296C39.5994 25.1776 39.3876 25.2608 39.1667 25.261ZM46.7558 12.5097L43.155 11.2309L39.9083 2.61925C39.6181 1.85331 39.0855 1.19081 38.3833 0.722079C37.681 0.253345 36.8432 0.00119249 35.9842 0H4.16667C3.062 0.00125346 2.00296 0.417503 1.22185 1.15744C0.440735 1.89738 0.00132321 2.9006 0 3.94703V22.8928C0.000661846 23.5207 0.264267 24.1227 0.732964 24.5667C1.20166 25.0107 1.83716 25.2604 2.5 25.261H4.23333C4.43131 26.5762 5.12354 27.7796 6.18289 28.6501C7.24223 29.5207 8.59758 30 10 30C11.4024 30 12.7578 29.5207 13.8171 28.6501C14.8765 27.7796 15.5687 26.5762 15.7667 25.261H33.4C33.598 26.5762 34.2902 27.7796 35.3496 28.6501C36.4089 29.5207 37.7642 30 39.1667 30C40.5691 30 41.9244 29.5207 42.9838 28.6501C44.0431 27.7796 44.7354 26.5762 44.9333 25.261H47.5C48.1628 25.2604 48.7983 25.0107 49.267 24.5667C49.7357 24.1227 49.9993 23.5207 50 22.8928V16.9446C49.9966 15.9812 49.6847 15.0415 49.1054 14.2496C48.5262 13.4577 47.7069 12.851 46.7558 12.5097ZM41.3167 11.0517H31.6667V4.73644H38.9367L41.3167 11.0517ZM10 28.4186C9.17591 28.4186 8.37033 28.1871 7.68512 27.7534C6.99992 27.3197 6.46587 26.7033 6.1505 25.9821C5.83514 25.2608 5.75262 24.4672 5.91339 23.7016C6.07417 22.9359 6.471 22.2326 7.05372 21.6806C7.63644 21.1286 8.37887 20.7527 9.18712 20.6004C9.99538 20.4481 10.8332 20.5263 11.5945 20.825C12.3559 21.1238 13.0066 21.6297 13.4645 22.2787C13.9223 22.9278 14.1667 23.6909 14.1667 24.4716C14.1653 25.518 13.7259 26.5212 12.9448 27.2612C12.1637 28.0011 11.1047 28.4174 10 28.4186ZM39.1667 28.4186C38.3426 28.4186 37.537 28.1871 36.8518 27.7534C36.1666 27.3197 35.6325 26.7033 35.3172 25.9821C35.0018 25.2608 34.9193 24.4672 35.0801 23.7016C35.2408 22.9359 35.6377 22.2326 36.2204 21.6806C36.8031 21.1286 37.5455 20.7527 38.3538 20.6004C39.162 20.4481 39.9998 20.5263 40.7612 20.825C41.5225 21.1238 42.1733 21.6297 42.6311 22.2787C43.089 22.9278 43.3333 23.6909 43.3333 24.4716C43.332 25.518 42.8926 26.5212 42.1115 27.2612C41.3304 28.0011 40.2713 28.4174 39.1667 28.4186ZM48.3333 22.8928C48.3331 23.1021 48.2452 23.3028 48.089 23.4507C47.9328 23.5987 47.7209 23.682 47.5 23.6822H44.9333C44.7354 22.367 44.0431 21.1636 42.9838 20.2931C41.9244 19.4225 40.5691 18.9432 39.1667 18.9432C37.7642 18.9432 36.4089 19.4225 35.3496 20.2931C34.2902 21.1636 33.598 22.367 33.4 23.6822H15.7667C15.5687 22.367 14.8765 21.1636 13.8171 20.2931C12.7578 19.4225 11.4024 18.9432 10 18.9432C8.59758 18.9432 7.24223 19.4225 6.18289 20.2931C5.12354 21.1636 4.43131 22.367 4.23333 23.6822H2.5C2.27905 23.682 2.06722 23.5987 1.91099 23.4507C1.75476 23.3028 1.66689 23.1021 1.66667 22.8928V3.94703C1.66733 3.31913 1.93093 2.71713 2.39963 2.27314C2.86833 1.82915 3.50383 1.57944 4.16667 1.57881H35.9842C36.4996 1.57954 37.0022 1.73086 37.4235 2.01213C37.8448 2.2934 38.1643 2.69094 38.3383 3.15052L38.3417 3.15763H31.6667C31.2248 3.15804 30.8011 3.32452 30.4886 3.62051C30.1762 3.9165 30.0004 4.31784 30 4.73644V11.0517C30.0004 11.4703 30.1762 11.8716 30.4886 12.1676C30.8011 12.4636 31.2248 12.6301 31.6667 12.6305H42.3483L46.1708 13.9883C46.8048 14.2158 47.3509 14.6203 47.737 15.1481C48.1232 15.676 48.3311 16.3024 48.3333 16.9446V22.8928ZM10 22.1034C9.50555 22.1034 9.0222 22.2423 8.61107 22.5025C8.19995 22.7627 7.87952 23.1326 7.6903 23.5653C7.50108 23.9981 7.45157 24.4742 7.54804 24.9336C7.6445 25.393 7.8826 25.815 8.23223 26.1462C8.58186 26.4774 9.02732 26.7029 9.51227 26.7943C9.99723 26.8857 10.4999 26.8388 10.9567 26.6595C11.4135 26.4803 11.804 26.1768 12.0787 25.7873C12.3534 25.3979 12.5 24.94 12.5 24.4716C12.4993 23.8437 12.2357 23.2417 11.767 22.7977C11.2983 22.3537 10.6628 22.104 10 22.1034ZM10 25.261C9.83518 25.261 9.67407 25.2147 9.53702 25.128C9.39998 25.0412 9.29317 24.9179 9.2301 24.7737C9.16703 24.6294 9.15052 24.4707 9.18268 24.3176C9.21483 24.1645 9.2942 24.0238 9.41074 23.9134C9.52729 23.803 9.67577 23.7278 9.83742 23.6974C9.99908 23.6669 10.1666 23.6825 10.3189 23.7423C10.4712 23.802 10.6013 23.9032 10.6929 24.033C10.7845 24.1628 10.8333 24.3155 10.8333 24.4716C10.8331 24.6809 10.7452 24.8816 10.589 25.0296C10.4328 25.1776 10.2209 25.2608 10 25.261ZM35 15.7881C35 15.9975 34.9122 16.1983 34.7559 16.3463C34.5996 16.4944 34.3877 16.5775 34.1667 16.5775H30.8333C30.6123 16.5775 30.4004 16.4944 30.2441 16.3463C30.0878 16.1983 30 15.9975 30 15.7881C30 15.5788 30.0878 15.378 30.2441 15.2299C30.4004 15.0819 30.6123 14.9987 30.8333 14.9987H34.1667C34.3877 14.9987 34.5996 15.0819 34.7559 15.2299C34.9122 15.378 35 15.5788 35 15.7881ZM26.6667 3.15763H5C4.55811 3.15804 4.13444 3.32452 3.82198 3.62051C3.50951 3.9165 3.33377 4.31784 3.33333 4.73644V11.0517C3.33377 11.4703 3.50951 11.8716 3.82198 12.1676C4.13444 12.4636 4.55811 12.6301 5 12.6305H26.6667C27.1086 12.6301 27.5322 12.4636 27.8447 12.1676C28.1572 11.8716 28.3329 11.4703 28.3333 11.0517V4.73644C28.3329 4.31784 28.1572 3.9165 27.8447 3.62051C27.5322 3.32452 27.1086 3.15804 26.6667 3.15763ZM5 4.73644H15V11.0517H5V4.73644ZM16.6667 11.0517V4.73644H26.6667L26.6683 11.0517H16.6667Z">
                                                                </path>
                                                            </svg> <span>Bus</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-bottom">
                                                <div class="details-btn">
                                                    <a href="transport-details.php" class="primary-btn1">View
                                                        Details</a>
                                                </div>
                                                <div class="review-area">
                                                    <ul class="rating">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                    <span>(214 reviewes)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tour Package Ends -->



    <!--Why Choose Us Start  -->
    <div class="feature-card-section mb-120 mt-120">
        <img src="assets/img/home1/section-vector4.png" alt class="section-vector4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <span>
                            <div class="section-title2 mb-30">
                                <div class="eg-section-tag">
                                    <span>Why Choose Us</span>
                                </div>

                            </div>

                        </span>
                        <h2>Why Choose Xpress Tourism</h2>
                    </div>
                </div>
            </div>
            <div class="row g-md-4 gy-5">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70">
                                <path
                                    d="M36.6322 3.49316L36.7071 3.42037C20.062 3.2598 3.21674 16.7033 3.50361 36.4612C3.78192 55.5747 19.1789 69.0525 37.1471 68.2261C39.5098 68.1213 41.8522 67.7401 44.1263 67.0904C46.9554 69.3115 51.6471 70.7908 54.7171 69.5459C55.9695 69.0268 57.087 68.1929 58.0215 67.1268C61.4811 63.9669 62.0067 58.5719 61.1899 53.8749C66.343 46.5607 67.7998 38.1471 66.4746 30.3159C64.0383 15.9133 52.1941 3.48459 36.6322 3.49316ZM52.7667 10.5901C52.7056 10.715 52.679 10.8539 52.6897 10.9926C52.9551 13.6076 50.1314 15.4423 47.8492 14.1578C46.1633 13.2073 45.2374 10.7464 42.9788 9.92213C38.8416 8.40748 35.7812 13.2276 32.4297 12.8797C31.1516 12.7438 29.8928 11.744 29.2217 10.3321C28.7186 9.27453 28.4948 7.96861 28.4981 6.30303C37.1364 3.73721 45.6291 5.30539 52.7667 10.5901ZM7.88701 27.1613C13.5142 25.469 21.1025 29.0132 15.6037 31.8701C14.3245 32.5145 13.0101 33.1086 12.28 34.3257C11.3541 35.8735 11.8347 38.0476 13.3312 39.0741C13.9049 39.4648 14.6553 39.7442 14.7377 40.061C14.9304 40.7975 11.216 43.2552 7.12165 42.0435C6.6924 40.0691 6.45296 38.0583 6.40661 36.0384C6.32712 33.0449 6.70137 30.0567 7.51664 27.1753C7.63942 27.2004 7.76645 27.1956 7.88701 27.1613ZM23.1866 55.3692C25.0877 51.8689 29.0932 50.8863 29.6134 51.5071C29.9431 51.9021 29.4133 52.995 29.2548 53.9113C28.816 56.3957 31.2341 58.8438 33.7292 58.4392C36.5873 57.9725 37.9306 54.6295 40.1197 54.3491C41.1558 54.2206 42.3611 54.849 43.3524 56.0446C44.7953 57.7798 45.7169 61.3839 45.4857 64.045C42.6071 65.0931 39.5761 65.6619 36.5134 65.7288C31.7532 65.8361 27.0411 64.7579 22.8012 62.5914C22.1954 60.458 22.1911 57.2028 23.1866 55.3692ZM43.6328 41.1304C43.5825 39.8373 43.4262 38.5785 43.2325 36.8969C43.2181 36.7796 43.1778 36.6669 43.1144 36.5671C43.0511 36.4673 42.9664 36.3829 42.8664 36.3199C41.8142 35.3244 39.9784 33.3473 36.8881 31.0994C36.7942 31.031 36.6867 30.9837 36.5728 30.9609C36.4589 30.9381 36.3415 30.9402 36.2285 30.9672C36.1156 30.9941 36.0098 31.0453 35.9185 31.1171C35.8273 31.1889 35.7527 31.2797 35.6999 31.3831C33.5869 35.5267 32.2585 39.4605 31.4225 44.0238C30.7213 43.6705 30.6785 43.6491 30.5436 43.5742C31.3807 37.7821 31.5306 32.3005 31.6098 27.1731C31.6117 27.0484 31.5846 26.9249 31.5305 26.8125C31.4765 26.7001 31.397 26.6018 31.2983 26.5255C28.6351 24.4639 26.2031 22.7362 23.8706 21.2483C23.4339 19.8996 23.1288 19.6876 23.3161 19.4008C23.4617 19.176 23.5484 19.313 24.9721 19.1599C27.981 21.1648 30.8187 22.9171 33.407 24.3707C33.6254 24.4928 33.8887 24.5078 34.1199 24.4071C38.6906 22.4322 43.9068 20.7795 49.2343 19.6148C49.2996 19.7165 49.4077 19.8932 49.4698 20.0002C45.6998 21.8413 41.8505 24.5677 38.286 27.946C38.2087 28.0191 38.1467 28.1069 38.1036 28.2042C38.0605 28.3015 38.0373 28.4064 38.0352 28.5129C38.0331 28.6193 38.0522 28.725 38.0914 28.824C38.1306 28.9229 38.1891 29.0131 38.2635 29.0892C40.3883 31.2728 42.3098 33.0733 43.9689 34.437C44.6882 35.0236 45.4204 34.0089 49.4217 33.2125C49.5897 33.4105 49.7663 33.6438 49.9408 33.8922C46.3763 36.1615 45.1539 37.1142 43.9571 41.2674C43.8492 41.2214 43.7411 41.1757 43.6328 41.1304ZM48.1821 37.0596C55.2448 44.6896 63.745 59.1135 56.4383 66.4567C61.4768 58.6736 54.3446 46.8251 46.4191 39.2711C46.8357 38.4124 47.4379 37.657 48.1821 37.0596ZM56.3591 59.3276C56.5539 61.4492 56.2735 63.0099 55.7757 64.2623C53.6616 67.3387 49.777 67.6406 47.2016 66.0231C50.2759 64.7322 53.1211 62.844 55.2116 60.3328C55.6044 60.0116 55.9802 59.6702 56.3591 59.3276ZM50.5617 35.4026C50.8678 35.2024 51.1579 35.0204 51.4052 34.878C51.4351 34.8663 51.4673 34.8705 51.4951 34.8545C51.6773 34.7443 51.8084 34.5664 51.8596 34.3597C51.9108 34.153 51.8778 33.9344 51.768 33.752C51.5443 33.3816 50.9513 32.446 50.2801 31.7749C50.1893 31.6832 50.0775 31.6151 49.9544 31.5763C49.8313 31.5375 49.7007 31.5292 49.5737 31.5522C47.7732 31.868 46.1783 32.3872 44.6454 32.9117C43.2635 31.7503 41.7007 30.2881 39.9869 28.554C43.5054 25.3213 47.2755 22.7437 50.9299 21.077C51.107 20.9944 51.2475 20.8493 51.3245 20.6697C51.4015 20.49 51.4096 20.2882 51.3474 20.103C51.3323 19.967 51.2818 19.8374 51.2007 19.7272C50.6794 19.0529 50.2662 17.7587 49.3703 17.9439C43.9207 19.1032 38.5633 20.7709 33.8491 22.7758C26.3197 18.5069 25.8466 17.4387 25.0706 17.5307C23.5987 17.718 22.6717 17.4569 21.9738 18.5187C21.8041 18.7778 21.6982 19.0735 21.6649 19.3815C21.6316 19.6894 21.6718 20.0009 21.7822 20.2903C23.269 23.8837 20.8541 20.5151 29.9977 27.5499C29.9121 32.8539 29.7483 38.1075 28.8791 43.8514C28.7271 44.8608 30.4366 45.1338 31.3914 45.8563C31.4936 45.9345 31.6133 45.9867 31.7402 46.0083C31.867 46.03 31.9972 46.0205 32.1196 45.9807C32.242 45.9409 32.3529 45.872 32.4427 45.7798C32.5325 45.6877 32.5986 45.5751 32.6353 45.4517C33.331 44.7688 32.9457 40.6883 36.705 32.9663C38.3385 34.2144 39.9056 35.6145 41.675 37.4C41.7339 38.0444 41.8216 38.3034 42.0036 41.1679C42.0818 42.386 42.1503 42.2404 43.2539 42.7136C44.0749 43.07 44.1273 43.1064 44.4067 43.0668C44.611 43.1005 44.8203 43.0534 44.9905 42.9356C45.1607 42.8177 45.2784 42.6383 45.3187 42.4352C45.4193 41.9343 45.5842 41.4044 45.7662 40.8853C50.5927 45.5737 54.7042 50.6647 56.0776 57.4148C53.4756 59.9274 50.4401 61.9481 47.1181 63.3792C47.1502 60.4323 46.1387 56.8839 44.5887 55.0181C43.2239 53.3739 41.5166 52.554 39.9141 52.7552C37.0144 53.1288 35.672 56.4964 33.4702 56.8549C32.0733 57.0862 30.5897 55.5897 30.8348 54.1896C31.0189 53.162 31.8453 51.6698 30.8434 50.4763C30.2375 49.7484 29.1928 49.5279 27.9008 49.8512C25.3307 50.4977 23.041 52.2725 21.7747 54.6017C20.7835 56.4289 20.6047 59.242 20.9419 61.5488C14.5622 57.6674 9.69174 51.3904 7.56802 43.8161C10.2227 44.331 12.888 43.7165 14.9229 42.3207C16.034 41.5564 16.5328 40.5866 16.2898 39.6543C15.9955 38.5303 14.8683 38.1771 14.2368 37.7489C13.4447 37.2062 13.1674 35.9667 13.6577 35.151C14.1383 34.346 15.1777 33.8815 16.3444 33.2938C20.4088 31.1829 19.7516 27.688 16.0351 26.1038C13.5571 25.044 10.6905 24.83 8.06256 25.4626C11.1347 16.79 18.2455 9.92642 26.8817 6.8286C27.0102 11.7804 29.6605 14.1996 32.2563 14.4768C36.0531 14.8729 39.3982 10.3235 42.4264 11.4293C44.153 12.0608 45.0511 14.4243 47.0603 15.5558C49.9569 17.1893 53.8789 15.4702 54.2718 11.7815C59.7973 16.4549 63.517 23.0402 64.8197 30.1253C66.1385 37.2993 64.9803 44.985 60.7093 51.7158C59.0202 45.5373 54.6593 40.2013 50.5617 35.4026Z" />
                                <path
                                    d="M59.2244 26.0313C58.6495 25.632 58.6281 25.6138 58.6838 24.841C58.7095 24.4781 58.7395 24.066 58.6281 23.6346C58.0544 21.3974 54.8121 21.2657 53.9001 23.6196C53.2578 25.2798 50.3709 26.0805 51.7175 29.5498C52.8789 32.5427 57.2794 33.7202 59.6279 31.4947C60.3515 30.8097 60.7711 29.7778 60.7508 28.7363C60.723 27.441 60.1353 26.6618 59.2244 26.0313ZM53.215 28.9685C52.2677 26.529 54.5048 26.5012 55.3976 24.1998C55.5581 23.7855 55.9681 23.5051 56.3256 23.5051C56.6543 23.5051 56.9989 23.7459 57.0728 24.0328C57.2034 24.5434 56.8405 25.4565 57.3008 26.3385C57.9099 27.5053 59.1162 27.3019 59.1451 28.7684C59.2029 31.7538 54.2876 31.7399 53.215 28.9685ZM52.7954 5.07556L53.382 0.879487C53.4014 0.673445 53.3407 0.467836 53.2124 0.30546C53.084 0.143084 52.898 0.036453 52.6931 0.007764C52.4881 -0.020925 52.28 0.0305387 52.112 0.151442C51.944 0.272345 51.8292 0.453372 51.7913 0.656838L51.2047 4.85398C51.0592 5.90621 52.6477 6.12778 52.7954 5.07556ZM57.7654 2.49048L55.1471 6.2466C54.5338 7.12542 55.8707 8.01816 56.4637 7.16396L59.082 3.4089C59.1449 3.32257 59.1899 3.22456 59.2144 3.1206C59.2389 3.01665 59.2425 2.90885 59.2248 2.80351C59.2072 2.69818 59.1687 2.59743 59.1116 2.50716C59.0545 2.41689 58.98 2.33892 58.8924 2.27781C58.8048 2.21671 58.7058 2.17369 58.6014 2.15129C58.497 2.1289 58.3891 2.12756 58.2842 2.14736C58.1792 2.16717 58.0793 2.20772 57.9902 2.26663C57.9011 2.32555 57.8247 2.40165 57.7654 2.49048ZM59.4995 11.1438L64.1323 7.6692C64.3026 7.54145 64.4152 7.35126 64.4453 7.14048C64.4754 6.9297 64.4206 6.71559 64.2928 6.54525C64.1651 6.37491 63.9749 6.2623 63.7641 6.23219C63.5533 6.20208 63.3392 6.25694 63.1689 6.38469L58.535 9.86036C57.6797 10.5015 58.6613 11.7754 59.4984 11.1449L59.4995 11.1438Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Worldwide Coverage</h6>
                            <p>Contact us today to begin planning your next adventure and unlock a world of
                                possibilities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card two">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70">
                                <path
                                    d="M63.3244 22.918C62.2732 22.7909 58.8339 22.9134 57.757 22.876C56.4317 22.8749 53.0974 22.8597 51.8059 22.8597L50.8142 22.8574C50.1877 22.9134 49.8389 22.3744 50.071 21.84C50.1854 21.5157 50.806 19.8847 50.9344 19.5149C52.4779 15.3639 54.9104 8.78736 56.4679 4.64103C56.6837 4.05303 56.9905 3.31453 57.1819 2.7102C57.4339 1.7407 56.679 0.652196 55.6442 0.590363L39.7274 0.416529C37.7744 0.376863 30.8957 0.259029 29.0652 0.220529C28.7036 0.197772 28.3422 0.267313 28.0148 0.422618C27.6875 0.577923 27.405 0.813894 27.1939 1.10836C26.8987 1.47353 26.838 1.98103 26.7249 2.3917C26.6234 2.7837 26.4099 3.72753 26.236 4.46953C25.9333 4.45046 25.6438 4.33887 25.4065 4.14986C23.7569 2.80936 22.176 1.69986 20.1857 3.2632C19.3877 3.79403 18.9794 4.4917 18.0892 4.6177C17.0812 4.66903 16.0685 4.25253 14.8855 4.5022C14.1739 4.62353 13.475 5.23953 13.1659 5.85086C12.6525 6.71886 12.5207 7.8062 11.9654 8.46653C11.3505 9.0557 10.2387 9.2412 9.41037 9.77086C8.12004 10.402 7.95554 12.0237 8.24137 13.195C8.38837 14.168 8.62871 14.8575 8.01037 15.6894C5.90921 18.2957 5.92671 19.0645 8.07687 21.6044C8.73254 22.4175 8.53187 23.191 8.39887 24.1687C7.73154 27.6512 10.2772 27.3152 12.1882 28.6499C12.761 29.2239 12.9407 30.3065 13.4925 31.297C14.0245 32.4905 15.5587 32.6562 16.6659 32.4124C17.6447 32.2759 18.438 32.0764 19.2547 32.7355L19.9185 33.2535L19.1707 36.456L19.0739 36.8749C18.7087 38.2445 19.9524 39.697 21.3185 39.6329C21.3349 39.6235 28.5484 39.6795 28.8879 39.6515C29.834 39.655 36.1364 39.6597 36.9274 39.6667C36.9285 39.6025 35.9859 42.7759 35.9812 42.7712L28.3045 68.5709C28.2413 68.7725 28.2508 68.9898 28.3313 69.1852C28.4118 69.3805 28.5582 69.5414 28.7451 69.6399C28.932 69.7384 29.1475 69.7683 29.3542 69.7243C29.5608 69.6803 29.7455 69.5653 29.876 69.3992C36.2904 61.1614 52.9294 39.8184 59.1909 31.885L64.1025 25.6539C64.9519 24.8209 64.5202 23.1782 63.3255 22.9215L63.3244 22.918ZM16.5235 31.4569C15.6089 31.5899 14.7805 31.7334 14.2882 30.8245C13.797 30.0499 13.6897 28.9579 12.8427 27.9907C11.886 27.125 10.7882 27.0107 10.0205 26.5242C9.11871 26.0307 9.27387 25.2245 9.40338 24.3145C9.62271 23.2692 9.72071 21.8902 8.94254 20.9849C8.31604 20.1122 7.53671 19.3434 7.55887 18.6667C7.63121 17.521 9.76854 16.1677 9.68921 14.6522C9.74871 13.629 9.37771 12.5919 9.53404 11.704C9.60871 11.396 9.76854 11.2257 10.1395 11.0122C11.0717 10.507 12.1415 10.4032 13.0655 9.5667C13.923 8.67886 14.0817 7.59853 14.6149 6.70136C14.8424 6.35136 14.9824 6.2557 15.239 6.20903C16.1117 6.11336 17.1115 6.5112 18.1627 6.48436C19.3644 6.52753 20.4937 5.49503 21.3372 4.87553C22.4992 3.92703 23.1549 5.2232 24.1804 5.87186C25.137 6.73753 26.8007 6.7212 27.8997 6.4902C28.5052 6.43653 28.9054 6.32336 29.2367 6.55086C29.9869 7.5227 29.9507 8.77453 30.989 9.84436C32.0507 10.8804 33.292 10.8734 34.2557 11.62C34.5929 12.4682 34.062 13.5695 34.1647 14.6732C34.0877 16.2704 35.9054 17.4195 36.288 18.669C36.3009 18.8137 36.1935 19.124 35.9392 19.4845C35.5239 20.034 34.818 20.9382 34.5415 21.588C33.9815 22.8819 34.7072 24.4102 34.5987 25.5897C34.4412 26.2722 33.5242 26.4635 32.8394 26.789C32.3494 27.006 31.787 27.2347 31.255 27.7574C30.415 28.6884 30.3182 29.7512 29.82 30.695C29.379 31.549 28.7117 31.3729 27.8332 31.2912C27.0562 31.1909 26.0447 31.017 25.2245 31.381C24.1384 31.8384 23.0639 33.2885 22.1655 33.3014C21.4679 33.3282 20.6932 32.5465 19.8275 31.92C18.9269 31.1477 17.5654 31.241 16.5224 31.4592L16.5235 31.4569ZM57.253 32.662C56.6171 32.2274 55.9652 31.8165 55.2989 31.43C53.9304 30.6357 52.544 29.8725 51.1409 29.141C50.0395 28.5682 48.9289 28.014 47.8124 27.4704C46.718 26.9313 45.6072 26.4263 44.4815 25.956C44.4211 25.9315 44.3596 25.9097 44.2972 25.8907C44.2379 25.8736 44.1746 25.8759 44.1167 25.8973C44.0587 25.9187 44.0092 25.9581 43.9752 26.0097C43.938 26.066 43.9224 26.1338 43.9311 26.2006C43.9399 26.2675 43.9726 26.329 44.023 26.3737C44.0919 26.432 44.1677 26.4892 44.2505 26.5417C46.3063 27.8269 48.411 29.0322 50.5599 30.1549L50.687 30.2214C51.7814 30.793 52.8862 31.3449 54.0015 31.8769C54.9407 32.3237 55.8927 32.7484 56.847 33.166L55.4377 34.9184C53.0577 33.502 50.5984 32.2467 48.1425 30.982C45.5164 29.7045 42.8984 28.4084 40.1824 27.3105C40.1123 27.2834 40.0346 27.2834 39.9645 27.3105C39.8944 27.3376 39.8369 27.3898 39.8032 27.457C39.7696 27.5242 39.7622 27.6015 39.7824 27.6739C39.8027 27.7462 39.8492 27.8084 39.9129 27.8484C42.4352 29.3255 45.0051 30.7197 47.6187 32.0285C50.0485 33.2423 52.5144 34.3822 55.013 35.4469L52.5934 38.4499C52.004 38.0298 51.3984 37.6328 50.778 37.2599C49.434 36.4651 48.0689 35.7065 46.6842 34.9849C44.7965 34.0119 42.9077 33.0424 40.9302 32.2292C40.8229 32.1849 40.698 32.2094 40.6304 32.2887C40.5499 32.3832 40.5639 32.5104 40.6444 32.571C41.8274 33.4647 43.6392 34.5987 45.577 35.6732C45.8839 35.8435 46.1942 36.008 46.5057 36.1737C47.7158 36.8147 48.9387 37.4312 50.1737 38.0229C50.8889 38.367 51.5585 38.6727 52.1909 38.9469L49.7992 41.909C49.4907 41.6414 49.1674 41.3914 48.8309 41.16C47.9699 40.5639 46.9922 39.9899 46.2455 39.543C46.0962 39.4532 45.9679 39.3739 45.8629 39.3144C44.4862 38.5257 43.0979 37.7592 41.6197 37.1339C41.5404 37.1 41.4494 37.0965 41.391 37.1292C41.3175 37.1712 41.3012 37.2435 41.3175 37.2797C41.552 37.7954 42.9835 38.8734 44.6472 39.8965C45.7635 40.564 46.8991 41.1986 48.0527 41.7994C48.5369 42.0537 48.9779 42.2742 49.3617 42.4527L47.1357 45.206C47.0914 45.1664 47.0494 45.1267 47.0027 45.087C46.291 44.4734 45.3367 43.8235 45.1617 43.6695C44.233 43.0629 43.3149 42.4399 42.2707 41.9977C41.2405 42.0385 42.3722 43.092 43.8352 44.1467C44.5667 44.674 45.381 45.2014 46.0484 45.6015C46.2374 45.7147 46.41 45.815 46.571 45.9049C41.279 52.4499 35.5787 59.486 31.4732 64.5505L38.1757 43.449C38.4989 42.413 38.9107 41.1869 39.1989 40.1252C39.5384 38.7182 38.2889 37.2599 36.8737 37.3392C36.596 37.3322 35.903 37.3509 35.6125 37.3415L28.8844 37.352C28.4399 37.3275 21.3664 37.4069 21.2229 37.352C21.2229 37.352 21.217 37.345 21.2182 37.3275L21.2999 36.925L21.8295 34.3222C23.0137 34.4984 24.0415 33.6502 25.1324 32.8067C25.9665 32.186 26.6677 32.4264 27.6419 32.5757C29.988 33.117 31.0275 32.018 31.7625 29.9285C32.3319 27.9639 34.6104 28.476 35.8307 27.0247C36.5435 26.2547 36.477 24.92 36.3464 24.1034C36.2414 23.1864 36.0465 22.5505 36.6252 21.8622C37.3182 20.9125 38.3005 20.16 38.374 18.6667C38.3635 17.7684 37.9575 17.1174 37.632 16.639L36.7127 15.4082C36.1935 14.7152 36.4362 14.1634 36.5599 13.2604C36.7372 12.425 36.8037 10.9527 36.0489 10.1255C35.2089 9.03353 33.5324 8.86203 32.6445 8.18653C32.1475 7.60903 31.9539 6.51703 31.4265 5.6957C31.08 5.0412 30.2692 4.36803 29.498 4.2572C29.1273 4.1916 28.7494 4.17591 28.3745 4.21053L28.4597 3.7847C28.5449 3.43936 28.6814 2.5282 28.7817 2.21903C28.7945 2.19458 28.8126 2.17324 28.8346 2.15651C28.8565 2.13978 28.8819 2.12807 28.9089 2.1222L29.8037 2.10236C36.0302 1.9542 49.1774 1.81303 55.5427 1.75703C55.8729 1.76053 56.1482 2.12336 56.0712 2.4652C54.9139 5.80653 52.577 12.0715 51.366 15.449L50.0057 19.1765C49.8704 19.5359 49.2824 21.175 49.1552 21.5064C48.6407 22.603 49.6359 23.9575 50.8084 23.8129L52.6365 23.807C53.8839 24.759 55.1803 25.6449 56.5204 26.4612C57.2423 26.8991 57.9764 27.3165 58.7219 27.713C59.3075 28.0245 59.906 28.3127 60.5069 28.5985L59.0835 30.3754C58.6121 30.0059 58.1206 29.6627 57.6112 29.3475C56.468 28.6375 55.3076 27.9555 54.131 27.3024C53.2191 26.7979 52.2981 26.3102 51.3684 25.8394C50.4507 25.3642 49.5156 24.9237 48.5649 24.5187C48.5145 24.4973 48.4615 24.4824 48.4074 24.4744C48.3558 24.4666 48.3031 24.4733 48.2552 24.4937C48.2072 24.5141 48.1658 24.5474 48.1355 24.5899C48.1025 24.635 48.0842 24.6893 48.0832 24.7453C48.0821 24.8012 48.0984 24.8562 48.1297 24.9025C48.1745 24.9676 48.2306 25.0241 48.2954 25.0694C49.9767 26.2245 51.7128 27.298 53.4975 28.2859L53.6025 28.3442C54.5108 28.8495 55.4304 29.3342 56.3605 29.7979C57.1224 30.1782 57.8982 30.534 58.6752 30.8864L58.3847 31.248L57.2484 32.6655L57.253 32.662ZM63.3512 25.053L60.9572 28.0397C60.6311 27.76 60.2891 27.4994 59.9329 27.2592C58.7744 26.4612 57.3277 25.627 57.1317 25.4579C56.4014 25.0344 55.6745 24.6074 54.9337 24.2025C54.6805 24.0637 54.4239 23.933 54.1684 23.8C56.728 23.793 59.4744 23.7884 61.7237 23.7954C61.9325 23.807 62.9382 23.7732 63.0922 23.8257C63.616 23.9902 63.8039 24.6167 63.3512 25.053Z" />
                                <path
                                    d="M20.878 14.0001C21.1265 9.52474 14.3983 9.60757 14.6083 14.0001C14.9105 17.7567 20.5817 17.8256 20.878 14.0001ZM18.7885 14.0001C19.0627 16.4186 15.5592 16.3766 15.7248 14.0001C16.0935 12.0634 18.4012 12.3866 18.7885 14.0001ZM23.9417 23.3334C24.2438 27.0901 29.915 27.1589 30.2113 23.3334C30.4598 18.8581 23.7317 18.9409 23.9417 23.3334ZM28.123 23.3334C28.3972 25.7519 24.8937 25.7099 25.0593 23.3334C25.428 21.3967 27.7357 21.7199 28.123 23.3334ZM27.3285 12.1614L15.509 23.6752C14.4065 24.7626 16.0772 26.4227 17.1587 25.3249L28.6725 13.5054C29.5277 12.6211 28.2058 11.3097 27.3285 12.1614Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Competitive Pricing</h6>
                            <p>we're committed to offering competitive pricing without compromising on quality or
                                service.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card three">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                <path
                                    d="M7.93843 51.3252C12.6831 53.68 5.85265 67.3267 12.9084 67.6647C75.927 66.7022 62.2114 79.3328 63.2231 16.2584C63.2406 13.9156 60.9842 12.6644 58.8459 12.9772C59.5798 8.84501 55.3722 8.22704 52.2834 8.6022C54.0936 -0.339209 39.5347 -0.33374 41.3459 8.6022H38.0647C39.8748 -0.339209 25.3159 -0.33374 27.1272 8.6022H23.8459C25.6561 -0.339209 11.0972 -0.33374 12.9084 8.6022C10.3972 8.47532 6.29125 8.33095 6.34593 11.8834C6.93656 13.7144 4.78296 51.5155 7.93843 51.3252ZM61.0662 16.7309C61.1406 17.6692 61.1358 18.6121 61.052 19.5495C60.1803 19.3308 59.4989 20.115 58.8459 20.5733V19.4292C61.3933 19.3702 61.8428 16.3995 58.8459 17.9308V17.5786C59.6577 17.5412 60.4361 17.2441 61.0662 16.7309ZM58.8459 21.5752C59.6078 21.5006 60.3403 21.2428 60.9809 20.8238C60.954 21.1259 60.972 21.4304 61.0345 21.7272H58.847L58.8459 21.5752ZM59.9397 15.1658C60.1215 15.15 60.3036 15.1937 60.4585 15.2904C60.6133 15.3871 60.7326 15.5314 60.7983 15.7017C60.0917 15.5158 59.4092 16.137 58.847 16.5002V15.1658H59.9397ZM58.8459 23.9158H61.0334C60.433 82.3045 70.2953 62.3064 12.9073 65.4794C10.6837 65.8064 12.2686 56.1431 11.8158 55.2113C14.0656 56.8202 18.527 63.5183 21.6595 63.2908C69.3623 63.2263 57.7478 69.9517 58.847 23.9158H58.8459ZM15.0959 50.1658H21.6584V56.7283H19.4709C19.8898 53.7194 18.6572 50.1199 15.0959 50.1658ZM17.2834 57.5869L12.0498 52.3522C16.7716 51.9158 17.6586 52.9319 17.2845 57.5869H17.2834ZM43.5334 6.4147C43.5334 3.7536 47.203 3.96907 48.9584 4.45142C44.0803 6.66626 45.7231 8.9172 49.9811 6.01329C50.0705 6.42552 50.1217 6.8451 50.1342 7.26673C47.5573 7.91204 46.5467 10.5064 50.1211 8.7411C50.1025 9.18517 50.0806 9.61282 50.073 9.99017C48.8447 10.3325 48.3087 11.8638 50.0456 11.3169C49.6847 13.1314 47.2566 13.0669 45.7209 12.9772C42.5797 13.0559 43.7358 8.25985 43.5334 6.4147ZM29.3147 6.4147C29.2862 3.72517 33.4578 3.77657 35.07 4.67782C30.882 5.99579 31.8719 8.96532 35.7481 5.95751C35.8546 6.42791 35.9122 6.90807 35.9198 7.39032C35.4014 7.63751 34.6216 7.73923 34.4564 8.39439C32.4297 9.36892 33.3309 10.9789 35.1094 9.48814C35.3709 9.53698 35.6414 9.4941 35.875 9.36673C35.8608 9.72767 35.8487 10.0645 35.8542 10.3588C34.172 10.7459 32.8836 13.3491 35.5458 11.9972C34.7758 13.1106 32.8136 13.0538 31.5022 12.9772C28.3609 13.0559 29.517 8.25985 29.3147 6.4147ZM15.0959 6.4147C15.0281 3.69673 19.7553 3.58298 21.1127 4.96439C16.462 6.24954 17.3939 9.83923 21.6081 6.3272C21.6742 6.77182 21.7064 7.22082 21.7044 7.67032C18.9197 8.59126 18.1136 11.6428 21.677 8.90079C21.6573 9.34157 21.6387 9.75501 21.6355 10.1225C20.673 10.4025 19.8909 12.3013 21.4616 11.7642C20.8152 13.1183 18.6802 13.0581 17.2834 12.9783C14.1422 13.0559 15.2983 8.25985 15.0959 6.41579V6.4147ZM8.53343 11.8834C8.46015 10.0897 11.9481 10.9986 12.9084 10.7897C12.8264 16.8097 23.9291 16.8097 23.8459 10.7897H27.1272C27.0452 16.8097 38.1478 16.8097 38.0647 10.7897H41.3459C41.2639 16.8097 52.3666 16.8097 52.2834 10.7897C58.4544 9.91798 56.315 13.1763 56.6584 17.3522C40.9609 17.1127 24.1434 18.4853 8.53343 17.3522V11.8834ZM56.6584 19.5397C54.04 69.1303 70.4309 60.5663 21.6595 61.1022C21.0795 61.1019 20.5232 60.8713 20.1131 60.4612C19.7029 60.051 19.4723 59.4948 19.472 58.9147C25.4439 60.2808 23.5955 53.6024 23.847 50.1647C23.9947 46.5739 17.0177 48.3961 15.097 47.9772C14.517 47.9778 13.961 48.2084 13.5509 48.6185C13.1408 49.0286 12.9101 49.5847 12.9095 50.1647C11.235 50.2555 8.49734 50.3419 8.53453 47.9772V19.5397H56.6584Z" />
                                <path
                                    d="M12.9069 23.8962C13.3236 26.2576 11.7562 30.7529 14.1789 31.9309C17.1211 31.4945 23.1848 33.3987 23.9986 29.5181C23.759 26.8274 24.0751 21.0076 20.1551 21.4768C18.4872 21.8924 10.1594 20.6565 12.9069 23.8962ZM16.0634 23.5867C22.4509 22.4295 22.8622 23.159 22.0178 29.6023C19.7881 29.9834 17.5192 30.0812 15.265 29.8932C15.0615 27.8293 14.8964 25.8026 14.5781 23.7496C15.0747 23.672 15.5887 23.6402 16.0634 23.5867ZM27.9175 23.3449C28.0389 25.4449 26.2167 31.3293 29.0878 31.5699C32.03 30.5374 35.8384 32.2087 38.3573 30.6588C38.4361 27.5928 37.8716 24.5443 36.7003 21.7098C34.1562 20.6215 31.1003 21.9012 28.39 21.3838C28.1594 21.3882 27.9367 21.4688 27.7569 21.6132C27.577 21.7576 27.4501 21.9576 27.3961 22.1819C27.3421 22.4061 27.364 22.6419 27.4583 22.8524C27.5527 23.0628 27.7141 23.2361 27.9175 23.3449ZM30.5239 23.089C32.2941 22.8799 34.0745 22.7685 35.857 22.7554C36.1447 24.8434 36.218 26.9871 36.4323 29.0926C34.249 28.8701 32.047 28.9061 29.872 29.1998C29.8522 27.2215 29.6663 25.2484 29.3164 23.3012C29.7136 23.203 30.117 23.1321 30.5239 23.089ZM42.2248 29.716C41.5095 33.9488 49.4873 31.8576 51.9876 31.652C53.6469 29.8517 52.8933 22.5345 50.9125 21.176C42.344 19.7421 40.8215 21.2318 42.2248 29.716ZM44.6037 30.6151L44.6694 30.7288C44.6256 30.8459 44.6037 30.8021 44.6037 30.6151ZM43.989 23.1087C46.103 22.755 48.2493 22.6332 50.3897 22.7456C50.755 25.0922 50.861 27.472 50.7058 29.8418C48.6495 29.9435 46.6009 29.9862 44.5425 30.0529C44.2253 27.7254 43.6598 25.4482 43.498 23.101C43.6606 23.1298 43.8256 23.1324 43.989 23.1087ZM23.1815 34.5931C21.1745 34.1599 14.0105 33.3615 13.8595 36.0554C13.7906 38.1871 12.4355 44.9432 15.1753 45.3676C17.5052 44.9456 19.8633 44.6981 22.23 44.6271C25.6315 43.3343 25.4784 36.7992 23.1815 34.5931ZM22.4455 40.2259C22.3518 40.871 22.1931 41.5049 21.9719 42.1181C21.9762 42.1104 21.8537 42.3149 21.9172 42.2198C20.0687 42.8192 17.7762 42.3357 15.8239 42.9931C15.7034 40.9104 15.4785 38.8352 15.1501 36.7751C19.0308 36.3726 23.7251 34.2092 22.4455 40.2259ZM51.8389 33.4687C50.1086 33.3079 43.1326 32.5346 44.199 35.4834C42.7181 37.2246 43.4859 40.4326 43.2628 42.6606C43.6117 45.7493 47.5437 43.9917 49.5759 44.0999C51.2253 44.1185 53.2247 43.704 53.3155 41.7079C53.5069 39.1671 54.4617 34.9376 51.8389 33.4687ZM51.303 35.3718H51.3139C51.5326 35.351 51.327 35.4517 51.303 35.3718ZM45.505 42.4265C45.5148 42.4637 45.5422 42.421 45.505 42.4265V42.4265ZM51.397 38.9079C51.3481 39.8327 51.21 40.7506 50.9847 41.6488C49.1641 41.8531 47.3384 42.0074 45.5094 42.1115C45.307 40.0345 45.7117 37.7223 44.875 35.7896C46.9608 35.8334 49.1712 35.1892 51.2865 35.3729C51.4508 36.5438 51.4885 37.7291 51.397 38.9079ZM38.9589 48.0779C29.9748 45.8937 27.8289 47.9302 28.8275 56.9526C29.0025 61.0607 34.3575 59.081 36.9748 59.0985C39.3494 59.3501 40.0373 57.1801 39.7792 55.2059C39.3723 52.9451 41.0512 49.6277 38.9589 48.0779ZM30.9034 57.1342C30.9303 57.1308 30.9575 57.136 30.9812 57.1489C31.005 57.1619 31.0241 57.182 31.0358 57.2063C30.9947 57.1771 30.9502 57.1529 30.9034 57.1342ZM37.7033 56.9777C37.6289 57.027 37.6726 57.0784 37.7033 56.9777V56.9777ZM38.365 50.5695C38.2221 52.7076 38.0032 54.8399 37.7087 56.9624C35.5497 57.0346 33.2758 57.6843 31.1473 57.2763C31.1692 54.6312 30.9395 51.9899 30.4615 49.3882C32.2586 49.6912 38.6515 47.9401 38.365 50.5695ZM49.3867 47.4534C48.0983 47.7804 42.9489 46.8431 44.4331 49.2176C43.6325 51.8579 43.2814 56.3707 45.4503 58.3012C48.5521 58.7564 51.7135 58.5879 54.7494 57.8057C56.1056 52.991 56.5781 45.5688 49.3867 47.4534ZM53.6764 48.6598C54.523 50.9184 53.8536 54.0749 53.5889 56.5599C51.2308 56.1585 48.8344 56.887 46.4697 56.5052C45.8524 54.1521 45.553 51.7268 45.5794 49.2942C48.2656 49.1137 50.9934 48.2343 53.6764 48.6598ZM30.2067 34.6806C30.1995 34.7111 30.1955 34.7422 30.1947 34.7735L30.2067 34.6806ZM30.1936 34.7954C30.1888 34.8196 30.1852 34.8441 30.1826 34.8687L30.1936 34.7954Z" />
                                <path
                                    d="M27.5413 36.9599C28.4054 37.2453 31.2404 34.64 29.7474 34.0067C28.5552 33.8547 26.6412 35.9153 27.5413 36.9599ZM27.4166 41.0396C29.3996 42.7611 28.0729 39.3049 28.0882 38.2833C27.0207 36.8002 26.7505 40.4183 27.4166 41.0396ZM30.6804 42.6802C28.7488 40.8427 28.9194 43.7193 30.3982 44.4072C32.0727 45.7963 34.398 43.8024 31.5455 43.1089L31.7501 43.1964C31.3756 43.0635 31.0176 42.8904 30.6804 42.6802Z" />
                                <path
                                    d="M33.795 44.7878C35.3361 45.6256 39.406 43.0564 36.4682 42.3969C35.6347 42.8037 32.1489 43.6284 33.795 44.7878ZM40.3269 39.7303C39.1478 39.5564 38.5441 41.2911 38.0596 42.1158C38.6021 44.113 41.8866 40.613 40.3269 39.7303ZM33.9066 34.1533C37.551 35.2656 37.6264 32.2775 34.0674 32.3989C31.1175 32.225 30.703 34.0461 33.9066 34.1533Z" />
                                <path
                                    d="M37.7899 34.3283C37.8528 34.9919 38.0872 35.6278 38.4702 36.1734L38.3357 35.9984C38.5369 36.2916 38.7437 36.6645 39.1538 36.6317C37.756 37.755 36.6644 39.8364 35.3662 37.4083C33.0988 34.5722 33.7146 38.758 34.8685 39.8856C38.736 45.0044 49.7151 26.8427 39.9041 35.9427C40.2399 34.8981 38.5151 32.7675 37.7899 34.3283Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Fast Booking</h6>
                            <p>We've streamlined our booking system to ensure that you can secure your travel
                                arrangements with speed.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card three">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70">
                                <g clip-path="url(#clip0_1335_373)">
                                    <path
                                        d="M54.4993 61.413C54.3979 61.3243 54.2801 61.2565 54.1525 61.2134C54.0249 61.1703 53.8901 61.1528 53.7557 61.1618C53.6214 61.1708 53.4901 61.2061 53.3694 61.2659C53.2488 61.3256 53.141 61.4085 53.0524 61.5099L48.8249 66.3448C48.3771 66.8574 47.7556 67.1523 47.075 67.1753C46.3925 67.1996 45.7543 66.9461 45.2729 66.4653L42.0148 63.2085V61.0548C42.0148 60.4885 41.5558 60.0294 40.9894 60.0294C40.423 60.0294 39.964 60.4885 39.964 61.0548V68.9746C39.964 69.5409 40.423 70 40.9894 70C41.5558 70 42.0148 69.5409 42.0148 68.9746V66.1082L43.8233 67.9159C44.6625 68.7542 45.8108 69.2274 46.9942 69.2274C48.2802 69.2274 49.5231 68.6632 50.369 67.6945L54.5963 62.8599C54.685 62.7585 54.7528 62.6406 54.7959 62.5131C54.839 62.3855 54.8565 62.2507 54.8475 62.1163C54.8385 61.982 54.8031 61.8507 54.7433 61.73C54.6836 61.6093 54.6007 61.5016 54.4993 61.413ZM11.9144 60.0294C11.6424 60.0294 11.3816 60.1374 11.1893 60.3297C10.997 60.522 10.889 60.7828 10.889 61.0548V68.9746C10.889 69.5409 11.348 70 11.9144 70C12.4808 70 12.9398 69.5409 12.9398 68.9746V61.0548C12.9398 60.7828 12.8317 60.522 12.6394 60.3297C12.4471 60.1374 12.1863 60.0294 11.9144 60.0294ZM68.7023 16.2561L61.8293 10.6717C61.3539 10.2856 60.7153 10.2091 60.1622 10.4724C59.6091 10.7356 59.2656 11.2796 59.2656 11.8921V25.0719C59.2656 25.0738 59.266 25.0756 59.266 25.0775V41.7088L48.9415 53.4838L45.6708 47.3773C44.1097 44.4607 41.2284 42.3994 37.9627 41.8631C36.616 41.6421 33.4727 41.1281 32.34 40.9418C31.9316 40.876 31.5601 40.6666 31.2922 40.3513C31.0243 40.0361 30.8777 39.6356 30.8788 39.2219V38.0101C31.6873 37.5012 32.4364 36.9034 33.1121 36.228C35.516 33.8226 36.8399 30.6257 36.8399 27.2262V26.7805H37.235C39.2637 26.7898 40.9893 25.0645 40.9893 23.0262C40.9893 21.9447 40.5143 20.9396 39.744 20.2412C40.3401 19.391 40.5091 18.2737 40.1699 17.2927C40.024 16.8727 39.7935 16.487 39.4926 16.1595C39.1918 15.8319 38.8271 15.5696 38.4209 15.3885C38.3133 15.3407 38.2046 15.2947 38.0963 15.248V7.8668C38.0963 3.52912 34.5672 0 30.2295 0H17.9945C13.6569 0 10.1277 3.52912 10.1277 7.8668V15.248C10.0197 15.2947 9.91146 15.3407 9.80386 15.3884C9.39763 15.5695 9.03284 15.8319 8.73199 16.1594C8.43114 16.487 8.20062 16.8727 8.05468 17.2929C7.7111 18.2865 7.87982 19.3866 8.47864 20.2424C7.70905 20.9403 7.23478 21.9447 7.23478 23.0262C7.23478 25.059 8.94048 26.7921 10.9904 26.7805H11.3856V27.2262C11.3856 31.7607 13.7683 35.7484 17.3466 38.0043V39.4311C17.347 39.8132 17.2192 40.1845 16.9835 40.4853C16.7479 40.7862 16.4181 40.9993 16.047 41.0905L7.53214 43.1905C5.52758 43.6816 3.74605 44.8317 2.47334 46.4564C1.20063 48.0811 0.51051 50.0862 0.513683 52.15V68.9746C0.513683 69.5409 0.972648 70 1.53907 70C2.1055 70 2.56446 69.5409 2.56446 68.9746V52.15C2.56199 50.5448 3.09874 48.9854 4.08859 47.7218C5.07845 46.4582 6.46404 45.5636 8.0231 45.1817L14.6187 43.5552C16.6578 46.8254 20.2252 48.8255 24.1123 48.8255C28.1455 48.8255 31.7863 46.7106 33.7884 43.2573L37.6308 43.8869C40.2709 44.3204 42.6006 45.987 43.8628 48.3453L47.1724 54.5241C47.3243 54.8082 47.5428 55.0512 47.8092 55.2323C48.0756 55.4133 48.382 55.5271 48.702 55.5639C49.0224 55.6007 49.3469 55.5592 49.6478 55.4431C49.9487 55.327 50.2169 55.1397 50.4296 54.8972L57.4521 46.888L61.9127 51.3502C61.9169 51.3543 61.9215 51.3578 61.9257 51.362L56.2076 57.9016C56.0324 58.1069 55.9452 58.3729 55.9648 58.6421C55.9845 58.9112 56.1095 59.1618 56.3126 59.3394C56.5158 59.517 56.7807 59.6074 57.0501 59.591C57.3195 59.5745 57.5715 59.4526 57.7515 59.2516L67.176 48.4732C69.1049 46.2852 68.7667 42.786 66.5081 40.9805C64.9908 39.7675 63.0039 39.5363 61.3166 40.2164V25.5596L68.7023 19.5587C68.9483 19.3596 69.1466 19.1079 69.2826 18.8221C69.4186 18.5364 69.4889 18.2238 69.4883 17.9073C69.4883 17.2638 69.2017 16.6619 68.7023 16.2561ZM38.9385 23.0262C38.9385 23.9504 38.1599 24.7343 37.235 24.7297H36.8399V21.618C37.2258 21.6455 37.6136 21.6042 37.9851 21.496C38.558 21.7786 38.9385 22.3722 38.9385 23.0262ZM11.3856 24.7297H10.9904C10.0602 24.7345 9.28556 23.9516 9.28556 23.0262C9.28556 22.3728 9.66509 21.7803 10.2364 21.4981C10.6092 21.6065 10.9982 21.6479 11.3854 21.6204L11.3856 24.7297ZM11.6394 19.4756C11.052 19.736 10.3715 19.4812 10.0658 18.9115C9.7437 18.3113 10.0139 17.5391 10.6359 17.2629C16.2692 14.7617 22.4875 13.878 28.5945 14.7108C29.1546 14.7864 29.6724 14.3942 29.7487 13.8331C29.7668 13.6996 29.7585 13.5639 29.7242 13.4337C29.6899 13.3035 29.6303 13.1813 29.5488 13.0741C29.4673 12.9669 29.3655 12.8768 29.2491 12.809C29.1328 12.7411 29.0042 12.6969 28.8708 12.6788C23.2463 11.9122 17.5198 12.5152 12.1784 14.4367V7.8668C12.1784 4.65979 14.7874 2.05078 17.9944 2.05078H30.2295C33.4365 2.05078 36.0455 4.65979 36.0455 7.8668V14.4363C35.262 14.1544 34.4687 13.9003 33.6672 13.6746C33.4059 13.6027 33.1269 13.6371 32.8909 13.7703C32.655 13.9035 32.4814 14.1247 32.408 14.3855C32.3346 14.6463 32.3674 14.9255 32.4993 15.1622C32.6311 15.3989 32.8513 15.5738 33.1117 15.6487C34.6406 16.0794 36.1367 16.6188 37.5887 17.2628C38.2055 17.5366 38.4773 18.3095 38.161 18.9072C37.8607 19.4744 37.1868 19.7421 36.585 19.4755C28.9331 16.087 19.3932 16.0379 11.6394 19.4756ZM13.4363 27.2262V20.946C20.278 18.2097 27.9479 18.2098 34.7892 20.9464V27.2262C34.7892 30.0781 33.6785 32.7603 31.6618 34.7782C29.6614 36.7799 26.9666 37.9065 24.1128 37.9065C18.2257 37.9066 13.4363 33.1153 13.4363 27.2262ZM24.1123 46.7748C21.1644 46.7748 18.4417 45.3651 16.7339 43.0244C18.4057 42.5052 19.565 40.833 19.3973 39.0511C20.8968 39.6514 22.4975 39.959 24.1127 39.9574C25.7546 39.9574 27.3476 39.6458 28.828 39.0555C28.723 40.822 29.9402 42.4175 31.6016 42.8751C29.9062 45.3094 27.1453 46.7748 24.1123 46.7748ZM65.2272 42.5817C66.6013 43.6801 66.8041 45.7964 65.632 47.1233L63.2783 49.8151L58.8073 45.3426L60.8902 42.9671C61.4239 42.356 62.173 41.9747 62.9812 41.9029C63.7894 41.831 64.5941 42.0743 65.2272 42.5817ZM67.4091 17.967L61.3166 22.9172L61.3162 12.8974L67.4089 17.8478C67.44 17.8671 67.4408 17.9471 67.4091 17.967ZM29.7581 26.4495C30.03 26.4495 30.2909 26.3414 30.4832 26.1491C30.6755 25.9568 30.7835 25.696 30.7835 25.4241V23.1649C30.7835 22.5987 30.3245 22.1396 29.7581 22.1396C29.1917 22.1396 28.7327 22.5987 28.7327 23.1649V25.4241C28.7327 25.696 28.8407 25.9568 29.033 26.1491C29.2253 26.3414 29.4861 26.4495 29.7581 26.4495ZM18.4665 22.1397C18.1945 22.1397 17.9337 22.2477 17.7414 22.44C17.5491 22.6323 17.4411 22.8931 17.4411 23.1651V25.4242C17.4411 25.9905 17.9001 26.4496 18.4665 26.4496C19.0329 26.4496 19.4919 25.9905 19.4919 25.4242V23.1651C19.4919 22.8931 19.3839 22.6323 19.1916 22.44C18.9993 22.2477 18.7384 22.1397 18.4665 22.1397ZM27.2695 31.5488C27.1387 31.3104 26.9185 31.1337 26.6575 31.0576C26.3964 30.9815 26.1158 31.0123 25.8773 31.143C25.3245 31.4449 24.7038 31.6008 24.0739 31.596C23.4699 31.5889 22.8769 31.4333 22.3473 31.143C22.1091 31.0157 21.8303 30.9874 21.5714 31.0643C21.3126 31.1412 21.0945 31.3172 20.9645 31.554C20.8346 31.7907 20.8033 32.0692 20.8775 32.3289C20.9516 32.5886 21.1252 32.8085 21.3606 32.941C21.9348 33.2562 22.8679 33.6343 24.0524 33.6468C25.2491 33.6592 26.2722 33.2656 26.8638 32.9412C27.1022 32.8103 27.2789 32.5901 27.355 32.329C27.4311 32.0679 27.4004 31.7873 27.2695 31.5488Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Guided Tours</h6>
                            <p>Experience the world like never before with Xpress Tourism's immersive guided tours.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70">
                                <g clip-path="url(#clip0_1335_400)">
                                    <path
                                        d="M67.276 47.5101C64.9528 45.2928 62.1063 49.3728 55.5442 51.8647C50.2253 53.8906 49.1313 53.9912 46.3561 54.4485C44.2405 54.7944 38.581 55.7242 35.9324 55.2744C38.5248 53.7263 40.8589 51.508 42.9053 49.2485C46.2761 45.5934 47.554 44.8193 47.7377 42.895C47.9248 41.0961 46.8307 39.4194 44.7961 38.9696C40.1832 37.8972 36.7983 42.7026 34.1432 44.6204C32.3508 45.9199 29.807 45.615 28.074 45.7696V45.7674C24.047 46.0096 21.5368 48.068 17.7444 48.8669C17.5984 48.2193 17.4546 47.5718 17.2795 46.9285C16.8298 45.2528 15.1833 44.0723 13.4287 44.1728C9.29249 44.3566 9.93249 44.7101 6.58332 44.8464C4.63197 44.9274 2.94549 44.9977 2.22333 45.8636C2.09343 46.0182 1.99823 46.1989 1.94414 46.3934C1.89005 46.5879 1.87835 46.7918 1.90982 46.9912C2.76928 53.1133 2.30441 57.4885 3.04387 61.949C3.07986 62.1602 3.198 62.3486 3.37249 62.473C3.54698 62.5974 3.76362 62.6477 3.97506 62.6128C4.18649 62.578 4.37553 62.4608 4.50085 62.287C4.62618 62.1132 4.67759 61.8968 4.64386 61.6852C3.99846 57.789 4.33035 52.629 3.52711 46.8593C4.2417 46.4118 7.66223 46.5426 9.11195 46.2626C10.3401 46.0247 11.8168 45.8669 13.5011 45.7923C14.4979 45.7674 15.4644 46.4193 15.7163 47.3512C17.4633 53.8106 17.6946 60.5079 16.3952 66.7706C13.5454 66.6138 10.7455 66.336 7.88169 66.2019C7.48277 66.1738 7.05466 66.5263 7.03304 66.9738C7.02306 67.1886 7.09877 67.3985 7.24351 67.5574C7.38826 67.7164 7.5902 67.8113 7.80493 67.8214L7.84818 67.8236L9.14979 69.056C10.2719 70.1198 11.2687 70.0008 17.766 69.9922C18.5281 69.9922 19.1357 69.469 19.1757 68.7511C19.2665 67.0917 19.3379 65.389 19.4362 63.7457C27.5378 67.8571 36.2567 69.4592 44.3096 68.3003C52.4772 67.1252 59.9312 63.1187 65.5452 56.8885C66.4274 55.9101 67.2793 54.8517 67.7431 53.5069C68.0371 52.655 68.2663 51.3404 67.9614 50.2863C68.2847 49.1209 67.9993 48.202 67.276 47.5101ZM26.0578 47.6982C29.2394 46.8982 31.7065 47.9707 34.8286 46.1026C37.2654 44.6647 38.9216 41.6777 42.1561 40.6431C42.2642 40.6431 44.7691 39.9231 45.7475 41.3404C45.7723 41.3761 45.8405 41.4572 45.8707 41.4896C46.6253 43.6366 45.8513 43.6626 41.7443 48.1166C41.6902 48.1653 41.6621 48.2031 41.6707 48.2031H41.6729C41.0491 48.6809 38.3075 52.2615 34.3346 54.349C34.2621 54.3879 34.2059 54.4442 34.1508 54.5004C33.4146 54.4409 32.9983 55.3036 33.4805 55.8441C35.1735 57.7458 41.1507 56.9469 46.6199 56.0474C47.9204 55.7296 48.9356 56.1144 56.1215 53.3815C61.1582 51.468 66.449 46.7501 66.4782 49.3988C66.4944 50.988 63.7398 53.3912 62.5961 54.5101C59.7442 57.2236 56.7204 59.2906 53.288 60.9976C41.9767 66.5349 31.0989 63.9836 18.8016 60.3349C18.928 57.0245 18.6814 53.7103 18.0665 50.455C20.8254 49.8755 23.7238 48.3469 26.0578 47.6982Z" />
                                    <path
                                        d="M12.4165 51.1956C14.4803 51.7026 15.4965 49.2173 14.0209 47.9935C13.9348 47.9206 13.8341 47.8668 13.7256 47.8359C13.6171 47.8049 13.5033 47.7975 13.3917 47.814C12.9679 47.6043 12.4857 47.5524 12.0652 47.6854C10.3993 48.2 10.4403 50.7124 12.4165 51.1956ZM29.7149 24.7179C30.0662 24.7179 30.4132 24.6336 30.7332 24.4887L33.9689 27.7341L33.9256 27.7384C33.7115 27.7559 33.513 27.8578 33.3739 28.0216C33.2348 28.1854 33.1665 28.3978 33.184 28.6119C33.2015 28.8261 33.3034 29.0246 33.4672 29.1637C33.631 29.3027 33.8434 29.371 34.0575 29.3535L36.091 29.186C36.3019 29.1688 36.4978 29.0699 36.6368 28.9103C36.7757 28.7508 36.8468 28.5432 36.8348 28.3319L36.7202 26.3471C36.7066 26.1328 36.6091 25.9326 36.4488 25.7897C36.2885 25.6468 36.0784 25.5729 35.864 25.5838C35.6493 25.5964 35.4484 25.6936 35.3053 25.8541C35.1622 26.0146 35.0887 26.2254 35.1008 26.44L35.1094 26.5806L31.8878 23.3514C32.0567 23.0059 32.143 22.6259 32.14 22.2413C32.137 21.8567 32.0447 21.4781 31.8705 21.1352L35.8208 17.052L35.8229 17.1395C35.828 17.3512 35.9157 17.5525 36.0672 17.7003C36.2187 17.8482 36.422 17.931 36.6337 17.9309H36.6543C36.7608 17.9282 36.8657 17.9046 36.963 17.8614C37.0604 17.8182 37.1483 17.7562 37.2217 17.679C37.2951 17.6018 37.3525 17.5109 37.3908 17.4114C37.429 17.312 37.4473 17.206 37.4445 17.0995L37.3927 15.0596C37.3873 14.8481 37.2995 14.6471 37.148 14.4995C36.9966 14.3518 36.7934 14.2692 36.5819 14.2693H34.5938C34.3787 14.2693 34.1725 14.3547 34.0204 14.5068C33.8684 14.6588 33.7829 14.8651 33.7829 15.0801C33.7829 15.2951 33.8684 15.5014 34.0204 15.6534C34.1725 15.8055 34.3787 15.8909 34.5938 15.8909H34.6878L30.7008 20.013C30.2017 19.8034 29.6454 19.7736 29.1267 19.9287C28.6121 20.0739 28.158 20.3812 27.832 20.805C27.5059 21.2288 27.3253 21.7465 27.317 22.2811C27.2976 23.5222 28.3257 24.7179 29.7149 24.7179Z" />
                                    <path
                                        d="M33.7466 5.703C32.2005 5.44255 30.6267 5.38947 29.0666 5.54516C24.8309 5.70516 21.0558 7.4511 17.8461 10.7408C16.411 12.2099 15.2614 13.9328 14.4558 15.8219C13.75 17.4938 13.3252 19.2709 13.1985 21.0813C12.9012 25.1862 14.1066 29.0726 16.6861 32.318C17.2143 32.9734 17.7922 33.5871 18.4147 34.1537C19.5974 35.9256 21.3899 37.3656 23.3412 38.292C33.0839 42.9169 45.0233 36.9158 47.086 25.7516C48.02 20.6975 46.6189 15.2867 43.4352 11.2327C40.9746 8.0965 37.6979 6.35921 33.7466 5.703ZM14.8115 23.0835H17.1099C17.3249 23.0835 17.5311 22.998 17.6832 22.846C17.8353 22.6939 17.9207 22.4877 17.9207 22.2727C17.9207 22.0576 17.8353 21.8514 17.6832 21.6993C17.5311 21.5473 17.3249 21.4618 17.1099 21.4618H14.8083C14.8137 21.3732 14.8083 21.2856 14.8158 21.1959C14.9315 19.5581 15.3131 17.9624 15.9477 16.4554C16.6092 14.9177 17.5247 13.5023 18.6558 12.2684L19.7001 13.3116C19.7744 13.3913 19.8639 13.4552 19.9633 13.4995C20.0628 13.5438 20.1702 13.5676 20.279 13.5695C20.3879 13.5715 20.496 13.5514 20.597 13.5107C20.6979 13.4699 20.7897 13.4092 20.8667 13.3322C20.9436 13.2552 21.0043 13.1635 21.0451 13.0625C21.0859 12.9616 21.1059 12.8534 21.104 12.7446C21.1021 12.6357 21.0783 12.5283 21.0339 12.4289C20.9896 12.3294 20.9257 12.2399 20.8461 12.1657L19.8028 11.1214C22.4807 8.68136 25.5444 7.35488 28.9325 7.18191V9.11703C28.9325 9.33207 29.018 9.53831 29.17 9.69036C29.3221 9.84242 29.5283 9.92784 29.7433 9.92784C29.9584 9.92784 30.1646 9.84242 30.3167 9.69036C30.4687 9.53831 30.5541 9.33207 30.5541 9.11703V7.22083C31.0482 7.26948 31.5174 7.33002 31.9563 7.42083C34.8374 7.97434 37.5433 9.38082 39.6795 11.3495L39.1465 11.8813C39.0691 11.9562 39.0074 12.0457 38.965 12.1446C38.9225 12.2436 38.9002 12.35 38.8993 12.4576C38.8984 12.5653 38.919 12.672 38.9598 12.7717C39.0006 12.8713 39.0609 12.9618 39.137 13.0379C39.2132 13.114 39.3038 13.1741 39.4034 13.2149C39.5031 13.2556 39.6099 13.276 39.7175 13.2751C39.8252 13.2741 39.9316 13.2517 40.0305 13.2091C40.1294 13.1666 40.2188 13.1048 40.2936 13.0273L40.8092 12.5127C41.5958 13.3997 42.2704 14.38 42.8179 15.4316C43.7811 17.2802 44.313 19.3559 44.4341 21.4618H42.9044C42.6893 21.4618 42.4831 21.5473 42.331 21.6993C42.179 21.8514 42.0936 22.0576 42.0936 22.2727C42.0936 22.4877 42.179 22.6939 42.331 22.846C42.4831 22.998 42.6893 23.0835 42.9044 23.0835H44.4525C44.3368 25.7397 43.5638 28.3634 42.1498 30.5645C41.6806 31.2867 41.1249 31.9645 40.5206 32.6045L39.7292 31.8132C39.655 31.7335 39.5655 31.6696 39.466 31.6253C39.3666 31.581 39.2592 31.5571 39.1503 31.5552C39.0415 31.5533 38.9333 31.5733 38.8324 31.6141C38.7314 31.6549 38.6397 31.7156 38.5627 31.7926C38.4857 31.8696 38.425 31.9613 38.3842 32.0622C38.3435 32.1632 38.3234 32.2713 38.3254 32.3802C38.3273 32.4891 38.3511 32.5964 38.3954 32.6959C38.4397 32.7954 38.5036 32.8849 38.5833 32.9591L39.3465 33.7234C36.6828 36.0023 33.6763 37.1007 30.5541 37.2088V35.9072C30.5541 34.8337 28.9325 34.8337 28.9325 35.9072V37.1796C25.4342 36.9072 22.1974 35.3634 19.7434 33.1818L22.165 31.4251C22.3392 31.2988 22.456 31.1084 22.4899 30.896C22.5238 30.6835 22.4718 30.4663 22.3455 30.2921C22.2192 30.1179 22.0289 30.001 21.8164 29.9672C21.604 29.9333 21.3867 29.9852 21.2126 30.1115L18.6526 31.9678C18.6277 31.9861 18.6136 32.0142 18.5909 32.0348C18.3747 31.7969 18.1553 31.5602 17.9564 31.3105C16.0342 28.891 14.9737 26.0759 14.8115 23.0835Z" />
                                    <path
                                        d="M10.0051 16.051C10.2091 16.1187 10.4317 16.1027 10.6239 16.0064C10.816 15.9101 10.9621 15.7414 11.03 15.5375C13.5867 7.85317 21.3143 2.00887 29.405 1.64238C37.2688 1.29644 45.2936 6.14831 48.6969 13.2683L48.0547 13.6704C47.2266 14.1894 47.3304 15.4142 48.2223 15.7958C49.1444 16.1893 50.4677 17.0164 51.0785 17.3439C51.1792 17.3976 51.2902 17.4294 51.4041 17.4372C51.518 17.4451 51.6323 17.4287 51.7394 17.3893C51.8466 17.3499 51.9442 17.2884 52.0259 17.2086C52.1076 17.1289 52.1716 17.0328 52.2136 16.9266C52.6579 15.8023 52.5055 14.3504 52.6352 13.0942C52.739 12.0942 51.6536 11.4175 50.805 11.9483L50.0796 12.4023C46.325 4.6921 37.9574 -0.394368 29.3305 0.0240085C20.4548 0.425088 12.2959 6.59371 9.49054 15.0261C9.42279 15.2301 9.43883 15.4527 9.53512 15.6448C9.63142 15.837 9.80008 15.9831 10.004 16.051H10.0051ZM49.2374 20.3472C49.0071 20.8542 48.9996 21.4131 49.2158 21.8823C49.6633 22.8542 51.1401 22.1796 50.6882 21.2034C50.6741 21.1709 50.6752 21.0996 50.7141 21.0153C50.9498 20.4899 51.952 20.8185 52.0363 22.5363C52.1304 24.4639 51.1347 26.4034 49.5606 27.3666C49.3876 27.4713 49.26 27.637 49.2028 27.831C49.1456 28.025 49.163 28.2334 49.2515 28.4152C49.3401 28.5971 49.4934 28.7393 49.6814 28.8139C49.8694 28.8885 50.0785 28.8901 50.2677 28.8185C51.6542 28.3013 53.1446 28.1245 54.6136 28.3028C54.8262 28.3262 55.0396 28.2658 55.2083 28.1344C55.3771 28.003 55.488 27.8109 55.5174 27.599C55.544 27.3857 55.4848 27.1706 55.3528 27.0009C55.2208 26.8312 55.0269 26.7209 54.8136 26.6942C54.0495 26.5994 53.2775 26.5874 52.5109 26.6585C53.3001 25.4271 53.7282 23.9374 53.6568 22.4574C53.4774 18.8142 50.1498 18.3212 49.2374 20.3472ZM56.8957 25.0985C57.6438 24.7807 58.5909 24.4315 59.5768 24.2834C59.5076 25.1947 59.4038 26.1039 59.2471 27.0034C59.0601 28.0606 60.659 28.3396 60.8438 27.2844C61.2438 24.9947 61.3768 22.6553 61.2363 20.331C61.2151 20.1223 61.114 19.9298 60.9542 19.794C60.7943 19.6582 60.5881 19.5895 60.3787 19.6024C60.1694 19.6153 59.9731 19.7087 59.8311 19.863C59.689 20.0174 59.6122 20.2207 59.6168 20.4304C59.6611 21.1645 59.6665 21.8996 59.6536 22.6336C58.8566 22.7283 58.0734 22.9151 57.3195 23.1904L57.0903 19.4737C57.0211 18.3818 55.406 18.5158 55.4709 19.5731L55.7682 24.4023C55.7766 24.5317 55.8158 24.6573 55.8827 24.7684C55.9495 24.8796 56.042 24.9732 56.1523 25.0413C56.2627 25.1095 56.3878 25.1502 56.5171 25.1602C56.6464 25.1701 56.7762 25.149 56.8957 25.0985Z" />
                                </g>
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Best Support 24/7</h6>
                            <p>We understand that travel doesn't always adhere to a schedule. That's why we offer the
                                best support 24*7.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-card two">
                        <div class="feature-card-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 70 70">
                                <path
                                    d="M12.2181 42.5833C12.0897 42.5833 11.9648 42.541 11.863 42.4628C11.7611 42.3846 11.6879 42.275 11.6546 42.151C11.6214 42.027 11.63 41.8954 11.6792 41.7768C11.7283 41.6582 11.8152 41.5591 11.9264 41.4949L32.1156 29.8375C32.2464 29.763 32.4009 29.7419 32.5469 29.7787C32.6929 29.8155 32.819 29.9073 32.8989 30.0349C32.9788 30.1625 33.0062 30.3161 32.9754 30.4635C32.9447 30.6109 32.8581 30.7406 32.7339 30.8257L28.4172 33.7423C28.5124 33.7368 28.6073 33.7566 28.6923 33.7996C28.7774 33.8427 28.8495 33.9074 28.9014 33.9873C28.9856 34.1056 29.0227 34.2509 29.0054 34.3951C28.9882 34.5392 28.9178 34.6717 28.8081 34.7667L22.8242 39.9408C22.8567 39.9763 22.8849 40.0155 22.9082 40.0575C22.9856 40.1915 23.0066 40.3507 22.9665 40.5001C22.9265 40.6496 22.8287 40.777 22.6947 40.8543L19.8761 42.4667C19.7506 42.5376 19.6033 42.5594 19.4626 42.5281C19.3219 42.4968 19.1978 42.4146 19.1141 42.2972C19.0305 42.1798 18.9933 42.0356 19.0097 41.8924C19.0261 41.7492 19.0949 41.6171 19.2029 41.5217L23.4029 37.8933L15.4462 42.4865C15.3155 42.5589 15.162 42.5784 15.0174 42.5409C14.8727 42.5035 14.748 42.412 14.6688 42.2852C14.5897 42.1585 14.5622 42.0062 14.592 41.8598C14.6218 41.7134 14.7067 41.584 14.8291 41.4983L18.2707 39.1755L12.5144 42.4993C12.4251 42.5537 12.3226 42.5828 12.2181 42.5833ZM43.0332 30.8128C42.9147 30.8127 42.7989 30.7764 42.7015 30.7089C42.6041 30.6413 42.5295 30.5456 42.4878 30.4346C42.4461 30.3236 42.4393 30.2025 42.4681 30.0875C42.497 29.9725 42.5602 29.869 42.6494 29.7908L42.7929 29.6648L42.4289 29.8737C42.303 29.9453 42.1549 29.9674 42.0136 29.9359C41.8722 29.9043 41.7477 29.8213 41.6641 29.703C41.5806 29.5847 41.5441 29.4395 41.5616 29.2957C41.5792 29.152 41.6496 29.0199 41.7592 28.9252L42.2469 28.5098C42.1265 28.5684 41.9897 28.5837 41.8594 28.5533C41.729 28.5229 41.6131 28.4486 41.5311 28.3429C41.449 28.2372 41.4058 28.1064 41.4087 27.9726C41.4116 27.8388 41.4604 27.7101 41.5469 27.608L43.3984 25.4042L38.0784 28.476C37.9503 28.5496 37.799 28.5718 37.6551 28.5381C37.5112 28.5044 37.3855 28.4174 37.3033 28.2946C37.2211 28.1718 37.1885 28.0224 37.2122 27.8766C37.2359 27.7307 37.3141 27.5993 37.4309 27.5088L37.7086 27.2953L35.6517 28.4795C35.5853 28.5217 35.5111 28.5501 35.4335 28.5628C35.3558 28.5756 35.2764 28.5725 35.2 28.5538C35.1236 28.5351 35.0518 28.5011 34.9888 28.4539C34.9259 28.4067 34.8731 28.3473 34.8338 28.2792C34.7944 28.211 34.7692 28.1357 34.7597 28.0576C34.7502 27.9795 34.7566 27.9003 34.7786 27.8247C34.8005 27.7491 34.8375 27.6788 34.8873 27.6179C34.9371 27.557 34.9987 27.5068 35.0684 27.4703L44.7879 21.8575C44.916 21.7854 45.0666 21.7643 45.2096 21.7985C45.3525 21.8327 45.4773 21.9195 45.559 22.0418C45.6407 22.164 45.6732 22.3125 45.6501 22.4577C45.6269 22.6028 45.5499 22.7339 45.4342 22.8247L45.1577 23.0382L45.6594 22.7488C45.778 22.6812 45.9166 22.6573 46.051 22.6813C46.1854 22.7053 46.3071 22.7757 46.3949 22.8802C46.4828 22.9847 46.5312 23.1167 46.5317 23.2532C46.5323 23.3898 46.4849 23.5221 46.3979 23.6273L44.5546 25.8335L47.1737 24.3168C47.2997 24.2453 47.4477 24.2231 47.5891 24.2547C47.7304 24.2862 47.855 24.3692 47.9385 24.4875C48.0221 24.6059 48.0586 24.751 48.041 24.8948C48.0234 25.0386 47.953 25.1706 47.8434 25.2653L47.3674 25.6713C47.4936 25.605 47.6398 25.5872 47.7782 25.6213C47.9167 25.6554 48.0378 25.739 48.1188 25.8563C48.1998 25.9737 48.235 26.1166 48.2178 26.2581C48.2006 26.3997 48.1322 26.53 48.0254 26.6245L45.4366 28.8937C45.4984 29.0254 45.5088 29.1756 45.4656 29.3146C45.4225 29.4536 45.3289 29.5715 45.2032 29.645L43.3284 30.7288C43.2395 30.7833 43.1375 30.8123 43.0332 30.8128ZM42.1746 22.4105C42.0462 22.4105 41.9213 22.3681 41.8195 22.29C41.7176 22.2118 41.6444 22.1022 41.6111 21.9782C41.5779 21.8541 41.5865 21.7226 41.6357 21.604C41.6848 21.4853 41.7717 21.3862 41.8829 21.322L43.2082 20.5578C43.2746 20.5156 43.3489 20.4873 43.4265 20.4745C43.5041 20.4618 43.5836 20.4648 43.66 20.4835C43.7364 20.5023 43.8082 20.5362 43.8712 20.5834C43.9341 20.6306 43.9868 20.6901 44.0262 20.7582C44.0656 20.8263 44.0908 20.9017 44.1003 20.9798C44.1097 21.0579 44.1033 21.1371 44.0814 21.2127C44.0595 21.2882 44.0225 21.3586 43.9727 21.4195C43.9229 21.4804 43.8613 21.5305 43.7916 21.567L42.4662 22.3323C42.3777 22.3839 42.277 22.4108 42.1746 22.4105Z" />
                                <path
                                    d="M21.1012 35.7305C20.9775 35.7306 20.857 35.6914 20.757 35.6186C20.6571 35.5458 20.5829 35.4431 20.5451 35.3253C20.5073 35.2076 20.5079 35.0809 20.5469 34.9635C20.5858 34.8461 20.661 34.7441 20.7617 34.6723L27.4455 29.9006L26.7455 30.3055C26.62 30.3774 26.4722 30.4002 26.3308 30.3693C26.1894 30.3384 26.0646 30.256 25.9806 30.1382C25.8965 30.0204 25.8592 29.8756 25.876 29.7319C25.8927 29.5881 25.9623 29.4558 26.0712 29.3605L31.1019 24.9773L31.089 24.9563C31.0117 24.8223 30.9907 24.6631 31.0307 24.5137C31.0708 24.3642 31.1685 24.2368 31.3025 24.1595L33.546 22.8645C33.6714 22.7938 33.8185 22.772 33.9589 22.8032C34.0994 22.8344 34.2234 22.9164 34.3071 23.0335C34.3907 23.1506 34.4282 23.2945 34.4121 23.4375C34.3961 23.5805 34.3278 23.7126 34.2204 23.8083L31.3819 26.2816L37.3319 22.8481C37.4617 22.7719 37.6159 22.7489 37.7623 22.7838C37.9088 22.8187 38.036 22.9088 38.1175 23.0354C38.199 23.1619 38.2285 23.3151 38.1997 23.4628C38.1709 23.6106 38.0861 23.7414 37.963 23.8281L31.2815 28.5986L41.2705 22.8306C41.4044 22.7545 41.563 22.7344 41.7117 22.7748C41.8603 22.8151 41.987 22.9127 42.064 23.0461C42.141 23.1795 42.1622 23.3379 42.1228 23.4868C42.0834 23.6358 41.9867 23.7631 41.8539 23.841L21.3929 35.6523C21.3042 35.7035 21.2036 35.7305 21.1012 35.7305ZM10.1637 44.8538C10.0843 44.8542 10.0056 44.8382 9.93272 44.8066C9.85983 44.7751 9.79427 44.7288 9.74019 44.6706C9.65015 44.5753 9.59485 44.4524 9.58321 44.3218C9.57157 44.1912 9.60426 44.0605 9.67602 43.9508L9.79269 43.777L9.39719 44.0103C9.26877 44.0834 9.1174 44.105 8.97365 44.0708C8.8299 44.0366 8.70448 43.9492 8.62272 43.8261C8.54097 43.703 8.50896 43.5535 8.53318 43.4077C8.5574 43.262 8.63603 43.1308 8.75319 43.0408L9.37269 42.5741L8.48836 43.084C8.36406 43.1583 8.21655 43.1838 8.07451 43.1554C7.93247 43.127 7.80607 43.0468 7.71991 42.9304C7.63374 42.814 7.59398 42.6696 7.60836 42.5255C7.62274 42.3814 7.69023 42.2477 7.79769 42.1506L9.68186 40.3668L7.23186 41.7831C7.11023 41.8526 6.9677 41.8759 6.83028 41.8489C6.69286 41.8219 6.56973 41.7464 6.48339 41.6362C6.39705 41.5259 6.35326 41.3883 6.36002 41.2484C6.36677 41.1085 6.42363 40.9757 6.52019 40.8743L8.34836 38.9761L6.19702 40.2198C6.07404 40.2907 5.92941 40.3144 5.79024 40.2863C5.65108 40.2582 5.52693 40.1803 5.44106 40.0673C5.35519 39.9542 5.3135 39.8137 5.3238 39.6721C5.33411 39.5305 5.39569 39.3976 5.49702 39.2981L8.30752 36.5553C8.28662 36.5312 8.26825 36.505 8.25269 36.4771C8.17534 36.3432 8.15438 36.1839 8.19442 36.0345C8.23445 35.8851 8.33221 35.7577 8.46619 35.6803L10.3387 34.5988C10.4617 34.5279 10.6063 34.5042 10.7455 34.5323C10.8846 34.5604 11.0088 34.6382 11.0947 34.7513C11.1805 34.8644 11.2222 35.0049 11.2119 35.1464C11.2016 35.288 11.14 35.421 11.0387 35.5205L9.63869 36.882L11.3362 35.902C11.458 35.8317 11.601 35.8077 11.739 35.8345C11.877 35.8613 12.0007 35.937 12.0874 36.0478C12.174 36.1585 12.2177 36.2968 12.2104 36.4373C12.2032 36.5777 12.1454 36.7107 12.0479 36.812L10.2232 38.7113L13.4292 36.8668C13.5535 36.7924 13.701 36.7669 13.843 36.7953C13.9851 36.8237 14.1115 36.9039 14.1976 37.0204C14.2838 37.1368 14.3236 37.2811 14.3092 37.4252C14.2948 37.5694 14.2273 37.703 14.1199 37.8001L12.2357 39.5746L16.9304 36.8656C17.0587 36.794 17.2094 36.7735 17.3522 36.8081C17.4951 36.8428 17.6196 36.9301 17.7008 37.0527C17.782 37.1752 17.814 37.3238 17.7904 37.4689C17.7667 37.614 17.6891 37.7448 17.5732 37.8351L12.1937 41.9033C12.2143 41.9821 12.2182 42.0643 12.2052 42.1447C12.1921 42.225 12.1624 42.3018 12.1179 42.37L11.7177 42.9766C11.8342 43.0253 11.9312 43.1115 11.993 43.2216C12.0705 43.3555 12.0916 43.5146 12.0518 43.664C12.012 43.8134 11.9145 43.9409 11.7807 44.0185L10.4554 44.7826C10.3662 44.832 10.2655 44.8565 10.1637 44.8538Z" />
                                <path
                                    d="M42.1771 36.4094C42.0487 36.4094 41.9238 36.367 41.822 36.2888C41.7201 36.2107 41.6469 36.1011 41.6136 35.977C41.5804 35.853 41.589 35.7215 41.6381 35.6028C41.6873 35.4842 41.7742 35.3851 41.8854 35.3209L43.2061 34.5591C43.2725 34.5169 43.3467 34.4885 43.4243 34.4758C43.502 34.463 43.5814 34.4661 43.6578 34.4848C43.7342 34.5035 43.806 34.5375 43.869 34.5847C43.9319 34.6319 43.9847 34.6913 44.024 34.7594C44.0634 34.8275 44.0886 34.9029 44.0981 34.981C44.1076 35.0591 44.1012 35.1383 44.0792 35.2139C44.0573 35.2894 44.0203 35.3598 43.9705 35.4207C43.9207 35.4816 43.8591 35.5318 43.7894 35.5682L42.4687 36.3312C42.3802 36.3827 42.2795 36.4097 42.1771 36.4094Z" />
                                <path
                                    d="M42.6185 44.6833C42.5041 44.6833 42.3921 44.6496 42.2967 44.5864C42.2012 44.5233 42.1264 44.4334 42.0816 44.3281C42.0369 44.2228 42.0241 44.1066 42.0449 43.994C42.0656 43.8815 42.1191 43.7775 42.1985 43.6951L44.267 41.5473L42.2988 42.6836C42.177 42.7539 42.0338 42.7778 41.8956 42.7509C41.7575 42.724 41.6338 42.648 41.5473 42.5371C41.4607 42.4261 41.4172 42.2876 41.4248 42.1471C41.4323 42.0065 41.4904 41.8735 41.5883 41.7724L43.014 40.3106L39.2655 42.4666C39.1399 42.5377 38.9923 42.5597 38.8514 42.5283C38.7105 42.4969 38.5863 42.4144 38.5027 42.2967C38.4191 42.179 38.3821 42.0345 38.3989 41.8911C38.4157 41.7477 38.485 41.6156 38.5935 41.5204L40.1802 40.1531L36.1668 42.4666C36.0479 42.5355 35.9084 42.5602 35.773 42.5363C35.6377 42.5124 35.5151 42.4414 35.4269 42.336C35.3387 42.2305 35.2906 42.0973 35.2911 41.9598C35.2916 41.8223 35.3406 41.6894 35.4295 41.5846L37.1795 39.5243L32.85 42.0233C32.7295 42.0918 32.5885 42.1151 32.4522 42.0891C32.316 42.0631 32.1936 41.9894 32.1068 41.8813C32.02 41.7731 31.9745 41.6376 31.9786 41.499C31.9827 41.3604 32.036 41.2278 32.129 41.1249L33.3773 39.7658L31.541 40.8333C31.4242 40.9001 31.2879 40.9245 31.1551 40.9022C31.0224 40.88 30.9014 40.8126 30.8127 40.7114C30.724 40.6102 30.673 40.4814 30.6684 40.3469C30.6638 40.2124 30.7058 40.0805 30.7873 39.9734L31.8257 38.6189L30.2402 39.5348C30.1214 39.603 29.9823 39.6272 29.8474 39.6032C29.7125 39.5792 29.5904 39.5084 29.5024 39.4033C29.4144 39.2983 29.3663 39.1656 29.3664 39.0285C29.3664 38.8915 29.4148 38.7589 29.5028 38.6539L30.3288 37.6739L29.0922 38.3879C28.9725 38.4558 28.8326 38.4792 28.6973 38.454C28.562 38.4287 28.4399 38.3564 28.3528 38.2498C28.2657 38.1433 28.219 38.0094 28.2211 37.8717C28.2232 37.7341 28.2739 37.6016 28.3642 37.4978L29.042 36.7301L28.0212 37.3134C27.8988 37.3807 27.7563 37.4018 27.6197 37.3729C27.4831 37.3441 27.3613 37.2671 27.2766 37.1561C27.1919 37.0451 27.1498 36.9074 27.1579 36.768C27.1661 36.6286 27.224 36.4968 27.3212 36.3964L27.4448 36.2739L27.152 36.4419C27.0337 36.5104 26.8952 36.5352 26.7605 36.512C26.6258 36.4888 26.5035 36.419 26.415 36.3148C26.3265 36.2106 26.2774 36.0787 26.2763 35.942C26.2752 35.8053 26.3221 35.6726 26.4088 35.5669L27.3118 34.4656L25.955 35.2484C25.8364 35.3168 25.6975 35.3412 25.5627 35.3175C25.4279 35.2938 25.3057 35.2234 25.2176 35.1187C25.1294 35.014 25.0809 34.8816 25.0805 34.7447C25.0801 34.6078 25.1278 34.4752 25.2153 34.3699L26.0728 33.3444L24.7895 34.0841C24.6767 34.1505 24.5446 34.1765 24.4151 34.1578C24.2855 34.1391 24.1662 34.0769 24.0767 33.9814C23.9863 33.887 23.9303 33.7649 23.9176 33.6348C23.9049 33.5047 23.9363 33.3741 24.0067 33.2639L25.2538 31.3238L23.2075 32.5044C23.0874 32.573 22.9469 32.5967 22.811 32.5713C22.675 32.5459 22.5525 32.473 22.4654 32.3656C22.3782 32.2582 22.332 32.1234 22.335 31.9852C22.338 31.8469 22.3901 31.7142 22.4818 31.6108L23.12 30.8968L22.154 31.4544C22.0406 31.5196 21.9085 31.5448 21.7791 31.5259C21.6496 31.507 21.5303 31.4451 21.4402 31.3502C21.3502 31.2553 21.2946 31.1329 21.2825 31.0026C21.2704 30.8723 21.3025 30.7418 21.3735 30.6319L22.6113 28.7303L20.5918 29.8969C20.476 29.964 20.3406 29.9892 20.2083 29.9682C20.0761 29.9473 19.9551 29.8815 19.8657 29.7819C19.7762 29.6823 19.7237 29.555 19.717 29.4213C19.7103 29.2876 19.7498 29.1556 19.8288 29.0476L20.95 27.5111L19.2093 28.5156C19.0952 28.5815 18.962 28.6069 18.8316 28.5875C18.7012 28.568 18.5812 28.505 18.4912 28.4087C18.4012 28.3123 18.3465 28.1883 18.3361 28.0569C18.3256 27.9254 18.3599 27.7943 18.4335 27.6849L19.6445 25.8848L15.1318 28.4888C15.006 28.5612 14.8577 28.5842 14.7159 28.5531C14.5741 28.5221 14.4489 28.4392 14.3649 28.3208C14.2809 28.2024 14.2441 28.0569 14.2616 27.9127C14.2792 27.7686 14.3499 27.6362 14.4598 27.5414L15.0432 27.0433L12.5162 28.5016C12.3823 28.5777 12.2237 28.5978 12.075 28.5574C11.9264 28.5171 11.7997 28.4196 11.7227 28.2862C11.6457 28.1528 11.6245 27.9943 11.6639 27.8454C11.7033 27.6965 11.8 27.5692 11.9328 27.4913L19.8463 22.9226C19.9722 22.8501 20.1205 22.8272 20.2623 22.8582C20.4041 22.8893 20.5293 22.9721 20.6133 23.0906C20.6973 23.209 20.7341 23.3545 20.7166 23.4986C20.699 23.6427 20.6283 23.7751 20.5183 23.8699L19.935 24.3693L21.2382 23.6168C21.3523 23.5508 21.4855 23.5255 21.6159 23.5449C21.7463 23.5643 21.8663 23.6273 21.9563 23.7237C22.0463 23.82 22.101 23.9441 22.1115 24.0755C22.122 24.2069 22.0876 24.338 22.014 24.4474L20.803 26.2499L22.7478 25.1276C22.8637 25.0605 22.9991 25.0353 23.1313 25.0563C23.2636 25.0772 23.3846 25.143 23.474 25.2426C23.5635 25.3422 23.616 25.4695 23.6227 25.6032C23.6294 25.7369 23.5899 25.8689 23.5108 25.9769L22.3897 27.5146L24.1327 26.5089C24.2455 26.4458 24.3762 26.4219 24.5041 26.4411C24.632 26.4603 24.7499 26.5214 24.8393 26.6149C24.9286 26.7084 24.9844 26.829 24.9978 26.9576C25.0111 27.0863 24.9814 27.2157 24.9132 27.3256L23.6753 29.2273L25.6937 28.0606C25.8138 27.9912 25.9547 27.9669 26.0911 27.9921C26.2274 28.0172 26.3504 28.0901 26.4379 28.1977C26.5254 28.3053 26.5717 28.4405 26.5686 28.5792C26.5654 28.7178 26.5129 28.8508 26.4205 28.9543L25.7823 29.6671L26.746 29.1106C26.8588 29.0442 26.9909 29.0182 27.1204 29.0369C27.25 29.0555 27.3693 29.1177 27.4588 29.2133C27.5492 29.3077 27.6053 29.4298 27.618 29.5599C27.6306 29.69 27.5993 29.8206 27.5288 29.9308L26.2817 31.8721L28.328 30.6914C28.4466 30.6231 28.5855 30.5986 28.7203 30.6224C28.8551 30.6461 28.9773 30.7164 29.0655 30.8212C29.1536 30.9259 29.2022 31.0582 29.2026 31.1951C29.203 31.332 29.1552 31.4647 29.0677 31.5699L28.2125 32.5943L29.4958 31.8546C29.6141 31.7861 29.7527 31.7613 29.8874 31.7845C30.0221 31.8078 30.1444 31.8776 30.2328 31.9817C30.3213 32.0859 30.3704 32.2179 30.3715 32.3545C30.3727 32.4912 30.3258 32.624 30.239 32.7296L29.3348 33.8333L30.6917 33.0504C30.8141 32.9832 30.9565 32.9621 31.0932 32.9909C31.2298 33.0198 31.3515 33.0967 31.4363 33.2077C31.521 33.3187 31.5631 33.4564 31.5549 33.5958C31.5467 33.7353 31.4888 33.8671 31.3917 33.9674L31.2692 34.0911L31.562 33.9219C31.6819 33.8533 31.8222 33.8294 31.958 33.8545C32.0938 33.8797 32.2163 33.9522 32.3037 34.0591C32.391 34.1661 32.4376 34.3006 32.4351 34.4387C32.4326 34.5768 32.3812 34.7095 32.29 34.8133L31.6168 35.5833L32.6365 34.9999C32.7553 34.9324 32.8941 34.9087 33.0286 34.933C33.163 34.9574 33.2847 35.0281 33.3724 35.133C33.46 35.2378 33.508 35.3701 33.5081 35.5068C33.5082 35.6435 33.4602 35.7758 33.3727 35.8808L32.5467 36.8608L33.7845 36.1468C33.901 36.0788 34.0374 36.0533 34.1705 36.0746C34.3037 36.0958 34.4254 36.1626 34.5148 36.2634C34.6042 36.3649 34.6554 36.4943 34.6599 36.6295C34.6644 36.7646 34.6217 36.8971 34.5393 37.0043L33.4987 38.3599L36.0945 36.8619C36.2151 36.7934 36.3561 36.77 36.4923 36.7961C36.6285 36.8221 36.751 36.8958 36.8378 37.0039C36.9246 37.112 36.97 37.2476 36.9659 37.3862C36.9618 37.5248 36.9085 37.6574 36.8155 37.7603L35.5672 39.1194L39.507 36.8444C39.626 36.7755 39.7654 36.7508 39.9008 36.7747C40.0362 36.7986 40.1588 36.8696 40.247 36.975C40.3351 37.0805 40.3832 37.2137 40.3827 37.3512C40.3823 37.4887 40.3333 37.6216 40.2443 37.7264L38.5002 39.7833L44.9752 36.0499C45.1008 35.9788 45.2484 35.9569 45.3893 35.9882C45.5302 36.0196 45.6544 36.1022 45.738 36.2198C45.8216 36.3375 45.8586 36.4821 45.8418 36.6254C45.825 36.7688 45.7557 36.9009 45.6472 36.9961L44.0617 38.3623L46.0928 37.1956C46.2147 37.1261 46.3575 37.1029 46.4951 37.1301C46.6328 37.1574 46.7559 37.2333 46.8421 37.344C46.9283 37.4547 46.9717 37.5927 46.9643 37.7328C46.957 37.8729 46.8994 38.0057 46.8022 38.1068L45.3718 39.5604L47.2607 38.4708C47.3823 38.4013 47.5248 38.378 47.6623 38.405C47.7997 38.4319 47.9228 38.5075 48.0091 38.6177C48.0955 38.728 48.1393 38.8656 48.1325 39.0055C48.1258 39.1454 48.0689 39.2782 47.9723 39.3796L45.7172 41.7211C45.8219 41.712 45.9269 41.735 46.0182 41.7871C46.1095 41.8392 46.1828 41.9179 46.2282 42.0128C46.3052 42.1466 46.3259 42.3056 46.2859 42.4547C46.2459 42.6039 46.1483 42.7311 46.0147 42.8084L42.9102 44.6004C42.8222 44.6538 42.7214 44.6824 42.6185 44.6833Z" />
                                <path
                                    d="M9.61761 30.5597C9.49517 30.5597 9.37585 30.5212 9.27653 30.4496C9.1772 30.378 9.10292 30.277 9.06421 30.1608C9.02549 30.0447 9.0243 29.9193 9.06081 29.8025C9.09731 29.6856 9.16966 29.5832 9.26761 29.5097L10.3351 28.7071L8.92461 29.5237C8.79904 29.5969 8.6507 29.6205 8.50862 29.59C8.36654 29.5595 8.24096 29.4771 8.15646 29.3589C8.07195 29.2407 8.03462 29.0952 8.05175 28.9509C8.06889 28.8066 8.13927 28.6739 8.24911 28.5787L10.2091 26.8684L7.72761 28.2999C7.60751 28.3692 7.46662 28.3935 7.33023 28.3684C7.19384 28.3433 7.07086 28.2704 6.98336 28.1628C6.89585 28.0552 6.84954 27.9199 6.85273 27.7813C6.85592 27.6426 6.90841 27.5097 7.00077 27.4062L8.79511 25.3995L6.37194 26.7995C6.25218 26.869 6.11164 26.8935 5.97544 26.8688C5.83924 26.8442 5.71625 26.7719 5.62845 26.6649C5.54066 26.5578 5.49377 26.4231 5.49618 26.2847C5.49859 26.1463 5.55014 26.0133 5.64161 25.9094L8.46727 22.6894C8.37945 22.6389 8.30659 22.566 8.25611 22.4782C8.17876 22.3442 8.15779 22.185 8.19783 22.0356C8.23787 21.8861 8.33563 21.7587 8.46961 21.6814L10.3421 20.5999C10.4619 20.5305 10.6024 20.5059 10.7386 20.5306C10.8748 20.5553 10.9978 20.6276 11.0856 20.7346C11.1734 20.8416 11.2203 20.9763 11.2179 21.1147C11.2155 21.2531 11.1639 21.3862 11.0724 21.49L8.85577 24.0217L11.3699 22.5704C11.4899 22.5018 11.6303 22.478 11.7662 22.5033C11.9021 22.5285 12.0246 22.6012 12.1118 22.7084C12.1991 22.8156 12.2455 22.9502 12.2427 23.0884C12.24 23.2266 12.1883 23.3593 12.0968 23.4629L10.2978 25.4695L14.8174 22.8667C14.9428 22.795 15.0904 22.7723 15.2315 22.8031C15.3727 22.834 15.4974 22.9161 15.5815 23.0336C15.6655 23.151 15.703 23.2955 15.6867 23.4391C15.6703 23.5826 15.6013 23.715 15.4929 23.8105L13.5341 25.5162L18.1308 22.8632C18.2593 22.7911 18.4103 22.7703 18.5536 22.805C18.6968 22.8397 18.8216 22.9273 18.9029 23.0502C18.9842 23.1732 19.0159 23.3223 18.9917 23.4677C18.9675 23.6131 18.8892 23.7439 18.7724 23.8339L12.2181 28.7561C12.2288 28.8675 12.2072 28.9797 12.1559 29.0792C12.1046 29.1787 12.0258 29.2613 11.9288 29.3172L9.91277 30.4839C9.82304 30.5353 9.72104 30.5616 9.61761 30.5597Z" />
                                <path
                                    d="M42.3316 54.9162C42.327 54.9499 42.327 54.984 42.3316 55.0177C42.3301 55.5886 42.3785 56.1586 42.4763 56.721C42.942 59.0174 44.1902 61.0809 46.0079 62.5594C47.8256 64.038 50.1001 64.8398 52.4431 64.8282C54.5085 64.8089 56.5218 64.1779 58.2289 63.0151C59.9359 61.8523 61.2601 60.2098 62.0343 58.2949C62.4554 57.1764 62.667 55.99 62.6584 54.7949C62.6852 54.7189 62.6827 54.6358 62.6514 54.5615C62.6255 53.1243 62.2878 51.7098 61.6618 50.4159C61.0357 49.1219 60.1362 47.9792 59.0254 47.0669C57.3842 45.7749 55.3917 45.0076 53.3078 44.8651C51.224 44.7225 49.1455 45.2113 47.3436 46.2677C45.8353 47.1569 44.5816 48.4199 43.7037 49.9348C42.8257 51.4497 42.3532 53.1654 42.3316 54.9162ZM58.1178 48.4645L56.8799 49.7L56.6746 49.9065C56.6543 49.9238 56.6376 49.945 56.6258 49.969C56.6139 49.9929 56.6071 50.019 56.6056 50.0456C56.6042 50.0723 56.6083 50.0989 56.6175 50.124C56.6268 50.149 56.641 50.1719 56.6594 50.1912C56.7917 50.2735 56.948 50.3084 57.1028 50.2904C57.5171 50.2868 57.9162 50.1335 58.2263 49.8587L58.8598 49.2252C60.0592 50.6586 60.7793 52.4318 60.9189 54.2955H59.8141C59.5859 54.2887 59.359 54.3317 59.1491 54.4215C58.9679 54.4934 58.8129 54.6188 58.7046 54.7809C58.6647 54.8405 58.6446 54.9112 58.6473 54.9828C58.6501 55.0545 58.6754 55.1235 58.7198 55.1799C58.8443 55.302 59.012 55.37 59.1864 55.3689H60.9364C60.9262 55.7205 60.8947 56.0711 60.8419 56.4189C60.6054 57.8483 60.0024 59.192 59.0919 60.319L58.4503 59.675L58.2438 59.4697C58.1121 59.3834 57.9548 59.3447 57.7981 59.36C57.5714 59.3658 57.3476 59.4129 57.1378 59.4989C56.9601 59.5558 56.801 59.6593 56.6769 59.7987C56.6104 59.8944 56.5684 59.9994 56.6653 60.0962L58.0139 61.4449C56.6985 62.5736 55.071 63.2754 53.3473 63.4574V61.607C53.3473 61.4799 53.1046 61.4099 53.0253 61.3947C52.815 61.3627 52.6002 61.3778 52.3964 61.439C52.1895 61.487 51.996 61.5811 51.8306 61.7144L51.7198 61.831C51.6919 61.8624 51.6717 61.8998 51.661 61.9403C51.6503 61.9809 51.6492 62.0234 51.6579 62.0644V63.4235C49.8681 63.1949 48.194 62.414 46.8688 61.1894L48.1159 59.9422L48.3213 59.7369C48.3924 59.6657 48.4379 59.5689 48.3469 59.493C48.2126 59.4266 48.061 59.4034 47.9129 59.4265C47.6873 59.4428 47.4652 59.492 47.2538 59.5724C47.0817 59.6287 46.9229 59.7196 46.7871 59.8395L46.1711 60.4555C45.4658 59.653 44.9163 58.726 44.5506 57.722C44.2902 56.969 44.1332 56.184 44.0839 55.3887H45.1958C45.4234 55.3963 45.65 55.3541 45.8596 55.265C46.0418 55.192 46.1971 55.0645 46.3041 54.8999C46.3433 54.8381 46.3626 54.7658 46.3593 54.6928C46.3559 54.6197 46.3301 54.5494 46.2854 54.4915C46.2243 54.43 46.1516 54.3811 46.0715 54.3477C45.9914 54.3142 45.9055 54.2969 45.8188 54.2967H44.0758C44.1649 52.5098 44.7997 50.7931 45.8946 49.378L46.5701 50.0535L46.7754 50.26C46.9008 50.3933 47.0705 50.4763 47.2526 50.4934C47.4812 50.516 47.7115 50.4757 47.9188 50.3767C48.1045 50.2988 48.2586 50.1608 48.3563 49.9847C48.3955 49.9144 48.4135 49.8342 48.4082 49.7539C48.4028 49.6735 48.3742 49.5965 48.3259 49.532L46.9983 48.2044C47.0356 48.1729 47.0648 48.1344 47.1021 48.1029C48.3945 47.0349 49.9817 46.3862 51.6521 46.2432V48.0749C51.6521 48.1717 51.9134 48.181 51.9461 48.1822C52.1547 48.1832 52.3623 48.1533 52.5621 48.0935C52.7675 48.0466 52.9643 47.9678 53.1454 47.8602C53.2329 47.803 53.3461 47.7435 53.3461 47.621V46.2455C54.5897 46.3776 55.7868 46.7918 56.8461 47.4565C57.3003 47.7524 57.726 48.0899 58.1178 48.4645Z" />
                                <path
                                    d="M0.321585 38.4814V48.0282C0.150514 49.5744 0.210674 51.1373 0.500085 52.6657C1.39025 55.3409 4.05608 55.1892 6.31242 55.1892H37.6829C37.7094 57.7194 38.4037 60.1978 39.6954 62.3736C41.3992 65.1124 43.9427 67.2271 46.9465 68.4024C49.9504 69.5776 53.2536 69.7503 56.3637 68.8947C59.4737 68.0392 62.2238 66.2012 64.2039 63.655C66.1841 61.1088 67.288 57.9907 67.3513 54.7657C67.3489 51.0039 65.8881 47.3894 63.2759 44.6824C60.6637 41.9753 57.1036 40.3866 53.3443 40.2501V24.2667C53.3443 18.4777 53.5858 12.6327 53.3443 6.8484C53.2276 4.12773 51.0483 3.13723 48.6776 3.13723H45.1928V1.11423C45.1856 1.01981 45.1585 0.927969 45.1134 0.844734C45.0682 0.761499 45.006 0.688746 44.9307 0.631245C44.8555 0.573743 44.769 0.532792 44.6768 0.511075C44.5846 0.489358 44.4889 0.487366 44.3959 0.505229C44.0459 0.537896 43.4731 0.781729 43.4731 1.21923V3.15006H38.1788V1.06523C38.1788 0.693062 37.7436 0.640562 37.4438 0.682562C37.217 0.707312 36.9986 0.782236 36.8044 0.901896C36.6878 0.977729 36.4871 1.1154 36.4871 1.26823V3.15006H31.1776V0.940396C31.1776 0.843562 30.9163 0.833062 30.8836 0.831896C30.6746 0.830989 30.4667 0.860865 30.2664 0.920562C30.0693 0.975396 29.4883 1.1119 29.4883 1.38723V3.15006H24.1776V0.940396C24.1776 0.808562 23.9361 0.729229 23.8509 0.707062C23.6409 0.67034 23.4252 0.683123 23.2209 0.744396C22.9071 0.836562 22.4883 1.01156 22.4883 1.3884V3.15006H17.1858V1.08973C17.1858 0.690729 16.7681 0.551896 16.4204 0.592729C16.1194 0.627729 15.4801 0.837729 15.4801 1.24373V3.15006H10.1904V1.10606C10.1821 1.0144 10.1542 0.925586 10.1088 0.845556C10.0633 0.765526 10.0013 0.696128 9.92682 0.642005C9.85238 0.587883 9.76723 0.550285 9.67708 0.531727C9.58693 0.513169 9.49385 0.514079 9.40409 0.534396C9.07042 0.568229 8.47075 0.800396 8.47075 1.2274V3.13956C7.19519 3.08236 5.91751 3.0917 4.64292 3.16756C3.61241 3.19244 2.62198 3.57175 1.83846 4.24157C1.05495 4.91139 0.526244 5.8308 0.341418 6.8449C0.311484 7.29264 0.304864 7.74163 0.321585 8.19006V38.4814ZM5.59959 54.4834C3.08192 54.4332 2.01092 52.5969 2.01092 50.3277V21.4889C2.01092 18.3727 1.94092 15.2402 1.93509 12.1136H51.6549V40.2827C50.3676 40.373 49.0965 40.6238 47.8714 41.0294C48.1376 40.753 48.3609 40.4385 48.5341 40.0961C49.1653 38.7439 47.2193 37.3976 46.4143 36.5762C45.5101 35.6522 44.7623 34.4902 43.3214 34.6979C43.0286 34.703 42.7397 34.7669 42.472 34.8858C42.2043 35.0047 41.9632 35.1761 41.763 35.3899C41.5628 35.6037 41.4075 35.8555 41.3065 36.1305C41.2054 36.4054 41.1606 36.6978 41.1748 36.9904H36.4766C36.1619 37.0175 35.8455 37.0194 35.5304 36.9962C35.511 36.9585 35.484 36.9251 35.4511 36.8982C35.0031 36.4677 34.5714 36.0197 34.1328 35.5811L31.0236 32.4742L35.1583 28.3396H41.1526C41.1421 29.0302 41.0616 29.8014 41.6391 30.2972C42.0361 30.5412 42.492 30.6725 42.9579 30.677C43.4239 30.6815 43.8823 30.5591 44.2839 30.3229C44.8033 30.0172 45.2646 29.6223 45.6466 29.1562L47.5133 27.2476C48.0039 26.8689 48.3881 26.3697 48.6286 25.7986C48.8106 25.0379 48.3486 24.5537 47.8679 24.0626L45.9919 22.1446C45.6297 21.7067 45.2265 21.3043 44.7879 20.9429C44.3268 20.7202 43.8135 20.6283 43.3038 20.677C42.794 20.7258 42.3075 20.9134 41.8969 21.2194C41.6268 21.4222 41.4155 21.6932 41.2847 22.0047C41.1539 22.3161 41.1083 22.6567 41.1526 22.9916H34.9868C33.6867 22.8825 32.3958 23.2876 31.3911 24.1197C30.5079 24.9481 29.6738 25.8371 28.8174 26.6934L27.0278 28.4842L23.7401 25.2001C22.7064 24.1664 21.8804 23.0604 20.2961 22.9927C18.0794 22.8982 15.8278 22.9927 13.6029 22.9927C13.229 23.0231 12.8533 23.0231 12.4794 22.9927H12.4713C12.525 22.7805 12.5385 22.5601 12.5109 22.3429C12.4654 21.0409 11.5613 20.5171 10.3316 20.7201C8.44742 21.0316 6.87242 23.2587 5.66492 24.5817C5.48091 24.7283 5.33094 24.913 5.22538 25.1233C5.11981 25.3335 5.06117 25.5641 5.05352 25.7992C5.04586 26.0343 5.08937 26.2683 5.18104 26.4849C5.2727 26.7016 5.41034 26.8957 5.58442 27.0539C6.44075 28.0106 7.38809 28.8984 8.28525 29.8154C8.61425 30.2102 9.06367 30.4862 9.56459 30.601C10.0655 30.7159 10.5903 30.6633 11.0584 30.4512C11.5074 30.3234 11.8973 30.0419 12.1599 29.656C12.4226 29.2701 12.5415 28.8042 12.4958 28.3396H17.0796C17.3771 28.3396 17.6746 28.3466 17.9721 28.3396C18.0302 28.3376 18.0884 28.3407 18.1459 28.3489C18.646 28.7758 19.1093 29.2442 19.5308 29.7489L22.6154 32.8312L18.5169 36.9297H12.5144C12.5812 36.5936 12.5716 36.2467 12.4864 35.9147C12.4012 35.5828 12.2425 35.2742 12.0221 35.0117C11.631 34.7496 11.1736 34.6037 10.703 34.5911C10.2323 34.5785 9.76778 34.6997 9.36325 34.9406C8.85121 35.2648 8.394 35.6685 8.00875 36.1364L6.14209 38.0451C5.64762 38.4262 5.26447 38.9331 5.03259 39.5127C4.85058 40.2874 5.31258 40.7879 5.80375 41.2907L7.67975 43.2087C8.04475 43.6441 8.44766 44.0462 8.88375 44.4104C9.34327 44.6581 9.86544 44.7654 10.3854 44.719C10.9054 44.6725 11.4003 44.4743 11.8086 44.1491C12.0629 43.9394 12.2607 43.6695 12.384 43.3638C12.5073 43.0581 12.5521 42.7265 12.5144 42.3991H15.8079C17.3814 42.5467 18.9671 42.4969 20.5283 42.2509C22.1033 41.8274 23.2524 40.2816 24.3608 39.1732L26.6638 36.8702L29.9304 40.1299C30.4111 40.6106 30.8719 41.1484 31.3911 41.5906C32.4318 42.4737 33.6369 42.3372 34.9074 42.3372H40.4829C40.7159 42.3195 40.9497 42.3176 41.1829 42.3314C41.1626 42.4654 41.1513 42.6007 41.1491 42.7362C41.0586 43.0954 41.1037 43.4753 41.276 43.8031C41.4482 44.131 41.7354 44.3838 42.0824 44.5131C41.7593 44.8257 41.4466 45.1489 41.1491 45.4931C39.0121 48.0095 37.7921 51.1766 37.6888 54.4764C26.9998 54.4986 16.2886 54.6899 5.59959 54.4834ZM43.1476 43.5867C42.8587 43.0292 42.7526 42.3949 42.8443 41.7737C42.8443 41.6757 42.5841 41.6571 42.5491 41.6571C40.0093 41.6571 37.4473 41.7667 34.9109 41.6571C32.9906 41.5742 31.8216 39.8604 30.5441 38.5852L27.6554 35.7001C27.6481 35.6904 27.6394 35.6817 27.6298 35.6744L23.6129 31.6611L20.8129 28.8611C20.5049 28.5542 20.0709 27.9056 19.6673 27.7177C19.3176 27.63 18.9542 27.6114 18.5974 27.6629H12.2158C11.9171 27.6629 10.8158 27.7924 10.8158 28.2299C10.8158 28.5134 10.8391 28.8062 10.8158 29.0886C10.7714 29.6182 10.7924 29.9192 10.2861 29.6719C9.96759 29.5132 9.65025 29.0221 9.40175 28.7689C8.62825 27.9779 6.54925 26.5254 6.74058 25.2946C6.92142 24.1361 8.67142 22.9426 9.45775 22.1376C9.71442 21.8751 10.0878 21.3722 10.2919 21.4317C10.9721 21.6277 10.8158 23.0651 10.8158 23.5679C10.8158 23.6659 11.0759 23.6846 11.1109 23.6846C13.6508 23.6846 16.2128 23.5749 18.7491 23.6846C20.6694 23.7674 21.8384 25.4812 23.1159 26.7564L30.0471 33.6817L32.8471 36.4817C33.1551 36.7886 33.5891 37.4372 33.9928 37.6251C34.3424 37.7128 34.7058 37.7314 35.0626 37.6799H41.4384C41.7371 37.6799 42.8326 37.5504 42.8326 37.1129C42.8326 36.8516 42.7159 35.6907 42.9691 35.5402C43.2024 35.4014 43.4206 35.7491 43.5863 35.9077C44.4029 36.6777 45.1566 37.5107 45.9394 38.3099C46.7223 39.1091 47.4024 39.8266 46.4388 40.9116C46.0351 41.3654 45.6023 41.7959 45.1683 42.2252C44.4589 42.6235 43.7831 43.0788 43.1476 43.5867ZM12.0163 41.5976C11.6849 41.5976 10.8228 41.7772 10.8228 42.2264C10.8228 42.5332 10.8484 42.8494 10.8228 43.1539C10.8076 43.3231 10.8321 43.6346 10.6758 43.7536C10.4623 43.9181 10.5591 43.8271 10.2826 43.6369C9.91158 43.3211 9.57027 42.9719 9.26292 42.5939L7.64825 40.9501C7.20492 40.4962 6.62392 40.0611 6.71492 39.3529C6.78959 38.7614 7.35775 38.3402 7.75325 37.9354L9.37492 36.2717C9.58725 36.0547 9.79609 35.8319 10.0131 35.6196C10.0528 35.5799 10.1414 35.4446 10.2009 35.4271C10.3946 35.3687 10.1298 35.4504 10.2009 35.4656C11.0071 35.6499 10.8263 36.9752 10.8263 37.5656C10.8263 37.7464 11.2276 37.7417 11.3221 37.7417H15.0228C16.2229 37.8059 17.4257 37.8024 18.6254 37.7312C19.8178 37.5936 20.7558 36.2006 21.5421 35.4142L23.3703 33.5861C24.2211 34.4338 25.0709 35.2828 25.9194 36.1329L23.2361 38.8162L21.3344 40.7179C20.9984 41.0539 20.6554 41.5194 20.1678 41.6092C19.6969 41.6495 19.2234 41.6495 18.7526 41.6092H12.0163V41.5976ZM41.4513 23.6752C41.7511 23.6752 42.8454 23.5469 42.8454 23.1071C42.8454 22.7816 42.8198 22.4444 42.8454 22.1212C42.8774 21.908 42.9306 21.6986 43.0041 21.4959L43.0333 21.4679C43.0788 21.4831 43.1266 21.4982 43.1954 21.5157C43.5349 21.8832 43.9188 22.2262 44.2699 22.5856L46.0129 24.3671C46.4796 24.8396 47.0349 25.2572 46.9568 25.9946C46.8914 26.6152 46.3408 27.0166 45.9266 27.4401L44.1766 29.2274C43.9604 29.4057 43.7647 29.6077 43.5933 29.8294C43.5636 29.8732 43.5279 29.9125 43.4871 29.9461C43.4561 29.9169 43.428 29.8849 43.4031 29.8504C43.1149 29.4526 42.8886 29.2869 42.8489 28.7596C42.8256 28.4352 42.8489 28.0992 42.8489 27.7737C42.8489 27.6757 42.5899 27.6571 42.5538 27.6571H38.8496C37.6409 27.6571 36.3763 27.5474 35.1711 27.6571C33.8749 27.7819 32.9941 29.1049 32.1378 29.9577L30.3236 31.7707C29.4571 30.9066 28.5911 30.0413 27.7254 29.1749L30.4169 26.4834L32.3186 24.5806C32.5589 24.3472 32.9778 23.7826 33.3091 23.6682C33.7754 23.6022 34.2486 23.6022 34.7149 23.6682H41.4489L41.4513 23.6752ZM43.4941 29.9589C43.6889 30.1421 43.7029 29.8597 43.4941 29.9589V29.9589ZM65.6444 54.9011C65.649 57.6111 64.8336 60.2592 63.3055 62.4973C61.7774 64.7355 59.6079 66.459 57.0823 67.4416C54.4754 68.3587 51.6468 68.437 48.9932 67.6653C46.3396 66.8937 43.994 65.3109 42.2854 63.1389C40.6284 61.0213 39.6319 58.4625 39.4203 55.782C39.2087 53.1016 39.7913 50.4181 41.0954 48.0667C42.4362 45.693 44.4889 43.8004 46.9635 42.6563C49.4382 41.5123 52.2096 41.1746 54.8866 41.6909C57.912 42.3467 60.6246 44.0113 62.5794 46.4117C64.5341 48.812 65.6149 51.8056 65.6444 54.9011ZM2.01092 6.89623C1.95654 6.20313 2.15447 5.51372 2.56824 4.95502C2.98201 4.39633 3.58375 4.00598 4.26259 3.8559C4.82864 3.82031 5.39637 3.82031 5.96242 3.8559H8.47542V5.89406C8.48378 5.98572 8.51162 6.07454 8.55708 6.15457C8.60254 6.2346 8.66457 6.304 8.73902 6.35812C8.81346 6.41224 8.89861 6.44984 8.98876 6.4684C9.07891 6.48696 9.17198 6.48605 9.26175 6.46573C9.59542 6.4319 10.1951 6.19973 10.1951 5.77273V3.8559H15.4848V5.9104C15.4848 6.3094 15.9024 6.44823 16.2501 6.4074C16.5511 6.3724 17.1904 6.1624 17.1904 5.7564V3.8559H22.4929V6.05973C22.4929 6.19156 22.7344 6.2709 22.8196 6.29306C23.0296 6.32979 23.2453 6.317 23.4496 6.25573C23.7634 6.16356 24.1823 5.98856 24.1823 5.61173V3.86173H29.4929V6.05973C29.4929 6.15656 29.7543 6.16706 29.7869 6.16823C29.9959 6.16914 30.2038 6.13926 30.4041 6.07956C30.6013 6.02473 31.1823 5.88823 31.1823 5.60706V3.85706H36.4918V5.9349C36.4918 6.30706 36.9269 6.35956 37.2268 6.31756C37.4535 6.29281 37.6719 6.21789 37.8661 6.09823C37.9828 6.0224 38.1834 5.88473 38.1834 5.7319V3.8559H43.4778V5.8859C43.4849 5.98032 43.512 6.07216 43.5571 6.15539C43.6023 6.23863 43.6645 6.31138 43.7398 6.36888C43.815 6.42638 43.9015 6.46733 43.9937 6.48905C44.0859 6.51077 44.1816 6.51276 44.2746 6.4949C44.6246 6.46223 45.1974 6.2184 45.1974 5.7809V3.8559H45.2558C46.6558 3.8559 48.7114 3.5374 49.9749 4.27006C52.0924 5.49506 51.6596 8.17373 51.6596 10.2387V11.2199H1.93392C1.93742 9.77673 1.95609 8.33473 2.01092 6.89623Z" />
                                <path
                                    d="M53.3249 52.1209C53.1421 52.1874 52.9849 52.3099 52.8758 52.4709L51.7091 54.8043C51.6696 54.8589 51.649 54.9249 51.6505 54.9923C51.6519 55.0597 51.6754 55.1248 51.7173 55.1776L52.8839 56.3443C53.0497 56.4535 53.2423 56.5149 53.4407 56.5219C53.6391 56.5289 53.8356 56.4812 54.0086 56.3839C54.2139 56.2871 54.7331 55.9488 54.4496 55.6653L53.4124 54.6293C53.7617 53.9293 54.1117 53.2324 54.4624 52.5386C54.5016 52.4839 54.522 52.4179 54.5205 52.3506C54.519 52.2833 54.4958 52.2183 54.4543 52.1653C54.3256 52.0522 54.1588 51.9922 53.9876 51.9973C53.7602 51.9883 53.5338 52.0305 53.3249 52.1209Z" />
                            </svg>
                        </div>
                        <div class="feature-card-content">
                            <h6>Ultimate flexibility</h6>
                            <p>Flexibility is key when it comes to travel. That's why we offer unparalleled flexibility
                                in all aspects of our services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Why Choose Us Ends -->




    <!-- gallery start -->

    <div class="package-details-area pt-50 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <span>
                            <div class="section-title2 mb-30">
                                <div class="eg-section-tag">
                                    <span>Our Gallery</span>
                                </div>

                            </div>

                        </span>
                        <h2>Our Popular Images</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="co-lg-12">
                    <div class="package-img-group mb-50">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/home1/gallery1.webp" alt>
                                    <a data-fancybox="gallery-01" href="assets/img/home1/gallery1.1.webp"><i
                                            class="bi bi-eye"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 h-100">
                                <div class="row g-3 h-100">
                                    <div class="col-6">
                                        <div class="gallery-img-wrap">
                                            <img src="assets/img/home1/gallery2.webp" alt>
                                            <a data-fancybox="gallery-01" href="assets/img/home1/gallery2.1.webp"><i
                                                    class="bi bi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="gallery-img-wrap">
                                            <img src="assets/img/home1/gallery3.webp" alt>
                                            <a data-fancybox="gallery-01" href="assets/img/home1/gallery3.1.webp"><i
                                                    class="bi bi-eye"></i></a>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="gallery-img-wrap active">
                                            <img src="assets/img/innerpage/ski-touring-05.jpg" alt>
                                            <a data-fancybox="gallery-01"
                                                href="https://www.youtube.com/watch?v=u31qwQUeGuM"><i
                                                    class="bi bi-play-circle"></i> Watch Video</a>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="gallery-img-wrap active">
                                            <img src="assets/img/innerpage/ski-touring-04.jpg" alt>
                                            <button class="StartSlideShowFirstImage"><i class="bi bi-plus-lg"></i><a
                                                    href="gallery.php"></a>View
                                                More Images</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="others-image-wrap d-none">
                <a href="assets/img/innerpage/ski-touring-01.jpg" data-fancybox="images"><img
                        src="assets/img/innerpage/ski-touring-01.jpg" alt></a>
                <a href="assets/img/innerpage/ski-touring-02.jpg" data-fancybox="images"><img
                        src="assets/img/innerpage/ski-touring-02.jpg" alt></a>
                <a href="assets/img/innerpage/ski-touring-03.jpg" data-fancybox="images"><img
                        src="assets/img/innerpage/ski-touring-03.jpg" alt></a>
                <a href="assets/img/innerpage/ski-touring-04.jpg" data-fancybox="images"><img
                        src="assets/img/innerpage/ski-touring-04.jpg" alt></a>
                <a href="assets/img/innerpage/ski-touring-05.jpg" data-fancybox="images"><img
                        src="assets/img/innerpage/ski-touring-05.jpg" alt></a>
            </div>
        </div>
    </div>
    <!-- gallery ends -->



    <!-- Testimonials Start -->
    <div class="testimonial-section mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center mb-60">
                        <div class="section-title2 mb-30">
                            <div class="eg-section-tag">
                                <span>Testimonials</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-wrapper">
            <div class="container">
                <div class="testimonial-nav-area">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link active" id="allreview-tab" data-bs-toggle="pill"
                                data-bs-target="#allreview" role="tab" aria-controls="allreview" aria-selected="true">
                                All Reviews</div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" id="tripadvisor-tab" data-bs-toggle="pill"
                                data-bs-target="#tripadvisor" role="tab" aria-controls="tripadvisor"
                                aria-selected="false">
                                <div class="icon">
                                    <img src="assets/img/home1/icon/tripadvisor-logo3.svg" alt>
                                </div>
                                Tripadvisor
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" id="facebook-tab" data-bs-toggle="pill" data-bs-target="#facebook"
                                role="tab" aria-controls="facebook" aria-selected="false">
                                <div class="icon">
                                    <img src="assets/img/home1/icon/facebook-logo.svg" alt>
                                </div>
                                Facebook
                            </div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link" id="google-tab" data-bs-toggle="pill" data-bs-target="#google"
                                role="tab" aria-controls="google" aria-selected="false">
                                <div class="icon">
                                    <img src="assets/img/home1/icon/google-logo.svg" alt>
                                </div>
                                Google
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="testimonial-card-slider-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="allreview" role="tabpanel"
                                    aria-labelledby="allreview-tab">
                                    <div class="swiper testimonial-card-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tripadvisor" role="tabpanel"
                                    aria-labelledby="tripadvisor-tab">
                                    <div class="swiper testimonial-card-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area tripadvisor">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-half"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/tripadvisor-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area tripadvisor">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-half"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/tripadvisor-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>

                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area tripadvisor">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-half"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/tripadvisor-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area tripadvisor">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-half"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/tripadvisor-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area tripadvisor">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-half"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/tripadvisor-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area tripadvisor">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-fill"></i></li>
                                                                    <li><i class="bi bi-circle-half"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/tripadvisor-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="facebook" role="tabpanel" aria-labelledby="facebook-tab">
                                    <div class="swiper testimonial-card-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/facebook-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/facebook-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/facebook-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/facebook-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/facebook-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/facebook-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="google-tab">
                                    <div class="swiper testimonial-card-slider">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/google-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/google-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/google-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I cannot express enough how satisfied I am with the
                                                                web
                                                                development services provided by Egens Lab. From the
                                                                initial consultation to the final delivery, they
                                                                have
                                                                exceeded.”</p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/google-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img1.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Mateo Daniel</h5>
                                                            <span>Indonesia</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“I love Tour! This is an amazing service and it has
                                                                saved
                                                                me and my small business so much time. I plan to use
                                                                it
                                                                for a long time to come. And i travel with Xpress
                                                                Tourism again
                                                                ” </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/google-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img2.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Liam Nohkan</h5>
                                                            <span>Istanbul</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="tesimonial-card-wrapper">
                                                    <div class="tesimonial-card">
                                                        <div class="testimonial-content">
                                                            <p>“Duis ac est tincidunt, bibendum eros attendato,
                                                                dignissim purus. Nunc posuere ornare velitbon,
                                                                bibendum
                                                                venenatis metus bibendum admora. Aliquam at
                                                                vestibulum.”
                                                            </p>
                                                        </div>
                                                        <div class="testimonial-bottom">
                                                            <div class="rating-area">
                                                                <ul class="rating">
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                    <li><i class="bi bi-star-fill"></i></li>
                                                                </ul>
                                                                <img src="assets/img/home1/icon/google-text-logo.svg"
                                                                    alt>
                                                            </div>
                                                            <div class="quote">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="74"
                                                                    height="51" viewBox="0 0 74 51">
                                                                    <g>
                                                                        <path
                                                                            d="M34.6075 16.7875C34.5735 16.4389 34.5054 16.0817 34.4202 15.733C33.6625 6.92252 26.2643 0 17.2484 0C7.72178 0 0 7.71343 0 17.2298C0 26.474 7.28758 33.9918 16.4311 34.417C14.2261 37.8953 10.676 40.7102 6.34258 42.0369L6.19785 42.0794C4.18866 42.6917 2.80095 44.6477 2.98825 46.8248C3.20109 49.3336 5.40609 51.1961 7.9261 50.9835C15.3414 50.3541 22.7567 46.5697 27.7967 40.4211C30.3252 37.3595 32.2833 33.7537 33.4752 29.8247C34.6756 25.9042 35.0843 21.669 34.6756 17.4934L34.6075 16.7875Z" />
                                                                        <path
                                                                            d="M73.1681 16.7875C73.134 16.4389 73.0659 16.0817 72.9808 15.733C72.2231 6.92252 64.8248 0 55.809 0C46.2823 0 38.5605 7.71343 38.5605 17.2298C38.5605 26.474 45.8481 33.9918 54.9917 34.417C52.7867 37.8953 49.2365 40.7102 44.9031 42.0369L44.7584 42.0794C42.7492 42.6917 41.3615 44.6477 41.5488 46.8248C41.7616 49.3336 43.9666 51.1961 46.4866 50.9835C53.9019 50.3541 61.3172 46.5697 66.3572 40.4211C68.8858 37.3595 70.8439 33.7537 72.0358 29.8247C73.2362 25.9042 73.6448 21.669 73.2362 17.4934L73.1681 16.7875Z" />
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                            <div class="date-and-time">
                                                                <p>May 9, 2023</p>
                                                                <span>10.30 PM</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="author-area">
                                                        <div class="author-img">
                                                            <img src="assets/img/home1/testi-author-img3.png" alt>
                                                        </div>
                                                        <div class="author-content">
                                                            <h5>Jack Michael</h5>
                                                            <span>Bangladesh</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider-btn-grp2">
                            <div class="slider-btn testimonial-card-tab-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17">
                                    <path
                                        d="M8.83399 0.281832L8.72217 0.16683L0.500652 8.50016L8.72217 16.8335L8.83398 16.7185L8.83398 13.0602L4.33681 8.50016L8.83399 3.94016L8.83399 0.281832Z" />
                                </svg>
                            </div>
                            <div class="slider-btn testimonial-card-tab-next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17"
                                    fill="none">
                                    <path
                                        d="M0.166016 16.7182L0.277828 16.8332L8.49935 8.49984L0.277828 0.166504L0.166016 0.281504V3.93984L4.66319 8.49984L0.166016 13.0598V16.7182Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials End -->



    <!-- NewsLetter Starts -->
    <div class="banner3-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner3-content">
                        <h2>Join The Newsletter</h2>
                        <p>To receive our best monthly deals</p>
                        <form>
                            <div class="from-inner">
                                <input type="email" placeholder="Enter Your Gmail...">
                                <button type="submit" class="from-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="17" viewBox="0 0 18 17">
                                        <path d="M7 1L16 8.5M16 8.5L7 16M16 8.5H0.5" stroke-width="1.5" />
                                    </svg>
                                </button>
                            </div>
                        </form>
                        <img src="assets/img/home1/banner3-vector1.png" alt class="vector1">
                        <img src="assets/img/home1/banner3-vector2.png" alt class="vector2">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Ends -->




    <!-- Footer Start -->
    <?php 
    Include("./include/footer.php");
    ?>
    <!-- Footer End -->



    <!-- /Rank Math WordPress SEO plugin -->
    <script type="application/ld+json" class="rank-math-schema">
    {
        "@context": "https://schema.org",
        "@graph": [{
            "@type": ["LocalBusiness", "Organization"],
            "@id": "https://xpresstourism.in/#website",
            "name": "Xpress Tourism",
            "url": "https://xpresstourism.in",
            "openingHours": ["Monday,Tuesday,Wednesday,Thursday,Saturday,Sunday 09:00-17:00"]
        }, {
            "@type": "WebSite",
            "@id": "https://xpresstourism.in/#website",
            "url": "https://xpresstourism.in",
            "name": "Xpress Tourism",
            "publisher": {
                "@id": "https://xpresstourism.in/#organization"
            },
            "inLanguage": "en"
        }, {
            "@type": "WebPage",
            "@id": "https://xpresstourism.in/#webpage",
            "url": "https://xpresstourism.in",
            "name": "Travel Tourism - Xpress Tourism",
            "datePublished": "2024-06-01T06:21:57-07:30",
            "dateModified": "2024-06-01T06:21:57-07:30",
            "isPartOf": {
                "@id": "https://xpresstourism.in/#website"
            },
            "inLanguage": "en"
        }, {
            "@type": "Person",
            "@id": "https://xpresstourism.in/author/admin/",
            "name": "xpressTourism",
            "url": "https://xpresstourism.in/author/admin/",
            "image": {
                "@type": "ImageObject",
                "@id": "https://xpresstourism.in/assets/img/home1/about-image.webp",
                "url": "https://xpresstourism.in/assets/img/home1/about-image.webp",
                "caption": "XpressTourism",
                "inLanguage": "en"
            },
            "sameAs": ["http://xpresstourism.in"],
            "worksFor": {
                "@id": "http://xpresstourism.in/#organization"
            }
        }, {
            "@type": "Article",
            "headline": "Travel Tourism - Xpress Tourism",
            "keywords": "travel tourism",
            "datePublished": "2024-06-01T06:21:57-07:30",
            "dateModified": "2024-06-01T06:21:57-07:30",
            "author": {
                "@id": "https://xpresstourism.in/author/admin/",
                "name": "XpressTourism"
            },
            "publisher": {
                "@id": "https://xpresstourism.in/#organization"
            },
            "description": "At Xpress Tourism, we believe that travel is not just about visiting new destinations, but about creating unforgettable experiences that leave a lasting imprint on your heart and mind.",
            "@id": "https://xpressdigital.in/travel-tourism/#richSnippet",
            "isPartOf": {
                "@id": "https://xpresstourism.in/#webpage"
            },
            "inLanguage": "en",
            "mainEntityOfPage": {
                "@id": "https://xpresstourism.in/#webpage"
            }
        }]
    }
    </script>
    <!-- /Rank Math WordPress SEO plugin -->


</body>

</html>