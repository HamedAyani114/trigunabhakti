@extends('layouts.frontend.page')

@section('sejarah')
    <section id="sejarah" class="sejarah">
        <div class="container" data-aos="fade-up">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <h3>Sejarah</h3>
              <p>Yayasan Pendidikan Tri Guna Bhakti Surabaya resmi berdiri pada tanggal 16 Oktober 2017</p>
              <a class="cta-btn" href="{{ route('sejarah') }}">Baca Selengkapnya</a>
            </div>
          </div>
        </div>    
      </section>
@endsection

{{-- @section('kurikulum')
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
@endsection --}}

@section('content')
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="300">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 video-box">
                    <img style="padding-top:10%;" src="{{ asset('assets/frontend/img/about.jpg') }}" width="500" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                    <div class="icon-box">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Sambutan Ketua Yayasan</a></h4>
                        <p style="font-weight:bold; margin-left:10px; "> Assalaamu’alaikum wr. wb.</p> 
                        <p class="description">
                          Pendidikan adalah proses membangun diri untuk masa depan bangsa dan agama, maka siapapun kita akan mendapat sukses besar pada masa depan dengan memulai pendidikan yang baik dan berkualias  bagi lingkungan kita, anak anak kita dan  warga sekitar kita. Bangsa yang maju adalah bangsa yang mengedepankan pendidikan berkualitas bagi rakyatnya, keluarga maju adalah keluarga yang mengedepankan pendidikan berkualitas bagi anggota keluarganya.
                          Yayasan Tri Guna Bhakti sangat mengedepankan kualitas pendidikan bagi setiap anak bangsa yang meraih sukses besar dimasa depan.  Anak anak kita perlu belajar dan berlatih dalam lingkungan kondusif guna mengembangkan potensi diri, menghadapi persoalan kekinian yang membentuk kepribadian:
                        </p>
                        <p style="text-align:center;"><i>“mencetak SDM Indonesia yang unggul, humanis, cerdas dan mencetak pemimpin”</i></p>
                        <p class="description">
                          Saya ucapkan sukses untuk anak anakku di Yayasan Tri Guna Bhakti dalam urusan anda didunia, dan sukses juga untuk urusan akhirat kita semua. Amiiiin
                          
                        </p>
                        <p style="font-weight:bold; margin-left:10px;"> Wassalaamu’alaikum wr.wb</p> 
                    </div>

                </div>
            </div>

        </div>
    </section><!-- End Why Us Section -->
    <section id="visimisi-yys" class="visimisi-yys section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Visi Misi</h2>
                {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-6">
                    <div class="icon-box">
                        <h4 class="title text-center">Visi</h4>
                        <p class="description" style="text-align: justify">Mewujudkan Lembaga Pendidikan yang Unggul dalam Melayani Umat di Bidang Sosial, Pendidikan dan Keagamaan untuk Membangun Sumber Daya Manusia (SDM) yang Berkarakter, Cerdas, Integritas dan Berakhlaq Mulia.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <h4 class="title text-center">Misi</h4>
                        <p class="description" style="text-align: justify">
                           1. Meningkatkan Pendidikan yang bermutu dan Pengajaran yang berkualitas
                          <br> 2. Membangun Pusat Dakwah, Sosial dan Pendidikan yang Berbasis Pada Pemberdayaan Masyarakat.
                          <br> 3. Menyelenggarakan Berbagai Layanan Sosial dalam Membantu Pemberdayaan Umat.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section id="programUnggulan" class="programUnggulan">
        <div class="section-title">
            <h2>Program Unggulan</h2>
            <p>Terdapat program unggulan yang ada pada YAyasan Tri Guna Bhakti sebagi berikut</p>
        </div>
        <section id="featured-services" class="featured-services">
            <div class="container">
      
              <div class="row gy-4">
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up">
                  <div class="icon flex-shrink-0"><i class="fa-solid fa-book"></i></div>
                  <div>
                    <h4 class="title">English Class</h4>
                    <p class="description">Memeberikan pemahaman lebih berbahasa inggris kepada siswa-siswi. </p>
                  </div>
                </div>
                <!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon flex-shrink-0"><i class="fa-solid fa-truck"></i></div>
                  <div>
                    <h4 class="title">Kelas Mengaji</h4>
                    <p class="description">Untuk menjadikan siswa siswi lebih bertaqwa kepada Tuhan YME. dengan adanya kelas mengaji. Lebih memahami bacaan dan tajwid dalam membaca Al-Qur'an.</p>
                  </div>
                </div><!-- End Service Item -->
      
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                  <div class="icon flex-shrink-0"><i class="fa-solid fa-fire"></i></div>
                  <div>
                    <h4 class="title">Pramuka</h4>
                    <p class="description">Menumbuhkan jiwa pramuka kepada siswa-siswi.</p>
                  </div>
                </div><!-- End Service Item -->
      
              </div>
      
            </div>
          </section>
    </section>
@endsection