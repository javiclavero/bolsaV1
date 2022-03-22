<?php

namespace App\Http\Controllers;
use App\Http\Requests\OperationRequest;
use App\Models\tblStocks;

use Illuminate\Http\Request;

class StockController extends Controller
{
    public function getAllStocks(){
      
      $stock = tblStocks::orderBy('sto_name', 'ASC')->get();;
      return $stock;
      
    }
    
    public function getStockIdByTicker($sto_ticker){
      
      $stock = tblStocks::where('sto_ticker', $sto_ticker)->value("sto_id");;
      return $stock;
      
    }
}

