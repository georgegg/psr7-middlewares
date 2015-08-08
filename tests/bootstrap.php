<?php
error_reporting(E_ALL);

include_once dirname(__DIR__).'/vendor/autoload.php';
include_once __DIR__.'/Base.php';

use Zend\Diactoros\Stream;

Psr7Middlewares\Middleware::setStreamFactory(function ($file, $mode) {
	return new Stream($file, $mode);
});

PHPUnit_Framework_Error_Notice::$enabled = true;
