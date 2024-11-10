<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbsensiJobsResource\Pages;
use App\Filament\Resources\AbsensiJobsResource\RelationManagers;
use App\Models\AbsensiJobs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbsensiJobsResource extends Resource
{
    protected static ?string $model = AbsensiJobs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Absensi - Jobs';

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
            'index' => Pages\ListAbsensiJobs::route('/'),
            'create' => Pages\CreateAbsensiJobs::route('/create'),
            'edit' => Pages\EditAbsensiJobs::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('kelompok', 'Jobs');
    }
}
