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
    

    <?php 
        include './user.php';

        $c = new user();
    ?>

    <main class="login">

        <div class="left-login">

            <img src="img/login.svg" class="left-img-login" alt="">

        </div>

        <div class="right-login">

            <div class="card-login">

                <h1>Login</h1>

                <div class="textfield">
                    <input type="text" name="usuario" placeholder="Usuário" required>
                </div>
                
                <div class="textfield">
                    <input type="password" name="senha" placeholder="Senha" required>
                </div>

                
                <input type="submit" name="btn-login" class="btn-login" value="ENTRAR">

                <span class="linha"></span>

                <p id="info-cadastro">Não tem cadastro?</p>

                <input type="submit" name="btn-cadastro" class="btn-cadastro" value="CADASTRAR">

            </div>

        </div>
    </main>
</body>
</html>