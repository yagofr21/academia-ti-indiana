
<?php
$numero1 = array(10,2,3,4,5,6,7);
$menor = min($numero1);
$posicao =array_keys($numero1, $menor);
echo "O menor valor é o: $menor<br>E está na posição: $posicao[0], no array";