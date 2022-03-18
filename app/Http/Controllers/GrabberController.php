<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrabberController extends Controller
{
  public function grabDataYahoo($ticker,$date_from,$date_to,$interval)
    {
      $ticker = "REP.MC";
      $date_from = 1647129600;
      $date_to = 1647627190;
      $interval = "1d";
      $url = "https://query1.finance.yahoo.com/v7/finance/download/".$ticker."?period1=".$date_from."&period2=".$date_to."&interval=".$interval."&events=history&includeAdjustedClose=true";


      //Open our CSV file using the fopen function.
      $fh = fopen($url, "r");
      
      //Setup a PHP array to hold our CSV rows.
      $csvData = array();
      
      //Loop through the rows in our CSV file and add them to
      //the PHP array that we created above.
      while (($row = fgetcsv($fh, 0, ",")) !== FALSE) {
          $csvData[] = $row;
      }
      
      //Finally, encode our array into a JSON string format so that we can print it out.
      echo json_encode($csvData);
      dd(json_encode($csvData));

      
   }
}
