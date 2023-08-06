<?php
$sal1 = 5000;
$sal2 = 2500;
$anos = 0;
while ($sal1 > $sal2){
    echo "Seu salario no $anos º ano, é de R$ $sal1,00 e de seu amigo é de R$ $sal2,00.<br>";
    $sal1 = $sal1*1.10;
    $sal2 = $sal2*1.20;
    $anos++;
}
echo "Em $anos anos o salario de meu amigo será maior que o meu!";
