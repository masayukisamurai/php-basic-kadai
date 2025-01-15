<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
<p>
<?php
    $sort_2way = function ($nums, $order) {
        if ($order) {
            echo "昇順にソートします。<br>";
            sort($nums);
        } else {
            echo "降順にソートします。<br>";
            rsort($nums);
        }

        foreach ($nums as $num) {
            echo $num . "<br>";
        }
    };

    function process_sort_function($sortFunction, $nums, $order) {
        echo "関数を引数として受け取りました:<br>";
        $sortFunction($nums, $order);
        echo "処理が完了しました。<br><br>";
    }


    $nums = [15, 4, 18, 23, 10];
    process_sort_function($sort_2way, $nums, true);  // 昇順ソート
    process_sort_function($sort_2way, $nums, false); // 降順ソート
?>
</p>
</body>

</html>
