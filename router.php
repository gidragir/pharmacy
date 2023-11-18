<?php
 
 $routes = [];

 function route($action, Closure $callback){
  global $routes;
  $action = trim($action, "/");
  $routes[$action] = $callback;
 }

 function dispatch($action){
  global $routes;
  $info = preg_split('~[/?]~', $action);
  $callback = $routes[$info[1]];

  if (count($info) > 2){
    $params = preg_split('~[&]~', $info[2]);

    $array_params = array();
    foreach ($params as $param) {
      $key_value = preg_split('~[=]~', $param);
      $array_params = array_merge($array_params, array($key_value[0] => $key_value[1]));
    };

    echo call_user_func_array($callback, $array_params);
  }
  else {
    echo call_user_func($callback);
  }

 }

 ?>