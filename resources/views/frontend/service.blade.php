<!-- ======= Services Section ======= -->
    {{-- <div class="container">
            <div class="row justify-content-around">
                @foreach ($services as $srv)
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                    <a href="/blog/{{ $srv->slug }}">
                        <div class="icon-box icon-box-pink">
                            @if ($srv->title == 'SD Tri Guna Bhakti')
                            <div class="icon"><img src="{{ asset('images/logo/sd.png') }}"  class="img-circle elevation-2" alt="Logo" width="40"></i></div>
                            @elseif ($srv->title == 'SMP Tri Guna Bhakti')
                            <div class="icon"><img src="{{ asset('images/logo/smp.png') }}" class="img-circle elevation-2" alt="Logo" width="40"></i></div>
                            @elseif ($srv->title == 'SMK Tri Guna Bhakti')
                            <div class="icon"><img src="{{ asset('images/logo/smk.png') }}" class="img-circle elevation-2" alt="Logo" width="40"></i></div>
                            @else
                            <div class="icon"><i class="bx bxs-school"></i></div>
                            @endif
                            <h4 class="title"><a href="/blog/{{ $srv->slug }}">{{ $srv->title }}</a></h4>
                            <p class="description"><a style="color: black" href="/blog/{{ $srv->slug }}">{{ $srv->excerpt }}</a></p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div> --}}
    <div class="container">
        <div class="row justify-content-around">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <a href=" {{ route('sd') }}">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><img src="{{ asset('images/logo/sd.png') }}"  class="img-circle elevation-2" alt="Logo" width="40"></i></div>
                        {{-- <div class="icon"><img src="{{ asset('images/logo/smp.png') }}" class="img-circle elevation-2" alt="Logo" width="40"></i></div> --}}
                        {{-- <div class="icon"><img src="{{ asset('images/logo/smk.png') }}" class="img-circle elevation-2" alt="Logo" width="40"></i></div> --}}
                        {{-- <div class="icon"><i class="bx bxs-school"></i></div> --}}
                        <h4 class="title"><a href="{{ route('sd') }}">SD</a></h4>
                        <p class="description"><a style="color: black" href="{{ route('sd') }}">SD Tri Guna Bhakti Unggul Dalam Prestasi Yang Berakhlak Mulia, Berjiwa Patriot Serta Bernuansa Iman dan Taqwa</a></p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <a href=" {{ route('smp') }}">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><img src="{{ asset('images/logo/smp.png') }}" class="img-circle elevation-2" alt="Logo" width="40"></i></div>
                        <h4 class="title"><a href="{{ route('sd') }}">SMP</a></h4>
                        <p class="description"><a style="color: black" href="{{ route('smp') }}">SMP Tri Guna Bhakti Unggul Dalam Prestasi Yang Berakhlak Mulia, Berjiwa Patriot Serta Bernuansa Iman dan Taqwa</a></p>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                <a href=" {{ route('smk') }}">
                    <div class="icon-box icon-box-pink">
                        <div class="icon"><img src="{{ asset('images/logo/smk.png') }}"  class="img-circle elevation-2" alt="Logo" width="40"></i></div>
                        <h4 class="title"><a href="{{ route('smk') }}">SMK</a></h4>
                        <p class="description"><a style="color: black" href="{{ route('smk') }}">SMK Tri Guna Bhakti Unggul Dalam Prestasi Yang Berakhlak Mulia, Berjiwa Patriot Serta Bernuansa Iman dan Taqwa</a></p>
                    </div>
                </a>
            </div>
        </div>
    </div>