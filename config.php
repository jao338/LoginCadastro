<?php

    class config {

    function select_user (){

        $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
        mysqli_select_db($conexao, "LoginCadastro");

        $res = mysqli_query($conexao, "SELECT * FROM `user`");

        while ($vetor = mysqli_fetch_array($res)) {
            
        echo("ID: " . $vetor["ID"]);
        echo("Usuario: " . $vetor["Login"]);
        echo("Senha: " . $vetor["Senha"]);

        }
    }

    
}
 
?>
        

   
