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
                        <a href="#" >Web Design</a>
                        <a href="#" >Software Development</a>
                        <a href="#">Product Management</a>
                        <a href="#" class="active">Graphic Design</a>
                        <a href="#">Marketing</a>
                    </div>

                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('theme')}}/img/services.jpg" alt="" class="img-fluid services-img">
                    <div class="max-w-6xl mx-auto">
                        <div style="max-width: 900px; margin: auto;">
                            <h2 style="font-size: 32px; color: #333; margin-bottom: 10px;">🎨 Graphic Design Services</h2>
                            <p style="font-size: 18px; color: #555; line-height: 1.6;">
                                <strong>Bring Your Brand to Life with Stunning Visuals</strong><br>
                                At <strong>Your Company Name</strong>, we blend creativity with strategy to design visuals
                                that speak your brand’s language.
                                From logos and brand identity to marketing materials and social media graphics, our designs
                                don’t just look good — they make an impact.
                            </p>

                            <h3 style="margin-top: 30px; color: #222;">✏️ Our Graphic Design Services</h3>
                            <ul style="list-style: none; padding-left: 0; color: #444; font-size: 16px;">
                                <li><strong>✅ Logo Design & Brand Identity:</strong> Craft memorable logos and consistent
                                    visual branding.</li>
                                <li><strong>✅ Social Media Graphics:</strong> Stunning visuals optimized for every platform.
                                </li>
                                <li><strong>✅ Marketing Collateral:</strong> Brochures, flyers, posters & more — print-ready
                                    and pixel-perfect.</li>
                                <li><strong>✅ UI/UX & App Graphics:</strong> Visually appealing and user-friendly designs
                                    for digital products.</li>
                                <li><strong>✅ Packaging Design:</strong> Creative packaging that grabs attention and tells
                                    your story.</li>
                                <li><strong>✅ Infographics & Data Visuals:</strong> Complex ideas simplified into elegant
                                    visuals.</li>
                            </ul>

                            <h3 style="margin-top: 30px; color: #222;">🎯 Why Choose Us?</h3>
                            <ul style="list-style: none; padding-left: 0; font-size: 16px; color: #444;">
                                <li>🎨 <strong>Custom Designs</strong>, Tailored to Your Brand</li>
                                <li>🚀 <strong>Fast Turnaround</strong> with Revisions Included</li>
                                <li>💼 <strong>Experienced Designers</strong> with Strategic Vision</li>
                                <li>🖼️ <strong>High-Resolution Files</strong> + Source Files Delivered</li>
                                <li>🌐 <strong>Print & Digital-Ready Output</strong></li>
                            </ul>

                            <div style="margin-top: 40px; text-align: center;">
                                <h3 style="color: #222;">📞 Let’s Design Something Incredible</h3>
                                <p style="font-size: 18px; color: #555;">
                                    Ready to create impactful designs that set your brand apart?<br>
                                    <strong>Contact us today for a free consultation!</strong>
                                </p>
                                <a href="#contact"
                                    style="display: inline-block; padding: 12px 24px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 6px; font-weight: bold; margin-top: 10px;">
                                    Get a Free Quote
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

@endsection