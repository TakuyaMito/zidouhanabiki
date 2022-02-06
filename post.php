<?php require_once('index.php') ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
</head>
<body>
  <h2>確認画面</h2>
  <?php $totalPayment = 0 ?>
  <?php foreach ($menus as $menu): ?>
    <?php
    $orderCount = $_POST[$menu->getName()];
    $menu->setOrderCount($orderCount);
    $totalPayment += $menu->getTotalPrice();
    echo $menu->getName();
    ?>
    <?php echo $orderCount; ?> 本
    <?php echo $menu->getTotalPrice(); ?> 円
    
  <?php endforeach; ?>
  <h2>合計金額: <?php echo $totalPayment ?></h2>
</body>
</html>