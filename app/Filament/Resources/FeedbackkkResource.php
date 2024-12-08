<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackkkResource\Pages;
use App\Filament\Resources\FeedbackkkResource\RelationManagers;
use App\Models\Feedbackkk;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackkkResource extends Resource
{
    protected static ?string $model = Feedbackkk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('dia')
                    ->required(),
                    Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->required(),
                Forms\Components\TextInput::make('saran')
                    ->label('masukan')
                    ->required(),
                Forms\Components\TextInput::make('rating')
                    ->label('penilaian')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('dia')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('email')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('saran')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('rating')->searchable()->sortable()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeedbackkks::route('/'),
            'create' => Pages\CreateFeedbackkk::route('/create'),
            'edit' => Pages\EditFeedbackkk::route('/{record}/edit'),
        ];
    }
}
