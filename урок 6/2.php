<!DOCTYPE HTML>
<html>
<head>

    <title><?= 'строковые переменные' ?> </title>
</head>
<body>

<h1>урок 6</h1>
<h2> преображение строки в число

    <?php
    echo "<br>" ;
    $chislo= '456';
    echo "<br>" ;
    var_dump($chislo);
    $chislo= (int)'456';
    echo "<br>" ;
    echo $chislo;
    echo "<br>" ;
    var_dump($chislo);
    echo "<br>" ;
    $chislost= '969294233720368754775807';
    echo "<br>" ;
    var_dump($chislost);
    echo "<br>" ;
    $chislost= (int)'969294233720368754775807';
    echo $chislost;
    echo "<br>" ;
    // эксперимент поставлен с большими числами . Допустим, 20-символьная строка 22111999555444666777
    // уже преобразуется в число 9223372036854775807, утерен смысл преоброжения.
    // а 19-значная строка 2111999555444666777 еще преобразуется в число 2111999555444666777
    // я , так понимаю,-  происходит переполнение в модуле преображения...
    // то есть -19 знаков- максимальное значение интеджер-преобразование символьного значения в цифрах без потери смысла???
    ?>

    <a href="<?= 'index.php'?>">"возвращение в файл index"</a>

</body >
</html >
