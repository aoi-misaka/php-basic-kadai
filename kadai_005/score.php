<DOCTYPE html>
<html lang="ja">
<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>
<body>
   <p>
       <?php 
        $aryHoge = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

        $fuga = array_sum($aryHoge) / count($aryHoge);

        echo $fuga;
        ?>

</html>