<?php
//edit micael nascimento
//informações do servidor
$servername = "localhost";
$dbname = "edubd";
$username = "root";
$password = "";

try {
    	$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)

    {
    	die("Lamento, algo não está funcionando 100% (DB) ");
    }

?>