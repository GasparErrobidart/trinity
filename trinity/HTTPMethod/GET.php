<?php namespace Trinity\HTTPMethod;

use Trinity\HTTPMethod\HTTPMethod as HTTPMethod;
use Trinity\Interfaces\Singleton as Singleton;

class GET extends HTTPMethod implements Singleton{

  private static $instance;
  protected $methodMap = array();

  private function __construct(){
    foreach( $_GET as $key => $value){
      $this->methodMap[$key] = $value;
    }
  }

  static function getInstance(){
    if (!self::$instance instanceof self) {
        self::$instance = new self();
    }

    return self::$instance;
  }

}
