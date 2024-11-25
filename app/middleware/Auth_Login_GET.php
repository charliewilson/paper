<?php

class Auth_Login_GET extends Conduit\Middleware\GenericMiddleware
{
  public static function register($urlParams, $plugins): array
  {
    $auth = $plugins["ConduitUser"];
    if ($auth->isLoggedIn()) {
      header("Location: /");
    }

    return [];
  }
}
