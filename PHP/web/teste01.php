<?php

$variavel = array (1,2,3,4,5);

print_r ($variavel);


echo '<br>foreach: ';
foreach ($variavel as $v){
    echo $v;
}

echo '<br>';
$variavel2 = array ("A"=>"ABACAXI", "B"=>"BOLA", "C"=>"CACHORRO");
print_r ($variavel2);

echo '<br><br>';

echo $variavel2["B"];