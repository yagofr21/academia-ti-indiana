<?php

function soma($n1, $n2)
    {
         $soma = $n1 + $n2;
        if ($soma < 0){
            echo 0;
        }   else{
            return $n1 + $n2;
        }
    }
echo soma(1,-2);
