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
          <h4 class="card-title">Liste des dépenses</h4>
        </div>
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
                    <tr>
                      <td>{{$costsArray['date'] ?? '' }}</td>
                      <td>{{$costsArray['categories'] ?? ''}}</td>
                      <td>{{$costsArray['price'] ?? ''}}</td>
                      <td>{{$costsArray['waysOfPayment'] ?? ''}}</td>
                      <td>{{$costsArray['status'] ?? ''}}</td>
                      <td>Edit</td>
                    </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection