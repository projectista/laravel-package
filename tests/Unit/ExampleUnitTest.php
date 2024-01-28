<?php

use {{ .VendorName | Title | NoWS | Alphanumeric }}\{{ .ProjectName | Title | NoWS | Alphanumeric }}\HelloWorld;

it('returns hello world', function () {
    $skeleton = new HelloWorld();
    expect($skeleton->getExampleString())->toBe('Hello World!');
});
