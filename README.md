# conduit-project

**conduit-project** is a barebones project structure for the [Conduit PHP framework](https://github.com/loft39/conduit).

![Version](https://img.shields.io/github/v/tag/charliewilson/conduit?label=version) [![License](http://img.shields.io/:license-mit-blue.svg)](http://badges.mit-license.org)

---

## Installation

### Requirements



- Composer
- Apache2, NGINX, or any other server that features URL rewriting.
- PHP 8.1 or newer
- `PDO` extension for Database support (optional)

The easiest (and recommended) way to get started for local development with Conduit, is using
[**DDEV**](https://ddev.com/). Read more about Docker/DDEV installation
[over at the DDEV docs](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/).

### Installing with Composer

Run `create-project` to create a new local Conduit project in the `HelloWorld` directory:
```shell
composer create-project loft39/conduit-project HelloWorld
```

This will clone the repo and run `composer install` automatically. It'll then run the `ddev config` wizard to set up
your local environment. The defaults are fine (unless you want to specify a different project name), so just press
enter until you see `Configuration complete.`, then move to the project directory and run `ddev start` to start the app.

```shell
cd HelloWorld
ddev start
```
