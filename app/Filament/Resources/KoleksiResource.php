<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KoleksiResource\Pages;
use App\Models\Koleksi;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class KoleksiResource extends Resource
{
    protected static ?string $model = Koleksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                FileUpload::make('picture')
                    ->label('Upload Gambar')
                    ->image()
                    ->required(),
                Forms\Components\Select::make('content')
                ->options([
                    'ujang mulyadi' => 'ujang mulyadi',
                    'adil rahmat' => 'adil rahmat'
                ])
                ->label('penulis')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('content')->searchable()->sortable(),
                Tables\Columns\ImageColumn::make('picture')->searchable()->sortable()
            ])
            ->filters([])
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKoleksis::route('/'),
            'create' => Pages\CreateKoleksi::route('/create'),
            'edit' => Pages\EditKoleksi::route('/{record}/edit'),
        ];
    }
}
