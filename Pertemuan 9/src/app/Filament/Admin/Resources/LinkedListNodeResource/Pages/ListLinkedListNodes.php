<?php

namespace App\Filament\Admin\Resources\LinkedListNodeResource\Pages;

use App\Filament\Admin\Resources\LinkedListNodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLinkedListNodes extends ListRecords
{
    protected static string $resource = LinkedListNodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
