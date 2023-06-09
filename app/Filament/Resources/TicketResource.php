<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TicketResource\Pages;
use App\Filament\Resources\TicketResource\RelationManagers;
use App\Filament\Resources\TicketResource\RelationManagers\CategoriesRelationManager;
use App\Filament\Resources\TicketResource\RelationManagers\LabelsRelationManager;
use App\Models\Ticket;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\TextInputColumn;


class TicketResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                TextInput::make('title')
                    ->required(),                
                Select::make('priority')
                    ->options(self::$model::PRIORITY)
                    ->required()
                    ->in(self::$model::PRIORITY),
                Select::make('assigned_to')
                    ->relationship('assignedTo', 'name')
                    ->required(),                 
                Textarea::make('description'),
                Textarea::make('comment'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->description(fn (Ticket $record): string => $record?->description ?? ''),
                BadgeColumn::make('status')
                    ->enum(self::$model::STATUS),
                BadgeColumn::make('priority')
                    ->enum(self::$model::PRIORITY),
                TextColumn::make('assignedTo.name'),
                TextColumn::make('assignedBy.name'),
                TextInputColumn::make('comment')
                    
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            CategoriesRelationManager::class,
            LabelsRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTickets::route('/'),
            'create' => Pages\CreateTicket::route('/create'),
            'edit' => Pages\EditTicket::route('/{record}/edit'),
        ];
    }    
}
