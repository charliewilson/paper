<?php
require_once "Base_RequireLogin.php";

class Home extends Base_RequireLogin
{
  public static function register($urlParams, $plugins): array
  {

    $parentReturn = parent::register($urlParams, $plugins);

    $return = [
        "name" => "Paper"
    ];

    return array_merge($parentReturn, $return);

  }
}
