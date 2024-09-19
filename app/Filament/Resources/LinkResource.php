<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LinkResource\Pages;
use App\Filament\Resources\LinkResource\RelationManagers;
use App\Models\Link;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LinkResource extends Resource
{
    protected static ?string $model = Link::class;

    protected static ?string $navigationIcon = 'heroicon-s-envelope';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // name
                TextInput::make('name')
                    ->required(),
                // link
                TextInput::make('url')
                    ->required(),
                // icon
                IconPicker::make('icon')
                    ->required()
                    ->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // icon
                IconColumn::make('icon')
                    ->icon(fn($state) => $state)
                    ->width('5%'),
                // name
                TextColumn::make('name')
            ])
            ->reorderable('sort')
            ->defaultSort('sort', 'asc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageLinks::route('/'),
        ];
    }
}
