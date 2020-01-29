@extends('layouts.app', [
    'namePage' => 'Bienvenue',
    'class' => 'login-page sidebar-mini ',
    'activePage' => 'Bienvenue',
    'backgroundImage' => asset('assets') . "/img/b2.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="col-md-12 ml-auto mr-auto">
          <div class="header bg-gradient-primary py-10 py-lg-2 pt-lg-12">
              <div class="container">
                  <div class="header-body text-center mb-7">
                      <div class="row justify-content-center">
                          <div class="col-lg-12 col-md-9">
                              <h3 class="text-white">{{ __('Bienvenue sur E-count, le gestionnaire financier par excellence.') }}</h3>
                              <span>
                                  <a href="{{ route('login') }}">{{ __("se connecter") }}</a>
                                  <span class="text-white">{{ __(' ou ') }}</span>
                                  <a href="{{ route('register') }}">{{ __("créer un compte") }}</a>
                              </span>
                              <p class="text-lead text-light mt-3 mb-0">
                                  @include('alerts.migrations_check')
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="col-md-4 ml-auto mr-auto">
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
@endpush
