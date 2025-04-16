<?php
$automobili = [
    // $marka => $model
    // key     value//
    "audi" => "a4",
    "bmw" => "x1"
];

foreach ($automobili as $marka => $model)
{
    echo "Marka automobila je $marka, a model je $model";
}

$osobe =[

 "Nidza" => [
    "puno_ime" => "Nikola",
    "prezime" => "Pavlovic",// osoba je sve unutar key u kockastim zagradama 
    "godine" => 34
 ],

"Toma" => [
    "puno_ime" => "Tomislav",
    "prezime" => "Nikolic",
    "godine" => 29
 ],

];
echo $osobe ["Nidza"]["puno_ime"];
echo $osobe ["Nidza"]["prezime"];
echo "<br>"; // napravi novi red 
                    
foreach ($osobe as $ime => $osoba)
{    
    $godine=$osoba["godine"];
    echo $ime;
    echo $osoba["godine"];
    echo "osoba $ime ima $godine godina";
}

?>

