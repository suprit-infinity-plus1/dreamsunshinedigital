@extends('layouts.master')
@section('title','About Us | DreamSunshine Digital')

@section('extracss')
    <link rel="stylesheet" href="{{ asset('assets/css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->

@endsection
@section('content')


    <div class="category-main mb-5">
        <!-- Page Title -->
        <div class="category-banner image-wrapper ">
            <img src="{{ asset('assets/images/categoryImages/Category-sample.jpg') }}" alt="">
            <h4 class="category-banner-title">Home > About Us</h4>

        </div>

        <!-- Category Cards Grid -->
        <div class="category-container">

            <div class="aboutus-section1">
                <h4 class="first-h4">About Us</h4>
                <div class="aboutus-section1-img ">
                    <img src="{{ asset('assets/images/about/aboutus-img1.jpg') }}" alt="">

                </div>
                <div>
                    <h4 class="second-h4">
                        About Us
                    </h4>
                    <p>

                        DreamSunshine Digital Pvt. Ltd. is a Mumbai-based company specializing in premium dates and natural
                        water
                        products. Located in the heart of Mumbai at Shop No. 7/8, A Ward, Mohite Patil Nagar,
                        Ghatkoper-Mankhurd
                        Link Road, Mankhurd, Mumbai - 400 043, we are committed to delivering high-quality products that
                        celebrate
                        life's important occasions and milestones
                    </p>
                </div>

            </div>

            <div class="aboutus-section1 aboutus-section2">
    <h4 class="first-h4">Our Objective</h4>

    <div class="aboutus-content">
        <div class="aboutus-text">
            <h4 class="second-h4">Our Objective</h4>
            <p>
            At DreamSunshine Digital Pvt. Ltd., our mission is to enhance everyday living by delivering
                        premium
                        natural products that promote wellness, joy, and meaningful connections. We are committed to
                        sourcing the finest dates and natural waters with a focus on quality, authenticity, and customer
                        satisfaction.
            </p>
        </div>

        <div class="aboutus-section1-img">
            <img src="{{ asset('assets/images/about/aboutus-img2.jpg') }}" alt="">
        </div>
    </div>
</div>



            <!-- <p>
                                            Our Offerings

                                            Premium Dates: We offer a curated selection of fine dates, perfect for gifting or personal indulgence.

                                            Natural Waters: Our range includes exclusive waters that complement our dates, enhancing the overall
                                            experience.

                                            Weekly Featured Products: Regularly updated selections to keep our offerings fresh and exciting.
                                        </p>

                                        <p>
                                            Customer Satisfaction

                                            We prioritize customer satisfaction by ensuring:

                                            High Quality: Only the finest products make it to our shelves.

                                            Fast Delivery: Prompt and reliable delivery services.

                                            24/7 Support: Dedicated assistance whenever you need it.

                                            3-Day Returns: Hassle-free returns within three days of purchase.
                                        </p> -->

        </div>
@endsection