<?php

namespace {{ .VendorName | Title | NoWS | Alphanumeric }}\{{ .ProjectName | Title | NoWS | Alphanumeric }}\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Projectista\LaravelPackage\HelloWorld
 */
class HelloWorld extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \{{ .VendorName | Title | NoWS | Alphanumeric }}\{{ .ProjectName | Title | NoWS | Alphanumeric }}\HelloWorld::class;
    }
}
