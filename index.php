<?php
  // IMPORT BASE CONFIGURATION
  require_once __DIR__ . '/config/settings.php';
  // IMPORT FRAMEWORK CLASSES
  require_once __DIR__ . '/trinity/autoload.php';
  // IMPORT ROUTING CONFIGURATION
  require_once __DIR__ . '/config/router.php';
  return $router->response();
