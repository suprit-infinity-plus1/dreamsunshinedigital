@extends('layouts.master')
@section('extracss')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/category.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/xzoom/dist/xzoom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/fontawesome.min.css" /> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

@endsection
@section('content')


    <div class="whole-body container ">
        <div>
            <p class="mt-3">Home > Anaya Dairy > Yogurt</p>
        </div>



        <div class="container">
            <div class="row g-0 d-flex flex-column flex-sm-row justify-content-center ">
                @php
                    $images = ['9.png',]; // replace with your dynamic image array
                @endphp
                {{-- Left Column --}}
                <!-- <div class="col-12 col-sm-12 col-lg-5 order-sm-2   "> -->
                <div class="col-md-10 col-lg-5 order-sm-2   ">

                    <div class="border  ">
                        <div class="xzoom-container ms-auto me-auto " style="">
                            <img class="xzoom single-product-card-img " id="xzoom-default"
                                src="{{ asset('assets/images/category/anaya-dairy-product/yogurt/9.png') }}"
                                xoriginal="{{ asset('assets/images/category/anaya-dairy-product/yogurt/9.png') }}" />
                        </div>
                    </div>

                </div>

                @if(count($images) > 1)
                    <div class="d-none d-md-block col-md-2 col-lg-1">
                        @foreach ($images as $img)
                            <div class="col border">
                                <img src="{{ asset('assets/images/category/anaya-dairy-product/yogurt/' . $img) }}"
                                    data-src="{{ asset('assets/images/category/anaya-dairy-product/yogurt/' . $img) }}"
                                    class="w-100 side-image" alt="">
                            </div>
                            <div class="w-100"></div>
                        @endforeach
                    </div>
                @endif

                @if(count($images) > 1)
                    <div class="col-12 order-sm-2 d-md-none d-block">
                        <div class="d-flex flex-nowrap overflow-auto">
                            @foreach ($images as $img)
                                <div class="col-2 border ">
                                    <img src="{{ asset('assets/images/category/anaya-dairy-product/yogurt/' . $img) }}"
                                        data-src="{{ asset('assets/images/category/anaya-dairy-product/yogurt/' . $img) }}"
                                        class="img-fluid side-image  " alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
                {{--right column --}}
                <div class="col-12 col-sm-12 col-lg-6 order-sm-3 ps-md-4">
                    <div class="text-black mt-4">
                        <h4 class="fw-bold anaya-title text-main-color">Yogurt</h4>
                    </div>

                    <div>
                        <span style="margin-right: 8px;">
                            <i class="fa-solid fa-star" style="color: #FFD700; font-size: 12px;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD700; font-size: 12px;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD700; font-size: 12px;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD700; font-size: 12px;"></i>
                            <i class="fa-solid fa-star" style="color: #FFD700; font-size: 12px;"></i>
                        </span>
                        <span>|</span>
                        <span class="share-icons">
                            <i class="fa-brands fa-facebook-f facebook-icon"></i>
                            <i class="fa-brands fa-instagram instagram-icon"></i>
                            <i class="fa-brands fa-x-twitter twitter-icon"></i>
                        </span>

                    </div>

                    <div class="mt-4 ">
                        <p class="text-dark fs-5 description-btn">Description</p>
                        <p id="descriptionText" class="description-text">
                            Yogurt – A creamy, smooth delight that adds a refreshing tang to your meals or can be enjoyed on
                            its own.
                            Perfect as a snack, a topping for fruits and granola, or as a base for smoothies and sauces.
                            Rich in probiotics and ideal for digestion, it makes a wholesome addition to any diet.
                            Made with high-quality milk to ensure freshness and a delicious taste in every spoonful.
                        </p>
                        <button id="readMoreBtn" class="read-more-btn">Read more ↓</button>
                    </div>


                    <!-- <div class=" border p-2">
                                                    <p class="text-dark fs-5 description-btn">Specifications</p>

                                                    <div class="row mb-2">
                                                        <div class="col-6 text-secondary">Brand</div>
                                                        <div class="col-6 text-dark fw-semibold">Anaya</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6 text-secondary">Type</div>
                                                        <div class="col-6 text-dark fw-semibold">Basmati</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6 text-secondary">Grain</div>
                                                        <div class="col-6 text-dark fw-semibold">Long</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6 text-secondary">Texture</div>
                                                        <div class="col-6 text-dark fw-semibold">Fluffy, Non-Sticky</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6 text-secondary">GI</div>
                                                        <div class="col-6 text-dark fw-semibold">Low</div>
                                                    </div>
                                                    <div class="row mb-2">
                                                        <div class="col-6 text-secondary">Packaging</div>
                                                        <div class="col-6 text-dark fw-semibold">Bag</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 text-secondary">Weight</div>
                                                        <div class="col-6 text-dark fw-semibold">5kg / 10kg</div>
                                                    </div>
                                                </div> -->


                    <a href="https://wa.me/+919819168057">
                        <button class="enquire-now-btn" target="_blank">
                            <span><i class="fa-brands fa-whatsapp"></i></span>
                            <span>Enquire now</span>
                        </button>
                    </a>
                </div>

            </div>







        </div>

    </div>


    <section class="dairy_eggs_section section_space_lg">
        <div class="container">
            <div class="section_heading text-center">
                <h2 class="section_heading_text">Related Products</h2>
                {{-- <p class="section_heading_description mb-0">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry
                </p> --}}
            </div>
            <div class="owl-carousel owl-theme product-carousel" id="dairyEggsSectionCarousel">
                <div class="product_item border rounded-2">
                    <div class="product-card">
                        <div class="product-card-img position-relative overflow-hidden">
                            <img src="{!! asset('assets/images/productImage/300img/egg.png ') !!}" alt="" />
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
                                <a href="#" class="text-main-color">
                                    Egg
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
                            <img src="{!! asset('assets/images/productImage/300img/paneer.png') !!}" alt="" />
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
                                    Paneer
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
                            <img src="{!! asset('assets/images/productImage/300img/milk-tetrapack.png') !!}" alt="" />
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
                                    Tetrapack milk
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
                            <img src="{!! asset('assets/images/productImage/300img/milk.png') !!}" alt="" />
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
                                    Milk
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
                            <img src="{!! asset('assets/images/category/anaya-dairy-product/Untitled-4.png') !!}" alt="" />
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




@endsection
@section(section: 'extrajs')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- jQuery (Required for Owl Carousel) -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Initialize Owl Carousel -->
    <script>
        $(document).ready(function () {
            $("#dairyEggsSectionCarousel").owlCarousel({
                loop: true,
                margin: 15,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                }
            });
        });
    </script>


    <script
        src="https://www.jqueryscript.net/demo/Feature-rich-Product-Gallery-With-Image-Zoom-xZoom/js/xzoom.min.js"></script>
    <script>
        const $xzoomImage = $('#xzoom-default');
        console.log($xzoomImage);
        $xzoomImage.one('load', function () {
            $xzoomImage.xzoom({
                zoomWidth: 530,
                title: true,
                tint: '#333',
                Xoffset: 15
            });
        }).each(function () {
            if (this.complete) $(this).trigger('load');
        });
        $(document).ready(function () {
            // When a side image is clicked
            $(".side-images img").click(function () {
                // Get the data-src attribute of the clicked image
                var newImageSrc = $(this).attr("data-src");

                // Change the src of the main image
                $("#xzoom-default").attr("src", newImageSrc);
                $("#xzoom-default").attr("xoriginal", newImageSrc); // For xzoom functionality as well
            });
        });

    </script>
    <script>

        //07. testimonial Slider Initialize
        function company_carouselInit() {
            $('.owl-carousel.slider_active').owlCarousel({
                dots: false,
                loop: true,
                margin: 30,
                stagePadding: 2,
                autoplay: false,
                autoplayTimeout: 1500,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    768: {
                        items: 2,
                    },
                    992: {
                        items: 3
                    }
                }
            });
        }
        company_carouselInit();



    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Select all side images and the main image
            const sideImages = document.querySelectorAll('.side-image');
            const mainImage = document.getElementById('xzoom-default');

            // Add click event to each side image
            sideImages.forEach(function (image) {
                image.addEventListener('click', function () {
                    // Change the main image source to the clicked side image
                    const newMainImageSrc = image.getAttribute('data-src');
                    mainImage.src = newMainImageSrc;
                    mainImage.setAttribute('xoriginal', newMainImageSrc); // Update xzoom functionality as well

                    // Remove the selected class from all side images
                    sideImages.forEach(function (img) {
                        img.classList.remove('selected-side-image');
                        img.style.border = 'none';  // Reset the border style
                    });

                    // Add the selected class to the clicked side image (black border)
                    image.classList.add('selected-side-image');
                    image.style.border = '2px solid black';  // Apply a black border to the selected image
                });
            });
        });

        //Read more 
        document.addEventListener('DOMContentLoaded', function () {
            const description = document.getElementById('descriptionText');
            const readMoreBtn = document.getElementById('readMoreBtn');
            const fullText = description.textContent.trim(); // Get the full text
            const maxLength = 450; // Set the max length for truncated text

            // If text is longer than maxLength, truncate it and show the Read More button
            if (fullText.length > maxLength) {
                const truncatedText = fullText.substring(0, maxLength) + '...'; // Truncate text and add '...'
                description.textContent = truncatedText;
                readMoreBtn.style.display = 'block'; // Show the Read More button
            }

            // Add click event to toggle between showing full text and truncated text
            readMoreBtn.addEventListener('click', function () {
                if (description.textContent === fullText) {
                    description.textContent = fullText.substring(0, maxLength) + '...';
                    readMoreBtn.textContent = 'Read more ↓';
                } else {
                    description.textContent = fullText;
                    readMoreBtn.textContent = 'Read less ↑';
                }
            });
        });


    </script>



@endsection