@extends('layouts.frontend.page')

@section('content')
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

      <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-lg-12">
                <header class="section-header text-center">
                  <h2>EKSTRAKULIKULER</h2>
                  <p>Berikut ekstrakulikuler yang ada di Yayasan Tri Guna Bhakti</p>
                </header>
        
                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
                  <div class="swiper-wrapper">
        
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img class="img-ekskul" src="{{ asset('assets/frontend/img/tes1.jpg') }}" alt="">
                        <div class="profile mt-auto">
                            <h3>Futsal</h3>
                            <h4>Ekstrakulikuler</h4>
                        </div>
                        {{-- <p>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p> --}}
                      </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img class="img-ekskul" src="{{ asset('assets/frontend/img/tes1.jpg') }}" alt="">
                        <div class="profile mt-auto">
                            <h3>Juujitsu</h3>
                            <h4>Ekstrakulikuler</h4>
                        </div>
                        {{-- <p>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p> --}}
                      </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img class="img-ekskul" src="{{ asset('assets/frontend/img/tes1.jpg') }}" alt="">
                        <div class="profile mt-auto">
                            <h3>Tari</h3>
                            <h4>Ekstrakulikuler</h4>
                        </div>
                        {{-- <p>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p> --}}
                      </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img class="img-ekskul" src="{{ asset('assets/frontend/img/tes1.jpg') }}" alt="">
                        <div class="profile mt-auto">
                            <h3>Paskribaka</h3>
                            <h4>Ekstrakulikuler</h4>
                        </div>
                        {{-- <p>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p> --}}
                      </div>
                    </div><!-- End testimonial item -->
                    <div class="swiper-slide">
                      <div class="testimonial-item">
                        <img class="img-ekskul" src="{{ asset('assets/frontend/img/tes1.jpg') }}" alt="">
                        <div class="profile mt-auto">
                            <h3>Banjari</h3>
                            <h4>Ekstrakulikuler</h4>
                        </div>
                        {{-- <p>
                          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                        </p> --}}
                      </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
                <div style="margin-top: -50px" class="swiper-pagination"></div>
                </div>
              </div>
            </div>
        </div>

    </section><!-- End Testimonials Section -->
@endsection