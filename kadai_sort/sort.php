<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sort_2way($nums, $order) {
          if ($order) {
            echo "昇順にソートします。<br>";
            sort($nums);
          } else {
            echo "降順にソートします。<br>";
            rsort($nums);
          }
          foreach($nums as $num) {
            echo $num . '<br>';
          }
        }
        // ソートする配列の宣言
        $nums = [15, 4, 18, 23, 10 ];
        //昇順ソート実施
        sort_2way($nums, TRUE);
        //降順ソート実施
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>

