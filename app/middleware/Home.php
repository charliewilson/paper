<?php

class Home extends Conduit\Middleware\GenericMiddleware
{
  public static function register($urlParams, $plugins): array
  {

    return [
        "name" => "Conduit"
    ];

  }
}
