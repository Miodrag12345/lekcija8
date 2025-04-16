<?php

$automobili = [
    "Zastava" => [
        "model" => "Yugo 55",
        "godiste" => 1995
    ],
    "Renault" => [
        "model" => "Megane RS",
        "godiste" => 2014
    ],
    "Toyota" => [
        "model" => "Rav4",
        "godiste" => 2021
    ],
];

$trenutnaGodina = date("Y");

foreach ($automobili as $marka => $auto) {
    $godiste=$auto["godiste"];
    $starost= $trenutnaGodina -$godiste;
   $status= "";

    if ($starost<5 ) {
        $status="nov auto";

    } else if (
        $starost >= 5 && $starost<=10){
          $status="noviji auto";
        }
    else if   ($starost >= 10 && $starost<=20){
        $status= "stariji auto ";
      } 

     else  {
        $status ="ovo je old timer";
     }
     
     echo $auto["model"]. " $status" ;

    

}

?>