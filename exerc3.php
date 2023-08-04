<?php

$preco = 320;
$novo_preco = $preco * 1.12;
$parcelas = $novo_preco /10;

echo "O valor de cada parcela é de: $parcelas";
echo "<br>";
echo "O valor total do produto é de: $novo_preco";

