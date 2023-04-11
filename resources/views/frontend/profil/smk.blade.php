@extends('layouts.frontend.page')

@section('smk')
{{-- head-content --}}
<div class="main-smk">
  <div class="sd-title bg-smk">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-12">
          <h2>SEKOLAH BERPRESTASI</h2>
          <h4>Menjadi SMK yang berkualitas , profesional dan berkarakter untuk masa depan yang cemerlang
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
          <h3>SMK TRI GUNA BHAKTI</h3>
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
<section class="why-us section-bg" data-aos="fade-up" date-aos-delay="300">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 video-box">
        @foreach ($kepseks as $kepsek)
        <img style="padding-top:10%; padding-left:10%;padding-bottom:5%; padding-right:5%;"
          src="{{ asset('images/pegawai/'.$kepsek->foto) }}" height="650px" class="img-fluid" alt="">
        @endforeach
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

        <div class="icon-box">
          <div class="icon"><i class="bx bx-fingerprint"></i></div>
          <h4 class="title"><a href="">Sambutan Kepala Sekolah</a></h4>
          <p style="font-weight:bold; margin-left:10px; "> Assalaamu’alaikum wr. wb.</p>
          <p class="description">
            Pendidikan adalah proses membangun diri untuk masa depan bangsa dan agama, maka siapapun kita akan mendapat
            sukses besar pada masa depan dengan memulai pendidikan yang baik dan berkualias bagi lingkungan kita, anak
            anak kita dan warga sekitar kita. Bangsa yang maju adalah bangsa yang mengedepankan pendidikan berkualitas
            bagi rakyatnya, keluarga maju adalah keluarga yang mengedepankan pendidikan berkualitas bagi anggota
            keluarganya.
            Yayasan Tri Guna Bhakti sangat mengedepankan kualitas pendidikan bagi setiap anak bangsa yang meraih sukses
            besar dimasa depan. Anak anak kita perlu belajar dan berlatih dalam lingkungan kondusif guna mengembangkan
            potensi diri, menghadapi persoalan kekinian yang membentuk kepribadian:
          </p>
          <p style="text-align:center;"><i>“mencetak SDM Indonesia yang unggul, humanis, cerdas dan mencetak
              pemimpin”</i></p>
          <p class="description">
            Saya ucapkan sukses untuk anak anakku di Yayasan Tri Guna Bhakti dalam urusan anda didunia, dan sukses juga
            untuk urusan akhirat kita semua. Amiiiin

          </p>
          <p style="font-weight:bold; margin-left:10px;"> Wassalaamu’alaikum wr.wb</p>
        </div>

      </div>
    </div>

  </div>
</section><!-- End Why Us Section -->

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
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Data Guru</h2>
      <p>Berikut daftar guru SMK Tri Guna Bhakti Surabaya</p>
    </div>

    <div class="row">

      @foreach ($kepseks as $kepsek)

      <div class="col-lg-12 mt-0 d-flex justify-content-center">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="{{ asset('images/pegawai/'.$kepsek->foto) }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            {{-- pegawai where jabatan = kepsesk --}}
            <h4>{{ $kepsek->nama }}</h4>
            <span>{{ $kepsek->jabatan }}</span>
            <p style="color: transparent">Explicabo voluptatem mollitia et repellat qui dolorum migas</p>
          </div>
        </div>
      </div>
      @endforeach

      @foreach ($pegawais as $pegawai)
      <div class="col-lg-4 mt-0">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="{{ asset('images/pegawai/'.$pegawai->foto) }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>{{ $pegawai->nama }}</h4>
            <span>{{ $pegawai->jabatan }}</span>
            {{-- <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p> --}}
          </div>
        </div>
      </div>
      @endforeach


    </div>
  </div>
</section>
<!-- End Team Section -->

{{-- Detail sekolah --}}
<section id="faq" class="faq">

  <div class="container" data-aos="fade-up">

    <header class="section-title">
      <h2>Data Sekolah</h2>
      <p>Jumlah data Tenaga Pendidik dan siswa</p>
    </header>

    <div class="row">
      <div class="col-lg-12">
        <!-- F.A.Q List 1-->
        <div class="accordion accordion-flush" id="faqlist1">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-1">
                <i class="fa-solid fa-chalkboard-user"></i>Data Tenaga Pendidik
              </button>
            </h2>
            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
              <div class="accordion-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>#</th>
                    <th>Tenaga Pendidik</th>
                    <th>Jumlah</th>
                  </tr>
                  <tr>
                    <td>1</td>
                    <td>Tenaga Pendidik Aktif</td>
                    <td>{{ $totalPegawaiSmk }}</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>

          {{-- <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-2">
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
          </div> --}}

          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#faq-content-3">
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
                    <td>160</td>
                  </tr>
                  {{-- <tr>
                    <td>2</td>
                    <td>Siswa tidak aktif</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Siswa dikeluarkan</td>
                    <td></td>
                  </tr> --}}
                  <tr>
                    <td>2</td>
                    <td>Siswa Laki-laki</td>
                    <td>93</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Siswa Perempuan</td>
                    <td>67</td>
                  </tr>

                </table>
              </div>
            </div>
          </div>

        </div>
      </div>

</section>
<!-- End detail smk -->


@endsection