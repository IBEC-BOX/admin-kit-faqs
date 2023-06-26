<?php

namespace AdminKit\Faqs\UI\Filament\Resources\FaqResource\Pages;

use AdminKit\Faqs\UI\Filament\Resources\FaqResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFaq extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = FaqResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
