<?php
    session_start();
    $array = array($_POST['login'], $_POST['senha'], $_POST['mat'], 
    $_POST['cpf'], $_POST['nome'], $_POST['sobrenome'],);

    $sql = "SET AUTOCOMMIT=0;";
    $sql .= "START TRANSACTION;";
    $sql .= "INSERT INTO `usuario`(`idusuario`, `login`, `senha`, `matricula`, `cpf`, `nome`, `sobrenome`, `dataNascimento`) VALUES (NULL, '$array[0]', '$array[1]', '$array[2]', '$array[3]', 
    '$array[4]', '$array[5]',NULL);";
    $sql .= "INSERT INTO `aluno`(`idaluno`, `usuario_idusuario`) VALUES (NULL,(select LAST_INSERT_ID()));";
    $sql .= "COMMIT;";
    $sql .= "SET AUTOCOMMIT=1;";

    $servername = "localhost";
    $dbname = "edubd";
    $username = "root";
    $password = "";

    try {
        $connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $connection->prepare($sql);
        $stmt->execute();

        echo '<br>inserido com sucesso';

    }catch(PDOException $e){
        echo $sql.'<br>erro: '.$e->getMessage();
    }
    $connection = null;
?>