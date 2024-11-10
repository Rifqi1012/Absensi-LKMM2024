<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsensiLinusResource\Pages;
use App\Filament\Resources\AbsensiLinusResource\RelationManagers;
use App\Models\AbsensiLinus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsensiLinusResource extends Resource
{
    protected static ?string $model = AbsensiLinus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = "Absensi - Linus";

    protected static ?string $navigationGroup = "Absensi Peserta";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->defaultPaginationPageOption('all')
        ->columns([
            TextColumn::make('no')->rowIndex(),
            TextColumn::make('nim')->searchable() ->sortable(),
            TextColumn::make('nama')->searchable() ->sortable(),
            CheckboxColumn::make('day_1'),
            CheckboxColumn::make('day_2'),
            CheckboxColumn::make('day_3'),
            CheckboxColumn::make('day_4'),
            CheckboxColumn::make('day_5'),
            CheckboxColumn::make('day_6'),
            CheckboxColumn::make('day_7'),
            CheckboxColumn::make('day_8'),
            ])
            ->filters([
                //
            ])
            ->actions([
                //
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAbsensiLinuses::route('/'),
            'create' => Pages\CreateAbsensiLinus::route('/create'),
            'edit' => Pages\EditAbsensiLinus::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Linus');
    }
}
