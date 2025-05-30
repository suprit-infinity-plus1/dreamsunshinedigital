@extends('layouts.master')
@section('title','Anaya Dairy Products | DreamSunshine Digital')
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


    <div class="category-main mb-5">
        <!-- Page Title -->
        <div class="category-banner">
            <img src="{{ asset('assets/images/categoryImages/Category-sample.jpg') }}" alt="">
            <h4 class="category-banner-title">Home > Anaya Dairy</h4>

        </div>

        <!-- Category Cards Grid -->
        <div class="category-container">
            <div class="category-card">
                <div class="category-img-container">
                   <a href="{{ route("singleproduct.milk") }}"> <img src="{{ asset('assets/images/category/anaya-dairy-product/milk/12.png') }}" class="card-img-top"
                        alt="Category Image"></a>
                </div>

                <div class="category-card-body">
                   <a href="{{ route("singleproduct.milk") }}"> <h5 class="category-card-title fw-bolder">Milk</h5> </a>
                    <span>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                    </span>
                    <div class="text-center position-relative card-btn-container">
                        <a href="{{ route("singleproduct.milk") }}" class="text-center position-relative btn btn-primary view-product-btn">View
                            Product</a>
                    </div>
                </div>
            </div>
            <div class="category-card">
                <div class="category-img-container">
                   <a href="{{ route("singleproduct.milkbuffalo") }}"> <img class="category-card-image" src="{{ asset('assets/images/category/anaya-dairy-product/milk/6.png') }}" class="card-img-top"
                        alt="Category Image" /></a>
                </div>

                <div class="category-card-body">
                  <a href="{{ route("singleproduct.milkbuffalo") }}">  <h5 class="category-card-title fw-bolder">Milk Bottle</h5></a>
                    <span>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                    </span>
                    <div class="text-center position-relative card-btn-container">
                        <a href="{{ route("singleproduct.milkbuffalo") }}" class="position-relative btn btn-primary view-product-btn">View
                            Product</a>
                    </div>
                </div>
            </div>
            <div class="category-card">
                <div class="category-img-container">
                   <a href="{{ route("singleproduct.milk_tetrapack") }}"> <img src="{{ asset('assets/images/category/anaya-dairy-product/milk/11.png') }}" class="card-img-top"
                        alt="Category Image"></a>
                </div>

                <div class="category-card-body">
                  <a href="{{ route("singleproduct.milk_tetrapack") }}">  <h5 class="category-card-title fw-bolder">Tetrapack Milk</h5></a>
                    <span>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                    </span>
                    <div class="text-center position-relative card-btn-container">
                        <a href="{{ route("singleproduct.milk_tetrapack") }}" class="position-relative btn btn-primary view-product-btn">View
                            Product</a>
                    </div>
                </div>
            </div>
            <div class="category-card">
                <div class="category-img-container">
                   <a href="{{ route("singleproduct.paneer") }}"> <img src="{{ asset('assets/images/category/anaya-dairy-product/paneer/10.png') }}" class="card-img-top"
                        alt="Category Image"></a>
                </div>

                <div class="category-card-body">
                  <a href="{{ route("singleproduct.paneer") }}">  <h5 class="category-card-title fw-bolder">Paneer</h5></a>
                    <span>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                    </span>
                    <div class="text-center position-relative card-btn-container">
                        <a href="{{ route("singleproduct.paneer") }}" class="position-relative btn btn-primary view-product-btn">View
                            Product</a>
                    </div>
                </div>
            </div>
            <div class="category-card">
                <div class="category-img-container">
                    <a href="{{ route("singleproduct.ghee") }}"><img src="{{ asset('assets/images/category/anaya-dairy-product/ghee/7.png') }}" class="card-img-top"
                        alt="Category Image"></a>
                </div>

                <div class="category-card-body">
                   <a href="{{ route("singleproduct.ghee") }}"> <h5 class="category-card-title fw-bolder">Pure Cow Ghee</h5></a>
                    <span>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                        <i class="fa-solid fa-star" style="color: #FFD700; font-size: 16px;"></i>
                    </span>
                    <div class="text-center position-relative card-btn-container">
                        <a href="{{ route("singleproduct.ghee") }}" class="position-relative btn btn-primary view-product-btn">View
                            Product</a>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
@endsection