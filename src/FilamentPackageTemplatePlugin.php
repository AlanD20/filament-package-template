<?php

namespace AuthorTemplate\FilamentPackageTemplate;

use Filament\Panel;
use Filament\FilamentManager;
use Filament\Contracts\Plugin;

class FilamentPackageTemplatePlugin implements Plugin
{
    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                //
            ])
            ->pages([
                //
            ]);
    }

    public function boot(Panel $panel): void
    {
        //
    }

    public function getId(): string
    {
        return 'filament-package-template';
    }

    public static function filament(): FilamentManager|FilamentPackageTemplatePlugin
    {
        return filament('filament-package-template');
    }

    public static function make(): static
    {
        return new static;
    }
}
