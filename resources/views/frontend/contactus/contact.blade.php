@extends('layouts.master')
@section('title','Contact Us')
@section('extracss')
    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> -->

@endsection
@section('content')

    <section class="contact_us_section position-relative ">
        <div class="image-wrapper">
            <img src="{{ asset('assets/images/categoryImages/Category-sample.jpg') }}" alt="">
            <h4>Home &gt; Contact Us</h4>
        </div>
        <div class="container">
            <div class="contact-us-head text-center">

            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="section_heading mb-lg-4 mb-2">
                        <h2 class="section_heading_text text-black mb-0">
                            Get In Touch
                        </h2>
                    </div>
                    <p class="text-black mb-4">
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
                            <span class="text-black ps-2">022 2771 7070 </span>
                        </a>
                        <a href="#" class="d-flex align-items-center">
                            <span
                                class="text-white bg-danger d-flex justify-content-center align-items-center fs-6 rounded-1">
                                <i class="fa-regular fa-envelope"></i>
                            </span>
                            <span class="text-black ps-2">info@dreamsunshinedigital</span>
                        </a>
                        <a href="#" class="d-flex align-items-center">
                            <span
                                class="text-white bg-danger d-flex justify-content-center align-items-center fs-6 rounded-1">
                                <i class="fa-solid fa-location-dot"></i>
                            </span>
                            <address class="text-black ps-2 mb-0">Shop No. 7/8, A Ward,<br>Mankhurd, Mumbai - 400
                                043.</address>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 ps-lg-5 form_sepration">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="" class="text-black fw-bold">
                                    First Name
                                </label>
                                <input type="text" name="name" id="" class="p-2 mb-4 rounded-1 lh-base">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="text-black fw-bold">
                                    Last Name
                                </label>
                                <input type="text" name="name" id="" class="p-2 mb-4 rounded-1 lh-base">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="text-black fw-bold">
                                    Phone Number
                                </label>
                                <input type="tel" name="name" id="" class="p-2 mb-4 rounded-1 lh-base">
                            </div>
                            <div class="col-lg-6">
                                <label for="" class="text-black fw-bold">
                                    Email Address
                                </label>
                                <input type="email" name="name" id="" class="p-2 mb-4 rounded-1 lh-base">
                            </div>
                            <div class="col-12">
                                <label for="" class="text-black fw-bold">
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

        <div class="container-fluid map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.227043269372!2d72.93221207497686!3d19.05375268214622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c718e177761d%3A0x17a1d81ee729a1e3!2sDreamsunshine%20Digital%20Private%20Limited!5e0!3m2!1sen!2sin!4v1746534176369!5m2!1sen!2sin" 
            
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"></iframe>

        </div>

    </section>
@endsection