<?php

namespace AmirVahedix\Example;

use AmirVahedix\Example\Commands\ExampleCommand;
use AmirVahedix\Example\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }

    public function packageRegistered()
    {
        Route::get('/my-route', [MyController::class, 'index']);
    }
}
