<?php

$idadeCrianca=12;
$idadeMaior=18;
$idadeMelhor=65;
$qualASuaIdade=30;
while($idadeCrianca<$qualASuaIdade)
{
if($qualASuaIdade < $idadeCrianca)
{
	echo "Criança cresceu";
}
else{
	$qualASuaIdade--;
	sleep(1);
	echo $qualASuaIdade;
	echo "<br>";

}
}

?>