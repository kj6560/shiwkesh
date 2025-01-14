@extends('layouts.frontend')
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section">

    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
        <img src="{{asset('theme')}}/img/hero-img.svg" class="img-fluid animated" alt="">
        <h1>Welcome to <span>{{env('Company_Name')}}</span></h1>
        <p>Design Your Dreams For a Greater Reality.</p>
        <div class="d-flex">
            <a href="/contactUs" class="btn-get-started scrollto">Raise A Query</a>
            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">

    <div class="container">

        <div class="row gy-4">

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-activity icon"></i></div>
                    <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                    <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                    <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                    <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item position-relative">
                    <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                    <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section><!-- /Featured Services Section -->

<!-- About Section -->
<section id="about" class="about section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About Us</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up">

        <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-5">
                <div class="about-img">
                    <img src="{{asset('theme')}}/img/about-portrait.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-7">
                <h3 class="pt-0 pt-lg-5">Neque officiis dolore maiores et exercitationem quae est seda lidera pat claero</h3>

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                    <li><a class="nav-link active" data-bs-toggle="pill" href="#about-tab1">Saepe fuga</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab2">Voluptates</a></li>
                    <li><a class="nav-link" data-bs-toggle="pill" href="#about-tab3">Corrupti</a></li>
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">

                    <div class="tab-pane fade show active" id="about-tab1">

                        <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                        </div>
                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                        </div>
                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                        </div>
                        <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

                    </div><!-- End Tab 1 Content -->

                    <div class="tab-pane fade" id="about-tab2">

                        <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                        </div>
                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                        </div>
                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                        </div>
                        <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

                    </div><!-- End Tab 2 Content -->

                    <div class="tab-pane fade" id="about-tab3">

                        <p class="fst-italic">Consequuntur inventore voluptates consequatur aut vel et. Eos doloribus expedita. Sapiente atque consequatur minima nihil quae aspernatur quo suscipit voluptatem.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                        </div>
                        <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Incidunt non veritatis illum ea ut nisi</h4>
                        </div>
                        <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                        <div class="d-flex align-items-center mt-4">
                            <i class="bi bi-check2"></i>
                            <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                        </div>
                        <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

                    </div><!-- End Tab 3 Content -->

                </div>

            </div>

        </div>

    </div>

</section><!-- /About Section -->


<!-- Features Section -->
<section id="features" class="features section">

    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row gy-4 d-flex">

            <li class="nav-item col-6 col-md-4 col-lg-2">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                    <i class="bi bi-binoculars" style="color: #0dcaf0;"></i>
                    <h4>Modinest</h4>
                </a>
            </li><!-- End Tab 1 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                    <i class="bi bi-box-seam" style="color: #6610f2;"></i>
                    <h4>Undaesenti</h4>
                </a>
            </li><!-- End Tab 2 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                    <i class="bi bi-brightness-high" style="color: #20c997;"></i>
                    <h4>Pariatur</h4>
                </a>
            </li><!-- End Tab 3 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                    <i class="bi bi-command" style="color: #df1529;"></i>
                    <h4>Nostrum</h4>
                </a>
            </li><!-- End Tab 4 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                    <i class="bi bi-easel" style="color: #0d6efd;"></i>
                    <h4>Adipiscing</h4>
                </a>
            </li><!-- End Tab 5 Nav -->

            <li class="nav-item col-6 col-md-4 col-lg-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
                    <i class="bi bi-map" style="color: #fd7e14;"></i>
                    <h4>Reprehit</h4>
                </a>
            </li><!-- End Tab 6 Nav -->

        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active show" id="features-tab-1">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                        <h3>Modinest</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{asset('theme')}}/img/features-1.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 1 -->

            <div class="tab-pane fade" id="features-tab-2">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Undaesenti</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{asset('theme')}}/img/features-2.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 2 -->

            <div class="tab-pane fade" id="features-tab-3">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Pariatur</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                        </ul>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{asset('theme')}}/img/features-3.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 3 -->

            <div class="tab-pane fade" id="features-tab-4">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Nostrum</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{asset('theme')}}/img/features-4.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 4 -->

            <div class="tab-pane fade" id="features-tab-5">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Adipiscing</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{asset('theme')}}/img/features-5.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 5 -->

            <div class="tab-pane fade" id="features-tab-6">
                <div class="row gy-4">
                    <div class="col-lg-8 order-2 order-lg-1">
                        <h3>Reprehit</h3>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle-fill"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-4 order-1 order-lg-2 text-center">
                        <img src="{{asset('theme')}}/img/features-6.svg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End Tab Content 6 -->

        </div>

    </div>

</section>
<!-- /Features Section -->

<!-- Services Section -->
<section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Our Services</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-item">
                    <div class="img">
                        <img src="{{asset('theme')}}/img/services-1.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-activity"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Nesciunt Mete</h3>
                        </a>
                        <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium minus dolores iure perferendis.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-item">
                    <div class="img">
                        <img src="{{asset('theme')}}/img/services-2.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-broadcast"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Eosle Commodi</h3>
                        </a>
                        <p>Ut autem aut autem non a. Sint sint sit facilis nam iusto sint. Libero corrupti neque eum hic non ut nesciunt dolorem.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

            <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                <div class="service-item">
                    <div class="img">
                        <img src="{{asset('theme')}}/img/services-3.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="details position-relative">
                        <div class="icon">
                            <i class="bi bi-easel"></i>
                        </div>
                        <a href="service-details.html" class="stretched-link">
                            <h3>Ledo Markt</h3>
                        </a>
                        <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->

        </div>

    </div>

</section><!-- /Services Section -->

<!-- Recent Posts Section -->
<section id="recent-posts" class="recent-posts section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="row gy-4">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <article>

                    <div class="post-img">
                        <img src="{{asset('theme')}}/img/blog/blog-1.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Politics</p>

                    <h2 class="title">
                        <a href="blog-details.html">Dolorum optio tempore voluptas dignissimos</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{asset('theme')}}/img/blog/blog-author.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Maria Doe</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jan 1, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <article>

                    <div class="post-img">
                        <img src="{{asset('theme')}}/img/blog/blog-2.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Sports</p>

                    <h2 class="title">
                        <a href="blog-details.html">Nisi magni odit consequatur autem nulla dolorem</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{asset('theme')}}/img/blog/blog-author-2.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Allisa Mayer</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 5, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <article>

                    <div class="post-img">
                        <img src="{{asset('theme')}}/img/blog/blog-3.jpg" alt="" class="img-fluid">
                    </div>

                    <p class="post-category">Entertainment</p>

                    <h2 class="title">
                        <a href="blog-details.html">Possimus soluta ut id suscipit ea ut in quo quia et soluta</a>
                    </h2>

                    <div class="d-flex align-items-center">
                        <img src="{{asset('theme')}}/img/blog/blog-author-3.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                        <div class="post-meta">
                            <p class="post-author">Mark Dower</p>
                            <p class="post-date">
                                <time datetime="2022-01-01">Jun 22, 2022</time>
                            </p>
                        </div>
                    </div>

                </article>
            </div><!-- End post list item -->

        </div><!-- End recent posts list -->

    </div>

</section><!-- /Recent Posts Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
    </div><!-- End Section Title -->

    <div class="mb-5">
        <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen=""></iframe>
    </div><!-- End Google Maps -->

    <div class="container" data-aos="fade">

        <div class="row gy-5 gx-lg-5">

            <div class="col-lg-4">

                <div class="info">
                    <h3>Get in touch</h3>
                    <p>Et id eius voluptates atque nihil voluptatem enim in tempore minima sit ad mollitia commodi minus.</p>

                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div><!-- End Info Item -->

                </div>

            </div>

            <div class="col-lg-8">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" placeholder="Message" required=""></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
@endsection