<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar contato</title>
</head>
<body>
    <form action="#" method="post">
        @csrf
        <input type="text" name="nome" placeholde="Seu nome">
        <input type="text" name="contato" placeholde="Seu telefone">
        <input type="email" name="email" placeholde="Seu Email">
        <input type="submit" name="cadastrar" value="Cadastrar">
    </form>
</body>
</html>