@extends('layouts.master')
@section('extracss')
    <link rel="stylesheet" href="{{ asset('assets/css/blog-main.css') }}">

@endsection
@section('content')
<div class="image-wrapper">
            <img src="{{ asset('assets/images/categoryImages/Category-sample.jpg') }}" alt="">
            <h4>Home &gt; Blogs</h4>
        </div>
    <div class=" container blog-container">
        
        <div class="px-5"> <!-- Add this wrapper -->

            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                <!-- Blog Card 1 -->
                <!-- Blog Card 1 -->
                <div class="col">
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/blog-dairy-bulk.jpg') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="{{ route('smart-business') }}">
                                <h3 class="blog_item_title">
                                        Why Buying Dairy Products in Bulk Is a Smart Business Move
                                    </h3>
                                </a>
                                <p class="blog_item_description text-secondary">
                                    Whether you run a bakery, a restaurant, or a grocery store, buying dairy products in bulk
                                    can help you save money and keep operations smooth. But how do you ensure quality while
                                    maximizing savings?
                            </p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a href="{{ route('smart-business') }}"
                                class="btn btn-outline-primary text-decoration-none px-3 py-1">
                                <span class="btn_text">Read More</span>
                                <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 2 -->
                <div class="col">
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/blog-bulk.jpg') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="{{ route('smart-strategies-managing-bulk-inventory') }}">
                                <h3 class="blog_item_title">
                                    Smart Strategies for Managing Bulk Inventory
                                </h3>
                            </a>
                            <p class="blog_item_description text-secondary">
                                Discover how to efficiently manage large quantities of stock and reduce spoilage with smart
                                storage solutions.
                            </p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a href="{{ route('smart-strategies-managing-bulk-inventory') }}"
                                class="btn btn-outline-primary text-decoration-none px-3 py-1">
                                <span class="btn_text">Read More</span>
                                <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 3 -->
                <div class="col">
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/blog-dates.jpg') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="{{ route('stocking-premium-dates-elevate-product-offering') }}">
                                <h3 class="blog_item_title">
                                    Why Stocking Premium Dates Can Elevate Your Product Offering
                                </h3>
                            </a>
                            <p class="blog_item_description text-secondary">
                                From nutritional benefits to cultural significance, discover why adding dates to your
                                product lineup can attract more customers and boost brand value.
                            </p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a href="{{ route('stocking-premium-dates-elevate-product-offering') }}"
                                class="btn btn-outline-primary text-decoration-none px-3 py-1">
                                <span class="btn_text">Read More</span>
                                <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 4 -->
                <div class="col">
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/blog-egg.jpg') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="{{ route('right-way-store-eggs-extend-shelf-life') }}">
                                <h3 class="blog_item_title">
                                    The Right Way to Store Eggs and Extend Shelf Life in Bulk
                                </h3>
                            </a>
                            <p class="blog_item_description text-secondary">
                                Avoid spoilage and ensure safety with these essential storage methods for handling eggs in
                                commercial quantities.
                            </p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a href="{{ route('right-way-store-eggs-extend-shelf-life') }}"
                                class="btn btn-outline-primary text-decoration-none px-3 py-1">
                                <span class="btn_text">Read More</span>
                                <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Blog Card 5 -->
                <div class="col">
                    <div class="blog_item m-2">
                        <div class="blog_item_img_container">
                            <img src="{{ asset('assets/images/blog/blog-rice.jpg') }}" alt="">
                        </div>
                        <div class="blog_item_content">
                            <a href="{{ route('identify-high-quality-basmati-rice-buyers-guide') }}">
                                <h3 class="blog_item_title">
                                    How to Identify High-Quality Basmati Rice: A Buyer’s Guide
                                </h3>
                            </a>
                            <p class="blog_item_description text-secondary">
                                Learn how grain length, aroma, and aging affect basmati rice quality — so you can make
                                smarter bulk buying decisions for your food business.
                            </p>
                            <hr class="mt-3 mb-4 border border-black border-top-0">
                            <a href="{{ route('identify-high-quality-basmati-rice-buyers-guide') }}"
                                class="btn btn-outline-primary text-decoration-none px-3 py-1">
                                <span class="btn_text">Read More</span>
                                <span class="btn_icon"><i class="fa-solid fa-arrow-right"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



@endsection