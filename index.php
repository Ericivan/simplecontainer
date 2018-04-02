<?php


require './vendor/autoload.php';

$container = new \Container\Container();

$container->bind('superman', function (\Container\Container $container, $moduleName) {
    return new \Container\Superman($container->make($moduleName));
});

$container->bind('xpower', function (\Container\Container $container) {
    return new \Container\Abilities\Xpower();
});

$container->bind('ultraboom', function ($container) {
    return new \Container\Abilities\UltraBoom();
});


// ******************  华丽丽的分割线  **********************


$superman1 = $container->make('superman', ['xpower']);

var_dump($superman1);