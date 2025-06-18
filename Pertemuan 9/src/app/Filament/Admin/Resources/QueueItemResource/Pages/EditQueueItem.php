<?php

namespace App\Filament\Admin\Resources\QueueItemResource\Pages;

use App\Filament\Admin\Resources\QueueItemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditQueueItem extends EditRecord
{
    protected static string $resource = QueueItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
