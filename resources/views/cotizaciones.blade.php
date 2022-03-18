@extends('layouts.app')
@section('content')
    <h1>Cotizaciones</h1>
    <h2>Valores</h2>
    <table class="table" id="table">
      <thead>
        <tr>
          <th data-field="sto_id" scope="col">#</th>
          <th data-field="sto_ticker" scope="col">Ticker</th>
          <th data-field="sto_name" scope="col">Empresa</th>
          <th scope="col">&nbsp;</th>
        </tr>
      </thead>
    </table>
    <script>
    $( document ).ready(function() {
      $('#table').bootstrapTable({
      data: {!! App\Http\Controllers\StockController::getAllStocks() !!}
      });
    });
    </script>
    <h1>Datos de la Empresa</h1>
    {{App\Http\Controllers\GrabberController::grabDataYahoo(1,2,3,4) }}
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the Sidebar</p>
@endsection
