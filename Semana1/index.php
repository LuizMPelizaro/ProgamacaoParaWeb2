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
<?php
$blue = 0;
$red = 0;
$green = 0;
$number = 1;
echo "<div><table>";
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        $value = rand(1, 9);
        if ($value == 1 and $red < 10) {
            echo "<th><h3 class='red'>";
            echo $number;;
            echo "</h3></th>";
            $red++;
            $number++;
        } elseif ($value == 2 and $blue < 10) {
            echo "<th><h3 class='blue'>";
            echo $number;
            echo "</h3></th>";
            $blue++;
            $number++;
        } elseif ($value == 3 and $green < 10) {
            echo "<th><h3 class='green'>";
            echo $number;
            echo "</h3></th>";
            $green++;
            $number++;
        } else {
            echo "<th><h3 class='off_color'>";
            echo $number;
            echo "</h3></th>";
            $number++;
        }
    }
    echo "</tr>";
}
echo "</table></div>";
?>
</body>
</html>