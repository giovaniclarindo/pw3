<?php

    $n1 = $_POST["numero1"];
    $n2 = $_POST["numero2"];

    $ma = ($n1 + $n2) / 2;
    $md = ($n1 - $n2) / 2;

    echo "A média aritmética é $ma. <br>";
    echo "A metade da diferença é $md.";