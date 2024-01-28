<?php

namespace {{ .VendorName | Title | NoWS | Alphanumeric }}\{{ .ProjectName | Title | NoWS | Alphanumeric }};

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
