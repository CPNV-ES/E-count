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
    @foreach(array_keys($arrayCosts) as $annee )
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Montant des dépenses payé pour l'année {{ $annee}}</h4>
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
                @foreach(array_keys($arrayCosts[$annee]) as $mois )
                  <th>{{$mois}}</th>
                @endforeach
              </thead>
            </tbody>
              <tr align="center">
                @foreach($arrayCosts[$annee] as $cost)
                  <td class="col-1">
                    {{ array_sum($cost).'.-' }}
                  </td>
                @endforeach
              <tr>
                
            </table>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection