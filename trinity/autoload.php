<?php
spl_autoload_register(function($path) {
  $file = dirname(__DIR__) . "/" . str_replace("\\" , "/" , $path ) . '.php';
  if (file_exists($file)) {
    require_once($file);
  }
});
