<?php
$anoNascimento = 1990;
$nome1 = "Joao";
$sobrenome="Paulo";
$nometodo=$nome1." ".$sobrenome;
echo $nometodo;
echo $anoNascimento;
echo "<br/>";
unset($anoNascimento);
if (isset($anoNascimento)){
	echo "deu ruim";

}
echo  "deu bom";
?>
