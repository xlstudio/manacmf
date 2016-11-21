<?php

error_reporting(E_ALL);
ini_set('html_errors', 'on');

require dirname(__DIR__).'/vendor/autoload.php';
require dirname(__DIR__).'/Application/Application.php';

$loader = new ManaPHP\Loader();

$application = new Application\Application($loader);

$application->main();
