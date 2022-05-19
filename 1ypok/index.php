<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("VE_SGE", 24);
    echo VE_SGE . '<br>';
    $number = 5;
    $num = -0.55;
    $str = "Переменая";
    $bool = false;
    $a = 0.5;
    $b = "0.5";
    echo $a + floatval($b); // floatval меняет с строки на цифры
    echo $str . ': ' . $number . '. Var 2: ' . $num; 
    ?>
</body>
</html>