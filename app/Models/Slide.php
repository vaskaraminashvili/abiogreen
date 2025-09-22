<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Translatable\HasTranslations;

class Slide extends Model implements HasMedia
{
    use HasTranslations, InteractsWithMedia;

    protected $fillable = [
        'status',
        'sort',
        'title',
        'description',
        'bottom_title',
        'bottom_description',
    ];

    protected $casts = [
        'status' => 'boolean',
        'sort' => 'integer',
        'title' => 'array',
        'description' => 'array',
        'bottom_title' => 'array',
        'bottom_description' => 'array',
    ];

    public $translatable = ['title', 'description', 'bottom_title', 'bottom_description'];



    protected function getSortOrderAttribute()
    {
        return $this->sort;
    }

    protected function setSortOrderAttribute($value)
    {
        $this->sort = $value;
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('slides')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/webp'])
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
