@extends('layouts.app', [
    'class' => 'sidebar-mini ',
    'namePage' => 'User Profile',
    'activePage' => 'profile',
    'activeNav' => '',
])

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row justify-content-md-center">
      <div class="col-md-5">
        <div class="card">
          <div class="card-header">
            <h5 class="title">{{__(" Insérer une dépense")}}</h5>
          </div>
          @if (session('create'))
              <div class="alert alert-success">
                  {{ session('create') }}
              </div>
          @endif
          <div class="card-body">
            <form method="post" action="{{ route('costs.insert') }}" autocomplete="off"
            enctype="multipart/form-data">
              @csrf
              @method('post')
              @include('alerts.success')
              <div class="row">
              </div>
              <!-- Date -->
                <div class="row">
                    <div class="col-md-11 pr-1">
                        <div class="form-group">
                            <label>{{__(" Date")}}</label>
                                <input type="date" name="date" class="form-control" value='{{date("Y-m-d")}}'>
                                @include('alerts.feedback', ['field' => 'date'])
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div class="row">
                  <div class="col-md-11 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__(" Description")}}</label>
                      <input type="text" name="description" class="form-control">
                      @include('alerts.feedback', ['field' => 'description'])
                    </div>
                  </div>
                </div>

                <!-- Catégorie -->
                <div class="row">
                  <div class="col-md-11 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__("Catégories")}}</label>
                      <select name="categories" class="form-control">
                        @foreach($categories as $cat)
                          <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                      </select>
                      @include('alerts.feedback', ['field' => 'categories'])
                    </div>
                  </div>
                </div>

                <!-- Prix -->
                <div class="row">
                  <div class="col-md-11 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__(" Prix")}}</label>
                      <input type="number"step="0.05" name="price" class="form-control">
                      @include('alerts.feedback', ['field' => 'price'])
                    </div>
                  </div>
                </div>

                <!-- Moyen de payement -->
                <div class="row">
                  <div class="col-md-11 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__(" Moyen de payement")}}</label>
                      <select name="waysOfPayment" class="form-control">
                        @foreach($waysOfPayment as $payment)
                          <option value="{{ $payment->id }}">{{ $payment->name }}</option>
                        @endforeach
                      </select>                      
                      @include('alerts.feedback', ['field' => 'waysOfPayment'])
                    </div>
                  </div>
                </div>

                <!-- Status -->
                <div class="row">
                  <div class="col-md-11 pr-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__(" Statut")}}</label>
                      <select name="status" class="form-control">
                       @foreach($status as $stat)
                          <option value="{{ $stat->id }}">{{ $stat->name }}</option>
                        @endforeach
                      </select>
                      @include('alerts.feedback', ['field' => 'status'])
                    </div>
                  </div>
                </div>

                <!-- Users -->
                <div class="row">
                  <div class="col-md-11 pr-1">
                    <div class="form-group">
                      <input type="hidden" name="users" class="form-control" value="{{ old('id', auth()->user()->_id) }}">
                      @include('alerts.feedback', ['field' => 'users'])
                    </div>
                  </div>
                </div>

              <div class="card-footer ">
                <button type="submit" class="btn btn-primary btn-round">{{__('Save')}}</button>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
@endsection