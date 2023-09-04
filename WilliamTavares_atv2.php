<?php
$dados = [
    $aluno1 = [
        "nome" => "William",
        "nome_curso" => "Análise e Desenvolvimento de Sistemas",
        "nota" => 10.0        
    ],
    $aluno2 = [
        "nome" => "Vitor",
        "nome_curso" => "Sistemas para Internet",
        "nota" => 8.5        
    ],
    $aluno3 = [
        "nome" => "Thiago",
        "nome_curso" => "Análise e Desenvolvimento de Sistemas",
        "nota" => 9.3        
    ],
    $aluno4 = [
        "nome" => "Henry",
        "nome_curso" => "Análise e Desenvolvimento de Sistemas",
        "nota" => 7.0        
    ],
    $aluno5 = [
        "nome" => "Guilherme",
        "nome_curso" => "Ciência de Dados",
        "nota" => 10.0        
    ],
];

foreach($dados as $aluno){
    echo "O aluno " . $aluno["nome"] . " do curso " . $aluno["nome_curso"] . " tirou nota " . $aluno["nota"];
    echo "<hr>";
};
?>