<?php
    include("conecta.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if(isset($_POST["inserir"])) {
        $comando = $pdo->prepare("INSERT INTO login ( email, senha) VALUES('$email', '$senha')");
        $resultado = $comando->execute();
        header("Location: login.html");
    }


?>