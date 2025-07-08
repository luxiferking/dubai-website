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
        style="background-image: linear-gradient(270deg, rgba(0, 0, 0, .3), rgba(0, 0, 0, 0.3) 101.02%), url(assets/img/home1/dubai-cruise-banner.webp);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <div class="banner-content">
                        <h1>Dubai Cruise</h1>
                        <ul class="breadcrumb-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Dubai Cruise</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- images -->
    <div class="package-details-area pt-120 mb-120">
        <div class="container">
            <div class="row">
                <div class="co-lg-12">
                    <div class="package-img-group mb-50">
                        <div class="row align-items-center g-3">
                            <div class="col-lg-6">
                                <div class="gallery-img-wrap">
                                    <img src="assets/img/home1/cruise1.webp" alt>
                                    <a data-fancybox="gallery-01" href="assets/img/home1/cruise1.1.webp"><i
                                            class="bi bi-eye"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 h-100">
                                <div class="row g-3 h-100">
                                    <div class="col-6">
                                        <div class="gallery-img-wrap">
                                            <img src="assets/img/home1/cruise2.webp" alt>
                                            <a data-fancybox="gallery-01"
                                                href="assets/img/home1/cruise2.1.webp"><i
                                                    class="bi bi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="gallery-img-wrap">
                                            <img src="assets/img/home1/cruise3.webp" alt>
                                            <a data-fancybox="gallery-01"
                                                href="assets/img/home1/cruise3.1.webp"><i
                                                    class="bi bi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="gallery-img-wrap">
                                            <img src="assets/img/home1/cruise4.webp" alt>
                                            <a data-fancybox="gallery-01"
                                                href="assets/img/home1/cruise4.1.webp"><i
                                                    class="bi bi-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="gallery-img-wrap">
                                            <img src="assets/img/home1/cruise5.webp" alt>
                                            <a data-fancybox="gallery-01"
                                                href="assets/img/home1/cruise5.1.webp"><i
                                                    class="bi bi-eye"></i></a>
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
            <div class="row g-xl-4 gy-5">
                <div class="col-xl-8">
                    <div class="eg-tag2">
                        <span>Dubai Cruise</span>
                    </div>
                    <h2>Dubai Cruise</h2>
                    <div class="tour-price">
                        <h3>$000/</h3><span>per person</span>
                    </div>
                    <ul class="tour-info-metalist">
                        <li>
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 7C14 8.85652 13.2625 10.637 11.9497 11.9497C10.637 13.2625 8.85652 14 7 14C5.14348 14 3.36301 13.2625 2.05025 11.9497C0.737498 10.637 0 8.85652 0 7C0 5.14348 0.737498 3.36301 2.05025 2.05025C3.36301 0.737498 5.14348 0 7 0C8.85652 0 10.637 0.737498 11.9497 2.05025C13.2625 3.36301 14 5.14348 14 7ZM7 3.0625C7 2.94647 6.95391 2.83519 6.87186 2.75314C6.78981 2.67109 6.67853 2.625 6.5625 2.625C6.44647 2.625 6.33519 2.67109 6.25314 2.75314C6.17109 2.83519 6.125 2.94647 6.125 3.0625V7.875C6.12502 7.95212 6.14543 8.02785 6.18415 8.09454C6.22288 8.16123 6.27854 8.2165 6.3455 8.25475L9.408 10.0048C9.5085 10.0591 9.62626 10.0719 9.73611 10.0406C9.84596 10.0092 9.93919 9.93611 9.99587 9.83692C10.0525 9.73774 10.0682 9.62031 10.0394 9.50975C10.0107 9.39919 9.93982 9.30426 9.842 9.24525L7 7.62125V3.0625Z">
                                </path>
                            </svg>
                            4 Days / 5 Night
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 7C7.92826 7 8.8185 6.63125 9.47487 5.97487C10.1313 5.3185 10.5 4.42826 10.5 3.5C10.5 2.57174 10.1313 1.6815 9.47487 1.02513C8.8185 0.368749 7.92826 0 7 0C6.07174 0 5.1815 0.368749 4.52513 1.02513C3.86875 1.6815 3.5 2.57174 3.5 3.5C3.5 4.42826 3.86875 5.3185 4.52513 5.97487C5.1815 6.63125 6.07174 7 7 7ZM14 12.8333C14 14 12.8333 14 12.8333 14H1.16667C1.16667 14 0 14 0 12.8333C0 11.6667 1.16667 8.16667 7 8.16667C12.8333 8.16667 14 11.6667 14 12.8333Z">
                                </path>
                            </svg>
                            Max People : 13
                        </li>
                        <li>
                            <svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M14 0.43748C14 0.372778 13.9856 0.308889 13.9579 0.250418C13.9302 0.191947 13.8898 0.140348 13.8398 0.0993396C13.7897 0.0583312 13.7312 0.0289339 13.6684 0.0132656C13.6057 -0.00240264 13.5402 -0.00395173 13.4768 0.00872996L9.1875 0.86623L4.89825 0.00872996C4.84164 -0.00258444 4.78336 -0.00258444 4.72675 0.00872996L0.35175 0.88373C0.252608 0.903546 0.163389 0.957088 0.099263 1.03525C0.0351366 1.11342 6.10593e-05 1.21138 0 1.31248L0 13.5625C3.90711e-05 13.6272 0.0144289 13.6911 0.0421328 13.7495C0.0698367 13.808 0.110165 13.8596 0.160212 13.9006C0.210259 13.9416 0.268779 13.971 0.331556 13.9867C0.394332 14.0024 0.459803 14.0039 0.52325 13.9912L4.8125 13.1337L9.10175 13.9912C9.15836 14.0025 9.21664 14.0025 9.27325 13.9912L13.6482 13.1162C13.7474 13.0964 13.8366 13.0429 13.9007 12.9647C13.9649 12.8865 13.9999 12.7886 14 12.6875V0.43748ZM4.375 12.3287V0.97123L4.8125 0.88373L5.25 0.97123V12.3287L4.89825 12.2587C4.84165 12.2474 4.78335 12.2474 4.72675 12.2587L4.375 12.3287ZM8.75 13.0287V1.67123L9.10175 1.74123C9.15836 1.75254 9.21664 1.75254 9.27325 1.74123L9.625 1.67123V13.0287L9.1875 13.1162L8.75 13.0287Z">
                                </path>
                            </svg>
                            Dubai Cruise
                        </li>
                    </ul>
                    <p>
                        
                    A Dubai cruise offers a luxurious and unforgettable way to explore the stunning coastline and iconic landmarks of this dynamic city in the United Arab Emirates (UAE). Here's what you might expect on a typical Dubai cruise experience:

                    </p>
                    <p> <strong>Dubai Marina:</strong>Many cruises depart from Dubai Marina, a sleek waterfront district known for its stunning skyscrapers, upscale residences, and vibrant dining and entertainment scene. Passengers can admire the modern architecture and bustling activity along the marina before embarking on their journey.</p>

                    <p> <strong>Cruising Along the Coastline: </strong>As the cruise ship sets sail, passengers can relax on deck and soak in the breathtaking views of Dubai's coastline. The ship glides past iconic landmarks such as the Palm Jumeirah, Atlantis, The Palm, and the Burj Al Arab, offering unrivaled photo opportunities against the backdrop of the azure Arabian Gulf.</p>





                </div>
                <?php 
                 Include("./include/inquiry.php");
                    ?>

                <h4>Activities Plan</h4>
                <div class="row mb-10">
                    <div class="col-8">
                        <div class="accordion tour-plan" id="tourPlan">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span>Day 01 :</span> Preparation and Departure
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#tourPlan">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="bi bi-check-lg"></i><strong>Morning:</strong> Final gear check
                                                and
                                                packing.</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Midday:</strong> Travel to the
                                                destination, ensuring everyone has the necessary equipment and
                                                provisions.
                                            </li>
                                            <li><i class="bi bi-check-lg"></i><strong>Afternoon/Evening:</strong> Set up
                                                camp or accommodation, review safety protocols, and plan for the
                                                following
                                                days.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span>Day 02 :</span> Warm-up and Exploration
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#tourPlan">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="bi bi-check-lg"></i><strong>Morning:</strong> Start with a
                                                relatively easier route to warm up, familiarize with the terrain.</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Midday:</strong> Break for lunch
                                                and
                                                assess conditions.</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Afternoon:</strong> Continue
                                                exploring, gradually increasing difficulty if the group is comfortable.
                                            </li>
                                            <li><i class="bi bi-check-lg"></i><strong>Evening:</strong> Return to the
                                                base,
                                                debrief, and plan for the next day.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <span>Day 03 :</span> Advanced Touring
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#tourPlan">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="bi bi-check-lg"></i><strong>Morning:</strong> Tackle a more
                                                challenging route, considering the group's capabilities and weather
                                                conditions.</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Midday:</strong> Evaluate
                                                progress,
                                                take necessary breaks, and ensure safety measures are in place.</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Afternoon:</strong> Enjoy the
                                                terrain,
                                                capturing the scenic beauty while advancing in skill and terrain
                                                difficulty.
                                            </li>
                                            <li><i class="bi bi-check-lg"></i><strong>Evening:</strong> Reflect on the
                                                day's
                                                experience, discuss any adjustments needed for the final day.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        <span>Day 04 :</span> Summit Attempt and Departure
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                    data-bs-parent="#tourPlan">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><i class="bi bi-check-lg"></i><strong>Morning:</strong> Summit Attempt
                                                and
                                                Departure</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Midday:</strong> Summit attempt or
                                                reach the day's touring goal.</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Afternoon:</strong> Begin descent,
                                                ensuring safety and enjoyment.</li>
                                            <li><i class="bi bi-check-lg"></i><strong>Evening:</strong> Pack up, depart
                                                for
                                                home or the next destination, debrief on the overall experience, and
                                                celebrate the adventure</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>





                    <?php 
                    Include("./include/enquiry-form.php");
                    ?>






                </div>
            </div>
        </div>
        <!-- images -->















<div class="container">
    <div class="row">
        <div class="col-6">
            <p class="about-bottom-img">
                <img src="./" alt="">
            </p>
        </div>
    </div>
</div>














</div>

        <?php 
    Include("./include/footer.php");
    ?>


</body>

</html>