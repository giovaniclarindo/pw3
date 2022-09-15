<?php

$n = $_POST["valor"];

$n1 = $n * 0.08;
$n2 = $n - $n1;

echo "O desconto de 8% é: ", number_format($n1,2);
echo "<br> E o salário liquido é de: ", number_format($n2,2);