<?php

require_once 'Estacionamento.php';

// POST DO FORMULÁRIO index.html
$placa = $_POST['placa'];
$tipoVeiculo = $_POST['veiculo'];
$horas = $_POST['horas'];

// VALIDAÇÃO DE DADOS
if(!$placa || !$tipoVeiculo || !$horas){
    exit('Dados incorretos!');
}

// OBJETO DA CLASSE ESTACIONAMENTO
$estacionamento = new Estacionamento($placa, $tipoVeiculo, $horas);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Informações Estacionamento</h1>
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
                    <td>Placa</td>
                    <td><?= $estacionamento->getPlaca() ?></td>
                </tr>

                <tr>
                    <td>Tipo de veículo</td>
                    <td> <?= $estacionamento->getTipoVeiculo() ?></td>
                </tr>

                <tr>
                    <td>Horas estacionadas</td>
                    <td><?= $estacionamento->getHoras() ?> h</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td>R$ <?= number_format($estacionamento->valorTotal(), 2, ',', '.') ?></td>
                </tr>
            </tbody>
        </table>

        <br>

        <a href="index.html">Voltar para o cadastro</a>
    </main>
</body>
</html>