@extends('layouts.frontend.app')

@section('content')
<div class="col-lg-8 entries">

    <article class="entry">
      <div class="entry-img">
        <img src="../images/benner/{{ $post->banner }}" alt="" class="img-fluid">
      </div>
      <h2 class="entry-title">
        <a href="{{ $post->slug }}">{{ $post->title }}</a>
      </h2>
      <div class="entry-meta">
        <ul>
          <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/user/{{ $post->user_id }}">{{ $post->user->name }}</a></li>
          <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#"><time datetime="2020-01-01">{{ $post->created_at->diffForHumans() }}</time></a></li>
          {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="/blog/{{ $post->slug }}#comments">{{ $post->comments->count() }} Comments</a></li> --}}
        </ul>
      </div>

      <div class="entry-content">
        <p>{!! $post->body !!}</p>
      </div>
      <div class="entry-footer">
        <i class="bi bi-folder"></i>
        <ul class="cats">
          <li><a href="/cat/{{ $post->category_id }}">{{ $post->category->category_name }}</a></li>
        </ul>

      </div>
    </article>
    <div class="blog-author d-flex align-items-center">
        {{-- <img src="../{{ (empty($post->user->photo)) ? 'assets/admin/img/avatar/avatar-1.png' : ($post->user->photo) }}" alt="avatar"> --}}

        <div>
          <i>upload by</i>
          <h6>{{ $post->user->name }}</h6>
          {{-- <div class="social-links">
            <a href="{{ $post->user->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="{{ $post->user->facebook }}"target="_blank"><i class="bi bi-facebook"></i></a>
            <a href="{{ $post->user->instagram }}"target="_blank"><i class="biu bi-instagram"></i></a>
          </div>
          <p>{!! $post->user->bio !!}</p> --}}
        </div>
      </div>

      {{-- <div class="blog-comments" id="comments">
        @comments([
            'model' => $post,
            'approved' => true
        ])
      </div> --}}

    <!-- End blog entry -->
  </div>
@endsection
