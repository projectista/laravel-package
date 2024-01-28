<?php

use Projectista\LaravelPackage\Facades\HelloWorld;

it('reads the correct value from config, using the facade', function () {
    $this->assertEquals(
        'Hello World from config!',
        HelloWorld::getExampleConfigValue()
    );
});
