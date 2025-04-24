<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- bootstrap 5.3.3 css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/foundation.min.css') }}">

    {{-- slick css --}}
    <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.min.css') }}">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.9.0/css/foundation.min.css"> --}}
    {{-- font-awesome css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <style>
        /* .navbar-toggler:focus {
            box-shadow: 0 0 0 2px;
        } */
    </style>
</head>

<body>
    <div class="main-header-container">
        <header class="bg-light py-3">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row gap-3">
                    <div class="logo-container">
                        <img src="{{ asset('assets/images/logo/text-logo-transperant.png') }}" alt="Logo">
                    </div>
                    <form action="#" class="flex-fill">
                        <div class="input-group position-relative mb-0 w-100">
                            <input type="text" class="form-control rounded-0 mb-0 border border-primary border-end-0"
                                placeholder="Search for category...." aria-label="Search"
                                aria-describedby="button-addon2" data-bs-toggle="modal"
                                data-bs-target="#category-search-pop-up">
                            <button class="z-3 btn btn-outline-primary ms-auto" data-bs-toggle="modal"
                                data-bs-target="#category-search-pop-up" type="button" id="button-addon2"><i
                                    class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </form>
                    {{-- <div class="header-contact gap-3 d-none d-md-block">
                        <a href="tel:+1234567890" class="text-decoration-none text-dark"><i class="fa-solid fa-phone text-primary"></i>
                            <span class="text-danger fw-bold">
                                +91 1234567890
                            </span>
                        </a>
                        <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-heart"></i></a>
                        <a href="#" class="text-decoration-none text-dark"><i
                                class="fa-solid fa-cart-shopping"></i></a>
                    </div> --}}
                    <div class="header-social-icons-container d-none d-md-flex d-flex gap-3">
                        <div
                            class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-4 rounded-1">
                            <i class="fa-brands fa-instagram"></i>
                        </div>
                        <div
                            class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-5 rounded-1">
                            <i class="fa-brands fa-facebook-f"></i>
                        </div>
                        {{-- <div class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-4 rounded-1">
                            <i class="fa-brands fa-youtube"></i>
                        </div> --}}
                        <div
                            class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-5 rounded-1">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div
                            class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-4 rounded-1">
                            <i class="fa-brands fa-whatsapp"></i>
                        </div>
                    </div>
                    <div class="hamburger-menu-container">
                        <div class="hamburger-menu"></div>
                    </div>
                </div>
            </div>
            {{-- nav --}}
            <nav class="container-fluid position-relative">
                <ul class="d-none justify-content-center align-items-center list-unstyled mb-0">
                    <li class="dropdown">
                        <a href="#" class="px-3 py-2 text-decoration-none menu-link shop-category">Shop <i
                                class="fa-solid fa-angle-down"></i></a>

                    </li>
                </ul>
            </nav>

        </header>
        <div class="header-outer-container">
            <!-- Navbar Start Here -->
            <div class="navigation bg-light">
                <div class="grid-container grid-x grid-padding-x nav-wrap">
                    <div class="small-12 large-12 medium-12 cell">
                        <div class="align-center top-bar bg-light">
                            {{-- <div class="top-bar-title">
                      <span data-responsive-toggle="responsive-menu" data-hide-for="large">
                        <a data-toggle><span class="menu-icon dark float-left"></span></a>
                      </span>
                    </div> --}}
                            <nav id="responsive-menu">
                                <ul class="menu vertical large-horizontal dropdown bg-light"
                                    data-responsive-menu="accordion medium-dropdown" role="menubar"
                                    data-dropdown-menu="4gg5js-dropdown-menu" data-disable-hover="true">
                                    <li role="menuitem">
                                        <a class="nav-border" href="#" tabindex="0">Home</a>
                                    </li>
                                    <li id="about-menu" role="menuitem">
                                        <a href="#"> About Us </a>
                                    </li>
                                    {{-- <li role="menuitem">
                          <a href="dr-monica-kapoor.php">Dr Monica kapoor </a>
                        </li> --}}
                                    <li id="service-menu"
                                        class="single-sub parent-nav is-dropdown-submenu-parent opens-right"
                                        role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="Courses">
                                        <!-- <a href="services.php">Services</a> -->
                                        <p>Shop <i class="fa-solid fa-chevron-down"></i></p>
                                    </li>

                                    {{-- <li role="menuitem">
                          <a href="celebrity-trusted.php">Celebrity trusted </a>
                        </li>
                        <li role="menuitem">
                          <a href="before%26after.php">Before & After </a>
                        </li>
                        <li id="testimonials-menu" class="single-sub parent-nav is-dropdown-submenu-parent opens-right"
                          role="menuitem" aria-haspopup="true" aria-expanded="false" aria-label="Courses">
                          <p>Testimonials<i class="fa-solid fa-chevron-down"></i></p>
                        </li> --}}
                                    <li role="menuitem">
                                        <a href="#">Blogs </a>
                                    </li>
                                    <li role="menuitem">
                                        <a href="#">Contact us </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navigation-submenu">
                <ul>
                    <li data-target=".skin-submenu">
                        <p>
                            Food & Grocery <span><i class="fa-solid fa-chevron-down"></i></span>
                        </p>
                        <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
                    </li>
                    <li data-target=".hair-submenu">
                        <p>
                            Dairy & Eggs <span><i class="fa-solid fa-chevron-down"></i></span>
                        </p>
                        <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
                    </li>
                    <li data-target=".lasers-submenu">
                        <p>
                            Beverages <span><i class="fa-solid fa-chevron-down"></i></span>
                        </p>
                        <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
                    </li>
                    <li data-target=".slimming-submenu">
                        <p>
                            Logistics & Transportation <span><i class="fa-solid fa-chevron-down"></i></span>
                        </p>
                        <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
                    </li>
                    <li data-target=".antiaging-submenu">
                        <p>
                            Real Estate & Construction <span><i class="fa-solid fa-chevron-down"></i></span>
                        </p>
                        <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
                    </li>
                    {{-- <li data-target=".dental-submenu">
                  <p>
                    Dental <span><i class="fa-solid fa-chevron-down"></i></span>
                  </p>
                  <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
                </li>
                <li>
                  <a href="#">
                    Bridal Makeover
                  </a>
                </li>
                <li>
                  <a href="#">
                    Cosmetic Gynecology
                  </a>
                </li> --}}
                </ul>
                <div class="submenu-treatment-tab">
                    <ul class="treatment-tab-holder skin-submenu">
                        <li>
                            <a href="#">
                                Anaya Rice
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Pure and Hygienic Sugar
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Pure Cooking Oil
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Iram Dates
                            </a>
                        </li>
                        {{-- <li>
                    <a href="skin-whitening.php">
                      SKIN WHITENING
                    </a>
                  </li>
                  <li>
                    <a href="iv-fusion.php">
                      IV FUSION
                    </a>
                  </li>
                  <li>
                    <a href="under-eye-dark-circles.php">
                      UNDER EYE DARK CIRCLES
                    </a>
                  </li>
                  <li>
                    <a href="fine-lines.php">
                      FINE LINES
                    </a>
                  </li>
                  <li>
                    <a href="glow-shine-&-rejuvenation.php">
                      GLOW SHINE & REJUVENATION
                    </a>
                  </li>
                  <li>
                    <a href="open-pores-and-oily-skin.php">
                      OPEN PORES/ OILY SKIN
                    </a>
                  </li>
                  <li>
                    <a href="mole-tag.php">
                      MOLE TAG
                    </a>
                  </li>
                  <li>
                    <a href="chemical-peels.php">
                      CHEMICAL PEELS
                    </a>
                  </li>
                  <li>
                    <a href="derma-pen.php">
                      DERMA PEN
                    </a>
                  </li>
                  <li>
                    <a href="hydrafacial.php">
                      HYDRAFACIAL
                    </a>
                  </li>
                  <li>
                    <a href="skin-polishing.php">
                      SKIN POLISHING
                    </a>
                  </li> --}}
                    </ul>
                    <ul class="treatment-tab-holder hair-submenu">
                        <li>
                            <a href="#">
                                Anaya Dairy Products
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Real Eggs
                            </a>
                        </li>
                        {{-- <li>
                    <a href="mesotherapy.php">
                      MESOTHERAPY
                    </a>
                  </li>
                  <li>
                    <a href="microneedling.php">
                      MICRO NEEDLING
                    </a>
                  </li>
                  <li>
                    <a href="gfc.php">
                      GFC
                    </a>
                  </li>
                  <li>
                    <a href="exosomes.php">
                      EXOSOMES
                    </a>
                  </li>
                  <li>
                    <a href="laser-helmet.php">
                      LASER HELMET
                    </a>
                  </li>
                  <li>
                    <a href="dandruff-treatments.php">
                      DANDRUFF TREATMENTS
                    </a>
                  </li>
                  <li>
                    <a href="alopecia-treatments.php">
                      ALOPECIA TREATMENTS
                    </a>
                  </li>
                  <li>
                    <a href="hair-transplant.php">
                      HAIR TRANSPLANT
                    </a>
                  </li> --}}
                    </ul>
                    <ul class="treatment-tab-holder lasers-submenu">
                        <li>
                            <a href="#">
                                Zhakaas Jeera Masala
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Anaya Tea
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Real Oxy
                            </a>
                        </li>
                        {{-- <li>
                    <a href="laser-toning.php">
                      LASER TONING
                    </a>
                  </li>
                  <li>
                    <a href="laser-resurfacing.php">
                      LASER RESURFACING
                    </a>
                  </li>
                  <li>
                    <a href="pigmentation-with-lasers.php">
                      PIGMENTATION WITH LASERS
                    </a>
                  </li> --}}
                    </ul>
                    <ul class="treatment-tab-holder slimming-submenu">
                        <li>
                            <a href="#">
                                Dream Transport
                            </a>
                        </li>
                        {{-- <li>
                    <a href="weight-loss.php">
                      WEIGHT LOSS
                    </a>
                  </li>
                  <li>
                    <a href="inch-loss.php">
                      INCH LOSS
                    </a>
                  </li>
                  <li>
                    <a href="tummy-tucks.php">
                      TUMMY TUCKS
                    </a>
                  </li>
                  <li>
                    <a href="cryolipolysis.php">
                      CRYOLIPOLYSIS
                    </a>
                  </li>
                  <li>
                    <a href="face-lift-&-tightening.php">
                      FACE LIFT & TIGHTENING
                    </a>
                  </li>
                  <li>
                    <a href="mesolipo-injections.php">
                      MESOLIPO INJECTIONS
                    </a>
                  </li>
                  <li>
                    <a href="double-chin-treatments.php">
                      DOUBLE CHIN TREATMENTS
                    </a>
                  </li>
                  <li>
                    <a href="lipo-treatments.php">
                      LIPO TREATMENTS
                    </a>
                  </li>
                  <li>
                    <a href="rf-face-&-body-tightening.php">
                      RF FACE & BODY TIGHTENING
                    </a>
                  </li>
                  <li>
                    <a href="hifu-tightening.php">
                      HIFU TIGHTENING
                    </a>
                  </li> --}}
                    </ul>
                    <ul class="treatment-tab-holder antiaging-submenu">
                        <li>
                            <a href="#">
                                Dream Sunshine Developers
                            </a>
                        </li>
                        {{-- <li>
                    <a href="fillers-treatment.php">
                      FILLERS TREATMENTS
                    </a>
                  </li>
                  <li>
                    <a href="lip-filler.php">
                      LIP FILLER
                    </a>
                  </li>
                  <li>
                    <a href="botox-treatment.php">
                      BOTOX TREATMENTS
                    </a>
                  </li>
                  <li>
                    <a href="facial-threads.php">
                      FACIAL THREADS
                    </a>
                  </li>
                  <li>
                    <a href="back-hands-rejuvenation.php">
                      BACK HANDS REJUVENATION
                    </a>
                  </li>
                  <li>
                    <a href="under-eye-treatment.php">
                      UNDER EYE TREATMENTS
                    </a>
                  </li>
                  <li>
                    <a href="cheeks-&-chin-filler.php">
                      CHEEKS & CHIN FILLERS
                    </a>
                  </li>
                  <li>
                    <a href="russian-filler.php">
                      RUSSIAN FILLERS
                    </a>
                  </li>
                  <li>
                    <a href="hifu-facelift.php">
                      HIFU FACELIFT
                    </a>
                  </li>
                  <li>
                    <a href="rf-face-lift.php">
                      RF FACE LIFT
                    </a>
                  </li> --}}
                    </ul>
                    {{-- <ul class="treatment-tab-holder dental-submenu">
                  <li>
                    <a href="#">
                      COSMETIC DENTISTRY
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      TEETH WHITENING
                    </a>
                  </li>
                </ul> --}}
                </div>
            </div>
            <div class="testimonials-submenu">
                {{-- <ul>
                <li data-target=".skin-submenu">
                  <a href="reviews.php">
                    Reviews
                  </a>
                </li>
                <li data-target=".hair-submenu">
                  <a href="facial-threads.php">
                    Video
                  </a>
                </li>
              </ul> --}}
            </div>



            <div class="new-navbar">
                <div class="hamburger-container">
                    <div class="hamburger"></div>
                </div>
                <div class="new-menu-container">
                    <ul class="new-main-menu">
                        <li class="menu">
                            <a href="#">
                                home
                            </a>
                        </li>
                        <!-- <li class="menu" onclick="toggleActiveClass('about-menu')"> -->
                        <li class="menu">
                            <a href="#">
                                about us
                            </a>
                        </li>
                        {{-- <li class="menu">
                    <a href="dr-monica-kapoor.php">
                      Dr Monica kapoor
                    </a>
                  </li> --}}
                        <li class="menu" onclick="toggleActiveClass('services-menu')"
                            style="display: flex; align-items: center; justify-content: space-between;">
                            <p>
                                Shop
                            </p>
                            <i class="fa-solid fa-chevron-right" style="color: white; padding-right:10px"></i>
                        </li>
                        {{-- <li class="menu">
                    <a href="celebrity-trusted.php">
                      Celebrity trusted
                    </a>
                  </li> --}}
                        {{-- <li class="menu">
                    <a href="media-presence.php">
                      Media
                    </a>
                  </li> --}}
                        {{-- <li class="menu">
                    <a href="before%26after.php">
                      Before & After
                    </a>
                  </li> --}}
                        {{-- <li class="menu" onclick="toggleActiveClass('testimonials-menu')"
                    style="display: flex; align-items: center; justify-content: space-between;">
                    <p>
                      Testimonials
                    </p>
                    <i class="fa-solid fa-chevron-right" style="color: white; padding-right:10px"></i>
                  </li> --}}
                        <li class="menu">
                            <a href="#">
                                Blogs
                            </a>
                        </li>
                        <li class="menu">
                            <a href="#">
                                Contact us
                            </a>
                        </li>
                    </ul>
                    <ul class="services-menu new-menu-holder">
                        <div class="back-to-menu p-3 px-2 border-bottom border-black">
                            <p>
                                < back to menu</p>
                        </div>
                        <li data-target=".small-skin-submenu">
                            <p>
                                Food & Grocery
                            </p>
                            <i class="fa-solid fa-plus"></i>

                        </li>
                        <ul class="new-submenu-holder small-skin-submenu">
                            <li>
                                <a href="#">
                                    Anaya Rice
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pure and Hygienic Sugar
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Pure Cooking Oil
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Iram Dates
                                </a>
                            </li>
                            {{-- <li>
                      <a href="skin-whitening.php">
                        SKIN WHITENING
                      </a>
                    </li>
                    <li>
                      <a href="iv-fusion.php">
                        IV FUSION
                      </a>
                    </li>
                    <li>
                      <a href="under-eye-dark-circles.php">
                        UNDER EYE DARK CIRCLES
                      </a>
                    </li>
                    <li>
                      <a href="fine-lines.php">
                        FINE LINES
                      </a>
                    </li>
                    <li>
                      <a href="glow-shine-&-rejuvenation.php">
                        GLOW SHINE & REJUVENATION
                      </a>
                    </li>
                    <li>
                      <a href="open-pores-and-oily-skin.php">
                        OPEN PORES/ OILY SKIN
                      </a>
                    </li>
                    <li>
                      <a href="mole-tag.php">
                        MOLE TAG
                      </a>
                    </li>
                    <li>
                      <a href="chemical-peels.php">
                        CHEMICAL PEELS
                      </a>
                    </li>
                    <li>
                      <a href="derma-pen.php">
                        DERMA PEN
                      </a>
                    </li>
                    <li>
                      <a href="hydrafacial.php">
                        HYDRAFACIAL
                      </a>
                    </li>
                    <li>
                      <a href="skin-polishing.php">
                        SKIN POLISHING
                      </a>
                    </li> --}}
                        </ul>
                        <li data-target=".small-hair-submenu">
                            <p>
                                Dairy & Eggs
                            </p>
                            <i class="fa-solid fa-plus"></i>

                        </li>
                        <ul class="new-submenu-holder small-hair-submenu">
                            <li>
                                <a href="#">
                                    Anaya Dairy Products
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Real Eggs
                                </a>
                            </li>
                            {{-- <li>
                      <a href="mesotherapy.php">
                        MESOTHERAPY
                      </a>
                    </li>
                    <li>
                      <a href="microneedling.php">
                        MICRO NEEDLING
                      </a>
                    </li>
                    <li>
                      <a href="gfc.php">
                        GFC
                      </a>
                    </li>
                    <li>
                      <a href="exosomes.php">
                        EXOSOMES
                      </a>
                    </li>
                    <li>
                      <a href="laser-helmet.php">
                        LASER HELMET
                      </a>
                    </li>
                    <li>
                      <a href="dandruff-treatments.php">
                        DANDRUFF TREATMENTS
                      </a>
                    </li>
                    <li>
                      <a href="alopecia-treatments.php">
                        ALOPECIA TREATMENTS
                      </a>
                    </li>
                    <li>
                      <a href="hair-transplant.php">
                        HAIR TRANSPLANT
                      </a>
                    </li> --}}
                        </ul>
                        <li data-target=".small-lasers-submenu">
                            <p>
                                Beverages
                            </p>
                            <i class="fa-solid fa-plus"></i>

                        </li>
                        <ul class="new-submenu-holder small-lasers-submenu">
                            <li>
                                <a href="#">
                                    Zhakaas Jeera Masala
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Anaya Tea
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Real Oxy
                                </a>
                            </li>
                            {{-- <li>
                      <a href="laser-toning.php">
                        LASER TONING
                      </a>
                    </li>
                    <li>
                      <a href="laser-resurfacing.php">
                        LASER RESURFACING
                      </a>
                    </li>
                    <li>
                      <a href="pigmentation-with-lasers.php">
                        PIGMENTATION WITH LASERS
                      </a>
                    </li> --}}
                        </ul>
                        <li data-target=".small-slimming-submenu">
                            <p>
                                Logistics & Transportation
                            </p>
                            <i class="fa-solid fa-plus"></i>

                        </li>
                        <ul class="new-submenu-holder small-slimming-submenu">
                            <li>
                                <a href="#">
                                    Dream Transport
                                </a>
                            </li>
                            {{-- <li>
                      <a href="weight-loss.php">
                        WEIGHT LOSS
                      </a>
                    </li>
                    <li>
                      <a href="inch-loss.php">
                        INCH LOSS
                      </a>
                    </li>
                    <li>
                      <a href="tummy-tucks.php">
                        TUMMY TUCKS
                      </a>
                    </li>
                    <li>
                      <a href="cryolipolysis.php">
                        CRYOLIPOLYSIS
                      </a>
                    </li>
                    <li>
                      <a href="face-lift-&-tightening.php">
                        FACE LIFT & TIGHTENING
                      </a>
                    </li>
                    <li>
                      <a href="mesolipo-injections.php">
                        MESOLIPO INJECTIONS
                      </a>
                    </li>
                    <li>
                      <a href="double-chin-treatments.php">
                        DOUBLE CHIN TREATMENTS
                      </a>
                    </li>
                    <li>
                      <a href="lipo-treatments.php">
                        LIPO TREATMENTS
                      </a>
                    </li>
                    <li>
                      <a href="rf-face-&-body-tightening.php">
                        RF FACE & BODY TIGHTENING
                      </a>
                    </li>
                    <li>
                      <a href="hifu-tightening.php">
                        HIFU TIGHTENING
                      </a>
                    </li> --}}
                        </ul>
                        <li data-target=".small-antiaging-submenu">
                            <p>
                                Real Estate & Construction
                            </p>
                            <i class="fa-solid fa-plus"></i>

                        </li>
                        <ul class="new-submenu-holder small-antiaging-submenu">
                            <li>
                                <a href="#">
                                    Dream Sunshine Developers
                                </a>
                            </li>
                            {{-- <li>
                      <a href="fillers-treatment.php">
                        FILLERS TREATMENTS
                      </a>
                    </li>
                    <li>
                      <a href="lip-filler.php">
                        LIP FILLER
                      </a>
                    </li>
                    <li>
                      <a href="botox-treatment.php">
                        BOTOX TREATMENTS
                      </a>
                    </li>
                    <li>
                      <a href="facial-threads.php">
                        FACIAL THREADS
                      </a>
                    </li>
                    <li>
                      <a href="back-hands-rejuvenation.php">
                        BACK HANDS REJUVENATION
                      </a>
                    </li>
                    <li>
                      <a href="under-eye-treatment.php">
                        UNDER EYE TREATMENTS
                      </a>
                    </li>
                    <li>
                      <a href="cheeks-&-chin-filler.php">
                        CHEEKS & CHIN FILLERS
                      </a>
                    </li>
                    <li>
                      <a href="russian-filler.php">
                        RUSSIAN FILLERS
                      </a>
                    </li>
                    <li>
                      <a href="hifu-facelift.php">
                        HIFU FACELIFT
                      </a>
                    </li>
                    <li>
                      <a href="rf-face-lift.php">
                        RF FACE LIFT
                      </a>
                    </li> --}}
                        </ul>
                        {{-- <li data-target=".small-dental-submenu">
                    <p>
                      Dental
                    </p>
                    <i class="fa-solid fa-plus"></i>

                  </li>
                  <ul class="new-submenu-holder small-dental-submenu">
                    <li>
                      <a href="cosmetic-dentistry.php">
                        COSMETIC DENTISTRY
                      </a>
                    </li>
                    <li>
                      <a href="teeth-whitening.php">
                        TEETH WHITENING
                      </a>
                    </li>
                  </ul>
                  <li>
                    <p>
                      BRIDAL MAKEOVER
                    </p>
                  </li>
                  <li>
                    <p>
                      COSMETIC GYNECOLOGY
                    </p>
                  </li> --}}
                    </ul>
                    {{-- <ul class="testimonials-menu new-menu-holder">
                  <div class="back-to-menu">
                    <p>
                      < back to menu</p>
                  </div>
                  <li>
                    <a href="reviews.php">
                      Reviews
                    </a>
                  </li>
                  <li>
                    <a href="rf-face-lift.php">
                      Video
                    </a>
                  </li>
                </ul> --}}

                </div>
            </div>
            <!-- Navbar End Here -->
        </div>
    </div>

    <div class="modal fade bg-white" id="category-search-pop-up" tabindex="-1"
        aria-labelledby="category-search-pop-up-label" aria-modal="true" role="dialog">
        <div class="p-1">
            <div class="modal-dialog modal-xl">
                <div class="modal-content border-0">
                    <div class="modal-header border-0">
                        <h1 class="modal-title fs-5" id="category-search-pop-up-label"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        <form action="#" class="position-sticky top-0">
                            <div class="row bg-white pt-3">
                                <div class="d-flex justify-content-center align-items-center gap-3">
                                    <input type="text"
                                        class="no-focus form-control rounded-0 shadow-none border-0 border-bottom mb-0"
                                        aria-label="Search" placeholder="Search for category....">
                                    {{-- <input type="text"
                                        class="no-focus form-control position-relative rounded-0 pe-5 border-0 border-bottom"
                                        placeholder="Search for category...." aria-label="Search"
                                        aria-describedby="button-addon2"> --}}
                                    <button class="btn btn-outline-primary border-0" type="button"
                                        id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                                </div>
                            </div>
                            <div class="row bg-white py-3">
                                <div class="text-center">
                                    <h4 class="mb-3">
                                        Popular Searches
                                    </h4>
                                    <div class="d-flex justify-content-center align-items-center flex-wrap gap-3">
                                        <a href="#"
                                            class="btn btn-outline-primary text-decoration-none px-3 py-1">Oil
                                            Products</a>
                                        <a href="#"
                                            class="btn btn-outline-primary text-decoration-none px-3 py-1">Dairy
                                            Products</a>
                                        <a href="#"
                                            class="btn btn-outline-primary text-decoration-none px-3 py-1">Rice
                                            Products</a>
                                        <a href="#"
                                            class="btn btn-outline-primary text-decoration-none px-3 py-1">Real-oxy
                                            Products</a>
                                        <a href="#"
                                            class="btn btn-outline-primary text-decoration-none px-3 py-1">Zhakaas
                                            Jeera Products</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="mt-4">
                            <div class="row pop-up-category-section">
                                <div class="col-lg-6 p-2 bg-light">
                                    <div
                                        class="d-flex justify-content-start align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/anaya dairy product/Untitled-2.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">anaya dairy product</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/anaya rice/Untitled-2.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">anaya rice</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/dream sun shine developers/Untitled-1.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">dream sun shine developers</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/dream transport/Untitled-1.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">dream transport</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/iram dates/iram-dates.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">iram dates</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/pure and hygienic suger/Untitled-1.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">pure and hygienic suger</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/pure cooking oil/Untitled-7.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">pure cooking oil</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/real eggs/real-eggs-2.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">real eggs</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/real-oxy/real-oxy.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">real-oxy</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 p-2 bg-light">
                                    <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                                        <div
                                            class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                                            <img src="{{ asset('assets/images/category/zhakaas jeera masala/zhakaas-jeera-masala-1.png') }}"
                                                alt="" class="pop-up-categogy-img">
                                        </div>
                                        <div class="pop-up-category-info-container">
                                            <h5 class="pop-up-category-name">zhakaas jeera masala</h5>
                                            {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                                            <a href="#"
                                                class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                                                Products <i class="fa-solid fa-arrow-right"></i></a>
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

    <main>
        <div class="banner-section">

        </div>
        <div class="owl-carousel" id="home-banner">
            <div>
                <img src="{{ asset('assets/images/home-banner/dairy&egg.jpeg') }}" class="home-banner-image"
                    alt="oil-banner">
                {{-- <img src="{{ asset('assets/images/home-banner/Dreamsunshinebanner-1.png') }}" class="home-banner-image" alt="oil-banner"> --}}
            </div>
            <div>
                <img src="{{ asset('assets/images/home-banner/Dreamsunshinebanner-1.png') }}"
                    class="home-banner-image" alt="oil-banner">
            </div>
            <div>
                <img src="{{ asset('assets/images/home-banner/vegetable-oil-banner.png') }}"
                    class="home-banner-image d-none d-md-block" alt="oil-banner">
                <img src="{{ asset('assets/images/home-banner/mobile-vegetable-oil-banner.png') }}"
                    class="home-banner-image d-block d-md-none" alt="oil-banner">
                <div class="banner-text-container">
                    <h2 class="text-primary mb-3 fw-bold fs-1"> Dream Sunshine</h2>
                    <h3 class="text-white mb-0 fw-bold fs-2"> Low Fat Cooking Promise Of Quality</h3>
                </div>
            </div>
            {{-- <div>
                <img src="{{ asset('assets/images/home-banner/dry-fruits-banner.jpg') }}" class="home-banner-image d-none d-md-block" alt="oil-banner">
                <img src="{{ asset('assets/images/home-banner/mobile-rice-banner1.jpg') }}" class="home-banner-image d-block d-md-none" alt="oil-banner">
                <div class="banner-text-container">
                    <h2 class="text-primary mb-3 fw-bold fs-1"> Iram Dates</h2>
                    <h3 class="text-danger mb-0 fw-bold fs-2"> Iram Kimia Dates, Dry Fruits</h3>
                </div>
            </div>
            <div>
                <img src="{{ asset('assets/images/home-banner/rice-banner.jpg') }}" class="home-banner-image d-none d-md-block" alt="oil-banner">
                <img src="{{ asset('assets/images/home-banner/mobile-rice-banner1.jpg') }}" class="home-banner-image d-block d-md-none" alt="oil-banner">
                <div class="banner-text-container">
                    <h2 class="text-primary mb-3 fw-bold fs-1"> Anaya Rice</h2>
                    <h3 class="text-danger mb-0 fw-bold fs-2"> The Perfect Partner For Every Meal</h3>
                </div>
            </div> --}}
        </div>

        <!-- ==================================================
           About Us Section - Start
        ================================================== -->
        <section class="hero_section decoration_wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero_content_wrap">
                            <h1 class="heading_text">Built on Quality, Driven by Excellence</h1>
                            <p class="heading_description">
                                Quality is the foundation of everything we do. Since 2018, we've remained dedicated to
                                delivering products and services that are dependable, well-crafted, and thoughtfully
                                curated to meet real-world needs.
                            </p>
                            <p class="heading_description">
                                With a strong focus on precision and professionalism, every offering undergoes thorough
                                checks to ensure it meets our high standards before reaching our customers.
                            </p>
                            <p class="heading_description">
                                This unwavering commitment to excellence has earned us a trusted reputation in the
                                industry. We believe in consistency, reliability, and a no-compromise attitude toward
                                quality—because delivering the best isn’t just a goal, it’s our standard.
                            </p>

                            {{-- <ul class="hero_section_counter d-flex align-items-start justify-content-between flex-wrap gap-3 list-unstyled">
                      <li class="d-flex flex-column align-items-center text-center gap-3 list-unstyled">
                        <i class="fa-solid fa-trophy fa-3x text-primary"></i>
                        <div class="counter_item">
                          <div class="counter_value mb-3">
                            <span class="odometer" data-count="7">7</span>
                            <span>+</span>
                          </div>
                          <p class="counter_description mb-0">
                            The years of our experience
                          </p>
                        </div>
                      </li>
                      <li class="d-flex flex-column align-items-center text-center gap-3 list-unstyled">
                        <i class="fa-solid fa-cart-shopping fa-3x text-primary"></i>
                        <div class="counter_item">
                          <div class="counter_value mb-3">
                            <span class="odometer" data-count="20">20</span>
                            <span>+</span>
                          </div>
                          <p class="counter_description mb-0">
                            Number of Products
                          </p>
                        </div>
                      </li>
                      <li class="d-flex flex-column align-items-center text-center gap-3 list-unstyled">
                        <i class="fa-solid fa-face-smile fa-3x text-primary"></i>
                        <div class="counter_item">
                          <div class="counter_value mb-3">
                            <span class="odometer" data-count="100">100</span>
                            <span>%</span>
                          </div>
                          <p class="counter_description mb-0">
                            Client
                            <br>
                            satisfaction
                          </p>
                        </div>
                      </li>
                    </ul> --}}
                            <ul class="btns_group gap-3 m-0 mb-3 d-flex">
                                <li>
                                    <a class="btn btn-primary rounded-1" href="contact.html">
                                        <span class="btn_text" data-text="Get A Consultation">
                                            Contact Now
                                        </span>
                                        <span class="btn_icon">
                                            {{-- <i class="fa-solid fa-arrow-up-right"></i> --}}
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-outline-secondary rounded-1" href="about.html">
                                        <span class="btn_text" data-text="Learn More">
                                            Read More
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero_image_wrap">
                            <img src="{{ asset('assets/images/about/New Dreams catalogue-1.png') }}"
                                alt="Talking Minds – Psychotherapist Site Template">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
           About Us Section - End
          ================================================== -->

        <!-- ==================================================
         CATEGORIES Section - Start
        ================================================== -->
        <section class="categories_section section_space_lg">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="section_heading">
                            <h2 class="section_heading_text">Categories</h2>
                            <p class="section_heading_description mb-0">
                                Explore our range of bulk essentials — dairy, rice, sugar, oil, and more. Perfect for
                                businesses, retailers, and food services looking for quality and value.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme" id="categoriesSectionCarousel">
                            <div class="categories_item m-2">
                                <div class="border rounded-2">
                                    <div>
                                        <img src="{{ asset('assets/images/blog/dairy-product-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="categories_content py-2 px-3">
                                        <div class="d-flex justify-content-between align-items-center overflow-hidden">
                                            <div class="categories_details">
                                                <div>
                                                    <a href="#" class="fs-6 fw-bolder">Food & Grocery</a>
                                                </div>
                                                <span class="mb-0">8 products</span>
                                            </div>
                                            <div class="categories_btn_container ">
                                                <div class="categories_btn rounded-1">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categories_item m-2">
                                <div class="border rounded-2">
                                    <div>
                                        <img src="{{ asset('assets/images/blog/dairy-product-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="categories_content py-2 px-3">
                                        <div class="d-flex justify-content-between align-items-center overflow-hidden">
                                            <div class="categories_details">
                                                <div>
                                                    <a href="#" class="fs-6 fw-bolder">Dairy & Eggs</a>
                                                </div>
                                                <span class="mb-0">10 products</span>
                                            </div>
                                            <div class="categories_btn_container ">
                                                <div class="categories_btn rounded-1">
                                                    <i class="fa-solid fa-arrow-right"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="categories_item m-2">
                                <div class="border rounded-2">
                                    <div>
                                        <img src="{{ asset('assets/images/blog/dairy-product-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="categories_content py-2 px-3">
                                        <div class="d-flex justify-content-between align-items-center overflow-hidden">
                                            <div class="categories_details">
                                                <div>
                                                    <a href="#" class="fs-6 fw-bolder">Beverages</a>
                                                </div>
                                                <span class="mb-0">12 products</span>
                                            </div>
                                            <div class="categories_btn_container">
                                                <div class="categories_btn rounded-1">
                                                    <i class="fa-solid fa-arrow-right"></i>
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
        </section>
        <!-- ==================================================
         CATEGORIES Section - End
        ================================================== -->

        <section class="dram-section">
            <div class="container position-relative overflow-hidden">
                <div class="section_heading text-center">
                    <h2 class="section_heading_text">Featured Product</h2>
                    <p class="section_heading_description text-center mb-0">
                        Here are some of the Featured Product which you may like
                    </p>
                </div>
                <div class="owl-carousel owl-theme position-relative product-carousel" id="productSectionCarousel3">
                    {{-- @foreach ($bestOffer as $data) --}}

                    <div class="item">
                        {{-- <a href="{{ route('product', ['id' => $data->id, 'slug' => $data->slug_url]) }}"> --}}
                        <a href="#">
                            <div class="product-card">
                                <div class="product-card-img position-relative overflow-hidden">
                                    {{-- <img src="{!! asset('storage/images/products/' . $data->image_url) !!}" alt="1200 * 1200" /> --}}
                                    <img src="{!! asset('assets/images/category/iram dates/iram-dates.png') !!}" alt="" />
                                    <span class="new-badge fs-small-heading">New</span>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                        {{-- <a href="{{ route('product', ['id' => $data->id, 'slug' => $data->slug_url]) }}">
                                            Premium Bufflo Milk
                                        </a> --}}
                                        <a href="#">
                                            iram dates
                                        </a>
                                    </h5>
                                    <div class="rating fxsm-heading color-1">
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star-half" aria-hidden="true"></i>
                                        <i class="ion-ios-star de-selected" aria-hidden="true"></i>
                                        {{-- @if ($data->review_status)
                                            @for ($i = 1; $i <= (int) $data->rating; $i++)
                                                <i class="ion-ios-star" aria-hidden="true"></i>
                                            @endfor
                                            @for ($i = 1; $i <= 5 - (int) $data->rating; $i++)
                                                <i class="ion-ios-star de-selected" aria-hidden="true"></i>
                                            @endfor
                                        @else
                                            @for ($i = 1; $i <= 5; $i++)
                                                <span class="ion-ios-star"></span>
                                            @endfor
                                        @endif --}}

                                    </div>
                                    <div class="position-relative card-btn-container">
                                        <a href="#"
                                            class="position-absolute btn btn-primary w-100 view-product-btn">View
                                            Product</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    {{-- @endforeach --}}
                    <div class="item">
                        <a href="#">
                            <div class="product-card">
                                <div class="product-card-img position-relative overflow-hidden">
                                    <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-4.png') !!}" alt="" />
                                    <span class="new-badge fs-small-heading">New</span>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                        <a href="#">
                                            Yogart & Butter
                                        </a>
                                    </h5>
                                    <div class="rating fxsm-heading color-1">
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star-half" aria-hidden="true"></i>
                                        <i class="ion-ios-star de-selected" aria-hidden="true"></i>
                                    </div>
                                    <div class="position-relative card-btn-container">
                                        <a href="#"
                                            class="position-absolute btn btn-primary w-100 view-product-btn">View
                                            Product</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="product-card">
                                <div class="product-card-img position-relative overflow-hidden">
                                    <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-9.png') !!}" alt="" />
                                    <span class="new-badge fs-small-heading">New</span>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                        <a href="#">
                                            Pure Cow Ghee
                                        </a>
                                    </h5>
                                    <div class="rating fxsm-heading color-1">
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star-half" aria-hidden="true"></i>
                                        <i class="ion-ios-star de-selected" aria-hidden="true"></i>
                                    </div>
                                    <div class="position-relative card-btn-container">
                                        <a href="#"
                                            class="position-absolute btn btn-primary w-100 view-product-btn">View
                                            Product</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="product-card">
                                <div class="product-card-img position-relative overflow-hidden">
                                    <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-11.png') !!}" alt="" />
                                    <span class="new-badge fs-small-heading">New</span>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                        <a href="#">
                                            Premium Bufflo Milk
                                        </a>
                                    </h5>
                                    <div class="rating fxsm-heading color-1">
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star-half" aria-hidden="true"></i>
                                        <i class="ion-ios-star de-selected" aria-hidden="true"></i>
                                    </div>
                                    <div class="position-relative card-btn-container">
                                        <a href="#"
                                            class="position-absolute btn btn-primary w-100 view-product-btn">View
                                            Product</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="product-card">
                                <div class="product-card-img position-relative overflow-hidden">
                                    <img src="{!! asset('assets/images/category/pure and hygienic suger/Untitled-2-1.png') !!}" alt="" />
                                    <span class="new-badge fs-small-heading">New</span>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                        <a href="#">
                                            Anaya Tea
                                        </a>
                                    </h5>
                                    <div class="rating fxsm-heading color-1">
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star" aria-hidden="true"></i>
                                        <i class="ion-ios-star-half" aria-hidden="true"></i>
                                        <i class="ion-ios-star de-selected" aria-hidden="true"></i>
                                    </div>
                                    <div class="position-relative card-btn-container">
                                        <a href="#"
                                            class="position-absolute btn btn-primary w-100 view-product-btn">View
                                            Product</a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================================================
         Food & Grocery Section - Start
        ================================================== -->
        {{-- <section class="food_grocery_section section_space_lg">
            <div class="container">
              <div class="section_heading text-center">
                <h2 class="section_heading_text">Food & Grocery</h2>
                <p class="section_heading_description mb-0">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </p>
              </div>
              <div class="owl-carousel owl-theme product-carousel" id="foodGrocerySectionCarousel">
                  <div class="product_item border rounded-2">
                      <div class="product-card">
                          <div class="product-card-img position-relative overflow-hidden">
                              <img src="{!! asset('assets/images/category/iram dates/iram-dates.png') !!}" alt="" />
                              <div class="product-badge d-flex flex-column align-items-start gap-1">
                                  <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                  <span class="new-badge rounded-1 fs-small-heading">New</span>
                              </div>
                              <div class="card-btn-container w-100 px-3">
                                  <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                              </div>
                          </div>
                          <div class="card-body text-center border-top p-3">
                              <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                  <a href="#">
                                      Iram Dates
                                  </a>
                              </h5>
                              <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                                  <li><i class="fa-solid fa-star"></i></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="product_item border rounded-2">
                      <div class="product-card">
                          <div class="product-card-img position-relative overflow-hidden">
                              <img src="{!! asset('assets/images/category/iram dates/iram-dates.png') !!}" alt="" />
                              <div class="product-badge d-flex flex-column align-items-start gap-1">
                                <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                <span class="new-badge rounded-1 fs-small-heading">New</span>
                            </div>
                            <div class="card-btn-container w-100 px-3">
                                <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                            </div>
                          </div>
                          <div class="card-body text-center border-top p-3">
                            <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                <a href="#">
                                    Iram Dates
                                </a>
                            </h5>
                            <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                      </div>
                  </div>
                  <div class="product_item border rounded-2">
                      <div class="product-card">
                          <div class="product-card-img position-relative overflow-hidden">
                              <img src="{!! asset('assets/images/category/iram dates/iram-dates.png') !!}" alt="" />
                              <div class="product-badge d-flex flex-column align-items-start gap-1">
                                <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                <span class="new-badge rounded-1 fs-small-heading">New</span>
                            </div>
                            <div class="card-btn-container w-100 px-3">
                                <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                            </div>
                          </div>
                          <div class="card-body text-center border-top p-3">
                            <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                <a href="#">
                                    Iram Dates
                                </a>
                            </h5>
                            <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                      </div>
                  </div>
                  <div class="product_item border rounded-2">
                      <div class="product-card">
                          <div class="product-card-img position-relative overflow-hidden">
                              <img src="{!! asset('assets/images/category/iram dates/iram-dates.png') !!}" alt="" />
                              <div class="product-badge d-flex flex-column align-items-start gap-1">
                                <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                <span class="new-badge rounded-1 fs-small-heading">New</span>
                            </div>
                            <div class="card-btn-container w-100 px-3">
                                <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                            </div>
                          </div>
                          <div class="card-body text-center border-top p-3">
                            <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                <a href="#">
                                    Iram Dates
                                </a>
                            </h5>
                            <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                      </div>
                  </div>
                  <div class="product_item border rounded-2">
                      <div class="product-card">
                          <div class="product-card-img position-relative overflow-hidden">
                              <img src="{!! asset('assets/images/category/iram dates/iram-dates.png') !!}" alt="" />
                              <div class="product-badge d-flex flex-column align-items-start gap-1">
                                <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                <span class="new-badge rounded-1 fs-small-heading">New</span>
                            </div>
                            <div class="card-btn-container w-100 px-3">
                                <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                            </div>
                          </div>
                          <div class="card-body text-center border-top p-3">
                            <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                <a href="#">
                                    Iram Dates
                                </a>
                            </h5>
                            <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                            </ul>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
        </section> --}}
        <!-- ==================================================
         Food & Grocery Section - Start
        ============================    ====================== -->
        <!-- ==================================================
         Dairy & Eggs Section - Start
        ================================================== -->
        <section class="dairy_eggs_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="section_heading_text">Dairy & Eggs</h2>
                    {{-- <p class="section_heading_description mb-0">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </p> --}}
                </div>
                <div class="owl-carousel owl-theme product-carousel" id="dairyEggsSectionCarousel">
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-4.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Yogurt
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-4.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Yogurt
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-4.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Yogurt
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-4.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Yogurt
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/anaya dairy product/Untitled-4.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Yogurt
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
         Dairy & Eggs Section - Start
        ================================================== -->
        <!-- ==================================================
         Beverages Section - Start
        ================================================== -->
        <section class="beverages_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="section_heading_text">Beverages</h2>
                    {{-- <p class="section_heading_description mb-0">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </p> --}}
                </div>
                <div class="owl-carousel owl-theme product-carousel" id="beveragesSectionCarousel">
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/zhakaas jeera masala/zhakaas-jeera-masala-1.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Zhakaas Jeera Masala
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/zhakaas jeera masala/zhakaas-jeera-masala-1.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Zhakaas Jeera Masala
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/zhakaas jeera masala/zhakaas-jeera-masala-1.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Zhakaas Jeera Masala
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/zhakaas jeera masala/zhakaas-jeera-masala-1.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Zhakaas Jeera Masala
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product_item border rounded-2">
                        <div class="product-card">
                            <div class="product-card-img position-relative overflow-hidden">
                                <img src="{!! asset('assets/images/category/zhakaas jeera masala/zhakaas-jeera-masala-1.png') !!}" alt="" />
                                <div class="product-badge d-flex flex-column align-items-start gap-1">
                                    <span class="featured-badge rounded-1 fs-small-heading">Featured</span>
                                    <span class="new-badge rounded-1 fs-small-heading">New</span>
                                </div>
                                <div class="card-btn-container w-100 px-3">
                                    <a href="#" class="btn btn-primary w-100 view-product-btn">View Product</a>
                                </div>
                            </div>
                            <div class="card-body text-center border-top p-3">
                                <h5 class="card-title fxsm-heading fw-bolder mt-1 mb-1">
                                    <a href="#">
                                        Zhakaas Jeera Masala
                                    </a>
                                </h5>
                                <ul class="rating_star d-flex align-items-center justify-content-center m-0">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
         Beverages Section - End
        ================================================== -->
        <!-- ==================================================
        Logistics & Transportation Section - Start
        ================================================== -->
        <section class="logistics_transportation_section decoration_wrapper section_space_lg">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-6">
                        <div class="section_heading">
                            <h2 class="section_heading_text">Logistics & Transportation</h2>
                            <p class="section_heading_description">
                                We understand the importance of reliable, efficient logistics and transportation in
                                today’s fast-moving world. Our showcased solutions highlight innovation, precision, and
                                performance across every link of the supply chain.
                            </p>
                            <p class="section_heading_description">
                                Our logistics and transportation services are designed to optimize your supply chain,
                                ensuring that your products reach their destination safely and on time. We partner with
                                industry leaders to provide you with the best solutions available.
                            </p>
                            <a class="btn btn-primary rounded-1" href="contact.html">
                                <span class="btn_text" data-text="Get A Consultation">
                                    Read More
                                </span>
                                <span class="btn_icon ps-2">
                                    {{-- <i class="fa-solid fa-arrow-up-right"></i> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="">
                            <img src="{{ asset('assets/images/category/dream transport/Untitled-1.png') }}"
                                alt="Talking Minds – Psychotherapist Site Template">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
        Logistics & Transportation Section - End
        ================================================== -->
        <!-- ==================================================
        Real Estate & Construction Section - Start
        ================================================== -->
        <section class="logistics_transportation_section section_space_lg">
            <div class="container">
                <div class="row align-items-start">
                    <div class="col-lg-6">
                        <div class="">
                            <img src="{{ asset('assets/images/category/dream sun shine developers/Untitled-1.png') }}"
                                alt="Talking Minds – Psychotherapist Site Template">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section_heading">
                            <h2 class="section_heading_text"> Real Estate & Construction</h2>
                            <p class="section_heading_description">
                                Our Real Estate & Construction showcase highlights visionary design, quality
                                craftsmanship, and innovative building solutions that shape the spaces we live and work
                                in. From residential developments to commercial infrastructures, each project reflects a
                                commitment to durability, functionality, and aesthetic excellence.
                            </p>
                            <p class="section_heading_description">
                                Explore a curated selection of properties, architectural concepts, and construction
                                innovations that set new standards in the industry. Whether it's modern urban housing,
                                sustainable building practices, or large-scale infrastructure projects, our features
                                demonstrate what’s possible when expertise meets ambition.
                            </p>
                            <a class="btn btn-primary rounded-1" href="contact.html">
                                <span class="btn_text" data-text="Get A Consultation">
                                    Read More
                                </span>
                                <span class="btn_icon ps-2">
                                    {{-- <i class="fa-solid fa-arrow-up-right"></i> --}}
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
        Real Estate & Construction Section - End
        ================================================== -->

        <!-- ==================================================
        Achievements Section - Start
        ================================================== -->
        <section class="achievements_section section_space_lg">
            <div class="section_heading text-center position-relative">
                <h2 class="section_heading_text text-white z-2">Our Achievements</h2>
                <p class="section_heading_description mb-0 text-white z-2">
                    Trusted by businesses for excellence in bulk product distribution and service.
                </p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 d-flex mb-4">
                        <div
                            class="achievements_item flex-fill d-flex flex-column align-items-center justify-content-center bg-white p-3 rounded-2">
                            <div class="stat-icon mb-3">
                                <i class="fas fa-shipping-fast fa-3x text-primary"></i>
                            </div>
                            <h3 class="achievements_number fw-bolder">50+</h3>
                            <p class="stat-label mb-0 fw-semibold">Product Supply</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex mb-4">
                        <div
                            class="achievements_item flex-fill d-flex flex-column align-items-center justify-content-center bg-white p-3 rounded-2">
                            <div class="stat-icon mb-3">
                                <i class="fas fa-trophy fa-3x text-warning"></i>
                            </div>
                            <h3 class="achievements_number fw-bolder">7+</h3>
                            <p class="stat-label mb-0 fw-semibold">Years of Expertise</p>
                        </div>
                    </div>
                    <div class="col-md-4 col d-flex mb-4">
                        <div
                            class="achievements_item flex-fill d-flex flex-column align-items-center justify-content-center bg-white p-3 rounded-2">
                            <div class="stat-icon mb-3">
                                <i class="fas fa-globe fa-3x text-success"></i>
                            </div>
                            <h3 class="achievements_number fw-bolder">11250+</h3>
                            <p class="stat-label mb-0 fw-semibold">Happy Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
        Achievements Section - End
        ================================================== -->

        <!-- ==================================================
         Testimonial Section - Start
        ================================================== -->
        <section class="testimonial_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="section_heading_text">What Clients Say</h2>
                    {{-- <p class="section_heading_description mb-0">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry
              </p> --}}
                </div>

                <div class="testimonial_carousel">
                    <div class="carousel_2col row" data-slick='{"arrows":false}'>
                        <div class="carousel_item col-">
                            <div class="testimonial_item">
                                <ul
                                    class="rating_star unordered_list d-flex align-items-center justify-content-center">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="author_box">
                                    <div
                                        class="author_box_image bg-primary text-white text-center d-flex align-items-center justify-content-center">
                                        <span class="m-0 b-0">N</span>
                                        {{-- <img src="{{ asset('assets/images/meta/author_image_1.png') }}" alt=""> --}}
                                    </div>
                                    <div class="author_box_content">
                                        <h3 class="author_box_name">Naziya Ansari</h3>
                                    </div>
                                </div>
                                <p class="mb-0">
                                    Investing your money with the right company brings peace of mind and promising
                                    returns. It has become the trusted way to grow wealth steadily and securely over
                                    time.
                                </p>
                            </div>
                        </div>
                        <div class="carousel_item col-">
                            <div class="testimonial_item">
                                <ul
                                    class="rating_star unordered_list d-flex align-items-center justify-content-center">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="author_box">
                                    <div
                                        class="author_box_image bg-primary text-white text-center d-flex align-items-center justify-content-center">
                                        <span class="m-0 b-0">A</span>
                                        {{-- <img src="{{ asset('assets/images/meta/author_image_1.png') }}" alt=""> --}}
                                    </div>
                                    <div class="author_box_content">
                                        <h3 class="author_box_name">Mohammed Abdullah</h3>
                                    </div>
                                </div>
                                <p class="mb-0">
                                    I live in Hyderabad, Telangana, and I have invested with great results and good
                                    returns. The products are good and running well at reasonable prices. Special
                                    discounts are available for members. Keep going and keep up the good work.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
        Testimonial Section - End
        ================================================== -->


        <!-- ==================================================
            FAQ Section - Start
        ================================================== -->
        <section class="faq_section section_space_lg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="images_group_widget">
                            <ul class="unordered_list">
                                <li>
                                    <img src="{{ asset('assets/images/about/dairy-product-1.png') }}"
                                        alt="Talking Minds - Psychotherapist Site Template">
                                    <img src="{{ asset('assets/images/about/cooking-oil-3.png') }}"
                                        alt="Talking Minds - Psychotherapist Site Template">
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/about/cooking-oil-2.png') }}"
                                        alt="Talking Minds - Psychotherapist Site Template">
                                    <img src="{{ asset('assets/images/about/water-bottle.png') }}"
                                        alt="Talking Minds - Psychotherapist Site Template">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ps-lg-5">
                            <div class="section_heading mb-lg-4 mb-2">
                                <h2 class="section_heading_text mb-0">
                                    FAQs
                                </h2>
                            </div>
                            <div class="accordion" id="faq_accordion">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading_one">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_one" aria-expanded="true"
                                            aria-controls="collapse_one">
                                            What types of food products do you offer?
                                        </button>
                                    </div>
                                    <div id="collapse_one" class="accordion-collapse collapse show"
                                        aria-labelledby="heading_one" data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            <p class="m-0">
                                                We offer a wide variety of food products including dairy, rice, cooking
                                                oil, sugar, tea, snacks, and more. All products are sourced from trusted
                                                brands to ensure quality and freshness.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading_two">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse_two"
                                            aria-expanded="false" aria-controls="collapse_two">
                                            Are your products organic or preservative-free?
                                        </button>
                                    </div>
                                    <div id="collapse_two" class="accordion-collapse collapse"
                                        aria-labelledby="heading_two" data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            <p class="m-0">
                                                We carry a selection of organic and preservative-free items. Look for
                                                the “Organic” or “Natural” label on product listings for healthier
                                                choices.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading_three">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse_three"
                                            aria-expanded="false" aria-controls="collapse_three">
                                            How do I place an order?
                                        </button>
                                    </div>
                                    <div id="collapse_three" class="accordion-collapse collapse"
                                        aria-labelledby="heading_three" data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            <p class="m-0">
                                                Simply browse our products, add your desired items to the cart, and
                                                proceed to checkout. Follow the on-screen instructions to complete your
                                                order securely.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading_four">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse_four"
                                            aria-expanded="false" aria-controls="collapse_four">
                                            What payment methods do you accept?
                                        </button>
                                    </div>
                                    <div id="collapse_four" class="accordion-collapse collapse"
                                        aria-labelledby="heading_four" data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            <p class="m-0">
                                                We accept major credit/debit cards, UPI, net banking, and digital
                                                wallets like Google Pay and Paytm for your convenience.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading_five">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapse_five"
                                            aria-expanded="false" aria-controls="collapse_five">
                                            How long does delivery take?
                                        </button>
                                    </div>
                                    <div id="collapse_five" class="accordion-collapse collapse"
                                        aria-labelledby="heading_five" data-bs-parent="#faq_accordion">
                                        <div class="accordion-body">
                                            <p class="m-0">
                                                Orders are usually delivered within 2–5 business days, depending on your
                                                location. You’ll receive tracking details once your order is dispatched.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
          FAQ Section - End
          ================================================== -->
        <!-- ==================================================
            Blog Section - Start
        ================================================== -->
        <section class="blog_section section_space_lg">
            <div class="container">
                <div class="section_heading text-center">
                    <h2 class="section_heading_text">Latest News</h2>
                    <p class="section_heading_description mb-0">
                        Explore smart sourcing, product comparisons, and everything wholesale buyers need to know.
                    </p>
                </div>
                <div class="owl-carousel owl-theme" id="blogSectionCarousel">
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/dairy-product-1.png') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="#">
                                <h3 class="blog_item_title text-black">Why Buying Dairy Products in Bulk Is a Smart
                                    Business Move </h3>
                            </a>
                            <p class="blog_item_description text-secondary">Whether you run a bakery, a restaurant, or
                                a grocery store, buying dairy products in bulk can help you save money and keep
                                operations smooth. But how do you ensure quality while maximizing savings?</p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a class="btn btn-outline-primary text-decoration-none px-3 py-1" href="#">
                                <span class="btn_text" data-text="Get A Consultation">
                                    Read More
                                </span>
                                <span class="btn_icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/dairy-product-1.png') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="#">
                                <h3 class="blog_item_title text-black">The Ultimate Guide to Buying Rice in Bulk for
                                    Your Business</h3>
                            </a>
                            <p class="blog_item_description text-secondary">Rice is a staple in many kitchens — from
                                restaurants to food delivery services. But purchasing rice in bulk isn't just about
                                quantity; it's about choosing the right type, supplier, and packaging to fit your needs.
                            </p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a class="btn btn-outline-primary text-decoration-none px-3 py-1" href="#">
                                <span class="btn_text" data-text="Get A Consultation">
                                    Read More
                                </span>
                                <span class="btn_icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/dairy-product-1.png') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="#">
                                <h3 class="blog_item_title text-black">Bulk Products Every Food Business Should Always
                                    Keep in Stock</h3>
                            </a>
                            <p class="blog_item_description text-secondary">Running a food-based business? These five
                                essential items — from cooking oils to sugar — are must-haves for your pantry. Here's
                                why buying them in bulk is the best decision for long-term savings and efficiency.</p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a class="btn btn-outline-primary text-decoration-none px-3 py-1" href="#">
                                <span class="btn_text" data-text="Get A Consultation">
                                    Read More
                                </span>
                                <span class="btn_icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/dairy-product-1.png') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="#">
                                <h3 class="blog_item_title text-black">Bulk Products Every Food Business Should Always
                                    Keep in Stock</h3>
                            </a>
                            <p class="blog_item_description text-secondary">Running a food-based business? These five
                                essential items — from cooking oils to sugar — are must-haves for your pantry. Here's
                                why buying them in bulk is the best decision for long-term savings and efficiency.</p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a class="btn btn-outline-primary text-decoration-none px-3 py-1" href="#">
                                <span class="btn_text" data-text="Get A Consultation">
                                    Read More
                                </span>
                                <span class="btn_icon">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
            Blog Section - End
        ================================================== -->
        <!-- ==================================================
          Get in touch Section - Start
          ================================================== -->
        <section class="get_in_touch_section position-relative ">
            {{-- <div class="get_in_touch_wrapper">
                <img src="{{ asset('assets/images/') }}" alt="">
            </div> --}}
            {{-- <div class="get_in_touch_section-wrapper px-0 z-n1">
                <div class="h-100">
                    <img src="{{ asset('assets/images/meta/Get-in-touch-us.png') }}" alt="" class="img-fluid">
                </div>
            </div> --}}
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section_heading mb-lg-4 mb-2">
                            <h2 class="section_heading_text text-white mb-0">
                                Get In Touch
                            </h2>
                        </div>
                        <p class="text-white mb-4">
                            Have questions or need more information about our featured products? We’d love to hear from
                            you! Whether you're curious about a specific item or simply want to connect, our team is
                            here to help.
                        </p>
                        <div class="d-flex flex-column gap-3">
                            <a href="#" class="d-flex align-items-center">
                                <span
                                    class="text-white bg-danger d-flex justify-content-center align-items-center fs-6 rounded-1">
                                    <i class="fa-solid fa-phone"></i>
                                </span>
                                <span class="text-white ps-2">022 2771 7070 </span>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <span
                                    class="text-white bg-danger d-flex justify-content-center align-items-center fs-6 rounded-1">
                                    <i class="fa-regular fa-envelope"></i>
                                </span>
                                <span class="text-white ps-2">info@dreamsunshinedigital</span>
                            </a>
                            <a href="#" class="d-flex align-items-center">
                                <span
                                    class="text-white bg-danger d-flex justify-content-center align-items-center fs-6 rounded-1">
                                    <i class="fa-solid fa-location-dot"></i>
                                </span>
                                <address class="text-white ps-2 mb-0">Shop No. 7/8, A Ward,<br>Mankhurd, Mumbai - 400
                                    043.</address>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 ps-lg-5">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="" class="text-white fw-bold">
                                        First Name
                                    </label>
                                    <input type="text" name="name" id=""
                                        class="p-2 mb-4 rounded-1 lh-base">
                                </div>
                                <div class="col-lg-6">
                                    <label for="" class="text-white fw-bold">
                                        Last Name
                                    </label>
                                    <input type="text" name="name" id=""
                                        class="p-2 mb-4 rounded-1 lh-base">
                                </div>
                                <div class="col-lg-6">
                                    <label for="" class="text-white fw-bold">
                                        Phone Number
                                    </label>
                                    <input type="tel" name="name" id=""
                                        class="p-2 mb-4 rounded-1 lh-base">
                                </div>
                                <div class="col-lg-6">
                                    <label for="" class="text-white fw-bold">
                                        Email Address
                                    </label>
                                    <input type="email" name="name" id=""
                                        class="p-2 mb-4 rounded-1 lh-base">
                                </div>
                                <div class="col-12">
                                    <label for="" class="text-white fw-bold">
                                        Message
                                    </label>
                                    <textarea name="" id="" rows="4" class="p-2 mb-4 rounded-1 lh-base"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-danger rounded-1">
                                <span class="btn_text">
                                    Submit Here
                                </span>
                                <span class="btn_icon ps-1">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==================================================
          Get in touch Section - End
          ================================================== -->




    </main>



    <footer class="container-fluid bg-dark">
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-2 col-md-6 col-sm-4 mb-4">
                    <div class="footer-col-head text-danger">
                        <h5 class="mb-3">Categories</h5>
                        <ul class="list-unstyled ps-0 ms-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">anaya dairy
                                    product</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">anaya rice</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">dream sun shine
                                    developers</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">dream transport</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">iram dates</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">pure and hygienic
                                    suger</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">pure cooking oil</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">real eggs</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">real-oxy</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">zhakaas jeera
                                    masala</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                    <div class="footer-col-head text-danger">
                        <h5 class="mb-3">Best Products</h5>
                        <ul class="list-unstyled ps-0 ms-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">mineral water</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">Cold Drinks</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">dry fruit & iram
                                    dates</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">pure basmati
                                    rice</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">Premium quality
                                    white suger</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">Dairy Product</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none  text-capitalize">Refined sunflower
                                    oil</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-4 mb-4">
                    <div class="footer-col-head text-danger">
                        <h5 class="mb-3">Useful Links</h5>
                        <ul class="list-unstyled ps-0 ms-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none ">Home</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none ">About Us</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none ">Shop</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none ">Blogs</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none ">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-8 mb-4">
                    <div class="footer-col-head text-danger">
                        <h5 class="mb-3">Our Policies</h5>
                        <ul class="list-unstyled ps-0 ms-0">
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none "> Term Of Service</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none "> Return And Refund Policy</a>
                            </li>
                            <li class="mb-2">
                                <a href="#" class="text-decoration-none ">Terms And Conditions</a>
                            </li>
                            <li class="mb-3">
                                <a href="#" class="text-decoration-none ">Privacy Policy</a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-col-head text-danger">
                        <h5 class="mb-3">Subscribe</h5>
                        <p class="text-white mb-2">Invite customers to join your mailing list</p>
                        <form action="" class="mb-2">
                            <input type="email" name="" id="" placeholder="Email address"
                                class="form-control mb-2 w-100">
                            <button type="submit" class="btn btn-danger px-4">Send</button>
                        </form>
                        <h5 class="mb-3">Contact Us</h5>
                        <div class="d-flex align-items-center justify-content-start gap-2 mb-3">
                            <a href="tel:+9876543210" class="text-white social-media-icon call-icon-bg"><i
                                    class="fa-solid fa-phone"></i></a>
                            <a href="mailto:" class="text-white social-media-icon mail-icon-bg"><i
                                    class="fa-regular fa-envelope"></i></a>
                        </div>
                        <h5 class="mb-3">Follow Us</h5>
                        <div class="d-flex align-items-center justify-content-start gap-2">
                            <a href="#" class="text-white social-media-icon facebook-icon-bg"><i
                                    class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="text-white social-media-icon x-icon-bg"><i
                                    class="fa-brands fa-x-twitter"></i></a>
                            <a href="#" class="text-white social-media-icon youtube-icon-bg"><i
                                    class="fa-brands fa-youtube"></i></a>
                            <a href="#" class="text-white social-media-icon instagram-icon-bg"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid bg-danger">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center py-2 gap-2 flex-wrap">
                <p class="mb-0 text-white">© 2025 Dreamsunshine Digital Rights Reserved.</p>
                <p class="mb-0 text-white">Designed and Developed by <a href="https://infinityplus1.in/"
                        class="text-decoration-none text-white">Infinity Plus 1</a></p>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.9.0/js/foundation.min.js"></script>
    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    {{-- Font Awesome Js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Carousel - Jquery Include -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <script>
        $(document).ready(function() {
            $('#home-banner ').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                autoplay: false,
                dots: true,
                // animateOut: 'fadeOutRight',
                animateOut: 'fadeOut',
                items: 1,
                margin: 30,
                // stagePadding:30,
                smartSpeed: 40
            })
            $("#productSectionCarousel3").owlCarousel({
                items: 4,
                loop: true,
                margin: 20,
                nav: true,
                autoplay: false,
                dots: false,
                smartSpeed: 600, // Replaces slideSpeed
                animateIn: "fadeIn",
                animateOut: "fadeOut",
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 4,
                    },
                }
            });
            $("#foodGrocerySectionCarousel").owlCarousel({
                items: 4,
                loop: true,
                margin: 20,
                nav: true,
                autoplay: false,
                dots: false,
                smartSpeed: 600, // Replaces slideSpeed
                animateIn: "fadeIn",
                animateOut: "fadeOut",
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 4,
                    },
                }
            });
            $("#dairyEggsSectionCarousel").owlCarousel({
                items: 4,
                loop: true,
                margin: 20,
                nav: true,
                autoplay: false,
                dots: false,
                smartSpeed: 600, // Replaces slideSpeed
                animateIn: "fadeIn",
                animateOut: "fadeOut",
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 4,
                    },
                }
            });
            $("#beveragesSectionCarousel").owlCarousel({
                items: 4,
                loop: true,
                margin: 20,
                nav: true,
                autoplay: false,
                dots: false,
                smartSpeed: 600, // Replaces slideSpeed
                animateIn: "fadeIn",
                animateOut: "fadeOut",
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 4,
                    },
                }
            });
            $("#blogSectionCarousel").owlCarousel({
                items: 3,
                loop: true,
                // margin: 10,
                nav: true,
                autoplay: true,
                dots: false,
                smartSpeed: 600,
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                }
            });
            $("#categoriesSectionCarousel").owlCarousel({
                items: 3,
                loop: true,
                // margin: 10,
                nav: true,
                autoplay: false,
                dots: false,
                smartSpeed: 600,
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>',
                ],
                responsive: {
                    0: {
                        items: 1,
                    },
                    475: {
                        items: 2,
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3,
                    },
                }
            });

            $('.carousel_2col').slick({
                dots: true,
                speed: 1000,
                arrows: true,
                infinite: true,
                autoplay: true,
                slidesToShow: 2,
                slidesToScroll: 2,
                pauseOnHover: true,
                autoplaySpeed: 5000,
                prevArrow: ".c2c_arrow_left",
                nextArrow: ".c2c_arrow_right",
                responsive: [{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }]
            });
        });
        // Add event listener to handle category clicks
        document.querySelectorAll('.shop-child').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault(); // Prevent default link behavior

                // Get the category id from the clicked category
                const categoryId = this.getAttribute('data-category');

                // Get the corresponding sub-child list for this category
                const activeSubList = document.querySelector(`.sub-child-container-ul.${categoryId}`);

                // Check if the sub-child list is already active
                if (activeSubList.classList.contains('active')) {
                    // If it's already active, remove the active class to hide the sub-child list
                    activeSubList.classList.remove('active');
                } else {
                    // If it's not active, first remove the active class from all sub-child lists
                    document.querySelectorAll('.sub-child-container-ul').forEach(subList => {
                        subList.classList.remove('active');
                    });

                    // Then add the active class to the clicked category's sub-child list
                    activeSubList.classList.add('active');
                }
            });
        });

        // Add event listener to handle shop category dropdown
        document.querySelector('.shop-category').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            // Toggle the active class on the shop-child-container
            const shopChildContainer = document.querySelector('.shop-child-container');
            const shopCategory = document.querySelector('.shop-category');
            shopCategory.classList.toggle('active');
            shopChildContainer.classList.toggle('active');
        });
        document.querySelector('.hamburger-menu-container').addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default link behavior

            // Toggle the active class on the shop-child-container
            const hamburgerMenuContainer = document.querySelector('.hamburger-menu-container');
            hamburgerMenuContainer.classList.toggle('active');
        });


        const categoryLinks = document.querySelectorAll('.category-link');

        // Loop through each category link and add a click event listener
        categoryLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default link behavior

                // Get the category name from the data attribute
                const category = this.getAttribute('data-category');

                // Get the corresponding product list
                const productList = document.querySelector(`.category-products.${category}`);

                // Toggle the display of the product list
                if (productList.style.display === 'block') {
                    productList.style.display = 'none';
                } else {
                    // Hide all other categories' product lists
                    const allProductLists = document.querySelectorAll('.category-products');
                    allProductLists.forEach(list => {
                        list.style.display = 'none';
                    });

                    // Show the selected category's product list
                    productList.style.display = 'block';
                }
            });
        });

        (function($) {
            "use strict";
            $(document).foundation();

            $(".single-sub")
                .on("mouseenter", function() {
                    $(this).children(".submenu").slideDown(400);
                })
                .on("mouseleave", function() {
                    $(this).children(".submenu").slideUp(400);
                });

            $("#top").on("click", function() {
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });
            $("#top").on("click", function(event) {
                event.stopPropagation();
                var idTo = $(this).attr("data-atr");
                var Position = $("[id='" + idTo + "']").offset();
                $("html, body").animate({
                    scrollTop: Position
                }, "slow");
                return false;
            });
        })(jQuery);

        $(".hamburger-container").on("click", function() {
            $(".new-menu-container").toggleClass("active");
            $(".new-menu-holder").removeClass("active");
            $(".new-submenu-holder").removeClass("active");
        });

        const backToMenuButtons = document.querySelectorAll(".back-to-menu");

        backToMenuButtons.forEach((button) => {
            button.addEventListener("click", function() {
                console.log("btn clicked");

                const parent = this.closest(".new-menu-holder");
                if (parent) {
                    parent.classList.remove("active");
                }
            });
        });

        function toggleActiveClass(targetClass) {
            const elements = document.querySelectorAll(`.${targetClass}`);

            elements.forEach((element) => {
                element.classList.toggle("active");
            });
        }

        document.addEventListener("DOMContentLoaded", function() {
            // Select all li elements with data-target attribute inside .new-menu-holder
            const menuItems = document.querySelectorAll(
                ".new-menu-holder li[data-target]"
            );

            // Add click event listener to each menu item
            menuItems.forEach((item) => {
                item.addEventListener("click", function() {
                    // Get the targeted submenu class
                    const targetClass = this.getAttribute("data-target");
                    const submenu = document.querySelector(targetClass);

                    // Close all other submenus
                    menuItems.forEach((otherItem) => {
                        const otherTargetClass = otherItem.getAttribute("data-target");
                        const otherSubmenu = document.querySelector(otherTargetClass);
                        if (otherSubmenu && otherSubmenu !== submenu) {
                            otherSubmenu.classList.remove(
                                "active"); // Remove active class from other submenus
                        }
                    });

                    // Toggle the active class on the clicked submenu
                    if (submenu) {
                        submenu.classList.toggle("active");
                    }
                });
            });

            // ----------------------------------------

            // Add click event listener for #service-menu to toggle .navigation-submenu
            const serviceMenu = document.getElementById("service-menu");
            const navigationSubmenu = document.querySelector(".navigation-submenu");

            const testimonialsMenu = document.querySelector("#testimonials-menu");
            const testimonialsSubmenu = document.querySelector(".testimonials-submenu");

            if (serviceMenu) {
                serviceMenu.addEventListener("click", function() {
                    if (navigationSubmenu) {
                        testimonialsSubmenu.classList.remove("active");
                        navigationSubmenu.classList.toggle("active");
                    }
                });
            }

            if (testimonialsMenu) {
                testimonialsMenu.addEventListener("click", function() {
                    if (testimonialsSubmenu) {
                        navigationSubmenu.classList.remove("active");
                        testimonialsSubmenu.classList.toggle("active");
                    }
                });
            }

            // ---------------------------------------------------------

            const navigationItems = document.querySelectorAll(
                ".navigation-submenu li[data-target]"
            );

            // Add click event listener to each menu item
            navigationItems.forEach((item) => {
                item.addEventListener("click", function() {
                    // Get the targeted submenu class
                    const targetClass = this.getAttribute("data-target");
                    const submenu = document.querySelector(targetClass);

                    // Close all other submenus
                    navigationItems.forEach((otherItem) => {
                        const otherTargetClass = otherItem.getAttribute("data-target");
                        const otherSubmenu = document.querySelector(otherTargetClass);
                        if (otherSubmenu && otherSubmenu !== submenu) {
                            otherSubmenu.classList.remove(
                                "active"); // Remove active class from other submenus
                        }
                    });

                    // Toggle the active class on the clicked submenu
                    if (submenu) {
                        submenu.classList.toggle("active");
                    }
                });
            });
        });
    </script>
</body>

</html>
