<?php

namespace App\Filament\Resources\InvestorsResource\Pages;

use App\Filament\Resources\InvestorsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvestor extends EditRecord
{
    protected static string $resource = InvestorsResource::class;

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
