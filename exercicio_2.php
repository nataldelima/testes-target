<?php


// Criar uma função para testar sequência de Fibonacci
function fibonacci($numero)
{
    $fibonacci = [0, 1];
    while ($fibonacci[count($fibonacci) - 1] < $numero) {
        $fibonacci[] = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
    }
    if (in_array($numero, $fibonacci)) {
        return "O número $numero pertence à sequência de Fibonacci.<br>";
    } else {
        return "O número $numero não pertence à sequência de Fibonacci. <br>";
    }
}

// Imprimir e validar se o número pertence à sequência de Fibonacci

echo fibonacci(5);
echo fibonacci(9);
echo fibonacci(13);
echo fibonacci(33);
echo fibonacci(45);
