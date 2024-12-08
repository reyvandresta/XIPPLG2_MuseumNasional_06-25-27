<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VirtualtourResource\Pages;
use App\Filament\Resources\VirtualtourResource\RelationManagers;
use App\Models\Virtualtour;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VirtualtourResource extends Resource
{
    protected static ?string $model = Virtualtour::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
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
                Forms\Components\Textarea::make('link')
                    ->label('link yt')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('link')->searchable()->sortable(),
                Tables\Columns\ImageColumn::make('picture')->searchable()->sortable()
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
            'index' => Pages\ListVirtualtours::route('/'),
            'create' => Pages\CreateVirtualtour::route('/create'),
            'edit' => Pages\EditVirtualtour::route('/{record}/edit'),
        ];
    }
}
