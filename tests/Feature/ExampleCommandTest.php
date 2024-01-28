<?php

it('can run the hello world command', function () {
    $this->artisan('hello-world')
        ->expectsOutput('Hello World from command!')
        ->assertExitCode(0);
});
