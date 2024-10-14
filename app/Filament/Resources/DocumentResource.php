<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Document;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\DocumentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\DocumentResource\RelationManagers;

class DocumentResource extends Resource
{
    protected static ?string $model = Document::class;

    protected static ?string $navigationIcon = 'heroicon-c-newspaper';
    protected static ?string $navigationGroup = 'Manajemen Konten';
    protected static ?string $navigationLabel = 'Dukumen';
    public static function getPluralLabel(): string
    {
        return 'Daftar Dokumen'; // Ganti dengan label jamak yang diinginkan
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('Title')
                    ->required()
                    ->label('Judul Dokumen')
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
                FileUpload::make('file') // Ganti 'file' dengan nama field yang sesuai
                    ->label('Upload File')
                    ->required() // Tambahkan ini jika file upload wajib
                    ->acceptedFileTypes(['application/pdf']) // Jenis file yang diterima
                    ->maxSize(2048) // Ukuran maksimum dalam kilobyte (2 MB)
                    ->directory('uploads') // Direktori tempat menyimpan file
                    ->preserveFilenames() // Menjaga nama asli file
                    ->openable()
                    ->downloadable()
                    ->helperText('Unggah file dalam format PDF. Maksimal 2MB.'),
                TextInput::make('caption'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('slug'),
                IconColumn::make('file') // Ganti 'file' dengan nama field di model
                    ->label('File')
                    ->icon(fn($record) => match (pathinfo($record->file, PATHINFO_EXTENSION)) {
                        'jpg', 'jpeg', 'png' => 'heroicon-o-photo', // Ikon untuk gambar
                        'pdf' => 'heroicon-o-paper-clip', // Ikon untuk PDF
                        default => 'heroicon-o-document', // Ikon default
                    })
                    ->tooltip(fn($record) => pathinfo($record->file, PATHINFO_BASENAME)), // Menampilkan nama file sebagai tooltip
                TextColumn::make('caption'),
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
            'index' => Pages\ListDocuments::route('/'),
            'create' => Pages\CreateDocument::route('/create'),
            'edit' => Pages\EditDocument::route('/{record}/edit'),
        ];
    }
}
