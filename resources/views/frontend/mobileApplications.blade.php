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
                        <a href="#"class="active">Mobile Applications</a>
                        <a href="#">Product Management</a>
                        <a href="#">Graphic Design</a>
                        <a href="#">Marketing</a>
                    </div>

                </div>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{asset('theme')}}/img/services.jpg" alt="" class="img-fluid services-img">
                    <div class="max-w-6xl mx-auto">
                        <div class="max-w-6xl mx-auto">
    <!-- Section Heading -->
    <div class="text-center mb-20">
      <h2 class="text-4xl md:text-5xl font-bold text-gray-900 tracking-tight">
        Mobile App Development Services
      </h2>
      <p class="text-lg text-gray-500 mt-4 max-w-2xl mx-auto">
        From idea to launch, we build high-quality, scalable mobile apps that drive engagement and deliver value across iOS and Android platforms.
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-3">
      <!-- Card 1 -->
      <div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">iOS & Android Development</h3>
        <p class="text-gray-600 leading-relaxed">
          Native or cross-platform — we create performant apps tailored to each platform’s strengths.
        </p>
      </div>

      <!-- Card 2 -->
      <div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">Custom App Solutions</h3>
        <p class="text-gray-600 leading-relaxed">
          From social platforms to enterprise tools, we bring your unique app idea to life with precision and creativity.
        </p>
      </div>

      <!-- Card 3 -->
      <div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">UI/UX App Design</h3>
        <p class="text-gray-600 leading-relaxed">
          Intuitive interfaces, fluid animations, and delightful user experiences that keep users coming back.
        </p>
      </div>

      <!-- Card 4 -->
      <div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">API & Backend Integration</h3>
        <p class="text-gray-600 leading-relaxed">
          We build robust backend systems and integrate 3rd-party APIs for seamless real-time performance.
        </p>
      </div>

      <!-- Card 5 -->
      <div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">App Store Deployment</h3>
        <p class="text-gray-600 leading-relaxed">
          We handle app store submissions, compliance, and guidelines to ensure smooth approvals on Apple & Google Play.
        </p>
      </div>

      <!-- Card 6 -->
      <div>
        <h3 class="text-xl font-semibold text-gray-800 mb-3">Post-Launch Support</h3>
        <p class="text-gray-600 leading-relaxed">
          After launch, we offer maintenance, updates, bug fixes, and performance monitoring — so your app stays future-ready.
        </p>
      </div>
    </div>

    <!-- CTA -->
    <div class="text-center mt-20">
      <a href="/contact" class="btn btn-primary text-white px-8 py-3 rounded-md shadow-md hover:bg-blue-700 transition-colors">
        Request a Free Consultation
      </a>
      <p class="text-sm text-gray-500 mt-3">Let's build an app your users will love.</p>
    </div>
  </div>
                    </div>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

@endsection