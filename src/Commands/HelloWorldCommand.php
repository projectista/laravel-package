<?php

namespace Projectista\LaravelPackage\Commands;

use Illuminate\Console\Command;

class HelloWorldCommand extends Command
{
    public $signature = 'hello-world';

    public $description = 'Prints hello world';

    public function handle(): int
    {
        $this->line('Hello World from command!');

        return self::SUCCESS;
    }
}
