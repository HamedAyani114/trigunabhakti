<nav id="navbar" class="navbar">
    <ul>

      <li><a class="{{ Route::is('dashboard.index') ? 'active' : '' }}" href="{{ Route('dashboard.index') }}">Home</a></li>
      <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
          <li><a href="{{ route('visimisi') }}">Visi Misi</a></li>
          <li><a href="{{ route('program') }}">Program unggulan</a></li>
          <li class="dropdown"><a href="#"><span>Pendidikan</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">SD</a></li>
              <li><a href="#">SMP</a></li>
              <li><a href="#">SMK</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="{{ route('modelSeragam') }}"><span>Model seragam</span> <i class="bi bi-chevron-right"></i></a>
            <ul>
              <li><a href="#">SD</a></li>
              <li><a href="#">SMP</a></li>
              <li><a href="#">SMK</a></li>
            </ul>
          </li>
          <li><a href="{{ route('kurikulum') }}">Kurikulum</a></li>
        </ul>
      </li>
      <li class="dropdown"><a href="#"><span>Fasilitas</span> <i class="bi bi-chevron-down"></i></a>
        <ul>
          <li><a href="{{route('fasilitas.kelas')}}">Ruang kelas</a></li>
          <li><a href="{{route('fasilitas.parkir')}}">Tempat parkir</a></li>
          <li><a href="#">Musholla</a></li>
          <li><a href="#">Lapangan Voli, Futsal & Badminton</a></li>
          <li><a href="#">Aula</a></li>
          <li><a href="#">Perpustakaan</a></li>
          <li><a href="#">Kantin</a></li>
          <li><a href="#">Lab Komputer</a></li>
          <li><a href="#">Lab Biologi</a></li>
          <li><a href="#">UKS</a></li>
          <li><a href="#">Koperasi</a></li>
          <li><a href="#">Ruang Multimedia</a></li>

        </ul>
      </li>
      <li><a class="{{ Route::is('blog.index') ? 'active' : '' }}" href="{{ route('blog.index') }}">Article </a></li>
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
