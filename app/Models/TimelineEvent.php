<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimelineEvent extends Model
{
    /** @use HasFactory<\Database\Factories\TimelineEventFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'event_date' => 'date',
            'is_active' => 'boolean',
        ];
    }

    protected $fillable = [
        'title',
        'event_date',
        'description',
        'order',
        'is_active',
    ];
}
