<?php

namespace App\Filament\Resources\AbsensiJobsResource\Pages;

use App\Filament\Resources\AbsensiJobsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAbsensiJobs extends ListRecords
{
    protected static string $resource = AbsensiJobsResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         Actions\CreateAction::make(),
    //     ];
    // }
}
