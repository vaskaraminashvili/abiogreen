<?php

namespace App;

use Filament\Support\Contracts\HasLabel;

enum NewsStatus: string implements HasLabel
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

    public function color(): string
    {
        return match ($this) {
            self::ACTIVE => 'success',
            self::DRAFT => 'warning',
            self::INACTIVE => 'danger',
        };
    }
}
