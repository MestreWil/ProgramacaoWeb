<?php
$idade = 20;
$genero = "masculino";

if ($idade >= 18 and $genero == "feminino"){
    echo "<h1>Acesso permitido</h1>";
}else{
    echo "<h1>Acesso negado</h1>";
}

?>