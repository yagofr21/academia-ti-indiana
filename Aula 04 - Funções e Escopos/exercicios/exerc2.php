<?php

function notas($n1, $n2)
    {
        if ($n1 > 7 && $n2 > 7 && $n1 + $n2 >= 19)
        {
            return "Aprovado!";
        } else{
            return "Reprovado!";
        }
    }
echo notas(8,8);