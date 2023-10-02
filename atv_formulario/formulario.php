<?php
$cursos = ['php', 'html', 'css', 'javascript', 'jquery', 'python', 'sql', 'bootstrap', 'java', 'c++', 'fluter'];

$resposta = strtolower($_POST['resposta']); 
if (isset($resposta) && !empty(trim(' ', $resposta))) {
  if (in_array($resposta, $cursos)){
    echo "Este curso ".strtolower($resposta)." existe, aproveite e faça sua matrícula :)";
  } else {
    echo "O curso ".strtolower($resposta)." ainda não existe, sinto muito :(";
  }
} else {
  echo "Volte e digite um valor válido!";
};
?>