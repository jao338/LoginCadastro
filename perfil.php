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

    <div class="perfil">

        <h1>Meu perfil</h1>

<?php

    if($user != null){

        if (validate($user, $senha)) {

            $dados = $obj->select_user($user, $senha);

            $x1 = "";
            $x2 = "";

            for ($i=0; $i < strlen($dados); $i++) {

                $x1 .= $dados[$i];  

                if($dados[$i] == ";"){

                    $x1 = rtrim($x1, ";"); 
                    break;
                }
            }

            for ($i=0; $i < strlen($dados); $i++) {

                $x2 .= $dados[$i];  

            }

            $x2 = ltrim($x2, "$user;"); 

            echo $x2;

        }else{
            echo "Usuário não encontrado";
        }

    }

?>
        </div>
    </main>
</body>
</html>