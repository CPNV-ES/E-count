@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Statistics',
'activePage' => 'home',
'activeNav' => '',
])

<style>
.vertical {
  display: inline-block;
  -webkit-transform: rotate(-90deg); /* Chrome, Safari, Opera */
  transform: rotate(-90deg);
}
.vertical {
  box-shadow: inset 0px 4px 6px #ccc;
}
.progress-bar {
  box-shadow: inset 0px 4px 6px rgba(100,100,100,0.6);
}
</style>

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
              <thead class="text-primary" align="center">
              <tr class="row w-100" style="font-size:10px">
                <th class="col-1">Janvier</th>
                <th class="col-1">Février</th>
                <th class="col-1">Mars</th>
                <th class="col-1">Avril</th>
                <th class="col-1">Mai</th>
                <th class="col-1">Juin</th>
                <th class="col-1">Juillet</th>
                <th class="col-1">Août</th>
                <th class="col-1">Septembre</th>
                <th class="col-1">Octobre</th>
                <th class="col-1">Novembre</th>
                <th class="col-1">Décembre</th>
                </tr>
              </thead>

            </tbody>
              <tr align="center" class="row">
                <td class="col-1">
                  
                  <div class="container mb-4 mt-4">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countJan/$max}}%;"></div>  
                    </div>
                  </div>

                  <div>{{$countJan}}.- </div>

                </td>                
                <td class="col-1">
                  <div class="container mb-4 mt-4">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countFev/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countFev}}.-</div>
                </td>                
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countMar/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countMar}}.-</div>
                </td>              
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countAvr/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countAvr}}.-</div>
                </td>              
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countMai/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countMai}}.-</div>
                </td>              
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countJui/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countJui}}.-</div>
                </td>           
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countJuil/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countJuil}}.-</div>
                </td>           
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countAou/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countAou}}.-</div>
                </td>         
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countSep/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countSep}}.-</div>
                </td> 
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countOct/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countOct}}.-</div>
                </td> 
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countNov/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countNov}}.-</div>
                </td>
                <td class="col-1">
                  <div class="container mb-4 mt-4 h-100">
                    <div class="progress vertical">
                      <div class="progress-bar progress-bar-danger" role="progressbar" style="width: {{100*$countDec/$max}}%;"></div>  
                    </div>
                  </div>
                  <div>{{$countDec}}.-</div>
                </td>
              <tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection