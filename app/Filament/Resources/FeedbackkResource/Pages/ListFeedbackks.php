<?php

namespace App\Filament\Resources\FeedbackkResource\Pages;

use App\Filament\Resources\FeedbackkResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeedbackks extends ListRecords
{
    protected static string $resource = FeedbackkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
