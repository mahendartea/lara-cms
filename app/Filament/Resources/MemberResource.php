<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use App\Models\Member;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\ToggleButtons;
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
                TextInput::make('nik')
                    ->required()
                    ->label('NIK')
                    ->numeric(),
                TextInput::make('name')
                    ->required()
                    ->label('Nama'),
                TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email'),
                TextInput::make('nickname')
                    ->required()
                    ->label('Panggilan'),
                TextInput::make('tempat_lahir')
                    ->label('Tempat Lahir'),
                TextInput::make('tanggal_lahir')
                    ->type('date')
                    ->label('Tanggal Lahir'),
                Radio::make('gender')
                    ->required()
                    ->label('Jenis Kelamin')
                    ->options([
                        'L' => 'Laki-laki',
                        'P' => 'Perempuan',
                    ])
                    ->default('L'),
                TextInput::make('gol_darah')
                    ->label('Golongan Darah'),
                TextInput::make('provinsi')
                    ->label('Provinsi'),
                TextInput::make('kotakab')
                    ->label('Kota'),
                TextInput::make('kecamatan')
                    ->label('Kecamatan'),
                TextInput::make('desa')
                    ->label('Desa'),
                Textarea::make('alamat')
                    ->label('Alamat'),
                Textarea::make('alamat_saat_ini')
                    ->label('Alamat Saat Ini'),
                TextInput::make('lokasi')
                    ->label('Lokasi'),
                TextInput::make('negara')
                    ->label('Negara'),
                Select::make('agama')
                    ->label('Agama')
                    ->options([
                        'islam' => 'Islam',
                        'kristen' => 'Kristen',
                        'katolik' => 'Katolik',
                        'hindu' => 'Hindu',
                        'budha' => 'Budha',
                    ]),
                TextInput::make('pekerjaan')
                    ->label('Pekerjaan'),
                TextInput::make('telp')
                    ->label('Telepon'),
                Forms\Components\FileUpload::make('ktp')
                    ->label('KTP')
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(2048)
                    ->image(),
                Forms\Components\FileUpload::make('foto')
                    ->label('Foto')
                    ->acceptedFileTypes(['image/*'])
                    ->maxSize(2048)
                    ->image(),
                Radio::make('status')
                    ->label('Status')
                    ->options([
                        '1' => 'Aktif',
                        '0' => 'Tidak Aktif',
                    ])
                    ->default('1'),

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
                ImageColumn::make('foto')
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
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make()
                ])
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
            // 'view' => Pages\ViewMember::route('/{record}'),
        ];
    }
}
