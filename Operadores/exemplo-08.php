<?php

$resultado = (10+3)/2 > 5 && 10+5<3; // && Lógica AND
echo "Comparação entre as expressões com AND";
echo "<br>";

var_dump($resultado); // Somente mostrará true na comparação se e somente se as duas condições forem verdadeiras;
echo "<br>";


$resultado = (10+3)/2 > 5 || 10+5<3; // && Lógica OR. Mostrará true na comparação se umas das condições forem verdadeiras;
echo "Comparação entre as expressões com OR";
echo "<br>";
var_dump($resultado);













?>