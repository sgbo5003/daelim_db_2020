<?php
echo"더하기 실습 <hr>";
$sum = 1+2+3;
echo $sum."<br>"; 


$a = 10;
$sum = $sum + $a;
echo $sum."<br>";//문자열 결합
//정수+실수 = 값
$b= 3.14;
$sum = $sum+$b;
echo $sum."<br><br><br>";

echo"빼기 실습 <hr>";
echo 10-5; // 상수만으로 연산하여 출력가능\
echo"<br><br><br>";

echo"곱하기 실습 <hr>";
echo 2*3;
echo"<br><br><br>";


echo"등가연산자 실습 <hr>";
$c = 1;
echo $c;
$c = $c + 1;
echo $c;
$c = $c + 1;
echo $c;


echo"<br>";
$d = 1; //후순위증가
echo $d++;
echo $d+=2; // +=숫자, 그숫자만큼 증가
echo $d+=3;

echo"<br>";
$e = 1; //선순위증가
echo ++$e;
echo ++$e;
echo ++$e;