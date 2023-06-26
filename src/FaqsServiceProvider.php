<?php

namespace AdminKit\Faqs;

use AdminKit\Faqs\Commands\FaqsCommand;
use AdminKit\Faqs\Providers\FilamentServiceProvider;
use AdminKit\Faqs\Providers\RouteServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FaqsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-faqs')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_faqs_table')
            ->hasCommand(FaqsCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(FilamentServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
    }
}
