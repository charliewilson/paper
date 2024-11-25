<?php

class Home extends Conduit\Middleware\GenericMiddleware
{
  public static function register($urlParams, $plugins): array
  {

    $auth = $plugins["ConduitUser"];

    $auth->requireLogin();

    return [
        "name" => "Conduit",
        "loggedIn" => $auth->isLoggedIn()
    ];

  }
}
