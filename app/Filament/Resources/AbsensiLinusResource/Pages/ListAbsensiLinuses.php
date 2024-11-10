<?php

namespace App\Filament\Resources\AbsensiLinusResource\Pages;

use App\Filament\Resources\AbsensiLinusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbsensiLinuses extends ListRecords
{
    protected static string $resource = AbsensiLinusResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
