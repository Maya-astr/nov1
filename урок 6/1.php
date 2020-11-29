<html>
<head>
    <title><?= 'Решение примеров' ?> </title>
</head>
<body>
<h1>урок 6</h1>
<h2> Математические примеры
    <?php
    echo "<br>" ;
    $z=5;$x=12;
    $y=$z+$x;
    echo $y ; echo "<br>" ;
    $y=$x-$z;
    echo $y ;echo "<br>" ;
    $y=$x*$z;
    echo $y ;echo "<br>" ;
    $y=$x/$z;
    echo $y  ;
    echo "<br>" ;
    $y=$x**$z;
    echo $y ;
    var_dump($x,$y,$z);
    echo "<br>" ;
    ?>
    <a href="<?= 'index.php'?>">"возвращение в файл index"</a>

</body >
</html >
