<?php
    for($i = 1; $i < 10; $i++){
        echo "teste $i <br>";
    };
    $semana = ["segunda", "terça", "quarta", "quinta", "sexta", "sabado", "domingo"];
    for($i = 0; $i < count($semana); $i++){
        echo "<h3>" . $semana[$i] . "</h3>";
    }
    $a = 1;
    while ($a < 6) {
        echo "$a <br>";
        $a++;
    }
    foreach ($semana as $dia){
        echo "<p>$dia</p>";
    }
?>