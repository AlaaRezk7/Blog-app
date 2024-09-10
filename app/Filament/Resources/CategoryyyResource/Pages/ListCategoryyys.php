<?php

namespace App\Filament\Resources\CategoryyyResource\Pages;

use App\Filament\Resources\CategoryyyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryyys extends ListRecords
{
    protected static string $resource = CategoryyyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
