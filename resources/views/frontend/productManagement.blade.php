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
                        <a href="#" >Mobile Applications</a>
                        <a href="#" class="active">Product Management</a>
                        <a href="#">Graphic Design</a>
                        <a href="#">Marketing</a>
                    </div>

                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('theme')}}/img/services.jpg" alt="" class="img-fluid services-img">
                    <div class="max-w-6xl mx-auto">
                        <div class="max-w-6xl mx-auto">
                            <!-- Section Heading -->
                            <div class="max-w-6xl mx-auto">
                                <!-- Section Heading -->
                                <div class="text-center mb-20">
                                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight">
                                        Product Management Services
                                    </h2>
                                    <p class="text-lg text-gray-500 mt-4 max-w-2xl mx-auto">
                                        We help businesses bring clarity, structure, and strategic direction to their
                                        products — from ideation to launch and beyond.
                                    </p>
                                </div>

                                <!-- Services Grid -->
                                <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
                                    <!-- Card 1 -->
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Product Strategy</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Define your product vision, align it with business goals, and prioritize
                                            impactful features for growth.
                                        </p>
                                    </div>

                                    <!-- Card 2 -->
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Roadmapping</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            We create clear, realistic roadmaps to help teams build with focus, iterate
                                            quickly, and deliver on time.
                                        </p>
                                    </div>

                                    <!-- Card 3 -->
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-3">MVP Development</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Build lean, testable products to validate your market and accelerate your
                                            time-to-launch.
                                        </p>
                                    </div>

                                    <!-- Card 4 -->
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-3">User Research & Feedback</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Understand your users' needs and behaviors through interviews, surveys, and
                                            usage data.
                                        </p>
                                    </div>

                                    <!-- Card 5 -->
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Cross-Functional Collaboration
                                        </h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            We bridge the gap between engineering, design, and marketing to ensure alignment
                                            and delivery.
                                        </p>
                                    </div>

                                    <!-- Card 6 -->
                                    <div>
                                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Analytics & Iteration</h3>
                                        <p class="text-gray-600 leading-relaxed">
                                            Monitor product performance and continuously iterate based on real user behavior
                                            and KPIs.
                                        </p>
                                    </div>
                                </div>

                                <!-- CTA -->
                                <div class="text-center mt-20">
                                    <a href="/contact"
                                        class="btn btn-primary text-white px-8 py-3 rounded-md shadow-md hover:bg-blue-700 transition-colors">
                                        Let's Shape Your Product
                                    </a>
                                    <p class="text-sm text-gray-500 mt-3">Schedule a free strategy session today.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

    </section><!-- /Service Details Section -->

@endsection