<?php

    class user {

    function select_all (){

        $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
        mysqli_select_db($conexao, "LoginCadastro");

        $res = mysqli_query($conexao, "SELECT * FROM `user`");

        $retorno = "";

        while ($vetor = mysqli_fetch_array($res)) {
           
        $retorno .= ($vetor["ID"] . $vetor["Login"] . $vetor["Senha"]);

        return $retorno;
    }

    
}
 
?>
        

   
