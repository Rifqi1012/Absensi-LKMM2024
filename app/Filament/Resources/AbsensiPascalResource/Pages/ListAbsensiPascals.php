<?php

namespace App\Filament\Resources\AbsensiPascalResource\Pages;

use App\Filament\Resources\AbsensiPascalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbsensiPascals extends ListRecords
{
    protected static string $resource = AbsensiPascalResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
