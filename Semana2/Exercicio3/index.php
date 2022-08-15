<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!--<form action="index.php" method="post">-->
<!--    <label for="id_nome"></label><input type="text" name="nome" id="id_nome" placeholder="Nome">-->
<!--    <br>-->
<!--    <label for="id_descicao"></label><textarea id="id_descicao" name="descricao" rows="4" cols="50">-->
<!--        </textarea>-->
<!--    <input type="submit" value="enviar">-->
<!--    <input type="reset" value="limpar">-->
<!--</form>-->
<?php

$post = array("nome" => array(),
    "descricao" => array(),
    "hora" => array()
);
$num_post = 0;
if (isset($_REQUEST['nome']) and isset($_REQUEST['descricao'])) {
    print_r($_REQUEST['nome']);
    $post[] = array(
        "nome" => array($num_post => $_REQUEST['nome']),
        "descricao" => array($num_post => $_REQUEST['descricao']),
        "hora" => array($num_post => date('h:i:s'))
    );
    $max = sizeof($post);
    echo $max;
    print_r(array_keys($post["nome"]));
    print_r(array_keys($post["hora"]));
    $num_post++;
//    $post[] = array(
//            "nome" => array($_REQUEST['nome'] => $_REQUEST['nome']),
//            "descricao" => array($_REQUEST['descricao'] => $_REQUEST['descricao']),
//            "horario" => array("horario" => date('h:i:s'))
//        );


//    $post[] = array($_REQUEST['nome'] => $_REQUEST['nome'],
//        $_REQUEST['descricao'] => $_REQUEST['descricao'],
//        "horario" => date('h:i:s'));

//    for ($i = 1; $i <= $num_post; $i++) {
//        echo "<div>
//                       <p>Usuario :" . $post[$i][$i] . "</p>
//                       <p>Usuario :" . $post[$i][$i] . "</p>
//                       <p>Usuario :" . $post[$i][$i] . "</p>
//              </div>";
//    }
//}
}
?>
</body>
</html>