@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'Gérer dépense',
    'activePage' => 'editmanage',
    'activeNav' => '',
])

@section('content')
<div class="panel-header">
</div>
<div class="content">
    <div class="row">
        <div class="col-xl-12 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">{{ __('User Management') }}</h3>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('user.index') }}" class="btn btn-primary btn-round">{{ __('Créer une dépense') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    hello
                </div>
            </div>
        </div>
    </div>
</div>
@endsection