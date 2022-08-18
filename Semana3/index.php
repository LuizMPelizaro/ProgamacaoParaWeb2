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

class TableRows extends RecursiveIteratorIterator
{
    function __construct($it)
    {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current()
    {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current() . "</td>";
    }

    function beginChildren()
    {
        echo "<tr>";
    }

    function endChildren()
    {
        echo "</tr>" . "\n";
    }
}

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

try {
    $sql = "INSERT INTO posts (nome,descricao) VALUES ('$nome','$descricao')";
    $conn->exec($sql);
} catch (PDOException $exception) {
    echo $sql . "<br>" . $exception->getMessage();
}

try {
    $stmt = $conn->prepare("SELECT * FROM posts");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach (new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $key => $value) {
        echo $value;
        echo "<br>";
    }
} catch (PDOException $exception) {
    echo "Error: " . $exception->getMessage();
}
$conn = null;
?>
</body>
</html>