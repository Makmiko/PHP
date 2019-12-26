<?php
//1.
for ($i = 0; $i <= 10; $i++) {
    for ($j = 0; $j <= 10; $j++) {
        echo $i * $j . "    ";
    }
    echo "<br>";
}

//2.
function sport($x, $y)
{
    $counter = 1;
    while ($x < $y) {
        $counter++;
        $x += 0.1 * $x;
    }
    return $counter;
}
var_dump(sport(1, 1.3));
//3.
$counter = 0;
$num = 800;
while ($num >= 50) {
    $counter++;
    $num /= 2;
}
echo $counter . "<br>";

//4.
$book = [
    'title' => 'PHP 7',
    'pageCount' => 342
];
extract($book);
echo "$title : $pageCount<br>";
echo count($book) . "<br>";
/* Функции для массивов: extract, explode, implode, is_array, usort, ksort*/

//5.
$arr = [
    '1' => [
        'price' => 10,
        'count' => 2
    ],
    '2' => [
        'price' => 5,
        'count' => 5
    ],
    '3' => [
        'price' => 8,
        'count' => 5
    ],
    '4' => [
        'price' => 12,
        'count' => 4
    ],
    '5' => [
        'price' => 8,
        'count' => 4
    ],
];

function cmp($a, $b)
{
    if ($a["price"] == $b["price"]) {
        return 0;
    }
    return ($a["price"] < $b["price"]) ? -1 : 1;
}
uasort($arr, "cmp");
var_dump($arr);
