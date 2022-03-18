@extends('layouts.app')

@section('content')
    <h1>Bolsa</h1>
    <h2>Cartera de valores</h2>
    <table class="table" id="table">
      <thead>
        <tr>
          <th data-field="ope_id" scope="col">#</th>
          <th data-field="ope_sto_id" scope="col">Ticker</th>
          <th data-field="sto_name" scope="col">Empresa</th>
          <th data-field="ope_type" scope="col">Operación</th>
          <th data-field="ope_price" scope="col">Precio</th>
          <th data-field="ope_titles" scope="col">Títulos</th>
          <th data-field="ope_commission" scope="col">Comisión</th>
          <th scope="col">Total</th>
        </tr>
      </thead>
    </table>
    <script>
    $( document ).ready(function() {
      $('#table').bootstrapTable({
      data: {!! App\Http\Controllers\OperationController::getOpenBuys() !!}
      });
    });
    </script>
    <h3>Nueva Operación</h3>
      @if (session('success'))
      <div class="alert alert-success">
          {{ session('success') }}
      </div>
      @endif
    
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach  
          </ul>
      </div>
      @endif
      <form method="post" action="{{ route('newOperation-form-submit') }}">
        @csrf
        @php ($stocks = App\Http\Controllers\StockController::getAllStocks())
        <div class="form-group">
            <label for="valor">Valor</label>
            <select name="valor" class="form-select">
              <option selected disabled value="">Selecciona el valor</option>
              @foreach($stocks as $stock)
                  <option value="{{$stock->sto_id}}">{{ $stock->sto_name }}</option>
              @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <div class="input-group mb-3">
            <span class="input-group-text">€</span>
            <input name="precio" type="text" class="form-control" placeholder="Precio de la acción">
          </div>
        </div>
        
        <div class="form-group">
            <label for="titulos">Títulos</label>
            <input type="text" class="form-control" name="titulos" id="titulos" placeholder="Número de títulos">
        </div>
        
        <div class="form-group">
            <label for="comision">Comisión</label>
            <div class="input-group mb-3">
            <span class="input-group-text">€</span>
            <input name="comision" type="text" class="form-control" placeholder="Comisiones y corretajes">
          </div>
        </div>
        
        <div class="form-group">
            <label for="tipo">Tipo</label>
            <select name="tipo" class="form-select">
              <option value="" selected disabled>Selecciona el valor</option>
              <option value="BUY">Compra</option>
              <option value="SELL">Venta</option>
            </select>
        </div>
        
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Añadir</button>
          </div>
          
      </form>
    <h2>Histórico</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
@endsection

