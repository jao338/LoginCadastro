<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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
    <h1>Informações</h1>

<?php
    
    if($user != null){

        if (validate($user, $senha)) {
            echo "Usuário encontrado";
        }else{
            echo "Usuário não encontrado";
        }

    }

    ?>
</body>
</html>