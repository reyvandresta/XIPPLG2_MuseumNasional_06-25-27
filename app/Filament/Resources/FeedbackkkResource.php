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
                    ->label('Email') // Label untuk input
                    ->email() // Validasi agar input sesuai format email
                    ->required(), // Menjadikan input wajib diisi
                Forms\Components\TextInput::make('saran')
                    ->label('masukan')
                    ->required(),
                Forms\Components\TextInput::make('rating')
                    ->label('penilaian')
                    ->numeric() // Hanya mengizinkan angka
                    ->required(), // Menjadikan input wajib diisi
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('dia'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('saran'),
                Tables\Columns\TextColumn::make('rating')
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
