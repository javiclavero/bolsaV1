<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tblCotizaciones;

class CotizacionController extends Controller
{

  public function getLastCotizationDateByStockId($cot_sto_id){
    
    $stock = tblCotizaciones::where('cot_sto_id', $cot_sto_id)->max("cot_date");;
    return $stock;
    
  }
  
}

