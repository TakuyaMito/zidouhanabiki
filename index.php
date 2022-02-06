<?php
require_once('./drink.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>自動販売機</title>
</head>
<body>
  <h3>メニュー数:<?php echo Drink::getCount() ?>種類</h3>
  <form action="post.php" method="post">
    <?php foreach ($menus as $menu): ?>
      <h3><?php echo $menu->getName(), $menu->getPrice(); ?></h3>
      <p>注文数: <?php echo $menu->getOrderCount() ?></p>
      <input type="text" value="0" name="<?php echo $menu->getName() ?>">
    <?php endforeach; ?>
    <input type="submit" value="送信する">
  </form>
</body>
</html>