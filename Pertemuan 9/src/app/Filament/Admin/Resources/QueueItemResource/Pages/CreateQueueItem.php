<?php

namespace App\Filament\Admin\Resources\QueueItemResource\Pages;

use App\Filament\Admin\Resources\QueueItemResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateQueueItem extends CreateRecord
{
    protected static string $resource = QueueItemResource::class;
}
