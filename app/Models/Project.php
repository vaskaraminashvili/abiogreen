<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Project extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'title',
        'description',
        'station_size',
        'status',
        'header_info',
        'key_features',
        'project_objectives',
    ];

    protected $translatable = [
        'title',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
            'title' => 'array',
            'description' => 'array',
            'header_info' => 'array',
            'key_features' => 'array',
            'project_objectives' => 'array',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp']);
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(200)
            ->sharpen(10);
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
}
