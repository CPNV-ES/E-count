<div class="sidebar" data-color="orange">
  <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
  <div class="logo">
    <a href="/home" class="simple-text logo-mini">
        <img src="{{ asset('assets/img/logoecount.png') }}" alt="">
    </a>
    <a href="/home" class="simple-text logo-normal">
      {{ __('E-count') }}
    </a>
  </div>
  <div class="sidebar-wrapper" id="sidebar-wrapper">
    <ul class="nav">
      <li class="@if ($activePage == 'home') active @endif">
        <a href="{{ route('home') }}">
          <i class="now-ui-icons design_app"></i>
          <p>{{ __('Tableau de bord') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'profile') active @endif">
        <a href="{{ route('profile.edit') }}">
            <i class="now-ui-icons users_single-02"></i>
            <p>{{ __("Mon Profil") }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'table') active @endif">
        <a href="{{ route('page.index','table') }}">
          <i class="now-ui-icons design_bullet-list-67"></i>
          <p>{{ __('Table List') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
