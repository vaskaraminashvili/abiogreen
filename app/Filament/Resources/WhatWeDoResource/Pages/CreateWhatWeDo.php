<?php

namespace App\Filament\Resources\WhatWeDoResource\Pages;

use App\Filament\Resources\WhatWeDoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateWhatWeDo extends CreateRecord
{
    protected static string $resource = WhatWeDoResource::class;

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
