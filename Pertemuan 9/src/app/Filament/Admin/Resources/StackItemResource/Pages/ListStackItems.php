<?php

namespace App\Filament\Admin\Resources\StackItemResource\Pages;

use App\Filament\Admin\Resources\StackItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStackItems extends ListRecords
{
    protected static string $resource = StackItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
