@extends('layouts.frontend')
@section('content')
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Service Details</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li class="current">Service Details</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="services-list">
                        <a href="#" class="active">Web Design</a>
                        <a href="#">Software Development</a>
                        <a href="#">Product Management</a>
                        <a href="#">Graphic Design</a>
                        <a href="#">Marketing</a>
                    </div>

                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('theme')}}/img/services.jpg" alt="" class="img-fluid services-img">
                    <div class="max-w-6xl mx-auto">
                        <div class="text-center mb-20">
                            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight">
                                Web Design Services
                            </h2>
                            <p class="text-lg text-gray-500 mt-4 max-w-2xl mx-auto">
                                We build fast, responsive, and visually stunning websites tailored to your brand’s identity
                                and business goals.
                            </p>
                        </div>

                        <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Item -->
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Custom Website Design</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    From layout to colors and typography, we craft every detail to create a site that
                                    reflects your unique brand.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Mobile-Optimized Design</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    We design with a mobile-first approach, ensuring a smooth, fast experience on every
                                    device.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">User-Centered UX</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Your users are the focus. We create clean, intuitive experiences that guide them
                                    effortlessly to action.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">E-Commerce Ready</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Launch a seamless shopping experience with sleek product pages, optimized checkout, and
                                    integrated payments.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">SEO & Performance</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Optimized code, fast load times, and SEO-ready structure help your site get found and
                                    load instantly.
                                </p>
                            </div>

                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 mb-3">Launch & Maintenance</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    From launch to ongoing support, we handle hosting, backups, security updates, and
                                    performance monitoring.
                                </p>
                            </div>
                        </div>

                        <!-- CTA -->
                        <div class="text-center mt-20">
                            <a href="/contact"
                                class="btn btn-primary px-8 py-3 rounded-full text-lg font-medium hover:bg-gray-800 transition">
                                Let’s Build Your Website
                            </a>
                            <p class="text-sm text-gray-500 mt-3">Free consultation. No obligation.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

@endsection