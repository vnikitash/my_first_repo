<?php

//file_put_contents
//file_get_contents
//explode
//implode





















die();
//1 - Глоабльная и локальная области видимости
//2 - Передача по значению и передача по ссылке
//3 - функции, их аргументы, опнциональные параметры
//4 - Передача и прием данных из форм

















function testFunction($a, $t = 1)
{

}


testFunction(777);











die();

$cacheData = [];


$age = $cacheData['age'] ?? 18;

function getCacheData(string $key, $default = null)
{
    global $cacheData;

    return $cacheData[$key] ?? $default;
}

function setCacheData(string $key, $data)
{
    global $cacheData;

    $cacheData[$key] = $data;
}


setCacheData('users', ['viktor', 'oleg', 'alisa']);

$admins = getCacheData('admin');
foreach ($admins as $admin) {
    echo $admin;
}




















die();



function test(string $first, string $second, string $third = '') {
    echo $first . ' - ' . $second . ' - ' . $third;
}



$f = "F";
$s = "S";
$t = "T";


test($f, $s, "asdasdasd");

die();

die();




$a = 100;
$b = 123;

function testFund()
{

}

function multipleBy2(): void {
    global $b;


    echo $b;
    //$a = 123;
    //print_r($GLOBALS['a']);
}

testFund();
multipleBy2();




























die();
$arr = [1,2,3,4,5];

foreach ($arr as $key => $number) {
    $arr[$key] = $number * 2;
}

foreach ($arr as &$number) {
    $number *= 2;
}


print_r($arr);





















die();


$a = 1;
$b = &$a; // $b = 1;

$a += 100; // $a = $a + 1;

echo "B: $b A: $a";












function multipleValue(int $a): int {
    return 3 * $a;
}

multipleValue($a);





















/*$arr = ['Maria', 'Lesya', 'Lena', 'Alexandra', 'Mark'];

$len = count($arr);

for ($i = 0; $i < $len; $i++) {
    echo "Hello, {$arr[$i]}<br>";
}*/

/**
 * 1 - $i = 0
 * 2 - $i < $len
 * 3 - echo "Hello, {$arr[$i]}<br>";
 * 4 - $i++
 * 5 - repeat p2
 */
/*
$abc = range('a', 'z');


$initials = 'nvv';



$first = getRandomElement($abc); //n
$second = getRandomElement($abc); //v
$third = getRandomElement($abc); //v
$rndInitials = $first . $second . $third;
$counter = 1;
while ($initials !== $rndInitials) {
    $first = getRandomElement($abc); //n
    $second = getRandomElement($abc); //v
    $third = getRandomElement($abc); //v

    $rndInitials = $first . $second . $third;
    $counter++;
}
echo "RND: $rndInitials. Attempt: $counter<br>";



do {
    $first = getRandomElement($abc); //n
    $second = getRandomElement($abc); //v
    $third = getRandomElement($abc); //v
    $rndInitials = $first . $second . $third;
    $counter++;
} while ($initials !== $rndInitials);
echo "RND: $rndInitials. Attempt: $counter<br>";

*/









//['a','b', 'c'] = длинна = 3, максимальный индекс = 2
function getRandomElement(array $array): string
{
    $len = count($array); // 2
    $index = rand(0, $len - 1);

    return $array[$index];
}










/*

$i = 0;
while ($i < $len) {
    echo "Hello, {$arr[$i]}<br>";
    $i++;
}
*/









