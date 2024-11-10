<?php

namespace App\Filament\Resources\AbsensiBooleResource\Pages;

use App\Filament\Resources\AbsensiBooleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbsensiBooles extends ListRecords
{
    protected static string $resource = AbsensiBooleResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
