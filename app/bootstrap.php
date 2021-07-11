<?php
  // Load Config
  require_once 'config/config.php';
  require_once 'helpers/format.php';
  require_once 'helpers/additional.php';


  // Autoload Core Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/' . $className . '.php';
  });

  
