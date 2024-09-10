<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryyyResource\Pages;
use App\Filament\Resources\CategoryyyResource\RelationManagers;
use App\Models\Categoryyy;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryyyResource extends Resource
{
    protected static ?string $model = Categoryyy::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';
    
    protected static ?string $modelLabel = 'Post categories';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('slug')->unique(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('slug'),
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
            'index' => Pages\ListCategoryyys::route('/'),
            'create' => Pages\CreateCategoryyy::route('/create'),
            'edit' => Pages\EditCategoryyy::route('/{record}/edit'),
        ];
    }
}
