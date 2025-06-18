<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LinkedListNodeResource\Pages;
use App\Filament\Admin\Resources\LinkedListNodeResource\RelationManagers;
use App\Models\LinkedListNode;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;


class LinkedListNodeResource extends Resource
{
    protected static ?string $model = LinkedListNode::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('value')->required(),
                Select::make('Next_id')
                    ->label('Next Node')
                    ->relationship('next','value')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('value'),
                TextColumn::make('next.value')->label('Next Node'),
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
            'index' => Pages\ListLinkedListNodes::route('/'),
            'create' => Pages\CreateLinkedListNode::route('/create'),
            'edit' => Pages\EditLinkedListNode::route('/{record}/edit'),
        ];
    }
}
