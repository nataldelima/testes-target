<?php

// Define o faturamento por estado
$faturamento = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53
];

// Calcula o valor total
$total = array_sum($faturamento);

// Calcula e exibe o percentual para cada estado
echo "Percentual de representação por estado:<br><br>";

foreach ($faturamento as $estado => $valor) {
    $percentual = ($valor / $total) * 100;
    $valorFormatado = number_format($valor, 2, ',', '.');
    $percentualFormatado = number_format($percentual, 2, ',', '.');

    echo "$estado :<br>";
    echo "Valor: R$ $valorFormatado <br>";
    echo "Percentual: $percentualFormatado% <br><br>";
}

// Exibe o valor total
$totalFormatado = number_format($total, 2, ',', '.');
echo "Valor Total: R$ $totalFormatado";
