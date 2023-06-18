<?php
    include './user.php';
    $obj = new user();

    $user = $_POST['usuario'];
    $senha = $_POST['senha'];
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>

    <main class="login">
  
<?php

    $dados = $obj->select_user($user, $senha);
    $login = "";
    $pass = "";
    
    if($user != null ){

        if ($obj->validate($user, sha1($senha))) {

            echo "<form action='index.php' class='formulario'>";

            echo "<h1>Meu perfil</h1>";

            for ($i=0; $i < strlen($dados); $i++) {

                $login .= $dados[$i];  

                if($dados[$i] == ";"){

                    $login = rtrim($login, ";"); 
                    break;
                }
            }

            for ($i=0; $i < strlen($dados); $i++) {

                $pass .= $dados[$i];  

            }

            //$pass = sha1($senha);
            $pass = ltrim($pass, "$user;"); 

            echo "<p><strong>Usuário</strong> - $login</p>";
            echo "<p><strong>Senha</strong> - $pass</p>";

            echo "<input type='submit' name='btn-voltar' class='btn-voltar' value='VOLTAR'>";
           
            echo "</form>";
        }else {

            echo "<form action='index.php' class='formulario'>";
            echo "<h1>Usuário ou senha inválidos</h1>";

            echo "<input type='submit' name='btn-voltar' class='btn-voltar' value='VOLTAR'>";

            echo "</form>";
        }

    }

?>
        
    </main>
</body>
</html>