<?php
function dd(...$params)
{

  foreach ($params as $param) {
    echo '<pre>';
    var_dump($param);
    echo '</pre>';
  }
  die();
}

?> 