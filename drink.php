<?php
class Drink {

  private $name;
  private $price;
  private $orderCount = 0;

  private static $count = 0;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
    self::$count++;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getOrderCount() {
    return $this->orderCount;
  }

  public static function getCount() {
    return self::$count;
  }

  public function setOrderCount($orderCount) {
    $this->orderCount = $orderCount;
  }

  public function hello() {
    echo $this->name;
    echo "\n";
    echo $this->price;
    echo "\n";
  }

  public function getTotalPrice() {
    return $this->price * $this->orderCount;
  }
}

$cola = new Drink('コーラ', 100);
$warter = new Drink('水', 120);
$remon = new Drink('レモン', 80);

$menus = array($cola, $warter, $remon);