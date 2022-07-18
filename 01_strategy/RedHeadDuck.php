<?php
class RedHeadDuck extends Duck {
  function __construct() {
    $this->flyBehavior = new FlyWithWings();
    $this->quackBehavor = new Quack();
  }

  public function display() {
    echo "I'm a real Red Headed duck";
  }
}