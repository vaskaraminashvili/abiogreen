<?php

namespace App\Filament\Resources\InvestorsResource\Pages;

use App\Filament\Resources\InvestorsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvestors extends ListRecords
{
    protected static string $resource = InvestorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
