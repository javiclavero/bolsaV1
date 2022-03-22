@extends('layouts.app')
@section('content')
    <h1>Cotizaciones</h1>
    <h2>Valores</h2>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <table class="table" id="table">
      <thead>
        <tr>
          <th data-field="sto_id" scope="col">#</th>
          <th data-field="sto_ticker" scope="col">Ticker</th>
          <th data-field="sto_name" scope="col">Empresa</th>
          <th scope="col">Última cotización</th>
          <th data-formatter="tableActions" scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>
          <td></td>
        </tr>
    </table>
    <script>
    $( document ).ready(function() {
      $('#table').bootstrapTable({
      data: {!! App\Http\Controllers\StockController::getAllStocks() !!},
      columns: [{},{},{},{},{
        
        formatter : function(value,row,index) {
                    //return '<input name="elementname"  value="'+value+'"/>';
                    ret = "<a type='button' class='btn btn-primary' href='/cotizaciones/import/" + row.sto_ticker + "')'>Importar</a>";
                    return ret;
                  }
      }]
      });
      });
      function tableActions() {
        ret = "<a type='button' class='btn btn-primary' href='{{ url('/cotizaciones/import/REP.MC')}} '>Importar</a>";
         return ret;
      };
      function handleImport() {
        alert("OK");
      };
    </script>
    <h1>Datos de la Empresa</h1>
    {{-- App\Http\Controllers\GrabberController::grabDataYahoo(1,2,3,4) --}}
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the Sidebar</p>
@endsection
