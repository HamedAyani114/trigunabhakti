<nav id="navbar" class="navbar">
    <ul>

      <li><a class="{{ Route::is('dashboard.index') ? 'active' : '' }}" href="{{ Route('dashboard.index') }}">Home</a></li>
      <li class="dropdown"><a href="{{ route('yayasan') }}"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="{{ route('yayasan') }}"><i class="fa-solid fa-school"></i><span style="margin-right: 20%">Profil Yayasan</span></a></li>
          <li class="dropdown"><a href="#"><i class="fa-solid fa-book-open-reader"></i><span style="margin-right: 15%">Pendidikan</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="{{ route('sd') }}" style="margin-right: 110px"><img src="{{ asset('images/logo/sd.png') }}" class="img-circle elevation-2" alt="Logo" width="10">  SD</a></li>
              <li><a href="{{ route('smp') }}" style="margin-right: 100px"><img src="{{ asset('images/logo/smp.png') }}" class="img-circle elevation-2" alt="Logo" width="10"> SMP</a></li>
              <li><a href="{{ route('smk') }}" style="margin-right: 100px"><img src="{{ asset('images/logo/smk.png') }}" class="img-circle elevation-2" alt="Logo" width="10"> SMK</a></li>
            </ul>
          </li>
          <li><a href="{{ route('ekstrakulikuler') }}"><i class="fa-solid fa-person-walking"></i><span style="margin-right: 20%"> Ekstrakulikuler</span></a></li>
          
        </ul>
      </li>
      <li><a class="{{ Route::is('fasilitas.show') ? 'active' : '' }}" href="{{ route('fasilitas.show') }}">Fasilitas </a></li>
      <li><a class="{{ Route::is('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">Article </a></li>
      <li><a class="{{ Route::is('gallery.show') ? 'active' : '' }}" href="{{ route('gallery.show') }}">Galeri</a></li>
      <li><a class="{{ Route::is('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a></li>
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
