<?php

$producto1='Arroz';
$producto2='Papas';
$producto3='Huevos';
$producto4='Frijoles';
$producto5='Pastas';
$producto6='Leche';
$producto7='Sal';
$producto8='Azucar';
$producto9='Cerveza';
$producto10='Carne';

$Precio1=10000;
$Precio2=15000;
$Precio3=12000;
$Precio4=4000;
$Precio5=6000;
$Precio6=6000;
$Precio7=800;
$Precio8=2000;
$Precio9=49000;
$Precio10=25000;

$total=$Precio1+$Precio2+$Precio3+$Precio4+$Precio5+$Precio6+$Precio7+$Precio8+$Precio9+$Precio10;

if($total<=80000){
    echo('Gracias por su compra');

}else{
echo('No le alcanza');
}
?>