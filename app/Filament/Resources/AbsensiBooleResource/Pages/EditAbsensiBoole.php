<?php

namespace App\Filament\Resources\AbsensiBooleResource\Pages;

use App\Filament\Resources\AbsensiBooleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbsensiBoole extends EditRecord
{
    protected static string $resource = AbsensiBooleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
