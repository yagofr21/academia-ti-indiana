<?php
function imc($peso, $altura)
{
    $resultado = $peso / ($altura**2);
    if ($resultado < 18.5)
    {
        return "Magreza!";
    } 
    else if($resultado >= 18.5 && $resultado <= 24.9)
    {
        return "Normal!";
    }
    else if ($resultado > 24.90 && $resultado <= 30)
    {
        return "Sobrepeso";
    }
    else{
        return "Obesidade";
    }
}
echo imc(82,1.82);