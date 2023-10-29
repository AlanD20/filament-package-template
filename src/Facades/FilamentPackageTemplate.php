<?php

namespace AuthorTemplate\FilamentPackageTemplate\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AuthorTemplate\FilamentPackageTemplate\FilamentPackageTemplate
 */
class FilamentPackageTemplate extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return \AuthorTemplate\FilamentPackageTemplate\FilamentPackageTemplate::class;
    }
}
