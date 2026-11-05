<?php

require_once 'Vendedor.php';

$nomeVendedor = $_POST['nome'];
$salarioBase = $_POST['salario'];
$totalVendas = $_POST['vendas'];

$vendedor = new Vendedor($nomeVendedor, $salarioBase, $totalVendas);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Informações do Vendedor</h1>
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
                    <td>Nome do Vendedor</td>    
                    <td><?= $vendedor->getNomeVendedor() ?></td>
                </tr>
                <tr>
                    <td>Salário Base</td>
                    <td>R$ <?= number_format($vendedor->getSalario(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Total de Vendas (R$)</td>
                    <td>R$ <?= number_format($vendedor->getTotalVendas(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Comissão</td>
                    <td>R$ <?= number_format($vendedor->calcularComissao(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Bônus</td>
                    <td>R$ <?= number_format($vendedor->calcularBonus(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Salário Final</td>
                    <td>R$ <?= number_format($vendedor->calcularSalarioFinal(), 2, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>
        
        <br>

        <a href="index.html">Voltar para o cadastro</a>
    </main>
</body>
</html>