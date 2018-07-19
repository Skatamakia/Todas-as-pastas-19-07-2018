<?php

include "exemplo-01.php";//Poderia ser incluido também com include_once ou require_once para evitar erros e chamar a função somente uma vez.
$resultado = somar(10,25);
echo $resultado;
//DIFERENÇA ENTRE require e include: 
//require: Ovriga que o arquivo exista e esteja funcionando corretamente. Caso contrário gera erro fatal que para o código.;
//Include: Possui mais recursos e tenta funcionar mesmo que o arquivo n exista e esteja com erro. Da acesso a mais pastas e include dinâmico. 
?>