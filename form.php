<?php
    include './user.php';
    $obj = new user();

    if(isset($_POST['btn-cadastrar'])){

    $user = $_POST['usuario'];
    $senha = $_POST['senha'];

    if($obj->validate($user, $senha)) {
        
    }else{
        $obj->insert_user($user, $senha);
    }
    } 
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
    <main class="login">

        <div class="left-login">

            <img src="img/form.svg" class="left-img-login" alt="">

        </div>

        <div class="right-login">

            <div class="card-login">

            <h1>Cadastre-se</h1>

               <form action="form.php" method="POST">

               <label for="usuario" class="label-textfield">Usuário</label>
               <div class="textfield">
                    <input type="text" name="usuario" placeholder="Usuário" required>
                </div>

                <label for="senha" class="label-textfield">Senha</label>
               <div class="textfield">
                    <input type="password" name="senha" placeholder="Senha" required>
                    <span class="linha"></span>
                </div>

                <input type="submit" name="btn-cadastrar" class="btn-login" value="CADASTRAR">

               </form>
               <form action="index.php" method="POST">

                    <input type="submit" name="index" class="btn-cadastro" value="VOLTAR">

               </form>

            </div>

        </div>
    </main>
</body>
</html>