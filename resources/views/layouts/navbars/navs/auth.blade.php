<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
    <a class="navbar-brand">{{ $namePage }}</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/home">
            <i class="now-ui-icons business_chart-bar-32"></i>
            <p>
              <span class="d-lg-none d-md-block">{{ __("Tableau de bord") }}</span>
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons users_single-02"></i>
            <p>
              <span class="d-lg-none d-md-block">{{ __("Compte") }}</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __("Mon profil") }}</a>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __("Modifier mon profil") }}</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
              {{ __('Se déconnecter') }}
            </a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
  <!-- End Navbar -->
