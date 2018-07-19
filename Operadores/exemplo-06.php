<?php
$a= NULL; //Sem valor
$b= NULL; //Sem valor
$c=56;
echo $a ?? $b ?? $c; //Mostra somente o PRIMEIRO valor válido existentes. Se "A" existir mostre "A" e ignore o restante. Se Se "B" existir mostre "B" e ignore o restante.Se "C" existir mostre "C" e ignore o restante.


?>