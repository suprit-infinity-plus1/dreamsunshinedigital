<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>  @yield(section: 'title')  </title>
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/logo/logo-removebg-preview.ico') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet"
    href="https://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/css/xzoom.css" />


  {{-- bootstrap 5.3.3 css --}}
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/foundation.min.css') }}">

  {{-- slick css --}}
  <link rel="stylesheet" href="{{ asset('assets/css/slick.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.min.css') }}">

  {{--
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.9.0/css/foundation.min.css"> --}}
  {{-- font-awesome css --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  {{--
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" />
  --}}
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
  <style>
    /* .navbar-toggler:focus {
            box-shadow: 0 0 0 2px;
        } */
  </style>
  @yield(section: 'extracss')
</head>

<body>
  <div class="main-header-container">
    <header class="bg-light py-3">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-column flex-sm-row gap-3">
          <div class="logo-container">
            <a href="{{ route('index') }}"> <img src="{{ asset('assets/images/logo/text-logo-transperant2.png') }}"
                alt="Logo"></a>
          </div>
          <form action="#" class="flex-fill">
            <div class="input-group position-relative mb-0 w-100">
              <input type="text" class="form-control rounded-0 mb-0 border border-primary border-end-0"
                placeholder="Search for category...." aria-label="Search" aria-describedby="button-addon2"
                data-bs-toggle="modal" data-bs-target="#category-search-pop-up">
              <button class="z-3 btn btn-outline-primary ms-auto" data-bs-toggle="modal"
                data-bs-target="#category-search-pop-up" type="button" id="button-addon2"><i
                  class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </form>
          {{-- <div class="header-contact gap-3 d-none d-md-block">
            <a href="tel:+1234567890" class="text-decoration-none text-dark"><i
                class="fa-solid fa-phone text-primary"></i>
              <span class="text-danger fw-bold">
                +91 1234567890
              </span>
            </a>
            <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-heart"></i></a>
            <a href="#" class="text-decoration-none text-dark"><i class="fa-solid fa-cart-shopping"></i></a>
          </div> --}}
          <div class="header-social-icons-container d-none d-md-flex d-flex gap-3">
            <div
              class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-4 rounded-1">
              <a class="text-white" href="https://www.instagram.com/dreamsunshine_digital_pvt.ltd/"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div
              class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-5 rounded-1">
              <a class="text-white" href="https://www.facebook.com/people/DreamSunshine-Digital-Private-Limited/61575942811577/"><i class="fa-brands fa-facebook-f"></i></a>
            </div>
            {{-- <div
              class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-4 rounded-1">
              <i class="fa-brands fa-youtube"></i>
            </div> --}}
            <div
              class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-5 rounded-1">
              <a class="text-white" href="tel:+919819168057"><i class="fa-solid fa-phone"></i></a>
            </div>
            <div
              class="header-social-icons text-white bg-danger d-flex justify-content-center align-items-center fs-4 rounded-1">
              <a class="text-white" href="https://wa.me/+919819168057"><i class="fa-brands fa-whatsapp"></i></a>
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
                    <a class="nav-border" href="{{ route('index') }}" tabindex="0">Home</a>
                  </li>
                  <li id="about-menu" role="menuitem">
                    <a href="{{ route('about') }}"> About Us </a>
                  </li>
                  {{-- <li role="menuitem">
                    <a href="dr-monica-kapoor.php">Dr Monica kapoor </a>
                  </li> --}}
                  <li id="service-menu" class="single-sub parent-nav is-dropdown-submenu-parent opens-right"
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
                    <a href="{{ route('blog') }}">Blogs </a>
                  </li>
                  <li role="menuitem">
                    <a href="{{ route('contact') }}">Contact us </a>
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
              Real Oxy <span><i class="fa-solid fa-chevron-down"></i></span>
            </p>
            <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
          </li>
          <li data-target=".hair-submenu">
            <p>
              Iram Dates <span><i class="fa-solid fa-chevron-down"></i></span>
            </p>
            <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
          </li>
          <li>
            <a href="{{ route('category.oil') }}">
              Dream Sunshine Pure Cooking Oil
            </a>
            <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
          </li>

          <!-- <li data-target=".slimming-submenu"> -->
          <li>
            <a href="{{ route('dream-transport') }}">
              Dream Transport
            </a>
            <!-- <p>
            </p> -->
          </li>
          <li>
            <a href="{{ route('dream-sunshine-developers') }}">
              Dream Sunshine Developers
            </a>
            <!-- <span><i class="fa-solid fa-chevron-down"></i></span> -->
          </li>
          <li data-target=".antiaging-submenu">
            <p>
              Food & Groceries <span><i class="fa-solid fa-chevron-down"></i></span>
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
              <a href="{{ route("category.realoxy") }}">
                Real Oxy Mineral Water
              </a>
            </li>
            <li>
              <a href="{{ route("category.soft-drinks") }}">
                Soft Drinks
              </a>
            </li>
            <!-- <li>
              <a href="{{ route("category.dates") }}">
                Iram Dates
              </a>
            </li> -->

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
              <a href="{{ route("category.dates") }}">
                Dates
              </a>
            </li>
            <li>
              <a href="{{ route("category.dry-fruits") }}">
                Dry Fruits
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
              <a href="{{ route("category.oil") }}">
                Dream Sunshine Pure Cooking Oil
              </a>
            </li>
            <!-- <li>
              <a href="{{ route("category.anayatealeave") }}">
                Anaya Tea
              </a>
            </li>
            <li>
              <a href="{{ route("category.realoxy") }}">
                Real Oxy
              </a>
            </li> -->
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
            <!-- <li>
              <a href="#">
                Dream Transport
              </a>
            </li> -->
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
              <a href="{{ route("category.anaya-rice") }}">
                Anaya Rice
              </a>
            </li>
            <li>
              <a href="{{ route("category.anayatealeave") }}">
                Anaya Tea
              </a>
            </li>
            <li>
              <a href="{{ route("category.sugar") }}">
                Pure & hygienic Sugar
              </a>
            </li>
            <li>
              <a href="{{ route("category.dairy") }}">
                Anaya Dairy Product
              </a>
            </li>
            <li>
              <a href="{{ route("category.realeggs") }}">
                Real Eggs
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
              <a href="{{ route('index') }}">
                home
              </a>
            </li>
            <!-- <li class="menu" onclick="toggleActiveClass('about-menu')"> -->
            <li class="menu">
              <a href="{{ route('about') }}">
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
              <a href="{{ route('blog') }}">
                Blogs
              </a>
            </li>
            <li class="menu">
              <a href="{{ route('contact') }}">
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
              <p class="fw-semibold">
                Real Oxy
              </p>
              <i class="fa-solid fa-plus"></i>

            </li>
            <ul class="new-submenu-holder small-skin-submenu">

              <li>
                <a href="{{ route("category.realoxy") }}" class="fw-normal">
                  Real Oxy Mineral Water
                </a>
              </li>
              <li>
                <a href="{{ route("category.soft-drinks") }}" class="fw-normal">
                  Soft Drinks
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
              <p class="fw-semibold">
                Iram Dates
              </p>
              <i class="fa-solid fa-plus"></i>

            </li>
            <ul class="new-submenu-holder small-hair-submenu">
              <li>
                <a href="{{ route("category.dates") }}" class="fw-normal">
                  Dates
                </a>
              </li>
              <li>
                <a href="{{ route("category.dry-fruits") }}" class="fw-normal">
                  Dry Fruits
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
            <li>
              <a href="{{ route('category.oil') }}">
                Dream Sunshine Pure Cooking Oil
              </a>

            </li>

            <li>
              <a href="{{ route('dream-transport') }}">
                Dream Transport
              </a>

            </li>
            <ul class="new-submenu-holder small-slimming-submenu">

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
            <li>
              <a href="{{ route('dream-sunshine-developers') }}">
                Dream Sunshine Developers
              </a>
              

            </li>
            <li data-target=".small-antiaging-submenu">
              <a href="#" >
                Food & Groceries
              </a>
              <i class="fa-solid fa-plus"></i>
            </li>

            <ul class="new-submenu-holder small-antiaging-submenu">

            <li>
                <a href="{{ route("category.anaya-rice") }}" class="fw-normal">
                  Anaya Rice
                </a>
              </li>
              <li>
                <a href="{{ route("category.anayatealeave") }}" class="fw-normal">
                 Anaya Tea 
              </a>
              </li>
              <li>
                <a href="{{ route("category.sugar") }}" class="fw-normal">
                 Pure & hygienic Sugar
              </a>
              </li>
              <li>
                <a href="{{ route("category.dairy") }}" class="fw-normal">
                 Anaya Dairy Product
              </a>
              </li>
              <li>
                <a href="{{ route("category.realeggs") }}" class="fw-normal">
                 Rela Eggs 
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
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pt-0">
            <form action="#" class="position-sticky top-0">
              <div class="row bg-white pt-3">
                <div class="d-flex justify-content-center align-items-center gap-3">
                  <!-- <input type="text" class="no-focus form-control rounded-0 shadow-none border-0 border-bottom mb-0"
                    aria-label="Search" placeholder="Search for category...."> -->
                  {{-- <input type="text"
                    class="no-focus form-control position-relative rounded-0 pe-5 border-0 border-bottom"
                    placeholder="Search for category...." aria-label="Search" aria-describedby="button-addon2"> --}}
                  <!-- <button class="btn btn-outline-primary border-0" type="button" id="button-addon2"><i
                      class="fa-solid fa-magnifying-glass"></i></button> -->
                </div>
              </div>
              <!-- <div class="row bg-white py-3">
                <div class="text-center">
                  <h4 class="mb-3">
                    Popular Searches
                  </h4>
                  <div class="d-flex justify-content-center align-items-center flex-wrap gap-3">
                    <a href="#" class="btn btn-outline-primary text-decoration-none px-3 py-1">Oil
                      Products</a>
                    <a href="#" class="btn btn-outline-primary text-decoration-none px-3 py-1">Dairy
                      Products</a>
                    <a href="#" class="btn btn-outline-primary text-decoration-none px-3 py-1">Rice
                      Products</a>
                    <a href="#" class="btn btn-outline-primary text-decoration-none px-3 py-1">Real-oxy
                      Products</a>
                    <a href="#" class="btn btn-outline-primary text-decoration-none px-3 py-1">Zhakaas
                      Jeera Products</a>
                  </div>
                </div>
              </div> -->
            </form>
            <div class="mt-4">
              <div class="row pop-up-category-section">
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex justify-content-start align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/anaya-dairy-product/Untitled-2.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.dairy") }}"><h5 class="pop-up-category-name">anaya dairy product</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.dairy") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/anaya-rice/Untitled-2.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.anaya-rice") }}"><h5 class="pop-up-category-name">anaya rice</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.anaya-rice") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/iram dates/iram-dates.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.iramdatesmain") }}"><h5 class="pop-up-category-name">iram dates</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.iramdatesmain") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/pure-and-hygienic-suger/Untitled-1.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.sugar") }}"><h5 class="pop-up-category-name">pure and hygienic suger</h5>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.sugar") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/pure-cooking-oil/Untitled-7.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.oil") }}"><h5 class="pop-up-category-name">pure cooking oil</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.oil") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/real-eggs/real-eggs-2.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.realeggs") }}"><h5 class="pop-up-category-name">real eggs</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.realeggs") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/real-oxy/real-oxy.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.realoxy") }}"><h5 class="pop-up-category-name">real-oxy</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.realoxy") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/zhakaas-jeera-masala/zhakaas-jeera-masala-1.png') }}"
                        alt="" class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("category.soft-drinks") }}"><h5 class="pop-up-category-name">Soft Drinks</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("category.soft-drinks") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/dream-sun-shine-developers/Untitled-1.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("dream-sunshine-developers") }}"><h5 class="pop-up-category-name">dream sun shine developers</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("dream-sunshine-developers") }}"class="btn btn-outline-primary text-decoration-none px-3 py-1">View
                        Products <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 p-2 bg-light">
                  <div class="d-flex align-items-center gap-3 border pop-up-category-container">
                    <div class="pop-up-category-img-container d-flex justify-content-center align-items-center">
                      <img src="{{ asset('assets/images/category/dream-transport/Untitled-1.png') }}" alt=""
                        class="pop-up-categogy-img">
                    </div>
                    <div class="pop-up-category-info-container">
                      <a href="{{ route("dream-transport") }}"><h5 class="pop-up-category-name">dream transport</h5></a>
                      {{-- <p class="pop-up-category-description mb-0">Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit. Quisquam, voluptatibus.</p> --}}
                      <a href="{{ route("dream-transport") }}" class="btn btn-outline-primary text-decoration-none px-3 py-1">View
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
    @yield('content')

  </main>



  <footer class="container-fluid bg-dark">
    <div class="container">
      <div class="row py-4">
        <div class="col-lg-2 col-md-6 col-sm-4 mb-4">
          <div class="footer-col-head text-danger">
            <h5 class="mb-3">Categories</h5>
            <ul class="list-unstyled ps-0 ms-0">
              <li class="mb-2">
                <a href="{{ route("category.dairy") }}" class="text-decoration-none  text-capitalize">anaya dairy
                  product</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.anaya-rice") }}" class="text-decoration-none  text-capitalize">anaya rice</a>
              </li>
              
              <li class="mb-2">
                <a href="{{ route("category.iramdatesmain") }}" class="text-decoration-none  text-capitalize">iram dates</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.sugar") }}" class="text-decoration-none  text-capitalize">pure and hygienic
                  suger</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.oil") }}" class="text-decoration-none  text-capitalize">pure cooking oil</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.realeggs") }}" class="text-decoration-none  text-capitalize">real eggs</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.realoxy") }}" class="text-decoration-none  text-capitalize">real-oxy</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.soft-drinks") }}" class="text-decoration-none  text-capitalize">soft Drinks</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("dream-sunshine-developers") }}" class="text-decoration-none  text-capitalize">dream sun shine
                  developers</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("dream-transport") }}" class="text-decoration-none  text-capitalize">dream transport</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
          <div class="footer-col-head text-danger">
            <h5 class="mb-3">Best Products</h5>
            <ul class="list-unstyled ps-0 ms-0">
              <li class="mb-2">
                <a href="{{ route("category.realoxy") }}" class="text-decoration-none  text-capitalize">mineral water</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.soft-drinks") }}" class="text-decoration-none  text-capitalize">Cold Drinks</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.iramdatesmain") }}" class="text-decoration-none  text-capitalize">dry fruit & iram
                  dates</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.anaya-rice") }}" class="text-decoration-none  text-capitalize">pure basmati
                  rice</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.sugar") }}" class="text-decoration-none  text-capitalize">Premium quality
                  white suger</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.dairy") }}" class="text-decoration-none  text-capitalize">Dairy Product</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("category.oil") }}" class="text-decoration-none  text-capitalize">Refined sunflower
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
                <a href="{{ route("index") }}" class="text-decoration-none ">Home</a>
              </li>
              <li class="mb-2">
                <a href="{{ route("about") }}" class="text-decoration-none ">About Us</a>
              </li>
              <li class="mb-2">
                <a href="{{ route('blog') }}" class="text-decoration-none ">Blogs</a>
              </li>
              <li class="mb-2">
                <a href="{{ route('contact') }}" class="text-decoration-none ">Contact Us</a>
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
              <input type="email" name="" id="" placeholder="Email address" class="form-control mb-2 w-100">
              <button type="submit" class="btn btn-danger px-4">Send</button>
            </form>
            <h5 class="mb-3">Contact Us</h5>
            <div class="d-flex align-items-center justify-content-start gap-2 mb-3">
              <a href="tel:+" class="text-white social-media-icon call-icon-bg"><i
                  class="fa-solid fa-phone"></i></a>
              <a href="mailto:contact@dreamsunshinedigital.in" class="text-white social-media-icon mail-icon-bg"><i
                  class="fa-regular fa-envelope"></i></a>
            </div>
            <h5 class="mb-3">Follow Us</h5>
            <div class="d-flex align-items-center justify-content-start gap-2">
              <a href="https://www.facebook.com/people/DreamSunshine-Digital-Private-Limited/61575942811577/ " class="text-white social-media-icon facebook-icon-bg"><i
                  class="fa-brands fa-facebook-f"></i></a>
              <a href="#" class="text-white social-media-icon linkedin-icon-bg"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="https://www.instagram.com/dreamsunshine_digital_pvt.ltd/" class="text-white social-media-icon instagram-icon-bg"><i
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
            class="text-decoration-none text-primary">Infinity Plus 1</a></p>
      </div>
    </div>
  </div>



  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.9.0/js/foundation.min.js"></script>
  {{-- Bootstrap Js --}}
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

  {{--
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
  {{-- Font Awesome Js --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/fontawesome.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <!-- Carousel - Jquery Include -->
  <script src="{{ asset('assets/js/slick.min.js') }}"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  @yield('extrajs')
  <script>
    // Add event listener to handle category clicks
    document.querySelectorAll('.shop-child').forEach(item => {
      item.addEventListener('click', function (e) {
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
    document.querySelector('.shop-category').addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default link behavior

      // Toggle the active class on the shop-child-container
      const shopChildContainer = document.querySelector('.shop-child-container');
      const shopCategory = document.querySelector('.shop-category');
      shopCategory.classList.toggle('active');
      shopChildContainer.classList.toggle('active');
    });
    document.querySelector('.hamburger-menu-container').addEventListener('click', function (e) {
      e.preventDefault(); // Prevent default link behavior

      // Toggle the active class on the shop-child-container
      const hamburgerMenuContainer = document.querySelector('.hamburger-menu-container');
      hamburgerMenuContainer.classList.toggle('active');
    });


    const categoryLinks = document.querySelectorAll('.category-link');

    // Loop through each category link and add a click event listener
    categoryLinks.forEach(link => {
      link.addEventListener('click', function (event) {
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

    (function ($) {
      "use strict";
      $(document).foundation();

      $(".single-sub")
        .on("mouseenter", function () {
          $(this).children(".submenu").slideDown(400);
        })
        .on("mouseleave", function () {
          $(this).children(".submenu").slideUp(400);
        });

      $("#top").on("click", function () {
        $("html, body").animate({
          scrollTop: 0
        }, "slow");
        return false;
      });
      $("#top").on("click", function (event) {
        event.stopPropagation();
        var idTo = $(this).attr("data-atr");
        var Position = $("[id='" + idTo + "']").offset();
        $("html, body").animate({
          scrollTop: Position
        }, "slow");
        return false;
      });
    })(jQuery);

    $(".hamburger-container").on("click", function () {
      $(".new-menu-container").toggleClass("active");
      $(".new-menu-holder").removeClass("active");
      $(".new-submenu-holder").removeClass("active");
    });

    const backToMenuButtons = document.querySelectorAll(".back-to-menu");

    backToMenuButtons.forEach((button) => {
      button.addEventListener("click", function () {
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

    document.addEventListener("DOMContentLoaded", function () {
      // Select all li elements with data-target attribute inside .new-menu-holder
      const menuItems = document.querySelectorAll(
        ".new-menu-holder li[data-target]"
      );

      // Add click event listener to each menu item
      menuItems.forEach((item) => {
        item.addEventListener("click", function () {
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
        serviceMenu.addEventListener("click", function () {
          if (navigationSubmenu) {
            testimonialsSubmenu.classList.remove("active");
            navigationSubmenu.classList.toggle("active");
          }
        });
      }

      if (testimonialsMenu) {
        testimonialsMenu.addEventListener("click", function () {
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
        item.addEventListener("click", function () {
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
  <script>
    $(document).ready(function () {
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
        // prevArrow: ".c2c_arrow_left",
        // nextArrow: ".c2c_arrow_right",
        responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
      });
    });
  </script>


</body>

</html>