<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HistoriesResource\Pages;
use App\Filament\Resources\HistoriesResource\RelationManagers;
use App\Models\Histories;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HistoriesResource extends Resource
{
    protected static ?string $model = Histories::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                ->label('ID')
                ->required(),

                Forms\Components\TextInput::make('email')
                ->label('Email')
                ->email()
                ->required(),

                Forms\Components\Select::make('type')
                ->label('Type')
                ->options([
                    'purchase' => 'Purchase',
                    'refund' => 'Refund',
                    'transfer' => 'Transfer',
                ])
                ->required(),

                Forms\Components\TextInput::make('price')
                ->label('Price')
                ->required(),

                Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'pending' => 'Pending',
                    'completed' => 'Completed',
                    'failed' => 'Failed',
                ])
                ->required(),

                Forms\Components\TextInput::make('paymentMethod')
                ->label('Payment Method')
                ->required(),

                Forms\Components\DatePicker::make('date')
                ->label('Date')
                ->required(),

                Forms\Components\TextInput::make('refNo')
                ->label('Reference Number')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('type')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('paymentMethod')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('date')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('refNo')->sortable()->searchable(),
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
            'index' => Pages\ListHistories::route('/'),
            'create' => Pages\CreateHistories::route('/create'),
            'edit' => Pages\EditHistories::route('/{record}/edit'),
        ];
    }
}
