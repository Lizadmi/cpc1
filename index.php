<meta charset="UTF-8">
<?php
//Задание СРС №1. Часть 1
echo "Задание 1";       //Задание 1
echo "<br>";
$a=3;
$a1=$a;
echo $a1;
echo "<br>";
echo "Задание 2";    //Задание 2
echo "<br>";
$a2=10;
$b=2;
$sum=$a2+$b;
$min=$a2-$b;
$umn=$a2*$b;
$del=$a2/$b;
$srZnach=$sum/2;
echo "Сумма ".$sum/$srZnach . "<br>" ."Разность ".$min/$srZnach ."<br>". "Произведение ".$umn/$srZnach . "<br>" . "Деление ".$del/$srZnach;
echo "<br>";
echo "Задание 3"; //Задание 3
echo "<br>";
$c=15;
$d=2;
$result=$c+$d;
echo "Сумма " . $c . " и " . $d." = ".$result;
echo "<br>";
echo "Задание 4";  //Задание 4
echo "<br>";
$a3=10;
$b1=2;
$с1=5;
$sum2=$a3+$b1+$с1;
$srZnach1=($sum2/3);
echo $sum2/$srZnach1;
echo "<br>";
echo "Задание 5"; //Задание 5
echo "<br>";
$a4=17;
$b2=10;
$c2=$a4-$b2;
$d1=17;
$result1=$c2+$d1;
echo $result1;
//Задание СРС №1. Часть 2
echo "Задание 1"; //Задание 1
echo "<br>";
$text = "Привет, мир!";
echo $text . " Моя первая программа!";
echo "<br>";
echo "Задание 2"; //Задание 2
echo "<br>";
$text1="Привет,";
$text2="Мир!";
echo $text1 . $text2;
echo "<br>";
echo "Задание 3"; //Задание 3
echo "<br>";
$name ="Лиза";
echo "Привет," . $name ."!";
//echo "<br>";
$text3="\nНовый текст";
echo "<br>";
echo "Задание 4"; //Задание 4
echo "<br>";
$age = 19;
$height =150;
echo "Мой возраст: ".$age ."| Мой рост: ".$height;
echo $result1;
echo "<br>";
echo "Задание 5"; //Задание 5
echo "<br>";
$text4="abcde";
echo $text4[0]. " " . $text4[2]. " " .$text4[4];
echo "<br>";
//Задание СРС №1. Часть 3
echo "Задание 1"; //Задание 1
echo "<br>";
$arr = ['a', 'b', 'c'];
var_dump($arr);
echo "<br>";
var_dump($arr[0]);
echo "<br>";
var_dump($arr[1]);
echo "<br>";
var_dump($arr[2]);
echo "<br>";
echo "Задание 2"; //Задание 2
echo "<br>";
echo $arr[0].$arr[1].$arr[2];
echo "<br>";
echo "Задание 3"; //Задание 3
echo "<br>";
$arr1 = ['a', 'b', 'c' , 'd'];
echo $arr1[0]."+".$arr1[1].",".$arr1[2]."+".$arr1[3].",".$arr1[0]."-".$arr1[3].",".$arr1[0]."/".$arr1[3];
echo "<br>";
echo "Задание 4"; //Задание 4
echo "<br>";
$arr2 = [2, 5, 3 , 9];
$result2= $arr2[0]*$arr2[1]+$arr2[2]*$arr2[3];
echo $result2;
echo "<br>";
echo "Задание 5"; //Задание 5
echo "<br>";
$arr3[] = 1;
$arr3[] = 2;
$arr3[] = 3;
$arr3[] = 4;
$arr3[] = 5;
echo "<br>";
//Задание СРС №1. Часть 4
echo "Задание 1"; //Задание 1
echo "<br>";
$ar=['a'=>11, 'b'=>20, 'c'=>30];
echo $ar['c'];
echo "<br>";
echo $ar['a']+$ar['b']+$ar['c'];
echo "<br>";
echo "Задание 2"; //Задание 2
echo "<br>";
$ar1=['q3'=>12, 'r3'=>23, 'f3'=>34];
echo array_sum($ar1);
echo "<br>";
echo "Задание 3"; //Задание 3
echo "<br>";
$ar2=['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo "Зарплата Пети:".$ar2['Петя']." | Зарплата Коли:".$ar2['Коля'];
echo "<br>";
echo "Задание 4"; //Задание 4
echo "<br>";
$ar3=['1'=>'Январь','2'=>'Февраль','3'=>'Март','4'=>'Апрель','5'=>'Май',
'6'=>'Июнь','7'=>'Июль','8'=>'Август','9'=>'Сентябрь','10'=>'Октябрь','11'=>'Ноябрь','12'=>'Декабрь'];
echo "Первый месяц учебного года это ".$ar3['9']." , а последний месяц учебного года это ".$ar3['6'];
echo "<br>";
echo "Задание 5"; //Задание 5
echo "<br>";
$ar4=['1'=>'Понедельник','2'=>'Вторник','3'=>'Среда','4'=>'Четверг','5'=>'Пятница',
    '6'=>'Суббота','7'=>'Воскресенье'];
$day=3;
foreach (@$ar4 as $key=>$value){
    if ($key == $day){
        echo $value;
    };
}
