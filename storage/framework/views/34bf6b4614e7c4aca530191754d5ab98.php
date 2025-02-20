
<?php $__env->startSection('content'); ?>
<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">

  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-activity icon"></i></div>
          <h4><a href="" class="stretched-link">Gather Your Thoughts</a></h4>
          <p>Discuss your thoughts with us regarding a product you desire to create</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
          <h4><a href="" class="stretched-link">Connect the possibilities</a></h4>
          <p>Elaborate a well thought of features and requirements to us regarding your project</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
          <h4><a href="" class="stretched-link">Plan The Moves</a></h4>
          <p>Let's meet up and plan out every move that will lead to your project</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
        <div class="service-item position-relative">
          <div class="icon"><i class="bi bi-broadcast icon"></i></div>
          <h4><a href="" class="stretched-link">You Have a Product</a></h4>
          <p>With all the details and moves at proper place, you will have a great product to market</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Featured Services Section -->
<!-- Services Section -->
<section id="services" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Services</h2>
    <p>Sky is the limit for possibilities. Still here is few of what we do.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
            <img src="<?php echo e(asset('theme')); ?>/img/services-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Web Development</h3>
            </a>
            <p>We create awesome web based products of any kind over web, be it CRM, ERP etc.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item">
          <div class="img">
            <img src="<?php echo e(asset('theme')); ?>/img/services-2.jpg" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-phone"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Mobile Applications</h3>
            </a>
            <p>We develop mobile applications both hybrid as well as native.Accessible for Android as well as IOS devices</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item">
          <div class="img">
            <img src="<?php echo e(asset('theme')); ?>/img/services-3.jpg" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
            <a href="service-details.html" class="stretched-link">
              <h3>Digital Marketing</h3>
            </a>
            <p>We provide digital marketing services such as SEO,SMO,Video based, Platform based etc.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MyFiles\workspace\php\shiwkesh\resources\views\frontend\services.blade.php ENDPATH**/ ?>