<?php

namespace App\Filament\Resources\GrupkoleksiResource\Pages;

use App\Filament\Resources\GrupkoleksiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGrupkoleksis extends ListRecords
{
    protected static string $resource = GrupkoleksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
