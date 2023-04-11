@extends('layouts.frontend.page')

@section('content')
<section class="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <ul id="portfolio-flters">
          <li data-filter="">All</li>
          @foreach ($albums as $album)
          <li data-filter=".{{ $album->id }}">{{ $album->album_name }}</li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="row portfolio-container aos-init aos-animate" data-aos="fade-up" data-aos-easing="ease-in-out"
      data-aos-duration="500" style="position: relative; height: 3753px; wow zoomIn">
      @foreach($galleries as $gallery)
      <div class="col-lg-4 col-md-6 portfolio-wrap {{ $gallery->album_id }}"
        style="position: absolute; left: 0px; top: 0px;">
        <div class="portfolio-item">
          <a class="popup-image" href="{{ asset('images/gallery/'.$gallery->picture) }}"
            title="{{ $gallery->description }}">
            <img src="{{ asset('images/gallery/'.$gallery->picture) }}" class="w-100" height="80%">
          </a>
          <div class="portfolio-info" style="color: rgb(255, 255, 255)">
            <h4>{{ $gallery->album->album_name }}</h4>
            <div class="portfolio-links">
              {{ $gallery->title }}
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $galleries->links() }}
  </div>
</section>
@endsection