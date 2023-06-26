<?php

declare(strict_types=1);

namespace AdminKit\Faqs\Providers;

use AdminKit\Faqs\UI\Filament\Resources\FaqResource;
use Filament\PluginServiceProvider;

class FilamentServiceProvider extends PluginServiceProvider
{
    public static string $name = 'faqs';

    protected array $resources = [
        FaqResource::class,
    ];
}
