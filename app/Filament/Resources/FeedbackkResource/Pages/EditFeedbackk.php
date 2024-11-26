<?php

namespace App\Filament\Resources\FeedbackkResource\Pages;

use App\Filament\Resources\FeedbackkResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeedbackk extends EditRecord
{
    protected static string $resource = FeedbackkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
