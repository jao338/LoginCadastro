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

               <form action="">

               <label for="usuario" class="label-textfield">Usuário</label>
               <div class="textfield">
                    <input type="text" name="usuario" placeholder="Usuário" required>
                </div>

                <label for="senha" class="label-textfield">Senha</label>
               <div class="textfield">
                    <input type="text" name="senha" placeholder="Senha" required>
                    <span class="linha"></span>
                </div>

                <input type="submit" name="btn-cadastrar" class="btn-login" value="CADASTRAR">
                
               </form>

            </div>

        </div>
    </main>
</body>
</html>