<?php

namespace App\Filament\Resources\AbsensiTuringResource\Pages;

use App\Filament\Resources\AbsensiTuringResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbsensiTurings extends ListRecords
{
    protected static string $resource = AbsensiTuringResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
