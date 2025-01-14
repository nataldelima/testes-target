<?php

// Lê o arquivo JSON
$jsonData = file_get_contents('dados.json');
$faturamento = json_decode($jsonData, true);

// Inicializa variáveis
$menorValor = PHP_FLOAT_MAX;
$maiorValor = 0;
$somaFaturamento = 0;
$diasComFaturamento = 0;
$diasAcimaMedia = 0;

// Calcula menor e maior valor, e soma total (ignorando dias sem faturamento)
foreach ($faturamento as $dia) {
    if ($dia['valor'] > 0) {  // Ignora dias sem faturamento
        // Atualiza menor valor
        if ($dia['valor'] < $menorValor) {
            $menorValor = $dia['valor'];
        }

        // Atualiza maior valor
        if ($dia['valor'] > $maiorValor) {
            $maiorValor = $dia['valor'];
        }

        // Soma para cálculo da média
        $somaFaturamento += $dia['valor'];
        $diasComFaturamento++;
    }
}

// Calcula a média mensal (apenas com dias que tiveram faturamento)
$mediaFaturamento = $somaFaturamento / $diasComFaturamento;

// Conta dias acima da média
foreach ($faturamento as $dia) {
    if ($dia['valor'] > $mediaFaturamento) {
        $diasAcimaMedia++;
    }
}

// Formata os valores para 2 casas decimais
$menorValor = number_format($menorValor, 2, ',', '.');
$maiorValor = number_format($maiorValor, 2, ',', '.');
$mediaFaturamento = number_format($mediaFaturamento, 2, ',', '.');

// Exibe os resultados
echo "<br>Menor valor de faturamento: R$ {$menorValor}";
echo "<br>Maior valor de faturamento: R$ {$maiorValor}";
echo "<br>Número de dias acima da média: {$diasAcimaMedia}";
echo "<br>Média mensal de faturamento: R$ {$mediaFaturamento}";
echo "<br>Total de dias com faturamento: {$diasComFaturamento}";
