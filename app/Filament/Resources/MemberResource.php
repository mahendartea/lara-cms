<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Member;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\MemberResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MemberResource\RelationManagers;

class MemberResource extends Resource
{
    protected static ?string $model = Member::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';
    protected static ?string $navigationGroup = 'Keanggotaan';
    protected static ?string $navigationLabel = 'Pendaftaran';
    public static function getPluralLabel(): string
    {
        return 'Daftar Pendaftar'; // Ganti dengan label jamak yang diinginkan
    }
    public static function canCreate(): bool
    {
        return false;
    }
    //

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
            ->columns([
                TextColumn::make('nik')
                    ->label('NIK')
                    ->sortable(),
                TextColumn::make('name')
                    ->label('Nama')
                    ->sortable(),
                TextColumn::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->sortable()
                    ->dateTime('d-m-y')
                    ->label('Tanggal Lahir'),
                TextColumn::make('gender')
                    ->sortable()
                    ->getStateUsing(fn($record) => $record->gender === 'L' ? 'Laki-laki' : 'Perempuan')
                    ->label('Jenis Kelamin'),
                TextColumn::make('alamat')
                    ->sortable()
                    ->label('Alamat'),
                TextColumn::make('tlp')
                    ->sortable()
                    ->label('No HP'),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->width(100)
                    ->height(100),
                ToggleColumn::make('status')
                    ->label('Status')
                    ->tooltip(fn($record) => $record->status ? 'Aktif' : 'Tidak Aktif')

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                // ...
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
