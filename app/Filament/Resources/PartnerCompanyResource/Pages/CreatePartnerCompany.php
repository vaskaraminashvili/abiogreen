<?php

namespace App\Filament\Resources\PartnerCompanyResource\Pages;

use App\Filament\Resources\PartnerCompanyResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePartnerCompany extends CreateRecord
{
    protected static string $resource = PartnerCompanyResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
