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
}

