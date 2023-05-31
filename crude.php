<?php
    include("conecta.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if(isset($_POST["inserir"])) {
        $comando = $pdo->prepare("INSERT INTO usuario_data (nome, email, senha) VALUES('$nome', '$email', '$senha')");
        $resultado = $comando->execute();
        header("Location: cadastro.html");
    }


?>