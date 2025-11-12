<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Stats extends Model
{
    use HasTranslations;

    protected $fillable = [
        'title',
        'text',
        'status',
        'sort',
    ];

    protected $casts = [
        'status' => 'boolean',
        'sort' => 'integer',
        'title' => 'array',
        'text' => 'array',
    ];

    public $translatable = ['title', 'text'];

    // For the filament-sort-order package
    protected function getSortOrderAttribute(): int
    {
        return (int) $this->sort;
    }

    protected function setSortOrderAttribute(int $value): void
    {
        $this->attributes['sort'] = $value;
    }
}
