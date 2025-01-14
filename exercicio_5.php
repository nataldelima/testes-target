<?php

function inverterString($texto)
{
    $tamanho = strlen($texto);
    $textoInvertido = '';

    // Percorre a string do último caractere até o primeiro
    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $textoInvertido .= $texto[$i];
    }

    return $textoInvertido;
}

// Exemplo com string definida no código
$texto = "Ola mundo";
echo "Texto original: " . $texto . "<br>";
echo "Texto invertido: " . inverterString($texto) . "<br><br>";

$texto = "O texto sera invertido";
echo "Texto original: " . $texto . "<br>";
echo "Texto invertido: " . inverterString($texto) . "<br><br>";

$entrada = trim(fgets(STDIN)); // Lê a entrada do usuário
echo "Texto original: " . $entrada . "\n";
echo "Texto invertido: " . inverterString($entrada) . "\n";