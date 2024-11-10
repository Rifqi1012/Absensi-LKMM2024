<?php

namespace App\Filament\Resources\DataPesertaResource\Pages;

use App\Filament\Resources\DataPesertaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataPesertas extends ListRecords
{
    protected static string $resource = DataPesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \EightyNine\ExcelImport\ExcelImportAction::make()
                ->color("primary")
                ->label('Import '),
            Actions\CreateAction::make(),
        ];
    }
}
