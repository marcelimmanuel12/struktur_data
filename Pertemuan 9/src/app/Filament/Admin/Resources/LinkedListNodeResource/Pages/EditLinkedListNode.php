<?php

namespace App\Filament\Admin\Resources\LinkedListNodeResource\Pages;

use App\Filament\Admin\Resources\LinkedListNodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLinkedListNode extends EditRecord
{
    protected static string $resource = LinkedListNodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
