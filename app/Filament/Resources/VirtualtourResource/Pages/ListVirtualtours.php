<?php

namespace App\Filament\Resources\VirtualtourResource\Pages;

use App\Filament\Resources\VirtualtourResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVirtualtours extends ListRecords
{
    protected static string $resource = VirtualtourResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
