#!/usr/bin/env php
<?php

error_reporting(E_ALL);
ini_set('html_errors', 'off');

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/Application/Cli.php';

$loader = new ManaPHP\Loader();

$cli = new Application\Cli($loader);

$cli->main();
