<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <?php
    if (isset($_REQUEST['videoid'])) {
        echo "<iframe  width='425' height='344' src='https://www.youtube.com/embed/" . $_REQUEST["videoid"] ."></iframe>";
    }
    ?>
</div>
</body>
</html>