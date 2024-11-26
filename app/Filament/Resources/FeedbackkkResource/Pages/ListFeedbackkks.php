<?php

namespace App\Filament\Resources\FeedbackkkResource\Pages;

use App\Filament\Resources\FeedbackkkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeedbackkks extends ListRecords
{
    protected static string $resource = FeedbackkkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
