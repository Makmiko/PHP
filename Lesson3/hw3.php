<?php
//1.
echo "<h2>1</h2> <br>";
function transmutate(string $str)
{
    return lcfirst(str_replace('_', '', ucwords($str, '_')));
}

echo transmutate('this_is_string'), '<br>';

//2.
echo "<h2>2</h2> <br>";
function getFileName($str)
{
    $start = strrpos($str, '\\');
    $end = strrpos($str, '.');
    return substr($str, $start + 1, $end - $start - 1);
}

echo getFileName('C:\OpenServer\testsite\www\someFile.txt'), '<br>';

//3.
echo "<h2>3</h2> <br>";
function textCompare($text1, $text2)
{
    function smooth($x)
    {
        // return (1 / (1 + 2.718 ** ((-$x)))) * 5;
        return (1 / (1 + 50 ** -$x)) * 5;
    }
    $counter = 0;
    $text1 = explode(' ', $text1);
    $text2 = explode(' ', $text2);
    foreach ($text1 as $str1) {
        foreach ($text2 as $str2) {
            if ($str1 === $str2) {
                $counter++;
            }
        }
    }
    $result = $counter / ((count($text1) + count($text2)) / 2);
    echo "$result, $counter <br>"; //выводим значения промежуточного результата в зависимости от количества текста и количества совпадений в нем
    return round(smooth($result));
    // return (1 + 2.71828182846 ** (-$summary)) ** (-1);
    // return (1 / (1 + 2.71828182846 ** (-$summary))) * 5;
}

echo textCompare(
    'Определите степень совпадения текстов ( придумать алгоритм определения',
    'придумать алгоритм определения соответствия, использовать alfaoweofwpjfj JER jgerg er geg w gw a w5h gw45 h 5h wh w4 5h w4h5 w 4h45h rsth trs htsr h tsrh str h trh  ah tsrh a h tsr h srtb sr h t strh str hsr h srr hth tsrh'
) . "<br>";

//4.
echo "<h2>4</h2> <br>";
function subSumSort($arr)
{
    function sorter($a, $b)
    {
        return $a > $b ? 1 : 0;
    }
    $newArr = [];
    foreach ($arr as $elem) {
        $subSum = 0;
        $id = $elem;
        for ($i = 0; $i < strlen($elem); $i++) {
            $subSum += substr($elem, $i, 1);
            $id = floor($id % 10);
        }
        var_dump($subSum);
        $newArr[$elem] = $subSum;
    }
    uasort($newArr, 'sorter');
    return $newArr;
}
var_dump(subSumSort([13, 55, 100]));

//5.
echo "<h2>5</h2>";
function strFuncApply($str, $func) // --> main func
{
    return $func($str);
}
$upper = function ($str) { // callback (1)
    return strtoupper($str);
};
$lower = function ($str) { // callback (2)
    return strtolower($str);
};
$lowerucwords = function ($str) { // callback (3)
    return ucwords(strtolower($str));
};
// TESTS
var_dump(strFuncApply("ifqijfeijf fijwjjfwe wfeifwijf wefijewfijewf wefijfijew fewijfwe", $upper));
var_dump(strFuncApply("IFQIJFEIJF FIJWJJFWE WFEIFWIJF WEFIJEWFIJEWF WEFIJFIJEW FEWIJFWE", $lower));
var_dump(strFuncApply("IFQIJFEIJF FIJWJJFWE WFEIFWIJF WEFIJEWFIJEWF WEFIJFIJEW FEWIJFWE", $lowerucwords));
