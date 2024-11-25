<?php

class Auth_Login_POST extends Conduit\Middleware\GenericMiddleware
{
  public static function register($urlParams, $plugins): bool
  {

    $auth = $plugins["ConduitUser"];

    if ($auth->isLoggedIn()) {
      header("Location: /");
    } else {

      $user = $_POST["username"];
      $pass = $_POST["password"];

      if ($auth->login($user, $pass)) {
        header("Location: /");
        return true;
      } else {
        $auth->redirectToLoginPage("?incorrect");
        return false;
      }

    }

  }
}
