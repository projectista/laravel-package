<?php

namespace Projectista\LaravelPackage;

class HelloWorld
{
    public function getExampleString(): string
    {
        return 'Hello World!';
    }

    public function getExampleConfigValue(): mixed
    {
        return config('skeleton.example');
    }
}
