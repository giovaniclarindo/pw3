<?php

$sexo = $_POST ["sexo"];
$sb = $_POST ["salario"];

if ($sexo == "M") {
 
    $slm = $sb * 0.05;
    $slmt = $sb - $slm;
    echo "Seu desconto é de $slm, portanto seu salário liquido é de $slmt";

} else {

    $slf = $sb * 0.03;
    $slft = $sb - $slf;
    echo "Seu desconto é de $slf, portanto seu salário liquido é de $slft";

};