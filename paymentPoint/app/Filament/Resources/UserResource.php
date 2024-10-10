<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('identifier')
                ->label('Identifier')
                ->required(),

                Forms\Components\Select::make('provider')
                ->label('Provider')
                ->options([
                    'PDAM' => 'PDAM',
                    'PLN' => 'PLN',
                    'PGN' => 'PGN',
                ])
                ->required(),

                Forms\Components\DatePicker::make('date')
                ->label('Created')
                ->required(),

                Forms\Components\DatePicker::make('signedIn')
                ->label('Signed In')
                ->required(),

                Forms\Components\TextInput::make('userUid')
                ->label('User UID')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('identifier')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('provider')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('signedIn')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('userUid')->sortable()->searchable(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}