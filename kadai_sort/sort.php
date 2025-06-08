<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        function sortAndDisplay(array $nums): void {
            // 昇順ソート
            $asc = $nums;
            sort($asc);
            echo "昇順:\n";
            foreach ($asc as $num) {
                echo $num . "\n";
            }
        
            // 降順ソート
            $desc = $nums;
            rsort($desc);
            echo "降順:\n";
            foreach ($desc as $num) {
                echo $num . "\n";
            }
        }
        
        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10];
        sortAndDisplay($nums);
        ?>
        

        <?php
function sort_2way(array $nums, string $order): void {
    if ($order === 'asc') {
        sort($nums); // キーは再構築される（維持しない）
        echo "昇順ソート:\n";
    } elseif ($order === 'desc') {
        rsort($nums); // キーは再構築される（維持しない）
        echo "降順ソート:\n";
    } else {
        echo "無効なソート順です。\n";
        return;
    }

    foreach ($nums as $num) {
       echo $num . "<br>";
    }
}

// 元の配列（添字付き）
$nums = [15, 4, 18, 23, 10];

// 昇順ソート（キーは維持しない）
sort_2way($nums, 'asc');

// 降順ソート（キーは維持しない）
sort_2way($nums, 'desc');
?>


    </p>
    
</body>

</html>