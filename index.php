<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="index.css">

    <title>Acadêmia</title>
</head>
<body class="text-center">
    <form action="cadastroPessoa.php" method="post" class="form-signin">
    <img class="mb-4" src="got.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
           <label class="sr-only">User:</label>
            <input name="cpf" type="text" autofocus required placeholder="Insira o seu nome de usuário" class="form-control" autocomplete="off">
            <label class="sr-only">Senha</label>
            <input name="senha" type="password" required placeholder="Digite sua senha aqui!" class="form-control">
        <button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; nome da empresa</p>
    </form>

     
</body>
</html>