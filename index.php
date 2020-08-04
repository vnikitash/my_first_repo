<?php


$arr = [
    'name' => 'Viktor',
    'age' => 27,
    'city' => 'Kiev'
];

$arr1 = [1,2,3,4,5];

print_r($arr);


foreach ($arr1 as $field => $data) {
    echo  $field . ' --- ' . $data . '<br>';
}
























die();

//$arr = [234, 123, 123,34,11,33];


for ($i = 0; $i < 2000000; $i++) {
    $arr[] = 1;
}


$len = count($arr);
$start = microtime(true);
for ($i = 0; $i < $len; $i++) {
    $i++;
    $i--;
    //echo "This is {$arr[$i]}<br>";
}


echo microtime(true) - $start;
die();

/**
 * 1) $i = 0;
 * 2) $i < count($arr); //if $I greater than 100 => exit from cycle
 * 3) make for body // example: echo "This is $i<br>";
 * 4) $i = $i + 1;
 * 5) repeat 2....
 *
 *
 * comparasion = 2
 */





























die();
$arr = [
    [
        'name' => 'Alex',
        'age' => 22
    ],
    [
        'name' => 'Oleg',
        'age' => 18
    ]
];


print_r($arr[1]['age']);
die();



























die();

$array = [
    'Viktor',
    27,
    'Kiev'
];

$array2 = [
    'city' => 'Kiev',
    'age' => 27,
    'name' => 'Viktor',
    'position' => 'Tech Lead',
];


echo 'Name: ' . $array2['name'] . '<br>';
echo 'Age : ' . $array2['age'] . '<br>';
echo 'City: ' . $array2['city'] . '<br>';




























die();
$a = rand(1, 10000) /100;
$b = rand(1, 10000) /100;



$result = sum($a, $b);

echo $result;


function sum(float $a, float $b): float
{
    return $a + $b;
}























die();
$arr = [
    [
        'name' => "Viktor",
        'age' => 27
    ],
    [
        'name' => 'Masha',
        'age' => 26
    ]
];

$arr2 = [
    [
        'name' => "Anna",
        'age' => 30
    ],
    [
        'name' => 'Alexey',
        'age' => 29
    ],
    [
        'name' => 'Oleg',
        'age' => 12
    ]
];

$arr3 = [
    [
        'name' => "Anna",
        'age' => 30
    ],
    [
        'name' => 'Alexey',
        'age' => 29
    ],
    [
        'name' => 'Oleg',
        'age' => 12
    ]
];

buildHTMLTable($arr);
buildHTMLTable($arr2);
buildHTMLTable($arr3);


function buildHTMLTable(array $users): void {
    $html = '<table border="1">';
    $html .= '<thead>';
    $html .= '<th>Name</th>';
    $html .= '<th>Age</th>';
    $html .= '</thead>';
    $html .= '<tbody>';

    foreach ($users as $user) {
        $html .= "<tr><td>{$user['name']}</td><td>{$user['age']}</td></tr>";
    }

    $html .= '</tbody>';
    $html .= '</html>';


    echo $html;
}