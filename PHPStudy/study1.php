<?php

//주석문 방식1
/*주석문 방식2*/

// echo : print와 같다
echo 'Hello';
echo 1;
// var_dump(자료) : 자료타입 확인
var_dump(6.5);

?>

<?php 

echo '</br>그는 "안녕하세요"라고 말했다. </br>';
echo "그는 '안녕하세요'라고 말했다. </br>";
echo "그는 \"안녕하세요\"라고 말했다. </br>";
// </br>로 줄바꿈

?>

<?php 

//변수 선언
// $변수이름 = 초깃값;
$age = 26; // 정수, 실수, 문자열 등등 대입 가능
echo $age;

echo "나이는 {$age}입니다."; //변수를 {}로 감싸서 변수 명을 명시

//상수 선언
define("TITLE", "PHP Tutorial");

?>
