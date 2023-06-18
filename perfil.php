<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    
<?php
    include './user.php';
    $obj = new user();

    $user = $_POST['usuario'];
    $senha = $_POST['senha'];

    function validate ($n1, $n2){

        $con = new user();

        $var = false;

        $usuarios =  $con->validate_user();
        $senhas =  $con->validate_pass();
        

        if (str_contains($usuarios, "$n1") && str_contains($senhas, "$n2")) {
            $var = true; 
        }
        
        return $var; 
    }

?>

    <main class="login">
  
<?php

    $dados = $obj->select_user($user, $senha);
    $login = "";
    $pass = "";
    
    if($user != null){

        if (validate($user, $senha)) {

            echo "<form action='index.php' class='formulario'>";

            echo "<h1>$user</h1>";
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

            $pass = ltrim($pass, "$user;"); 

            echo "<p><strong>Usuário</strong> - $login</p>";
            echo "<p><strong>Senha</strong> - $pass</p>";

            echo "<input type='submit' name='btn-voltar' class='btn-voltar' value='VOLTAR'>";
           
            echo "</form>";
        }else{
            echo "Usuário ou Senha inválidos";
        }

    }

?>
        
    </main>
</body>
</html>