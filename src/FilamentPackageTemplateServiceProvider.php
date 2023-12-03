<?php

namespace AuthorTemplate\FilamentPackageTemplate;

use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Assets\Asset;
use Spatie\LaravelPackageTools\Package;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPackageTemplateServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-package-template')
            ->hasConfigFile()
            ->hasTranslations();
        // ->hasRoutes([
        //     __DIR__ . '../routes/web.php'
        // ])
        // ->hasAssets()
        // ->hasViews()
        // ->hasMigrations([
        //     'create_example_table',
        // ])
        // ->hasCommands([
        //     FilamentPackageTemplateCommand::class
        // ])
    }

    public function registeringPackage(): void
    {
        //
    }

    public function packageRegistered(): void
    {
        //
    }

    public function bootingPackage(): void
    {
        //
    }

    public function packageBooted(): void
    {
        // Icon Registration
        FilamentIcon::register([
            //
        ]);

        FilamentAsset::register([
            // AlpineComponent::make('filament-package-template', __DIR__ . '/../resources/dist/components/filament-package-template.js'),
            Css::make('filament-package-template', __DIR__ . '/../resources/dist/filament-package-template.css'),
            Js::make('filament-package-template', __DIR__ . '/../resources/dist/filament-package-template.js'),
        ], package: 'author-template/filament-package-template');
    }
}
