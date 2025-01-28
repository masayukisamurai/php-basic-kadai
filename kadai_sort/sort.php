<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
<?php
    $sort_2way = function ($array, $order) {
        if ($order) {
            echo "昇順にソートします。<br>";
            sort($array);
        } else {
            echo "降順にソートします。<br>";
            rsort($array);
        }
        foreach ($array as $num) {
            echo $num . "<br>";
        }
    };

    function process_sort_function($sortFunction, $array, $order) {
        $sortFunction($array, $order);
    }

    $nums= [15, 4, 18, 23, 10];
    process_sort_function($sort_2way, $nums, true);
    process_sort_function($sort_2way, $nums, false);
?>
</p>
</body>
</html>
