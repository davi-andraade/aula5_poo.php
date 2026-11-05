<?php

require_once 'Bicicleta.php';

$nomeCliente = $_POST['nome'];
$tipoBicicleta = $_POST['tipo'];
$horasLocacao = $_POST['horas'];

$locacao = new LocacaoBicicleta($nomeCliente, $tipoBicicleta, $horasLocacao);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Locação de Bicicletas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Informações da Locação</h1>
    </header>

    <main class="resultado">
        <table>
            <thead>
                <tr>
                    <th>Informação</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nome do Cliente</td>    
                    <td><?= $locacao->getNomeCliente() ?></td>
                </tr>
                <tr>
                    <td>Tipo da Bicicleta</td>
                    <td><?= $locacao->getTipoBicicleta() ?></td>
                </tr>
                <tr>
                    <td>Horas de Locação</td>
                    <td><?= $locacao->getHorasLocacao() ?>h</td>
                </tr>
                <tr>
                    <td>Valor Bruto</td>
                    <td>R$ <?= number_format($locacao->calcularValorBruto(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Desconto</td>
                    <td>R$ <?= number_format($locacao->calcularDesconto(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Valor Total</td>
                    <td>R$ <?= number_format($locacao->calcularTotal(), 2, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
        
        <br>

        <a href="index.html">Voltar para o cadastro</a>
    </main>
</body>
</html>