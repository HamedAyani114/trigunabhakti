@extends('layouts.frontend.page')

@section('content')

<section class="about aos-init aos-animate" data-aos="fade-up">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 video-box">
        <img src="" class="img-fluid" alt="">
        <iframe width="99%" height="90%" src="https://www.youtube.com/embed/4A0cGrYw5jI" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
      <div class="col-lg-6 pt-4 pt-lg-0">
        <h3>Tri Guna Bhakti</h3>
        <p class="fst-italic">
          Yayasan Pendidikan Tri Guna Bhakti Surabaya resmi berdiri pada tanggal 16 Oktober 2017 berlokasi di Jl. Kyai
          Tambak Deres No.34, Bulak, Kec. Bulak, Kota SBY, Jawa Timur 60124. Oleh Ibu Suharnanik sebagai pendiri.
          <br> Yayasan Pendidikan Tri Guna Bhakti Surabaya menaungi 3 Sekolah yaitu:
        </p>
        <ul>
          <li><i class="bi bi-check2-circle"></i> SD Tri Guna Bhakti Surabaya</li>
          <li><i class="bi bi-check2-circle"></i> SMP Tri Guna Bhakti Surabaya</li>
          <li><i class="bi bi-check2-circle"></i> SMK Tri Guna Bhakti Surabaya</li>


        </ul>
        <p>
          Yayasan Pendidikan Tri Guna Bhakti Surabaya berdiri dengan tujuan untuk memberikan pelayanan pendidikan yang
          berkualitas dan berwawasan global kepada masyarakat.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Pengurus</h2>
      {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
        iste officiis commodi quidem hic quas.</p> --}}
    </div>

    <div class="row">

      @foreach ($ketuas as $ketua)

      <div class="col-lg-12 mt-0 d-flex justify-content-center">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="{{ asset('images/pegawai/'.$ketua->foto) }}" class="img-fluid" alt=""></div>
          <div class="member-info">
            {{-- pegawai where jabatan = kepsesk --}}
            <h4>{{ $ketua->nama }}</h4>
            <span>{{ $ketua->jabatan }}</span>
            <p style="color: transparent">Explicabo voluptatem mollitia et repellat qui dolorum</p>
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

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>Contact</h2>
      {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
        consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in
        iste officiis commodi quidem hic quas.</p> --}}
    </div>

    <div class="row">

      <div class="col-lg-12 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Alamat:</h4>
            <p>Jl. Kyai Tambak Deres No.34, Bulak, Kec. Bulak, Kota SBY, Jawa Timur 60124</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>yayasantrigunabhakti@gmail.com</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Telepon:</h4>
            <p> 031 - 51500309</p>
          </div>

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d976.3402948029031!2d112.77603243117899!3d-7.232858788670452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b04e679e5d%3A0xf19d77eb56ef49ea!2sSekolah%20Dasar%20Tri%20Guna%20Bhakti!5e0!3m2!1sen!2sid!4v1673187178005!5m2!1sen!2sid"
            frameborder="0" style="border:0; width: 100%; height: 390px;" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Contact Section -->

@endsection