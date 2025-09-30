<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Sustainability extends Model implements HasMedia
{
    use HasFactory, HasTranslations, InteractsWithMedia, SoftDeletes;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'status',
    ];

    protected $translatable = [
        'title',
        'short_description',
        'description',
    ];

    protected function casts(): array
    {
        return [
            'status' => 'boolean',
            'title' => 'array',
            'short_description' => 'array',
            'description' => 'array',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('whatWeDo')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif', 'image/webp'])
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(300)
            ->height(200)
            ->sharpen(10);

        $this->addMediaConversion('large')
            ->width(1920)
            ->quality(90);
    }
}
