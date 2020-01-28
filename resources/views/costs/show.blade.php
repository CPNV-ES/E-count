@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Gérer les dépenses',
'activePage' => 'costs',
'activeNav' => '',
])

@section('content')
<div class="panel-header">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Liste des dépenses payé</h4>
        </div>
        @if (session('paye'))
        <div class="alert alert-primary">
          {{session('paye')}}
        </div>
        @endif
        @if (session('a_payer'))
        <div class="alert alert-primary">
          {{session('a_payer')}}
        </div>
        @endif
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>Date</th>
                <th>Categories</th>
                <th>Montant</th>
                <th>Moyen de paiement</th>
                <th>Status</th>
                <th>Options</th>
              </thead>
              <tbody>
                @foreach($costsArray ?? '' as $cost)
                @if($cost['status'] == 'Payé')
                    <tr>
                      <td>{{$cost['date'] ?? '' }}</td>
                      <td>{{$cost['category'] ?? ''}}</td>
                      <td>{{$cost['price'] ?? ''}}.-</td>
                      <td>{{$cost['waysOfPayment'] ?? ''}}</td>
                      <td>
                        {{$cost['status'] ?? ''}}
                        <a href="/updatetopay/{{ $cost['id']}}">
                          <button type="button" class="btn btn-outline-success btn-sm">
                            <i class="now-ui-icons ui-1_check"></i>
                          </button>
                        </a>
                      </td>
                     
                      <td>Edit</td>
                    </tr>
                    @endif
                    @endforeach
              </tbody>
            </table>
            <h4 class="card-title">Liste des dépenses à payer</h4>
            <table class="table">
              <thead class=" text-primary">
                <th>Date</th>
                <th>Categories</th>
                <th>Montant</th>
                <th>Moyen de paiement</th>
                <th>Status</th>
                <th>Options</th>
              </thead>
              <tbody>
                @foreach($costsArray ?? '' as $cost)
                @if($cost['status'] == 'À payer')
                    <tr>
                      <td>{{$cost['date'] ?? '' }}</td>
                      <td>{{$cost['category'] ?? ''}}</td>
                      <td>{{$cost['price'] ?? ''}}.-</td>
                      <td>{{$cost['waysOfPayment'] ?? ''}}</td>
                      <td>
                        {{$cost['status'] ?? ''}} 
                      <a href="/updatepay/{{ $cost['id']}}">
                        <button type="button" class="btn btn-outline-danger btn-sm">                          
                          <i class="now-ui-icons ui-1_simple-remove"></i>
                        </button>
                      </a>
                      </td>
                     
                      <td>Edit</td>
                    </tr>
                    @endif
                    @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection