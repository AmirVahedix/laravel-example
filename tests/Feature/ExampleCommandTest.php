<?php

use AmirVahedix\Example\Commands\ExampleCommand;
use Illuminate\Console\Command;
use function Pest\Laravel\artisan;

it('can output the configured values', function () {
    artisan(ExampleCommand::class)
        ->expectsOutput(config('example.command_output'))
        ->assertExitCode(Command::SUCCESS);
});

it ('can output another configured values', function () {
    config()->set('example.command_output', 'mr. pickles');

    artisan(ExampleCommand::class)
        ->expectsOutput('mr. pickles')
        ->assertExitCode(Command::SUCCESS);
});
