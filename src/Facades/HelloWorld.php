<?php

namespace Projectista\LaravelPackage\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Projectista\LaravelPackage\HelloWorld
 */
class HelloWorld extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Projectista\LaravelPackage\HelloWorld::class;
    }
}
