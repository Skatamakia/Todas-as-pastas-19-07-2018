<?php

$nome= "pedro márcio";
echo strtoupper($nome); //Este comando obriga o string $nome aparecer com letras maiusculas. OBS: PALAVRAS ACENTUADAS NÃO SÃO  CONVERTIDAS.
$nome2= "MÁRCIO";
echo "<br>";
echo strtolower($nome2);//Este comando obriga o string $nome aparecer com letras minusculas. OBS: PALAVRAS ACENTUADAS NÃO SÃO  CONVERTIDAS.
echo "<br>";
echo ucwords($nome);// converte todas as primeiras letras dos nomes presentes na string selecionada em maiuscula.
echo "<br>";
echo ucfirst($nome);// converte somente a primeira letra da primeira palavra da string selecionada como maiscula. Aplicação: Fazer um parágrafo.





?>