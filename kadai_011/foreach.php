<!DOCTYPE html>
<html lang="ja">
<title>PHP基礎編</title>  

<body> 
<p>
  <?php
  $vegetable_data = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

  foreach ($vegetable_data as $key => $vegetables) {
    echo "{$key} : {$vegetables} <br>";
  }
  ?>
</p>
</body>
</html>