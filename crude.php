<?php
    include("conecta.php");
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $cpf =$_POST["cpf"];

    if(isset($_POST["inserir"])) {
        $comando = $pdo->prepare("INSERT INTO usuario_data (nome, email, senha, telefone, cpf) VALUES('$nome', '$email', '$senha','$telefone','$cpf')");

        $resultado = $comando->execute();
        header("Location: login.html");
    }

?>