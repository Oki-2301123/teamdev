<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/stayle.css"><!--css接続 -->
    <title>Document</title>
</head>
<body>
<?php
    require_once 'function.php';
    head();//ヘッダー呼び出し
    $pdo=new PDO('mysql:host=mysql305.phy.lolipop.lan;
                 dbname=LAA1554893-teamdev;
                 charset=utf8', 'LAA1554893', 'teamdev5g');
    foreach($pdo->query('select * from shohin') as $row){
        $shohin_name=$row['shohin_name'];
        $shoohin_tanka=$row['shohin_tanka'];
        $stock=$row['stock'];
        $option=$row['option'];
        $shohin_detail=$row['shohin_detail'];
        $madein=$row['madein'];
        $madecompony=$row['madecompony'];
    }
        ?>
    <form action="admin_top.php" method="post">
        商品名
        <input type="text" name="name" value="<?php echo $shohin_name; ?>"><br>
        単価
        <input type="text" name="tanka" value="<?php echo $shohin_tanka; ?>">円<br>
        在庫<input type="text" name="zaiko" value="<?php echo $stock; ?>">個<br>
        オプション<input type="text" name="op" value="<?php echo $option; ?>"><br>
        商品説明<input type="text" name="setu" value="<?php echo $shohin_detail; ?>"><br>
        産地<input type="text" name="san" value="<?php echo $madein; ?>"><br>
        販売元<input type="text" name="han" value="<?php echo $madecompony; ?>"><br>
        <input type="submit" name="" value="戻る">
        <input type="submit" name="" value="削除">
        <input type="submit" name="" value="更新">
     </form><!--by打田 -->
</body>
</html>