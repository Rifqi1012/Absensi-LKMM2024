<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsensiTuringResource\Pages;
use App\Filament\Resources\AbsensiTuringResource\RelationManagers;
use App\Models\AbsensiTuring;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsensiTuringResource extends Resource
{
    protected static ?string $model = AbsensiTuring::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Absensi - Turing';

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
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListAbsensiTurings::route('/'),
            'create' => Pages\CreateAbsensiTuring::route('/create'),
            'edit' => Pages\EditAbsensiTuring::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Turing');
    }
}
