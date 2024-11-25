<?php

class Base_RequireLogin extends Conduit\Middleware\GenericMiddleware
{
  public static function register($urlParams, $plugins): array
  {

    $auth = $plugins["ConduitUser"];

    $auth->requireLogin();

    return [
      "user" => [
        "loggedIn" => $auth->isLoggedIn()
      ]
    ];

  }
}
