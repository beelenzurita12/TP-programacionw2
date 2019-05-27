<?php

require_once __DIR__ . "/../core/routes.php";
require_once __DIR__ . "/../core/controller.php";
require_once __DIR__ . "/../core/view.php";
// require_once(__DIR__ . "/../core/helper/path.php");

$GLOBALS = parse_ini_file(__DIR__ . "/../app/config/config.ini");

$routes = new Routes($_SERVER["REQUEST_URI"]);

$routes->start();