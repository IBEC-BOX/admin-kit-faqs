<?php

namespace AdminKit\Faqs\UI\Filament\Resources\FaqResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Faqs\UI\Filament\Resources\FaqResource;

class ListFaq extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = FaqResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
