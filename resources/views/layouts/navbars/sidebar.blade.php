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
          <i class="now-ui-icons business_chart-bar-32"></i>
          <p>{{ __('Tableau de bord') }}</p>
        </a>
      </li>
      <li class="@if ($activePage == 'costs') active @endif">
        <a href="{{ route('costs.show') }}">
          <i class="now-ui-icons business_money-coins"></i>
          <p> {{ __("Gérer les dépenses") }} </p>
        </a>
      </li>
      <li class="@if ($activePage == 'profile') active @endif">
        <a href="{{ route('profile.edit') }}">
            <i class="now-ui-icons users_single-02"></i>
            <p>{{ __("Mon Profil") }}</p>
        </a>
      </li>
      <li class = " @if ($activePage == 'create') active @endif">
        <a href="{{ route('costs.create') }}">
          <i class="now-ui-icons ui-1_simple-add"></i>
          <p>{{ __('Créer une dépense') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
