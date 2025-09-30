<?php

namespace App\Filament\Resources\InvestorsResource\Pages;

use App\Filament\Resources\InvestorsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateInvestor extends CreateRecord
{
    protected static string $resource = InvestorsResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
