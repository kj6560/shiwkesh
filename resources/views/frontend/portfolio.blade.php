@extends('layouts.frontend')
@section('content')
  <!-- Portfolio Section -->
  <section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio</h2>
    <p>Some of our completed and ongoing projects are listed here.</p>
    </div><!-- End Section Title -->

    <div class="container-fluid">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">All</li>
      <li data-filter=".filter-app">App</li>
      <li data-filter=".filter-product">Website</li>
      <li data-filter=".filter-branding">Backend Utility</li>

      </ul><!-- End Portfolio Filters -->

      <div class="row g-0 isotope-container" data-aos="fade-up" data-aos-delay="200">

      @foreach($portfolios as $portfolio)
      @php
      $type = '';
      if ($portfolio->work_type == 1) {
      $type = 'product';
      } elseif ($portfolio->work_type == 2) {
      $type = 'app';
      } elseif ($portfolio->work_type == 3) {
      $type = 'branding';
      }
      @endphp

      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $type }}">
        <div class="portfolio-content h-100">
        <img src="{{ url('storage') }}/{{ $portfolio->work_image }}" class="img-fluid" alt="">
        <div class="portfolio-info">
        <a href="{{ url('storage') }}/{{ $portfolio->work_image }}" data-gallery="portfolio-gallery-app"
        class="glightbox preview-link">
        <i class="bi bi-zoom-in"></i>
        </a>
        <a href="{{ $portfolio->work_url }}" target="_blank" title="More Details" class="details-link">
        <i class="bi bi-link-45deg"></i>
        </a>
        </a>
        </div>
        </div>
      </div><!-- End Portfolio Item -->
    @endforeach





      </div><!-- End Portfolio Container -->

    </div>

    </div>

  </section><!-- /Portfolio Section -->
@endsection