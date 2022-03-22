<?php

namespace App\Http\Controllers;
use App\Models\tblCotizaciones;
use Illuminate\Http\Request;

class GrabberController extends Controller
{
  public function grabDataYahoo()
    {
      $ticker = "REP.MC";
      $sto_id = StockController::getStockIdByTicker("REP.MC");
      $last_cot_date = CotizacionController::getLastCotizationDateByStockId($sto_id);
      if(is_null($last_cot_date)) {
        $last_cot_date= "1900-01-01";
      }
      $last_epoch_date = strtotime($last_cot_date);

      $date_from = -2208988799; //1900-01-01
    
      if($last_epoch_date>$date_from){
        $date_from = $last_epoch_date;
        $last_cot_date= "1900-01-01";
      }
      $date_to = time();

      $interval = "1d";
      $url = "https://query1.finance.yahoo.com/v7/finance/download/".$ticker."?period1=".$date_from."&period2=".$date_to."&interval=".$interval."&events=history&includeAdjustedClose=true";

      //$url = "C:\Users\javie.DESKTOP-1FHRTJH\Downloads\down1.csv";

      //Open our CSV file using the fopen function.
      $fh = fopen($url, "r");
      
      //Setup a PHP array to hold our CSV rows.
      $csvData = array();
      
      //Loop through the rows in our CSV file and add them to
      //the PHP array that we created above.
      while (($row = fgetcsv($fh, 0, ",")) !== FALSE) {
          $csvData[] = $row;
      }

      $i = 0;
      $j = 0;
      foreach ($csvData as $importData) {
        if($j>0) {

          if($last_cot_date<$importData[0] && $importData[4]!="null"){
          try{
          $cotizacion = new tblCotizaciones();
          $cotizacion->cot_sto_id = $sto_id;
          $cotizacion->cot_date = $importData[0];
          $cotizacion->cot_open = $importData[1];
          $cotizacion->cot_high = $importData[2];
          $cotizacion->cot_low = $importData[3];
          $cotizacion->cot_close = $importData[4];
          $cotizacion->cot_adj_close = $importData[5];
          $cotizacion->cot_volume = $importData[6];
          $cotizacion->cot_timestamp = now();
          $cotizacion->save();
          $i++;
        }  
          catch(Exception $e) {
            //ok
          }
        }
        }
        $j++;
      }

        return redirect()->route('cotizaciones')->with('success',$i . ' cotizaciones añadidas para ' . $ticker);

      
   }
}
