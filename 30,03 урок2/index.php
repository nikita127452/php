<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 10;
    $y = 20;
    echo $x + $y . '<br>';
    echo $x - $y . '<br>';
    echo $x * $y . '<br>';
    echo $x / $y . '<br>';
    echo $x % $y . '<br>';

    $x = $x + 10; //длиный способ 1
    $x += 10; //способ короче 2
    echo $x . '<br>';
    $x++; // +1
    $x--; // +1

    echo M_PI . '<br>' ;
    echo M_E . '<br>';

    echo abs(-22) . '<br>';
    echo ceil(3.1) . '<br>';
    echo floor(3.4) . '<br>';
    echo round(3.1) . '<br>';
    echo round(3.155455, 5) . '<br>';
    echo mt_rand(1, 100) . '<br>';
    echo min(1, 3, 9, 8, 10,) . '<br>';
    ?>
</body>
</html>