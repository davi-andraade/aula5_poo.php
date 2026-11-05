<?php

require_once 'Livro.php';

$nome = $_POST['nome'];
$titulo = $_POST['titulo'];
$atraso = $_POST['atraso'];

$livro = new EmprestimoLivro($nome, $titulo, $atraso);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Informações do Empréstimo</h1>
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
                    <td>Nome do Usuário</td>    
                    <td><?= $livro->getUsuario() ?></td>
                </tr>
                <tr>
                    <td>Título do Livro</td>
                    <td><?= $livro->getTitulo() ?></td>
                </tr>
                <tr>
                    <td>Atraso (dias)</td>
                    <td><?= $livro->getAtraso() ?></td>
                </tr>
                <tr>
                    <td>Multa</td>
                    <td>R$ <?= number_format($livro->calcularMulta(), 2, ',', '.') ?></td>
                </tr>
                <tr>
                    <td>Situação</td>
                    <td><?= $livro->verificarSituacao() ?></td>
                </tr>
            </tbody>
        </table>
        
        <br>

        <a href="index.html">Voltar para o cadastro</a>
    </main>
</body>
</html>