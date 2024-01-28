<?php

use PHPUnit\Framework\TestCase;
use {{ .VendorName | Title | NoWS | Alphanumeric }}\{{ .ProjectName | Title | NoWS | Alphanumeric }}\Tests\FeatureTestCase;

uses(TestCase::class)->in('Arch');
uses(TestCase::class)->in('Unit');
uses(FeatureTestCase::class)->in('Feature');
