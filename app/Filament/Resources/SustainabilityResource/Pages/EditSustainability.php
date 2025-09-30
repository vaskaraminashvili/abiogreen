<?php

namespace App\Filament\Resources\SustainabilityResource\Pages;

use App\Filament\Resources\SustainabilityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSustainability extends EditRecord
{
    protected static string $resource = SustainabilityResource::class;

    public function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
