<?php

$nome = "joão rangel"; 
// Como deixar em uppercase a string
$nome = strtoupper($nome);

echo $nome;
// Como deixar em lowercase a string
$nome = strtolower($nome);

echo $nome;
// Deixa a letra da primeira palavra em uppercase
echo ucwords($nome);

// Deixar só a primeira letra da primeira palavra em uppercase
echo ucfirst($nome);

?>