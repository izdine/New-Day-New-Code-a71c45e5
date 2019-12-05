<?php
  $invoer = Intval($argv[1]);
  $conarray = array("50","20","10","5","2","1");
  foreach ($conarray as $value) {
    $Geld = floor($invoer / $value);
      if ($Geld >= 1) {
    $invoer = $invoer - ($value * $Geld);
     echo $Geld . " X €" . $value . " euro" . PHP_EOL;
   }
}
