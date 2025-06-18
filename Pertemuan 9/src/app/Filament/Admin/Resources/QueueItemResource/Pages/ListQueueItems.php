<?php

namespace App\Filament\Admin\Resources\QueueItemResource\Pages;

use App\Filament\Admin\Resources\QueueItemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListQueueItems extends ListRecords
{
    protected static string $resource = QueueItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
