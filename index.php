<?php 
include('classes/Panel.php');
//TODO: Should be validate this input? Why/Why not?
$panel1 = new Panel("Es van enamorar en un tren","Before Sunrise");
$panel2 = new Panel("Lorca","La casa de Bernarda Alba");

print_r($panel1);
print_r($panel2);

$panel1->show();
echo PHP_EOL;
$panel2->show();


?>