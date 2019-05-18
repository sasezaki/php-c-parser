<?php

require __DIR__ . '/vendor/autoload.php';

$phpsrc = dirname(__DIR__, 2).'/php-src-7.4';

$context = new PHPCParser\Context([
//    '/usr/include/x86_64-linux-gnu/bits', ///usr/include/x86_64-linux-gnu/bits/flt-eval-method.h
    //'/usr/lib/gcc/x86_64-linux-gnu/7.4.0/include', // /usr/lib/gcc/x86_64-linux-gnu/7.4.0/include/stddef.h,
    "{$phpsrc}/main", "{$phpsrc}/Zend", "{$phpsrc}/ext/reflection",
]);

$parser = new PHPCParser\CParser();
$ast = $parser->parse(__DIR__.'/../../php-src-7.4/ext/reflection/php_reflection.c', $context);
var_dump($ast);
