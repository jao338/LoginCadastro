<?php

    class user {

    function select_all (){

        $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
        mysqli_select_db($conexao, "LoginCadastro");

        $retorno = "";

        $res = mysqli_query($conexao, "SELECT * FROM `user`");

        while ($vetor = mysqli_fetch_array($res)) {
           
        $retorno .= ($vetor["ID"] . $vetor["Login"] . $vetor["Senha"]);

        }

    return $retorno;

    }

    function select_user ($user, $senha){

        $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
        mysqli_select_db($conexao, "LoginCadastro");

        $retorno = "";

        $res = mysqli_query($conexao, "SELECT * FROM `user` WHERE `Login` LIKE '$user' AND `Senha` LIKE '$senha'");

        while ($vetor = mysqli_fetch_array($res)) {
           
        $retorno .= ($vetor["Login"] . ";" . $vetor["Senha"]);

        }
        
    return $retorno;

    }

    function insert_user ($user, $senha){

        $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
        mysqli_select_db($conexao, "LoginCadastro");

        $retorno = false;

        $res = mysqli_query($conexao, "INSERT INTO `user` (`ID`, `Login`, `Senha`) VALUES (NULL, '$user', '$senha')");

        if($res != null){
            $retorno = true;
        }

    return $retorno;

    }

    function validate_user (){

        $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
        mysqli_select_db($conexao, "LoginCadastro");

        $retorno = "";

        $res = mysqli_query($conexao, "SELECT * FROM `user`");

        while ($vetor = mysqli_fetch_array($res)) {
           
        $retorno .= ($vetor["Login"] . ";");

        }
        
    return $retorno;

    }

    function validate_pass (){

        $conexao = mysqli_connect("127.0.0.1:3307", "root", "");
        mysqli_select_db($conexao, "LoginCadastro");

        $retorno = "";

        $res = mysqli_query($conexao, "SELECT * FROM `user`");

        while ($vetor = mysqli_fetch_array($res)) {
           
        $retorno .= ($vetor["Senha"] . ";");

        }
        
    return $retorno;

    }
    
}
 
?>
        

   
