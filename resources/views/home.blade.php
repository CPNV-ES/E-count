@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Statistics',
'activePage' => 'home',
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
          <h4 class="card-title">Montant des dépenses payé pour l'année 2020</h4>
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
            <tbody>
              <thead class=" text-primary" align="center">
                <th>Janvier</th>
                <th>Février</th>
                <th>Mars</th>
                <th>Avril</th>
                <th>Mai</th>
                <th>Juin</th>
                <th>Juillet</th>
                <th>Août</th>
                <th>Septembre</th>
                <th>Octobre</th>
                <th>Novembre</th>
                <th>Décembre</th>
              </thead>
            </tbody>
              <tr align="center">
                <td>{{$countJan}}.-</td>
                <td>{{$countFev}}.-</td>
                <td>{{$countMar}}.-</td>
                <td>{{$countAvr}}.-</td>
                <td>{{$countMai}}.-</td>
                <td>{{$countJui}}.-</td>
                <td>{{$countJuil}}.-</td>
                <td>{{$countAou}}.-</td>
                <td>{{$countSep}}.-</td>
                <td>{{$countOct}}.-</td>
                <td>{{$countNov}}.-</td>
                <td>{{$countDec}}.-</td>
              <tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection