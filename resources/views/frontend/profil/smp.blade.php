@extends('layouts.frontend.page')

@section('smk')
{{-- head-content --}}
<div class="main-smp">
    <div class="sd-title bg-smp">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h2>SEKOLAH BERPRESTASI</h2>
                    <h4>Menjadi SMP yang berkualitas , profesional dan berkarakter untuk masa depan yang cemerlang
                    </h4>
                    <a href="#logo" class="btn-read-me">Baca selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- logo --}}
<section id="logo" data-aos="fade-up" date-aos-delay="300">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-12">
        <div class="logo-title" style="font-size:28px;">
          <h3>SMP TRI GUNA BHAKTI</h3>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12 text-center">
        <div class="logo">
          <img src="{{ asset('images/logo/logo-smk.png') }}" alt="" width="60%">
        </div>
      </div>
    </div>

  </div>
</section>

{{-- Sambutan --}}
<section id="sambutan" class="why-us section-bg" data-aos="fade-up" date-aos-delay="300">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 video-box">
                <img src="{{ asset('assets/frontend/img/about.jpg') }}" class="img-fluid" alt="">
            </div>

            <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                <div class="icon-box">
                    <div class="icon"><i class="bx bx-fingerprint"></i></div>
                    <h4 class="title"><a href="">Sambutan Kepala Sekolah SMK Tri Guna Bhakti</a></h4>
                    <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                        excepturi sint occaecati cupiditate non provident Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nisi corrupti vitae, ratione nihil deleniti totam ab soluta nesciunt neque nemo explicabo tenetur tempora nostrum voluptates aliquid magni adipisci sed.</p>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- visimisi --}}
<section id="visimisi" data-aos="fade-up" date-aos-delay="300">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="visimisi-title text-center">
                    <h1><i class="fa-solid fa-thumbtack"></i> Visi Misi</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="visimisi-title">
                    <h2>VISI</h2>
                </div>
                <div class="visimisi">
                  Menjadi SMK yang berkualitas , profesional dan berkarakter untuk masa depan yang cemerlang
                </div>
            </div>
            <div class="col-12">
                <div class="visimisi-title">
                    <h2>MISI</h2>
                </div>
                <div class="visimisi">
                    <ul>
                      <li>1. Memberikan layanan yang profesional bagi peserta didik</li> 
                      <li>2. Mencetak lulusan yang profesional dibidang bisnis dan manajemen</li> 
                      <li>3. Mencetak lulusan yang berkarakter.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<hr>
{{-- guru sd --}}
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Daftar Guru</h2>
        <p>Berikut daftar nama guru SD Tri Guna Bhakti</p>
      </div>

      <div class="row">

        <div class="col-lg-12 mt-4 justify-content-center">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="pic"><img src="assets/img/team/team-1.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
            <div class="pic"><img src="assets/img/team/team-2.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Team Section -->

  {{-- Detail sekolah --}}
  <section id="faq" class="faq">

    <div class="container" data-aos="fade-up">

      <header class="section-title">
        <h2>Data Sekolah</h2>
        <p>Jumlah data guru, tendik dan siswa</p>
      </header>

      <div class="row">
        <div class="col-lg-12">
          <!-- F.A.Q List 1-->
          <div class="accordion accordion-flush" id="faqlist1">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                  <i class="fa-solid fa-chalkboard-user"></i>Data guru
                </button>
              </h2>
              <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>#</th>
                      <th>Guru</th>
                      <th>Jumlah</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Guru Aktif</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Guru Tidak Aktif</td>
                      <td></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                  <i class="fa-solid fa-user-group"></i> Data Tenaga didik
                </button>
              </h2>
              <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>#</th>
                      <th>Tenaga didik</th>
                      <th>Jumlah</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Tenaga didik Aktif</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Tenaga didik Tidak Aktif</td>
                      <td></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>

            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                  <i class="fa-solid fa-user-pen"></i> Data Siswa
                </button>
              </h2>
              <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                <div class="accordion-body">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>#</th>
                      <th>Siswa</th>
                      <th>Jumlah</th>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>Siswa Aktif</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Siswa tidak aktif</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Siswa dikeluarkan</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Siswa Pria</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Siswa Wanita</td>
                      <td></td>
                    </tr>
                    
                  </table>
                </div>
              </div>
            </div>

          </div>
        </div>

  </section><!-- End F.A.Q Section -->


@endsection