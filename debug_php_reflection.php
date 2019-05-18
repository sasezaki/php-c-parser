<?php

require __DIR__ . '/vendor/autoload.php';

$phpsrc = dirname(__DIR__, 2).'/php-src-7.4';

$context = new PHPCParser\Context([
    "{$phpsrc}/main", "{$phpsrc}/Zend", "{$phpsrc}/ext/reflection",
]);

$parser = new PHPCParser\CParser();
$ast = $parser->parse(__DIR__.'/../../php-src-7.4/ext/reflection/php_reflection.c', $context);

var_dump($ast);