<?php

namespace App\Filament\Resources\GrupkoleksiResource\Pages;

use App\Filament\Resources\GrupkoleksiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGrupkoleksi extends EditRecord
{
    protected static string $resource = GrupkoleksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
