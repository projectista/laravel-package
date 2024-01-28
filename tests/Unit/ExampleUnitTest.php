<?php

use Projectista\LaravelPackage\HelloWorld;

it('returns hello world', function () {
    $skeleton = new HelloWorld();
    expect($skeleton->getExampleString())->toBe('Hello World!');
});
