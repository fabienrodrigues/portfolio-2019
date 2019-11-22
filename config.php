<?php
date_default_timezone_set('Europe/Paris');

if(!defined('ENVIRONMENT'))
{
    if($_SERVER['HTTP_HOST'] == 'localhost' || $_SERVER['HTTP_HOST'] == 'dev.fabienrodrigues.com' || $_SERVER['HTTP_HOST'] == '192.168.0.16')
        define('ENVIRONMENT', 'LOCAL');
    else
        define('ENVIRONMENT', 'PROD');
}

// Environment
switch(ENVIRONMENT)
{
    case 'LOCAL':
        define('BASE_URL', 'http://dev.fabienrodrigues.com/');
        ; break;
    default:
        define('BASE_URL', 'https://www.fabienrodrigues.com/');
}