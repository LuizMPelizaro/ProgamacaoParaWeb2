<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="POST">
    <label for="id_nome"></label><input type="text" name="nome" id="id_nome" placeholder="Nome">
    <br>
    <label for="id_descicao"></label><textarea id="id_descicao" name="descricao" rows="4" cols="50">
        </textarea>
    <input type="submit" value="enviar">
    <input type="reset" value="limpar">
</form>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "post";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception) {
    echo "Connecttion failed: " . $exception->getMessage();
}

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$hora = date("Y-m-d H:i:s");

?>
</body>
</html>