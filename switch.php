<?php
$aluno = "William";
switch ($aluno) {
    case "Sofia":
        echo "Fazor passar na Secretária.";
        break;
    case "Robert":
        echo "Favor verificar faltas deste aluno.";
        break;
    case "William":
        echo "Você foi contratado! Seu salário será de R$15.000,00.";
        break;
    }
echo "<hr>";
$notaFinal = 4;
$resultado = $notaFinal >= 7 ? "Aprovado" : "Reprovado";
echo $resultado . "<hr>";

$funcionarios = array([
    "funcionario" => "Paulo",
    "acesso" => "C"
], [
    "funcionario" => "Vitor",
    "acesso" => "A"
], [
    "funcionario" => "Fernando",
    "acesso" => "B"
], [
    "funcionario" => "William",
    "acesso" => "C"
]);
foreach($funcionarios as $funcionario) {
    if ($funcionario["acesso"] == "A" or $funcionario["acesso"] == "B") {
        echo "O funcionario " . $funcionario['funcionario'] . " tem acesso a esse sistema. <br>";
    } else {
        echo "O funcionario " . $funcionario['funcionario'] . " NÃO TEM acesso a esse sistema. <br>";
    };
};
?>