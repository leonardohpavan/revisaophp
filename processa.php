<?php
$nome = filter_input(INPUT_GET,"nome",FILTER_DEFAULT);
$curso = filter_input(INPUT_GET,"curso",FILTER_DEFAULT); 
$idade = filter_input(INPUT_GET,"idade",FILTER_DEFAULT,[
"options" => [
    "min_range" => 0,
    "max_range" => 120
    ]
]);

if (trim($nome) === "" || $nome === null ||
    trim($curso) === "" || $curso === null ||
    trim($idade) === false || $idade === null){
    header("Location: index.php");
    exit;
} 

$nomeSeguro = htmlspecialchars($nome,ENT_QUOTES, "UTF-8");
$cursoSeguro = htmlspecialchars($curso,ENT_QUOTES, "UTF-8");
$idadeSeguro = htmlspecialchars($idade,ENT_QUOTES, "UTF-8");


echo "Olá $nomeSeguro! ";
echo "<p><strong>Curso:</strong> $cursoSeguro";
echo "<p><strong>Idade:</strong> $idadeSeguro";
