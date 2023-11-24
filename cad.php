<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado do Processamento</title><link rel="stylesheet" href="cad.css">
</head>

<body>

    <head>
        <h1>
            Cadastro de clientes | Devs Pádaria
        </h1>
    </head>

    <main class="text">
        <?php
        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        $email = $_GET["email"];

        echo "<p>É  um praxer te conhecer, DEVS.Padaria agradece $nome $sobrenome! Entraremos em contato com você!</p> ";


        ?>

<button class="text-js">

<a href="javascript:history.go(-1)"> Voltar para página anterior</a>
</button>

    </main>

</body>

</html>