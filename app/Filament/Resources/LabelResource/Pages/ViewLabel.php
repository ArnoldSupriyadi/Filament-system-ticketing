<?php

namespace App\Filament\Resources\LabelResource\Pages;

use App\Filament\Resources\LabelResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewLabel extends ViewRecord
{
    protected static string $resource = LabelResource::class;

    protected function getActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
