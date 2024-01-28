<?php

arch('no debugging functions should be used')
    ->expect(['dd', 'dump', 'ray'])
    ->not->toBeUsed();
