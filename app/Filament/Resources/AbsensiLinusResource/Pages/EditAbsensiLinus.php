<?php

namespace App\Filament\Resources\AbsensiLinusResource\Pages;

use App\Filament\Resources\AbsensiLinusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbsensiLinus extends EditRecord
{
    protected static string $resource = AbsensiLinusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
