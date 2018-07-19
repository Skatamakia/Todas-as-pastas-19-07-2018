<?php
$nome= "Glaucio";
$nome2= "Frederico";
$completo=$nome."  ".$nome2;
function teste(){
	global $nome;
	echo $nome;	
}

function teste2()
{

	global $completo;
	echo $completo." agr no teste 2";

}
teste();
echo "<br/>";
teste2();
?>