<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataPesertaResource\Pages;
use App\Filament\Resources\DataPesertaResource\RelationManagers;
use App\Models\DataPeserta;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataPesertaResource extends Resource
{
    protected static ?string $model = DataPeserta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $pluralModelLabel = 'Data Peserta';

    protected static ?string $navigationGroup = 'Data Admin';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Peserta')
                ->schema([
                    TextInput::make('nim')
                    ->required()
                    ->placeholder('Masukkan NIM Peserta'),
                    TextInput::make('nama')
                    ->required()
                    ->placeholder('Masukkan Nama Peserta'),
                    Select::make('kelompok')
                    ->required()
                    ->searchable()
                    ->options([
                        'Pascal' => 'PASCAL',
                        'Boole' => 'BOOLE',
                        'Linus' => 'LINUS',
                        'Turing' => 'TURING',
                        'Jobs' => 'JOBS',
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultPaginationPageOption('20')
            ->columns([
                TextColumn::make('No')->rowIndex(),
                TextColumn::make('nim')->searchable() ->sortable(),
                TextColumn::make('nama')->searchable() ->sortable(),
                TextColumn::make('kelompok')->searchable() ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListDataPesertas::route('/'),
            'create' => Pages\CreateDataPeserta::route('/create'),
            'edit' => Pages\EditDataPeserta::route('/{record}/edit'),
        ];
    }
}
