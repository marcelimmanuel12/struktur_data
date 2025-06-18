<?php

namespace App\Filament\Admin\Resources\StackItemResource\Pages;

use App\Filament\Admin\Resources\StackItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStackItem extends EditRecord
{
    protected static string $resource = StackItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
