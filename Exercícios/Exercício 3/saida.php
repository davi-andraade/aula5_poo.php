<?php

require_once 'Hotel.php';

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$diarias = $_POST['diarias'];
$cafe = $_POST['cafe'];

$reserva = new ReservaHotel($nome, $tipo, $diarias, $cafe);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Sistema de Reservas de Hotel</h1>
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
                    <td>Nome do Hóspede</td>    
                    <td><?= $reserva->getNome() ?></td>
                </tr>
                <tr>
                    <td>Tipo de Quarto</td>
                    <td><?= $reserva->getTipo() ?></td>
                </tr>
                <tr>
                    <td>Quantidade de Diárias</td>
                    <td><?= $reserva->getDiarias() ?></td>
                </tr>
                <tr>
                    <td>Café da Manhã</td>
                    <td><?= $reserva->getCafe() ?></td>
                </tr>

                <tr>
                    <td>Desconto Aplicado</td>
                    <td><?= $reserva->calcularDesconto() * 100 ?>%</td>
                </tr>

                <tr>
                    <td>Valor Total</td>
                    <td>R$ <?= $reserva->calcularTotal() ?></td>
                </tr>
            </tbody>
        </table>
        
        <br>

        <a href="index.html">Voltar para o cadastro</a>
    </main>
</body>
</html>