<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\SelectFilter;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('page')
                    ->options([
                        'home' => 'Home',
                        'products' => 'Products',
                        'articles' => 'Articles',
                        'about' => 'About',
                        'contact' => 'Contact',
                    ])
                    ->required(),
                TextInput::make('title')->nullable(),
                TextInput::make('subtitle')->nullable(),
                FileUpload::make('image')
                    ->directory('banners')
                    ->image()
                    ->required(),
                TextInput::make('order')
                    ->numeric()
                    ->default(0)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Banner::query()) // Tambahkan ini untuk memastikan query default
            ->columns([
                TextColumn::make('page')->sortable(),
                ImageColumn::make('image')->label('Banner Image'),
                TextColumn::make('title')->limit(20),
                TextColumn::make('subtitle')->limit(30),
                TextColumn::make('order')->sortable(),
            ])
            ->filters([
                SelectFilter::make('page')
                    ->options([
                        'home' => 'Home',
                        'about' => 'About',
                        'contact' => 'Contact',
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
