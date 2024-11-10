<?php

namespace App\Filament\Resources\DataPesertaResource\Pages;

use App\Filament\Resources\DataPesertaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDataPeserta extends CreateRecord
{
    protected static string $resource = DataPesertaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
