<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="cabecalho">
        <h1>Cadastro de Produtos</h1>
    </header>

    <div class="formulario">
        <form action="saida.php" method="POST">
            <!-- CAMPOS PARA PREENCHER O OBJETO PRODUTO -->
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" placeholder="Digite o nome do produto..." required>

            <!-- CAMPO PREÇO -->
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" placeholder="Digite o preço do produto..." required>

            <!-- CAMPO QUANTIDADE -->
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" placeholder="Digite a quantidade..." required>

            <!-- BOTÃO DE ENVIO -->
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>