<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsensiBooleResource\Pages;
use App\Filament\Resources\AbsensiBooleResource\RelationManagers;
use App\Models\AbsensiBoole;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsensiBooleResource extends Resource
{
    protected static ?string $model = AbsensiBoole::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Absensi - Boole';

    protected static ?string $navigationGroup = 'Absensi Peserta';

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
                TextColumn::make('index')
                ->label('No')
                ->rowIndex(),
                TextColumn::make('nim')->searchable()->sortable(),
                TextColumn::make('nama')->searchable()->sortable(),
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
            'index' => Pages\ListAbsensiBooles::route('/'),
            'create' => Pages\CreateAbsensiBoole::route('/create'),
            'edit' => Pages\EditAbsensiBoole::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Boole');
    }
}
