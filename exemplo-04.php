<?php

$frase = "A repretição é a mãe da retenção";

$palavra = "mãe";

// procura a posição da palavra/letra
$q = strpos($frase, $palavra);
// conta somente até à
$texto = substr($frase, 0, $q);

var_dump($q);
// conta a partir de 
$texto2 = substr($frase, $q + strlen($palavra), strlen(frase));


?>