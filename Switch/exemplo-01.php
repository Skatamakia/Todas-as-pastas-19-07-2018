<?php
$diaDaSemana = date("w"); //"w" - Retorna o dia da semana de forma numérica, sendo 1 = segunda e 7 = domingo.

echo $diaDaSemana;

echo "<br>";

switch ($diaDaSemana){
case 0;
echo "Domingo";
break;
case 1;
echo "Segunda";
break;
case 2;
echo "Terça";
break;
case 3;
echo "Quarta";
break;



}
//$diaDaSemana = date("d/m/y");//"d/m/y" Retorna a data no formato padrão brasileiro.

//echo $diaDaSemana;


?>