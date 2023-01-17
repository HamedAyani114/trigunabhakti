<nav id="navbar" class="navbar">
    <ul>
      <li><a class="active " href="/">Home</a></li>
      <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="#">Sejarah</a></li>
          <li><a href="#">Visi Misi</a></li>
          <li><a href="#">Program unggulan</a></li>
          <li class="dropdown"><a href="#"><span>Pendidikan</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">SD</a></li>
              <li><a href="#">SMP</a></li>
              <li><a href="#">SMK</a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li><a href="{{ route('blog.index') }}">Article </a></li>
      <li><a href="{{ route('gallery.show') }}">Gallery</a></li>
      <li><a href="{{ url('about') }}">About</a></li>
      <li class="nav-item">
        @auth
        <li class="nav-item {{ request()->is('gallery')?'active':'' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
        </li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @endauth
    </li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
