<?php

//
// Development environment
//
// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Display all errors
$config['displayErrorDetails'] = true;

$config['db']['host'] = 'localhost';
$config['db']['host'] = 'localhost';
$config['db']['database'] = 'prisma';
$config['db']['database'] = 'prisma';
$config['logger']['level'] = \Monolog\Logger::DEBUG;
$config['assets']['minify'] = 0;
$config['locale']['cache'] = null;
$config['twig']['cache_enabled'] = false;

return $config;
