<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container"
     style="grid-template-columns: repeat(<?php echo $_REQUEST['colunas'] ?>,1fr);
             grid-template-rows: repeat(<?php echo $_REQUEST['linhas'] ?>, 1fr)">
    <?php
    $valor = 1;
    if (isset($_REQUEST['linhas']) or isset($_REQUEST['colunas'])) {
        for ($i = 0; $i < $_REQUEST['linhas']; $i++) {
            for ($j = 0; $j < $_REQUEST['colunas']; $j++) {
                echo "<div class='table'>$valor</div>";
                $valor++;
            }
        }
    }
    ?>
</div>
</body>
</html>