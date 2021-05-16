<html>
<head>
    <title>
        ГТО
    </title>
</head>

<body>
<h1>Блок 1</h1>
<h2>Задание 1</h2>
<?php
    $Num =  $_POST['Num'];
    if ($Num >= 100){
        echo 'Число по модулю больше 100.';
    }
    else{
        if ($Num == NULL){
            echo 'Введите значение.';
        }
        else {
            $Square = $Num * $Num;
            echo 'Число в квадрате '.$Square;
            }
        }
?>
    <form action = "" method = "POST"><br>
        Число для возведения в квадрат:<input type = "text" name = "Num" /> <br><br>
        <input type = "submit" />
    </form>
<h2>Задание 2</h2>
<?php
    $X = $_POST['X']; $Y = $_POST['Y'];$M = $_POST['M'];
    if ($X == Null){
        $X = 0;
    }
    if ($Y == Null){
        $Y = 0;
    }
    if ($M == Null){
        $M = 0;
    }
    $XRUB = $X * $M;
    $YCENT = $Y * $M;
    if($YCENT>=100){
        while ($YCENT>=100) {
            $YCENT = $YCENT - 100;
            $XRUB = $XRUB + 1;
        }
echo 'Пирожки в колличестве ' . $M . '. По цене ' . $X . ' рублей и ' . $Y . ' копеек. Cтоят ' . $XRUB . ' рублей ' . $YCENT . ' копеек.';
    }
    else
echo 'Пирожки в колличестве ' . $M . '. По цене ' . $X . ' рублей и ' . $Y . ' копеек. Cтоят ' . $XRUB . ' рублей ' . $YCENT . ' копеек.';


?>
    <form action = "" method = "POST"><br>
        Цена пирожка (рублей):<input type = "text" name = "X" /> <br><br>
        Цена пирожка (копеек):<input type = "text" name = "Y" /> <br><br>
        Колличество пирожков:<input type = "text" name = "M" /> <br><br>

        <input type = "submit" />
    </form>
<h2>Задание 3</h2>
<form action = "" method = "POST"><br>
    Массив: <input type = "number" name = "array3" /> <br><br>
    <input type = "submit" />
</form>
<?php
    $Num3 = $_POST['array3'];
    $Num3 = str_split($Num3) ;
    $Num3Count = count($Num3);
    if ($Num3Count >= 5 || $Num3Count <=3){
        echo 'Вы ввели число в котором более или менее 4 цифр';
    }
    else {
        $Num3Sort = arsort($Num3);
        $Num3End = implode('', $Num3);
        echo $Num3End;

    }
?>
<h2> Задание 4</h2>
<form action = "" method = "POST"><br>
    От дома до первого магазина:<input type = "text" name = "Route1" /> <br><br>
    От дома до второго магазина:<input type = "text" name = "Route2" /> <br><br>
    Между магазинами:<input type = "text" name = "Route3" /> <br><br>

    <input type = "submit" />
</form>
<?php
$Route1= $_POST['Route1']; $Route2= $_POST['Route2']; $Route3= $_POST['Route3'];
$SumRoute = $Route1 + $Route2 + $Route3;
$SR1 = $Route1 * 2 + $Route2 * 2;
$SR2 = $Route1 * 2 + $Route3 * 2;
$SR3 = $Route2 * 2 + $Route3 * 2;
if($SumRoute >= $SR1) {
    if ($SR1 >= $SR2){
        if  ($SR2 >= $SR3){
            echo 'Минимальный путь - '.$SR3.'.';
        }
        else {echo 'Минимальный путь - '.$SR2.'.';}
    }
    else {echo 'Минимальный путь - '.$SR1.'.';}
    }
else {echo 'Минимальный путь - '.$SumRoute.'.';}

?>
<h2>Задание 5</h2>
<form action = "" method = "POST"><br>
    Quest5 :<input type = "number" name = "array5" /> <br><br>
    <input type = "submit" />
</form>
<?php

$array5 = $_POST['array5'];

                                /*Способ через массивы*/
/*if ($array5 < pow(10,6)) {
    $array51 = str_split($array5);
    $arraycount = count($array51);
    $arraycount = 0 - $arraycount;
    $arrayautomorph = 0;

    $arraysquare = $array5 * $array5;
    $arraysplit = str_split($arraysquare);
    $arraycount2 = count($arraysplit);
    $array52 = array_slice($arraysplit, $arraycount, $arraycount2);

    while ($arrayautomorph <= $array5) {
        $array_autoarray = str_split($arrayautomorph);
        $array_autocount = count($array_autoarray);
        $array_autocount = 0 - $array_autocount;

        $array_autosquare = $arrayautomorph * $arrayautomorph;
        $array_autosplit = str_split($array_autosquare);
        $array_autocount2 = count($array_autosplit);
        $array_end = array_slice($array_autosplit, $array_autocount, $array_autocount2);
        if ($array_end == $array_autoarray) {
            echo $arrayautomorph . ' ';
        }
        $arrayautomorph = $arrayautomorph + 1;

    }


    if ($array52 == $array51) {
        echo "<br>Введенное вами число автоморфно." . '<br>';
    } else {
        echo "<br>Введенное вами число не автоморфно.";
    }
    echo '<br>';
    print_r($array51);
    echo '<br>-----------------------------------------------------<br>';
    print_r($array52);
}
else{
    echo 'Число которое вы ввели больше 10^6';
}*/
if ($array5 <= pow(10,6)) {
    $array5from = 0;
    while ($array5from <= $array5) {
        $square5 = pow($array5from,2)- $array5from;

        if (($square5) % pow(10, strlen($array5from)) == 0) {
            echo  $array5from . " " ;
        }
        $array5from++;
    }
}elseif ($array5){

} else {
    echo "Число больше 10^6";
}

?>
<h2>Задание 6</h2>
<form action = "" method = "POST"><br>
    Колличество чисел в массиве:<input type = "number" name = "arraynum" /> <br><br>
    Числа в массиве массиве:<input type = "text" name = "arraytype" /> <br><br>
    <input type = "submit" />
</form>
<?php

$arraynum = $_POST['arraynum'];
$arraytype = $_POST['arraytype'];
$array6 = array();
$array6 = explode(' ', $arraytype);
$array6count = count($array6);
$num6 = 0;
$array6count2 = array_count_values($array6);
$array6compare2 = count($array6count2);
if ($array6compare2 == $array6count) {
    if ($array6count == $arraynum) {
        while ($num6 < $arraynum) {
            $array6compare = 0 - $array6[$num6];
            if (in_array($array6compare, $array6)) {
                echo $num6 . ' ';
                $num6++;
            } else {
                $num6++;
            }
        }
    } else {
        echo 'Введите точное колличество значений ';
    }
}else {
    echo 'Вы ввели повторяющиеся значения';
}
echo '<br>'.$array6count2;
?>

</body>
</html>