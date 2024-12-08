<?php

namespace App\Filament\Resources\VirtualtourResource\Pages;

use App\Filament\Resources\VirtualtourResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVirtualtour extends EditRecord
{
    protected static string $resource = VirtualtourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
