<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
        if (isset($_REQUEST['nome'])) {
            echo "Nome: ".$_REQUEST['nome'];
        }
        echo "<br>";
        if (isset($_REQUEST['senha'])) {
            echo "Senha: ". $_REQUEST['senha'];
        }
        echo "<br>";
        if (isset($_REQUEST['sexo'])) {
            echo "Sexo: " . $_REQUEST['sexo'];
        }
        echo "<br>";
        if (isset($_REQUEST['profissao'])) {
            foreach ($_REQUEST['profissao'] as $value) {
                echo "<p>Profissao:  . $value  </p><br>";
            }
        }
        echo "<br>";
        if (isset($_REQUEST['cidade'])) {
            echo "Cidade: " . $_REQUEST['cidade'];
        }

        echo "<br>";
        if (isset($_REQUEST['estado'])) {

            echo "Estado :  ." . $_REQUEST['estado'];
        }

        echo "<br>";
        if (isset($_REQUEST['descricao'])) {
            echo "Descrição: " . $_REQUEST['descricao'];
        }
    ?>
</div>
</body>
</html>