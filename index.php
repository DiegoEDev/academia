<?php
	include "inc/conexao.php";
	if(isset($_POST['salva'])){
		if(isset($_POST["usuario"])) $usuario = $_POST["usuario"]; else $usuario = "";
		if(isset($_POST["senha"])) $senha = $_POST["senha"]; else $senha = "";
		
		
		$sql_user = "SELECT id FROM cliente WHERE usuario = '".$usuario."' AND senha = '".$senha."' AND tipoUsuario = 'true';";
		//echo $sql_user;
		$query = $PDO->prepare($sql_user);
		$query->execute();
		if($query->rowCount()>0){
			header('location: home.php');
		}else{
			echo "<script>alert('Nome de Usuario invalido ou senha invalido')</script>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Acadêmia</title>
</head>
<body class="text-center">
    <form action="" method="post" class="form-signin">
    <img class="mb-4" src="got.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
           <label class="sr-only">User:</label>
            <input name="usuario" type="text" autofocus required placeholder="Insira o seu nome de usuário" class="form-control" autocomplete="off">
            <label class="sr-only">Senha</label>
            <input name="senha" type="password" required placeholder="Digite sua senha aqui!" class="form-control">
			<input name="salva" value="salva" type="hidden">
		<button type="submit" class="btn btn-lg btn-primary btn-block">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; nome da empresa</p>
    </form>

     
</body>
</html>
