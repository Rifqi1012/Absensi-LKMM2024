<?php

namespace App\Filament\Resources\DataPesertaResource\Pages;

use App\Filament\Resources\DataPesertaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataPeserta extends EditRecord
{
    protected static string $resource = DataPesertaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
