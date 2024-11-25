<?php

namespace Conduit\Plugins;

use Conduit\Database\Database;
use Delight\Auth\Auth;

class ConduitUser extends GenericPlugin {

  public Auth $auth;

  public function __construct($router)
  {
    parent::__construct($router);

    $this->auth = new Auth((new Database)->dbObject);
  }

  public function requireLogin() {
    if (!$this->auth->isLoggedIn()) {
      header("Location: ".$this->config['loginPage']);
      die();
    }
  }

  public function login($email, $password, $remember = true): bool {

    $rememberDuration = ($remember) ? (int)(60 * 60 * 24 * 365.25) : null;

    try {
      $this->auth->login($email, $password, $rememberDuration);
      return true;
    }
    catch (\Delight\Auth\InvalidEmailException | \Delight\Auth\InvalidPasswordException $e) {
      return false;
    }

  }

  public function logout(): bool {

    try {
      $this->auth->logOutEverywhere();
      return true;
    }
    catch (\Delight\Auth\NotLoggedInException $e) {
      return false;
    }

  }
}