<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Galery;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\GaleryResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\GaleryResource\RelationManagers;
use Filament\Resources\Pages\EditRecord;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class GaleryResource extends Resource
{
    protected static ?string $model = Galery::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $navigationLabel = 'Galeri';
    public static function getPluralLabel(): string
    {
        return 'Daftar Galeri'; // Ganti dengan label jamak yang diinginkan
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nama')
                    ->afterStateHydrated(function (TextInput $component, ?string $state) {
                        if (!empty($state)) {
                            $component->state(ucwords($state));
                        }
                    })
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, ?string $state) {
                        if (!empty($state)) {
                            $set('slug', Str::slug($state));
                        }
                    }),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('description'),
                FileUpload::make('image') // Ganti 'images' dengan nama field yang sesuai
                    ->label('Upload Images')
                    ->required() // Tambahkan ini jika upload wajib
                    ->acceptedFileTypes(['image/jpeg', 'image/png']) // Jenis file yang diterima
                    ->maxSize(2048) // Ukuran maksimum dalam kilobyte (2 MB)
                    ->directory('uploads/images') // Direktori tempat menyimpan file
                    ->preserveFilenames() // Menjaga nama asli file
                    ->helperText('Unggah gambar dalam format JPG atau PNG. Maksimal 2MB per gambar.'),
                TextInput::make('caption')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama'),
                ImageColumn::make('image')->width(100)->height(100),
                TextColumn::make('caption')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListGaleries::route('/'),
            'create' => Pages\CreateGalery::route('/create'),
            'edit' => Pages\EditGalery::route('/{record}/edit'),
        ];
    }
}
