@extends('layouts.frontend.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="3700">

        <!-- Slide 1 -->
        <?php
        $i = 0;
        ?>
        @foreach ($posts as $post)
        <div class="carousel-item <?php if($i < 1){ ?>active<?php }; ?>">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">{{ $post->title }}</span></h2>
                <p class="animate__animated animate__fadeInUp">{{ $post->excerpt }}</p>
                </p>
                <a href="/blog/{{ $post->slug }}" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
            </div>
        </div>
        <?php
          $i++;
        ?>
        @endforeach
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
        @include('frontend.service')
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="300">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="assets/img/why-us.jpg" class="img-fluid" alt="">
                    <iframe width="100%" height="90%" src="https://www.youtube.com/embed/ZVhFzqe6KoE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Visi</a></h4>
                        <p class="description" style="text-align: justify">Mewujudkan Lembaga Pendidikan yang Unggul dalam Melayani Umat di Bidang Sosial, Pendidikan dan Keagamaan untuk Membangun Sumber Daya Manusia (SDM) yang Berkarakter, Cerdas, Integritas dan Berakhlaq Mulia.</p>

                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-gift"></i></div>
                        <h4 class="title"><a href="">Misi</a></h4>
                        <p class="description" style="text-align: justify">
                            1. Meningkatkan Pendidikan yang bermutu dan Pengajaran yang berkualitas
                           <br> 2. Membangun Pusat Dakwah, Sosial dan Pendidikan yang Berbasis Pada Pemberdayaan Masyarakat.
                           <br> 3. Menyelenggarakan Berbagai Layanan Sosial dalam Membantu Pemberdayaan Umat.
                         </p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <div class="container">
    {{-- <section class="features">
            <div class="section-title">
                <h2>Features</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="{{ asset('images/kepsek.jpg') }}" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-4">
                    <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Corporis temporibus maiores provident</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5">
                    <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5">
                    <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
                    <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit
                        aut quia voluptatem hic voluptas dolor doloremque.</p>
                    <ul>
                        <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
                    </ul>
                </div>
            </div>

            <div class="row" data-aos="fade-up">
                <div class="col-md-5 order-1 order-md-2">
                    <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                </div>
                <div class="col-md-7 pt-5 order-2 order-md-1">
                    <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.
                    </p>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                        in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>
        </section> --}}
        <!-- End Features Section -->

    {{-- Prestasi Section --}}
    <section id="prestasi" class="prestasi">
      <div id="slider">
        <header class="section-title text-center">
          <h2>Prestasi</h2>
          <p>Berikut Prestasi yang diraih oleh murid berprestasi di Yayasan Tri Guna Bhakti</p>
        </header>
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
           <div id="overflow">
              <div class="inner">
                 <div class="slide slide_1">
                    <div class="slide-content">
                       {{-- <h2>Slide 1</h2> --}}
                       {{-- <p>Content for Slide 1</p> --}}
                       {{-- <img src="{{ asset('assets/frontend/img/Prestasi/Prestasi SMK.jpg') }}" alt="" width="500" height="400"> --}}
                    </div>
                 </div>
                 <div class="slide slide_2">
                    <div class="slide-content">
                       {{-- <h2>Slide 2</h2> --}}
                       {{-- <p>Content for Slide 2</p> --}}
                       {{-- <img src="{{ asset('assets/frontend/img/Prestasi/Prestasi SD-4.jpg') }}" alt="" width="500" height="400"> --}}

                    </div>
                 </div>
                 <div class="slide slide_3">
                   <div class="slide-content">
                    {{-- <img src="{{ asset('assets/frontend/img/Prestasi/Prestasi SD-3.jpg') }}" alt="" width="600" height="400"> --}}
                    </div>
                 </div>
                 <div class="slide slide_4">
                    <div class="slide-content">
                      {{-- <img src="{{ asset('assets/frontend/img/Prestasi/Prestasi SMP-1.jpg') }}" alt="" width="600" height="400"> --}}
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div id="controls">
           <label for="slide1"></label>
           <label for="slide2"></label>
           <label for="slide3"></label>
           <label for="slide4"></label>
        </div>
        <div id="bullets">
           <label for="slide1"></label>
           <label for="slide2"></label>
           <label for="slide3"></label>
           <label for="slide4"></label>
        </div>
     </div>
    </section>
    {{-- End Prestasi Section --}}
</main><!-- End #main -->
@endsection
