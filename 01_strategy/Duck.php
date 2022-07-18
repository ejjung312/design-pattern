<?php
abstract class Duck {
  private $flyBehavior;
  private $quackBehavior;

  public function setFlyBehavior(FlyBehavior $fb) {
    $this->flyBehavior = $fb;
  }

  public function setQuackBehavior(QuackBehavior $qb) {
    $this->quackBehavior = $qb;
  }

  abstract function display();

  public function performFly() {
    $this->flyBehavior->fly();
  }

  public function performQuack() {
    $this->quackBehavior->quack();
  }

  public function swim() {
    echo "All ducks float, even decoys!";
  }
}