<?php

    // chargement de l'autoloader de composer
    require_once dirname(__DIR__) . "/vendor/autoload.php";

    // chargement 
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();

    $container = require_once __DIR__ . "/dependenciesInjection/container.php";

