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
                        <a href="#">Web Design</a>
                        <a href="#">Mobile Applications</a>
                        <a href="#" >Product Management</a>
                        <a href="#">Graphic Design</a>
                        <a href="#" class="active">Marketing</a>
                    </div>

                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('theme')}}/img/services.jpg" alt="" class="img-fluid services-img">
                    <div class="max-w-6xl mx-auto">
                        <div class="max-w-6xl mx-auto">
                            <!-- Section Heading -->
                            <div class="max-w-6xl mx-auto">
                                <!-- Section Heading -->
                                <div class="max-w-6xl mx-auto">
                                    <!-- Section Header -->
                                    <div class="text-center mb-20">
                                        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight">
                                            Marketing Services
                                        </h2>
                                        <p class="text-lg text-gray-500 mt-4 max-w-2xl mx-auto">
                                            We help businesses grow with smart, data-driven marketing strategies — tailored
                                            to reach, engage, and convert the right audience.
                                        </p>
                                    </div>

                                    <!-- Services Grid -->
                                    <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
                                        <!-- Card 1 -->
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Digital Marketing Strategy
                                            </h3>
                                            <p class="text-gray-600 leading-relaxed">
                                                We create comprehensive digital strategies that align with your business
                                                goals and drive measurable results.
                                            </p>
                                        </div>

                                        <!-- Card 2 -->
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Search Engine Optimization
                                                (SEO)</h3>
                                            <p class="text-gray-600 leading-relaxed">
                                                Improve visibility on Google through technical SEO, on-page optimization,
                                                and content strategies.
                                            </p>
                                        </div>

                                        <!-- Card 3 -->
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Social Media Marketing</h3>
                                            <p class="text-gray-600 leading-relaxed">
                                                Build and engage your community with powerful content across platforms like
                                                Instagram, LinkedIn, and X.
                                            </p>
                                        </div>

                                        <!-- Card 4 -->
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Content Marketing</h3>
                                            <p class="text-gray-600 leading-relaxed">
                                                Attract and convert with blogs, guides, email campaigns, and lead magnets
                                                that educate and inspire.
                                            </p>
                                        </div>

                                        <!-- Card 5 -->
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Performance Ads</h3>
                                            <p class="text-gray-600 leading-relaxed">
                                                Maximize ROI with data-backed PPC, Google Ads, and Meta Ads campaigns
                                                optimized for growth.
                                            </p>
                                        </div>

                                        <!-- Card 6 -->
                                        <div>
                                            <h3 class="text-xl font-semibold text-gray-800 mb-3">Analytics & Conversion</h3>
                                            <p class="text-gray-600 leading-relaxed">
                                                Measure everything. From traffic to conversion funnels, we fine-tune based
                                                on real data and insights.
                                            </p>
                                        </div>
                                    </div>

                                    <!-- CTA -->
                                    <div class="text-center mt-20">
                                        <a href="/contact"
                                            class="btn btn-primary text-white px-8 py-3 rounded-md shadow-md hover:bg-blue-700 transition-colors">
                                            Grow With Us
                                        </a>
                                        <p class="text-sm text-gray-500 mt-3">Let’s build a marketing engine that scales
                                            with you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

    </section><!-- /Service Details Section -->

@endsection