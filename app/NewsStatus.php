<?php

namespace App;

use Filament\Support\Contracts\HasLabel;
use Filament\Support\Contracts\HasColor;

enum NewsStatus: string implements HasLabel, HasColor
{
    case ACTIVE = 'active';
    case DRAFT = 'draft';
    case INACTIVE = 'inactive';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ACTIVE => 'Active',
            self::DRAFT => 'Draft',
            self::INACTIVE => 'Inactive',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::ACTIVE => 'success',
            self::DRAFT => 'gray',
            self::INACTIVE => 'danger',
        };
    }
}
