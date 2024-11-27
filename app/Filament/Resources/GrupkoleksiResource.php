<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GrupkoleksiResource\Pages;
use App\Filament\Resources\GrupkoleksiResource\RelationManagers;
use App\Models\Grupkoleksi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GrupkoleksiResource extends Resource
{
    protected static ?string $model = Grupkoleksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(255),
            Forms\Components\Select::make('grup')
                ->options([
                    'Artefak' => 'Artefak',
                    'seni' => 'seni',
                    'pusaka' => 'pusaka',
                    'sejarah' => 'sejarah',
                    ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
<<<<<<< HEAD
                Tables\Columns\TextColumn::make('nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('grup')->searchable()->sortable()
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('grup')
                ->options([
                    'Artefak' => 'Artefak',
                    'seni' => 'seni',
                    'pusaka' => 'pusaka',
                    'sejarah' => 'sejarah',
                ]),
=======
                Tables\Columns\TextColumn::make('nama')->label('koleksi'),
                Tables\Columns\TextColumn::make('grup')
            ])
            ->filters([
                //
>>>>>>> 52088ac0f900526e495ae833b6c62ce746836332
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
            'index' => Pages\ListGrupkoleksis::route('/'),
            'create' => Pages\CreateGrupkoleksi::route('/create'),
            'edit' => Pages\EditGrupkoleksi::route('/{record}/edit'),
        ];
    }
}
