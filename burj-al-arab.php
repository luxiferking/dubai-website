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



    <!-- Header Start -->
    <?php 
    Include("./include/header.php");
    ?>
    <!-- Header End -->


    <!-- Banner Starts -->

    <div class="breadcrumb-section"
        style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/home1/al-banner.webp);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Burj Al Arab</h1>
                        <ul class="breadcrumb-list">
                            <li>Home</li>
                            <li>Burj Al Arab</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->



    <!-- Content Start -->
    <div class="destination-details-wrap mb-120 pt-120">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <h2>Welcome To Burj Al Arab</h2>
                    <p>
                        The Burj Al Arab, often hailed as the epitome of luxury and opulence, stands as an iconic symbol
                        of Dubai's skyline, rising from the azure waters of the Arabian Gulf with unparalleled grace and
                        grandeur. As the world's first and only seven-star hotel, the Burj Al Arab is not just a place
                        to stay but a destination in its own right, where every detail is meticulously crafted to create
                        an unforgettable experience for its esteemed guests.

                        Approaching the Burj Al Arab, one is immediately struck by its architectural magnificence—a
                        billowing sail soaring 321 meters into the sky, seemingly defying gravity and inviting awe from
                        all who behold it. Bathed in a golden hue by day and illuminated by a kaleidoscope of colors at
                        night, the Burj Al Arab stands as a beacon of extravagance and sophistication on the Dubai
                        coastline.

                    </p>
                    <div class="destination-gallery mb-40 mt-40">
                        <div class="row g-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/home1/al1.webp" alt>
                                    <a data-fancybox="gallery-01" href="assets/img/home1/al1.1.webp"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-5 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/home1/al2.webp" alt>
                                    <a data-fancybox="gallery-01" href="assets/img/home1/al2.1.webp"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/home1/al3.webp" alt>
                                    <a data-fancybox="gallery-01" href="assets/img/home1/al3.1.webp"><i
                                            class="bi bi-eye"></i> Discover Island</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <h2>
                        "Burj Al Arab: Icon of Luxury"</h2>
                    <p>Icon of Luxury" epitomizes the pinnacle of opulence and extravagance in the heart of Dubai's
                        skyline. As you approach this architectural marvel, your eyes are drawn to its iconic
                        silhouette—a billowing sail reaching towards the heavens, a beacon of sophistication and
                        grandeur.

                        Step inside, and you're transported into a world of unparalleled luxury and indulgence. The
                        grandeur of the lobby leaves you breathless, with cascading water features and exquisite marble
                        floors setting the stage for the lavish experience that awaits.
                    </p>


                </div>




                <!-- sidebar start -->
                <?php 
                   Include("./include/sidebar.php");
                 ?>
                <!-- sidebar end -->



            </div>
        </div>
    </div>
    <!-- Content End -->










    <!-- Package start -->
    <?php 
    Include("./include/package.php");
    ?>
    <!-- Package End -->















    <?php 
    Include("./include/footer.php");
    ?>


</body>

</html>