<?php

namespace App\Filament\Resources\LabelResource\Pages;

use App\Filament\Resources\LabelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLabel extends EditRecord
{
    protected static string $resource = LabelResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            // Actions\ViewAction::make(),
        ];
    }
}
