<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OperationRequest;
use App\Models\tblOperations;

class OperationController extends Controller
{
  public function new(OperationRequest $request) {
      
      $operation = new tblOperations();
      $operation->ope_sto_id = $request->input('valor');
      $operation->ope_price = $request->input('precio');
      $operation->ope_titles = $request->input('titulos');
      $operation->ope_commission = $request->input('comision');
      $operation->ope_type = $request->input('tipo');
      $operation->ope_parent = 0;
      $operation->ope_updateddate = now();
      $operation->ope_timestamp = now();
      $operation->save();
      
      return redirect()->route('bolsa')->with('success','Operación añadida corractamente');
    }

    public function getOpenBuys() {
      
      $operation = tblOperations::where('ope_type','BUY')
                      ->join('tblStocks', 'sto_id', '=', 'ope_sto_id')
                      ->get();

      return $operation;
    }
}

