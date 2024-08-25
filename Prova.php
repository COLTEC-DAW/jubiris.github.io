<?php
// Definindo os dados das perguntas
$enunciados = [
    "Qual é a capital da França?",
    "Qual é o maior planeta do Sistema Solar?",
    "Quem escreveu 'Dom Casmurro'?"
];

$alternativas = [
    ["Paris", "Londres", "Berlim", "Madri"],
    ["Terra", "Júpiter", "Saturno", "Marte"],
    ["Machado de Assis", "José de Alencar", "Carlos Drummond de Andrade", "Clarice Lispector"]
];

$respostasCorretas = [0, 1, 0]; // Índices das alternativas corretas

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova de Conceito</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .question { margin-bottom: 20px; }
        .alternatives { margin-left: 20px; }
    </style>
</head>
<body>
    <h1>Prova de Conceito</h1>

    <?php
    // Iterando sobre as perguntas
    for ($i = 0; $i < count($enunciados); $i++) {
        echo "<div class='question'>";
        echo "<p><strong>Pergunta " . ($i + 1) . ":</strong> " . $enunciados[$i] . "</p>";

        echo "<div class='alternatives'>";
        foreach ($alternativas[$i] as $j => $alternativa) {
            echo "<p><input type='radio' name='question" . $i . "' value='" . $j . "'> " . $alternativa . "</p>";
        }
        echo "</div>";

        echo "</div>";
    }
    ?>
</body>
</html>
