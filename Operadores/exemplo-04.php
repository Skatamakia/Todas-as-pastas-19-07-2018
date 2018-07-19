<?php
echo "A = 30 e B = 55<br>";
$a=30.0;
$b=55;
var_dump($a>$b);
echo "A > B?";
echo "<br>";
var_dump($a<$b);
echo "A < B?";
echo "<br>";
var_dump($a==$b); // Apenas compração de valor e não de tipo de variável. Para comaparar o tipo de variável	tem que se colocar 3 iguais "===".
//=== Igualdade de identidade;
// == Igualdade de valor;
echo "A = B?<br>";
var_dump($a!==$b);//!= Verificar se há diferença entre os valores. Para verificar se o tipo de dado, assim como igualdade de identidade ===, são diferentes, basta digitar  !==.
echo "A é diferente de B?";

echo "<br>";


?>