<?php

    $nome_espaco = $_POST["nome_espaco"];

    include "../banco/conexao.php";

    $conn = conectar();

    $sql = "INSERT INTO espacos(NOME) VALUES ('$nome_espaco');";

    $resultado = $conn->query($sql);

    if($resultado){
        desconectar($conn);
        header("Location: ../p_espacos.php");
        die();
    }else{
        desconectar($conn);
        echo "<p>Problema</p>";
    }

?>