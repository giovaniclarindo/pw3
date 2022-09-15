<?php

    $n1 = $_POST["nota1"];
    $n2 = $_POST["nota2"];
    $n3 = $_POST["nota3"];

    $ma = ($n1 + $n2 + $n3) / 3;

    echo "A média aritmética é ", number_format($ma,1);