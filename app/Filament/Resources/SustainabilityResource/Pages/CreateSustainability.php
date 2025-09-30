<?php

namespace App\Filament\Resources\SustainabilityResource\Pages;

use App\Filament\Resources\SustainabilityResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSustainability extends CreateRecord
{
    protected static string $resource = SustainabilityResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
