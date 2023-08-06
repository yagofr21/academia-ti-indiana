<?php
function salario($salario){
    if ($salario <= 3000)
    {
        $salario = $salario*1.5;
    } else{
        $salario = $salario*1.3;
    }
    return $salario;
}
echo salario(4000);