<?php

namespace AdminKit\Faqs\UI\Filament\Resources\FaqResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use AdminKit\Faqs\UI\Filament\Resources\FaqResource;

class CreateFaq extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = FaqResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
