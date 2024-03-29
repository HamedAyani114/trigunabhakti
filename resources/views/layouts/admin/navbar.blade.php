<nav class="navbar navbar-expand-lg main-navbar">
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="{{ asset('assets/admin/img/avatar/avatar-1.png') }}" class="rounded-circle mr-1">
        {{-- <img class="mr-3 rounded-circle" width="50"
          src="../{{ (is_null($td->member->photo)) ? 'assets/admin/img/avatar/avatar-1.png' : ($td->member->photo) }}"
          alt="avatar"> --}}
        <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
        <a href="{{ route('user.edit', Auth::user()->id) }}" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profile
        </a>
        <a href="{{ route('changePasswordGet') }}" class="dropdown-item has-icon">
          <i class="fas fa-cog"></i> Change Password
        </a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('logout') }}"
          onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
          class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>