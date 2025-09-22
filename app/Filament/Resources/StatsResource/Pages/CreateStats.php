<?php

namespace App\Filament\Resources\StatsResource\Pages;

use App\Filament\Resources\StatsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateStats extends CreateRecord
{
    protected static string $resource = StatsResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
