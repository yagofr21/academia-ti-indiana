<?php

$numMes = 8;
$meses = array( 
    1=> "Janeiro",
    2=> "Fevereiro", 
    3=> "Março", 
    4=> "Abril",
    5=> "Maio",
    6=> "Junho",
    7=> "Julho",
    8=> "Agosto",
    9=> "setembro",
    10=> "Outubro",
    11=> "Novembro",
    12=> "Dezembro" );

if ($numMes > 12 && $numMes < 0){
    echo "Mês inválido!";
} else {
    echo "O mês é: $meses[$numMes]";
}
