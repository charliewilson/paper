<?php

class Auth_Logout extends Conduit\Middleware\GenericMiddleware
{
  public static function register($urlParams, $plugins): bool
  {

    $auth = $plugins["ConduitUser"];

    if ($auth->logout()) {
      $auth->redirectToLoginPage("?logout");
      return true;
    } else {
      $auth->redirectToLoginPage("?login");
      return false;
    }

  }
}
