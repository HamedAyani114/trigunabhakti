@extends('layouts.frontend.page')

@section('sejarah')
    <section id="sejarah" class="sejarah">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h3>Sejarah</h3>
              <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <a class="cta-btn" href="{{ route('sejarah') }}">Baca Selengkapnya</a>
            </div>
          </div>
        </div>    
      </section>
@endsection

@section('kurikulum')
<section id="kurikulum" class="kurikulum">
  <div class="container" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h3>Kurikulum</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn" href="{{ route('pendidikan') }}">Baca Selengkapnya</a>
      </div>
    </div>
  </div>    
</section>
@endsection

@section('content')
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="300">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 video-box">
                    <img src="{{ asset('assets/frontend/img/about.jpg') }}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Sambutan Kepala Sekolah</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi sint occaecati cupiditate non provident Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nisi corrupti vitae, ratione nihil deleniti totam ab soluta nesciunt neque nemo explicabo tenetur tempora nostrum voluptates aliquid magni adipisci sed.</p>
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->
    <section id="visimisi-yys" class="visimisi-yys section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Visi Misi</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="icon-box">
                        <h4 class="title text-center">Visi</h4>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam est quam temporibus numquam, fugit minima reprehenderit! Saepe eius nostrum nesciunt debitis placeat illo accusamus mollitia obcaecati! Veritatis quasi rerum expedita aperiam, adipisci, optio eum voluptates illo ipsa quae sit illum architecto eius ratione maxime vel dignissimos? Reiciendis delectus obcaecati ullam ducimus fugiat cumque blanditiis optio facere excepturi eligendi odit, est velit voluptate recusandae. Delectus dicta repellat saepe dolorum minima magnam cum maxime eligendi amet veritatis eaque rem optio, natus maiores earum sed facere aut eos nisi molestias reprehenderit. Libero ut autem incidunt sint id sed! Soluta earum laborum doloribus?</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <h4 class="title text-center">Misi</h4>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate veniam est quam temporibus numquam, fugit minima reprehenderit! Saepe eius nostrum nesciunt debitis placeat illo accusamus mollitia obcaecati! Veritatis quasi rerum expedita aperiam, adipisci, optio eum voluptates illo ipsa quae sit illum architecto eius ratione maxime vel dignissimos? Reiciendis delectus obcaecati ullam ducimus fugiat cumque blanditiis optio facere excepturi eligendi odit, est velit voluptate recusandae. Delectus dicta repellat saepe dolorum minima magnam cum maxime eligendi amet veritatis eaque rem optio, natus maiores earum sed facere aut eos nisi molestias reprehenderit. Libero ut autem incidunt sint id sed! Soluta earum laborum doloribus?</p>
                    </div>
                </div>
            </div>
    </section>

    <section id="programUnggulan" class="programUnggulan">
        <div class="section-title">
            <h2>Program Unggulan</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        <section id="featured-services" class="featured-services">
            <div class="container">
      
              <div class="row gy-4">
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                  <div class="icon flex-shrink-0"><i class="fa-solid fa-cart-flatbed"></i></div>
                  <div>
                    <h4 class="title">English Class</h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
                  </div>
                </div>
                <!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                  <div>
                    <h4 class="title">Kelas Mengaji</h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon flex-shrink-0"><i class="fa-solid fa-truck-ramp-box"></i></div>
                  <div>
                    <h4 class="title">Pramuka</h4>
                    <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
                  </div>
                </div><!-- End Service Item -->
      
              </div>
      
            </div>
          </section>
    </section>
@endsection