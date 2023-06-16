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
    $c = new user();
?>

    <h1>Informações</h1>

    <?php
        echo $c->select_all();
    ?>
</body>
</html>