@extends('layouts.app', [
    'namePage' => 'Créer un compte',
    'activePage' => 'Créer un compte',
    'backgroundImage' => asset('assets') . "/img/b3.jpg",
])

@section('content')
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-5 ml-auto">
          <div class="info-area info-horizontal mt-5">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-2_sound-wave"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('Gestion') }}</h5>
              <p class="description">
                {{ __("Cette application vous permet de gérer et de prévoir vos coûts.") }}
              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-primary">
              <i class="now-ui-icons media-1_button-pause"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('Visualisation') }}</h5>
              <p class="description">
                {{ __("Un tableau de bord vous sera mis à disposition afin de visualiser au mieux vos divers coûts") }}
              </p>
            </div>
          </div>
          <div class="info-area info-horizontal">
            <div class="icon icon-info">
              <i class="now-ui-icons users_single-02"></i>
            </div>
            <div class="description">
              <h5 class="info-title">{{ __('Développement') }}</h5>
              <p class="description">
                {{ __("E-count est en cours de développement, en cas de problème, contactez un administrateur") }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mr-auto">
          <div class="card card-signup text-center">
            <div class="card-header ">
              <h4 class="card-title">{{ __('Créer un compte') }}</h4>

                  <div class="logo-container">
                  <img src="{{ asset('assets/img/logoecountblacksmall.png') }}" alt="">
                  </div>
                <h5 class="card-description">  {{ __('E-Count') }}</h5>

            </div>
            <div class="card-body ">
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <!--Begin input name -->
                <div class="input-group {{ $errors->has('name') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </div>
                  </div>
                  <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Nom') }}" type="text" name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                    </span>
                  @endif
                </div>
                <!--Begin input email -->
                <div class="input-group {{ $errors->has('email') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons ui-1_email-85"></i>
                    </div>
                  </div>
                  <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required>
                 </div>
                 @if ($errors->has('email'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <!--Begin input user type-->

                <!--Begin input password -->
                <div class="input-group {{ $errors->has('password') ? ' has-danger' : '' }}">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i>
                    </div>
                  </div>
                  <input class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Mot de passe') }}" type="password" name="password" required>
                  @if ($errors->has('password'))
                    <span class="invalid-feedback" style="display: block;" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
                <!--Begin input confirm password -->
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="now-ui-icons objects_key-25"></i></i>
                    </div>
                  </div>
                  <input class="form-control" placeholder="{{ __('Confirmer le mot de passe') }}" type="password" name="password_confirmation" required>
                </div>
                <div class="card-footer ">
                  <button type="submit" class="btn btn-primary btn-round btn-lg">{{__('Créer mon compte')}}</button>
                </div>
              </form>
            </div>
          </div>
        </div>
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
